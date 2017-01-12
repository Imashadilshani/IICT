
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
                    <h3 class="page-header" style="color:darkblue; text-decoration: underline;">Send a Message</h3>

                    <div class="col-md-12">
                        <div class="widget">
                            <div class="widget-content">  
                        <form class="form-horizontal" role="form" class="formRequest" id="formRequest" method="post" action="messageDB.php">
                             <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                                    <input class="form-control" name="subject" placeholder="Subject" type="text" required />
                                </div>
                            </div>
                           <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <textarea style="resize:vertical;" name="message" class="form-control" placeholder="Message..." rows="6" name="comment" required></textarea>
                                </div>
                            </div>
                              <div class="panel-footer" style="margin-bottom:-14px;">
                            <input type="submit" class="btn btn-success" value="Send"/>
                          </div> 

                    
                        </form>
                    </div>
                    
                </div>

</body>

</html>