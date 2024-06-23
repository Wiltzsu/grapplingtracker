<?php 
// Start the session
session_start();

require_once __DIR__ . '/../controller/BeltLevelController.php';
require_once __DIR__ . '/../model/AddJournalOptions.php';
require_once __DIR__ . '/../controller/AddJournalController.php';
require_once __DIR__ . '/../controller/ReadController.php';
require_once __DIR__ . '/../config/Database.php';
require_once __DIR__ . '/../model/TrainingClass.php';
require_once __DIR__ . '/../model/Technique.php';

// Check if the user is logged in and then greet them
$username = '';
$greeting1 = 'No sessions.';  // Default message if not logged in
if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $greeting1 = "Hello " . htmlspecialchars($username);
} else {
    header("Location: login.php");
}

$userID = '';
$greeting2 = 'No sessions.';  // Default message if not logged in
if (isset($_SESSION['userID']) && !empty($_SESSION['userID'])) {
    $userID = $_SESSION['userID'];
    $greeting2 = htmlspecialchars($userID);
} else {
    header("Location: view/login.php");
}

$roleID = '';
$greeting3 = 'No sessions.';  // Default message if not logged in
if (isset($_SESSION['roleID']) && !empty($_SESSION['roleID'])) {
    $roleID = $_SESSION['roleID'];
    $greeting3 = 'roleid ' . htmlspecialchars($roleID);
} else {
    header("Location: view/login.php");
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
            <a class="nav-link" href="/technique-db-mvc/public/mainview">Journal <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/technique-db-mvc/public/addnew">Add new</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/technique-db-mvc/viewitems">View items</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/technique-db-mvc/profile">Belt progression</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/technique-db-mvc/profile">Guide</a>
          </li>
        </ul>
      <span class="navbar-text">
      <?php echo $greeting1; ?>
        <?php if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {?>

                  <a href="/technique-db-mvc/" class="btn btn-danger btn1">Logout</a>

          <?php }?>
      </span>
    </div>
</nav>