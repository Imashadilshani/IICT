<!DOCTYPE html>
<html lang="en">

<head>
<style>
.custom1 {
    background-color:#6A5ACD;
    color: white;
	}
.custom2 {
    background-color:#20B2AA;
    color: white;
}
.custom3 {
    background-color:#DB7093;
    color: white;
}
</style>
</head>

<body>

    <?php include '../pages/home.php' ?>

            <div id="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header" style="color:darkblue; text-decoration: underline;">Dashboard</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row" >
			<div class="col-lg-3 col-md-6">
                      <div class="panel panel-red">
					  <div class="custom3">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-pencil-square-o fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"></div>
                                    <div>Software Engineering</div>
                                </div>
								</div>
                            </div>
                        </div>
                        <a href="../Student/CourseList_SE.php">
                            <div class="panel-footer">
                                <span class="pull-left" style="color:#DB7093;">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
					<div class="custom1">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-laptop fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"></div>
                                    <div>Computer Science</div>
                                </div>
								</div>
                            </div>
                        </div>
                        <a href="../Student/CourseList_CS.php">
                            <div class="panel-footer">
                                <span class="pull-left"  style="color:#8A2BE2">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-book fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"></div>
                                    <div>Information System</div>
                                </div>
                            </div>
                        </div>
                        <a href="../Student/CourseList_IS.php">
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
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"></div>
                                    <div>Submit Assignment</div>
                                </div>
                            </div>
                        </div>
                        <a href="../Student/Assignments.php">
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
                                    <i class="fa fa-table fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"></div>
                                    <div>Assignment Marks</div>
                                </div>
								</div>
                            </div>
                        </div>
                        <a href="../Student/AssignmentMarks.php">
                            <div class="panel-footer">
                                <span class="pull-left" style="color:#20B2AA;">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <!--<div class="row" style="margin-top: 200px;"></div>-->
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-graduation-cap fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"></div>
                                    <div>Exam Result</div>
                                </div>
                            </div>
                        </div>
                        <a href="../Student/ViewExamResult.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <!--<div class="huge">22</div>-->
                                    <div>My Profile</div>
                                </div>
                            </div>
                        </div>
                        <a href="../Student/StudentProfile.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
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
