<?php
require_once '../controller/UserController2.php';
require_once '../config/Database.php';

$db = Database::connect();
$controller = new UserController2($db);

$errors = ['username' => '', 'password' => ''];
$input = ['username' => '', 'password' => ''];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input['username'] = $_POST['username'] ?? '';
    $input['password'] = $_POST['password'] ?? '';

    $errors = $controller->authenticate($input['username'], $input['password']);
    if (!array_filter($errors)) { // Checks if errors array is empty
        header("Location: /technique-db-mvc/view/main_view.php");
        exit();
    }
}
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
        <div class="login-container">
            <div class="card p-4">
                <h2 class="text-center mb-4">Login</h2>
                <form method="POST" action="">

                    <div class="form-group<?= !empty($errors['username']) ? ' has-error' : '' ?>">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" value="<?= htmlspecialchars($input['username']) ?>" placeholder="Enter username">
                        <?php if (!empty($errors['username'])): ?>
                            <span class="help-block"><?= htmlspecialchars($errors['username']) ?></span>
                        <?php endif; ?>
                    </div>
                    
                    <div class="form-group<?= !empty($errors['password']) ? ' has-error' : '' ?>">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                        <?php if (!empty($errors['password'])): ?>
                            <span class="help-block"><?= htmlspecialchars($errors['password']) ?></span>
                        <?php endif; ?>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block loginbutton" name="submit">Login</button>
                    <a href="/technique-db-mvc/register"><p>Create an account</p></a>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
