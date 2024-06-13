
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

    <?php if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {?>
        <div class="text-center mt-3">
            <a href="view/logout.php" class="btn btn-primary btn1">Logout</a>
        </div>
    <?php }?>
</div>

<?php require 'footer.php'; ?>
