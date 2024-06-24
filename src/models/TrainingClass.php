<?php
class TrainingClass
{
    private $db;
    private $userID;
    private $instructor;
    private $location;
    private $duration;
    private $classDate;
    private $classDescription;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    public function addTrainingClass(
        $userID,
        $instructor,
        $location,
        $duration,
        $classDate,
        $classDescription)
    {
        $this->userID = $userID;
        $this->instructor = $instructor;
        $this->location = $location;
        $this->duration = $duration;
        $this->classDate = $classDate;
        $this->classDescription = $classDescription;

        $query = "INSERT INTO Class (
            userID, instructor, location, classDuration, classDate, classDescription
        ) VALUES (
            :userID, :instructor, :location, :classDuration, :classDate, :classDescription
        )";

        $statement = $this->db->prepare($query);
        $statement->bindParam(
            ":userID",
            $this->userID, PDO::PARAM_INT
        );
        $statement->bindParam(
            ":instructor",
            $this->instructor, PDO::PARAM_STR
        );
        $statement->bindParam(
            ":location",
            $this->location, PDO::PARAM_STR
        );
        $statement->bindParam(
            ":classDuration",
            $this->duration, PDO::PARAM_INT
        );
        $statement->bindParam(
            ":classDate",
            $this->classDate, PDO::PARAM_STR
        );
        $statement->bindParam(
            ":classDescription",
            $this->classDescription, PDO::PARAM_STR
        );
        $statement->execute();
        return [];
    }

    public function getTrainingClasses()
    {
        $stmt = $this->db->prepare("SELECT * FROM Class");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);


    }

    public function deleteTrainingClass()
    {
        if (isset($_POST['classID'])) {
            if (isset($_POST['deleteTrainingClass'])) {
                // Assign the 'classID' value from the form to a variable
                $classID = $_POST['classID'];

                $query = "DELETE FROM Class WHERE classID=:classID";

                $delete = $this->db->prepare($query);

                $delete->bindValue(':classID', $classID, PDO::PARAM_INT);

                $delete->execute();
                header("Location: viewitems");
                exit();
            }
        }
    }

    public function countMatTime($userID)
    {
        $userID = $_SESSION['userID'];

        $query = "SELECT SUM(classDuration)/60.0 AS totalDurationInHours
                  FROM Class
                  WHERE userID = :userID";

        $statement = $this->db->prepare($query);
        $statement->bindParam(':userID', $userID,PDO::PARAM_INT);

        $statement->execute();

        // Fetching only the first column from the result, which should be the sum of classDuration
        $total_mat_time = $statement->fetchColumn();

        return $total_mat_time;
    }

    public function countMatTimeMonthly($userID) 
    {
        $query = "SELECT MONTH(classDate) as month, SUM(classDuration)/60.0 AS hours
                  FROM Class
                  WHERE userID = :userID AND YEAR(classDate) = YEAR(CURDATE())
                  GROUP BY MONTH(classDate)
                  ORDER BY MONTH(classDate)";

        $statement = $this->db->prepare($query);
        $statement->bindParam(':userID', $userID, PDO::PARAM_INT);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}
