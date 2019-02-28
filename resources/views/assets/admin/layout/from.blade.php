<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Machupicchu Goldens </title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{ URL::asset('public/assets/dist/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('public/assets/dist/font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href=" {{ URL::asset('public/assets/dist/Ionicons/css/ionicons.min.css')}}">
  <link rel="stylesheet" href=" {{ URL::asset('public/assets/dist/css/AdminLTE.min.css')}}">
  <link rel="stylesheet" href=" {{ URL::asset('public/assets/dist/css/skins/_all-skins.min.css')}}">
  <link rel="stylesheet" href=" {{ URL::asset('public/assets/dist/css/toastr.min.css')}}">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
   @yield('style')
     
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <a href="/" class="logo">
      <span class="logo-lg"><b>Machupicchu</b></span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../public/assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Admin</span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="../public/assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Adminnistrador
                  <small>Machupicchu </small>
                </p>
              </li>
           
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="{{ route('logout') }}" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
         
        </ul>
      </div>
    </nav>
  </header>
  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../public/assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Administrador</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Categoria</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{URL::route('categories.index') }}"><i class="fa fa-circle-o"></i> Listado</a></li>
          </ul>
        </li>   

        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Tours</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="{{URL::route('tours.index')}}"><i class="fa fa-circle-o"></i>Listado</a></li>
          </ul>
        </li>
       
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Usuarios</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{URL::route('users.index') }}"><i class="fa fa-circle-o"></i> Listado</a></li>
          </ul>
        </li>   

         <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Multimedia</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{URL::route('multimedia.index') }}"><i class="fa fa-circle-o"></i> Slider</a></li>
          </ul>
        </li>  

      </ul>
    </section>
  </aside>


  <div class="content-wrapper">
    
     @yield('contenido')
     
 

  </div>

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0  
    </div>
    <strong>Copyright &copy; Machupicchu Golden </strong>
  </footer>
</div>
<script src="{{ URL::asset('public/assets/dist/js/jquery/dist/jquery.min.js')}}"></script>
<script src="{{ URL::asset('public/assets/dist/js/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{ URL::asset('public/assets/dist/js/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{ URL::asset('public/assets/dist/fastclick/lib/fastclick.js')}}"></script>
<script src="{{ URL::asset('public/assets/dist/js/adminlte.min.js')}} "></script>
<script src="{{ URL::asset('public/assets/dist/js/demo.js')}}"></script>
<script src="{{ URL::asset('public/assets/dist/js/toastr.min.js')}}"></script>

@yield('script')
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
</body>
</html>
