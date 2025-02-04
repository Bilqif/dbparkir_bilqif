<?php

$server = "localhost";
$username = "root";
$password = "";
$database_name = "dbparkir_bilqif";

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "dbparkir_bilqif"
);

//cek koneksi
if(!$conn){
    die("Connection is fail" . mysqli_connect_error());
}
