<?php
require("db.php");
$reg = $_REQUEST['reg'];

$result = mysql_query("SELECT * FROM students WHERE reg  = '$reg'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$fname= $test['fname'] ;
				$lname= $test['lname'] ;					
				$faculty= $test['faculty'] ;
				$semester= $test['semester'] ;
				$year= $test['year'] ;
				$phone= $test['phone'] ;
				$address= $test['address'] ;
				
				
if(isset($_POST['save']))
{	
	$fname_save = $_POST['fname'];
	$lname_save = $_POST['lname'];
	$faculty_save = $_POST['faculty'];
	$faculty_save = $_POST['semester'];
	$year_save = $_POST['year'];
	$phone_save = $_POST['phone'];
	$address_save = $_POST['address'];
	

	mysql_query("UPDATE students SET fname ='$fname_save', lname ='$lname_save', faculty ='$faculty_save', semester ='semester_save', 
		 year ='$year_save', phone ='$phone_save', address ='$address_save' WHERE reg = '$reg'")
				or die(mysql_error()); 
	echo "Saved!";
	
	header("Location: view_reg.php");			
}
mysql_close($conn);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>library system</title>
</head>

<body bgcolor="#99CCCC">
<table bgcolor="#DDDDDD" width="764" height="171" border="0" align="center">
  <tr>
    <td width="234" height="167" valign="top"><div align="center"><em><strong>From Outside </strong></em></div>
    <p><img src="images/lib.gif" width="230" height="127" /></p>    </td>
    <td width="283" valign="top"><div align="center"><em><strong>Library Management System </strong></em></div>
    <p><img src="images/index_clip_image002.jpg" width="289" height="127" /></p></td>
    <td width="232" valign="top"><div align="center"><em><strong>From Inside </strong></em></div>
    <p><img src="images/yooo.gif" width="230" height="127" /></p></td>
  </tr>
</table>
<table bgcolor="#DDDDDD" width="764" border="0" align="center">
  <tr>
    <td width="188"><form id="form5" name="form5" method="post" action="searc_stud.php">
      <div align="center">
        <input type="submit" name="Submit5" value="Search Student Registered" />
        </div>
    </form>
    </td>
    <td width="169"><form id="form4" name="form4" method="post" action="stud_reg.php">
      <div align="center">
        <input type="submit" name="Submit4" value="Student Registrations" />
        </div>
    </form>
    </td>
    <td width="152"><form id="form3" name="form3" method="post" action="books.php">
      <div align="center">
        <input type="submit" name="Submit3" value=" Borrow Books" />
        </div>
    </form>
    </td>
    <td width="123"><form id="form2" name="form2" method="post" action="return.php">
      <div align="center">
        <input type="submit" name="Submit2" value="Return Books" />
        </div>
    </form>
    </td>
    <td width="110"><form id="form1" name="form1" method="post" action="index.php">
      <div align="center">
        <input type="submit" name="Submit" value="Logout" />
        </div>
    </form>
    </td>
  </tr>
</table>
<table bgcolor="#DDDDDD" width="764" border="0" align="center">
  <tr>
    <td width="585" height="510" align="center" valign="top"><p>&nbsp;</p>
    <h2><strong><em>Update Student</em></strong></h2>
    <form id="form1" name="form1" method="post" action="">
        <table width="257" align="center">
          <tr>
            <td width="86"><strong>First Name</strong></td>
            <td width="159"><input name="fname" type="text" id="fname" value="<?php echo $fname ?>"/></td>
          </tr>
          <tr>
            <td><strong>Last Name</strong></td>
            <td><input name="lname" type="text" id="lname" value="<?php echo $lname ?>"/></td>
          </tr>
          <tr>
            <td><strong>Faculty</strong></td>
            <td><input name="faculty" type="text" id="faculty" value="<?php echo $faculty ?>"/></td>
          </tr>
          <tr>
            <td><strong>Year</strong></td>
            <td><input name="year" type="text" id="year" value="<?php echo $year ?>"/></td>
          </tr>
           <tr>
            <td><strong>Semester</strong></td>
            <td><input name="semester" type="text" id="semester" value="<?php echo $semester ?>"/></td>
          </tr>
           <tr>
            <td><strong>Phone</strong></td>
            <td><input name="phone" type="text" id="phone" value="<?php echo $phone ?>"/></td>
          </tr>
           <tr>
            <td><strong>Address</strong></td>
            <td><input name="address" type="text" id="address" value="<?php echo $address ?>"/></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="save" value="save" /></td>
          </tr>
        </table>
      </form>
    <p>&nbsp;</p></td>
  </tr>
</table>
<table bgcolor="#DDDDDD" width="764" border="0" align="center">
  <tr>
    <td><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><strong><em>Copyright &copy; St.Lawrence University Library 2015-16, All
    right reserved.</em></strong></font></div></td>
  </tr>
</table>
</body>
</html>
