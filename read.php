<head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
</style>
</head>
<?php
include "koneksi.php";
$sql = mysql_query("SELECT * FROM b_user");
echo "<table style='width:100% ' >
	<thead>
	<tr>
	<th> No </th>
	<th> Nama </th>
	<th> Email </th>
	<th> Password </th>
	<th> Action </th>
	
	</tr>
	<thead>
	<tbody>
";
$no =1;
while($read = mysql_fetch_array($sql)){
	echo "
	<tr>
	<td>$no </td>
	<td>$read[nama] </td>
	<td>$read[email] </td>
	<td>$read[password] </td>
	<td><a href='delete.php?id=$read[id_user]'> Delete</a> <a href='update.php?id=$read[id_user]'>Update</a></td>
	</tr>
	";
	$no++;
}
?>
</tbody>
</table>