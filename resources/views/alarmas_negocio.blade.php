<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Alarmalia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Bootstrap 4 Landing Page Template" />
    <meta name="keywords" content="bootstrap 4, premium, marketing, multipurpose" />
    <meta content="Themesdesign" name="author" />
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
                   <h3 class="h3-responsive home-title">Alarmas para negocio</h3>
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
                    <h1 class="title-heading text-center">ALARMAS DE SEGURIDAD PARA EMPRESAS</h1>
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
                    <p class="title-desc text-center text-white-50 mt-4">La protección de un negocio es un aspecto primordial y que se debe tener en cuenta, independientemente de su tamaño o actividad. Para muchos casos, como es el de autónomos o pequeños comercios, puede ser además la base de la economía familiar, por lo que su tranquilidad pasa por proteger el negocio de posibles robos o adversidades que ponga en peligro los bienes que se encuentren en el establecimiento.
                    <br><br>
                    Existen diversos tipos de sistemas de alarma para negocios, ya que cada empresa o local cuenta con características muy distintas y, por tanto, con necesidades diferentes. El método habitual es que, previamente a la instalación de un sistema de seguridad de alarmas en un negocio, la empresa de seguridad analice el caso concreto y estudie las características particulares del negocio para proponer el sistema de alarma óptimo.</p>
                    <br><br>
                    <h1 class="title-headin text-center">Zona de urbanización con seguridad privada</h1> 
                    <p class="title-desc text-center text-white-50 mt-4">Esta cuestión depende de muchos factores, uno de los de mayor peso es el tamaño del establecimiento. Si estamos ante un local más bien pequeño seguramente con un sistema de alarmas de negocio inalámbrico en el que los elementos de la misma (sensores, detectores…) se conecten con la central por medio de ondas de radio será suficiente. Sin embargo, si lo que estamos protegiendo es una nave de dimensiones considerables o un local grande con zonas amplias, probablemente sea necesario un sistema mixto o híbrido,que combina elementos cableados (en el que los elementos de la alarma de negocio se conectan con la central por medio de cable) e inalámbricos.</p>
                    <br><br><br>
                    <img src="{{URL::asset('img/banercam.png') }}"  class="img-fluid" alt="">

                </div>                          
            </div>          
        </div>
        <br><br><br>
        

        <div class="container">
            <p class="title-desc text-center text-white-50 mt-4">Existen varios aspectos importantes que se deben tener en cuenta sobre la importancia de contar con una alarma para negocio:</p>
            <div class="row">
                <div class="col-lg-3">
                    <div class="servicios-box bg-white btn-rounde mt-4">
                        <div class="service-icon text-center">
                            <img src="{{URL::asset('img/numbers/1.png') }}"  class="img-fluid" alt="">
                        </div><br>
                        <h1 class="title-headin text-center">Alarma como elemento dinosaurio</h1>
                        <p class="title-desc text-center text-white-50 mt-4">Es una buena práctica la instalación de detectores de inundación, que ayudan a descubrir posibles inundaciones y fugas de agua.</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="servicios-box bg-white btn-rounde mt-4">
                        <div class="service-icon text-center">
                            <img src="{{URL::asset('img/numbers/2.png') }}"  class="img-fluid" alt="">
                        </div><br>
                        <h1 class="title-headin text-center">Protección continua</h1>
                        <p class="title-desc text-center text-white-50 mt-4">Es una buena práctica la instalación de detectores de inundación, que ayudan a descubrir posibles inundaciones y fugas de agua.</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="servicios-box bg-white btn-rounde mt-4">
                        <div class="service-icon text-center">
                            <img src="{{URL::asset('img/numbers/3.png') }}"  class="img-fluid" alt="">
                        </div><br>
                        <h1 class="title-headin text-center">Conexión CRA </h1>
                        <p class="title-desc text-center text-white-50 mt-4">Es una buena práctica la instalación de detectores de inundación, que ayudan a descubrir posibles inundaciones y fugas de agua.</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="servicios-box bg-white btn-rounde mt-4">
                        <div class="service-icon text-center">
                            <img src="{{URL::asset('img/numbers/4.png') }}"  class="img-fluid" alt="">
                        </div><br>
                        <h1 class="title-headin text-center">Botones SOS</h1>
                        <p class="title-desc text-center text-white-50 mt-4">Es una buena práctica la instalación de detectores de inundación, que ayudan a descubrir posibles inundaciones y fugas de agua.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="servicios-box bg-white btn-rounde mt-4">
                        <div class="service-icon text-center">
                            <img src="{{URL::asset('img/numbers/5.png') }}"  class="img-fluid" alt="">
                        </div><br>
                        <h1 class="title-headin text-center">Detectores con cámara</h1>
                        <p class="title-desc text-center text-white-50 mt-4">Es una buena práctica la instalación de detectores de inundación, que ayudan a descubrir posibles inundaciones y fugas de agua.</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="servicios-box bg-white btn-rounde mt-4">
                        <div class="service-icon text-center">
                            <img src="{{URL::asset('img/numbers/6.png') }}"  class="img-fluid" alt="">
                        </div><br>
                        <h1 class="title-headin text-center">Servicios adicionales </h1>
                        <p class="title-desc text-center text-white-50 mt-4">Es una buena práctica la instalación de detectores de inundación, que ayudan a descubrir posibles inundaciones y fugas de agua.</p>
                    </div>
                </div>
                 <div class="col-lg-3">
                    <div class="servicios-box bg-white btn-rounde mt-4">
                        <div class="service-icon text-center">
                            <img src="{{URL::asset('img/numbers/7.png') }}"  class="img-fluid" alt="">
                        </div><br>
                        <h1 class="title-headin text-center">Empresas de seguridad</h1>
                        <p class="title-desc text-center text-white-50 mt-4">Es una buena práctica la instalación de detectores de inundación, que ayudan a descubrir posibles inundaciones y fugas de agua.</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="servicios-box bg-white btn-rounde mt-4">
                        <div class="service-icon text-center">
                            <img src="{{URL::asset('img/numbers/8.png') }}"  class="img-fluid" alt="">
                        </div><br>
                        <h1 class="title-headin text-center">Ley de privacidad</h1>
                        <p class="title-desc text-center text-white-50 mt-4">Es una buena práctica la instalación de detectores de inundación, que ayudan a descubrir posibles inundaciones y fugas de agua.</p>
                    </div>
                </div>
            </div>
            <center>
        </div>


    </section>
    <!-- END COUNTER -->
		




  
    
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