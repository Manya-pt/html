<?php
$host="localhost";
$user="root";
$password="";
$database="platform";
$connection=mysqli_connect($host,$user,$password,$database);
if($connection){
echo"successfully connected";
}
else{
die("could not connect");
}

$sqli="INSERT INTO stations(name,phoneno,emailid,address)VALUES('bathu',8967,'bathu@gmail.com','kozhikode')";
mysqli_query($connection,$sqli);
mysqli_close($connection);


