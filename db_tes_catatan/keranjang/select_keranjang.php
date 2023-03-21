<?php
/*$nama_barang = $_POST ["nama_barang"];
$id_user = $_POST ["id_user"];
$kategori = $_POST ["kategori"];
$barcode = $_POST ["barcode"];
$harga_jual = $_POST ["harga_jual"];
$harga_beli = $_POST ["harga_beli"];
$stok = $_POST ["stok"];*/

$conn = mysqli_connect("localhost","root","","db_tes_catatan");

$qry = mysqli_query($conn, "SELECT * FROM `keranjang` WHERE id_user=0 AND id_keranjang=19;");

$data = array ();
if ($error = mysqli_error($conn))
{
    $data ["status"] = "error";
    $data ["pesan"] = "$error";
}
else
{
    $data["status"] = "succes";
    $data["pesan"] = "masukan anda diterima";
}

echo json_encode ($data);
?>