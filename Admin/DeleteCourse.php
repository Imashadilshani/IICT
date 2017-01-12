<?php
session_start();

//Including Files 
include_once '../classes/dbcon.php';
$str=@mysql_query("SELECT * FROM courses");

?>

<!DOCTYPE html>
<html lang="en">

<head>
<script type="text/javascript" language="javascript">

function delCourse(id) {
    //var status = 'D';
    alert('Are you sure you want to delete this record '+id+' ?');
    document.inputForm.action = "DeleteCourseDB.php?id="+id;
    document.inputForm.submit();
    return true;
    }

</script>
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
                                <!-- Page Heading Start -->
                    <h3 class="page-header" style="color:darkblue; text-decoration: underline;">Course Details</h3>
                                </div>
                <!-- Page Heading End-->                <!-- Your awesome content goes here -->
                
				<div class="row">
                
                    <div class="col-md-12">
                        <div class="widget">
                            <div class="widget-content">   
							<form class="form-horizontal" role="form" class="formRequest" id="inputForm"  name="inputForm" method="post">	                                             
                                <div class="table-responsive">
                                    <table data-sortable class="table">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Year</th>
                                                <th>Course Category</th>
                                                <th>Subject Code</th>
                                                <th >Subject Name</th>
                                                <th >Subject Credit</th>
                                                <th >Delete Course</th>

                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            <tr>
                                            <?php
                                                while($row = @mysql_fetch_array($str)){
                                                $id=$row['id'];
                                                echo "<tr>";
                                                    echo "<td>" . $row['id'] . "</td>";    
                                                    echo "<td>" . $row['year'] . "</td>"; 
                                                    echo "<td>" . $row['course_category'] . "</td>";                                                   
                                                    echo "<td>" . $row['sub_code'] . "</td>";
                                                    echo "<td>" . $row['sub_name'] . "</td>"; 
                                                    echo "<td>" . $row['credit'] . "</td>";  
                                                    echo "<td>"."<div class='btn-group btn-group-xs'><button type='button' id='delete' class='btn btn-danger' onClick=delCourse($id)><i class='fa fa-trash-o'></i> Delete</a></div>"."</td>";                                                      
                                                    echo "</tr>";
                                                }
                                                ?>
                                            </tr>
                                        
                                        </tbody>
                                    </table>
									   </form>
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