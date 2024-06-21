<?php require_once 'header_front.php'; ?>

<div class="d-flex justify-content-center align-items-center">
    
    <div class="container-fluid features">
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
        
        <h2 class="text-center">Features</h2>

        <div class="row">
            <div class="col-md-6 feature-item text-center">
                <h3>Log Your Practice</h3>
                <p>Keep track of your daily practice sessions and monitor your progress over time.</p>
            </div>
            <div class="col-md-6 feature-item text-center">
                <h3>Log Your Practice</h3>
                <p>Keep track of your daily practice sessions and monitor your progress over time.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 feature-item text-center">
                    <h3>Add New Techniques</h3>
                    <p>Expand your repertoire by adding and categorizing new grappling techniques.</p>
                </div>
                <div class="col-md-6 feature-item text-center">
                    <h3>Add New Techniques</h3>
                    <p>Expand your repertoire by adding and categorizing new grappling techniques.</p>
                </div>
            </div>

        <div class="row">
            <div class="col-md-6 feature-item text-center">
                <h3>View Techniques</h3>
                <p>Access your techniques library anytime, anywhere, and stay on top of your game.</p>
            </div>
            <div class="col-md-6 feature-item text-center">
                <h3>View Techniques</h3>
                <p>Access your techniques library anytime, anywhere, and stay on top of your game.</p>
            </div>
        </div>

        <div class="row align-items-center"> <!-- This ensures vertical centering -->
            <div class="col-md-6 feature-item text-center">
                <h3>Track your belt progression</h3>
                <p>Access your techniques library anytime, anywhere, and stay on top of your game.</p>
            </div>
            <div class="col-md-6 feature-item text-center">
                <img src="/technique-db-mvc/public/img/beltProgression.png" alt="Belt Progression" style="max-width: 100%; height: auto;">
            </div>
        </div>

    </div>
</div>

<?php require_once "footer.php" ?>
