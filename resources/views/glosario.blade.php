<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Comparador de Alarmas | Tu alarma al mejor precio | Alarmalia</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Alarmalia es un comparador de alarmas para el hogar y negocio en el que puedes encontrar la mejor alarma al mejor precio. ¡Descubre tu mejor alarma!" />
    <meta name="keywords" content="alarma, tyco alarmas, prosegur alarmas, vigilante" />
    <meta content="RkPeople" name="author" />
    <!-- favicon -->
    <link rel="shortcut icon" href="{{URL::asset('img/favicon.png')}}">

    <!-- css -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css" />

    <!--Slider-->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/owl.transitions.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}"/>

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{{ asset('css/swiper.min.css') }}">


    <link rel="stylesheet" href="{{ asset('css/circulos.css') }}">


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Archivo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-129577938-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-129577938-1');
    </script> 
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-M77GWGH');
    </script>
    <!-- End Google Tag Manager -->

<style type="text/css">
.carousel-caption {
top: 60%;
transform: translateY(-50%);
bottom: initial;
left: 60%;
-webkit-transform-style: preserve-3d;
-moz-transform-style: preserve-3d;
transform-style: preserve-3d;
}
  
/*  bhoechie tab */
div.bhoechie-tab-container{
  z-index: 10;
  background-color: #ffffff;
  padding: 0 !important;
  border-radius: 4px;
  -moz-border-radius: 4px;
  border:1px solid #ddd;
  margin-top: 20px;
  margin-left: 50px;
  -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
  box-shadow: 0 6px 12px rgba(0,0,0,.175);
  -moz-box-shadow: 0 6px 12px rgba(0,0,0,.175);
  background-clip: padding-box;
  opacity: 0.97;
  filter: alpha(opacity=97);
}
div.bhoechie-tab-menu{
  padding-right: 0;
  padding-left: 0;
  padding-bottom: 0;
}
div.bhoechie-tab-menu div.list-group{
  margin-bottom: 0;
}
div.bhoechie-tab-menu div.list-group>a{
  margin-bottom: 0;
}
div.bhoechie-tab-menu div.list-group>a .glyphicon,
div.bhoechie-tab-menu div.list-group>a .fa {
  color: #5A55A3;
}
div.bhoechie-tab-menu div.list-group>a:first-child{
  border-top-right-radius: 0;
  -moz-border-top-right-radius: 0;
}
div.bhoechie-tab-menu div.list-group>a:last-child{
  border-bottom-right-radius: 0;
  -moz-border-bottom-right-radius: 0;
}
div.bhoechie-tab-menu div.list-group>a.active,
div.bhoechie-tab-menu div.list-group>a.active .glyphicon,
div.bhoechie-tab-menu div.list-group>a.active .fa{
  background-color: #5A55A3;
  background-image: #5A55A3;
  color: #ffffff;
}
div.bhoechie-tab-menu div.list-group>a.active:after{
  content: '';
  position: absolute;
  left: 100%;
  top: 50%;
  margin-top: -13px;
  border-left: 0;
  border-bottom: 13px solid transparent;
  border-top: 13px solid transparent;
  border-left: 10px solid #5A55A3;
}

div.bhoechie-tab-content{
  background-color: #ffffff;
  /* border: 1px solid #eeeeee; */
  padding-left: 20px;
  padding-top: 10px;
}

div.bhoechie-tab div.bhoechie-tab-content:not(.active){
  display: none;
}
</style>


</head>

