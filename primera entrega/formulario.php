<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleform.css">
</head>
<body>
<div class="contenedor">
            <div class="central">
                <div class="caja">
                    <div class="titulo">
                        Login Form
                    </div>
                    <form method="post" action="./db/functions.php" id="loginform">
                        <input class="inputs" type="text" name="usr" placeholder="Usuario" required>
                        <input class="inputs" type="password" placeholder="Contraseña" name="pas" required>
                        <a class="forgot">Forgot Password?</a>
                        <input class="login" type="submit" name="submit" value="submit">
                    </form>
                        <a class="login_with">Or login with</a>
                    <div class="boton">
                        <button class="face">Facebook</button>
                        <button class="insta">Instagram</button>
                    </div>
                    <div class="inferior">
                    <a href="#">Dont have an account? Signup now</a>
                </div>
                </div>
                
                
</body>
</html>