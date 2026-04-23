<?php
header('Content-Type: application/json');
include_once "koneksi.php";
if(isset($_GET['nisn']))
    {
        $nisn = (int) $_GET['nisn'];
        $query = mysqli_query($conn,"select nama, alamat from siswa where nisn =$nisn");
        $data = mysqli_fetch_all($query,MYSQLI_ASSOC);
        echo json_encode($data);
    }else{
        echo json_encode();
        }

?>