<?php
$server='localhost';
$Username='root';
$Password='';
$dbname='nijiravi';
$conn=new mysqli('localhost','root','','nijiravi');
if($conn->connect_error) {
    die('Connection Failed:' . $conn->connect_error);
}