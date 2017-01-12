

<?php
session_start();
include_once '../classes/dbcon.php';

if(isset($_GET['id'])) { // if id is set then get the file with the id from database

$id = $_GET['id'];

$query = "SELECT name, size, type,  content FROM upload WHERE id = $id";

$result = mysql_query($query) or die('Error, query failed');

list($filName, $filSize, $fileType,$content) =

mysql_fetch_array($result);

header("Content-length: $filSize");

header("Content-type: $fileType");

header("Content-Disposition: attachment; filename=$filName");

echo $content; exit;
}

?>

Download File From MySQL

<?php

$query = "SELECT id, name FROM upload";

$result = mysql_query($query) or die('Error, query failed');

if(mysql_num_rows($result) == 0)

{

echo "Database is empty";

}

else

{

while(list($id, $name) = mysql_fetch_array($result))

{

?>

<a href="download2.php?id=<?php echo $id;?>"><?php echo $name; ?></a>

<?php

}

}

?>

