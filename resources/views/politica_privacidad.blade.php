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
                                            <a href="{{ route('companies.comparator')}}" target="_blank" class="btn btn-custom btn-round">COMPARAR ALARMAS </a>
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
                    <h1 class="title-heading text-center">Política de privacidad</h1>
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
                    <h1 class="title-headin text-center">POLÍTICA DE PRIVACIDAD Y “COOKIES”</h1>
                    <p class="title-desc text-justify text-white-50 mt-4">Aviso: Por la mera utilización de la página web, navegando a través de ésta, se le atribuirá la condición de “Usuario”, debiendo leer atentamente la “Política de Privacidad” que a continuación se expone. Todo ello sin perjuicio de la necesidad de facilitar su consentimiento cuando le sea recabado para la aportación de datos personales y/o la instalación de cookies:
                    <br>
                    <h1 class="title-headin text-center">1. ASPECTOS GENERALES</h1>
                    <p class="title-desc text-justify text-white-50 mt-4">Mediante la presente Política de Privacidad, MARKETPLACE SEGURIDAD, S.L., con C.I.F. B-67311290, domiciliada en Barcelona, calle Muntaner número 452, 1º 2ª, 08006 Barcelona e inscrita en el Registro Mercantil de Barcelona, al Tomo 46679, Folio 144, Hoja B-527552, inscripción 1ª (en adelante, “Alarmalia.com”), desea informar a los usuarios de su sitio web www.alarmalia.com (en adelante, el “Portal”) acerca de su política de protección de datos de carácter personal. En Alarmalia.com estamos totalmente comprometidos con la seguridad de sus datos personales y por eso todos nuestros servicios y productos están diseñados teniendo en cuenta siempre la privacidad del Usuario y el correcto tratamiento de sus datos. Nuestra política de privacidad le ayudará a comprender cómo recopilamos, usamos y protegemos sus datos personales. A estos efectos, le informamos de que el tratamiento de datos personales se realizará conforme lo dispuesto en el Reglamento UE 2016/679 del Parlamento Europeo y del Consejo de 27 de Abril de 2016 relativo a la Protección de las personas físicas, y en concreto como sigue:</p>
                    <h1 class="title-headin text-center">2. OBJETO Y FINALIDAD DE LA RECOGIDA DE DATOS PERSONALES</h1>
                    <p class="title-desc text-justify text-white-50 mt-4">Alarmalia.com tratará determinados datos que se obtengan a través del Portal con la finalidad de: 
                        a) Gestión de los usuarios. 
                        b) Gestión de consultas, peticiones y solicitudes recibidas a través del Portal por parte de los usuarios del mismo. 
                        c) Realización de envíos publicitarios y de información comercial, por diferentes medios, acerca de cada empresa, sus actividades, concursos, productos, servicios, ofertas, promociones especiales, así como documentación de diversa naturaleza y por diferentes medios
                        d) Gestión y cumplimiento de la relación establecida. 
                    Para cada finalidad sólo se tratarán los datos estrictamente necesarios.</p>
                    <h1 class="title-headin text-center">3. SOPORTE</h1>
                    <p class="title-desc text-justify text-white-50 mt-4">El Usuario garantiza que los datos aportados son verdaderos, exactos, completos y actualizados, siendo responsable de cualquier daño o perjuicio, directo o indirecto, que pudiera ocasionarse como consecuencia del incumplimiento de tal obligación. En el caso de que los datos aportados pertenecieran a un tercero, el Usuario garantiza que ha informado a dicho tercero de los aspectos contenidos en este documento y obtenido su autorización para facilitar sus datos a Alarmalia.com, para los fines señalados. El Usuario deberá notificar cualquier modificación que se produzca en los datos facilitados. Alarmalia.com se reserva, sin perjuicio de otras acciones que pudieran corresponderle, el derecho a no registrar o a dar de baja a aquel Usuario que facilite datos falsos o incompletos. Alarmalia.com no asume responsabilidad alguna por los daños o perjuicios que pudieran derivarse de la falsedad o inexactitud de los datos suministrados, de las que responderá únicamente el Usuario, tanto frente a Alarmalia.com, como frente a la empresa instaladora de alarmas, siendo con relación a ésta última exclusivamente responsable el Usuario de los efectos que tal inexactitud, falsedad o desactualización de datos.</p>
                    <br>
                    <h1 class="title-headin text-center">5. VOLUNTARIEDAD Y OBLIGATORIEDAD DE LA APORTACIÓN DE DATOS</h1>
                    <p class="title-desc text-justify text-white-50 mt-4">Cuando los datos personales sean recabados a través de un formulario, será necesario que el Usuario aporte, al menos, aquellos que se indiquen como obligatorios, ya que, si no se suministraran estos datos considerados necesarios, no se podrá aceptar y gestionar el servicio o consulta formulada.</p>
                    <br>
                    <h1 class="title-headin text-center">6. SEGURIDAD Y CONFIDENCIALIDAD</h1>
                    <p class="title-desc text-justify text-white-50 mt-4">En respuesta a la preocupación de Alarmalia.com por garantizar la seguridad y confidencialidad de sus datos, se han adoptado los niveles de seguridad requeridos de protección de los datos personales y se han instalado los medios técnicos a su alcance para evitar la pérdida, mal uso, alteración, acceso no autorizado y robo de los datos personales facilitados por canales web, telefónicos u otros. Alarmalia.com se compromete en la utilización de los datos incluidos en sus ficheros, a respetar su confidencialidad y a utilizarlos de acuerdo con la finalidad de cada fichero, así como a dar cumplimiento a su obligación de guardarlos y adoptar todas las medidas para evitar la alteración, pérdida, tratamiento o acceso no autorizado, de acuerdo con lo establecido en la legislación vigente.</p>
                    <br>
                    <h1 class="title-headin text-center">7. CONSERVACIÓN DE DATOS</h1>
                    <p class="title-desc text-justify text-white-50 mt-4">Conservaremos sus datos personales durante el tiempo que los necesitemos para proporcionar los productos o servicios acordados y/o solicitados. Además, continuaremos conservando sus datos después de que hayamos finalizado un servicio, de acuerdo con nuestros requisitos legales y reglamentarios y durante el tiempo que legalmente se puedan presentar reclamaciones en nuestra contra. Conservaremos, además, sus datos, durante un periodo de 5 años desde la finalización de los servicios que le proporcionamos, para nuestro análisis y elaboración de perfiles.</p>
                    <br>
                    <h1 class="title-headin text-center">8. EJERCICIO DE DERECHOS</h1>
                    <p class="title-desc text-justify text-white-50 mt-4">Para ejercitar sus derechos de acceso, rectificación, supresión, oposición, limitación de tratamiento y portabilidad sobre los datos incorporados al fichero titularidad de Alarmalia.com, el Usuario puede dirigirse a nosotros por correo electrónico escribiendo a: info@alarmalia.com. En el supuesto de que el Usuario no desee recibir comunicaciones comerciales electrónicas en el futuro, por parte de Alarmalia.com, podrá manifestar tal deseo enviando un correo electrónico a la dirección indicada en el apartado anterior. Finalmente, si el Usuario tuviese alguna queja sobre el tratamiento de sus datos personales, también tiene derecho a presentar una reclamación ante la autoridad supervisora correspondiente. En España es la Agencia Española de Protección de Datos (AEPD) y puede comunicarse con ellos en su sede (Agencia Española de Protección de Datos / Calle Jorge Juan 6 / 28001 – Madrid) o en su web: https://sedeagpd.gob.es/sede-electronica-web.</p>
                    <br>
                    <h1 class="title-headin text-center">9. POLÍTICA DE “COOKIES”</h1>
                    <p class="title-desc text-justify text-white-50 mt-4">Con la finalidad de agilizar los servicios ofrecidos e identificar con la máxima celeridad a cada Usuario, Alarmalia.com utilizará “cookies”. Las “cookies” son bloques de datos que determinados websites envían al disco duro del ordenador cuando éste se conecta con la finalidad de identificarlo, quedando almacenada dicha información en el disco duro del ordenador del usuario. Las “cookies” se asocian únicamente con un Usuario anónimo, no permitiendo acceder a datos de carácter personal ni, en general, a datos del disco duro del Usuario. Alarmalia.com utiliza las “cookies” con diversos fines entre los que se encuentran el de asegurar una mayor rapidez y una personalización en el servicio que se da al Usuario, así como el de analizar los datos que de forma agregada arrojan los registros de “cookies” al respecto de índices de tráfico y audiencia y hábitos de los usuarios del Portal, para con dicha información contribuir a la evaluación y revisión de los servicios que se ofrecen al Usuario en el Portal. El Usuario tiene la posibilidad de configurar su navegador para que se instale en su disco duro una “cookie” o bien para rechazar todas o algunas de las “cookies”. En este último caso, la rapidez, calidad y efectividad en el funcionamiento de los servicios de Alarmalia.com puede disminuir. Los Usuarios pueden fácilmente rechazar y eliminar las cookies instaladas en su ordenador. Los procedimientos para el bloqueo y eliminación de las cookies pueden diferir de un navegador de Internet a otro, aunque por norma general la configuración de las cookies se realiza desde el menú “Opciones o Preferencias” de su navegador. Es aconsejable que consulte el menú “Ayuda” en su navegador, para poder así quedar informado de las diferentes opciones posibles relativas a cómo gestionar las cookies. Aun así, a continuación le proporcionamos los siguientes pasos sobre cómo configurar las cookies en los principales navegadores:</p>
                    <ul class="title-desc text-justify text-white-50 mt-4">
                        <li>
                            Safari: Preferencias => Seguridad.
                        </li>
                        <li>
                            Internet Explorer: Herramientas => Opciones de internet => Privacidad => Configuración.
                        </li>
                        <li>
                            Google Chrome: Configuración => Mostrar opciones avanzadas => Privacidad => Configuración de contenido.
                        </li>
                        <li>
                            Firefox: Herramientas => Opciones => Privacidad => Historia => Configuración Personalizada.
                        </li>

                    </ul>
                    <p class="title-desc text-justify text-white-50 mt-4">Nuestra recomendación para nuestros usuarios es la aceptación de la “Política de Cookies” de Alarmalia.com, para que pueda acceder a todos los contenidos e informaciones del Portal. Deshabilitar o eliminar las cookies puede afectar e impactar en la funcionalidad del Portal e incluso, la imposibilidad de acceder a cierto contenido o información, haciendo su experiencia menos satisfactoria.</p>
                    <br>
                    <h1 class="title-headin text-center">10. ACEPTACIÓN POLITICA DE PRIVACIDAD.</h1>
                    <p class="title-desc text-justify text-white-50 mt-4">El envío de datos personales, mediante los formularios del Portal, supone el consentimiento al tratamiento de los datos personales por Alarmalia.com en los términos descritos en la presente Política de Privacidad, siempre que se haya aceptado con carácter previo y de manera expresa.</p>
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

</body>

</html>