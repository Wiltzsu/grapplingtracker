<?php
require_once 'header.php';
require_once __DIR__ . '/../controller/AddBeltController.php';
require_once __DIR__ . '/../config/Database.php';
require_once __DIR__ . '/../model/AddBeltOptions.php';
require_once __DIR__ . '/../controller/BeltLevelController.php';

$beltController = new BeltLevelController();
$beltTimes = $beltController->getTimeOnEachBelt();

?>



    <div class="container p-3">

    <div class="row">
    <button class="svg-button" onclick="window.location.href='/technique-db-mvc/mainview'">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5"/>
        </svg>
    </button>
    </div>

        <form method="POST" action="">
            <h4>Select a belt</h4>

            <!-- User ID -->
            <div class="form-group<?= !empty($errors['empty_field']) ? ' has-error' : '' ?>">
                <input type="hidden" class="form-control" id="userID" name="userID" required value="<?php echo $_SESSION['userID']?>">
            </div>

            <!-- Belt color (Dropdown to select belt level) -->
            <div class="form-group">
                <label for="beltID">Belt Level:</label>
                <select class="form-control" id="beltID" name="beltID" required>
                    <option value="">Select a belt level</option>
                    <!-- Dynamically generate belt options here -->
                    <?= $belt_options; ?>
                </select>
            </div>

            <!-- Date -->
            <div class="form-group<?= !empty($errors['empty_field']) ? ' has-error' : '' ?>">
                <label for="date">Date:</label>
                <input type="date" class="form-control" id="graduation_date" name="graduation_date" required>
                <?php if (!empty($errors['empty_field'])): ?>
                    <span class="help-block"><?= htmlspecialchars($errors["empty_field"]) ?></span>
                <?php endif; ?>
            </div>

            <button type="submit" name="submitBeltLevel" class="btn btn-primary btn2">Update Belt Level</button>
        </form>



    </div>

    <div class="container mt-5">
    <h2>Your Belt Progression</h2>
    <div class="row">
        <!-- Belt Progression Texts in separate columns next to each other -->
        <?php foreach ($beltTimes as $beltTime): ?>
            <div class="col-md-3"> <!-- Adjust the column size as needed -->
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title"><strong><?= htmlspecialchars($beltTime['color']); ?> Belt:</strong></h5>
                        <p class="card-text">You have spent <?= htmlspecialchars($beltTime['days_on_belt']); ?> days on this belt level.</p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <!-- Row for the Chart -->
    <div class="row p-5">
        <div class="col-12">
            <canvas id="beltProgressChart"></canvas>
        </div>
    </div>
</div>



</div>

<script>
var beltColors = {
    'White': { background: '#E3E3E3', border: '#BFBFBF' },
    'Blue': { background: '#337AB7', border: '#2E6DA4' },
    'Purple': { background: '#800080', border: '#6A0DAD' },
    'Brown': { background: '#8A6D3B', border: '#795548' },
    'Black': { background: '#000000', border: '#333333' }
};


// Data for the chart
var labels = [<?php foreach ($beltTimes as $beltTime) { echo '"' . htmlspecialchars($beltTime['color']) . '", '; } ?>];
var data = [<?php foreach ($beltTimes as $beltTime) { echo htmlspecialchars($beltTime['days_on_belt']) . ', '; } ?>];
</script>
<script src="/technique-db-mvc/public/js/beltChart.js"></script>
    
<?php require_once 'footer.php'; ?>