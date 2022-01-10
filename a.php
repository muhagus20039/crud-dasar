<?php
//pengoneksian ke database
$koneksi=mysqli_connect('localhost','root','');
mysqli_select_db($koneksi,'datamahasiswa');

//inisialisasi variabel yang ada
$nama=$_POST["nama"];
$nim=$_POST["nim"];
$jurusan=$_POST["jurusan"];
$btn=$_POST["btn"];

if ($btn == "insert"){
    $sql = "INSERT INTO mhs (nama,nim,jurusan) VALUES ('$nama','$nim','$jurusan')";
    mysqli_query($koneksi,$sql);
}

if ($btn == "update"){
    $sql = "UPDATE mhs set nama='$nama', nim='$nim', jurusan='$jurusan' WHERE nim='$nim'";
    mysqli_query($koneksi,$sql);
}

if ($btn == "delete"){
    $sql = "DELETE FROM mhs WHERE nim='$nim'";
    mysqli_query($koneksi,$sql);
}


header("location: belajar.php");

?>