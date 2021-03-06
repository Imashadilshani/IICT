<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>IICT</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="" style="font-family:Verdana; color: #8B0000; font-size: 24px;">Welcome To IICT Student Registration System</a>
            </div>
            <!-- /.navbar-header -->


            <ul class="nav navbar-top-links navbar-right">
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="../modules/login/logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        </li>
                         <li>
                            <a href="../pages/Dashboard.php"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                        </li>
                         <li>
                            <a href="#"><i class="fa fa-user"></i> Admin <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="../Admin/AddCourseCategory.php"> Add New Course Category</a>
                                </li>
                                <li>
                                    <a href="../Admin/AddCourse.php"> Add New Subject </a>
                                </li>
                                <li>
                                    <a href="../Admin/DeleteCourse.php"> Delete Course Details </a>
                                </li>                                                        
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="../Admin/message.php"><i class="fa fa-envelope"></i> Messages</a>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-users"> </i> Students<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="../Admin/StudentList.php"> Student Details </a>
                                </li>
                                 <li>
                                    <a href="../Admin/StudentSearch.php"> Search </a>
                                </li>                         
                            </ul>
                        </li>
                       
                       <li>
                            <a href=""><i class="fa fa-book"></i> Courses <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="../Admin/CourseList_SE.php"> Software Engineering </a>
                                </li>
                                <li>
                                    <a href="../Admin/CourseList_CS.php"> Computer Science </a>
                                </li>
                                <li>
                                    <a href="../Admin/CourseList_IS.php"> Information Systems </a>
                                </li>                              
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="../Admin/StudentPayment.php"><i class="fa fa-credit-card"></i> Student Payment Details</a>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-tasks"></i>  Assignments <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="../Admin/AddAssignment.php"> Add Assignment </a>
                                </li>
                                <li>
                                    <a href="../Admin/AssignmentMarks.php"> Assignment Marks</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="../Admin/UploadResult.php"><i class="fa fa-graduation-cap"></i> Exam Results </span></a>
                        </li>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
            </div>    
        </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
