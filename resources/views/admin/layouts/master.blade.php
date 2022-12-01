<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{asset('admin/assets/images/favicon.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('admin/assets/images/favicon.png')}}" type="image/x-icon">
    <title>@yield('title')</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/fontawesome.css')}}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/icofont.css')}}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/themify.css')}}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/flag-icon.css')}}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/feather-icon.css')}}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/chartist.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/date-picker.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/prism.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/vector-map.css')}}">
    <!-- Plugins css Ends-->
     <!-- Plugins css start-->
     <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/datatables.css')}}">
     <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/bootstrap.css')}}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/style.css')}}">
    <link id="color" rel="stylesheet" href="{{asset('admin/assets/css/color-1.css" media="screen')}}">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/responsive.css')}}">




    
    @yield('css')
  </head>
  <body>

    <!-- page-wrapper Start       -->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <div class="page-main-header">
        <div class="main-header-right row m-0">
          <div class="main-header-left">
            <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" src="{{asset('admin/assets/images/logo/logo.png')}}" alt=""></a></div>
            <div class="dark-logo-wrapper"><a href="index.html"><img class="img-fluid" src="{{asset('admin/assets/images/logo/dark-logo.png')}}" alt=""></a></div>
            <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle"></i></div>
          </div>
          <div class=" mx-3 nav-left col pull-left left-menu p-0">
            <h2>Dashboard</h2>

          </div>
          <div class="nav-right col pull-right right-menu p-0">
            <ul class="nav-menus">
              
              <li class="onhover-dropdown p-0">
                
                {{-- <button class="btn btn-primary-light" type="button"><a href="{{ route('logout') }}" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  <i data-feather="log-out"></i>
                  
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
               </form> --}}
              </button>
              </li>
            </ul>
          </div>
          <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
        </div>
      </div>
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper sidebar-icon">
        <!-- Page Sidebar Start-->
        <header class="main-nav">
          <div class="sidebar-user text-center">
            <img class="img-90 rounded-circle" src="{{asset('admin/assets/images/dashboard/1.png')}}" alt="">

              {{-- <h6 class="mt-3 f-14 f-w-600">{{Auth::user()->name}}</h6> --}}
              <p class="mb-0 font-roboto">Admin Dashboard</p>
           
          </div>
          <nav>
            <div class="main-navbar">
              <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
              <div id="mainnav">           
                <ul class="nav-menu custom-scrollbar">
                  <li class="back-btn">
                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                  </li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6>General             </h6>
                    </div>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="home"></i><span >Home Page</span></a>
                    <ol class="nav-submenu menu-content">
                    
                      <li><h5><a class="" href="{{route('sliders.index')}}">Sliders </a></h5></li>
                      <li><h5><a class="" href="{{route('categories.index')}}">Categories </a></h5></li>

                      <li><h5><a class="" href="{{route('blogcategories.index')}}">Blog Categories </a></h5></li>
                      <li><h5><a class="" href="{{route('subcategories.index')}}">Sub Categories </a></h5></li>
                    </ol>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="home"></i><span >User</span></a>
                    <ol class="nav-submenu menu-content">
                    
                      <li><h5><a class="" href="{{route('users.index')}}">All Users </a></h5></li>

                    </ol>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="home"></i><span >Setting</span></a>
                    <ol class="nav-submenu menu-content">
                      <li><h5><a class="" href="{{route('contacts.index')}}">All Contacts </a></h5></li>
                      <li><h5><a class="" href="{{route('settings.edit',1)}}">Edit Setting </a></h5></li>

                    </ol>
                  </li>
                 
                </ul>
              </div>
              <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </div>
          </nav>
        </header>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <!-- Container-fluid starts-->
                @yield('content')
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 footer-copyright">
                <p class="mb-0">Copyright 2021-22 © viho All rights reserved.</p>
              </div>
              <div class="col-md-6">
                <p class="pull-right mb-0">Hand crafted & made with <i class="fa fa-heart font-secondary"></i></p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- latest jquery-->
    <script src="{{asset('admin/assets/js/jquery-3.5.1.min.js')}}"></script>
    <!-- feather icon js-->
    <script src="{{asset('admin/assets/js/icons/feather-icon/feather.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/icons/feather-icon/feather-icon.js')}}"></script>
    <!-- Sidebar jquery-->
    <script src="{{asset('admin/assets/js/sidebar-menu.js')}}"></script>
    <script src="{{asset('admin/assets/js/config.js')}}"></script>
    <!-- Bootstrap js-->
    <script src="{{asset('admin/assets/js/bootstrap/popper.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/bootstrap/bootstrap.min.js')}}"></script>
    <!-- Plugins JS start-->
    <script src="{{asset('admin/assets/js/chart/chartist/chartist.js')}}"></script>
    <script src="{{asset('admin/assets/js/chart/chartist/chartist-plugin-tooltip.js')}}"></script>
    <script src="{{asset('admin/assets/js/chart/knob/knob.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/chart/knob/knob-chart.js')}}"></script>
    <script src="{{asset('admin/assets/js/chart/apex-chart/apex-chart.js')}}"></script>
    <script src="{{asset('admin/assets/js/chart/apex-chart/stock-prices.js')}}"></script>
    <script src="{{asset('admin/assets/js/prism/prism.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/clipboard/clipboard.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/counter/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/counter/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/counter/counter-custom.js')}}"></script>
    <script src="{{asset('admin/assets/js/custom-card/custom-card.js')}}"></script>
    <script src="{{asset('admin/assets/js/vector-map/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/vector-map/map/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('admin/assets/js/vector-map/map/jquery-jvectormap-us-aea-en.js')}}"></script>
    <script src="{{asset('admin/assets/js/vector-map/map/jquery-jvectormap-uk-mill-en.js')}}"></script>
    <script src="{{asset('admin/assets/js/vector-map/map/jquery-jvectormap-au-mill.js')}}"></script>
    <script src="{{asset('admin/assets/js/vector-map/map/jquery-jvectormap-chicago-mill-en.js')}}"></script>
    <script src="{{asset('admin/assets/js/vector-map/map/jquery-jvectormap-in-mill.js')}}"></script>
    <script src="{{asset('admin/assets/js/vector-map/map/jquery-jvectormap-asia-mill.js')}}"></script>
    <script src="{{asset('admin/assets/js/dashboard/default.js')}}"></script>
    <script src="{{asset('admin/assets/js/notify/index.js')}}"></script>
    <script src="{{asset('admin/assets/js/datepicker/date-picker/datepicker.js')}}"></script>
    <script src="{{asset('admin/assets/js/datepicker/date-picker/datepicker.en.js')}}"></script>
    <script src="{{asset('admin/assets/js/datepicker/date-picker/datepicker.custom.js')}}"></script>



    <script src="{{asset('admin/assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/datatable/datatables/datatable.custom.js')}}"></script>
    <script src="{{asset('admin/assets/js/tooltip-init.js')}}"></script>
    <!-- Plugins JS Ends-->

    <script>
      (function() {
          'use strict';
          window.addEventListener('load', function() {
              var forms = document.getElementsByClassName('needs-validation');
              var validation = Array.prototype.filter.call(forms, function(form) {
                  form.addEventListener('submit', function(event) {
                      if (form.checkValidity() === false) {
                          event.preventDefault();
                          event.stopPropagation();
                      }
                      form.classList.add('was-validated');
                  }, false);
              });
          }, false);
      })();
  </script>
    @yield('js')
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{asset('admin/assets/js/script.js')}}"></script>
    <script src="{{asset('admin/assets/js/theme-customizer/customizer.js')}}"></script>
    <!-- login js-->

    <!-- Plugin used-->
  </body>
</html>