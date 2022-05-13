<?php
require 'db.php';
if(isset($_POST['submit'])){
print_r($_POST);
$fstname=$_POST['1stname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$areacode=$_POST['areacode'];
$phone=$_POST['phone'];
$nationality=$_POST['nationality'];
$id=$_POST['id'];
$occupation=$_POST['occupation'];
$location=$_POST['location'];
$block=$_POST['block'];
$house_no=$_POST['house'];


$sql= "insert into data values('$fstname','$lastname','$email','$areacode','$phone','$nationality','$id','$occupation','$location','$block','$house_no')";
mysqli_query($conn,$sql);
header("location:registration.php?success");


}
