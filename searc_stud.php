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
      <form id="form6" name="form6" method="post" action="">
        Search Student by  Reg.No
          <input name="reg" type="text" id="reg" />
          <input name="search" type="submit" id="search" value="Search" />&nbsp;&nbsp;&nbsp;
      </form>      <p>&nbsp;</p>
	  <?php
 if(isset($_POST['search'])){
$db = mysql_connect("localhost", "root", "");
mysql_select_db("ict",$db);
$reg = $_POST['reg'];
$q = mysql_query("select * from students WHERE reg = '$reg'");

echo'

</p>
<table width="600" border="0">
  <tr bgcolor="#66FFFF">
    <td>Firstname</td>
    <td>Lastname</td>
    <td>Reg.No</td>
    <td>Faculty</td>
	<td>Year</td>
	<td>Semster</td>
  </tr>';
  while($row = mysql_fetch_array($q)){
  echo'
  <tr bgcolor="#EEEEEE">
    <td>'.$row[fname].'</td>
    <td>'.$row[lname].'</td>
    <td>'.$row[reg].'</td>
    <td>'.$row[faculty].'</td>
	<td>'.$row[year].'</td>
	<td>'.$row[semester].'</td>
  </tr>';}
echo'</table>';
} 

?>

</td>
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
