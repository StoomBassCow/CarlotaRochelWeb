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

  <title>Carlota rochel</title>

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
    </ul>

 
   
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/home" class="brand-link">
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

          <a href="#" class="d-block">Empleado: </a>

        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    

        <!--Catálogos-->

<li class="nav-item has-treeview">

    <a href="#" class="nav-link">
      <img src="{{URL::asset('./img/icons/023-pallet.png')}}" style="width: 30px; height: 30px; " alt="">
        <i class="nav-icon fa fa-pie-chart"></i>
        <p>
            Catálogos
            <i class="right fa fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="products" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Productos</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/clients" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Clientes</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/kindOfProducts" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Tipos de productos</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="origin" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Paises de origen</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="providers" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Proveedores</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="users" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Usuarios</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="userRoles" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Roles de usuario</p>
            </a>
        </li>
    </ul>
</li>
<!--PRocesos administrativos-->

<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
       <img src="{{URL::asset('./img/icons/013-ecommerce-1.png')}}" style="width: 30px; height: 30px; " alt="">
        <i class="nav-icon fa fa-pie-chart"></i>
        <p>
            Procesos administrativos
            <i class="right fa fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="salesDetail" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Detalle de ventas</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="productsMovements" class="nav-link">
                <i class="fa  nav-icon"></i>
                <p>Movimientos de producto</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="cashMovements" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Movimientos de efectivo</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="boxCut" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Corte de caja</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="inventoryReport" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Reporte de inventario</p>
            </a>
        </li>
    </ul>
</li>


<!--sALIR-->
<li class="nav-item has-treeview">
    <a  href="{{ url('/logout') }}" class="nav-link">
       <img src="{{URL::asset('./img/icons/exit.png')}}"  style="width: 30px; height: 30px; " alt="">
        <i class="nav-icon fa fa-pie-chart" data-toggle="modal" data-target="#modal-warning"></i>
        <p data-toggle="modal" data-target="#exampleModalCenter">
           Cerrar Sesion 
        </p>
    </a>
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ¿Estas seguro que deseas salir de tu usuario?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Si</button>
        <button type="button" class="btn btn-primary">No</button>
      </div>
    </div>
  </div>
</div>



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

          </div>
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
