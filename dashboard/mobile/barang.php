<?php
//$barang = $_POST["barang"];
/*$barang = "meja";
$id_barang = $_POST["id"];
$id_nama = $_POST["nama"];

echo $id_barang;
echo $id_nama;*/


//my sqli connect (url/alamat ip server, username, password, namadatabase)
//$conn = mysqli_connect("localhost","root","","database_mobile");

/*//variabel data untuk menyimpan hasil query database
$data = Array();

//my sqli querry (koneksinya, querrynya)
$qry = mysqli_query($conn, "select * from barang where nama_barang like '%$barang%' order by nama_barang");

while ($row = mysqli_fetch_array($qry))
{
    $data[]= $row;
}

echo json_encode ($data);
*/

$nama_barang= $_POST ["nama_barang"];
$conn = mysqli_connect("localhost","root","","database_mobile");

$qry = mysqli_query($conn, "insert into barang (nama_barang) values ('$nama_barang')");

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
