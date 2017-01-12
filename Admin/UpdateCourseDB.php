<?php
session_start();
include_once '../classes/dbcon.php';

$id=$_REQUEST['id'];
$course_category = $_REQUEST['course_category'];
$year = $_REQUEST['year'];
$sub_code = $_REQUEST['sub_code'];
$sub_name = $_REQUEST['sub_name'];

//echo $year;

$sql= "UPDATE courses SET course_category='".$course_category."',year='".$year."',sub_code='".$sub_code."',sub_name= '".$sub_name."' WHERE  id='".$id."'";
//echo $sql;
$result=mysql_query($sql);
//echo $sql;

if(!$result){
   echo "ERROR.";
} else{
   echo "successfully updated.";
	}


@mysql_close($con);


?>

<script type="text/javascript">

opener.location.reload(true);
self.close();
</script>


