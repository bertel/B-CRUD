<?php
include "koneksi.php";
$read = mysql_fetch_array(mysql_query("SELECT * FROM b_user WHERE id_user='$_GET[id]'"));
?>

<form method="post">
<input type="hidden" name="id" value="<?php echo $read["id_user"]; ?>" > 
Nama : <input type="text" name="nama" value="<?php echo $read["nama"]; ?>"> 
Email : <input type="email" name="email" value="<?php echo $read['email']; ?>">
Password :<input type="text" name="password"value="<?php echo $read['password']; ?>">
<input type="submit" name="update">
</form>

<?php
if(isset($_POST["update"])){
	$id_user = $_POST["id"];
	$nama = $_POST["nama"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	$update = mysql_query("UPDATE b_user SET nama='$nama', email='$email', password='$password' WHERE id_user='$id_user'");
	if($update == TRUE){
		 echo "sukses";
	 }else{
		 echo "gagal";
	 }
}
?>