 <?php
$errorUsername = "";
$errorPassword = "";

if (isset($_POST['send'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($_POST['username'])) {
        $errorUsername = "<p>Ingrese nombre de usuario</p>";
    }
    if (isset($_POST['password'])) {
        $errorPassword = "<p>Ingrese su contraseña</p>";
    }

    if (!empty($_POST['username']) && !empty($_POST['password'])) {

        $usuarios = array("Carlos" => "123", "Ana" => "456", "Norberto" => "789", "Chela" => "123");

        foreach ($usuarios as $key => $value) {

            if ($key == $username && $value == $password) {

                $username = $key == $username;

                $username = $_POST['username'];

                session_start();
                $_SESSION["user"] = $username;
                header("Location: index.php");

                break;
            }
            header("Location: formularioRegistro.php");
        }
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Log in</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <h1>Log in</h1>

        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
            <p><label>Nombre de usuario</label></p>
            <p><input type="text" name="username" placeholder="Usuario" value="<?php if (isset($username)) echo $username; ?>"></p>
            <?php echo $errorUsername ?>
            <p><label>contraseña</label></p>
            <p><input type="password" name="password" placeholder="Contraseña" value="<?php if (isset($password)) echo $password; ?>"></p>
            <?php echo $errorPassword ?>
            <p><input type="submit" name="send" value="enviar"></p>
            <p><a href="formularioRegistro.php">¿Eres nuevo en el sitio?</a></p>

        </form>

    </body>



</html>