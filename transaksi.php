<?php
require "function.php";

$barang = query("SELECT * FROM transaksi");

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        table{
            text-align: center;
        }
        nav{
            width: 100%;
            height: 40px;
            display: flex;
            justify-content: space-between;
            padding: 0px 30px;
        }
        ul{
            display: flex;
            height: 100%;
            align-items: center;
        }
        li{
            list-style-type: none;
            margin: 0px 15px;
        }
        a{
            text-decoration: none;
            color: white;
        }
        h4{
            color: white;
            font-size: 30px;
        }
    </style>

</head>

<body>
<nav class="bg-primary">
        <h4>R & A</h4>
        <ul>
            <a href="index.php">
                <li>Home</li>
            </a>
            <a href="data_barang.php">
                <li>Barang</li>
            </a>
            <a href="pembayaran.php">
                <li>Pembayaran</li>
            </a>
            <a href="pembeli.php">
                <li>Pembeli</li>
            </a>
            <a href="supplier.php">
                <li>Supplier</li>
            </a>
            <a href="transaksi.php">
                <li>Transaksi</li>
            </a>
        </ul>
    </nav>
    <h1 class="my-3" style="text-align: center;">Daftar transaksi</h1>
    <table class="table table-striped table-hover">
        <tr>
            <th>No</th>
            <th>Id transaksi</th>
            <th>Id barang</th>
            <th>Id pembeli</th>
            <th>Tanggal</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($barang as $brg) { ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $brg["id_transaksi"]; ?></td>
                <td><?= $brg["id_barang"]; ?></td>
                <td><?= $brg["id_pembeli"]; ?></td>
                <td><?= $brg["tanggal"]; ?></td>
                <td><?= $brg["keterangan"]; ?></td>
                <td>
                    <button><a href="">Edit </a></button>
                    <button><a href="">Delete</a></button>
                </td>
            </tr>
        <?php
            $i++;
        } ?>


    </table>

</body>

</html>