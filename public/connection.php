<?php



$servername ="localhost";
$uname ="root";
$password ="";
$dbname ="CT";
$conn =new mysqli($servername,$uname,$password,$dbname);

if(!$conn){
die("connection failed");
}
echo "connected successfully";

?>