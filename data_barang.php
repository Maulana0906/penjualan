<?php
require "function.php";

$barang = query("SELECT * FROM barang");

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        table {
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
    <h1  class="my-3" style="text-align: center;">Daftar barang</h1>
    <a href="tambah_barang.php">
        <button class="btn btn-primary my-3"> Tambah barang
        </button></a>
    <table class="table table-striped table-hover">
        <tr>
            <th>No</th>
            <th>Id barang</th>
            <th>Nama barang</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Id supplier</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1;
        ?>
        <?php foreach ($barang as $brg) { ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $brg["id_barang"]; ?></td>
                <td><?= $brg["nama_barang"]; ?></td>
                <td><?= $brg["harga"]; ?></td>
                <td><?= $brg["stok"]; ?></td>
                <td><?= $brg["id_supplier"]; ?></td>
                <td>
                    <a href="ubah-data.php?id=<?=$brg["id_barang"]; ?>">
                        <button class="btn btn-primary">
                            Edit
                        </button>
                    </a>
                    <a href="hapus_barang.php?id=<?= $brg["id_barang"]; ?>">
                        <button class="btn btn-danger">
                            Delete
                        </button>
                    </a>
                </td>
            </tr>
        <?php
            $i++;
        } ?>


    </table>

</body>

</html>