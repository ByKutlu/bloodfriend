<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Blood Friend</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="{{asset('material/css/bootstrap.min.css')}}" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="{{asset('material/css/material-dashboard.css?v=1.2.0')}}" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{asset('material/css/demo.css')}}" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>



    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">
        <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

    Tip 2: you can also add an image using data-image tag
-->
        <div class="logo">
            <a href="" class="simple-text">
                Kan 
        <img src="material/img/logo.png" width=30/> Dostum
            </a>
        </div>
        <div class="sidebar-wrapper" data-color="red">
        <ul class="nav">
                <li class="active">
                    <a href="{{url("")}}" id="home">
                        <i class="material-icons">home</i>
                        <p>Ana Sayfa</p>
                    </a>
                </li >
                <li class="">
                    <a href="{{url("kantalebi")}}" id="kantalebi">
                        <i class="material-icons">favorite</i>
                        <p>Kan Talebi</p>
                    </a>
                </li>
                <li>
                    <a href="{{url("kantalebilistesi")}}" id="kantalebilistesi">
                    <i class="material-icons">assignment</i>
                        <p>Kan Talep Listesi</p>
                    </a>
                </li>
                <li >
                    <a href="{{url("calisan")}}" id="calisan">
                        <i class="material-icons">person</i>
                        <p>Çalışanlar</p>
                    </a>
                </li>
                <li>
                    <a href="{{url("kurum")}}" id="kurum">
                    <i class="material-icons">account_balance</i>
                        <p>Kurumlar</p>
                    </a>
                </li>
                <li>
                    <a href="{{url("hakkimizda")}}" id="hakkimizda">
                    <i class="material-icons">new_releases</i>
                        <p>Hakkımızda</p>
                    </a>
                </li>
                <li>
                    <a href="{{url("ayarlar")}}" id="ayarlar">
                        <i class="material-icons">settings</i>
                        <p>Ayarlar</p>
                    </a>
                </li>
               <!-- <li class="active-pro">
                    <a href="">
                       <p>&copy;  2018 Blood Friend</p>
                    </a>
                </li>
                -->
            </ul>


        </div>

    </div>

    <div class="main-panel">
        <nav class="navbar navbar-transparent navbar-absolute">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"> @yield('title') </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">person</i>
                                <p class="hidden-lg hidden-md">Notifications</p>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{url("ayarlar")}}">Ayarlar</a>
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Çıkış
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">

                        @yield('content')

                    </div>

                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">

                <p class="copyright pull-right">
                    &copy;
                    2018 Blood Friend
                </p>


            </div>
        </footer>
    </div>
</div>
</body>
<!--   Core JS Files   -->
<script src="{{asset('material/js/jquery-3.2.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('material/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('material/js/material.min.js')}}" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="{{asset('material/js/chartist.min.js')}}"></script>
<!--  Dynamic Elements plugin -->
<script src="{{asset('material/js/arrive.min.js')}}"></script>
<!--  PerfectScrollbar Library -->
<script src="{{asset('material/js/perfect-scrollbar.jquery.min.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{asset('material/js/bootstrap-notify.js')}}"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Material Dashboard javascript methods -->
<script src="{{asset('material/js/material-dashboard.js?v=1.2.0')}}"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="{{asset('material/js/demo.js')}}"></script>


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>


<!--  jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>



