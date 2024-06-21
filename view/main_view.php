
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
                                    <th>Technique name</th>
                                    <th>Instructor</th>
                                    <th>Created at</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            if (is_array($journal_entries)) 
                            {
                                foreach ($journal_entries as $journal_entry) 
                                {
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

 
<?php require 'footer.php'; ?>
