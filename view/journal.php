<?php
require_once 'header.php';
?>

<div id="accordion">
    <a href="/technique-db-mvc/" class="btn btn-primary btn1">Back</a>

    <div class="card">
        <div class="card-header" id="headingOne">
            <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Log training
                </button>
            </h5>
        </div>

        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">

            <!-- Journal Form -->
            <form action="" method="POST">
                <h4>Add a journal note</h4>

                <!-- Technique ID -->
                <div class="form-group">
                    <label for="techniqueID">Technique:</label>
                    <select class="form-control" id="techniqueID" name="techniqueID" required>
                        <option value="">Select a technique</option>
                        <?= $techniqueOptions; ?>
                    </select>
                </div>

                <!-- Class ID -->
                <div class="form-group">
                    <label for="classID">Class:</label>
                    <select class="form-control" id="classID" name="classID" required>
                        <option value="">Select a class</option>
                        <?= $classOptions; ?>
                    </select>
                </div>

                <button type="submit" name="submitTechniqueClass" class="btn btn-secondary btn2">Add to journal</button>
            </form>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                View your log
                </button>
            </h5>
        </div>

        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">


            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header" id="headingThree">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Quick note
                </button>
            </h5>
        </div>

        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">

            </div>        
        </div>
    </div>


    <?php if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {?>
        <div class="text-center mt-3">
            <a href="view/logout.php" class="btn btn-primary btn1">Logout</a>
        </div>
    <?php }?>
</div>

<?php require_once 'footer.php'; ?>
