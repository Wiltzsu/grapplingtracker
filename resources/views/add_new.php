<?php

if (!isset($_SESSION['username'])) {
    header("Location: login");
    exit();
}

$greeting1 = $_SESSION['username'] ?? 'No user found';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="/technique-db-mvc/public/css/style.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <a class="navbar-brand" href="/technique-db-mvc/mainview">Grappling Tracker</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <img src="/technique-db-mvc/public/img/grapplingtrackertransp.png" width="30" height="30" class="d-inline-block align-top" alt="Menu">
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <!-- Navbar links go here -->
    </div>
    <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="mainview">Journal <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="addnew">Add new</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="viewitems">View items</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="profile">Belt progression</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="profile">Guide</a>
          </li>
        </ul>
      <span class="navbar-text">
      <span class="navbar-text">
      <?php echo $greeting1; ?>
        <?php if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {?>
            <a href="logout" class="btn btn-danger btn1">Logout</a>
        <?php }?>
      </span>
    </div>
</nav>



<div class="container-fluid p-5">
    <div id="accordion">
        <button class="svg-button" onclick="window.location.href='mainview'">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5"/>
        </svg>
        </button>

        <div class="card">
            <div class="card-header journalCardStyle" id="headingOne">
                <h5 class="mb-0">
                    <button class="btn btn-link journalButton" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Add a technique to the database.
                    </button>
                </h5>
            </div>
            <div id="collapseOne" class="collapse<?= $accordionState['collapseOne']; ?>" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    <!-- Technique Form Column -->
                    <form method="POST" action="">
                        <h4>Add a New Technique</h4>
                        
                        <!-- User ID -->
                        <div class="form-group<?= !empty($errors['empty_field']) ? ' has-error' : '' ?>">
                            <input type="hidden" class="form-control" id="userID" name="userID" required value="<?php echo $_SESSION['userID']?>">
                            <?php if (!empty($errors['empty_field'])): ?>
                                <span class="help-block"><?= htmlspecialchars($errors["empty_field"]) ?></span>
                            <?php endif; ?>
                            <?php if (!empty($errors['techniqueExists'])): ?>
                                <span class="help-block"><?= htmlspecialchars($errors["techniqueExists"]) ?></span>
                            <?php endif; ?>
                        </div>

                        <!-- Name -->
                        <div class="form-group<?= !empty($errors['empty_field']) ? ' has-error' : '' ?>">
                            <label for="techniqueName">Technique Name:</label>
                            <input type="text" class="form-control" id="techniqueName" name="techniqueName" required>
                            <?php if (!empty($errors['empty_field'])): ?>
                                <span class="help-block"><?= htmlspecialchars($errors["empty_field"]) ?></span>
                            <?php endif; ?>
                        </div>

                        <!-- Description -->
                        <div class="form-group<?= !empty($errors['empty_field']) ? ' has-error' : '' ?>">
                            <label for="techniqueDescription">Description:</label>
                            <textarea class="form-control" id="techniqueDescription" name="techniqueDescription" required></textarea>
                            <?php if (!empty($errors['empty_field'])): ?>
                                <span class="help-block"><?= htmlspecialchars($errors["empty_field"]) ?></span>
                            <?php endif; ?>
                        </div>

                        <!-- Category -->
                        <div class="form-group<?= !empty($errors['empty_field']) ? ' has-error' : '' ?>">
                            <label for="techniqueCategory">Category:</label>
                            <select class="form-control" id="categoryID" name="categoryID" required>
                                <option value="">Select a Category</option>
                                <?= $categoryOptions; ?>
                                <?php 
$categories = $category->getCategoryIdAndName();
foreach ($categories as $category) : ?>
    <option value="<?= htmlspecialchars($category['categoryID']) ?>">
        <?= htmlspecialchars($category['categoryName']) ?>
    </option>
