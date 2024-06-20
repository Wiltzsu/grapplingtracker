
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
require_once __DIR__ . '/../controller/ReadController.php';
?>

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
    <!-- Row for Total Mat Time -->
    <div class="row">
        <div class="col-md-12 mb-3"> <!-- Change grid size to full width for each card -->
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

    <!-- Row for Techniques Learned -->
    <div class="row">
        <div class="col-md-12 mb-3"> <!-- Change grid size to full width for each card -->
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
    </div>

    <!-- Row for Days at Current Belt Level -->
    <div class="row">
        <div class="col-md-12 mb-3"> <!-- Change grid size to full width for each card -->
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title"><strong>Days at Current Belt Level:</strong></h5>
                    <p class="card-text" id="beltTime">
                        0 days
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<?php require 'footer.php'; ?>