<body>
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M77GWGH"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!--Navbar Start-->
    <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark" style="position: sticky;">
        <div class="container">
            <!-- LOGO -->
            <a class="navbar-brand logo text-uppercase" href="{{ route('site.home') }}">
                <img src="{{URL::asset('img/logo.png') }}" class="logo-light" alt="" height="80">
                <img src="{{URL::asset('img/logo.png') }}" class="logo-dark" alt="" height="80">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto navbar-center" id="mySidenav">
                    <li class="nav-item">
                        <a href="{{ route('companies.list')}}" class="nav-link">COMPAÑÍAS</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('companies.homealarms')}}" class="nav-link">ALARMAS PARA CASA</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('companies.business_alarms')}}" class="nav-link">ALARMAS PARA NEGOCIO</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('companies.questions')}}" class="nav-link">FAQS</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('companies.blog')}}" class="nav-link">BLOG</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->



   <!-- START HOME -->
    <br>
    <br>

    <section>
        <div id="carouselExampleControls" class="carousel slide" >
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block " width="100%" height="100%" src="{{URL::asset($banners->banner_url)}}"
                alt="First slide">
              <div class="carousel-caption">
                                        <h3 class="h3-responsive home-title">{{$banners->title}}</h3>
                                            <a href="{{ route('companies.comparator')}}" class="btn btn-custom btn-round">COMPARAR ALARMAS </a>
              </div>
            </div>
          </div>
        </div>
    </section>
    <br>
    <br>
    <br>
    <br>
    <!-- END HOME -->



    <!-- START COUNTER -->
    <section class="section counter">
        <div class="col-lg-12">
            <div class="col-lg-6 swiper-container">
                <div class="swiper-wrapper mt-4">                               
                @for($i=1; $i <= 27 ; $i++)
                    <div class="swiper-slide" align="center">
                        <a href="#tabsNavigationSimpleIcons{{$i}}" data-toggle="tab">
                            <span class="featured-boxes featured-boxes-style-6 p-none m-none">
                                <span class="featured-box featured-box-primary featured-box-effect-6 p-none m-none">
                                    <span class="box-content p-none m-none">
                                        @if($i == 1 )
                                            <i class="icon-featured fa fa-user">A</i>
                                        @endif
                                       @if($i == 2 )
                                            <i class="icon-featured fa fa-user">B</i>
                                        @endif
                                       @if($i == 3 )
                                            <i class="icon-featured fa fa-user">C</i>
                                        @endif
                                       @if($i == 4 )
                                            <i class="icon-featured fa fa-user">D</i>
                                        @endif
                                       @if($i == 5 )
                                            <i class="icon-featured fa fa-user">E</i>
                                        @endif
                                        @if($i == 6 )
                                            <i class="icon-featured fa fa-user">F</i>
                                        @endif
                                       @if($i == 7)
                                            <i class="icon-featured fa fa-user">G</i>
                                        @endif
                                       @if($i == 8 )
                                            <i class="icon-featured fa fa-user">H</i>
                                        @endif
                                       @if($i == 9 )
                                            <i class="icon-featured fa fa-user">I</i>
                                        @endif
                                       @if($i == 10 )
                                            <i class="icon-featured fa fa-user">J</i>
                                        @endif
                                        @if($i == 11 )
                                            <i class="icon-featured fa fa-user">K</i>
                                        @endif
                                       @if($i == 12 )
                                            <i class="icon-featured fa fa-user">L</i>
                                        @endif
                                       @if($i == 13 )
                                            <i class="icon-featured fa fa-user">M</i>
                                        @endif
                                       @if($i == 14 )
                                            <i class="icon-featured fa fa-user">N</i>
                                        @endif
                                       @if($i == 15 )
                                            <i class="icon-featured fa fa-user">Ñ</i>
                                        @endif
                                        @if($i == 16 )
                                            <i class="icon-featured fa fa-user">O</i>
                                        @endif
                                       @if($i == 17 )
                                            <i class="icon-featured fa fa-user">P</i>
                                        @endif
                                       @if($i == 18)
                                            <i class="icon-featured fa fa-user">Q</i>
                                        @endif
                                       @if($i == 19)
                                            <i class="icon-featured fa fa-user">R</i>
                                        @endif
                                       @if($i == 20)
                                            <i class="icon-featured fa fa-user">S</i>
                                        @endif
                                        @if($i == 21 )
                                            <i class="icon-featured fa fa-user">T</i>
                                        @endif
                                       @if($i == 22)
                                            <i class="icon-featured fa fa-user">U</i>
                                        @endif
                                       @if($i == 23 )
                                            <i class="icon-featured fa fa-user">V</i>
                                        @endif
                                       @if($i == 24 )
                                            <i class="icon-featured fa fa-user">W</i>
                                        @endif
                                       @if($i == 25 )
                                            <i class="icon-featured fa fa-user">X</i>
                                        @endif
                                       @if($i == 26 )
                                            <i class="icon-featured fa fa-user">Y</i>
                                        @endif
                                       @if($i == 27 )
                                            <i class="icon-featured fa fa-user">Z</i>
                                        @endif
                                    </span>
                                </span>
                            </span>                                 
                            
                        </a>
                    </div>
                @endfor
                </div>
            <!-- Add Arrows  -->
                <div class="swiper-button-next">
                    <i class="mdi mdi-chevron-right"></i>
                </div>
                <div class="swiper-button-prev ">
                    <i class="mdi mdi-chevron-left"></i>
                </div>
                <br><br><br>
            </div>
            <div class="tab-content">
                @foreach ($abc as $key => $value) 
                <div class="tab-pane" id="tabsNavigationSimpleIcons{{$value}}">
                    <div class="center">
                        <div class="container">
                            <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
                              <div class="list-group">
                                @foreach( (\App\Glosary::where('letter', '=',$value)->get()) as $glosary)
                                <a href="#" class="list-group-item">
                                  <br/><center><p style="color: #212529;">{{$glosary->name}}</p> </center>
                                </a>
                                @endforeach
                              </div>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">
                                <!-- flight section -->
                                @foreach( (\App\Glosary::where('letter', '=',$value)->get()) as $glosary)
                                    <div class="bhoechie-tab-content" style="margin-top: 0;">
                                        <center>
                                        <h1 class="title-heading text-center">{{$glosary->name}}</h1>
                                        </center>
                                        <br>
                                        <p class="title-desc text-justify text-white-50 mt-4">{{$glosary->content}}</p>

                                    </div>
                                @endforeach
                            </div>

                            </div>
                        </div>
     
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- END COUNTER -->
 <!-- START PRICING -->
    <section class="client-logo" id="pricing">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <br>
                    <h1 class="title-heading text-center">¿Quieres que contacten contigo?</h1>
                    
                    <center>
                        <div class="col-lg-4" class="form-group ">
                                        <input class="form-control" id="subject" placeholder="Tu teléfono aqui" type="text">
                                    </div>
                                    <br>
                        <div class="checker" id="uniform-customer_privacy">
                                      <input type="checkbox" value="0" required  name="customer_privacy" autocomplete="off"> He leído y acepto la política de privacidad
                                    </div><br>
                        <div class="mt-3">
                            <a href="" class="btn btn-secondary btn-sm btn-round">SOLICITAR AHORA</a>
                        </div></center>
                </div>
            </div>
        </div>
    </section>
    <!-- END PRICING -->

 <!-- START COUNTER -->
    <section class="section bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="title-heading text-center">¿Eres un proveedor de alarmas?</h1>
                    
                    <center><div class="mt-5">
                            <a href="{{ route('companies.advertise') }}" class="btn btn-secondary btn-sm btn-round">ANUNCIARME</a>
                        </div></center>
                </div>
            </div>
        </div>
    </section>
    <!-- END COUNTER -->
  
 
    <!-- START FOOTER -->
    <section class="footer">
        <div class="container">
            <!-- START FOOTER -->
            <div class="row footer-content">
                <div class="col-lg-1 p-4 text-center" >
                    <img src="{{URL::asset('img/alarmalia/claro.png') }}" alt="" height="70">
                </div>
                <div class="col-lg-1 p-5">
                    <h5 class="f-18 text-white"><a class="f-18 text-white" href="{{ route('companies.about_us') }}">Nosotros</a></h5>
                </div>                
                <div class="col-lg-1 p-5">
                    <h5 class="f-18 text-white"><a class="f-18 text-white" href="{{ route('companies.advertise') }}">Anunciate</a></h5>
                </div>
                <div class="col-lg-1 p-5">
                    <h5 class="f-18 text-white"><a class="f-18 text-white" href="{{ route('companies.list')}}">Empresas</a></h5>
                </div>
                <div class="col-lg-1 p-5">
                    <h5 class="f-18 text-white"><a class="f-18 text-white" href="{{ route('companies.glosary')}}">Glosario</a></h5>
                </div>
                <div class="col-lg-1 p-5">
                    <h5 class="f-18 text-white"><a class="f-18 text-white" href="{{ route('companies.contact')}}">Contacto</a></h5>
                </div>
                <div class="col-lg-2 p-5 text-center">
                  <a href="#"><img src="{{URL::asset('img/icon/linkedin.png') }}" alt="" height="20"></a>
                  <a href="#"><img src="{{URL::asset('img/icon/facebook.png') }}" alt="" height="20"></a>
                </div>
               

                <div class="start-form mt-4 pt-3 text-center">
                    <form action="#">
                    {{ csrf_field() }}
                        <input placeholder="Tu email " type="text">
                        <button type="submit" class="btn  btn-roundes">ENVIAR</button>
                    </form>
                </div>
            </div>
            <!-- END FOOTER -->            
        </div>
    </section>
    <!-- END FOOTER -->

    <!-- START FOOTER-AlT -->
    <section class="foter">
        <div>
            <div class="col-lg-12">
                <p class="footer-alt text-center mb-0">© 2019 Alarmalia | Todos los derechos reservados.  Aviso legal. Términos y condiciones | Política de cookies. </p>
            </div>
        </div>
    </section>
    <!-- END FOOTER-ALT -->

    <!-- javascript -->
    
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/scrollspy.min.js') }}"></script>
    <script src="{{ asset('js/counter.init.js') }}"></script>

    <!-- Owl Carousel -->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    
    

    <!-- Swiper JS -->
    <script src="{{ asset('js/swiper.min.js') }}"></script>

    <!-- Magnific Popup -->
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/contact.js') }}"></script>
    <script src="{{ asset('js/plugins-init.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
     <script type="text/javascript">
        $(document).ready(function() {
            $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
                e.preventDefault();
                $(this).siblings('a.active').removeClass("active");
                $(this).addClass("active");
                var index = $(this).index();
                $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
                $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
                $(this).siblings('active').addClass("active");
                $(this).addClass("active");
            });
        });
    </script>
</body>

</html>