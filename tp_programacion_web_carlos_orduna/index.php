<?php
session_start();

if (!isset($_SESSION["user"])) {
    session_unset();
    session_destroy();
    header("Location: LogIn.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <h1>Bienvenido <?php echo $_SESSION["user"]; ?></h1>
        <a href="proceso.php">Cerra sesion.</a>
    </body>
</html>
