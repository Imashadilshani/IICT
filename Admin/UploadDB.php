<?php
include_once '../classes/dbcon.php';
if(isset($_POST['upload']))
{
$username=$_POST['username'];
$email=$_POST['email'];
$course_category=$_POST['course_category'];
$year = $_POST['year'];
$fileName = $_FILES['userfile']['name'];
$tmpName  = $_FILES['userfile']['tmp_name'];
$fileSize = $_FILES['userfile']['size'];
$fileType = $_FILES['userfile']['type'];

$fp      = fopen($tmpName, 'r');
$content = fread($fp, filesize($tmpName));
$content = addslashes($content);
fclose($fp);

if(!get_magic_quotes_gpc())
{
    $fileName = addslashes($fileName);
}
//include 'library/config.php';
//include 'library/opendb.php';


//$query = "INSERT INTO upload (course_category,year,sub_name,name, size, content ) VALUES ('".$course_category."','".$year."','".$sub_name."','$fileName', '$fileSize', '$content')";

//mysql_query($query) or die('Error, query failed'); 
//include 'library/closedb.php';

//echo "<br>File $fileName uploaded<br>";
} 
?>