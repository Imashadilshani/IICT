<?php
session_start();

//Including Files 
include_once '../classes/dbcon.php';
$str=@mysql_query("SELECT * FROM student_registration");
?>

<!DOCTYPE html>
<html lang="en">

<head>
<script type="text/javascript" language="javascript">
function load_window(id)
{
var id = id;
var _win = window.open("UpdateStudent.php?id="+id,"video_win", "left="+((screen.width-800)/2)+", top=100,width=800,height=350,toolbar=0,location=0,directories=0,status=1,menuBar=0,scrollBars=0,resizable=yes") ;
 _win.focus();
}

function delStudent(id) {
	//alert("dis");
    //var status = 'D';
    alert('Are you sure you want to delete this record '+id+' ?');
    document.inputForm.action = "DeleteStudent.php?id="+id;
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
            		<h3 class="page-header" style="color:darkblue; text-decoration: underline;">Student Details</h3>
            		           	</div>
            	<!-- Page Heading End-->				<!-- Your awesome content goes here -->
				<div class="row">
				
					<div class="col-md-12">
						<div class="widget">
							<div class="widget-content">
							<form class="form-horizontal" role="form" class="formRequest" id="inputForm"  name="inputForm" method="post">					
								<div class="table-responsive">
									<table data-sortable class="table">
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
										
										<tbody>
											<tr>
											<?php
          										while($row = @mysql_fetch_array($str)){
          										$id=$row['reg_no'];
            									echo "<tr>";
                									echo "<td>" . $row['reg_no'] . "</td>";               								
                									echo "<td>" . $row['firstname'] . "</td>";
                									echo "<td>" . $row['lastname'] . "</td>";
                									echo "<td>" . $row['email'] . "</td>";
                									echo "<td>" . $row['year'] . "</td>";
                									echo "<td>" . $row['course_category'] . "</td>";               								
													echo "<td>"."<div class='btn-group btn-group-xs'><a data-toggle='tooltip title='Edit' class='btn btn-default' onClick=load_window($id)><i class='fa fa-edit'></i></a>
														<a data-toggle='tooltip' title='Delete' id='delete' class='btn btn-danger' onClick=delStudent($id)><i class='fa fa-trash-o'></i></a></div>"."</td>";	
													echo "</tr>";
												}
        										?>
											</tr>
										
										</tbody>
									</table>
								</div>
								</form>
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