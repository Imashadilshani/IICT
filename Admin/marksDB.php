<?php
session_start();
include_once '../classes/dbcon.php';

$email = $_POST['email'];
$course_category = $_POST['course_category'];
$year = $_POST['year'];
$sub_code = $_POST['sub_code'];
$sub_name = $_POST['sub_name'];
$marks = $_POST['marks'];

//echo $course_category; 

$sql= "INSERT INTO marks(email,course_category,year,sub_code,sub_name,marks) VALUES('".$email."','" . $course_category . "','" . $year . "','" .$sub_code. "','". $sub_name."','".$marks."')";
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
