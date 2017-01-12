<?php
session_start();
include_once '../classes/dbcon.php';

$course_category = $_REQUEST['course_category'];
$year = $_REQUEST['year'];
$sub_code = $_REQUEST['sub_code'];
$sub_name = $_REQUEST['sub_name'];
$credit=$_REQUEST['credit'];

//echo $course_category; 

$sql= "INSERT INTO courses(course_category,year,sub_code,sub_name,credit) VALUES('" . $course_category . "','" . $year . "','" .$sub_code. "','". $sub_name."','".$credit."')";
//echo $sql;
$result=mysql_query($sql);
//echo $sql;

if(!$result){
   echo "ERROR.";
} else{
	echo'<script type="text/javascript">alert("New record added successfully.");</script>';
	//
    }
   //echo "New record added successfully.";

@mysql_close($con);
//header("Location: AddCourse.php");

?>
