<?php
session_start();

//Including Files 
include_once '../classes/dbcon.php';
$str=@mysql_query("SELECT id,year,sub_code,sub_name,credit FROM courses where course_category='Information Systems'");

?>

<!DOCTYPE html>
<html lang="en">

<head>
<style>
th {
    background-color: #20B2AA;
    color: white;
}
</style>
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
					<h2 class="page-header" style="color:darkblue; text-decoration: underline;"><i class='fa fa-book'> IS-Subjects</i></h2>
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