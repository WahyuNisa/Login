<html>
<head>
</head>
<body>
<?
ini_set('display_errors',FALSE);
$host="localhost";
$user="root";
$pass="";
$db="spbu";


$koneksi=mysql_connect($host,$user,$pass);
$tanggal=date("Y-m-d H:i:s");

if ($koneksi)
{
	//echo "berhasil : )";
}else{
	?><script language="javascript">alert("Gagal Koneksi Database MySql !!")</script><?
}

?>

</body>
</html>
