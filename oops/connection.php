<?php
$serverName="localhost";
$userName="root";
$password='';
$database="oops";
$conn=mysqli_connect($serverName,$userName,$password,$database);
// check connection
if(!$conn){
echo "connection failed";
}
else{
    // echo"connect sucessfully";
}
?>