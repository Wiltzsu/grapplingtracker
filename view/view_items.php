<?php
/**
 * View that displays techniques, categories and positions.
 * 
 * @package Techniquedbmvc
 * @author  William
 * @license MIT License
 */

require_once "header.php";
require_once __DIR__ . '/../controller/ReadController.php';
require_once __DIR__ . '/../controller/DeleteController.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="/technique-db-mvc/public/css/style.css" rel="stylesheet">
</head>
<body>
<div class="container centered-container">
    
    <div class="card p-4">
        <h2 class="text-center mb-4">Grappling Technique Journal</h2>
        <p class="text-center"><?php echo $greeting1; ?></p>
        <p class="text-center"><?php echo $greeting2; ?></p>

        <div id="accordion">
        <a href="/technique-db-mvc/" class="btn btn-primary btn1">Back</a>
        
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        View your techniques.
                        </button>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">

                    <table class="table table-hover">
                        <thead class="thead-light">
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Category</th>
                                <th>Position</th>
                                <th>Difficulty</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        if (is_array($techniques)) {
                            foreach ($techniques as $technique) {
                                ?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($technique['techniqueName']) ?></td>
                                        <td><?php echo htmlspecialchars($technique['techniqueDescription']) ?></td>
                                        <td><?php echo htmlspecialchars($technique['categoryName']) ?></td>
                                        <td><?php echo htmlspecialchars($technique['positionName']) ?></td>
                                        <td><?php echo htmlspecialchars($technique['difficulty']) ?></td>
                                        <td><button type="button" class="btn" data-toggle="modal" data-target="#modal<?php echo $technique['techniqueID']; ?>">
                                        <img src="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/icons/trash.svg" alt="Delete">
                                    </button></td>
                                    </tr>

                                    <!-- Modal for deletion confirmation -->
                                    <div class="modal fade" id="modal<?php echo $technique['techniqueID']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Confirmation</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure you want to delete the technique "<?php echo htmlspecialchars($technique['techniqueName']); ?>"?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <!-- Form for deletion -->
                                                    <form method="POST" action="">
                                                        <input type="hidden" name="techniqueID" value="<?php echo $technique['techniqueID']; ?>">
                                                        <button type="submit" name="deleteTechnique" class="btn btn-danger">Delete technique</button>
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
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        View your categories.
                        </button>
                    </h5>
                </div>

                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <table class="table table-hover">
                        <thead class="thead-light">
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        if (is_array($categories)) {
                            foreach ($categories as $category) {
                                ?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($category['categoryName']) ?></td>
                                        <td><?php echo htmlspecialchars($category['categoryDescription']) ?></td>
                                        <!-- Only show delete button if user is admin -->
                                        <?php if (isset($_SESSION['roleID']) && $_SESSION['roleID'] === 1) { ?>
                                        <td><button type="button" class="btn" data-toggle="modal" data-target="#modal<?php echo $category['categoryID']; ?>">
                                        <img src="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/icons/trash.svg" alt="Delete"></button></td>
                                        <?php } ?>
                                    </tr>

                                    <!-- Modal for deletion confirmation -->
                                    <div class="modal fade" id="modal<?php echo $category['categoryID']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Confirmation</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure you want to delete the category "<?php echo htmlspecialchars($category['categoryName']); ?>"?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <!-- Form for deletion -->
                                                    <form method="POST" action="">
                                                        <input type="hidden" name="categoryID" value="<?php echo $category['categoryID']; ?>">
                                                        <button type="submit" name="deleteCategory" class="btn btn-danger">Delete category</button>
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
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        View your positions.
                        </button>
                    </h5>
                </div>

                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <table class="table table-hover">
                        <thead class="thead-light">
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        if (is_array($positions)) {
                            foreach ($positions as $position) {
                                ?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($position['positionName']) ?></td>
                                        <td><?php echo htmlspecialchars($position['positionDescription']) ?></td>
                                        <!-- Only show delete button if user is admin -->
                                        <?php if(isset($_SESSION['roleID']) && $_SESSION['roleID'] === 1) {?>
                                        <td><button type="button" class="btn" data-toggle="modal" data-target="#modal<?php echo $position['positionID']; ?>">
                                        <img src="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/icons/trash.svg" alt="Delete"></button></td>
                                        <?php } ?>

                                    </tr>

                                    <!-- Modal for deletion confirmation -->
                                    <div class="modal fade" id="modal<?php echo $position['positionID']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Confirmation</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure you want to delete the position "<?php echo htmlspecialchars($position['positionName']); ?>"?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <!-- Form for deletion -->
                                                    <form method="POST" action="">
                                                        <input type="hidden" name="positionID" value="<?php echo $position['positionID']; ?>">
                                                        <button type="submit" name="deletePosition" class="btn btn-danger">Delete position</button>
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


            <?php if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {?>
                <div class="text-center mt-3">
                    <a href="view/logout.php" class="btn btn-primary btn1">Logout</a>
                </div>
            <?php }?>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
