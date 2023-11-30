<?php 
require "function.php";

$id = isset($_GET["id"]) ? $_GET["id"] : 0;

$supplier = query("SELECT * FROM supplier WHERE id_supplier = $id") ;

if (isset($_POST['submit'])){
    if(edit_supplier($_POST) > 0){
        echo  "<script>
        alert('Data berhasil diubah');
        document.location.href='supplier.php';
        </script>";

    }else {
        echo  "<script>
        alert('Data gagal diubah');
        document.location.href='supplier.php';
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
    foreach ($supplier as $row){
    ?>
    <h1>Edit supplier</h1>
    <form action="" method="post">
        <div class="form-group">
            <input type="hidden" value="<?=$row["id_supplier"]?>" name="id">
            <label for="nama">Nama Supplier:</label>
            <input name="nama" type="text" class="form-control" id="nama" placeholder="masukan nama"
            value="<?= $row["nama_supplier"]?>">
        </div>
        <div class="form-group">
            <label for="tlp">Telephon :</label>
            <input name="tlp" type="number" class="form-control" id="tlp" placeholder="masukan telephon"
            value="<?= $row["no_telp"]?>">
        </div>
        <div class="form-group">
            <label for="alamat">alamat :</label>
            <input name="alamat" type="text" class="form-control" id="stok" placeholder="masukan alamat"
            value="<?= $row["alamat"]?>">
        </div>
        <button class="btn btn-primary my-3" type="submit" name="submit">
            Simpan perubahan
        </button>
    </form>
    <?php } ?>
</body>

</html>