<script>

  /*  $('.nav').on('click',li,function () {
        $('.nav li.active').removeClass('active');
        $(this).addClass('active');
    })*/
 /* $(document).ready(function(){
      $(".sidebar-wrapper .nav ul li a").each(function(){
          if($(this).attr("href")=="www.xyz.com/other/link1")
              $(this).addClass("active");
      })
  })
*/
    $(document).on('click', 'a[href^="{{url("")}}"]', function (event) {

         if ($(this).attr("href") == "{{url("")}}" || $(this).attr("href") == "{{url("kantalebi")}}" || $(this).attr("href") == "{{url("kantalebilistesi")}}" || $(this).attr("href") == "{{url("calisan")}}" || $(this).attr("href") == "{{url("kurum")}}" || $(this).attr("href") == "{{url("hakkimizda")}}" || $(this).attr("href") == "{{url("ayarlar")}}") {

            if ($(this).attr("href") == "home") {

                $("{{url("")}}").addClass("active");
                $("{{url("kantalebi")}}").removeClass("active");
                $("{{url("kantalebilistesi")}}").removeClass("active");
                $("{{url("calisan")}}").removeClass("active");
                $("{{url("kurum")}}").removeClass("active");
                $("{{url("hakkimizda")}}").removeClass("active");
                $("{{url("ayarlar")}}").removeClass("active");
            }
            else if ($(this).attr("href") == "kantalebi") {
                $("{{url("")}}").removeClass("active");
                $("{{url("kantalebi")}}").addClass("active");
                $("{{url("kantalebilistesi")}}").removeClass("active");
                $("{{url("calisan")}}").removeClass("active");
                $("{{url("kurum")}}").removeClass("active");
                $("{{url("hakkimizda")}}").removeClass("active");
                $("{{url("ayarlar")}}").removeClass("active");
            }
            else if ($(this).attr("href") == "kantalebilistesi") {
                $("{{url("")}}").removeClass("active");
                $("{{url("kantalebi")}}").removeClass("active");
                $("{{url("kantalebilistesi")}}").addClass("active");
                $("{{url("calisan")}}").removeClass("active");
                $("{{url("kurum")}}").removeClass("active");
                $("{{url("hakkimizda")}}").removeClass("active");
                $("{{url("ayarlar")}}").removeClass("active");
            }
            else if ($(this).attr("href") == "calisan") {
                $("{{url("")}}").removeClass("active");
                $("{{url("kantalebi")}}").removeClass("active");
                $("{{url("kantalebilistesi")}}").removeClass("active");
                $("{{url("calisan")}}").addClass("active");
                $("{{url("kurum")}}").removeClass("active");
                $("{{url("hakkimizda")}}").removeClass("active");
                $("{{url("ayarlar")}}").removeClass("active");
            }
            else if ($(this).attr("href") == "kurum") {
                $("{{url("")}}").removeClass("active");
                $("{{url("kantalebi")}}").removeClass("active");
                $("{{url("kantalebilistesi")}}").removeClass("active");
                $("{{url("calisan")}}").removeClass("active");
                $("{{url("kurum")}}").addClass("active");
                $("{{url("hakkimizda")}}").removeClass("active");
                $("{{url("ayarlar")}}").removeClass("active");
            }
            else if ($(this).attr("href") == "hakkimizda") {
                $("{{url("")}}").removeClass("active");
                $("{{url("kantalebi")}}").removeClass("active");
                $("{{url("kantalebilistesi")}}").removeClass("active");
                $("{{url("calisan")}}").removeClass("active");
                $("{{url("kurum")}}").removeClass("active");
                $("{{url("hakkimizda")}}").addClass("active");
                $("{{url("ayarlar")}}").removeClass("active");
            }
            else if ($(this).attr("href") == "ayarlar") {
                $("{{url("")}}").removeClass("active");
                $("{{url("kantalebi")}}").removeClass("active");
                $("{{url("kantalebilistesi")}}").removeClass("active");
                $("{{url("calisan")}}").removeClass("active");
                $("{{url("kurum")}}").removeClass("active");
                $("{{url("hakkimizda")}}").removeClass("active");
                $("{{url("ayarlar")}}").addClass("active");
            }
        }

    });





/*
  $(document).on('click', 'a[href^="#"]', function (event) {
      var url = window.location.pathname,
          urlRegExp = new RegExp(url.replace(/\/$/,'') + "$"); // create regexp to match current url pathname and remove trailing slash if present as it could collide with the link in navigation in case trailing slash wasn't present there
      // now grab every link from the navigation
      $('.menu a').each(function(){
          // and test its normalized href against the url pathname regexp
          if(urlRegExp.test(this.href.replace(/\/$/,''))){
              $(this).addClass('active');
          }
      });

      /*var activeurl = window.location;
      $('a[href="'+activeurl+'"]').parent('li').addClass('active');*/
/*

  });
*/

</script>





@yield("javascript")





</html>