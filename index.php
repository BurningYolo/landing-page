<?php
define('BASE_DIR', __DIR__); // Define the base directory
include BASE_DIR . '/config/config_variables.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
     <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
     <!-- Flags Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.2.3/css/flag-icons.min.css">
     <!-- Styles.css CSS -->
    <link rel="stylesheet" href="assets/css/styles.css">

    <!-- Google Font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
</head>
<body>
    <?php
    
    include BASE_DIR . '/components/navbar.php'; 
    ?>

    <main>
        <?php
       
        $page = isset($_GET['page']) ? $_GET['page'] : 'home';
        $valid_pages = ['home', 'about', 'contact', 'web', 'mobile', 'seo'];

        if (in_array($page, $valid_pages)) {
            include BASE_DIR . "/pages/$page.php"; 
        } else {
            echo '<h1>404 - Page Not Found</h1>';
        }
        ?>
    </main>

    <?php include BASE_DIR . '/components/footer.php'; // Include footer using BASE_DIR ?>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JavaScript -->
    <script src="assets/js/script.js"></script>
</body>
</html>

