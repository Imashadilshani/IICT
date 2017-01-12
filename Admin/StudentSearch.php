<?php
session_start();

//Including Files 
include_once '../classes/dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #20B2AA;
    color: white;
}
footer {
   width:100%;
   height:100px;
   background:#414852;
 }
</style>
</head>

<body>

    <?php include '../pages/Admindashboard.php' ?>

    <div id="wrapper">
    <body class="fixed-left">
        <!-- Modal Start -->
        	<!-- Modal Task Progress -->	
	
        <div class="content-page">
			<!-- ============================================================== -->
			<!-- Start Content here -->
			<!-- ============================================================== -->
            <div class="content">
            <h3 class="page-header" style="color:darkblue; text-decoration: underline;">Search Students</h3>
                            </div>
            <div class="row">
                
<div class="col-md-12">
                  

<form action="" method="post">
 <label for="input-text"><h5 style="font-style: italic; font-weight: bold; ">Select Email or Reg No : </h5></label>

  <input name="search" type="search" placeholder="Type Student Email Address or Reg No ..." style="height:34px; width: 700px;" autofocus><input type="submit" class="btn btn-primary" name="button">

</form>
<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped">
           <div class="row" style="padding-top: 30px; ">                             
                                        <thead>
                                            <tr>
                                                <th>Reg No</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th >Email</th>
                                                <th>Year</th>
                                                <th>Course Category</th>
                                            </tr>
                                        </thead>

<?php




if(isset($_POST['button'])){    //trigger button click

  $search=$_POST['search'];

  $query=mysql_query("select * from student_registration where reg_no like '%{$search}%' || email like '%{$search}%' ");

if (mysql_num_rows($query) > 0) {
  while ($row = mysql_fetch_array($query)) {
    echo "<tr><td>".$row['reg_no']."</td><td>".$row['firstname']."</td><td>".$row['lastname']."</td><td>".$row['email']."</td><td>".$row['year']."</td><td>".$row['course_category']."</td></tr>";
  }
}else{
    echo "No employee Found<br><br>";
  }

}else{                          //while not in use of search  returns all the values
  $query=mysql_query("select * from student_registration");

  while ($row = mysql_fetch_array($query)) {
    echo "<tr><td>".$row['reg_no']."</td><td>".$row['firstname']."</td><td>".$row['lastname']."</td><td>".$row['email']."</td><td>".$row['year']."</td><td>".$row['course_category']."</td></tr>";
  }
}

mysql_close();
?>