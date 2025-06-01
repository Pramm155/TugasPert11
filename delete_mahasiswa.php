<link rel="stylesheet" href="style.css">

<?php
include 'bab9_koneksi.php';

$id = $_GET['id'];
$query = "DELETE FROM tb_mahasiswa WHERE id_mahasiswa='$id'";

if (mysqli_query($connection, $query)) {
    echo "Data berhasil dihapus.<br>";
} else {
    echo "Gagal menghapus data: " . mysqli_error($conn);
}

echo "<a href='index.php'>Kembali ke Halaman Utama</a>";
?>
