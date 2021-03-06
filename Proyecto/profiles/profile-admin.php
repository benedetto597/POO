<?php 
    //Verificando si esta logeado el usuario
    require_once('../backend/class/class-admin.php');
    require_once('../backend/class/class-database.php');
    $database = new Database();
    if(!Administrador ::verificarAutenticacion($database->getDB()))
        header("Location: ../index.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Mall | Administrador</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="../img/icon/MiniMallicon.png">
    <style>
    
        /* Background Main Window*/
        main{
            width:100vw;
            height:40vh;
            background-image: url(../img/lp-primary-image.jpeg);
            background-repeat: no-repeat;
            background-size:cover;
            background-position:right;
        }

    </style>
</head>
<body onload="ShowInfo();">
    
    <div class="row">
        <main class="col-12" id="main">
                <!-- Barra de Navegación Primer Parte LandingPage -->
        <?php
        include_once('../components/navbar-login-admin.php');
        ?>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div id="navbar-menu" class="w-100">
                <ul class="nav navbar-nav px-5  my-auto">
                    <li class="nav-item mr-auto">
                        <a class="nav-link" href="../index.php"><h6 class="text-dark"><i class="fas fa-home fa-fw"></i>Inicio</h6></a>
                </li>
                    <li class="nav-item mr-auto ml-auto">
                        <div class="btn-group">
                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-percent fa-fw"></i>Promociones</button>
                            <div class="dropdown-menu" >
                                <a class="dropdown-item" href="../promotions/categories.php"><i class="fas fa-th-large fa-fw"></i>Categorías</a>
                                <a class="dropdown-item" href="../promotions/last-products.php"><i class="fas fa-stopwatch fa-fw"></i>Últimas Promociones</a>
                            </div>
                        </div> 
                    </li>
                    <li class="nav-item ml-auto">
                        <a class="nav-link" href="../contact.php"><h6 class="text-dark"><i class="fas fa-phone-volume fa-fw"></i>Contactanos</h6></a>
                    </li>
                </ul>
            </div>
        </nav>
            <div class="container col-lg-10 animated">
                <div class="fb-profile" id="profile-photo">
                    <!-- Imagen de perfil -->
                </div>
            </div> 
        </main>
    </div>

    <!-- Tabs Visualización de Perfil -->
    <div id="tabs-admin-profile" class="row p-0" style="height: 60vh">
        <div class="container p-0">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 animated mt-5" >
                    <div class="card mt-5 bg-transparent border-0 ml-auto mr-auto p-2" style="width: 18rem;">
                        <div class="card-body text-center mt-5">
                          <h5 class="card-text text-white" id="admin-name"></h5>
                          <h5 class="card-text text-white" id="admin-user"></h5>
                          <h5 class="card-text text-white" id="admin-email"></h5>
                          <button type="button" id="btn-logout-admin" class="card-text  btn-lg shadow p-2 px-5 mb-0 rounded-pill text-white" onclick="logout()">Cerrar Sesión</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-6 col-sm-6 animated">
                    <div class="container mt-3 mb-0">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs nav-fill">
                          <li class="nav-item">
                            <a class="nav-link active text-dark" data-toggle="tab" href="#informacion">Información</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-dark" data-toggle="tab" href="#empresas">Empresas</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-dark" data-toggle="tab" href="#editar">Editar Perfil</a>
                          </li>
                        </ul>
                      
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div id="informacion" class="container p-0 tab-pane active">
                                <div class="col-12 bg-white">
                                    <div class="container-fluid p-5">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <b><i class="fas fa-user fa-fw"></i> Nombre Completo</b>
                                                <h6 id="info-admin-name">Nombre del Administrador</h6><br>
                                                <b><i class="fas fa-user fa-fw"></i> Nombre de Acceso</b>
                                                <h6 id="info-admin-user">Acceso</h6><br>
                                                <b><i class="fas fa-at"></i> Correo Electronico</b>
                                                <h6 id="info-admin-email">Correo</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <b><i class="fas fa-globe-americas"></i> País</b>
                                                <h6 id="info-admin-country">País</h6><br>
                                                <b><i class="fas fa-money-bill"></i> Moneda</b>
                                                <h6 id="info-admin-currency">Moneda</h6><br>
                                                <b><i class="fas fa-universal-access"></i> Genero</b>
                                                <h6 id="info-admin-gen">Genero</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="empresas" class="container p-0 tab-pane fade">
                                <div class="col-12 bg-white">
                                    <div class="container-fluid p-5">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <b>Empresas Suscritas</b>
                                                <div class="table-wrapper-scroll-y my-custom-scrollbar ">
                                                    <table class="table table-hover table-striped">
                                                        <thead id="table-admin">
                                                        <tr>
                                                                <th scope="col">Nombre</th>
                                                                <th scope="col">Suscripción</th>
                                                                <th scope="col">País</th>
                                                                <th scope="col">Moneda</th>
                                                                <th scope="col">Dirección</th>
                                                                <th scope="col">Telefono</th>
                                                                <th scope="col">Sucursales</th>
                                                                <th scope="col">Correo</th>
                                                                <th scope="col">Eliminar</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody id="suscribe-companies">                         
                                                        </tbody>
                                                    </table>
                                               </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="editar" class="container tab-pane fade p-0">
                                <div class="col-12 bg-white p-4 ">

                                    <!-- Formulario precargado de la información que se tiene agregada -->
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <b>Nombre Completo</b>
                                            <input type="text" class="form-control" id="first-name-admin" placeholder="Nombres" required onchange="EnableChange();">
                                            <input type="text" class="form-control my-1" id="last-name-admin" placeholder="Apellidos"  required onchange="EnableChange();">
                                            <div class="custom-file overflow-hidden rounded-pill my-2">
                                                <input id="pp-photo" type="file" class="custom-file-input rounded-pill" accept="image/*" onchange="EnableChange();">
                                                <label for="pp-photo" class="custom-file-label rounded-pill">Subir foto de perfil</label>
                                                <h1 style="visibility: hidden;" id="pp-url"></h1>
                                            </div>
                                            <div class="custom-file overflow-hidden rounded-pill ">
                                                <input id="banner-photo" type="file" class="custom-file-input rounded-pill" accept="image/*" onchange="EnableChange();">
                                                <label for="banner-photo" class="custom-file-label rounded-pill">Subir foto de Portada</label>
                                                <h1 style="visibility: hidden;" id="banner-url"></h1>
                                            </div>
                                            
                                        </div>
                                        
                                        <div class="form-group col-md-4">
                                            <b>Usuario</b>
                                            <input type="text" class="form-control" id="user-admin" placeholder="Nombre de Usuario"  required onchange="EnableChange();">
                                            <input type="email" class="form-control my-1" id="email-admin" placeholder="Email"  required onchange="EnableChange();">
                                            <b>Contraseña</b>
                                            <input disabled type="password" class="form-control" id="password-admin" placeholder="Contraseña" >
                                            <input disabled type="password" class="form-control my-1" id="password-admin-repeat" placeholder="Repita Contraseña">
                                        </div>

                                        <div class="form-group col-md-4">
                                            <b>País</b>
                                            <select id="country-select" class="form-control text-white"  required onchange="EnableChange();">
                                                <option selected>Seleccione País</option>
                                                <option value="Honduras">Honduras</option>
                                                <option value="Estados Unidos">Estados Unidos</option>
                                            </select>
                                            <small id="country-alert" class="form-text text-dark"></small>
                                            <select id="currency-select" class="form-control text-white my-1"  required onchange="EnableChange();">
                                                <option selected>Seleccione Moneda</option>
                                                <option value="Lempira">L Lempira</option>
                                                <option value="Dolar">$ Dolar</option>
                                            </select>
                                            <small id="currency-alert" class="form-text text-dark"></small>
                                            <b class="text-dark">Genero</b>
                                            <select id="sex-select-admin-update" class="form-control text-white m-0"  required onchange="EnableChange();" >
                                                <option>Seleccione Genero</option>
                                                <option value="Masculino">Masculino</option>
                                                <option value="Femenino">Femenino</option>
                                                <option value="Otro">Otro</option>
                                            </select>
                                            <small id="gen-alert" class="form-text text-dark"></small>

                                            <!-- Botón que se desbloqueará cuando el usuarío haga algún cambio -->
                                            <div class="form-row align-items-center pt-3">
                                                <div class="col-auto mr-auto ml-auto">
                                                    <button id="btn-update-info-admin" type="button" class="btn btn-lg shadow p-2 px-5 mb-0 rounded-pill text-white" onclick="updateInfo()">Guardar</button>
                                                    <small id="data-alert" class="form-text text-dark bg-danger"></small>
                                                </div>
                                            </div>
                                        </div>
                                      
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="loder-admin">
    <?php 
        include_once('../components/loader.php');
    ?>
    </div>
    <!-- Firebase -->
    <script src="https://www.gstatic.com/firebasejs/7.7.0/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.7.0/firebase-storage.js"></script>

  <script>
  document.querySelector('#pp-photo').value = '';
  document.querySelector('#banner-photo').value = '';
    var firebaseConfig = {
      apiKey: "AIzaSyDHbIQpttJ5KwhJntjUa1aAKOTmuXIZRZ8",
    authDomain: "proyecto-poo-271914.firebaseapp.com",
    databaseURL: "https://proyecto-poo-271914.firebaseio.com",
    projectId: "proyecto-poo-271914",
    storageBucket: "proyecto-poo-271914.appspot.com",
    messagingSenderId: "220442033339",
    appId: "1:220442033339:web:cccf003c2c6a8daa2c7d9e",
    measurementId: "G-1JTVDET0HF"
  };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
  function uploadImageProfile() {
      const ref = firebase.storage().ref('/admin-users');
      if(document.querySelector('#pp-photo') != ''){
        const file = document.querySelector('#pp-photo').files[0];
      const name = file.name;
      const metadata = {
        contentType: file.type
      };
      const task = ref.child(name).put(file, metadata);
      task
        .then(snapshot => snapshot.ref.getDownloadURL())
        .then(url => {
            document.getElementById('pp-url').innerHTML = url;
            console.log(document.getElementById('pp-url').innerHTML);

        })
        .catch(console.error);
      }
      
    }
  function uploadImageBanner() {
      const ref = firebase.storage().ref('/admin-users');
      if(document.querySelector('#banner-photo') != ''){
        const file = document.querySelector('#banner-photo').files[0];
      const name = file.name;
      const metadata = {
        contentType: file.type
      };
      const task = ref.child(name).put(file, metadata);
      task
        .then(snapshot => snapshot.ref.getDownloadURL())
        .then(url => {
            document.getElementById('banner-url').innerHTML = url;  
            console.log(document.getElementById('banner-url').innerHTML);
        })
        .catch(console.error);
      }
      
    }
    $(window).on("load",function(){
        $(".loader-wrapper").fadeIn("slow");
    });
</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"></script>    <script src="js/bootstrap.min.js"></script>
    <script src="js/control-admin.js"></script>
</body>
</html>
