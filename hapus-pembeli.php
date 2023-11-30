<?php
require 'function.php';
// mengambil id dari url/get
$id = $_GET["id"];

if(hapus_pembeli($id) > 0){
    echo " <script>
    alert('Data Berhasil dihapus');
    document.location.href = 'pembeli.php';
    </script>
    ";
} else{
echo " <script>
    alert('Data Gagal dihapus');
    document.location.href = 'pembeli.php';
    </script>
    ";
}

?>