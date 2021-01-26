<?php

// Establishing connection With DataBase
Require 'connection.php';

// Fetching the data from event detail form
$whichTable=mysqli_real_escape_string($con,$_POST['whichTable']);
$eventTitle=mysqli_real_escape_string($con,$_POST['eventTitle']);
$eventTagline=mysqli_real_escape_string($con,$_POST['eventTagline']);
$eventPrize=mysqli_real_escape_string($con,$_POST['eventPrize']);
$eventFee=mysqli_real_escape_string($con,$_POST['eventFee']);
$eventMode=mysqli_real_escape_string($con,$_POST['eventMode']);
$eventDeadline=mysqli_real_escape_string($con,$_POST['eventDeadline']);
$eventLink=mysqli_real_escape_string($con,$_POST['eventLink']);
$eventPriority=mysqli_real_escape_string($con,$_POST['eventPriority']);
$file_name=$_FILES["eventLogo"]["name"];
$temp_name=$_FILES["eventLogo"]["tmp_name"];

// Path Variable for logo upload
$folder="images/logo/".$file_name;

// Moving Uploaded Logo To Its Above Mentioned Path
move_uploaded_file($temp_name,$folder);

$logoPath=$folder;

// Insert Query Variable
$eventDetailquery="INSERT INTO event.$whichTable (title, eventTagline, prize, fee, mode, deadline, eventLink, flag, logoPath) VALUES ('$eventTitle','$eventTagline','$eventPrize','$eventFee','$eventMode','$eventDeadline','$eventLink','$eventPriority','$logoPath')";

// Insert Query Execution
$queryProceed=mysqli_query($con,$eventDetailquery)
or die(mysqli_error($con));

// Redirecting To Event Detail Page With Error Code
header('location:event-detail.php?errorMsg=0');

?>