<?php
    $nama_barang = $_POST ["nama_barang"];
    $id_user = $_POST ["id_user"];
    $kategori = $_POST ["kategori"];
    $barcode = $_POST ["barcode"];
    $harga_jual = $_POST ["harga_jual"];
    $harga_beli = $_POST ["harga_beli"];
   // $stok = $_POST ["stok"];

    $conn = mysqli_connect("localhost","root","","db_tes_catatan");

    $qry = mysqli_query($conn, "INSERT INTO barang (id_user, barcode, nama_barang, kategori, harga_beli, harga_jual) 
    VALUES ('$id_user','$barcode', '$nama_barang', '$kategori','$harga_beli','$harga_jual')");

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
