<?php 
require "function.php";

$id = isset($_GET["id"]) ? $_GET["id"] : 0;

$pembeli = query("SELECT * FROM pembeli WHERE id_pembeli = $id") ;

if (isset($_POST['submit'])){
    if(ubah_pembeli($_POST) > 0){
        echo  "<script>
        alert('Data berhasil diubah');
        document.location.href='pembeli.php';
        </script>";

    }else {
        echo  "<script>
        alert('Data gagal diubah');
        document.location.href='pembeli.php';
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
    foreach ($pembeli as $row){
    ?>
    <h1>Edit pembeli</h1>
    <form action="" method="post">
        <div class="form-group">
            <input type="hidden" value="<?=$row["id_pembeli"]?>" name="id">
            <label for="nama">Nama :</label>
            <input name="nama" type="text" class="form-control" id="nama" placeholder="masukan nama"
            value="<?= $row["nama_pembeli"]?>">
        </div>
        <div class="form-group">
            <label for="harga">Jenis kelamin :</label>
            <input name="jk" type="text" class="form-control" id="harga" placeholder="masukan jenis kelamin"
            value="<?= $row["jk"]?>">
        </div>
        <div class="form-group">
            <label for="stok">Telephon :</label>
            <input name="tlp" type="number" class="form-control" id="stok" placeholder="masukan telephon"
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