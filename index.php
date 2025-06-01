<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Pertemuan 10</title>
    <link rel="stylesheet" href="style.css">
   
</head>
<body>
    <?php
    include 'bab9_koneksi.php';
    $hasil = mysqli_query($connection, "SELECT * FROM tb_mahasiswa");
    echo "<h1>Data Mahasiswa </h1>"; 
    while($data = mysqli_fetch_array($hasil)) {
        echo '<div class="mahasiswa-item">';
        echo '<p><strong>Nama Mahasiswa:</strong> ' . $data['nama_mahasiswa'] . '</p>';
        echo '<p><strong>Jurusan:</strong> ' . $data[2] . '</p>';
        echo '<p><strong>Semester:</strong> ' . $data[3] . '</p>';
        echo '<div class="actions">';
        echo "<a href='update_mahasiswa.php?id=" . $data['id_mahasiswa'] . "'>Edit</a>";
        echo "<a href='delete_mahasiswa.php?id=" . $data['id_mahasiswa'] . "' onclick=\"return confirm('Yakin ingin menghapus data ini?')\">Delete</a>";
        echo '</div></div>';
    }

    ?>

    <h2 >Tambah Data Mahasiswa</h2>
    <form action="tambah.php" method="post">
        <label for="nama">Nama Mahasiswa:</label><br>
        <input type="text" id="nama_mahasiswa" name="nama_mahasiswa" required><br>

        <label for="prodi">Jurusan:</label><br>
        <input type="text" id="prodi_mahasiswa" name="prodi_mahasiswa" required><br>
        
        <label for="semester">Semester:</label><br>
        <input type= "number" id="semester_mahasiswa" name="semester_mahasiswa" required><br><br>
        
        <input type="submit" value="Tambah Data">
        <input type="reset" value="Reset">
    </form>

    <h2>Cari Data Mahasiswa</h2>
    <form action="cari.php" method="post">
        <label for="nama">Nama Mahasiswa :</label><br>
        <input type="text" id="nama_mahasiswa" name="nama_mahasiswa" required><br>
        <input type="submit" value="Cari Data">
        <input type="reset" value="Reset">

    </form>

</body>
</html>