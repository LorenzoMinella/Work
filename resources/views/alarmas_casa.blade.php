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
                        <a href="#" class="nav-link">BLOG</a>
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
                   <h3 class="h3-responsive home-title">Alarmas para casa</h3>
                    <a href="#" target="_blank" class="btn btn-custom btn-round">COMPARAR ALARMAS </a>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- START CLIENT-LOGO -->
    <section class="client-logo pt-1 pb-1" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="title-heading text-center">Alarmas de seguridad para la casa</h1>
                </div>         
            </div>
        </div>
    </section>
    <!-- END CLIENT-LOGO -->
		

    <!-- START COUNTER -->
    <section class="section counter pt-1 pb-1">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-12">
                    <p class="title-desc text-center text-white-50 mt-4">Cuando tu seguridad y la de tu familia es lo primero, la instalación de una alarma para casa es una solución que te ayudará a estar más protegido, a evitar posibles robos en tu vivienda y a preservar tu patrimonio.
                    <br><br>
                    Las alarmas para casa se deben adaptar a las necesidades de cada cliente y, además de ofrecerle seguridad, deben poseer otros valores añadidos que respondan a las peticiones del cliente y también a las propias características de la casa.</p>                                     	
                </div>                          
            </div>          
        </div>
        <br><br><br>
        

        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="servicios-box bg-white btn-rounde mt-4">
                        <div class="service-icon text-center">
                            <img src="{{URL::asset('img/group.png') }}"  class="img-fluid" alt="">
                        </div><br>
                        <h1 class="title-headin text-center">Casa con jardín</h1>
                        <p class="title-desc text-center text-white-50 mt-4">Es una buena práctica la instalación de detectores de inundación, que ayudan a descubrir posibles inundaciones y fugas de agua.</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="servicios-box bg-white btn-rounde mt-4">
                        <div class="service-icon text-center">
                            <img src="{{URL::asset('img/group.png') }}" class="img-fluid" alt="">
                        </div><br>
                        <h1 class="title-headin text-center">Sótanos, garajes o piscinas</h1>
                        <p class="title-desc text-center text-white-50 mt-4">Es una buena práctica la instalación de detectores de inundación, que ayudan a descubrir posibles inundaciones y fugas de agua.</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="servicios-box bg-white btn-rounde mt-4">
                        <div class="service-icon text-center">
                            <img src="{{URL::asset('img/group.png') }}" class="img-fluid" alt="">
                        </div><br>
                        <h1 class="title-headin text-center">Segunda vivienda (residencia esporádica) </h1>
                        <p class="title-desc text-center text-white-50 mt-4">Es una buena práctica la instalación de detectores de inundación, que ayudan a descubrir posibles inundaciones y fugas de agua.</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="servicios-box bg-white btn-rounde mt-4">
                        <div class="service-icon text-center">
                            <img src="{{URL::asset('img/group.png') }}" class="img-fluid" alt="">
                        </div><br>
                        <h1 class="title-headin text-center">Zona de urbanización con seguridad privada</h1>
                        <p class="title-desc text-center text-white-50 mt-4">Es una buena práctica la instalación de detectores de inundación, que ayudan a descubrir posibles inundaciones y fugas de agua.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="servicios-box bg-white btn-rounde mt-4">
                        <div class="service-icon text-center">
                            <img src="{{URL::asset('img/group.png') }}" class="img-fluid" alt="">
                        </div><br>
                        <h1 class="title-headin text-center">Casas pequeñas</h1>
                        <p class="title-desc text-center text-white-50 mt-4">Es una buena práctica la instalación de detectores de inundación, que ayudan a descubrir posibles inundaciones y fugas de agua.</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="servicios-box bg-white btn-rounde mt-4">
                        <div class="service-icon text-center">
                            <img src="{{URL::asset('img/group.png') }}" class="img-fluid" alt="">
                        </div><br>
                        <h1 class="title-headin text-center">Casas grandes (con gran valor económico) </h1>
                        <p class="title-desc text-center text-white-50 mt-4">Es una buena práctica la instalación de detectores de inundación, que ayudan a descubrir posibles inundaciones y fugas de agua.</p>
                    </div>
                </div>
                 <div class="col-lg-3">
                    <div class="servicios-box bg-white btn-rounde mt-4">
                        <div class="service-icon text-center">
                            <img src="{{URL::asset('img/group.png') }}" class="img-fluid" alt="">
                        </div><br>
                        <h1 class="title-headin text-center">Casa sin suministro eléctrico</h1>
                        <p class="title-desc text-center text-white-50 mt-4">Es una buena práctica la instalación de detectores de inundación, que ayudan a descubrir posibles inundaciones y fugas de agua.</p>
                    </div>
                </div>

            </div>
            <center>
                        <div class="mt-5">
                            <a href="" class="btn btn-custom  btn-round">COMPRAR AHORA</a>
                        </div>
                    </center>
                    <br><br><br>
            <div class="row">
                <div class="col-lg-12">
                    <center>
                        <img src="{{URL::asset('img/appsmoviles.png') }}" class="img-fluid" alt="" >
                    </center>
                    <p class="title-desc text-center text-white-50 mt-4"> APPS MOVILES</p>
                    <p class="title-desc text-center text-white-50 mt-4">Existen aplicaciones móviles desde las que controlar lo que pasa en la casa, así como recibir imágenes de las diferentes cámaras del sistema de seguridad. Este tipo de soluciones te permiten activar y desactivar la alarma de forma remota u obtener imágenes de tu casa en cualquier momento, estés donde estés.</p>                                       
                </div>
            </div>
        </div>


    </section>
    <!-- END COUNTER -->
		




    <!-- START SERVICES -->
    <section class="client-logo" id="services">
        <div class="container">
            
            <div class="row mt-4">
                <p class="title-desc text-center text-white-50 mt-4">El técnico especializado que visite la casa deberá tener en cuenta todos estos aspectos para ofrecer la alarma que se adapte mejor en cada caso. Él será el encargado de recomendar el tipo de elementos necesarios y el número de los mismos. Por ejemplo, el número de detectores volumétricos será mayor si dispones de una casa con varias alturas y con un número alto de habitaciones.
                <br><br>
                Cada casa tiene diferentes necesidades de seguridad. Por eso, en Alarmalia te ayudamos a encontrar la mejor solución en base a tus requerimientos específicos y características del inmueble que deseas proteger. 
                <br><br>
                Compara ahora y consigue, además, nuestra guía de seguridad gratuita, con la que conocer detalladamente los aspectos más importantes que debes tener en cuenta antes de contratar una alarma para tu casa.</p>
            </div>
        </div>
    </section>
    <!-- END SERVICES -->

    
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
                    <h5 class="f-18 text-white">Nosotros</h5>
                </div>                
                <div class="col-lg-1 p-5">
                    <h5 class="f-18 text-white">Anunciate</h5>
                </div>
                <div class="col-lg-1 p-5">
                    <h5 class="f-18 text-white">Empresa</h5>
                </div>
                <div class="col-lg-1 p-5">
                    <h5 class="f-18 text-white">Glosario</h5>
                </div>
                <div class="col-lg-1 p-5">
                    <h5 class="f-18 text-white">Contacto</h5>
                </div>
                <div class="col-lg-2 p-5 text-center">
                	<img src="{{URL::asset('img/icon/linkedin.png') }}" alt="" height="20">
                	<img src="{{URL::asset('img/icon/facebook.png') }}" alt="" height="20">
                	<img src="{{URL::asset('img/icon/instagram.png') }}" alt="" height="20">
                </div>
               

                <div class="start-form mt-4 pt-3 text-center">
                    <form action="#">
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