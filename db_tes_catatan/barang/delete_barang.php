<?php
// $nama_barang = $_POST ["nama_barang"];
// $id_user = $_POST ["id_user"];
// $kategori = $_POST ["kategori"];
// $barcode = $_POST ["barcode"];
// $harga_jual = $_POST ["harga_jual"];
// $harga_beli = $_POST ["harga_beli"];
// $stok = $_POST ["stok"];
$id_barang = $_POST ["id_barang"];


$conn = mysqli_connect("localhost","root","","db_tes_catatan");

$qry = mysqli_query($conn, "DELETE from barang where id_barang = $id_barang ");

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
