<?php
$errorUsername = "";
$errorEmail = "";
$mailInvalido = "";
$errorPassword = "";
$errorConfirmPassword = "";
if (isset($_POST['send'])) {

    $newUsername = $_POST['newUsername'];
    $email = $_POST['email'];
    $newPassword = $_POST['newPassword'];
    $confirmPassword = $_POST['confirmPassword'];

    if (empty($_POST['newUsername'])) {
        $errorUsername = "<p>Ingrese nombre de usuario</p>";
    }
    if (empty($_POST['email'])) {
        $errorEmail = "<p>Ingrese un mail</p>";

        if (filter_var(null, FILTER_VALIDATE_EMAIL)) {
            $mailInvalido = "<p>Ingrese un mail valido</p>";
        }
    }
    if (empty($_POST['newPasseord'])) {
        $errorPassword = "<p>Ingrese una contraseña</p>";
    }
    if (empty($_POST['confirmPasseord'])) {
        $errorConfirmPassword = "<p>Vuelva a ingresar una contraseña</p>";
    }
    if (!empty($_POST['newUsername']) && !empty($_POST['email']) && !empty($_POST['newPassword']) && !empty($_POST['confirmPassword'])) {

        if ($newPassword == $confirmPassword) {

            $usuarios = array("Carlos" => "123", "Ana" => "456", "Norberto" => "789", "Chela" => "123", $newUsername => $newPassword);

            session_start();
            $_SESSION["user"] = $newUsername;
            header('Location: index.php');
        } else {
            echo "Anda a la cancha bobo <br>";
        }
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulario registro</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <h1>Formulario registro</h1>

        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
            <p><label>Nombre de usuario</label></p>
            <p><input type="text" name="newUsername" value="<?php if (isset($newUsername)) echo $newUsername; ?>" placeholder="Nombre de usuario" ></p>
            <?php echo $errorUsername; ?>
            <p><label>Correo electronico</label></p>
            <p><input type="email" name="email" value="<?php if (isset($email)) echo $email; ?>" placeholder="eso@tilin.com"></p>
            <?php echo $errorEmail; ?>
            <p><label>Contraseña</label></p>
            <p><input type="password" name="newPassword" value="<?php if (isset($newPassword)) echo $newPassword; ?>" placeholder="Ingrese una clave" ></p>
            <?php echo $errorPassword; ?>
            <p><label>Confirme contraseña</label></p>
            <p><input type="password" name="confirmPassword" value="<?php if (isset($confirmPassword)) echo $confirmPassword; ?>" placeholder="Vuelva a ingresar su clave" ></p>
            <?php echo $errorConfirmPassword; ?>
            <p><input type="submit" name="send" value="enviar"><br></p>
        </form>

    </body>
</html>
