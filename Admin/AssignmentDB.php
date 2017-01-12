<?php
session_start();
include_once '../classes/dbcon.php';

$course_category = $_REQUEST['course_category'];
$year = $_REQUEST['year'];
$sub_code = $_REQUEST['sub_code'];
$sub_name = $_REQUEST['sub_name'];
$assignment = $_REQUEST['assignment'];

//echo $course_category; 

$sql= "INSERT INTO assignments(course_category,year,sub_code,sub_name,assignment) VALUES('" . $course_category . "','" . $year . "','" .$sub_code. "','". $sub_name."','".$assignment."')";
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
