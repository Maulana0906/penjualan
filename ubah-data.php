<?php 
require "function.php";

$id = isset($_GET["id"]) ? $_GET["id"] : 0;

$brg = query("SELECT * FROM barang WHERE id_barang = $id") ;

if (isset($_POST['submit'])){
    if(ubah_barang($_POST) > 0){
        echo  "<script>
        alert('Data berhasil diubah');
        document.location.href='data_barang.php';
        </script>";

    }else {
        echo  "<script>
        alert('Data gagal diubah');
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
    <title>Ubah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        form{
            width: 300px;
            margin-left: 20px;
        }
    </style>
</head>

<body>
    <?php 
    foreach ($brg as $row){
    ?>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $row["id_barang"]?> >
        <div class="form-group">
            <label for="nama">Nama Barang :</label>
            <input name="nama" type="text" class="form-control" id="nama" placeholder="masukan nama barang"
            value="<?= $row["nama_barang"]?>">
        </div>
        <div class="form-group">
            <label for="harga">Harga Barang :</label>
            <input name="harga" type="text" class="form-control" id="harga" placeholder="masukan harga barang"
            value="<?= $row["harga"]?>">
        </div>
        <div class="form-group">
            <label for="stok">Stok Barang :</label>
            <input name="stok" type="number" class="form-control" id="stok" placeholder="masukan stok barang"
            value="<?= $row["stok"]?>">
        </div>
        <div>
            <label for="id_supplier" style="margin-right: 150px">ID Supplier</label>
            <select name="id_supplier" id="id_supplier">
                <?php 
                $supplier = query("SELECT * FROM supplier");
                foreach ($supplier as $s) : ?>
                    <option value="<?= $s['id_supplier']; ?>" >
                        <?= $s['nama_supplier']; ?>
                    </option>
                <?php endforeach; ?>

            </select>
        </div>
        <button class="btn btn-primary" type="submit" name="submit">
            simpan perubahan
        </button>
    </form>
    <?php } ?>
</body>

</html>