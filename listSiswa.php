<?php
header('Content-Type: application/json');
include_once "koneksi.php";

$query = mysqli_query($conn,"select * from siswa");
$data = mysqli_fetch_all($query,MYSQLI_ASSOC);
echo json_encode($data);

?>