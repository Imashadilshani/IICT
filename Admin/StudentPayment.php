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
                    <h3 class="page-header" style="color:darkblue; text-decoration: underline;">Student Payment Details</h3>

                    <div class="col-md-12">
                        <div class="widget">
                            <div class="widget-content">  
                        <form class="form-horizontal" role="form" class="formRequest" id="formRequest" method="post" action="paymentDB.php">
                            <div class="form-group">
                            <label for="input-text" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="email" id="email" placeholder="">
                            </div>
                          </div>

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
                            <label for="input-text" class="col-sm-2 control-label">Contact</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="contact" id="contact" placeholder="">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="input-text" class="col-sm-2 control-label">Amount</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="amount" id="amount" placeholder="">
                            </div>
                          </div>
                          <div class="col-md-7 col-xs-12 col-md-offset-2">
                           <a href=" "><button type="submit" class="btn btn-primary">Submit</button></a>
                          </div> 

                    
                        </form>
                    </div>
                    
                </div>

</body>

</html>