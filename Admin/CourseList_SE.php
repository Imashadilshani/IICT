<?php
session_start();

//Including Files 
include_once '../classes/dbcon.php';
$str=@mysql_query("SELECT * FROM courses where course_category='Software Engineering'");

?>

<!DOCTYPE html>
<html lang="en">

<head>
<script type="text/javascript" language="javascript">
function load_window(id)
{
var id = id;
var _win = window.open("UpdateCourse.php?id="+id,"video_win", "left="+((screen.width-800)/2)+", top=100,width=800,height=500,toolbar=0,location=0,directories=0,status=1,menuBar=0,scrollBars=0,resizable=yes") ;
 _win.focus();
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
            		<h3 class="page-header" style="color:darkblue; text-decoration: underline;">Software Engineering Subjects</h3>
            		           	</div>
            	<!-- Page Heading End-->				<!-- Your awesome content goes here -->
				<div class="row">
				
					<div class="col-md-12">
						<div class="widget">
							<div class="widget-content">												
								<div class="table-responsive">
									<table data-sortable class="table">
										<thead>
											<tr>
												<th>ID</th>
												<th>Year</th>
												<th>Subject Code</th>
												<th >Subject Name</th>
												<th >Subject Credit</th>
												<th> Edit Course</th>
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
                									echo "<td>" . $row['sub_code'] . "</td>";
                									echo "<td>" . $row['sub_name'] . "</td>";
                									echo "<td>" . $row['credit'] . "</td>";
                									 echo "<td>"."<div class='btn-group btn-group-xs'><button type='button' class='btn btn-success' onClick=load_window($id)><i class='fa fa-edit'></i> Edit</a></div>"."</td>";   
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