<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="index.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD DASAR AGUS</title>
</head>
<body>
    <h2>
        DATA MAHASISWA TEKNIK INFORMATIKA 2020
    </h2>
    <form action="data.php" method="post">
        <table>
            <tr>
                <td>Nama</td><td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>NIM</td><td><input type="text" name="nim"></td>
            </tr>
            <tr>
                <td>Jurusan</td><td><input type="text" name="jurusan"></td>
            </tr>
        </table>
        <tr>
            <td  colspan=2>
                <input type="submit" name="btn" value="insert">
                <input type="submit" name="btn" value="update">
                <input type="submit" name="btn" value="delete">
            </td>
        </tr>
    </form>
    <br>

    <?php

    $koneksi=mysqli_connect("localhost","root","");
    mysqli_select_db($koneksi,"datamahasiswa");

    $hasil=mysqli_query($koneksi,"select * from mhs");


    echo "<table border=1 cellpadding=2 cellspacing=0>";
    echo "<tr><td>Nama</td><td>NIM</td><td>Jurusan</td></tr>";
    while($data=mysqli_fetch_row($hasil)){
        //var dump =($data=mysqli_fetch_row($hasil));
        echo "<tr><td>$data[0]</td><td>$data[1]</td><td>$data[2]</td></tr>";
    }


    ?>
    
</body>
</html>