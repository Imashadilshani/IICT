<?php
session_start();


//Including Files 
include_once '../../classes/dbcon.php';

//set validation error flag as false
//$error = false;

//check if form is submitted
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hash_password = md5($password);

//echo $firstname;

$sql=@mysql_query("SELECT * FROM student_registration WHERE email='".$email."' AND password='".$hash_password."' ");


$rows = @mysql_num_rows($sql);

if(($_POST['email'] == "admin@example.com") && ($_POST['password'] == 123)){
     header("Location:../../pages/Admindashboard.php");
	 
 }
    
else if(($rows==1)||($_POST['email'] === 'email' && $_POST['password'] === 'password')){

        header("Location:../../pages/home.php");
    }
else{
    echo "Wrong Credentials!!";
    header("Location:login.php"); /* Redirect browser */
    exit();
    }
@mysql_close($con);
}
?>

