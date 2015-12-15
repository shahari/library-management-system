<?php

$conn= mysql_connect("localhost","root","");
mysql_select_db("ict",$conn);
$sql= mysql_query("Select * From students");

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
    <td width="168"><form id="form5" name="form5" method="post" action="view_reg.php">
      <div align="center">
        <input name="reg" type="submit" id="reg" value="View Registration" />
        </div>
    </form>    </td>
    <td width="154"><form id="form4" name="form4" method="post" action="available.php">
      <div align="center">
        <input name="book" type="submit" id="book" value="Books Available" />
        </div>
    </form>    </td>
    <td width="138"><form id="form3" name="form3" method="post" action="transaction.php">
      <div align="center">
        <input name="view" type="submit" id="view" value="View Transactions" />
        </div>
    </form>    </td>
    <td width="102"><form id="form1" name="form1" method="post" action="index.php">
      <div align="center">
        <input name="logout" type="submit" id="logout" value="Logout" />
        </div>
    </form>    </td>
  </tr>
</table>
<table bgcolor="#DDDDDD" width="764" border="0" align="center">
  <tr>
    <td width="585" height="510" align="center" valign="top">&nbsp;
      <p><strong><font size="5"><em>Students Registered </em></font></strong></p>
         <table bgcolor="#CC9999" width="754" border="0">
        <tr>
          <td width="76" align="center"><strong>First Name</strong></td>
          <td width="75" align="center"><strong>Last Name</strong></td>
          <td width="155" align="center"><strong>Reg.No</strong></td>
          <td width="55" align="center"><strong>Faculty</strong></td>
          <td width="42" align="center"><strong>Year</strong></td>
          <td width="45" align="center"><strong>Sem</strong></td>
          <td width="102" align="center"><strong>Phone</strong></td>
          <td width="72" align="center"><strong>Address</strong></td>
          <td width="41" align="center"><strong>Edit</strong></td>
          <td width="49" align="center"><strong>Delete</strong></td>
        </tr>
       <?php
			include("db.php");
			
				
			$result= mysql_query("SELECT * FROM students");
			
			while($test = mysql_fetch_array($result))
			{
				$reg = $test['reg'];	
				echo "<tr bgcolor= #FFFFFF align='center'>";
				echo"<td><font color='black'>" .$test['fname']."</font></td>";
				echo"<td><font color='black'>" .$test['lname']."</font></td>";
				echo"<td><font color='black'>" .$test['reg']."</font></td>";
				echo"<td><font color='black'>". $test['faculty']. "</font></td>";
				echo"<td><font color='black'>". $test['semester']. "</font></td>";
				echo"<td><font color='black'>". $test['year']. "</font></td>";
				echo"<td><font color='black'>" .$test['phone']."</font></td>";
				echo"<td><font color='black'>" .$test['address']."</font></td>";
				echo"<td> <a href ='update.php?reg=$reg'>Edit</a>";
				echo"<td> <a href ='del.php?reg=$reg'>Delete</a>";
									
				echo "</tr>";
			}
			mysql_close($conn);
			?>
      </table>
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