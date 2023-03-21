<?php
    $username = $_POST ["username"];
    $password = $_POST ["password"];


$conn = mysqli_connect("localhost","root","","db_tes_catatan");

$data = Array();
$qry = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");


    if (mysqli_num_rows($qry)>0)
    {
        $row = mysqli_fetch_assoc($qry);
        $data ["status"] = "200";
        $data ["pesan"] = "succes";
        $data ["user"] = $row ;
    }
    else
    {
        $data["status"] = "error";
        $data["pesan"] = "try again";
    }

    echo json_encode ($data);
?>