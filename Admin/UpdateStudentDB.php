<?php
session_start();
include_once '../classes/dbcon.php';

$reg_no=$_REQUEST['reg_no'];
$year = $_REQUEST['year'];
$course_category = $_REQUEST['course_category'];

//echo $year;

$sql= "UPDATE student_registration SET year='".$year."', course_category='".$course_category."' WHERE  reg_no='".$reg_no."'";

//echo $sql;
$result=mysql_query($sql);
//echo $sql;

if(!$result){
   echo "ERROR.";
} else{
   echo "successfully updated.";
	}


@mysql_close($con);

//header("Location:CourseList.php?");

?>

<script type="text/javascript">

opener.location.reload(true);
self.close();
</script>


