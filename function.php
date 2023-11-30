<?php
function koneksi(){
    $conn = mysqli_connect("localhost", "root", "", "penjualan");
    return $conn;
}

function query($sql){
    $conn = koneksi();
    $result = mysqli_query($conn, $sql);

    $rows = [];

    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}


function tambah_barang($data){
    $conn = koneksi();

    $nama = $data['nama'];
    $harga = $data['harga'];
    $stok = $data['stok'];
    $id_supplier = $data['id_supplier'];

    $sql = "INSERT INTO barang VALUES ('', '$nama', '$harga', '$stok', '$id_supplier')";

    mysqli_query($conn, $sql);

    return mysqli_affected_rows($conn);

}

function hapus_barang($id){
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM barang WHERE id_barang = $id");
    return mysqli_affected_rows($conn);
}

function ubah_barang($data){
    $conn = koneksi();

    $id = $data['id'];
    $nama = $data['nama'];
    $harga = $data['harga'];
    $stok = $data['stok'];
    $supplier = $data['id_supplier'];

    $sql = "UPDATE barang SET 
            nama_barang = '$nama',
            harga = '$harga',
            stok = '$stok',
            id_supplier = '$supplier'
            WHERE id_barang = '$id'
    ";
    mysqli_query($conn, $sql);
    return mysqli_affected_rows($conn);
}

function tambah_pembeli($data){
    $conn = koneksi();

    $nama = $data['nama'];
    $jk = $data['jk'];
    $tlp = $data['tlp'];
    $alamat = $data['alamat'];

    $sql = "INSERT INTO pembeli VALUES ('', '$nama', '$jk', '$tlp', '$alamat')";

    mysqli_query($conn, $sql);

    return mysqli_affected_rows($conn);

}

function ubah_pembeli($data){
    $conn = koneksi();
    $id = $data["id"];
    $nama = $data['nama'];
    $jk = $data['jk'];
    $no_telp = $data['tlp'];
    $alamat = $data['alamat'];

    $sql = "UPDATE pembeli SET 
            nama_pembeli = '$nama',
            jk = '$jk',
            no_telp = '$no_telp',
            alamat = '$alamat'
            WHERE id_pembeli = '$id'
    ";
    mysqli_query($conn, $sql);
    return mysqli_affected_rows($conn);
}


function hapus_pembeli($id){
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM pembeli WHERE id_pembeli = $id");
    return mysqli_affected_rows($conn);
}


function tambah_supplier($data){
    $conn = koneksi();

    $nama_supplier = $data['nama_supplier'];
    $no_telp = $data['no_telp'];
    $alamat = $data['alamat'];

    $sql = "INSERT INTO supplier VALUES ('', '$nama_supplier', '$no_telp', '$alamat')";

    mysqli_query($conn, $sql);

    return mysqli_affected_rows($conn);

}

function edit_supplier($data){
    $conn = koneksi();
    $id = $data["id"];
    $nama = $data['nama'];
    $tlp = $data['tlp'];
    $alamat = $data['alamat'];

    $sql = "UPDATE supplier SET 
            nama_supplier = '$nama',
            no_telp = '$tlp',
            alamat = '$alamat'
            WHERE id_supplier = '$id'
    ";
    mysqli_query($conn, $sql);
    return mysqli_affected_rows($conn);
}

function hapus_supplier($id){
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM supplier WHERE id_supplier = $id");
    return mysqli_affected_rows($conn);
}

function nav(){
    return '';
}
?>