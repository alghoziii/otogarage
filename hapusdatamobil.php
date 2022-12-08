<?php
include('config.php');


if ($_GET['hal'] == "hapus"){
      //hapus data
      $hapus = mysqli_query ($koneksi, "DELETE FROM mobil WHERE id_mobil = '$_GET[id]' ");

       //uji jika hapus sukses
       if  ($hapus) {
        echo "<script>
        alert('Hapus Data Sukses!');
        document.location = 'datamobil.php';
        

        </script>";

        }else{
        echo "<script>
        alert('Hapus Data Gagal!');
        document.location='datamobil.php';

        </script>";
    }

} 
?>