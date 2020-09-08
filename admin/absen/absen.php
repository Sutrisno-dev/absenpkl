<?php
 
session_start();
 
include("../../koneksi.php");
?>

<!Doctype html>

 <html>
 <head>
     <meta charset="utf-8">
    <title>admin</title>
    <link rel="stylesheet" href="">
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
                     <li><a href="absen.php">Absen</a></li>
                     <li><a href="lihat_absen.php">Lihat Absen</a></li>
                     <li><a href="catata.php">Catatan</a></li>
                     <li><a href="lihat_catatan.php">Lihat Catatan</a></li>
                     <li><a href="ubah_pwd.php">Ubah Password</a></li>
                     <li><a href="keluar.php">Keluar</a></li>
               </ul>
            </div>
         </div>
      </div>
      <div class="daftar">
             
      <table border="1">
       <thead>
         <tr >
            <th>Status</th>
            <th>Keterangan</th>
            <th>Absen Masuk</th>
            <th>Absen Keluar</th>
         </tr>
       </thead>
       <tbody>
            <tr>
                <td>!</td>
                <td>Anda belum mengisi absen hari ini</td>
                <td>
                    <form action="prosesKonfirmasi_absen_masuk.php" method="post">
                    <input type="hidden" name="biodata_user_id" value="<?= $_SESSION['id_biodata_user'] ?>"> 
                        <button type="submit" name="simpan">Konfirmasi</button>
                    <form action="prosesKonfirmasi_absen_masuk.php" method="post">
                    <input type="hidden" name="biodata_user_id" value="<?= $_SESSION['id_biodata_user'] ?>"> 
                    <button type="submit" name="simpan">Tolak</button>
                    </form>
                    
               
                </td>
                <td>
                    <form action="prosesKonfirmasi_absen_keluar.php" method="post">
                         <input type="hidden" name="biodata_user_id" value="<?= $_SESSION['id_biodata_user'] ?>"> 
                        <button type="submit" name="simpan">Konfirmasi</button>
                        <form action="prosesKonfirmasi_absen_keluar.php" method="post">
                        <input type="hidden" name="biodata_user_id" value="<?= $_SESSION['id_biodata_user'] ?>"> 
                        <button type="submit" name="simpan">Tolak</button>
                </td>
            </tr>
       </tbody>
     </table>
            
            <p>Total: <?php echo mysqli_num_rows($query)   ?> </p>
      </div>
 </body>
 </html>