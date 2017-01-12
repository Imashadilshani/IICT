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

if($_POST['email'] && $_POST['password']) {

     
     if("$username= email"){
     $isadmin = mysql_query("SELECT email FROM admin WHERE email = 'username'");
         while ($row = mysql_fetch_assoc($isadmin)){
    
          $dbusername = $row['email'];
          $dbpassword = $row ['password'];
} 
         if ($email == $email && md5($password) == $password){
         
        echo "You are in Member Page";
         
     } 
     }
     
     else if ("$username = Customer_Name"){
     $iscustomer = mysql_query("SELECT Customer_Name FROM Customer WHERE Customer_Name = 'username'");
         while ($row = mysql_fetch_assoc($isadmin)){
    
          $dbusername = $row['Customer_Name'];
          $dbpassword = $row ['Customer_Password'];
 }
        if ($username == $dbusername && md5($password) == $dbpassword){      
         echo "You are in,<a href='member.php'>Member Page</a>";
         
        }
     
     }

     else 

echo"Incorrect password";
}
else
die ("The user does not exist");
}
?>