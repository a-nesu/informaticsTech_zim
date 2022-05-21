<?php
$server= "localhost";
$username="root";
$password="";
$database="feedback";

$conn= mysqli_connect($server,$username,$password,$database);


if(!$conn){
    die("<script>alert('connection failed')</script>");
}




?>