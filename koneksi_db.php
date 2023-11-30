
<?php

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "penjualan";

$conn = mysqli_connect($servername, $username, $password, $db_name);

if($conn -> connect_error){
    echo "gagal terhubung";
    exit();

}
else {
    echo "connect success";
}

?>