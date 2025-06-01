<link rel="stylesheet" href="style.css">

<?php
include 'bab9_koneksi.php';


$nama_mahasiswa = $_POST['nama_mahasiswa'];
$sql = "SELECT * FROM tb_mahasiswa WHERE nama_mahasiswa LIKE '%$nama_mahasiswa%'";
$hasil = mysqli_query($connection, $sql);

if (mysqli_num_rows($hasil) > 0) {
    echo "<h1>Hasil Pencarian Mahasiswa</h1>";
    while ($data = mysqli_fetch_array($hasil)) {
        echo "Nama Mahasiswa: " . $data['nama_mahasiswa'] . "<br>";
        echo "Jurusan: " . $data['prodi_mahasiswa'] . "<br>";
        echo "Semester: " . $data['semester_mahasiswa'] . "<br><br>";

        // Tombol update dan delete
        echo "<a href='update_mahasiswa.php?id=" . $data['id_mahasiswa'] . "'>Edit</a> | ";
        echo "<a href='delete_mahasiswa.php?id=" . $data['id_mahasiswa'] . "' onclick=\"return confirm('Yakin ingin menghapus data ini?')\">Delete</a><br><br>";

    }
} else {
    echo "Tidak Ada Data yang Ditemukan untuk Nama '$nama_mahasiswa'";
}

echo "<br><a href='index.php'>Kembali ke Halaman Utama</a>";
?>
