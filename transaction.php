<?php
$conn= mysql_connect("localhost","root","");
mysql_select_db("ict",$conn);
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
  <tr align="center">
    <td width="585" height="510" valign="top"><p><strong><font size="5"><em>All Transactions Done</em></font></strong> </p>
    <p><strong><font size="5"><em>Books Borrowed</em></font></strong> 
      <table width="762" border="0">
        <tr bgcolor="#66FFFF">
          <td width="141"><div align="center">Reg.No</div></td>
          <td width="57"><div align="center">ISBN</div></td>
          <td width="104"><div align="center">Types</div></td>
          <td width="110"><div align="center">Title</div></td>
          <td width="104"><div align="center">Author</div></td>
          <td width="67"><div align="center">Year</div></td>
          <td width="133"><div align="center">Date</div></td>
        </tr>
		<?php
      $conn= mysql_connect("localhost","root","");
      mysql_select_db("ict",$conn);
      $sql= mysql_query("select * From books");
	  while($myrow= mysql_fetch_array($sql)){
	  echo '
        <tr bgcolor="#EEEEEE">
		<td>'.$myrow[reg].'</td>
          <td>'.$myrow[isbn].'</td>
          <td>'.$myrow[type].'</td>
          <td>'.$myrow[title].'</td>
          <td>'.$myrow[author].'</td>
          <td>'.$myrow[year].'</td>
          <td>'.$myrow[date_av].'</td>
        </tr>';}
		?>
      </table>
      <p>&nbsp;</p>
      <p><strong><font size="5"><em>Books Returned </em></font></strong></p>
      <table width="747" border="0">
        <tr bgcolor="#66FFFF">
          <td width="142"><div align="center">Reg.No</div></td>
          <td width="64"><div align="center">ISBN</div></td>
          <td width="103"><div align="center">Types</div></td>
          <td width="116"><div align="center">Title</div></td>
          <td width="102"><div align="center">Author</div></td>
          <td width="58"><div align="center">Year</div></td>
          <td width="132"><div align="center">Date</div></td>
        </tr>
        <?php
      $conn= mysql_connect("localhost","root","");
      mysql_select_db("ict",$conn);
      $sql1= mysql_query("select * From come");
	  while($myrow= mysql_fetch_array($sql1)){
	  echo '
        <tr bgcolor="#EEEEEE">
		<td>'.$myrow[reg].'</td>
          <td>'.$myrow[isbn].'</td>
          <td>'.$myrow[type].'</td>
          <td>'.$myrow[title].'</td>
          <td>'.$myrow[author].'</td>
          <td>'.$myrow[year].'</td>
          <td>'.$myrow[date_av].'</td>
        </tr>';}
		?>
      </table>
      <p>&nbsp;</p>
      <p>
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
