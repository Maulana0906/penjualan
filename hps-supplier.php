<?php
require 'function.php';
// mengambil id dari url/get
$id = $_GET["id"];

if(hapus_supplier($id) > 0){
    echo " <script>
    alert('Data Berhasil dihapus');
    document.location.href = 'supplier.php';
    </script>
    ";
} else{
echo " <script>
    alert('Data Gagal dihapus');
    document.location.href = 'supplier.php';
    </script>
    ";
}

?>