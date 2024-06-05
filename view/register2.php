<?php
ini_set('display_errors', 1);
ini_set('log_errors', 1);
error_reporting(E_ALL);

require_once '/opt/lampp/htdocs/technique-db-mvc/config/Database.php';
require_once '/opt/lampp/htdocs/technique-db-mvc/controller/UserRegController.php';

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
    <div class="centered-container">
        <div class="register-container">
            <div class="card p-4">
                <h2 class="text-center mb-4">Register</h2>

                <form method="POST" action="">
                    <div class="form-group<?= !empty($errors['username']) ? ' has-error' : '' ?>">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" value="<?= htmlspecialchars($input['username']) ?>" placeholder="Enter username">
                        <?php if (!empty($errors['username'])): ?>
                            <span class="help-block"><?= htmlspecialchars($errors['username']) ?></span>
                        <?php endif; ?>
                    </div>

                    <div class="form-group<?= !empty($errors['email']) ? ' has-error' : '' ?>">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?= htmlspecialchars($input['email']) ?>" placeholder="Enter email">
                        <?php if (!empty($errors['email'])): ?>
                            <span class="help-block"><?= htmlspecialchars($errors['email']) ?></span>
                        <?php endif; ?>
                    </div>

                    <div class="form-group<?= !empty($errors['password']) ? ' has-error' : '' ?>">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password1" name="password" placeholder="Enter password">
                        <?php if (!empty($errors['password'])): ?>
                            <span class="help-block"><?= htmlspecialchars($errors['password']) ?></span>
                        <?php endif; ?>
                    </div>

                    <div class="form-group<?= !empty($errors['password']) ? ' has-error' : '' ?>">
                        <label for="password">Re-enter password</label>
                        <input type="password" class="form-control" id="password2" name="password_confirm" placeholder="Enter password">
                        <?php if (!empty($errors['password'])): ?>
                            <span class="help-block"><?= htmlspecialchars($errors['password']) ?></span>
                        <?php endif; ?>
                    </div>



                    <button type="submit" name="submit" class="btn btn-primary btn-block">Register</button>
                    <a href="view/login.php"><p>Login</p></a>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
