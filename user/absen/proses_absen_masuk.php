<?php

    include("../../koneksi.php");

    //cek apakah tobol daftar sudah diklik atau belum?
    if(isset($_POST['simpan'])){

        //ambil data dari formulir
        $biodata_user_id = $_POST['biodata_user_id']; 
        date_default_timezone_set('Asia/Jakarta');
        $tanggal = date('d-m-Y'); 
        $jam_masuk = date('H:i:s'); 
        $konfirmasi_jam_masuk = 'belum dikonfirmasi';  
        
    
        //buat query 
        $sql = "INSERT INTO absen (biodata_user_id, tanggal, jam_masuk, konfirmasi_jam_masuk ) VALUE ('$biodata_user_id', '$tanggal', '$jam_masuk', '$konfirmasi_jam_masuk')"; 
        $query = mysqli_query($conn, $sql);
       
     

        //apakah query simpan berhasil
        if( $query ) {
            // Kalau berhasil alihkan ke halaman index.php dengan status=sukses
            header('Location: absen.php?status=sukses');

        } else {
            //Kalau gagal alihkan ke halaman index.php dengan status=gagal
            header('Location: absen.php?status=gagal'); 
        }

    } else {
        die("Akses dilarang...");
    }
?>