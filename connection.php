<?php
$servername="localhost";
$username="root";
$password="";
$dbname="dit";

$conn =mysqli_connect($servername,$username,$password,$dbname);


if(!$conn){
    die("connection failed". connect_error());
}
echo"connected succesfully";