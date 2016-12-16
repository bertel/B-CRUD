<?php
include "koneksi.php";
$delete = mysql_query("DELETE FROM b_user WHERE id_user='$_GET[id]'");
if($delete == TRUE){
	echo "data berhasil di delete <br>
	<a href='index.php'> Back </a>
	";
	
}else {
	echo "gagal delete <br>
	<a href='index.php'> Back </a>
	";
	
}
?>