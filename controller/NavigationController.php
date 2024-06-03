<?php

class NavigationController
{
    public function showNavigation()
    {
        /*Session checking logic
        if (!isset($_SESSION['username'])) {
            header("Location: /users/login_page.php");
            exit;
        }*/

        // Load the navigation vie
        echo "Navigation Controller activated"; // Debug statement

        require __DIR__ . '/../Views/navigation.php';
    }
}
