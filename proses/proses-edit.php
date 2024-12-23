<?php
include "../koneksi/koneksi.php";

$id_barang = $_POST['id_barang'];
$kategori = $_POST['kategori'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$ket = $_POST['ket'];

if (isset($_POST['update'])) {
    $sql = "SELECT foto FROM barang WHERE id_barang='$id_barang'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_assoc($result);
    $foto_awal = $row['foto'];

    $nama_file = $_FILES['foto']['name'];
    if (!empty($nama_file)) {
        $lokasi_file = $_FILES['foto']['tmp_name'];
        $tipe_file = pathinfo($nama_file, PATHINFO_EXTENSION);
        $file_foto = $id_barang . "_" . time() . "." . $tipe_file;

        $folder = "../photo/$file_foto";

        if (file_exists("../photo/$foto_awal")) {
            unlink("../photo/$foto_awal");
        }

        move_uploaded_file($lokasi_file, "$folder");
    } else {
        $file_foto = $foto_awal;
    }

    $sql = "UPDATE barang SET kategori='$kategori', nama='$nama', harga='$harga', ket='$ket', foto='$file_foto' WHERE id_barang='$id_barang'";
    $qry = mysqli_query($db, $sql);

    if ($qry) {
        header("location:../view/index.php?page=dashboard");
    } else {
        echo "Error: " . mysqli_error($db);
    }
}
?>
