<?php
session_start();

//Including Files 
include_once '../classes/dbcon.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>

    <?php include '../pages/home.php' ?>

    <div id="wrapper">
    <body class="fixed-left">
        <!-- Modal Start -->
            <!-- Modal Task Progress -->    
    
        <div class="content-page">
            <!-- ============================================================== -->
            <!-- Start Content here -->
            <!-- ============================================================== -->
            <div class="content">
                    <h2 class="page-header" style="color:darkblue; text-decoration: underline;"><i class='fa fa-table'> Assignment Marks</i></h2>

                     <div class="row">
                
                    <div class="col-md-12">
                        <div class="widget">
                            <div class="widget-content">

            <form action="" method="post">

       <label for="input-text" class="col-sm-2 control-label">Select Year : </label>
	    <input name="search" type="search" autofocus><input type="submit" name="button">

</form>
<div class="table-responsive">
    <table class="table table-bordered table-hover">
           <div class="row" style="padding-top: 30px;">                             
                                        <thead>
                                            <tr>
                                                <th>Email</th>
                                                <th>Course Category</th>
                                                <th>Year</th>
                                                <th >Subject Code</th>
                                                <th>Subject Name</th>
                                                <th>Marks</th>
                                            </tr>
                                        </thead>
										
<?php




if(isset($_POST['button'])){    //trigger button click

  $search=$_POST['search'];

  $query=mysql_query("select * from marks where id like '%{$search}%' || email like '%{$search}%' || year like '%{$search}%' ");

if (mysql_num_rows($query) > 0) {
  while ($row = mysql_fetch_array($query)) {
    echo "<tr><td>".$row['email']."</td><td>".$row['course_category']."</td><td>".$row['year']."</td><td>".$row['sub_code']."</td><td>".$row['sub_name']."</td><td>".$row['marks']."</td></tr>";
  }
}else{
    echo "No employee Found<br><br>";
  }

}else{                          //while not in use of search  returns all the values
  $query=mysql_query("select * from marks");

  while ($row = mysql_fetch_array($query)) {
   echo "<tr><td>".$row['email']."</td><td>".$row['course_category']."</td><td>".$row['year']."</td><td>".$row['sub_code']."</td><td>".$row['sub_name']."</td><td>".$row['marks']."</td></tr>";
  }
}

mysql_close();
?>