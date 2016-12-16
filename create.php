<?php
include "koneksi.php";
?>
<form method="post">
Nama : <input type="text" name="nama"> 
Email : <input type="email" name="email">
Password :<input type="password" name="password">
<input type="submit" name="kirim">
</form>

<?php
if(isset($_POST["kirim"])){
	$nama = $_POST["nama"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	 $create = mysql_query("INSERT INTO b_user (nama,email,password) VALUES ('$nama', '$email', '$password')");
	 if($create == TRUE){
		 echo "sukses";
	 }else{
		 echo "gagal";
	 }
	 
}
?>