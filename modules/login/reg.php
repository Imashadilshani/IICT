<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Vendor </title>

    <link href="../../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../pages/css/form-basic.css">

    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->

    <!-- Custom CSS -->
  

    <!-- Custom Fonts -->
    <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script>
        function validatePassword(){
            var password = document.getElementById("password")
            ,confirm_password = document.getElementById("confirm_password");
            if(password.value != confirm_password.value) {
                confirm_password.setCustomValidity("Passwords Don't Match");
            } else {
                confirm_password.setCustomValidity('');
                    }
            }
            password.onchange = validatePassword;
            confirm_password.onkeyup = validatePassword;
</script>
<style type="text/css">
    .modal-content {
    display: block;
    position: fixed;
    top: 90px;
    right: 350px;
    bottom: 5px;
    left: 350px;
    opacity: 1; 
    background-color: #20B2AA;
}
body
{
    background: url(../../pages/image1.jpg);
    background-size: 100%;
    background-repeat: no-repeat;  
    opacity: 1.5;  
}
</style>

</head>
<body>
      <div id="wrapper"> 
                    <h1 class="page-header" style="text-align: center">Welcome To IICT Student Registration System</h1>
            </div>
        <div class="modal-content">
            <form method="post" class="form-horizontal form-label-left" action=regDB.php>
                <nav class="navbar navbar-default" style="margin-bottom: 10px"><h2 style="text-align: center;"><i class="fa fa-user-plus"> </i> Sign Up <h2></nav>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="firstname">First Name <span class="required" style="color:red;">*</span>
                                    </label>
                                    <div class="col-md-6">
                                        <input type="text" name="firstname" placeholder="First Name....." id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Last Name <span class="required" style="color:red;">*</span>
                                    </label>
                                    <div class="col-md-6">
                                        <input type="text" name="lastname" placeholder="Last Name....." id="last-name2" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label class="control-label col-md-4" for="email">Email <span class="required" style="color:red;">*</span>
                                    </label>
                                    <div class="col-md-6">
                                        <input type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="email" placeholder="Email....." id="email" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Contact
                                    </label>
                                    <div class="col-md-6">
                                        <input type="tel" pattern="^(?:\(\d{3}\)|\d{3})[- . ]?\d{3}[- . ]?\d{4}$" autocomplete="off"  maxlength="11" name="contact" id="last-name2" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Gender <span class="required" style="color:red;">*</span>
                                    </label>
									<div class="col-md-6">
                                        <select name="gender" class="select2_single form-control" required="required" tabindex="-1" >
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="year">Year <span class="required" style="color:red;">*</span>
                                    </label>
                                    <div class="col-md-6">
                                        <select name="year" class="select2_single form-control" required="required" tabindex="-1" >
                                            <option value="1st year">1st Year</option>
                                            <option value="2nd year">2nd Year</option>
                                            <option value="3rd year">3rd Year</option>
                                        </select>
                                    </div>
                                </div>	
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Course Category <span class="required" style="color:red;">*</span>
                                    </label>
                                    <div class="col-md-6">
                                        <select name="course_category" class="select2_single form-control" required="required" tabindex="-1" >
                                            <option value="Software Engineering">Software Engineering</option>
                                            <option value="Computer Science">Computer Science </option>
                                            <option value="Information Systems">Information Systems</option>
                                            <option value="Network Engineering">Network Engineering</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="password">PassWord <span class="required" style="color:red;">*</span>
                                    </label>
                                    <div class="col-md-6">
                                        <input type="password" name="password" placeholder="Password....." id="password" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div> 
                                 <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Confirm PassWord <span class="required" style="color:red;">*</span>
                                    </label>
                                    <div class="col-md-6">
                                        <input type="password" name="confirm_password" placeholder="Confirm Password..." id="confirm_password" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>   
                                <div class="form-group">							
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-4">
                                        <a href="user.php"><button type="button" class="btn btn-primary"><i class="fa fa-times-circle-o"></i> Cancel</button></a>
                                        <button type="submit" onclick="validatePassword()" name="submit" class="btn btn-success"><i class="fa fa-plus-square"></i> Submit</button>
                                    </div>
                                </div>
                            </form>
                    </div>
                  
