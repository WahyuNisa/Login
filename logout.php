<? session_start();
if (session_is_registered('id'))
{
	session_unregister("id");
	session_unregister("user_name");
	//session_destroy();
	?><script language="javascript">
	alert("Anda Berhasil logout.");
	document.location="login.php";
	</script><?
	
}else{
	?><script language="javascript">
	alert("Maaf, Anda tidak berhak mengakses halaman ini!!");
	document.location="login.php";
	</script>
	<?
}
?>