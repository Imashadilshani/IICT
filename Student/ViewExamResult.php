<?php
session_start();

//Including Files 
include_once '../classes/dbcon.php';
$str=@mysql_query("SELECT * FROM uploads");

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
                    <h2 class="page-header" style="color:darkblue; text-decoration: underline;"><i class='fa fa-graduation-cap'> View Result </i></h2>
                                </div>
                <!-- Page Heading End-->                <!-- Your awesome content goes here -->
                <div class="row">
                
                    <div class="col-md-12">
                        <div class="widget">
                            <div class="widget-content">                  
                                <div class="table-responsive">
                                    <table data-sortable class="table">
                                        <thead>
                                            <tr>
                                                <td>Subject Name </td>
                                                <td>File Size(KB)</td>
                                                <td>Download</td>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            <tr>
                                            <?php
                                                while($row = @mysql_fetch_array($str)){
                                                    $id=$row['id'];
                                                    $file_name=$row['file'];
                                                    echo "<tr>";
                                                        echo "<td>" . $row['subject'] . "</td>";
                                                        echo "<td>" . $row['size'] . "</td>";
                                                        //echo "<td>" ."<a href='' target'_blank'>" .$row['name'] ."</a>". "</td>";
                                                        echo "<td>" ."<a href='../download/$file_name'>Result_Sheet</a>". "</td>";
                                                    echo "</tr>";
                                                }
                                                ?>
                                                <td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
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