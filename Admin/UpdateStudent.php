<?php
session_start();

//Including Files 
include_once '../classes/dbcon.php';
$reg_no=$_REQUEST['id'];

$str="select * from student_registration where reg_no='".$reg_no."'";
$qr=mysql_query($str);
$result=@mysql_fetch_array($qr);



?>

<!DOCTYPE html>
<html lang="en">

<head>
<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>

 <body class="fixed-left">
        <!-- Modal Start -->
        	<!-- Modal Task Progress -->	
	
    <!-- Right Sidebar End -->		
		<!-- Start right content -->
        <div class="content-page">
			<!-- ============================================================== -->
			<!-- Start Content here -->
			<!-- ============================================================== -->
            <div class="content">
								<!-- Page Heading Start -->
				<div class="page-heading">
            		<h3 style="text-decoration: underline;"><i class='fa fa-edit'></i> Edit Students Details</h3>
            		            	</div>
            	<!-- Page Heading End-->	
								
				<!-- Your awesome content goes here -->
			
				<div class="widget">
					<div class="container" style="max-width:600px;padding:40px 20px;">
		<div class="widget-content padding">
			<form class="form-horizontal" role="form" class="formRequest" id="inputForm" name="inputForm" method="post" >
							<div class="form-group">
							<label for="input-text" class="col-sm-2 control-label">Reg No</label>
							<div class="col-sm-10">
							  <input type="text" class="form-control" name="reg_no" id="reg_no" placeholder="Input text" value="<?php echo $result['reg_no']?>" readonly="true">
							</div>
						  </div>
						  <div class="form-group">
							<label for="input-text" class="col-sm-2 control-label">Year</label>
							<div class="col-sm-10">
							  <input type="text" class="form-control" name="year" id="year" placeholder="Input text" value="<?php echo $result['year']?>">
							</div>
						  </div>						 
						  <div class="form-group">
							<label for="input-text" class="col-sm-2 control-label">Course Category</label>
							<div class="col-sm-10">
							  <input type="text" class="form-control" name="course_category" id="course_category" placeholder="Input text" value="<?php echo $result['course_category']?>">
							</div>
						  </div>
						   <div class="col-md-7 col-xs-12 col-md-offset-3">
						  <button type="submit" class="btn btn-primary" value="Update" formmethod="post" formaction="UpdateStudentDB.php" onclick="closeme()" formonsubmit="redirect()">Update</button>
                      <button type="cancle" class="btn btn-primary" value="Cancle" onclick="return closeSelf()">Cancle</button>
                      </div>
            </form>
						 