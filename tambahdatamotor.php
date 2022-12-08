<?php
include "config.php";

 if(isset($_POST['Tsimpan'])){
                                                $simpan = mysqli_query($koneksi, "INSERT INTO motor (merk, tipe, tahun, no_plat)
                                                VALUE ('$_POST[tmerk]', '$_POST[ttipe]', '$_POST[ttahun]', '$_POST[tplat]')
                                                ");

                                        //uji jika simpan sukses
                                                if  ($simpan) {
                                                echo "<script>
                                                alert('Simpan Data Sukses!');
                                                document.location='datamotor.php';
                                                </script>";

                                                }else{
                                                echo "<script>
                                                alert('Simpan Data Gagal!');
                                                document.location ='datamotor.php';
                                                </script>";
                                             }
                                            }

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>OTOGARAGE</title>
        <meta content="" name="description">
        <meta content="" name="keywords">


        <!-- Google Fonts -->
        <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
            rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
                                <a href="datamobil.php" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                    <span class="ms-3 d-none d-sm-inline text-white"><i
                                            class="fa-solid fa-truck-fast mb-2"></i> Orders</span></a>
                                <ul class="collapse nav flex-column ms-1" id="submenu" data-bs-parent="#menu">
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
                            <h3 class="text-center">Data Motor</h3>
                            <h3 class="text-center">Otogarage</h3>

                            <div class="row">
                                <div class="col-md-9 mx-auto">
                                    <div class="card">
                                        <div class="card-header text-light" style="background-color: #2E3040">
                                            Form Input Data Motor
                                        </div>

                                        <div class="card-body ">
                                            <div class="row">
                                                <div class="col">
                                                    <form method="POST">
                                                        <div class="mb-3">
                                                            <select class="form-select" name="tmerk">
                                                                <option value="Honda">Honda</option>
                                                                <option value="Kawasaki">Kawasaki</option>
                                                                <option value="KTM">KTM</option>
                                                                <option value="Suzuki">Suzuki</option>
                                                                <option value="SYM">SYM</option>
                                                                <option value="Viar">Viar</option>
                                                                <option value="Yamaha">Yamaha</option>
                                                                <option selected="">Merk
                                                                </option>

                                                            </select>
                                                        </div>
                                                </div>



                                                <div class="col">
                                                    <div class="mb-3">
                                                        <div class="mb-3">
                                                            <select class="form-select" name="ttipe">
                                                                <option selected="" disabled="" value="">Honda
                                                                </option>
                                                                <option value="Beat Karbu 110CC">Beat Karbu 110CC
                                                                </option>
                                                                <option value="Blade 125CC">Blade 125CC</option>
                                                                <option value="Scoopy FI ISS 110CC">Scoopy FI ISS 110CC
                                                                </option>
                                                                <option value="Vario 125 FI LED ">Vario 125 FI LED 125CC
                                                                </option>
                                                                <option value="Supra X Karbu 100CC ">Supra X Karbu 100CC
                                                                </option>
                                                                <option selected="" disabled="">Kawasaki</option>
                                                                <option value="KLX 150CC">KLX 150CC </option>
                                                                <option value="Ninja 150CC OLD">Ninja 150CC OLD</option>
                                                                <option value="Ninja RR 150CC">Ninja RR 150CC</option>
                                                                <option selected="" disabled="">KTM</option>
                                                                <option value="Duke 200">Duke 200</option>
                                                                <option selected="" disabled="">Suzuki</option>
                                                                <option value="GSX 150CC">GSX 150CC</option>
                                                                <option value="Satria FU carbu 150CC">Satria FU carbu
                                                                    150CC</option>
                                                                <option value="Smash 110CC">Smash 110CC</option>
                                                                <option selected="" disabled="">SYM</option>
                                                                <option value="Attila Venus">Attila Venus</option>
                                                                <option selected="" disabled="">Viar</option>
                                                                <option value="Viar 300">Viar 300</option>
                                                                <option selected="" disabled="">Yamaha</option>
                                                                <option value="Aerox 155CC">Aerox 155CC</option>
                                                                <option value="Jupiter MX 150CC">Jupiter MX 150CC
                                                                </option>
                                                                <option value="RX King 135CC">RX King 135CC</option>



                                                                <option selected="">Tipe
                                                                </option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3">
                                                        <input type="date" name="ttahun" class="form-control " />
                                                    </div>
                                                </div>


                                                <div class="col">
                                                    <div class="row">
                                                        <div class="mb-3">
                                                            <input type="text" name="tplat" class="form-control "
                                                                placeholder="Nomor Plat" />
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="text-center mb-3">
                                                    <hr>
                                                    <button type="reset" class="btn btn-danger">Reset</button>
                                                    <a type="cancel" class="btn btn-warning"
                                                        href="datamotor.php">Cancel</a>
                                                    <button name="Tsimpan" type="submit" class="btn btn-primary">Tambah
                                                        Data Baru</button>
                                                </div>
                                            </div>
                                            <div class="card-footer text-light" style="background-color: #2E3040">
                                            </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>

                    </main><!-- End #main -->
                </div>
    </body>

</html>