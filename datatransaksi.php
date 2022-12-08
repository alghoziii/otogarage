<?php

    //koneksi database
$server = "localhost";
$user = "root";
$password = "";
$database = "otogarage_2209";


    //buat koneksi

$koneksi = mysqli_connect($server, $user, $password, $database) or die(mysqli_error($koneksi));

    //jika tombol simpan di klik
if(isset($_POST['Tsimpan'])){
//pengujian data edit
if(isset($_GET['hal']) == "edit" ){
      //data akan edit data
      $edit = mysqli_query($koneksi, "UPDATE transaksi SET
                                            servis = '$_POST[tservis]',
                                            qty = '$_POST[tqty]',
                                            harga_jasa = '$_POST[tjasa]',
                                            tanggal = '$_POST[ttanggal]'
                                      WHERE id_transaksi = '$_GET[id]'
                                              
                                              ");

//jika simpan sukses
        if  ($edit) {
          echo "<script>
                    alert('Edit Data Sukses!');
                    document.location='datatransaksi.php';
                </script>";

      }else{
          echo "<script>
                    alert('Edit Data Gagal!');
                    document.location ='datatransaksi.php';
                </script>";
            }

          }else{

            $simpan = mysqli_query($koneksi, "INSERT INTO transaksi (servis, qty, harga_jasa, tanggal)
            VALUE (  '$_POST[tservis]', '$_POST[tqty]', '$_POST[tjasa]', '$_POST[ttanggal]')
            ");

      //uji jika simpan sukses
            if  ($simpan) {
            echo "<script>
            alert('Simpan Data Sukses!');
            document.location='datatransaksi.php';
            </script>";

            }else{
            echo "<script>
            alert('Simpan Data Gagal!');
            document.location ='datatransaksi.php';
            </script>";
        }

    }           
  }
             //deklarasi variabel data edit

$vservis =" ";
$vqty =" ";
$vtahun =" ";
$vjasa =" ";
$vtanggal =" ";



    //pengujian edit & hapus

  if(isset($_GET['hal'])){
    if($_GET['hal'] == "edit"){

      $tampil = mysqli_query ($koneksi, "SELECT * FROM transaksi WHERE id_transaksi = '$_GET[id]' ");
      $data = mysqli_fetch_array($tampil);
      if ($data){

        $vservis= $data['servis'];
        $vqty = $data['qty'];
        $vtahun = $data['harga_jasa'];
        $vplat = $data['tanggal'];
      }

    }else if ($_GET['hal'] == "hapus"){
      //hapus data
      $hapus = mysqli_query ($koneksi, "DELETE FROM transaksi WHERE id_transaksi = '$_GET[id]'");

       //uji jika hapus sukses
       if  ($hapus) {
        echo "<script>
        alert('Hapus Data Sukses!');
        document.location='datatransaksi.php';
        </script>";

        }else{
        echo "<script>
        alert('Hapus Data Gagal!');
        document.location ='datatransaksi.php';
        </script>";
    }

} 


    }
  
?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>E-SAMSAT</title>
        <meta content="" name="description">
        <meta content="" name="keywords">


        <!-- Google Fonts -->
        <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
            rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        <script src="https://kit.fontawesome.com/d394af271e.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="aset/fontawesome/css/all.min.css" />
    </head>

    <body>
        <nav class="navbar navbar-expand-lg bg-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand text-white ms-3 " href="#">SELAMAT DATANG ADMIN 👋 </a>
                </form>
                <div class="dropdown">
                    <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="fa-solid fa-user"></i> Admin
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="#">inbox</a></li>
                        <li><a class="dropdown-item" href="#">Setting</a></li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </div>


            </div>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="row flex-nowrap">
                <div class="col-auto  col-xl-2 px-sm-2 px-0 bg-dark">
                    <div
                        class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                        <ul class="nav nav-pills flex-column mb-sm-auto mt-5 align-items-center align-items-sm-start"
                            id="menu">
                            <li>
                                <a href="dasboard.php" class="nav-link px-0 align-middle ">
                                    <span class="ms-3 d-none d-sm-inline text-white "><i
                                            class="fa fa-dashboard mb-3"></i>
                                        Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                    <span class="ms-3 d-none d-sm-inline text-white"><i
                                            class="fa-solid fa-truck-fast mb-2"></i> Orders</span></a>
                                <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                                    <li class="w-100">
                                        <a href="datamobil.php" class="nav-link px-0"><span
                                                class="ms-5 d-none d-sm-inline text-white">
                                                <i class="fa-solid fa-car-side"></i> Mobil</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="datamotor.php" class="nav-link px-0"> <span
                                                class="ms-5 d-none d-sm-inline text-white"><i
                                                    class="fa-solid fa-motorcycle"></i> Motor</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="transaksi.php" class="nav-link px-0 align-middle">
                                    <span class="ms-3 d-none d-sm-inline text-white"><i
                                            class="fa-solid fa-money-bill-transfer mt-3"></i> Transaksi</span></a>
                            </li>


                        </ul>
                    </div>
                </div>

                <div class="col py-3">

                    <!-- ======= Hero Section ======= -->
                    <section id="hero" class="d-flex flex-column  align-items-center ">
                        <div id="heroCarousel" data-bs-interval="2000" class="container carousel carousel-fade"
                            data-bs-ride="carousel">
                            <div class="carousel-item active">
                                <div class="carousel-container">
                                </div>
                            </div>
                        </div>
                    </section>

                    <main id="main">
                        <br>
                        <div class="container mt-5">
                            <h3 class="text-center">Data Transaksi</h3>
                            <h3 class="text-center">Otogarage</h3>

                            <div class="row">
                                <div class="col-md-8 mx-auto">
                                    <div class="card">
                                        <div class="card-header text-light" style="background-color: #2E3040">
                                            Form Input Transaksi
                                        </div>

                                        <div class="card-body ">
                                            <div class="row">
                                                <div class="col">
                                                    <form method="POST">
                                                        <div class="mb-3">
                                                            <select class="form-select" name="tservis">
                                                                <option value="Lampu">Lampu</option>
                                                                <option value="Ganti Oli">Ganti Oli</option>
                                                                <option value="Servis mesin">Servis mesin</option>
                                                                <option selected="" value="<?=$vservis?>">Servis
                                                                    <?=$vservis?>
                                                                </option>

                                                            </select>
                                                        </div>
                                                </div>



                                                <div class="col">
                                                    <div class="mb-3">
                                                        <div class="mb-3">
                                                            <select class="form-select" name="tqty">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option selected="" value="<?=$vqty?>"> QTY
                                                                    <?=$vqty?>
                                                                </option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3">
                                                        <select class="form-select" name="tjasa">
                                                            <option selected="" disabled="" value="">Lampu
                                                            </option>
                                                            <option value="300.000">300.000</option>
                                                            <option selected="" disabled="">Ganti Oli</option>
                                                            <option value="85.000">85.0000</option>
                                                            <option selected="" disabled="">Servis Mesin</option>
                                                            <option value="600.000">600.000</option>
                                                            <option selected="" value="<?=$vjasa?>"> Harga Jasa
                                                                <?=$vjasa?>
                                                            </option>

                                                        </select>

                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col">
                                                <div class="row">
                                                    <div class="mb-3">
                                                        <input type="date" name="ttanggal" value="<?=$vtanggal ?>"
                                                            class="form-control " />
                                                    </div>
                                                </div>
                                            </div>




                                            <div class="text-center">
                                                <hr>
                                                <button class="btn btn-dark mb-3" name="Tsimpan"
                                                    type="submit">Simpan</button>
                                                <button class="btn btn-danger mb-3" name="Tkosongkan"
                                                    type="reset">Hapus</button>
                                            </div>
                                        </div>
                                        <div class="card-footer text-light" style="background-color: #2E3040">
                                        </div>
                                        </form>



                                        <div class="card mt-5">
                                            <div class="card-header text-light" style="background-color: #2E3040">
                                                Data Mobil
                                            </div>
                                            <div class="card-body">
                                                <div class="col-md-6 mx-auto">
                                                    <form method="POST">
                                                        <div class="input-group mb-3">
                                                            <input type="text" name="tcari" class="form-control"
                                                                placeholder="Masukan Kata Kunci Pencarian">
                                                            <button class="btn btn-primary" name="bcari"
                                                                type="submit">Cari</button>
                                                            <button class="btn btn-danger" name="breset"
                                                                type="submit">Reset</button>
                                                        </div>
                                                    </form>

                                                </div>
                                                <table class="table table-striped table-hover table-bordered">
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Servis</th>
                                                        <th>Qty</th>
                                                        <th>Harga Jasa</th>
                                                        <th>Tanggal</th>
                                                        <th>Aksi</th>
                                                    </tr>

                                                    <?php
                                                        //menampilkan data
                                                            
                                                            $no = 1;
                                                            $tampil = mysqli_query($koneksi, "SELECT * FROM transaksi order by id_transaksi desc");
                                                            while($data = mysqli_fetch_array($tampil)) : 

                                                        ?>

                                                    <tr>
                                                        <td><?= $no++ ?></td>
                                                        <td><?=$data ['servis']?></td>
                                                        <td><?=$data ['qty']?></td>
                                                        <td><?=$data ['harga_jasa']?></td>
                                                        <td><?=$data ['tanggal']?></td>

                                                        <td>
                                                            <a href="datatransaksi.php?hal=edit&id=<?=$data['id_transaksi'] ?>"
                                                                class="btn btn-warning">Edit</a>

                                                            <a href="datatransaksi.php?hal=hapus&id=<?=$data['id_transaksi'] ?>"
                                                                class="btn btn-dark"
                                                                onclick="return confirm('apakah anda yakin ingin menghapus data ini ?')">Hapus</a>
                                                        </td>
                                                    </tr>
                                                    <?php endwhile;?>

                                                </table>

                                            </div>
                                            <div class="card-footer text-light" style="background-color: #2E3040">
                                            </div>
                                        </div>
                                    </div>

                                </div>

                    </main><!-- End #main -->
                </div>


                <!-- Vendor JS Files -->
                <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
                    crossorigin="anonymous">
                </script>
                <script src="assets/js/main.js"></script>

    </body>

</html>