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
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M77GWGH"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

  <!--Navbar Start-->
    <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark">
        <div class="container">
            <!-- LOGO -->
            <a class="navbar-brand logo text-uppercase" href="index.html">
                <img src="{{URL::asset('img/logo.png') }}" class="logo-light" alt="" height="80">
                <img src="{{URL::asset('img/logo.png') }}" class="logo-dark" alt="" height="80">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto navbar-center" id="mySidenav">
                    <li class="nav-item">
                        <a href="#" class="nav-link">COMPAÑÍAS</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">ALARMAS PARA CASA</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">ALARMAS PARA NEGOCIO</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">FAQS</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">BLOG</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

   <!-- START HOME -->
    <section class="bg-home-1" id="home">
        <div class="home-bg-overlay"></div>
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row vertical-content">
                        <div class="col-lg-6">
                            <div class="home-img mt-4">
                                <img src="{{URL::asset($banners->banner_url)}}"  alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="home-content">
                                <h3 class="home-title" align="center">{{$banners->title}}</h3>
                                <div class="mt-5">
                                    <center><a href="{{ url($banners->link_url) }}" target="_blank" class="btn btn-custom btn-round">COMPARAR ALARMAS </a></center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END HOME -->

    <!-- START CLIENT-LOGO -->
    <section class="client-logo pt-3 pb-3" >
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                </div>
                <div class="col-lg-2 " >
                    <div class="client-img">
                        <img src="{{URL::asset('img/alarmalia/click-copy.png') }}" alt="logo-img" class="mx-auto img-fluid d-block">
                    </div>
                    <p class="title-desc text-center text-white-50 mt-4" >Todas las ofertas<br> en un click</p>
                </div>
                <div class="col-lg-1">
                </div>
                <div class="col-lg-2">
                    <div class="client-img">
                        <img src="{{URL::asset('img/alarmalia/customer-copy.png') }}" alt="logo-img" class="mx-auto img-fluid d-block">
                    </div>
                    <p class="title-desc text-center text-white-50 mt-4">Recibe un estudio personalizado</p>
                </div>
                <div class="col-lg-1">
                </div>
                <div class="col-lg-2 ">
                    <div class="client-img">
                        <img src="{{URL::asset('img/alarmalia/book-copy.png') }}" alt="logo-img" class="mx-auto img-fluid d-block">
                    </div>
                    <p class="title-desc text-center text-white-50 mt-4">Guía gratis con selección de alarmas</p>
                </div>
                <div class="col-lg-2">
                </div>                
            </div>
        </div>
    </section>
    <!-- END CLIENT-LOGO -->


		



    <!-- START COUNTER -->
    <section class="section counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                	<br><br>
                    <h1 class="title-heading text-center">Guía gratuita de compras de alarmas</h1>
                    <p class="title-desc text-center text-white-50 mt-4">{{$homepages->description_home}}</p>
                        
                    <div class="mt-5" align="center">
                            <a href="" class="btn btn-custom btn-round">QUIERO MI GUIA</a>
                    </div>
                    


                    <br><br><br>
                    <h2 class="title-desca text-center mt-4">Empresas con las que trabajamos</h2>
                    

                    <div class="col-lg-6 swiper-container">
                    <div class="swiper-wrapper mt-4">
                        @foreach($companies as $company)
                            <div class="swiper-slide" align="center">
                                <img src="{{URL::asset($company->link_image)}}"  class="img-fluid" />
                            </div>
                        @endforeach
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
                </div>
            <div class="container">
            <h2 class="title-desca text-center mt-4">¿Qué alarma buscas?</h2>
            
            <div class="row">
                <div class="col-lg-6">
                    <div class="service-box p-2 text-center mt-5"  >
                        
                        <a href=""><h5 align="center"><span><img src="{{URL::asset('img/icon/home.png') }}" class="img-fluid" alt=""></span><u> Alarmas para casa</u></h5></a>

                        
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="servicess-box p-2 text-center mt-5">
                        
                        <a href=""><h5 align="center"><span><img src="{{URL::asset('img/icon/shop.png') }}" class="img-fluid" alt=""></span><u> Alarmas para negocio</u></h5></a>

                        
                    </div>              
                </div>                
            </div>
        </div>

			
                
            


            </div>          

        </div>
        <br><br><br>
        <div class="col-lg-12">
        	<h1 class="title-heading text-center">Como seleccionar una alarma</h1>
        	<p class="title-desc text-center text-white-50 mt-4">{{$homepages->select_alarm}}</p>
					

					<div class="col-lg-8">
    					<div class="guia-box p2 text-center mt-5">
        					<p class="title-desc" ><span style="font-size:18pt;">1</span>{{$homepages->desc_one}}</p>					
    					</div>
					</div>
					<div class="col-lg-12">
    					<div class="guiaa-box p2 text-center mt-5">
        					<p class="title-desc" ><span style="font-size:18pt;">2</span>{{$homepages->desc_two}}</p>
    					</div>
					</div>
					<div class="col-lg-9">
    					<div class="guia-box p2 text-center mt-5">
        					<p class="title-desc" ><span style="font-size:18pt;">3</span>{{$homepages->desc_three}}</p>
    					</div>
					</div>
					<div class="mt-5" align="center">
                            <a href="" class="btn btn-custom btn-round">COMPARAR AHORA</a>
                    </div>

                    <br><br><br>

                    <center><img src="{{URL::asset('img/alarmalia/candado.png') }}" width="40%" height="40%" alt="logo-img"></center>

                    <br><br><br>
					<h4 class="text-center">¿Por qué utilizar ALARMALIA?</h4>

        	<p class="title-desc text-center text-white-50 mt-4">{{$homepages->description_middle}}</p>

                </div>
    </section>
    <!-- END COUNTER -->
		




    <!-- START SERVICES -->
    <section class="client-logo" id="services">
        <div class="container">
            <div class="row mt-5 pt-3 vertical-content text-center">
                <div class="col-lg-4">
                    <div class="servicio-box bg-white p-5 btn-rounde mt-4">
                        <div class="services-icon text-center">
                            <img src="{{URL::asset('img/alarmalia/conocimientomercado.png') }}" class="img-fluid" alt="">
                        </div><br>
                        <h1 class="title-heading text-center">CONOCIMIENTO DEL MERCADO</h1>
                        <p class="title-desc text-center text-white-50 mt-4">{{$homepages->card_one}}</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="servicio-box bg-white p-5 btn-rounde mt-4">
                        <div class="services-icon text-center">
                            <img src="{{URL::asset('img/alarmalia/ahorro.png') }}" class="img-fluid" alt="">
                        </div><br>
                        <h1 class="title-heading text-center">AHORRO</h1>
                        <p class="title-desc text-center text-white-50 mt-4">{{$homepages->card_two}}</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="servicio-box bg-white p-5 btn-rounde mt-4">
                        <div class="services-icon text-center">
                            <img src="{{URL::asset('img/alarmalia/serviciogratuito.png') }}" class="img-fluid" alt="">
                        </div><br>
                        <h1 class="title-heading text-center">SERVICIO GRATUITO</h1>
                        <p class="title-desc text-center text-white-50 mt-4">{{$homepages->card_three}}</p>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-4">
                    <div class="servicio-box bg-white p-5 btn-rounde mt-4">
                        <div class="services-icon text-center">
                            <img src="{{URL::asset('img/alarmalia/rapidez.png') }}" class="img-fluid" alt="">
                        </div><br>
                        <h1 class="title-heading text-center">RAPIDEZ</h1>
                        <p class="title-desc text-center text-white-50 mt-4">{{$homepages->card_four}}</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="servicio-box bg-white p-5 btn-rounde mt-4">
                        <div class="services-icon text-center">
                            <img src="{{URL::asset('img/alarmalia/resultadospersonalizados.png') }}" class="img-fluid" alt="">
                        </div><br>
                        <h1 class="title-heading text-center">RESULTADOS PERSONALIZADOS</h1>
                        <p class="title-desc text-center text-white-50 mt-4">{{$homepages->card_five}}</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="servicio-box bg-white p-5 btn-rounde mt-4">
                        <div class="services-icon text-center">
                            <img src="{{URL::asset('img/alarmalia/somosindependientes.png') }}" class="img-fluid" alt="">
                        </div><br>
                        <h1 class="title-heading text-center">SOMOS INDEPENDIENTES</h1>
                        <p class="title-desc text-center text-white-50 mt-4">{{$homepages->card_six}}</p>
                    </div>
                </div>
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
                            <a href="" class="btn btn-custom  btn-round">COMPARAR AHORA</a>
                        </div>
                    </center>
                </div>
            
        </div>
    </section>
    <!-- END COUNTER -->

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