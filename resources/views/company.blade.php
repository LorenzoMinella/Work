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
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M77GWGH"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

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

   <!-- START HOME -->
    <section>
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block " width="100%" height="750px" src="{{URL::asset($banners->banner_url)}}"
              alt="First slide">
            <div class="carousel-caption">
                                      <h3 class="h3-responsive home-title">{{$banners->title}}</h3>
                                          <a href="{{ url($banners->link_url) }}" target="_blank" class="btn btn-custom btn-round">COMPARAR ALARMAS </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END HOME -->



    <!-- START COUNTER -->
    <section class="section counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                	<br><br>
                    <h1 class="title-heading text-center"><center><img class="d-block " width="50%" height="50%" src="{{URL::asset($companies->link_image)}}"></center></h1>
                    <p class="title-desc text-center text-white-50 mt-4">{{$companies->description}}</p>
                        
                    <br><br><br>

                </div>

        <div class="container">            
            <div class="row">
                <div class="col-lg-6">
                    <div class="p-2 text-center mt-5"  >
                    <br><br>
                        <center><img src="{{URL::asset('img/icon/stars.png') }}"/><br/><br/><h1 class="title-heading text-center">Opiniones de usuarios</h1></center>
                    </div>
                </div>                
                <div class="col-lg-6">
                    <div class="p-2 text-center mt-5"  >
                        <center><img src="{{URL::asset('img/alarmalia/somosindependientes.png') }}"/><br/><br/><h1 class="title-heading text-center">Nivel de Seguridad</h1></center>
                        <p class="title-desc text-center text-white-50 mt-4">{{$companies->nivel_seguridad}}</p>

                    </div>
                </div>                
            </div>
                    <br><br><br>
        </div>



















            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
              <div class="list-group">
                <a href="#" class="list-group-item text-center">
                  <br/><center>
                            <img src="{{URL::asset('img/icon/group.png') }}"/><br/><br/><h1 class="title-heading text-center">Componentes Básicos</h1>
                  </center>
                </a>
                <a href="#" class="list-group-item text-center">
                  <br/><center>
                            <img src="{{URL::asset('img/icon/group-3.png') }}"/><br/><br/><h1 class="title-heading text-center">Accesorios</h1>
                  </center>
                </a>
              </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">
                <!-- flight section -->
                <div class="bhoechie-tab-content active" style="margin-top: 0;">
                    <div class="container">            
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="p-2 text-center mt-5"  >
                                    <center><img src="{{URL::asset('img/alarmalia/panel-control.jpg') }}"/><br/><br/><h1 class="title-heading text-center">Panel de Control</h1></center>
                                </div>
                            </div>                
                            <div class="col-lg-6">
                                <div class="p-2 text-center mt-5"  >
                                  <ul id="services-list" style="list-style-type: none;">
                                      @foreach( (\App\Advantage::where('company_id', '=',$companies->id)->where('advatage_disadvantage', '=', 0)->get()) as $advantage)                        
                                      <li>
                                        <a class="image">
                                          <img src="{{URL::asset('img/icon/check.png') }}" width="20px" />
                                        </a>{{$advantage->content}}
                                      </li>
                                      <br>
                                      @endforeach
                                  </ul>
                                </div>
                            </div>                
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="p-2 text-center mt-5"  >
                                    <center><img src="{{URL::asset('img/alarmalia/lector-llaves.jpg') }}"/><br/><br/><h1 class="title-heading text-center">Lector de Llaves</h1></center>
                                </div>
                            </div>                
                            <div class="col-lg-6">
                                <div class="p-2 text-center mt-5"  >
                                </div>
                            </div>                
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="p-2 text-center mt-5"  >
                                    <center><img src="{{URL::asset('img/alarmalia/sensores-magneticos.jpg') }}"/><br/><br/><h1 class="title-heading text-center">Sensores Magnéticos</h1></center>
                                </div>
                            </div>                
                            <div class="col-lg-6">
                                <div class="p-2 text-center mt-5"  >
                                </div>
                            </div>                
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="p-2 text-center mt-5"  >
                                    <center><img src="{{URL::asset('img/alarmalia/elementos-dinosaurios.jpg') }}"/><br/><br/><h1 class="title-heading text-center">Elementos Dinosaurios</h1></center>
                                </div>
                            </div>                
                            <div class="col-lg-6">
                                <div class="p-2 text-center mt-5"  >
                                </div>
                            </div>                
                        </div>
                    </div>
                </div>

            </div>

            </div>
            </div>          

    </section>
    <!-- END COUNTER -->



    <section class="section counter">
        <div class="container">
            <div class="row mt-5 pt-3 vertical-content text-center">
                <div class="col-lg-4">
                    <div class="servicio-box bg-white p-5 btn-rounde mt-4">
                        <div class="services-icon text-center">
                            <img src="{{URL::asset('img/alarmalia/tecnologia.png') }}" class="img-fluid" alt="">
                        </div><br>
                        <h1 class="title-heading text-center">Tecnología</h1>
                        <p class="title-desc text-center text-white-50 mt-4">{{$companies->tecnologia}}</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="servicio-box bg-white p-5 btn-rounde mt-4">
                        <div class="services-icon text-center">
                            <img src="{{URL::asset('img/alarmalia/diferencia.png') }}" class="img-fluid" alt="">
                        </div><br>
                        <h1 class="title-heading text-center">Diferencia</h1>
                        <br><br>
                        <p class="title-desc text-center text-white-50 mt-4">{{$companies->diferencia}}</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="servicio-box bg-white p-5 btn-rounde mt-4">
                        <div class="services-icon text-center">
                            <img src="{{URL::asset('img/alarmalia/precio.png') }}" class="img-fluid" alt="">
                        </div><br>
                        <h1 class="title-heading text-center">Precio</h1>
                        <p class="title-desc text-center text-white-50 mt-4">{{$companies->precio}}</p>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-4">
                    <div class="servicio-box bg-white p-5 btn-rounde mt-4">
                        <div class="services-icon text-center">
                            <img src="{{URL::asset('img/alarmalia/comocontratar.png') }}" class="img-fluid" alt="">
                        </div><br>
                        <h1 class="title-heading text-center">Como Contratar</h1>
                        <p class="title-desc text-center text-white-50 mt-4">{{$companies->contratar}}</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="servicio-box bg-white p-5 btn-rounde mt-4">
                        <div class="services-icon text-center">
                            <img src="{{URL::asset('img/alarmalia/instalacion.png') }}" class="img-fluid" alt="">
                        </div><br>
                        <h1 class="title-heading text-center">Instalación</h1>
                        <p class="title-desc text-center text-white-50 mt-4">{{$companies->instalacion}}</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="servicio-box bg-white p-5 btn-rounde mt-4">
                        <div class="services-icon text-center">
                            <img src="{{URL::asset('img/alarmalia/location.png') }}" class="img-fluid" alt="">
                        </div><br>
                        <h1 class="title-heading text-center">Oficinas</h1>
                        <p class="title-desc text-center text-white-50 mt-4">{{$companies->direccion}}</p>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-4">
                    <div class="servicio-box bg-white p-5 btn-rounde mt-4">
                        <div class="services-icon text-center">
                            <img src="{{URL::asset('img/alarmalia/permanencia.png') }}" class="img-fluid" alt="">
                        </div><br>
                        <h1 class="title-heading text-center">Permanencia</h1>
                        <p class="title-desc text-center text-white-50 mt-4">{{$companies->permanencia}}</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="servicio-box bg-white p-5 btn-rounde mt-4">
                        <div class="services-icon text-center">
                            <img src="{{URL::asset('img/alarmalia/baja.png') }}" class="img-fluid" alt="">
                        </div><br>
                        <h1 class="title-heading text-center">Baja</h1>
                        <p class="title-desc text-center text-white-50 mt-4">{{$companies->baja}}</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="servicio-box bg-white p-5 btn-rounde mt-4">
                        <div class="services-icon text-center">
                            <img src="{{URL::asset('img/alarmalia/facturacion.png') }}" class="img-fluid" alt="">
                        </div><br>
                        <h1 class="title-heading text-center">Facturación</h1>
                        <p class="title-desc text-center text-white-50 mt-4">{{$companies->facturacion}}</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">            
                <div class="col-lg-12">
                    <h1 class="title-heading text-center"><center><img class="d-block " width="10%" height="10%" src="{{URL::asset('img/alarmalia/vents.png') }}"></center></h1>
                        <br>
                        <center><h1 class="title-heading text-center">Ventajas y Desventajas</h1></center>
                </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="p-2 text-center mt-5">
                        <center><h1 class="title-heading text-center">PROS</h1></center>
                        <br>
                        <ul id="services-list" style="list-style-type: none;">
                            @foreach( (\App\Advantage::where('company_id', '=',$companies->id)->where('advatage_disadvantage', '=', 0)->get()) as $advantage)                        
                            <li>
                              <a class="image">
                                <img src="{{URL::asset('img/icon/check.png') }}" width="30px" />
                              </a>{{$advantage->content}}
                            </li>
                            <br>
                            @endforeach
                        </ul>
                    </div>
                </div>                
                <div class="col-lg-6">
                    <div class="p-2 text-center mt-5">
                        <center><h1 class="title-heading text-center">CONTRAS</h1></center>
                        <br>
                        <ul id="services-list" style="list-style-type: none;">
                            @foreach( (\App\Advantage::where('company_id', '=',$companies->id)->where('advatage_disadvantage', '=', 1)->get()) as $advantage)                        
                            <li>
                              <a class="image">
                                <img src="{{URL::asset('img/icon/close.png') }}" width="30px" />
                              </a>{{$advantage->content}}
                            </li>
                            <br>
                            @endforeach
                        </ul>
                    </div>
                </div>                
            </div>
                    <br><br><br>
        </div>



    </section>







		
    <!-- START PRICING -->
    <section class="section bg-light" id="pricing">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="title-heading text-center">¿Eres un proveedor de alarmas?</h1>
                    
                    <center><div class="mt-5">
                            <a href="" class="btn btn-secondary btn-sm btn-round">ANUNCIARME</a>
                        </div></center>
                </div>
            </div>
        </div>
    </section>
    <!-- END PRICING -->

    
    <!-- START COUNTER -->
    <section class="section counter">
        <div class="container">
            <div class="col-lg-12" class="row mt-5" id="counter">
                    <h4 class="text-center">ENCUENTRA TU ALARMA</h4>
        	<p class="title-desc text-center text-white-50 mt-4" >Ahorra dinero y tiempo con nuestro comparador de alarmas.<br> 
Descubre en 3 minutos la alarma que mejor se adapta a ti.</p>
                    <center>
                        <div class="mt-5">
                            <a href="" class="btn btn-custom  btn-round">COMPARAR AHORA</a>
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
 <script type="text/javascript">
$(document).ready(function() {
    $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    });
});

</script>
</body>

</html>