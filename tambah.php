<link rel="stylesheet" href="style.css">

<?php
include 'bab9_koneksi.php';

$nama_mahasiswa = $_POST['nama_mahasiswa'];
$prodi_mahasiswa = $_POST['prodi_mahasiswa'];
$semester_mahasiswa = $_POST['semester_mahasiswa'];

$query = "INSERT INTO tb_mahasiswa (nama_mahasiswa, prodi_mahasiswa, semester_mahasiswa) VALUES ('$nama_mahasiswa', '$prodi_mahasiswa', '$semester_mahasiswa')";

if (mysqli_query($connection, $query)) {
    echo "Data Berhasil Ditambahkan!";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($connection);
}
?>
