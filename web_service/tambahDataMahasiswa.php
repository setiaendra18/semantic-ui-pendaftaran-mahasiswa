<?php
include "../config/db.php";
$nama = $_POST['nama'];
echo "$nama";
$alamat = $_POST['alamat'];
$prodi = $_POST['prodi'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$sekolah_asal = $_POST['sekolah_asal'];

$sql = "INSERT INTO mahasiswa (nama,alamat,prodi,jenis_kelamin,tanggal_lahir,sekolah_asal)
VALUES ( '$nama','$alamat','$prodi','$jenis_kelamin','$tanggal_lahir','$sekolah_asal')";

if (mysqli_query($conn, $sql))
{
    header('Location: ../index.php');

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
