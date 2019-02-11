<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Carlota rochel | Starter</title>

<link rel="stylesheet" href="/css/app.css">

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
   
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{URL::asset('./img/CarlotaRochelLogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Carlota Rochel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <!--img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"-->
        </div>
        <div class="info">
          <a href="#" class="d-block">Name In BD</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    

        <!--Inventarios-->

<li class="nav-item has-treeview">

    <a href="#" class="nav-link">
      <img src="{{URL::asset('./img/icons/023-pallet.png')}}" style="width: 30px; height: 30px; " alt="">
        <i class="nav-icon fa fa-pie-chart"></i>
        <p>
            Inventarios
            <i class="right fa fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="pages/charts/chartjs.html" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>---</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="pages/charts/flot.html" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>---</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="pages/charts/inline.html" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>---</p>
            </a>
        </li>
    </ul>
</li>

<!--Inventarios en aparador-->

<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
       <img src="{{URL::asset('./img/icons/019-supermarket.png')}}" style="width: 30px; height: 30px; " alt="">
        <i class="nav-icon fa fa-pie-chart"></i>
        <p>
            Inventarios en aparador
        </p>
    </a>
</li>

<!--Inventario en bodega-->

<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
       <img src="{{URL::asset('./img/icons/022-trolley.png')}}" style="width: 30px; height: 30px; " alt="">
        <i class="nav-icon fa fa-pie-chart"></i>
        <p>
            Inventarios en bodega
        </p>
    </a>
</li>

<!--Catalogos-->

<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
       <img src="{{URL::asset('./img/icons/013-ecommerce-1.png')}}" style="width: 30px; height: 30px; " alt="">
        <i class="nav-icon fa fa-pie-chart"></i>
        <p>
            Catálogos
            <i class="right fa fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="pages/charts/chartjs.html" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>---</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="pages/charts/flot.html" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>---</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="pages/charts/inline.html" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>---</p>
            </a>
        </li>
    </ul>
</li>
<!--Productos-->

<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
       <img src="{{URL::asset('./img/icons/011-eshop.png')}}" style="width: 30px; height: 30px; " alt="">
        <i class="nav-icon fa fa-pie-chart"></i>
        <p>
            Productos
        </p>
    </a>
</li>
<!--Clientes-->

<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
       <img src="{{URL::asset('./img/icons/012-barter.png')}}" style="width: 30px; height: 30px; " alt="">
        <i class="nav-icon fa fa-pie-chart"></i>
        <p>
            Clientes
        </p>
    </a>
</li>
<!--Tipos de productos-->

<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
       <img src="{{URL::asset('./img/icons/017-conveyor-belt.png')}}" style="width: 30px; height: 30px; " alt="">
        <i class="nav-icon fa fa-pie-chart"></i>
        <p>
            Tipos de productos
        </p>
    </a>
</li>
<!--Paises de origen-->

<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
       <img src="{{URL::asset('./img/icons/014-placeholder.png')}}" style="width: 30px; height: 30px; " alt="">
        <i class="nav-icon fa fa-pie-chart"></i>
        <p>
            Paises de origen
        </p>
    </a>
</li>


<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
       <img src="{{URL::asset('./img/icons/025-delivery-truck.png')}}" style="width: 30px; height: 30px; " alt="">
        <i class="nav-icon fa fa-pie-chart"></i>
        <p>
           Proveedores
        </p>
    </a>
</li>
<!--sALIR-->
<li class="nav-item has-treeview">
    <a  href="{{ url('/logout') }}" class="nav-link">
       <img src="{{URL::asset('./img/icons/exit.png')}}"  style="width: 30px; height: 30px; " alt="">
        <i class="nav-icon fa fa-pie-chart" data-toggle="modal" data-target="#modal-warning"></i>
        <p>
           Cerrar Sesion 
        </p>
    </a>



</li>
        </ul>
      </nav>
      <!-- /.sidebar-menu --> 
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
      

                <!--Contenido principal-->
                @yield('content')
            
                <!--Contenido principal-->

          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <i class="fal fa-inventory"></i>
    

   <div class="modal modal-warning fade" id="modal-warning">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Warning Modal</h4>
              </div>
              <div class="modal-body">
                <p>One fine body&hellip;</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-outline">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>


<script src="/js/app.js"></script>

</body>
</html>
