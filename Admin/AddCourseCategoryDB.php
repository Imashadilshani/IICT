<?php
session_start();
include_once '../classes/dbcon.php';

$categ_name = $_REQUEST['categ_name'];

//echo $categ_name; 

$sql= "INSERT INTO course_category(categ_name) VALUES('" . $categ_name. "')";
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
