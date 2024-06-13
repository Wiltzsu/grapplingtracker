<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to GrappleTrack</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="/technique-db-mvc/public/css/style.css" rel="stylesheet">
    <style>
        .hero-section {
            background: url('https://images.unsplash.com/photo-1585537884613-1a9bcd024983?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') no-repeat center center;
            background-size: cover;
            color: white;
            padding: 100px 0;
            text-align: center;
        }
        .features {
            margin: 50px 0;
        }
        .feature-item {
            margin-bottom: 20px;
        }
        .cta-buttons {
            margin-top: 30px;
        }
    </style>
</head>
<body>

<div class="hero-section">
    <div class="container">
        <h1>Welcome to Grappling Tracker</h1>
        <p>Your ultimate journal and tracker for grappling techniques.</p>
        <div class="cta-buttons">
            <a href="view/login.php" class="btn btn-primary btn-lg">Login</a>
            <a href="view/register.php" class="btn btn-secondary btn-lg">Sign Up</a>
        </div>
    </div>
</div>

<div class="d-flex justify-content-center align-items-center">
    <div class="container features">
        <h2 class="text-center">Features</h2>
        <div class="row">
            <div class="col-md-4 feature-item text-center">
                <h3>Log Your Practice</h3>
                <p>Keep track of your daily practice sessions and monitor your progress over time.</p>
            </div>
            <div class="col-md-4 feature-item text-center">
                <h3>Add New Techniques</h3>
                <p>Expand your repertoire by adding and categorizing new grappling techniques.</p>
            </div>
            <div class="col-md-4 feature-item text-center">
                <h3>View Techniques</h3>
                <p>Access your techniques library anytime, anywhere, and stay on top of your game.</p>
            </div>
        </div>
    </div>
</div>

<div class="container text-center mt-5">
    <p>&copy; 2024 GrappleTrack. All rights reserved.</p>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
