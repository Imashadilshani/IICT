<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body class="fixed-left">

    <?php include '../pages/Admindashboard.php' ?>

    <div id="wrapper">
        <!-- Modal Start -->
            <!-- Modal Task Progress -->    
    
        <div class="content-page">
            <!-- ============================================================== -->
            <!-- Start Content here -->
            <!-- ============================================================== -->
            <div class="content">
                <h3 class="page-header" style="color:darkblue; text-decoration: underline;">Exam Results</h3>

                <div class="col-md-12">
                    <div class="widget">
                        <div class="widget-content">
                            <form class="form-horizontal formRequest" role="form" id="formRequest" method="post" action="UploadDB.php" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label for="input-text" class="col-sm-2 control-label">Course Category</label>
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
                                    <label for="input-text" class="col-sm-2 control-label">Year</label>
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
                                      <input type="text" class="form-control" name="sub_name" id="sub_name" placeholder="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-8" style="top:50px; left: 190px;">
                                        <table width="350" border="0" cellpadding="1" cellspacing="1" class="box">
                                        <tr>
                                            <td width="246">
                                                <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
                                                <input name="file" type="file" id="file">
                                            </td>
                                            <td width="100"><input name="upload" type="submit" class="box" id="upload" value=" Upload "></td>
                                        </tr>
                                        </table>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

