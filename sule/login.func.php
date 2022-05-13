<?php
require 'db.php';

if(isset($_POST['submit'])){
$password=$_POST['password'];
$email=$_POST['email'];

$sql2="select*from users where email='$email'";
$result=mysqli_query($conn,$sql2);

$num=mysqli_num_rows($result);

if($num>0){
    session_start();
    if($row=mysqli_fetch_assoc($result)){
    $_SESSION['email']=$row['email']; 
    header("location:registration.php");}

}
else{

header("location:login.php?register");


}
}
