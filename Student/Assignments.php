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
                    <h2 class="page-header" style="color:darkblue; text-decoration: underline;"><i class='fa fa-upload'> Submit Assignment</i></h2>

                    <div class="col-md-12">
                        <div class="widget">
                            <div class="widget-content">  
                        <form class="form-horizontal" role="form" class="formRequest" id="formRequest" method="post" action=" ">
             
                            <div class="form-group">
                            <label for="input-text" class="col-sm-2 control-label">Your Name</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="email" id="email" placeholder="">
                            </div>
                          </div>

                            <div class="form-group">
                            <label for="input-text" class="col-sm-2 control-label">Select Course Category</label>
                            <div class="col-sm-10">
                              <select name="course_category" id="course_category" class="form-control" tabindex="-1" >
                                            <option value="Software Engineering">Software Engineering</option>
                                            <option value="Computer Science">Computer Science </option>
                                            <option value="Information Systems">Information Systems</option>
                                            <option value="Network Engineering">Network Engineering</option>
                                        </select>
                              
                            </div>
                          </div>
                       
                        <div class="form-group">
                            <label for="input-text" class="col-sm-2 control-label">Select Year</label>
                            <div class="col-sm-10">
                               <select name="year" id="year" class="form-control" tabindex="-1" >
                                            <option value="1st year">1st Year</option>
                                            <option value="2nd year">2nd Year</option>
                                            <option value="3rd year">3rd Year</option>
                               </select>
                            </div>
                          </div>
                        <div class="form-group">
                            <label for="input-text" class="col-sm-2 control-label">Subject Name</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="subjectname" id="subjectname" placeholder="">
                            </div>
                          </div>
                          
                        </form>
                    </div>
                    
                </div>

</body>

</html>
                     
 <div class="form-group">
 <div class="col-md-10" style="top:50px; left: 160px;">
<table width="300" border="0" cellpadding="1" cellspacing="1" class="box">
<tr> 
<td width="250">
<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
<input name="userfile" type="file" id="userfile"> 
</td>
<td width="100"><input name="upload" type="submit" class="box" id="upload" value=" Upload "></td>
</tr>
</table>
</div>
</form>

                    
                        </form>




                        
                               
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

<?php
include_once '../classes/dbcon.php';
if(isset($_POST['upload']) && $_FILES['userfile']['size'] > 0)
{
$username=$_POST['username'];
$email=$_POST['email'];
$course_category=$_POST['course_category'];
$year = $_POST['year'];
$fileName = $_FILES['userfile']['name'];
$tmpName  = $_FILES['userfile']['tmp_name'];
$fileSize = $_FILES['userfile']['size'];
$fileType = $_FILES['userfile']['type'];

$fp      = fopen($tmpName, 'r');
$content = fread($fp, filesize($tmpName));
$content = addslashes($content);
fclose($fp);

if(!get_magic_quotes_gpc())
{
    $fileName = addslashes($fileName);
}
//include 'library/config.php';
//include 'library/opendb.php';


$query = "INSERT INTO student_assignment (username,email,course_category,year,name, size, content ) VALUES ('".$username."','".$email."','".$course_category."','".$year."','$fileName', '$fileSize', '$content')";

mysql_query($query) or die('Error, query failed'); 
//include 'library/closedb.php';

echo "<br>File $fileName uploaded<br>";
} 
?>
