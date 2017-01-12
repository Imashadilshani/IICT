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
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header" style="color:darkblue; text-decoration: underline;">New Course Category</h3>

                    <div class="row">

                    <div class="widget-content padding">
                        <form class="form-horizontal" role="form" class="formRequest" id="formRequest" method="post" action="AddCourseCategoryDB.php">
                        <div class="form-group">
                            <label for="input-text" class="col-sm-2 control-label">Course Category Name</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="categ_name" id="categ_name" placeholder="">
                            </div>
                          </div>
                          <div class="col-md-7 col-xs-12 col-md-offset-2">
                           <a href="CourseList.php"><button type="submit" class="btn btn-primary">Submit</button>
                          </div> 

                    
                        </form>
                    </div>
                    
                </div>

</body>

</html>