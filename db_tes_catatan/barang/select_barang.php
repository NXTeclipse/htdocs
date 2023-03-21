<?php
// $nama_barang = $_POST ["nama_barang"];
$id_user = $_POST ["id_user"];
// $kategori = $_POST ["kategori"];
// $barcode = $_POST ["barcode"];
// $harga_jual = $_POST ["harga_jual"];
// $harga_beli = $_POST ["harga_beli"];
// $stok = $_POST ["stok"];*/

$conn = mysqli_connect("localhost","root","","db_tes_catatan");

$qry = mysqli_query($conn, "SELECT * FROM barang where id_user='$id_user'");

while ($row = mysqli_fetch_assoc($qry))
{
    $data["barang"][] = $row;
}
echo json_encode ($data);
?>