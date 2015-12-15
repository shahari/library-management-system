<?php

$conn= mysql_connect("localhost","root","");
mysql_select_db("ict",$conn);
if(isset($_POST['add'])){
$a= $_POST['isbn'];
$b= $_POST['type'];
$c= $_POST['title'];
$d= $_POST['author'];
$e= $_POST['year'];
$date = date("dd mm yy H:i");
$sql= mysql_query("insert into available (isbn, type, title, author, year, date_av) values ('$a', '$b', '$c', '$d', '$e', '$date')");

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
    <td width="197" height="510" align="center" valign="top"><p>&nbsp;</p>
      <p><strong><font size="5"><em>Add New Books </em></font></strong></p>
      <p>&nbsp;</p>
      <form id="form6" name="form6" method="post" action="">
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
          <input name="add" type="submit" id="add" value="Add" />
        </p>
      </form>      <p><em><strong><font size="5"></font></strong></em></p></td>
    <td width="557" align="center" valign="top"><p>&nbsp;</p>
	
    <p><strong><em>BOOKS AVAILABLE</em></strong> </p>
    <table width="557" border="0">
      <tr bgcolor="#00CCCC">
        <td width="47" align="center">ISBN</td>
        <td width="74" align="center">Types</td>
        <td width="109" align="center">Title</td>
        <td width="107" align="center">Author</td>
        <td width="51" align="center">Year</td>
      </tr>
	 <?php
$conn= mysql_connect("localhost","root","");
mysql_select_db("big",$conn);
	  $sql1= mysql_query("select * from available");
	   while($myrow= mysql_fetch_array($sql1)){
	   echo'
      <tr bgcolor="#EEEEEE">
        <td>'.$myrow[isbn].'</td>
        <td>'.$myrow[type].'</td>
        <td>'.$myrow[title].'</td>
        <td>'.$myrow[author].'</td>
        <td>'.$myrow[year].'</td>
       
      </tr>';}
    echo'</table> '; ?>  
   
  
</table>
<table bgcolor="#DDDDDD" width="764" border="0" align="center">
  <tr>
    <td><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><strong><em>Copyright &copy; St.Lawrence University Library 2015-16, All
    right reserved.</em></strong></font></div></td>
  </tr>
</table>
</body>
</html>
