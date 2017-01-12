<?php
session_start();

//Including Files 
include_once '../../classes/dbcon.php';

$user_level='2';
//set validation error flag as false
//$error = false;

//check if form is submitted
if (isset($_POST['submit'])||($email=0)) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $gender = $_POST['gender'];
    $year = $_POST['year'];
    $course_category = $_POST['course_category'];
    $password = $_POST['password'];


//echo $firstname;

if($email != ""){
    $result = mysql_query("SELECT * FROM student_registration where email='".$email."'");
    $num_rows = mysql_num_rows($result);
    if($num_rows >= 1){
        echo "Already Registered";
    }else{
        $sql= mysql_query("INSERT INTO student_registration(firstname,lastname,user_level,email,contact,gender,year,course_category,password) VALUES('" . $firstname . "','" . $lastname . "','".$user_level."', '" . $email . "','" . $contact . "','" . $gender . "', '" . $year . "','" . $course_category . "','" . md5($password) . "')");
            echo "New record added successfully.";
            header("Location:login.php");
        }
    }
@mysql_close($con);
}
?>