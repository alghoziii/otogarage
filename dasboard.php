<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>OTOGARAGE</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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
                        <ul class="nav nav-pills flex-column mb-sm-auto mt-5 align-items-center align-items-sm-start">
                            <li><a href="dasboard.php" class="nav-link px-0 align-middle ">
                                    <span class="ms-3 d-none d-sm-inline text-white "><i
                                            class="fa fa-dashboard mb-3"></i>
                                        Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="#menu" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                    <span class="ms-3 d-none d-sm-inline text-white"><i
                                            class="fa-solid fa-truck-fast mb-2"></i> Orders</span></a>
                                <ul class="collapse nav flex-column ms-1" id="menu">
                                    <li class="w-100">
                                    <li><a href="datamobil.php" class="nav-link px-0"><span
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


                <div class="col py-5 ms-5 my-5">
                    <div class="card mt-5 bg-primary" style="width: 18rem;">
                        <i class="fa-solid fa-users fa-5x ms-2 mt-2"> 45</i>
                        <div class="card-body">
                            <p class="card-text text-center">SUDAH MENGGUNAKAN</p>
                        </div>
                    </div>

                </div>
                <div class="col py-5 my-5">
                    <div class="card mt-5 bg-success" style="width: 18rem;">
                        <i class="fa-solid fa-truck-fast fa-5x ms-2 mt-2"> 10</i>
                        <div class="card-body">
                            <p class="card-text text-center">ORDERS</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>








        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
        </script>
    </body>

</html>