<?php
require 'index.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

    <div class="signup_form">
    <form  action="signup.func.php" method="post">
    <label>EMAIL</label><br>
    <input class='input' type="email" name="email" required><br>
    <LABEl>PASSWORD</LABEl><br>
    <input class='input' type="text" name="password"required ><br>
    <LABEl> CONFIRM PASSWORD</LABEl><br>
    <input class='input' type="text" name="password2" required><br>
    <button class='button' type='submit' name='send'> SIGNUP</button><br>
    </form>
    <a href='login.php'><button class='button'>LOGIN</button></a>
</div>
</body>
</html>