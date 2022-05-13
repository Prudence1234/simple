<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password,'sule.db');

// Check connection
if (!$conn) {
  echo"Connection failed:" ;
}else{
echo "Connected successfully";
}
/*create table users (email varchar(200), password varchar(200));
create table data ( firstname varchar(50),lastname varchar(50), email varchar(100),areacode varchar(200), phone varchar(20), company varchar(30),streetAddress varchar(30), streetAddress2 varchar(30), 
city varchar(30), state varchar(40) ,postalCode varchar(30), country varchar(40));*/