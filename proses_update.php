<link rel="stylesheet" href="style.css">

<?php
include 'bab9_koneksi.php';

$id = $_POST['id_mahasiswa'];
$nama = $_POST['nama_mahasiswa'];
$prodi = $_POST['prodi_mahasiswa'];
$semester = $_POST['semester_mahasiswa'];

$query = "UPDATE tb_mahasiswa SET 
    nama_mahasiswa='$nama', 
    prodi_mahasiswa='$prodi', 
    semester_mahasiswa='$semester' 
    WHERE id_mahasiswa='$id'";

if (mysqli_query($connection, $query)) {
    echo "Data berhasil diupdate.<br>";
} else {
    echo "Gagal update data: " . mysqli_error($connection);
}

echo "<a href='index.php'>Kembali ke Halaman Utama</a>";
?>
