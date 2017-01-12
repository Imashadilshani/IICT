<?php
session_start();

//Including Files 
include_once '../classes/dbcon.php';

//set validation error flag as false
//$error = false;

//check if form is submitted
    $subject = $_POST['subject'];
    $message = $_POST['message'];

//$sql= mysql_query("INSERT INTO messages(email,subject,message) VALUES('" . $email . "','" . $subject . "','" . $message . "')");
$sql= "INSERT INTO messages(subject,message) VALUES('" . $subject . "','" . $message . "')";
//echo $sql;
$result=mysql_query($sql);

if(!$result){
   echo "ERROR.";
} else{
   echo "New record added successfully.";
	}

@mysql_close($con);
?>
