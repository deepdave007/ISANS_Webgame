<!--this page allows admins to access and add stories to database -->

<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    include './backend/form_processing.php';
    session_start();
?>

<?php echo $_SESSION["finance"]; ?>