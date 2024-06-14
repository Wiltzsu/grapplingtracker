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
        .hero-section h1,
        .hero-section p {
            text-shadow: 
                -1px -1px 0 #000,  
                 1px -1px 0 #000,
                -1px  1px 0 #000,
                 1px  1px 0 #000; /* creates an outline effect */
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
            <a href="/technique-db-mvc/login" class="btn btn-primary btn-lg">Login</a>
            <a href="/technique-db-mvc/register" class="btn btn-secondary btn-lg">Sign Up</a>
        </div>
    </div>
</div>