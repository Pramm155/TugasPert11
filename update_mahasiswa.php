<link rel="stylesheet" href="style.css">

<?php
include 'bab9_koneksi.php';

$id = $_GET['id'];
$query = "SELECT * FROM tb_mahasiswa WHERE id_mahasiswa='$id'";
$result = mysqli_query($connection, $query);
$data = mysqli_fetch_assoc($result);
?>

<h2>Form Update Mahasiswa</h2>
<form method="post" action="proses_update.php">
    <input type="hidden" name="id_mahasiswa" value="<?php echo $data['id_mahasiswa']; ?>">
    Nama: <input type="text" name="nama_mahasiswa" value="<?php echo $data['nama_mahasiswa']; ?>"><br>
    Prodi: <input type="text" name="prodi_mahasiswa" value="<?php echo $data['prodi_mahasiswa']; ?>"><br>
    Semester: <input type="number" name="semester_mahasiswa" value="<?php echo $data['semester_mahasiswa']; ?>"><br>
    <input type="submit" value="Update">
</form>
