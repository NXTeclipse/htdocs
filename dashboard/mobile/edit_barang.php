<?php
$id_barang = $_POST ["id_barang"];
$nama_barang = $_POST ["nama_barang"];

$conn = mysqli_connect("localhost","root","","database_mobile");

$qry = mysqli_query($conn, "UPDATE barang set nama_barang = '$nama_barang' where id_barang = '$id_barang'");

$data = array ();
if ($error = mysqli_error($conn))
{
    $data ["status"] = "success";
    $data ["pesan"] = "$error";
}
else
{
    $data["status"] = "succes";
    $data["pesan"] = "";
}

echo json_encode ($data);
?>