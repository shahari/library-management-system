<?php 
$db = mysql_connect("localhost", "root", "");
mysql_select_db("ict",$db);
if(isset($_POST['log'])){
$username= $_POST['username'];
$password = $_POST['password'];
if($username == NULL OR $password == NULL){
//$report.="<div align='center' class='style8'><strong>Enter a Username & Password..</strong></div>";
echo $report.="<div align='center' class='style8'><strong><blink>Please insert your Username or Password </blink></strong></div>";
}
//else($username != username or $password != password){
//echo "wrong username or password";
//}
else{
$check_user_data = mysql_query("SELECT * FROM `log` WHERE username = '$username' AND password = '$password'") or die(mysql_error());
if(mysql_num_rows($check_user_data) == 0){
echo $report.="<div align='center' class='style8'><strong><blink>Username or Password Invalid..</blink></strong></div>";
}else{
$get = mysql_fetch_array($check_user_data);
if($get['password'] == $password){
$start_idsess = $_SESSION['username'] = "".$get['username']."";
$start_passsess = $_SESSION['password'] = "".$get['password']."";
header("Location: view_reg.php");
exit;
}}}}
?>
<?php 
$db = mysql_connect("localhost", "root", "");
mysql_select_db("ict",$db);
if(isset($_POST['login'])){
$username= $_POST['username'];
$password = $_POST['password'];
if($username == NULL OR $password == NULL){
//$report.="<div align='center' class='style8'><strong>Enter a Username & Password..</strong></div>";
echo $report.="<div align='center' class='style8'><strong><blink>Please insert your Username or Password </blink></strong></div>";
}
//else($username != username or $password != password){
//echo "wrong username or password";
//}
else{
$check_user_data = mysql_query("SELECT * FROM `login` WHERE username = '$username' AND password = '$password'") or die(mysql_error());
if(mysql_num_rows($check_user_data) == 0){
echo $report.="<div align='center' class='style8'><strong><blink>Username or Password Invalid..</blink></strong></div>";
}else{
$get = mysql_fetch_array($check_user_data);
if($get['password'] == $password){
$start_idsess = $_SESSION['username'] = "".$get['username']."";
$start_passsess = $_SESSION['password'] = "".$get['password']."";
header("Location: searc_stud.php");
exit;
}}}}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>library system</title>
<style type="text/css">
<!--
.style2 {font-style: italic; font-weight: bold; font-size: 16px;}
.style3 {
	color: #000000;
	font-style: italic;
	font-weight: bold;
}
.style4 {
	font-size: 18px;
	font-style: italic;
	font-weight: bold;
}
.style5 {font-size: 18px}
-->
</style>
</head>

<body bgcolor="#99CCCC">
<table bgcolor="#FFFFFF" width="764" height="171" border="0" align="center">
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
    <td width="297" height="414" align="center" valign="top"><p><em><strong>The Administrator </strong></em></p>
      <p><img src="images/McGill_University_Library_Cybertheque.jpg" width="276" height="205" /></p>
    <p><em><strong>If you are the one Login   !! </strong></em></p>
    <form id="form1" name="form1" method="post" action="">
      <p>Username
        <input name="username" type="text" id="username" />
      </p>
      <p>Password
        <input name="password" type="password" id="password" />
      </p>
      <p>
        <input name="log" type="submit" id="log" value="Login" />
      </p>
      </form>
    </td>
    <td width="457" align="center" valign="top"><p class="style4">
      Welcome to St. Lawrence University Library</p>
      <p class="style2"><img src="images/5931996-three-happy-students-learning-in-university-library.jpg" width="334" height="219" /></p>
      <p class="style2">If You are a Librarian just login </p>
      <form id="form2" name="form2" method="post" action="">
        <p>Username
          <input name="username" type="text" id="username" />
      </p>
        <p>Password
          <input name="password" type="password" id="password" />
</p>
        <p>
          <input name="login" type="submit" id="login" value="Login" />
        </p>
    </form>      <p class="style2">&nbsp;</p></td>
  </tr>
</table>
<table bgcolor="#99CCFF" width="764" border="0" align="center">
  <tr>
    <td align="center" valign="top"><span class="style3"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Copyright &copy; St.Lawrence University Library 2015-16, All
    right reserved.</font></span></td>
  </tr>
</table>
</body>
</html>
<?php 
$db = mysql_connect("localhost", "root", "");
mysql_select_db("big",$db);
if(isset($_POST['login'])){
$username= $_POST['username'];
$password = $_POST['password'];
if($username == NULL OR $password == NULL){
//$report.="<div align='center' class='style8'><strong>Enter a Username & Password..</strong></div>";
echo $report.="<div align='center' class='style8'><strong><blink>Please insert your Username or Password </blink></strong></div>";
}
//else($username != username or $password != password){
//echo "wrong username or password";
//}
else{
$check_user_data = mysql_query("SELECT * FROM `login` WHERE username = '$username' AND password = '$password'") or die(mysql_error());
if(mysql_num_rows($check_user_data) == 0){
echo $report.="<div align='center' class='style8'><strong><blink>Username or Password Invalid..</blink></strong></div>";
}else{
$get = mysql_fetch_array($check_user_data);
if($get['password'] == $password){
$start_idsess = $_SESSION['username'] = "".$get['username']."";
$start_passsess = $_SESSION['password'] = "".$get['password']."";
header("Location: librarians.php");
exit;
}}}}
?>

