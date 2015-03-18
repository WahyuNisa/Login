<? session_start();
if (isset($_POST['user']))
{
	include ("conn.php");
	$user_name=htmlentities((trim($_POST['user'])));
	$password=htmlentities(md5($_POST['kunci']));
	
	$login=mysql_db_query($db,"select * from user where user='$user_name' and password='$password'",$koneksi);
	
	$cek_login=mysql_num_rows($login);
		if (empty($cek_login))
		{
			?><script language="javascript">
			alert("Maaf, Password Anda salah!!");
			document.location="login.php";
			</script><?
		}
		else
		{
			//daftarkan ID jika user dan password BENAR
			while ($row=mysql_fetch_array($login))
			{
				$id=$row[0];
				session_register('id');
				session_register('user_name');
			}
			echo "<script> document.location.href='home.php'; </script>";
		}
}
?>


<html>
<title>Login</title>
<head>
<script language="javascript">
function cek(){
	var user= document.getElementById('userid').value;
	var pass= document.getElementById('passwd').value;
	if(user.replace(/^\s+|\s+$/g, '')==''){
		alert('Username Harus Diisi!');
		return false;
	} 
	if(pass.replace(/^\s+|\s+$/g, '')==''){
		alert('Password Harus diisi!');
		return false;
	}
	return true;
}
