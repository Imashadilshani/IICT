<?php
//session_start();

/* Including Files */

//include 'user_validate.php';

/* Collecting Data */
$error = $_REQUEST['error'];
//$link = $_SESSION['Back'];
?><!-- InstanceBegin template="/Templates/content.dwt.php" codeOutsideHTMLIsLocked="false" -->
<meta http-equiv="refresh" content="1800;URL=/modules/logout.php">
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html>
<!-- InstanceParam name="Onload" type="text" value="" -->
<head>
<!-- InstanceBeginEditable name="doctitle" --> 

<title>System Error</title>
<!-- InstanceEndEditable -->
<meta http-equiv="refresh" content="1800;URL=/modules/logout.php">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable -->
<link href="/modules/style/main.css" rel="stylesheet" type="text/css">
</head>
<body onLoad="" >
<table width="100%" border="0" cellspacing="0" class="box">
  <tr>
    <td width="1%" height="40" background="/modules/pics/module_head/header_left.jpg">&nbsp;</td>
    <td width="98%" valign="middle" background="/modules/pics/module_head/header_middle.jpg"><div align="center">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="27" valign="top"><div align="center"><!-- InstanceBeginEditable name="Module Header" --> 
                <span class="headerText">System Error</span> <!-- InstanceEndEditable --></div></td>
          </tr>
        </table>
      </div></td>
    <td width="1%" background="/modules/pics/module_head/header_right.jpg">&nbsp;</td>
  </tr>
</table>
<!-- InstanceBeginEditable name="cotent" --> 
<p>&nbsp;</p>
<p><br>
</p>

  <table width="60%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr> 
      <td> <div align="center" class="error"><? echo stripslashes($error); ?></div></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td><div align="center"> 
          
        <input name="Button" type="button" class="submitButt" value="Go Back" onClick="check()">
        </div></td>
    </tr>
  </table>

<!-- InstanceEndEditable -->
</body>
<!-- InstanceEnd --></html>
