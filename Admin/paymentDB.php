<?php
session_start();
include_once '../classes/dbcon.php';

$email = $_REQUEST['email'];
$course_category = $_REQUEST['course_category'];
$year = $_REQUEST['year'];
$contact = $_REQUEST['contact'];
$amount = $_REQUEST['amount'];


//echo $course_category; 

$sql= "INSERT INTO std_payment(email,course_category,year,contact,amount) VALUES('".$email."','" . $course_category . "','" . $year . "','" .$contact. "','".$amount."')";
//echo $sql;
$result=mysql_query($sql);
//echo $sql;

if(!$result){
   echo "ERROR.";
} else{
   echo "New record added successfully.";
	}

@mysql_close($con);
?>
