<?php
$dbname='bookinghotel';
$host='localhost';
$password='';
$username='root';
//Koneksi Ke MySQL
$cnn = mysqli_connect($host,$username,$password,$dbname);
//Membuat Koneksi
if(!$cnn){
die("Koneksi Failed : ".mysqli_connect_error()); }
//Membuat Tabel
$sql ="CREATE TABLE tblogin (
    username VARCHAR(50) NULL PRIMARY KEY,
    password VARCHAR(50) Null,
    )";
if (mysqli_query($cnn, $sql)){
echo "Table Berhasil di Buat";
} else {
echo "Table Gagal di Buat :".mysqli_error($cnn); }
mysqli_close($cnn);
?>