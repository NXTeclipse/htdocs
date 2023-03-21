<?php
// $nama_barang = $_POST ["nama_barang"];
//$id_user = $_POST ["id_user"];
// $kategori = $_POST ["kategori"];
// $barcode = $_POST ["barcode"];
// $harga_jual = $_POST ["harga_jual"];
// $harga_beli = $_POST ["harga_beli"];
// $stok = $_POST ["stok"];

$id_absen = $_POST ["id_absen"];
$id_user = $_POST ["id_user"];
$waktu_masuk = $_POST ["waktu_masuk"];
$foto_masuk = $_POST ["foto_masuk"];
$waktu_keluar = $_POST ["waktu_keluar"];
$foto_keluar = $_POST ["foto_keluar"];

$conn = mysqli_connect("localhost","root","","absensi");

$qry = mysqli_query($conn, "SELECT * FROM absensi where id_user='$id_user'");

while ($row = mysqli_fetch_assoc($qry))
{
    $data["barang"][] = $row;
}
echo json_encode ($data);
?>