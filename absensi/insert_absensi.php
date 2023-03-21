<?php
    // $nama_barang = $_POST ["nama_barang"];
    // $id_user = $_POST ["id_user"];
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

    $qry = mysqli_query($conn, "INSERT INTO absensi (id_user, waktu_masuk, foto_masuk, waktu_keluar, foto_keluar) 
    VALUES ('$id_user', '$waktu_masuk', '$foto_masuk','$waktu_keluar','$foto_keluar')");

    $data = array ();
    if ($error = mysqli_error($conn))
    {
        $data ["status"] = "error";
        $data ["pesan"] = "error boss";
    }
    else
    {
        $data["status"] = "200";
        $data["pesan"] = "masukan anda diterima";
    }

    echo json_encode ($data);
?>
