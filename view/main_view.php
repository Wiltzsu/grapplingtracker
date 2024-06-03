<?php 

require_once 'header.php';

// Display errors for debugging (remove or turn off error reporting in a production environment)
error_reporting(E_ALL);
ini_set('display_errors', 1);

/* Check if the user is logged in and then greet them
$username = '';
if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $greeting = "Hello, " . htmlspecialchars($username);
} else {
    header("Location: users/login_page.php");
}*/
?>


<div class="container centered-container">
    <div class="card p-4">
        <h2 class="text-center mb-4">Grappling Technique Journal</h2>
        <p class="text-center"></*?php echo $greeting; */?></p>

        <div class="list-group">
            <a href="/technique-db-mvc/journal" class="list-group-item list-group-item-action">
                <strong>Journal:</strong> View and log your daily practice.
            </a>

            <a href="/technique-db-mvc/addnew" class="list-group-item list-group-item-action">
                <strong>Add:</strong> Add new techniques, categories, and positions.
            </a>

            <a href="/technique-db-mvc/viewitems" class="list-group-item list-group-item-action">
                <strong>View:</strong> View your techniques, categories, and positions.
            </a>

            <a href="/technique-db-mvc/profile" class="list-group-item list-group-item-action">
                <strong>Your Profile:</strong> View and edit your personal information.
            </a>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