<?php endforeach ?>
                            </select>
                            <?php if (!empty($errors['empty_field'])): ?>
                                <span class="help-block"><?= htmlspecialchars($errors["empty_field"]) ?></span>
                            <?php endif; ?>
                        </div>

                        <!-- Position -->
                        <div class="form-group<?= !empty($errors['empty_field']) ? ' has-error' : '' ?>">
                            <label for="techniquePosition">Position:</label>
                            <select class="form-control" id="positionID" name="positionID" required>
                                <option value="">Select a Position</option>
                                <?= $positionOptions; ?>
                            </select>
                            <?php if (!empty($errors['empty_field'])): ?>
                                <span class="help-block"><?= htmlspecialchars($errors["empty_field"]) ?></span>
                            <?php endif; ?>
                        </div>

                        <!-- Difficulty -->
                        <div class="form-group<?= !empty($errors['empty_field']) ? ' has-error' : '' ?>">
                            <label for="techniqueDifficulty">Difficulty:</label>
                            <select class="form-control" id="difficultyID" name="difficultyID" required>
                                <option value="">Select a Difficulty</option>
                                <?= $difficultyOptions; ?>
                            </select>
                            <?php if (!empty($errors['empty_field'])): ?>
                                <span class="help-block"><?= htmlspecialchars($errors["empty_field"]) ?></span>
                            <?php endif; ?>
                        </div>

                        <button type="submit" name="submitTechnique" class="btn btn-primary btn2">Add Technique</button>
                    </form>
                </div>
            </div>
        </div>

        <?php
        if (isset($_SESSION['roleID']) && $_SESSION['roleID'] === 1) {
        ?>
        <div class="card">
            <div class="card-header journalCardStyle" id="headingTwo">
                <h5 class="mb-0">
                    <button class="btn btn-link journalButton" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Add a category to the database.
                    </button>
                </h5>
            </div>

            <div id="collapseTwo" class="collapse<?= $accordionState['collapseTwo']; ?>" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">

                    <!-- Category Form Column -->
                    <form method="POST" action="">
                        <h4>Add a New Category</h4>
                        <!-- Category name -->
                        <div class="form-group<?= !empty($errors['empty_field']) ? ' has-error' : '' ?>">
                            <label for="categoryName">Category Name:</label>
                            <input type="text" class="form-control" id="categoryName" name="categoryName" required>
                            <?php if (!empty($errors['empty_field'])): ?>
                                <span class="help-block"><?= htmlspecialchars($errors["empty_field"]) ?></span>
                            <?php endif; ?>
                            <?php if (!empty($errors['categoryExists'])): ?>
                                <span class="help-block"><?= htmlspecialchars($errors["categoryExists"]) ?></span>
                            <?php endif; ?>
                        </div>

                        <!-- Description -->
                        <div class="form-group<?= !empty($errors['empty_field']) ? ' has-error' : '' ?>">
                            <label for="categoryDescription">Description:</label>
                            <textarea class="form-control" id="categoryDescription" name="categoryDescription" required></textarea>
                            <?php if (!empty($errors['empty_field'])): ?>
                                <span class="help-block"><?= htmlspecialchars($errors["empty_field"]) ?></span>
                            <?php endif; ?>
                        </div>

                        <button type="submit" name="submitCategory" class="btn btn-primary btn2">Add Category</button>
                    </form>
                </div>
            </div>
        </div>
        <?php
        }
        ?>

        <?php
        if (isset($_SESSION['roleID']) && $_SESSION['roleID'] === 1) {
        ?>
        <div class="card">
            <div class="card-header journalCardStyle" id="headingThree">
                <h5 class="mb-0">
                    <button class="btn btn-link journalButton" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Add a position to the database.
                    </button>
                </h5>
            </div>

            <div id="collapseThree" class="collapse<?= $accordionState['collapseThree']; ?>" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">

                    <!-- Position Form Column -->
                    <form method="POST" action="" >
                        <!-- Position name -->
                        <h4>Add a New Position</h4>
                        <div class="form-group<?= !empty($errors['empty_field']) ? ' has-error' : '' ?>">
                                <label for="positionName">Position Name:</label>
                                <input type="text" class="form-control" id="positionName" name="positionName" required>
                                <?php if (!empty($errors['empty_field'])): ?>
                                    <span class="help-block"><?= htmlspecialchars($errors["empty_field"]) ?></span>
                                <?php endif; ?>
                                <?php if (!empty($errors['positionExists'])): ?>
                                    <span class="help-block"><?= htmlspecialchars($errors["positionExists"]) ?></span>
                                <?php endif; ?>
                            </div>

                            <!-- Description -->
                            <div class="form-group<?= !empty($errors['empty_field']) ? ' has-error' : '' ?>">
                                <label for="positionDescription">Description:</label>
                                <textarea class="form-control" id="positionDescription" name="positionDescription" required></textarea>
                                <?php if (!empty($errors['empty_field'])): ?>
                                    <span class="help-block"><?= htmlspecialchars($errors["empty_field"]) ?></span>
                                <?php endif; ?>
                            </div>
                        <button type="submit" name="submitPosition" class="btn btn-primary btn2">Add Position</button>
                    </form>
                </div>
            </div>
        </div>
        <?php
        }
        ?>

        <div class="card">
            <div class="card-header journalCardStyle" id="headingFour">
                <h5 class="mb-0">
                    <button class="btn btn-link journalButton" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Add a class to the database.
                    </button>
                </h5>
            </div>

            <div id="collapseFour" class="collapse<?= $accordionState['collapseFour']; ?>" aria-labelledby="headingFour" data-parent="#accordion">
                <div class="card-body">

                    <!-- Training Class Form Column -->
                    <form method="POST" action="" >
                        <!-- User ID -->
                        <div class="form-group<?= !empty($errors['empty_field']) ? ' has-error' : '' ?>">
                            <input type="hidden" class="form-control" id="userID" name="userID" required value="<?php echo $_SESSION['userID']?>">
                            <?php if (!empty($errors['empty_field'])): ?>
                                <span class="help-block"><?= htmlspecialchars($errors["empty_field"]) ?></span>
                            <?php endif; ?>
                        </div>

                        <!-- Instructor name -->
                        <h4>Add a New Training Class</h4>
                            <div class="form-group<?= !empty($errors['empty_field']) ? ' has-error' : '' ?>">
                                <label for="instructor">Instructor:</label>
                                <input type="text" class="form-control" id="instructor" name="instructor" required>
                                <?php if (!empty($errors['empty_field'])): ?>
                                    <span class="help-block"><?= htmlspecialchars($errors["empty_field"]) ?></span>
                                <?php endif; ?>
                            </div>

                            <!-- Location -->
                            <div class="form-group<?= !empty($errors['empty_field']) ? ' has-error' : '' ?>">
                                <label for="location">Location:</label>
                                <input type="textarea" class="form-control" id="location" name="location" required>
                                <?php if (!empty($errors['empty_field'])): ?>
                                    <span class="help-block"><?= htmlspecialchars($errors["empty_field"]) ?></span>
                                <?php endif; ?>
                            </div>

                            <!-- Duration -->
                            <div class="form-group<?= !empty($errors['empty_field']) ? ' has-error' : '' ?>">
                                <label for="duration">Duration (minutes):</label>
                                <input type="number" class="form-control" id="duration" name="duration" required>
                                <?php if (!empty($errors['empty_field'])): ?>
                                    <span class="help-block"><?= htmlspecialchars($errors["empty_field"]) ?></span>
                                <?php endif; ?>
                            </div>

                            <!-- Date -->
                            <div class="form-group<?= !empty($errors['empty_field']) ? ' has-error' : '' ?>">
                                <label for="date">Date:</label>
                                <input type="date" class="form-control" id="date" name="date" required>
                                <?php if (!empty($errors['empty_field'])): ?>
                                    <span class="help-block"><?= htmlspecialchars($errors["empty_field"]) ?></span>
                                <?php endif; ?>
                            </div>

                            <!-- classDescription -->
                            <div class="form-group<?= !empty($errors['empty_field']) ? ' has-error' : '' ?>">
                                <label for="classDescription">Description / type:</label>
                                <textarea class="form-control" id="classDescription" name="classDescription" required></textarea>
                                <?php if (!empty($errors['empty_field'])): ?>
                                    <span class="help-block"><?= htmlspecialchars($errors["empty_field"]) ?></span>
                                <?php endif; ?>
                            </div>
                            


                        <button type="submit" name="submitTrainingClass" class="btn btn-primary btn2">Add Class</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require 'footer.php'; ?>