<?php

$servename = "localhost:3306";
$username = "root";
$password = "";
$database = "siak";

$conn = mysqli_connect($servename, $username, $password, $database);

if($conn->connect_error){
    die("koneksi gagal");
}else{
    echo "Koneksi berhasil";
}