<?php 
    //Verificando si esta logeado el usuario
    require_once('backend/class/class-clients.php');
    require_once('backend/class/class-database.php');
    $database = new Database();
    if(!Cliente::verificarAutenticacion($database->getDB()))
        header("Location: index.html");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Mall | Carrito</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="shortcut icon" href="img/icon/MiniMallicon.png">
    <style>
    
        /* Background Main Window*/
        main{
            width:auto;
            height:100vh;
            background-image: url(img/cart.jpeg);
            background-repeat: no-repeat;
            background-size:cover;
            background-position:inherit;
        }

    </style>
</head>
<body>
    <main>
         <!-- Barra de Navegación Primer Parte LandingPage -->
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-main" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" ></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar-main">
                <div class="row m-0 w-100">
                    <ul id="main-navbar" class="nav navbar-nav mr-auto px-5 my-auto">
                        <li class="nav-item">
                            <div class="btn-group dropright">
                                <button type="button" class="btn dropdown-toggle text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-user fa-fw" style="color: white;"></i>Iniciar Sesión</button>
                                <div class="dropdown-menu" >
                                    <a class="dropdown-item" href="#login-client" data-toggle="modal" data-target="#login-client">Cliente</a>
                                    <a class="dropdown-item" href="#login-company" data-toggle="modal" data-target="#login-company">Empresa</a>
                                    <a class="dropdown-item" href="#login-admin" data-toggle="modal" data-target="#login-admin">Super Admin</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div class="btn-group dropright">
                                <button type="button" class="btn dropdown-toggle text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-user-plus fa-fw" style="color: white;"></i>Registrarse</button>
                                <div class="dropdown-menu" >
                                    <a class="dropdown-item" href="register/register-client.html">Cliente</a>
                                    <a class="dropdown-item" href="register/register-company.html">Empresa</a>
                                    <a class="dropdown-item" href="register/register-admin.html">Super Admin</a>
                                </div>
                            </div>
                        </li>
                    </ul>       
                    <a class="navbar-brand" href="#"><img id="Mini-Mall-mainlogo" class="img-responsive" src="img/icon/MiniMall.png"></a>
                    <ul id="main-navbar" class="nav navbar-nav ml-auto px-5 my-auto">
                        <li class="nav-item invisible">
                            <a class="nav-link" href="#"><h6 class="text-white">Iniciar Sesión Iniciar Inic</h6></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cart.html"><h6 class="text-white"><i class="fas fa-shopping-cart fa-fw" style="color: white;"></i>Carrito</h6></a>
                        </li>
                    </ul>
                
            
                </div>  
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
                <div id="navbar-menu" class="w-100">
                    <ul class="nav navbar-nav px-5  my-auto">
                        <li class="nav-item mr-auto">
                            <a class="nav-link" href="index.html"><h6 class="text-white"><i class="fas fa-home fa-fw" style="color: white;"></i>Inicio</h6></a>
                      </li>
                        <li class="nav-item mr-auto ml-auto">
                            <div class="btn-group">
                                <button type="button" class="btn dropdown-toggle " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-percent fa-fw" ></i>Promociones</button>
                                <div class="dropdown-menu" >
                                    <a class="dropdown-item" href="promotions/categories.html"> <i class="fas fa-building fa-fw"></i>Productos y Empresas</a>
                                    <a class="dropdown-item" href="promotions/categories.html"><i class="fas fa-th-large fa-fw"></i>Categorías</a>
                                    <a class="dropdown-item" href="promotions/last-products.html"><i class="fas fa-stopwatch fa-fw"></i>Últimas Promociones</a>
                                </div>
                            </div> 
                        </li>
                        <li class="nav-item ml-auto">
                            <a class="nav-link" href="contact.html"><h6 class="text-white"><i class="fas fa-phone-volume fa-fw" style="color: white;"></i>Contactanos</h6></a>
                        </li>
                    </ul>
                </div>
        </nav>

        <!-- Carrusel de Productos en Carrito o Comprados-->
        <div class="top-content p-3">
            <div class="container-fluid animated bounceInUp">
                <div id="carousel-products" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner row w-75 mx-auto" role="listbox">
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
                            <div class="p-2 rounded bg-transparent border-0">
                                <div class="card-header border-0 rounded bg-transparent">
                                    <a href="product.html"><img src="img/lp-second-product1.jpeg"
                                        class="card card-img-top img-fluid mx-auto d-block card-img m-2 rounded-circle" alt="img1"></a>
                                </div>
                                <div class="card-body bg-dark border-0 rounded">
                                    <h3 class="card-title bg-light rounded-pill py-2 px-2 text-center">L 900.00</h3>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <a href="#" class="btn rounded"><i class="fas fa-city fa-2x" style="color: black;"></i></a>
                                        </div>
                                        <div class="col-md-8">
                                            <h6>Nombre del Producto</h6>
                                        </div>
                                    </div>
                                    <div class="card-body p-0 text-center">
                                        <a href="promotions/categories.html" class="text-dark"><h5 class="bg-light rounded-pill">Categoría</h5></a>
                                        <h6>Descripción del Producto</h6>
                                        <button type="button" class="btn btn-sm bg-danger rounded-pill text-white px-3">Quitar de Carrito</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="p-2 rounded bg-transparent border-0">
                                <div class="card-header border-0 rounded bg-transparent">
                                    <a href="product.html"><img src="img/lp-second-product3.jpeg"
                                        class="card card-img-top img-fluid mx-auto d-block card-img m-2 rounded-circle" alt="img1"></a>
                                </div>
                                <div class="card-body bg-dark border-0 rounded">
                                    <h3 class="card-title bg-light rounded-pill py-2 px-2 text-center">L 900.00</h3>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <a href="#" class="btn rounded"><i class="fas fa-city fa-2x" style="color: black;"></i></a>
                                        </div>
                                        <div class="col-md-8">
                                            <h6>Nombre del Producto</h6>
                                        </div>
                                    </div>
                                    <div class="card-body p-0 text-center">
                                        <a href="promotions/categories.html" class="text-dark"><h5 class="bg-light rounded-pill">Categoría</h5></a>
                                        <h6>Descripción del Producto</h6>
                                        <button type="button" class="btn btn-sm bg-danger rounded-pill text-white px-3">Quitar de Carrito</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="p-2 rounded bg-transparent border-0">
                                <div class="card-header border-0 rounded bg-transparent">
                                    <a href="product.html"><img src="img/lp-second-product2.jpeg"
                                        class="card card-img-top img-fluid mx-auto d-block card-img m-2 rounded-circle" alt="img1"></a>
                                </div>
                                <div class="card-body bg-dark border-0 rounded">
                                    <h3 class="card-title bg-light rounded-pill py-2 px-2 text-center">L 900.00</h3>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <a href="#" class="btn rounded"><i class="fas fa-city fa-2x" style="color: black;"></i></a>
                                        </div>
                                        <div class="col-md-8">
                                            <h6>Nombre del Producto</h6>
                                        </div>
                                    </div>
                                    <div class="card-body p-0 text-center">
                                        <a href="promotions/categories.html" class="text-dark"><h5 class="bg-light rounded-pill">Categoría</h5></a>
                                        <h6>Descripción del Producto</h6>
                                        <button type="button" class="btn btn-sm bg-danger rounded-pill text-white px-3">Quitar de Carrito</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="p-2 rounded bg-transparent border-0">
                                <div class="card-header border-0 rounded bg-transparent">
                                    <a href="product.html"><img src="img/lp-second-product4.jpeg"
                                        class="card card-img-top img-fluid mx-auto d-block card-img m-2 rounded-circle" alt="img1"></a>
                                </div>
                                <div class="card-body bg-dark border-0 rounded">
                                    <h3 class="card-title bg-light rounded-pill py-2 px-2 text-center">L 900.00</h3>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <a href="#" class="btn rounded"><i class="fas fa-city fa-2x" style="color: black;"></i></a>
                                        </div>
                                        <div class="col-md-8">
                                            <h6>Nombre del Producto</h6>
                                        </div>
                                    </div>
                                    <div class="card-body p-0 text-center">
                                        <a href="promotions/categories.html" class="text-dark"><h5 class="bg-light rounded-pill">Categoría</h5></a>
                                        <h6>Descripción del Producto</h6>
                                        <button type="button" class="btn btn-sm bg-danger rounded-pill text-white px-3">Quitar de Carrito</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="p-2 rounded bg-transparent border-0">
                                <div class="card-header border-0 rounded bg-transparent">
                                    <a href="product.html"><img src="img/lp-second-product5.jpeg"
                                        class="card card-img-top img-fluid mx-auto d-block card-img m-2 rounded-circle" alt="img1"></a>
                                </div>
                                <div class="card-body bg-dark border-0 rounded">
                                    <h3 class="card-title bg-light rounded-pill py-2 px-2 text-center">L 900.00</h3>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <a href="#" class="btn rounded"><i class="fas fa-city fa-2x" style="color: black;"></i></a>
                                        </div>
                                        <div class="col-md-8">
                                            <h6>Nombre del Producto</h6>
                                        </div>
                                    </div>
                                    <div class="card-body p-0 text-center">
                                        <a href="promotions/categories.html" class="text-dark"><h5 class="bg-light rounded-pill">Categoría</h5></a>
                                        <h6>Descripción del Producto</h6>
                                        <button type="button" class="btn btn-sm bg-danger rounded-pill text-white px-3">Quitar de Carrito</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="p-2 rounded bg-transparent border-0">
                                <div class="card-header border-0 rounded bg-transparent">
                                    <a href="product.html"><img src="img/lp-second-product1.jpeg"
                                        class="card card-img-top img-fluid mx-auto d-block card-img m-2 rounded-circle" alt="img1"></a>
                                </div>
                                <div class="card-body bg-dark border-0 rounded">
                                    <h3 class="card-title bg-light rounded-pill py-2 px-2 text-center">L 900.00</h3>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <a href="#" class="btn rounded"><i class="fas fa-city fa-2x" style="color: black;"></i></a>
                                        </div>
                                        <div class="col-md-8">
                                            <h6>Nombre del Producto</h6>
                                        </div>
                                    </div>
                                    <div class="card-body p-0 text-center">
                                        <a href="promotions/categories.html" class="text-dark"><h5 class="bg-light rounded-pill">Categoría</h5></a>
                                        <h6>Descripción del Producto</h6>
                                        <button type="button" class="btn btn-sm bg-danger rounded-pill text-white px-3">Quitar de Carrito</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="p-2 rounded bg-transparent border-0">
                                <div class="card-header border-0 rounded bg-transparent">
                                    <a href="product.html"><img src="img/lp-second-product2.jpeg"
                                        class="card card-img-top img-fluid mx-auto d-block card-img m-2 rounded-circle" alt="img1"></a>
                                </div>
                                <div class="card-body bg-dark border-0 rounded">
                                    <h3 class="card-title bg-light rounded-pill py-2 px-2 text-center">L 900.00</h3>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <a href="#" class="btn rounded"><i class="fas fa-city fa-2x" style="color: black;"></i></a>
                                        </div>
                                        <div class="col-md-8">
                                            <h6>Nombre del Producto</h6>
                                        </div>
                                    </div>
                                    <div class="card-body p-0 text-center">
                                        <a href="promotions/categories.html" class="text-dark"><h5 class="bg-light rounded-pill">Categoría</h5></a>
                                        <h6>Descripción del Producto</h6>
                                        <button type="button" class="btn btn-sm bg-danger rounded-pill text-white px-3">Quitar de Carrito</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="p-2 rounded bg-transparent border-0">
                                <div class="card-header border-0 rounded bg-transparent">
                                    <a href="product.html"><img src="img/lp-second-product3.jpeg"
                                        class="card card-img-top img-fluid mx-auto d-block card-img m-2 rounded-circle" alt="img1"></a>
                                </div>
                                <div class="card-body bg-dark border-0 rounded">
                                    <h3 class="card-title bg-light rounded-pill py-2 px-2 text-center">L 900.00</h3>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <a href="#" class="btn rounded"><i class="fas fa-city fa-2x" style="color: black;"></i></a>
                                        </div>
                                        <div class="col-md-8">
                                            <h6>Nombre del Producto</h6>
                                        </div>
                                    </div>
                                    <div class="card-body p-0 text-center">
                                        <a href="promotions/categories.html" class="text-dark"><h5 class="bg-light rounded-pill">Categoría</h5></a>
                                        <h6>Descripción del Producto</h6>
                                        <button type="button" class="btn btn-sm bg-danger rounded-pill text-white px-3">Quitar de Carrito</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carousel-products" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-products" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"></script>    <script src="js/bootstrap.min.js"></script>
    <script src="js/control-cart.js"></script>
</body>
</html>