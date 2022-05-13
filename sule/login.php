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
    <?php
    if(isset($_GET['register'])){
        echo "THE EMAIL USED IS NOT REGISTERED";
    }
    ?>
   
 <div  class='login_form'>
<form action="login.func.php" method="post">
<label>EMAIL</label><br>
<input class='input'type="email" name="email" required><br>
<LABEl>PASSWORD</LABEl><br>
<input class='input' type="text" name="password" ><br>
<button class='button' type='submit' name='submit'> LOGIN</button><br>
</form>
<a href='signup.php'><button class='button'>REGISTER</button></a>
<div>
</body>