<?php
require_once 'header.php';
?>

<div class="container centered-container">
    
    <div class="card p-4">
        <h2 class="text-center mb-4">Grappling Technique Journal</h2>
        <p class="text-center"><?php echo $greeting; ?></p>


        <div id="accordion">

        <a href="/technique-db-mvc/" class="btn btn-primary btn1">Back</a>

 

        <?php
        if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {?>
                <div class="text-center mt-3">
            <a href="../users/logout.php" class="btn btn-primary btn1">Logout</a>
        </div><?php
        }?>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
