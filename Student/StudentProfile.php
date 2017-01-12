<?php
session_start();

//Including Files 
include_once '../classes/dbcon.php';
$str=@mysql_query("SELECT * FROM student_registration where reg_no='2'");
$row = @mysql_fetch_array($str);

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
                                <!-- Page Heading Start -->
                    <h2 class="page-header" style="color:darkblue; text-decoration: underline;"><i class='fa fa-users'> My Profile</i></h2>
                    <!--<h2><i class='fa fa-table'></i> <?php //echo $row['firstname']?></h2>-->

                                </div>
                <!-- Page Heading End-->                <!-- Your awesome content goes here -->
                <div class="row">
                
                    <div class="col-md-12">
                        <div class="widget">
                            <div class="widget-content">                  
                                <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User" src="../images/student.png " class="img-circle img-responsive"> </div>
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td><i class="fa fa-user"></i><b>  Student Name:</b></td>
                        <td><?php echo $row['firstname']. " " .$row['lastname']?></td>
                      </tr>
                      <tr>
                        <td><i class="fa fa-check-square-o"></i><b>  Gender:</b></td>
                        <td><?php echo $row['gender']?></td>
                      </tr>
                      <tr>
                        <td><i class="fa fa-envelope"></i><b>  Email:</b></td>
                        <td><a href=""><?php echo $row['email']?></a></td>
                      </tr>
                    <tr>
                        <td><i class="fa fa-phone"></i><b>  Contact:</b></td>
                        <td><?php echo $row['contact']?></td>
                      </tr>
                        <tr>
                        <td><i class="fa fa-calendar"></i><b>  Year:</b></td>
                        <td><?php echo $row['year']?></td>
                      </tr>
                         <tr>
                        <td><i class="fa fa-graduation-cap"></i><b>  Degree:</b></td>
                        <td><?php echo $row['course_category']?></td>
                      </tr>
                        
                     
                    </tbody>
                  </table>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
                


            

                            <!-- Footer Start -->
           
            <!-- Footer End -->         
            </div>
            <!-- ============================================================== -->
            <!-- End content here -->
            <!-- ============================================================== -->

        </div>
        <!-- End right content -->

    </div>
    <!-- End of page -->
        <!-- the overlay modal element -->
    <div class="md-overlay"></div>
    <!-- End of eoverlay modal -->
    <script>
        var resizefunc = [];
    </script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
     <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>


    </body>
</html>