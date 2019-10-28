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


    <!-- START CLIENT-LOGO -->
    <section class="client-logo pt-1 pb-1" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="title-heading text-center">Comparador de alarmas | Sobre Nosotros | Alarmalia</h1>
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
                    <h1 class="title-headin text-center">Una idea muy sencilla</h1>
                    <p class="title-desc text-justify text-white-50 mt-4">Alarmalia fue fundado por un empresario emprendedor en 2017, al que responder a una pregunta sencilla le resultó mucho más difícil de lo previsto. Dos años antes, después de un robo en casa de su madre, decidió buscar la mejor alarma para su propia casa y para la de su progenitora. Comenzó la búsqueda y se preguntó “¿Cómo contratar de manera fácil la alarma más adecuada para nuestra casa?” Pero a veces lo sencillo se torna de repente complicado.
                    <br>
                    La respuesta final a esa pregunta es Alarmalia. Llegar a ella significó no sólo crear la infraestructura del comparador de principio a fin, y limpiar y desbrozar los datos correctos del mercado, sino fundamentalmente repensar cómo y por qué contratamos una alarma para nuestra vivienda o negocio.</p>
                    <br><br> 
                    <h1 class="title-headin text-center">¿Por qué estamos aquí?</h1>
                    <p class="title-desc text-justify text-white-50 mt-4">Creemos que no hay ninguna razón por la que la búsqueda y elección de un sistema de alarma no pueda ser sencilla, clara y confiable para cualquier persona. Las opciones deben ser claras, convincentes y darnos seguridad.</p>
                    <h1 class="title-headin text-center">¿Qué hacemos?</h1>
                    <p class="title-desc text-justify text-white-50 mt-4">Hemos construido un comparador que facilita que la gente tome decisiones de compra inteligentes en cuanto al servicio de alarma más adecuado para sus necesidades. En un único lugar, gratuitamente y de forma personalizada, ofrecemos las soluciones más adecuadas para cubrir las necesidades del usuario en materia de alarmas. A los proveedores de servicios de alarmas les facilitamos el modo de mostrar de forma clara su tecnología en beneficio de sus consumidores, para que su oferta tenga verdadero sentido para cubrir las necesidades de su cliente y añada un valor real a sus compradores. Ofrecemos a las empresas el instrumento necesario para que la contratación de sus productos y servicios sea algo ágil, sencillo y rentable. Somos la primera empresa que compara la oferta del mercado de alarmas con criterios objetivos y de forma absolutamente independiente.</p>
                    <h1 class="title-headin text-center">¿Cómo valoramos?</h1>
                    <p class="title-desc text-justify text-white-50 mt-4">El motor de datos de Alarmalia se encuentra en el corazón de todos nuestros comparativos y potencia todos nuestros productos, recomendaciones y conocimientos. Puntuamos cada oferta del mercado en función de su contenido real y las valoraciones de los usuarios. Esa puntuación es el alma mater de nuestra clasificación del mercado de alarmas. Intuitivamente y de forma sencilla, se normaliza para cada categoría el resultado de 0 a 100, por lo que todo el mundo puede comparar fácilmente los productos ofertados. También se actualiza diariamente para cada categoría, por lo que tenemos la certeza de tener la información más precisa del mercado. Somos un equipo de especialistas en nuestros campos que juntos, estamos convencidos de la posibilidad de combinar la ciencia de los datos y la tecnología. Estamos totalmente volcados en un servicio al cliente exigente al máximo, para cambiar la forma de ver la seguridad en nuestra sociedad.</p>
                    <br>
                    <h1 class="title-headin text-center">¿Hacia dónde vamos?</h1>
                    <p class="title-desc text-justify text-white-50 mt-4">Trabajamos cada día para construir un futuro en el que cada consumidor, ciudadano y empleado reconozca todo el potencial de Alarmalia para hacer de la elección de alarma una decisión inteligente en cuanto a la seguridad de su hogar o negocio.</p>
                </div>                          
            </div>          
        </div>
        <br><br><br>
        

    </section>
    <!-- END COUNTER -->
		




  
    
    <!-- START COUNTER -->
    <section class="section counter">
        <div class="container">
            <div class="col-lg-12" class="row mt-5" id="counter">
                    <h4 class="text-center">ENCUENTRA TU ALARMA</h4>
                    <p class="title-desc text-center text-white-50 mt-4" >Ahorra dinero y tiempo con nuestro comparador de alarmas.<br> 
                        Descubre en 3 minutos la alarma que mejor se adapta a ti.
                    </p>
                    <center>
                        <div class="mt-5">
                            <a href="{{ route('companies.comparator')}}" class="btn btn-custom  btn-round">COMPARAR AHORA</a>
                        </div>
                    </center>
                </div>            
        </div>
    </section>
    <!-- END COUNTER -->
    <section class="section bg-light" id="pricing">
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
                    <h5 class="f-18 text-white">Contacto</h5>
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