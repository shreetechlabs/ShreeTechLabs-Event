<?php

// linking connection.php to establish connection with database
Require 'connection.php';

// select query variable
$select_query="Select * from event.techcompetition";

// performing search query
$select_query_result=mysqli_query($con,$select_query) or die(mysqli_error($con));

// for counting total no of rows fetched from database
$total_row_tech=mysqli_num_rows($select_query_result);

?>