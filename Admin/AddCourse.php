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
                    <h3 class="page-header" style="color:darkblue; text-decoration: underline;">New Subject</h3>

                    <div class="col-md-12">
                        <div class="widget">
                            <div class="widget-content">  
                        <form class="form-horizontal" role="form" class="formRequest" id="formRequest" method="post" action="AddCourseDB.php">
             
                            <div class="form-group">
                            <label for="input-text" class="col-sm-2 control-label">Course Category</label>
                            <div class="col-sm-10">
                              <select name="course_category" id="course_category" class="form-control" tabindex="-1" >
                                            <option value="Software Engineering">Software Engineering</option>
                                            <option value="Computer Science">Computer Science </option>
                                            <option value="Information Systems">Information Systems</option>
                                        </select>
                              
                            </div>
                          </div>
                       
                        <div class="form-group">
                            <label for="input-text" class="col-sm-2 control-label">Year</label>
                            <div class="col-sm-10">
                               <select name="year" id="year" class="form-control" tabindex="-1" >
                                            <option value="1st year">1st Year</option>
                                            <option value="2nd year">2nd Year</option>
                                            <option value="3rd year">3rd Year</option>
                               </select>
                            </div>
                          </div>
                        <div class="form-group">
                            <label for="input-text" class="col-sm-2 control-label">Subject Code</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="sub_code" id="sub_code" placeholder="">
                            </div>
                          </div>
                        <div class="form-group">
                            <label for="input-text" class="col-sm-2 control-label">Subject Name</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="sub_name" id="sub_name" placeholder="">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="input-text" class="col-sm-2 control-label">Subject Credit</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="credit" id="credit" placeholder="">
                            </div>
                          </div>
                          <div class="col-md-7 col-xs-12 col-md-offset-2">
                           <a href="CourseList.php"><button type="submit" class="btn btn-primary">Submit</button></a>
                          </div> 

                    
                        </form>
                    </div>
                    
                </div>

</body>

</html>