<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


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
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/bootstrap.css')}}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/style.css')}}">
    <link id="color" rel="stylesheet" href="{{asset('admin/assets/css/color-1.css" media="screen')}}">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/responsive.css')}}">

 
  </head>
  <body>
      <div class="container">
          <div class="row">
                    <div class="col-xl-12 col-md-12 xl-70">
                      <div class="email-right-aside">
                        <div class="card email-body">
                          <div class="email-profile">                                                                     
                            <div class="email-right-aside">
                              <div class="email-body">
                                <div class="email-content">
                                  <div class="email-top">
                                    <div class="row " >
                                      <div class="col-xl-12" style="text-align:center">
                                        <div class="media"><img class="me-3 rounded-circle" src="{{asset('admin/assets/images/dashboard/1.png')}}" alt="">
                                          <div class="media-body">
                                            <h3 class="d-block" style="text-align:left">My Name : <span style="color:blue"> {{ $mailData['name'] }} </span>   </h3>                                                        </h6>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="email-wrapper " style="text-align:center">
                                    <div class="emailread-group">
                                      <div class="read-group" style="text-align:left" >
                                        <p>Hello</p>
                                        <p>Dear Sir Good Morning,</p>
                                      </div>
                                      <div class="read-group">
                                        <!--<h5>Elementum varius nisi vel tempus. Donec eleifend egestas viverra.</h5>-->
                                        <p style="color:#4B0082">{{ $mailData['message'] }} </p>
                                         <p style="text-align:left">Thank you</p>
                                      </div>
                                    </div>
                                    <!--<div class="emailread-group">-->
                                    <!--  <h6 class="text-muted mb-0"><i class="icofont icofont-clip"></i> ATTACHMENTS</h6><a class="text-muted text-end right-download font-primary f-w-600" href="#"><i class="fa fa-long-arrow-down me-2"></i>Download All</a>-->
                                    <!--  <div class="clearfix"></div>-->
                                    <!--  <div class="attachment">-->
                                    <!--    <ul>-->
                                    <!--      <li><img class="img-fluid" src="../assets/images/email/1.jpg" alt=""></li>-->
                                    <!--      <li><img class="img-fluid" src="../assets/images/email/2.jpg" alt=""></li>-->
                                    <!--      <li><img class="img-fluid" src="../assets/images/email/3.jpg" alt=""></li>-->
                                    <!--    </ul>-->
                                    <!--  </div>-->
                                    <!--</div>-->
                                    <!--<div class="emailread-group">-->
                                    <!--  <textarea class="form-control" rows="4" cols="50" placeholder="write about your nots"></textarea>-->
                                    <!--  <div class="action-wrapper">-->
                                    <!--    <ul class="actions">-->
                                    <!--      <li><a class="btn btn-primary" href="javascript:void(0)"><i class="fa fa-reply me-2"></i>Reply</a></li>-->
                                    <!--      <li><a class="btn btn-secondary" href="javascript:void(0)"><i class="fa fa-reply-all me-2"></i>Reply All</a></li>-->
                                    <!--      <li><a class="btn btn-danger" href="javascript:void(0)"><i class="fa fa-share me-2"></i>Forward</a></li>-->
                                    <!--    </ul>-->
                                    <!--  </div>-->
                                    <!--</div>-->
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
            <script src="{{asset('admin/assets/js/notify/bootstrap-notify.min.js')}}"></script>
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
</body>
</html>            

<!--<!DOCTYPE html>-->
<!--<html>-->
<!--<head>-->
<!--    <title>{{ $mailData['email'] }}</title>-->
<!--</head>-->
<!--<body>-->
<!--    <h1>{{ $mailData['name'] }}</h1>-->

<!--    <p>{{ $mailData['message'] }}</p>-->
     
<!--    <p>Thank you</p>-->
<!--</body>-->
<!--</html>-->