<!DOCTYPE html>
<html lang="en">

<head>
<style>
.custom1 {
    background-color:#DB7093;
    color: white;
}
.custom2 {
    background-color:#20B2AA;
    color: white;
}
.custom3 {
    background-color:#6A5ACD;
    color: white;
	}
.custom4 {
    background-color:#2F4F4F;
    color: white;
	}
</style>
</head>

<body>

    <?php include '../pages/Admindashboard.php' ?>

            <div id="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header" style="color:darkblue; text-decoration: underline;">Dashboard</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
			<div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <!--<div class="huge">22</div>-->
                                    <div>Student Details</div>
                                </div>
                            </div>
                        </div>
                        <a href="../Admin/StudentList.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
					<div class="custom1">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-pencil-square-o fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"></div>
                                    <div>Courses Categories</div>
                                </div>
								</div>
                            </div>
                        </div>
                        <a href="../Admin/AddCourseCategory.php">
                            <div class="panel-footer">
                                <span class="pull-left" style="color:#DB7093;">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-th fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"></div>
                                    <div>Add Subjects</div>
                                </div>
                            </div>
                        </div>
                        <a href="../Admin/AddCourse.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
				 <div class="col-lg-3 col-md-6">
                     <div class="panel panel-green">
					<div class="custom2">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-envelope fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"></div>
                                    <div>Messages</div>
                                </div>
                            </div>
                        </div>
                        <a href="../Admin/message.php">
                            <div class="panel-footer">
                                 <span class="pull-left" style="color:#20B2AA;">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
					</div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"></div>
                                    <div>Add Assignment</div>
                                </div>
                            </div>
                        </div>
                        <a href="../Admin/AddAssignment.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
				<div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-table fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"></div>
                                    <div>Assignment Marks</div>
                                </div>
                            </div>
                        </div>
                        <a href="../Admin/AssignmentMarks.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <!--<div class="row" style="margin-top: 200px;"></div>-->
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
					<div class="custom3">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-graduation-cap fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"></div>
                                    <div>Exams</div>
                                </div>
                            </div>
							</div>
                        </div>
                        <a href="../Admin/UploadResult.php">
                            <div class="panel-footer">
                                <span class="pull-left" style="color:#6A5ACD;">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
					<div class="custom4">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-search fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <!--<div class="huge">22</div>-->
                                    <div>Search</div>
                                </div>
								</div>
                            </div>
                        </div>
                        <a href="../Admin/StudentSearch.php">
                            <div class="panel-footer">
                                <span class="pull-left" style="color:#2F4F4F">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>

</body>

</html>
