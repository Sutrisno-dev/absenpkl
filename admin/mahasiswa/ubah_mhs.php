<?php

include("../../koneksi.php");

// kalau tidak ada id di query string
if( !isset($_GET['id_biodata_user']) ){
    header('Location: admin.php');
}

//ambil id dari query string
$id_biodata_user = $_GET['id_biodata_user'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM biodata_users INNER JOIN users ON biodata_users.user_id = users.id_user WHERE id_biodata_user=$id_biodata_user";
$query = mysqli_query($conn, $sql);
$mhs = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>



<!Doctype html>

<html>

<head>
    <meta charset="utf-8">
    <title>admin</title>
    <link rel="stylesheet" href="css/admin.css">
</head>

<body>
    <div class="container">
        <div class="kotak">
            <h3>ABSENSI MAHASISWA PKL KOMINFO</h3>
        </div>
        <div class="main">
            <div class="menu">
                <ul>
                    <li>
                        <?php
                        date_default_timezone_set('Asia/Jakarta');
                        echo date('d-m-Y H:i:s');
                     ?>
                    </li>
                    <li><a href="mahasiswa/tambah_mhs.php">Tambah Mahasiswa</a></li>
                    <li><a href="mahasiswa/daftar_mhs.php">Daftar Mahasiswa</a></li>
                    <a href="absen.php">Absen</a>
                    <li><a href="lihat_absen.php">Lihat Absen</a></li>
                    <li><a href="catata.php">Catatan</a></li>
                    <li><a href="lihat_catatan.php">Lihat Catatan</a></li>
                    <li><a href="ubah_pwd.php">Ubah Password</a></li>
                    <li><a href="keluar.php">Keluar</a></li>
                </ul>
            </div>
        </div>
    </div>
    <header>
        <h3>Formulir Pendaftaran Siswa Baru</h3>
    </header>

    <form action="prosesUbah_mhs.php" method="POST">
        <input type="hidden" name="id_biodata_user" value="<?php echo $mhs['id_biodata_user'] ?>" />
        <fieldset>
            <p>
                <label for="nim">NIM:</label>
                <input type="text" name="nim" value="<?php echo $mhs['nim'] ?>" placeholder="nomor induk mahasiswa">
            </p>
            <p>
                <label for="name">Nama: </label>
                <input type="text" name="name" placeholder="masukan nama lengkap" value="<?php echo $mhs['name'] ?>" />
            </p>
            <p>
                <label for="gender">Jenis Kelamin:</label>
                <?php $gender = $mhs['gender']; ?>
                <label for=""> <input type="radio" name="gender" value="laki-laki"
                        <?php echo ($gender == 'laki-laki') ? "checked": "" ?>>>laki-laki</label>
                <label for=""><input type="radio" name="gender" value="perempuan"
                        <?php echo ($gender == 'perempuan') ? "checked": "" ?>>perempuan</label>
            </p>
            <p>
                <label for="university">Universitas:</label>
                <input type="text" name="university" placeholder="universitas" value="<?php echo $mhs['university'] ?>">
            </p>
            <p>
                <label for="username">Username:</label>
                <input type="text" name="username" placeholder="username" value="<?php echo $mhs['username'] ?>">
            </p>
            <p>
                <label for="password">Password:</label>
                <input type="password" name="password" placeholder="kata sandi" value="<?php echo $mhs['password'] ?>">
            </p>
            <p>
                <button type="submit" name="simpan" value="simpan" />Simpan </button>
                <button type="reset" name="reset" value="reset" />Reset </button>
            </p>
        </fieldset>
    </form>
</body>

</html>