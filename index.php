<!DOCTYPE html>

<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $databse = "db_mart";

    $koneksi = mysqli_connect($server,$username,$password,$databse);

    $data ="SELECT * FROM `karyawan` ";

    $hasil = mysqli_query($koneksi,$data);

 
mysqli_close($koneksi);

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP DAY 03 - Belajar DBMS</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class=" mx-8">

<div class="container py-5">

<div class="row">

    <div class="col">
        <h2>Data Karyawan</h2>
        <Table class="border-collapse ">
            <tr>
                <th class="border border-slate-300 p-3" >NO</th>
                <th class="border border-slate-300 p-3">Nama</th>
                <th class="border border-slate-300 p-3">Email</th >
                <th class="border border-slate-300 p-3">JK</th>
                <th class="border border-slate-300 p-3">ALAMAT</th>
            </tr>

            <tr>

            <?php
            while($row = mysqli_fetch_assoc($hasil)){ ?>

                <tr>
                    <td class="border border-slate-300 p-3"> 1 </td>
                    <td class="border border-slate-300 p-3"> <?=  $row['nama_karyawan'] ?> </td>
                    <td class="border border-slate-300 p-3"> <?=  $row['email'] ?> </td>
                    <td class="border border-slate-300 p-3"> <?=  $row['jk'] ?> </td>
                    <td class="border border-slate-300 p-3"> <?=  $row['alamat_jalan'] .' '. $row['alamat_distrik'] ?> </td>
                 
                          
                </tr>
            
          <?php }  ?>

            </tr>
        </Table>
    </div>

</div>

</div>



</body>
</html>