<?php
require 'db.php';

if(isset($_POST['send'])){
$password=$_POST['password'];
$email=$_POST['email'];

$sql2="select*from users where email='$email'";
$result=mysqli_query($conn,$sql2);
$num=mysqli_num_rows($result);

if($num>0){
    header("location:signup.php?userexist");
}else{
$sql="insert into users values('$email','$password')";
mysqli_query($conn,$sql);
header("location:login.php");


}
}
