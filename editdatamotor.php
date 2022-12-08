<?php
include "config.php";

//ketika tombol klik simpan pada edit di klik

if(isset($_POST['Tsimpan'])){
    if(isset($_GET['hal']) == "edit"){
                                                $edit = mysqli_query($koneksi, "UPDATE motor SET 
                                                                          merk = '$_POST[tmerk]',
                                                                          tipe = '$_POST[ttipe]',
                                                                          tahun = '$_POST[ttahun]',
                                                                          no_plat = '$_POST[tplat]'
                                                                        WHERE id_motor = '$_GET[id]'

                                                                        ");

                                        //uji jika simpan sukses
                                                if  ($edit) {
                                                echo "<script>
                                                alert('edit Data Sukses!');
                                                document.location='datamotor.php';
                                                </script>";

                                                }else{
                                                echo "<script>
                                                alert('edit Data Gagal!');
                                                document.location ='datamotor.php';
                                                </script>";
                                             }
                                        }
                            }
                                    
                                        


$vmerk = "";
$vtipe = "";
$vtahun= "";
$vplat="";


//pengujian jika tombol edit di klik
if(isset($_GET['hal'])){
//pengujian jika edit data
if($_GET['hal'] == "edit"){
    //tampilkan data yang akan di edit
    $tampil= mysqli_query($koneksi, "SELECT * FROM motor where id_motor = '$_GET[id]'");
    $data = mysqli_fetch_array($tampil);

    if($data){
        //jika data di temukan maka akan di tampung ke variabel
        $vmerk = $data['merk']; 
        $vtipe = $data['tipe']; 
        $vtahun = $data['tahun']; 
        $vplat = $data['no_plat']; 
    }

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
                                <a href="datamotor.php" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                    <span class="ms-3 d-none d-sm-inline text-white"><i
                                            class="fa-solid fa-truck-fast mb-2"></i> Orders</span></a>
                                <ul class="collapse nav flex-column ms-1" id="submenu" data-bs-parent="#menu">
                                    <li class="w-100">
                                        <a href="datamotor.php" class="nav-link px-0"><span
                                                class="ms-5 d-none d-sm-inline text-white">
                                                <i class="fa-solid fa-car-side"></i> motor</span>
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
                            <h3 class="text-center">Data motor</h3>
                            <h3 class="text-center">Otogarage</h3>

                            <div class="row">
                                <div class="col-md-9 mx-auto">
                                    <div class="card">
                                        <div class="card-header text-light" style="background-color: #2E3040">
                                            Form Input Data motor
                                        </div>

                                        <div class="card-body ">
                                            <div class="row">
                                                <div class="col">
                                                    <form method="POST">
                                                        <div class="mb-3">
                                                            <select class="form-select" name="tmerk">
                                                                <option value="BMW">BMW</option>
                                                                <option value="Daihatsu">Daihatsu</option>
                                                                <option value="DFSK">DFSK</option>
                                                                <option value="Ford">Ford</option>
                                                                <option value="Honda">Honda</option>
                                                                <option value="Isuzu">Isuzu</option>
                                                                <option value="KIA">KIA</option>
                                                                <option value="Mazda">Mazda</option>
                                                                <option value="Mercedes Benz">Mercedes Benz</option>
                                                                <option value="Mini">Mini</option>
                                                                <option value="Mitsubishi">Mitsubishi</option>
                                                                <option value="Nissan">Nissan</option>
                                                                <option value="Peugeot">Peugeot</option>
                                                                <option value="Renault">Renault</option>
                                                                <option value="Suzuki">Suzuki</option>
                                                                <option value="Toyota">Toyota</option>
                                                                <option value="Volkswagen">Volkswagen</option>
                                                                <option value="Wuling">Wuling</option>
                                                                <option selected="" value="<?=$vmerk?>">Merk
                                                                    <?=$vmerk?>
                                                                </option>

                                                            </select>
                                                        </div>
                                                </div>



                                                <div class="col">
                                                    <div class="mb-3">
                                                        <div class="mb-3">
                                                            <select class="form-select" name="ttipe">
                                                                <option selected="" disabled="" value="">BMW
                                                                </option>
                                                                <option value="BMW1">BMW1</option>
                                                                <option value="BMW2">BMW2</option>
                                                                <option value="BMW3">BMW3</option>
                                                                <option selected="" disabled="">Daihatsu</option>
                                                                <option value="Daihatsu 1">Daihatsu 1 </option>
                                                                <option value="Daihatsu 2">Daihatsu 2</option>
                                                                <option value="Daihatsu 3">Daihatsu 3</option>
                                                                <option selected="" disabled="">DFSK</option>
                                                                <option value="DFSK">DFSK</option>
                                                                <option value="DFSK 1">DFSK 1</option>
                                                                <option value="DFSK 2">DFSK 2 </option>
                                                                <option value="DFSK 3">DFSK 3</option>
                                                                <option selected="" value="<?=$vtipe?>"> Tipe
                                                                    <?=$vtipe?>
                                                                </option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3">
                                                        <input type="date" name="ttahun" class="form-control "
                                                            value="<?=$vtahun ?>" />
                                                    </div>
                                                </div>


                                                <div class="col">
                                                    <div class="row">
                                                        <div class="mb-3">
                                                            <input type="text" name="tplat" class="form-control "
                                                                placeholder="Nomor Plat" value="<?=$vplat ?>" />
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="text-center mb-3">
                                                    <hr>
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