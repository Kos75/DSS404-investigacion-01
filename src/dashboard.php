<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Dashboard</title>
</head>
<body>
    <div class='container'>
        <h2>Bienvenido, <?php echo $_SESSION['username']; ?>!</h2>
        <a href="./auth/logout.php">Cerrar Sesión</a>
    </div>
 </body>
 </html>
