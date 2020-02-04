<?php 
session_start();
?>
<!doctype html>
<html lang="es-ES">

<head>
  <title>Avance de Metas</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  
  <script src="js/cargarUrl.js"></script>

</head>

<body>
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
      <div class="logo">
        <a href="#" class="simple-text logo-mini">
          Area de Informatica
        </a>
        <a href="#" class="simple-text logo-normal">
          Administrador
        </a>
      </div>
      <div class="sidebar-wrapper">
        
        <ul class="nav">

          <li class="nav-item active  ">
            
            <a class="nav-link" href="#" id="">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>

          </li>
          <li class="nav-item ">
            
            <a href="#" class="nav-link" id="institucion" >
              <i class="material-icons">room</i>
              <p>Institucion</p>
            </a>

          </li>

          <li class="nav-item">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Crear Oficinas
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#" id="milistado">Listado de oficinas</a>
                  <a class="dropdown-item" href="#" id="nuevaOficina">Nueva Oficina</a>
                </div>
          </li>
          <li class="nav-item">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Crear Areas
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#" id="milistado">Listado de Areas</a>
                  <a class="dropdown-item" href="#" id="nuevaOficina">Agregar Nueva Area</a>
                </div>
          </li>
       
          <li class="nav-item">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 Personal
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#" id="listadopersonal">Listado de Personal</a>
                  <a class="dropdown-item" href="#" id="nuevopersonal">Nuevo Personal</a>
                </div>
          </li>
          
          <li class="nav-item">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 Metas
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#" id="milistadoMetas">Listado de Metas</a>
                  <a class="dropdown-item" href="#" id="nuevaMeta">Agregar Nueva Metas</a>
                </div>
          </li>

          <li class="nav-item">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Cargos
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#" id="milistadoCargos">Listado de Cargos</a>
                  <a class="dropdown-item" href="#" id="nuevoCargos">Nuevo Cargo</a>
                </div>
          </li>

          <li class="nav-item  ">
            <a href="#" class="nav-link" id="estadisticas_oficinas" >
              <i class="material-icons">table</i>
              <p>Estadisticas por oficinas</p>
            </a>

          </li>
          <li class="nav-item  ">
            <a href="#" class="nav-link" id="estadisticas_areas" >
              <i class="material-icons">report</i>
              <p>Estadisticas por Areas</p>
            </a>

          </li>
          <!-- your sidebar here -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="material-icons">notifications</i> Notifications
                </a>
              </li>
              <!-- your navbar here -->
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
  