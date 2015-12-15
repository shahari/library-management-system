<?php
if(isset($_POST['return'])){
$conn= mysql_connect("localhost","root","");
mysql_select_db("ict",$conn);
$a= $_POST['reg'];
$b= $_POST['isbn'];
$c= $_POST['type'];
$d= $_POST['title'];
$e= $_POST['author'];
$f= $_POST['year'];
$date = date("d m y H:i");
$sql= mysql_query("insert into available (isbn, type, title, author, year, date_av) values ('$b', '$c', '$d', '$e', '$f', '$date')");
$sql2= mysql_query("insert into transaction (reg, isbn, type, title, author, year, date_av) values ('$a', '$b', '$c', '$d', '$e', '$f', '$date')");
$sql3= mysql_query("insert into come (reg, isbn, type, title, author, year, date_av) values ('$a', '$b', '$c', '$d', '$e', '$f', '$date')");
$sql1= mysql_query("DELETE FROM borrow WHERE isbn = '$b'");
}
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
      <p><strong><font size="5"><em>Return Books</em></font></strong> </p>
      <form id="form6" name="form6" method="post" action="">
        <p>Reg.No
          <input name="reg" type="text" id="reg" />
        </p>
        <p>ISBN
          <input name="isbn" type="text" id="isbn" />
        </p>
        <p>Type
          <select name="type" id="type">
            <option>.....</option>
            <option>ICT</option>
            <option>BUSINEES</option>
            <option>ECONOMICS</option>
            <option>EDUCATION</option>
          </select>
</p>
        <p>Title
          <input name="title" type="text" id="title" />
        </p>
        <p>Author
          <input name="author" type="text" id="author" />
        </p>
        <p>Year
          <input name="year" type="text" id="year" />
        </p>
        <p>
          <input name="return" type="submit" id="return" value="Return" />
        </p>
      </form>
    <p></p></td>
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
