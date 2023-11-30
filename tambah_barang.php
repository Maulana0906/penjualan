<?php 
require "function.php";

$supplier = query("SELECT * FROM supplier");
if (isset($_POST['tambah'])){
    if(tambah_barang($_POST) > 0){
        echo  "<script>
        alert('Data berhasil ditambah');
        document.location.href='data_barang.php';
        </script>";

    }else {
        echo  "<script>
        alert('Data gagal ditambah');
        document.location.href='data_barang.php';
        </script>";

    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         form{
            width: 300px;
            margin-left: 20px;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>Tambah Data Barang</h1>
    <form action="" method="post">
        <div>
            <label for="nama">Nama Barang</label>
            <input type="text" class="form-control" name="nama" id="nama"
            required>
        </div>
        <div>
            <label for="harga">Harga Barang</label>
            <input type="number" class="form-control" name="harga" id="harga"
            required>
        </div>
        <div>
            <label for="harga">Stok Barang</label>
            <input type="number" name="stok" id="stok" class="form-control"
            required>
        </div>
        <div>
            <label for="id_supplier">ID Supplier</label>
            <select name="id_supplier" id="id_supplier" class="form-control">
                <?php foreach ($supplier as $s) : ?>
                <option value="<?= $s['id_supplier']; ?>">
                <?= $s['nama_supplier']; ?>
                </option>
                <?php endforeach; ?>
            
            </select>
        </div>
        <button class="btn btn-primary my-3" type="submit" name="tambah">Tambah Data</button>

    </form>
    
</body>
</html>

