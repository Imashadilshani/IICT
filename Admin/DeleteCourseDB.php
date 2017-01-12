<?php
session_start();
include_once '../classes/dbcon.php';

$id=$_REQUEST['id'];
echo $id;
$sql= "Delete from courses  WHERE id='".$id."'";
//echo $sql;
$result=mysql_query($sql);
//echo $sql;

if(!$result){
   echo "ERROR.";
} else{
   echo "successfully Deleted.";
}


@mysql_close($con);

header("Location:DeleteCourse.php?");

?>

<script type="text/javascript">

opener.location.reload(true);
self.close();
</script>


