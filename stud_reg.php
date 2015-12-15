<?php
if(isset($_POST['register'])){
$conn= mysql_connect("localhost","root","");
mysql_select_db("ict",$conn);
$a= $_POST['fname'];
$b= $_POST['lname'];
$c= $_POST['reg'];
$d= $_POST['faculty'];
$e= $_POST['year'];
$f= $_POST['semester'];
$g= $_POST['phone'];
$h= $_POST['address'];
$date = date("d m y H:i");
$sql= mysql_query("insert into students (fname, lname, reg, faculty, year, semester, phone, address, date_av) values ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$date')");
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>library system</title>
<script type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
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
        <input type="submit" name="Submit3" value="Borrow Books" />
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
    <td width="585" height="510" align="center" valign="top"><p><strong><font size="5"><em> Student Registration Form</em></font></strong> </p>
      <form id="form6" name="form6" method="post" action="">
        <p>First Name&nbsp;
          <input name="fname" type="text" id="fname" />
    </p>
        <p>Last Name&nbsp;
          <input name="lname" type="text" id="lname" />
</p>
        <p>Reg.No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input name="reg" type="text" id="reg" />
        </p>
        <p>Faculty&nbsp;&nbsp;&nbsp;&nbsp;
          <select name="faculty" id="faculty">
		   <option>....</option>
            <option>BACS</option>
            <option>BAIT</option>
			<option>BAE</option>
			<option>BAPA</option>
			<option>BABA</option>
          </select>
        </p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;Year&nbsp;&nbsp;&nbsp; 
          <select name="year" id="year">
		    <option>....</option>
            <option>One</option>
            <option>two</option>
            <option>three</option>
          </select>
        </p>
        <p>Semester    
          <select name="semester" id="semester">
		    <option>....</option>
            <option>One</option>
            <option>two</option>
          </select>
        </p>
        <p>Phone&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input name="phone" type="text" id="phone" />
        </p>
        <p>Address&nbsp;&nbsp;
          <input name="address" type="text" id="address" />
        </p>
        <p>
          <input name="register" type="submit" id="register" value="Register" />
        </p>
      </form>      <p>&nbsp;</p></td>
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
