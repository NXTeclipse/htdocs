<?php
$nama_barang = $_POST ["nama_barang"];
$id_barang = $_POST ["id_barang"];
$id_user = $_POST ["id_user"];
$kategori = $_POST ["kategori"];
$barcode = $_POST ["barcode"];
$harga_jual = $_POST ["harga_jual"];
$harga_beli = $_POST ["harga_beli"];
//$stok = $_POST ["stok"];


$conn = mysqli_connect("localhost","root","","db_tes_catatan");

$qry = mysqli_query($conn, "UPDATE barang set   nama_barang = '$nama_barang', 
                                                id_user = '$id_user', 
                                                barcode = '$barcode', 
                                                kategori = '$kategori', 
                                                harga_beli = '$harga_beli',
                                                harga_jual ='$harga_jual'  
                                                where id_barang = '$id_barang'");

$data = array ();
if ($error = mysqli_error($conn))
{
    $data ["status"] = "200";
    $data ["pesan"] = "$error";
}
else
{
    $data["status"] = "200";
    $data["pesan"] = "";
}

echo json_encode ($data);
?>
