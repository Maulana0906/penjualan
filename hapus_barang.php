<?php
require 'function.php';
// mengambil id dari url/get
$id = $_GET["id"];

if(hapus_barang($id) > 0){
    echo " <script>
    alert('Data Berhasil dihapus');
    document.location.href = 'data_barang.php';
    </script>
    ";
} else{
echo " <script>
    alert('Data Gagal dihapus');
    document.location.href = 'data_barang.php';
    </script>
    ";
}

?>