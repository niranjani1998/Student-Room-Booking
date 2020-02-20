<?php

$Name1=isset($_POST['Name1']);
$Phone=isset($_POST['Phone']);
$Email=isset($_POST['Email']);
$Address=isset($_POST['Address']);
$Department=isset($_POST['Department']);
$Batch=isset($_POST['Batch']);
$Year1=isset($_POST['Year1']);
$ParentName=isset($_POST['ParentName']);
$ParentNumber=isset($_POST['ParentNumber']);
$conn=new mysqli('localhost','root','','nijiravi');
if($conn->connect_error)
{
    die('Connection Failed:'.$conn->connect_error);
}
else
{
    $sql=mysqli_query($conn,"insert into users(Name1,Phone,Email,,Address,Department,Batch,Year1,ParentName,ParentNumber,Password) values('$Name1','$Phone','$Email','$Address','$Department','$Batch','$Year1','$ParentName','$ParentNumber','$Password')");
    $stmt=$conn->prepare($sql);
    $stmt->bind_param('sisssiisi',$Name1,$Phone,$Email,$Address,$Department,$Batch,$Year1,$ParentName,$ParentNumber);
	$stmt->execute();
    $message = 'Registration Successful!!!';
    echo "<script type='text/javascript'>alert('$message');</script>";
	$stmt->close();
	$conn->close();


  }
