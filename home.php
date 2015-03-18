<? session_start();
if (session_is_registered('id'))
{
	$_SESSION['id'];
	$_SESSION['user'];
	
	?>
	<html>
	<head>
		<title>[Admin]</title>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<style type="text/css">
		<!--
.style2 {
	font-family: "comic Sans MS";
	font-size: 14px;
}
.style3 {
	font-family: Arial, Helvetica, sans-serif;
	font-style: italic;
}
.style4 {font-family: Arial, Helvetica, sans-serif}
.style5 {
	color: #FF0000;
	font-weight: bold;
}
		-->
		</style>
	</head>
	<body background="./img/background.jpg">
	<p>&nbsp;</p>
		<table border="0" align="center" bgcolor="#FFFFFF">
		<tr>
			<td width="501">
			
			
			
			<table width="547" height="368" border="0" align="center">
			<tr>
				<td width="444" height="32" align="center" valign="top" class="style4"><marquee behavior="scroll" scrollamount="3">Selamat Datang <? echo $_SESSION['user_name'];?>
				</marquee>
				</td>
			</tr>
			<tr>
				<td height="21" align="center" bgcolor="#00CCFF"><a href="logout.php" class="style5" title="Keluar">Menu Logout</a></td>
			</tr>
			<tr>
				<td height="260" align="center" bgcolor="#0099FF">
				  <span class="style3">isi dari web anda</span></td>
			</tr>
			<tr>
				<td height="45"><div align="center" class="style2">Copyright &copy; ri32.wordpress.com</div></td>
			</tr>
			</table>
			
			
		  </td>
		</tr>
		</table>
	    <p>&nbsp;</p>
	</body>
	</html>
<?
}else{
	?><script language="javascript">
	alert("Maaf, Anda tidak berhak mengakses halaman ini!!");
	document.location="login.php";
	</script>
	<?
}
?>