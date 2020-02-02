<?php
$servername="localhost";
$dbusername="root";
$password="web321";
$database="igdtuw_website";
$UPLOADS_DIR='../uploads/';
$conn = mysqli_connect($servername,$dbusername,$password,$database);
if(!$conn){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}	
?>
