<?php
require_once 'header.php';
require_once __DIR__ . '/../controller/AddBeltController.php';
require_once __DIR__ . '/../config/Database.php';
require_once __DIR__ . '/../model/AddBeltOptions.php';
require_once __DIR__ . '/../controller/BeltLevelController.php';

$beltController = new BeltLevelController();
$beltTimes = $beltController->getTimeOnEachBelt();

?>
<div class="container-fluid p-5">
    <!-- Back to main view button -->
    <button class="svg-button" onclick="window.location.href='/technique-db-mvc/mainview'">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5"/>
        </svg>
    </button>
    
    <div class="container p-5">
        <div class="row">
            <div class="col-sm-12">
                <canvas id="beltProgressChart"></canvas>
                <div id="beltChartData" data-labels='<?= json_encode(array_column($beltTimes, "color")) ?>' data-values='<?= json_encode(array_column($beltTimes, "days_on_belt")) ?>'></div>
                <script src="/technique-db-mvc/public/js/beltChart.js"></script>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <h2>Your Belt Progression</h2>
        <div class="row">
            <!-- Belt Progression Texts in separate columns next to each other -->
            <?php foreach ($beltTimes as $beltTime): ?>
                <div class="col-md-3">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title"><strong><?= htmlspecialchars($beltTime['color']); ?> Belt:</strong></h5>
                            <p class="card-text">You have spent <?= htmlspecialchars($beltTime['days_on_belt']); ?> days at this belt level.</p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="container mt-5">
        <form method="POST" action="">
            <h4>Add a promotion</h4>
            <!-- User ID -->
            <div class="form-group<?= !empty($errors['empty_field']) ? ' has-error' : '' ?>">
                <input type="hidden" class="form-control" id="userID" name="userID" required value="<?php echo $_SESSION['userID']?>">
            </div>
            <!-- Belt color (Dropdown to select belt level) -->
            <div class="form-group">
                <label for="beltID">Belt Level:</label>
                <select class="form-control" id="beltID" name="beltID" required>
                    <option value="">Select belt color</option>
                    <!-- Dynamically generate belt options here -->
                    <?= $belt_options; ?>
                </select>
            </div>
            <!-- Date -->
            <div class="form-group<?= !empty($errors['empty_field']) ? ' has-error' : '' ?>">
                <label for="date">Promotion date:</label>
                <input type="date" class="form-control" id="graduation_date" name="graduation_date" required>
                <?php if (!empty($errors['empty_field'])): ?>
                    <span class="help-block"><?= htmlspecialchars($errors["empty_field"]) ?></span>
                <?php endif; ?>
            </div>
            <button type="submit" name="submitBeltLevel" class="btn btn-primary btn2">Update</button>
        </form>
    </div>
</div>

<?php require_once 'footer.php'; ?>