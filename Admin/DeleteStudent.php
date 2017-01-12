<?php
session_start();
include_once '../classes/dbcon.php';

$id=$_REQUEST['id'];

$sql= "Delete from student_registration WHERE reg_no='".$id."'";
//echo $sql;
$result=mysql_query($sql);
//echo $sql;

if(!$result){
   echo "ERROR.";
} else{
   echo "successfully Deleted.";
	}


@mysql_close($con);
header("Location:StudentList.php?");

?>

<script type="text/javascript">

opener.location.reload(true);
self.close();
</script>


