<?php

require_once 'header_front.php';
require_once '/opt/lampp/htdocs/technique-db-mvc/config/Database.php';
require_once '/opt/lampp/htdocs/technique-db-mvc/controller/UserRegController.php';

?>
    <div class="centered-container">
        <div class="register-container">
            <div class="card p-4">
                <h2 class="text-center mb-4">Sign up</h2>

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
                    <a href="login"><p>Login</p></a>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
