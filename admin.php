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
                     <li</li>
                     <li></li>
                     <li></li>
                     <li><a href="lihatabsen.html">Lihat Absen</a></li>
                     <li><a href="catata.html">Catatan</a></li>
                     <li><a href="lihatcatatan.html">Lihat Catatan</a></li>
                     <li><a href="ubahpwd.html">Ubah Password</a></li>
                     <li><a href="keluar.html">Keluar</a></li>
               </ul>
               <h3>><a href="tambahmhs.html">Tambah Mahasiswa</a></h3>
               <h3><a href="daftarmhs.html">Daftar Mahasiswa</a></h3>
               <h3><a href="absen.html">Absen</a> </h3>
            </div>
         </div>
         
      </div>
 </body>
 </html>