
<?php
/**
 * This file is the main view once the user is logged in.
 * It contains a simple navigation to navigate  for the
 * user to the different pages.
 * 
 * @package Techniquedbmvc
 * @author  William
 * @license MIT License
 */
require_once 'header.php';

$beltController = new BeltLevelController();
$beltTimes = $beltController->getTimeOnEachBelt();


$db = Database::connect();
$techniqueModel = new Technique($db);
$userID = $_SESSION['userID'];

$totalTechniquesLearnedMonthly = $techniqueModel->countTechniquesMonthly($userID);
$trainingModel = new TrainingClass($db);
$totalMatTimeMonthly = $trainingModel->countMatTimeMonthly($userID);
?>

<div class="container-fluid">
    <div class="row p-5">
        <div class="col-sm-6">


        <div id="accordion">

<button class="svg-button" onclick="window.location.href='/technique-db-mvc/mainview'">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5"/>
    </svg>
</button>

<div class="card">
    <div class="card-header journalCardStyle" id="headingOne">
        <h5 class="mb-0">
            <button class="btn btn-link journalButton" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Log training
            </button>
        </h5>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
        <div class="card-body">

        <!-- Journal Form -->
        <form method="POST" action="">
            <h4>Add a journal note</h4>

            <!-- Technique ID -->
            <div class="form-group">
                <label for="techniqueID">Technique:</label>
                <select class="form-control" id="techniqueID" name="techniqueID" required>
                    <option value="">Select a technique</option>
                    <?= $technique_options; ?>
                </select>
            </div>

            <!-- Class ID -->
            <div class="form-group">
                <label for="classID">Class:</label>
                <select class="form-control" id="classID" name="classID" required>
                    <option value="">Select a class</option>
                    <?= $class_options; ?>
                </select>
            </div>

            <!-- User ID -->
            <div class="form-group<?= !empty($errors['empty_field']) ? ' has-error' : '' ?>">
                <input type="hidden" class="form-control" id="userID" name="userID" required value="<?php echo $_SESSION['userID']?>">
            </div>

            <button type="submit" name="submitTechniqueClass" class="btn btn-secondary btn2">Add to journal</button>
        </form>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header journalCardStyle" id="headingTwo">
        <h5 class="mb-0">
            <button class="btn btn-link journalButton" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            View your training log.
            </button>
        </h5>
    </div>

    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
    <table class="table table-hover">
            <thead class="thead-light">
                <tr>
                    <th>Technique</th>
                    <th>Technique name</th>
                    <th>Instructor</th>
                    <th>Created at</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php
            if (is_array($journal_entries)) {
                foreach ($journal_entries as $journal_entry) {
                    ?>
                        <tr>
                            <td><?php echo htmlspecialchars($journal_entry['techniqueName']) ?></td>
                            <td><?php echo htmlspecialchars($journal_entry['instructor']) ?></td>
                            <td><?php echo htmlspecialchars($journal_entry['journalNoteDate']) ?></td>
                            <!-- Delete button -->
                            <td><button type="button" class="btn" data-toggle="modal" data-target="#modal<?php echo $journal_entry['journalNoteDate']; ?>">
                            <img src="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/icons/trash.svg" alt="Delete"></button></td>
                        </tr>

                        <!-- Modal for deletion confirmation -->
                        <div class="modal fade" id="modal<?php echo $journal_entry['journalNoteDate']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Confirmation</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to delete the entry created at "<?php echo htmlspecialchars($journal_entry['journalNoteDate']); ?>"?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <!-- Form for deletion -->
                                        <form method="POST" action="">
                                            <input type="hidden" name="journalNoteDate" value="<?php echo $journal_entry['journalNoteDate']; ?>">
                                            <button type="submit" name="journalNoteDate" class="btn btn-danger">Delete entry</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                }
            } else {
                echo "No techniques found.";
            }?>
            </tbody>
        </table>
    </div>
</div>

<div class="card">
    <div class="card-header journalCardStyle" id="headingThree">
        <h5 class="mb-0">
            <button class="btn btn-link journalButton" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Quick note
            </button>
        </h5>
    </div>

    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
        <div class="card-body">

        </div>        
    </div>
</div>

</div>

        </div>
        <div class="col-sm-6">
        <canvas id="matTimeChart"></canvas>
        <canvas id="techniquesLearnedChart"></canvas>

        </div>
    </div>
</div>


<script>
    var totalMatTimeData = <?= json_encode($totalMatTimeMonthly) ?>;
</script>
<script src="/technique-db-mvc/public/js/totalMatTime.js"></script>

<script>
    var techniquesLearnedData = <?= json_encode($totalTechniquesLearnedMonthly) ?>;
</script>
<script src="/technique-db-mvc/public/js/techniquesLearned.js"></script>



 <!--
<div class="container centered-container">
    <div class="card p-4">
        <h2 class="text-center mb-4">Grappling Tracker</h2>
        <p class="text-center"><?php echo $greeting1; ?></p>

<div class="card p-4">
    <div class="list-group">
        <a href="/technique-db-mvc/journal" class="list-group-item list-group-item-action">
            <strong>Journal:</strong> View and log your daily practice.
        </a>

        <?php if (isset($_SESSION['roleID']) && $_SESSION['roleID'] === 1) { ?>
        <a href="/technique-db-mvc/addnew" class="list-group-item list-group-item-action">
        <strong>Add:</strong> Add new techniques, positions, categories and classes.</a>
        <?php } ?>

        <?php if (isset($_SESSION['roleID']) && $_SESSION['roleID'] === 2) { ?>
        <a href="/technique-db-mvc/addnew" class="list-group-item list-group-item-action">
        <strong>Add:</strong> Add new techniques and classes.</a>
        <?php } ?>


        <a href="/technique-db-mvc/viewitems" class="list-group-item list-group-item-action">
            <strong>View:</strong> View techniques, categories, and positions.
        </a>

        <a href="/technique-db-mvc/profile" class="list-group-item list-group-item-action">
            <strong>Your Profile:</strong> View and edit your personal information.
        </a>
    </div>


</div>
<div class="container mt-0">
    <div class="row">
        <div class="col-md-12 mb-3"> 
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title"><strong>Total Mat Time:</strong></h5>
                    <p class="card-text" id="matTime">
                        <?php
                        if ($total_mat_time !== false) {
                            echo htmlspecialchars(number_format($total_mat_time, 1)) . ' hours';
                        } else {
                            echo "No data available";
                        }
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12 mb-3"> 
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title"><strong>Techniques Learned:</strong></h5>
                    <p class="card-text" id="techniquesCount">
                        <?php
                        if ($total_techniques !== false) {
                            echo htmlspecialchars(number_format($total_techniques, 0));
                        } else {
                            echo "No data available";
                        }
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>-->
 
<?php require 'footer.php'; ?>
