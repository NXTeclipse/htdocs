<?php
    $nama_barang = $_POST ["nama_barang"];
    $id_user = $_POST ["id_user"];
    $kategori = $_POST ["kategori"];
    $barcode = $_POST ["barcode"];
    $harga_jual = $_POST ["harga_jual"];
    $harga_beli = $_POST ["harga_beli"];
    $stok = $_POST ["stok"];
    $id_keranjang = $_POST ["id_keranjang"];
    $status = $_POST ["status"];
    $qty = $_POST ["qty"];
    $total_harga = $_POST ["total_harga"];
    $id_keranjang = $_POST ["id_keranjang"];
    $id_penjualan = $_POST ["id_penjualan"];


    $conn = mysqli_connect("localhost","root","","db_tes_catatan");

    $qry = mysqli_query($conn, "INSERT INTO Penjualan (id_keranjang, id_user, qty,  status) 
    VALUES ('$id_keranjang','$id_user', '$qty', '$status')");

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
