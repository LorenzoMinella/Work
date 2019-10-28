<!DOCTYPE html>
<html lang="en">

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


    
</head>

<body>

  <!--Navbar Start-->
    <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark">
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


    <section>
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{URL::asset('img/features/img-1.png') }}"  class="d-block " width="100%" height="750px" src="#" alt="First slide" >
            <div class="carousel-caption">
                   <h3 class="h3-responsive home-title">Alarmas para negocio</h3>
                    <a href="#" target="_blank" class="btn btn-custom btn-round">COMPARAR ALARMAS </a>
            </div>
          </div>
        </div>
      </div>
    </section>


<!-- START CONTACT -->
    <section class="section" id="contact">
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-lg-10">
                    <div class="col-lg-12">
                    <h4 class="text-center">Contácto</h4>
            <p class="title-desc text-center text-white-50 mt-4" ></p>
                </div>
                    <div class="custom-form mt-3">
                        <div id="message"></div>
                        <form method="post" action="php/contact.php" name="contact-form" id="contact-form">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group ">
                                        <input name="name" id="name" class="form-control" placeholder="Nombre*" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group ">
                                        <input name="name" id="name" class="form-control" placeholder="Apellidos*" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group ">
                                        <input class="form-control" id="subject" placeholder="Movil" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group ">
                                        <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Mensaje"></textarea>
                                    </div>
                                    <div class="checker" id="uniform-customer_privacy">
                                      <input type="checkbox" value="0" required  name="customer_privacy" autocomplete="off"> <a class="f-18" href="{{ route('companies.policies') }}">He leído y acepto la política de privacidad</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <input id="submit" name="send" class="submitBnt btn btn-secondary btn-round" value="ENVIAR" type="submit">
                                    <div id="simple-msg"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END CONTACT -->

     <!-- START COUNTER -->
    <section class="section counter">
        <div class="container">
            <div class="col-lg-12" class="row mt-5" id="counter">
                    <h4 class="text-center">ENCUENTRA TU ALARMA</h4>
            <p class="title-desc text-center text-white-50 mt-4" >Ahorra dinero y tiempo con nuestro comparador de alarmas.<br> 
Descubre en 3 minutos la alarma que mejor se adapta a ti.</p>
                    <center>
                        <div class="mt-5">
                            <a href="" class="btn btn-custom  btn-round">COMPRAR AHORA</a>
                        </div>
                    </center>
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
                    <h5 class="f-18 text-white">Glosario</h5>
                </div>
                <div class="col-lg-1 p-5">
                    <h5 class="f-18 text-white"><a class="f-18 text-white" href="{{ route('companies.contact')}}">Contácto</a></h5>
                </div>
                <div class="col-lg-2 p-5 text-center">
					<a href="#"><img src="{{URL::asset('img/icon/linkedin.png') }}" alt="" height="20"></a>
                	<a href="#"><img src="{{URL::asset('img/icon/facebook.png') }}" alt="" height="20"></a>
                	<a href="#"><img src="{{URL::asset('img/icon/instagram.png') }}" alt="" height="20"></a>
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
        <div class="row mt-1" >
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

</body>

</html>