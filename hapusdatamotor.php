<?php
include('config.php');


if ($_GET['hal'] == "hapus"){
      //hapus data
      $hapus = mysqli_query ($koneksi, "DELETE FROM motor WHERE id_motor = '$_GET[id]' ");

       //uji jika hapus sukses
       if  ($hapus) {
        echo "<script>
        alert('Hapus Data Sukses!');
        document.location = 'datamotor.php';
        

        </script>";

        }else{
        echo "<script>
        alert('Hapus Data Gagal!');
        document.location='datamotor.php';

        </script>";
    }

} 
?>