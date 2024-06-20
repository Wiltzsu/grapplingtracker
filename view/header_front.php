<?php
require_once 'header_front.php';
require_once __DIR__ . '/../controller/UserController2.php';
require_once __DIR__ . '/../config/Database.php';
require_once '/opt/lampp/htdocs/technique-db-mvc/controller/UserRegController.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Grappling Tracker</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="/technique-db-mvc/public/css/style.css" rel="stylesheet">
    <style>

    </style>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>

<div class="container-fluid hero-section">
    <div class="container">
        <h1>Welcome to Grappling Tracker</h1>
        <p>Your ultimate journal and tracker for grappling techniques.</p>
        <div class="cta-buttons">

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#loginModal">
        Login
        </button>

        <!-- Modal login -->
        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="loginModalLongTitle">Login</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card p-4">
                            <form method="POST" action="">

                                <div class="form-group<?= !empty($errors['username']) ? ' has-error' : '' ?>">
                                    <input type="text" class="form-control" id="username" name="username" value="<?= htmlspecialchars($input['username']) ?>" placeholder="Enter username">
                                    <?php if (!empty($errors['username'])): ?>
                                        <span class="help-block"><?= htmlspecialchars($errors['username']) ?></span>
                                    <?php endif; ?>
                                </div>
                                
                                <div class="form-group<?= !empty($errors['password']) ? ' has-error' : '' ?>">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                                    <?php if (!empty($errors['password'])): ?>
                                        <span class="help-block"><?= htmlspecialchars($errors['password']) ?></span>
                                    <?php endif; ?>
                                </div>

                                <button type="submit" class="btn btn-primary btn-block loginbutton" name="submit">Login</button>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                    ...
                    </div>
                </div>
            </div>
        </div>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-secondary btn-lg" data-toggle="modal" data-target="#registerModal">
        Sign Up
        </button>

        <!-- Modal login -->
        <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="registerModalLongTitle">Sign up</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="card p-4">
                                <form method="POST" action="">
                                    <div class="form-group<?= !empty($errors['username']) ? ' has-error' : '' ?>">
                                        <input type="text" class="form-control" id="username" name="username" value="<?= htmlspecialchars($input['username']) ?>" placeholder="Enter username">
                                        <?php if (!empty($errors['username'])): ?>
                                            <span class="help-block"><?= htmlspecialchars($errors['username']) ?></span>
                                        <?php endif; ?>
                                    </div>

                                    <div class="form-group<?= !empty($errors['email']) ? ' has-error' : '' ?>">
                                        <input type="email" class="form-control" id="email" name="email" value="<?= htmlspecialchars($input['email']) ?>" placeholder="Enter email">
                                        <?php if (!empty($errors['email'])): ?>
                                            <span class="help-block"><?= htmlspecialchars($errors['email']) ?></span>
                                        <?php endif; ?>
                                    </div>

                                    <div class="form-group<?= !empty($errors['password']) ? ' has-error' : '' ?>">
                                        <input type="password" class="form-control" id="password1" name="password" placeholder="Enter password">
                                        <?php if (!empty($errors['password'])): ?>
                                            <span class="help-block"><?= htmlspecialchars($errors['password']) ?></span>
                                        <?php endif; ?>
                                    </div>

                                    <div class="form-group<?= !empty($errors['password']) ? ' has-error' : '' ?>">
                                        <input type="password" class="form-control" id="password2" name="password_confirm" placeholder="Enter password">
                                        <?php if (!empty($errors['password'])): ?>
                                            <span class="help-block"><?= htmlspecialchars($errors['password']) ?></span>
                                        <?php endif; ?>
                                    </div>

                                    <button type="submit" name="submit" class="btn btn-secondary btn-block">Sign up</button>
                                </form>
                            </div>
                        </div>
                        <div class="modal-footer">
                        ...
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
