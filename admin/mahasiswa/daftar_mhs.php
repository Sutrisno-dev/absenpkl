<?php include("../../koneksi.php"); ?>

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
                     <li><a href="tambah_mhs.php">Tambah Mahasiswa</a></li>
                     <li><a href="daftar_mhs.php">Daftar Mahasiswa</a></li>
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
                    <tr>
                        <th>NO</th>
                        <th>NIM</th>
                        <th>Nama Mahasiswa</th>
                        <th>Universitas</th>
                        <th>Jenis Kelamin</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php

                     $sql = "SELECT * FROM biodata_users";
                     $query = mysqli_query($conn, $sql);

                     while($mhs = mysqli_fetch_array($query)){
                        echo "<tr>";

                        echo "<td>".$mhs['id_biodata_user']."</td>";
                        echo "<td>".$mhs['nim']."</td>";
                        echo "<td>".$mhs['name']."</td>";
                        echo "<td>".$mhs['university']."</td>";
                        echo "<td>".$mhs['gender']."</td>";
                       

                        echo "<td>";
                        echo "<a href='ubah_mhs.php?id_biodata_user=".$mhs['id_biodata_user']."'>Edit</a> | ";
                        echo "<a href='hapus_mhs.php?id_biodata_user=".$mhs['id_biodata_user']."'>Hapus</a>";
                        echo "</td>";

                        echo "</tr>";
                     }

                     ?>
                </tbody>
            </table>
            
            <p>Total: <?php echo mysqli_num_rows($query)   ?> </p>
      </div>
 </body>
 </html>