<?php
include '../../inc/conn.php';

$tahun = htmlspecialchars($_POST['tahun']);
$nominal = htmlspecialchars($_POST['nominal']);

$query = "INSERT INTO spp(tahun, nominal) VALUES('$tahun', '$nominal')";
$result = mysqli_query($conn, $query);

if ($result) {
    echo "<script>alert('Data berhasil disimpan!'); window.location.assign('../views/admin.php?url=spp');</script>";
} else {
    echo "<script>alert('Data gagal tersimpan!'); window.location.assign('../views/admin.php?url=tambah-spp');</script>";
}
