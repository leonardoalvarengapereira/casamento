<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">

        <!-- SITE TITTLE -->
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Celine & Luan</title>

        <!-- PLUGINS CSS STYLE -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/select_option1.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet" media="screen" />
        <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet" media="screen" />
        <link href="{{ asset('css/prism.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/jquery.fancybox.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/select_option1.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/animate.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/swiper.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/fontello.css') }}" rel="stylesheet" />

        <!-- FONT AWESOME -->
        <link rel="stylesheet" href="{{ asset('fontawesome-free-6.2.0-web/css/fontawesome.css') }}">
        <link rel="stylesheet" href="{{ asset('fontawesome-free-6.2.0-web/css/brands.css') }}">
        <link rel="stylesheet" href="{{ asset('fontawesome-free-6.2.0-web/css/solid.css') }}">

        <!-- CUSTOM CSS -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/default.css') }}" id="option_color" />

        <!-- FAVICON -->
        <link href="{{ asset('imagens/favicon.png') }}" rel="shortcut icon">

        <script type="text/javascript" charset="UTF-8" src="{{ asset('js/jquery.min.js') }}"></script>
        <script type="text/javascript" charset="UTF-8" src="{{ asset('js/jquery-migrate-3.0.0.min.js') }}"></script>
        <script type="text/javascript" charset="UTF-8" src="{{ asset('js/popper.min.js') }}"></script>
        <script type="text/javascript" charset="UTF-8" src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" charset="UTF-8" src="{{ asset('js/common.js') }}"></script>
        <script type="text/javascript" charset="UTF-8" src="{{ asset('js/util.js') }}"></script>
    </head>
    <body id="body" class="up-scroll loaded" cz-shortcut-listen="true">
        <!-- PRELOADER -->
        <div id="preloader" class="smooth-loader-wrapper">
            <div class="smooth-loader">
                <div class="loader1">
                    <div class="loader-target">
                        <div class="sk-folding-cube">
                            <div class="sk-cube1 sk-cube"></div>
                            <div class="sk-cube2 sk-cube"></div>
                            <div class="sk-cube4 sk-cube"></div>
                            <div class="sk-cube3 sk-cube"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- HEADER -->
        <header id="pageTop" class="header" style="height: auto;">
            <!-- NAVBAR -->
            <nav class="navbar navbar-expand-md navbar-transparent" style="opacity: 1;">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <font style="font-family: bad script,cursive; font-weight: bold !important; color: #fff;">C &amp; L</font>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>

                    <div class="collapse navbar-collapse " id="navbarContent">
                        <ul class="navbar-nav ml-auto site_nav">
                            <li class="nav-item">
                                <a class="nav-link" href="/welcome">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/casamento">Casamento</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="/presentes">Lista de presentes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/recados">Mural de recados</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://wa.me/555391635351" target="_blank;">Confirmar presença</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <!-- HOME BANNER -->
	    <section class="banner-section position-relative">
		    <div class="owl-carousel carousel-style-01 owl-loaded" id="banner-carousel">
		        <div class="owl-stage-outer">
                    <div class="owl-stage">
                        <div class="owl-item cloned" style="width: 1536px;">
                            <div class="single-slide overlay-shadow">
				                <div class="scale-top banner-img" style="background-image: url(imagens/bg-img-03.jpg)"></div>
				                <div class="slider-caption">
					                <h1 class="text-white mt-3">Lista de presentes</h1>
				                </div>
			                </div>
                        </div>
                    </div>
                </div>
                <div class="owl-nav disabled">
                    <div class="owl-prev">prev</div>
                    <div class="owl-next">next</div>
                </div>
                <div class="owl-dots disabled"></div>
            </div>

            <!-- Scroll btn -->
		    <div class="scroll-btn-aria scrolling">
			    <a href="#presentes" class="btn-scroll-down">
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>
		    </div>
	    </section>

        <!-- MODAL PIX -->
        <div id="modal-pagamento" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Presenteie Celine & Luan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <center>
                            <img class="img-fluid" src="{{ asset('imagens/pagamento.png') }}" alt="image" width="300" height="300" />
                        </center>
                        <p class="mt-4">
                            Agradecemos imensamente pelo seu presente e desejamos tudo em dobro para você e sua família.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- EVENTS GRID -->
	    <section id="presentes" class="section-pt-100 section-pb-35">
	        <div class="container">
	            <div class="row">
                    <div class="col-lg-10 col-md-10">
                        <p>
                            <h3>
                                Esta é a nossa lista de presentes e um de nossos grandes sonhos como casal.
                                <br/>
                                Ficamos muito felizes em compartilhar com vocês esse momento tão especial cheio de amor.
                            </h3>
                        </p>
                    </div>
                </div>
	            <div class="row mt-5">
                    <div class="col-lg-4 col-md-4">
                            <div class="card-style-1 ">
                                <div class="image">
                                    <img class="img-fluid" src="{{ asset('imagens/cancun.jpg') }}" alt="image" />
                                </div>
                                <div class="card-body">
                                    <h2 class="mt-4 mb-3">Viagem para Cancún</h2>
                                    <p class="mt-4">
                                    Em vez de apenas presentear com objetos, que tal oferecer ao casal uma jornada inesquecível em direção ao paraíso? Cancún, com suas praias de areias brancas e águas cristalinas, é o cenário perfeito para celebrar o início dessa incrível jornada a dois.
                                    </p>
                                    <a href="#" class="btn btn-primary btn-rounded mt-4" data-toggle="modal" data-target="#modal-pagamento">
                                        Presentear
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="card-style-1 ">
                                <div class="image">
                                    <img class="img-fluid" src="{{ asset('imagens/cruzeiro.png') }}" alt="image" />
                                </div>
                                <div class="card-body">
                                    <a href="#">
                                        <h2 class="mt-4 mb-3">Viagem de Cruzeiro</h2>
                                    </a>
                                    <p class="mt-4">
                                    Que tal presentear o casal com uma experiência única e náutica que marcará o início de sua jornada conjugal? Um cruzeiro é mais do que uma simples viagem; é uma aventura repleta de romance e descobertas, onde o amor flui suavemente ao ritmo das ondas.
                                    </p>
                                    <a href="#" class="btn btn-primary btn-rounded mt-4" data-toggle="modal" data-target="#modal-pagamento">
                                        Presentear
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="card-style-1 ">
                                <div class="image">
                                    <img class="img-fluid" src="{{ asset('imagens/nordeste.png') }}" alt="image" />
                                </div>
                                <div class="card-body">
                                    <a href="#">
                                        <h2 class="mt-4 mb-3">Viagem para o Nordeste</h2>
                                    </a>
                                    <p class="mt-4">
                                        Em um gesto que transcende a rotina, considere presentear o casal com uma experiência única e inesquecível: uma viagem ao encantador Nordeste brasileiro. Entre dunas douradas, praias de águas mornas e uma cultura vibrante, essa região oferece um cenário perfeito para a lua de mel dos sonhos.
                                    </p>
                                    <a href="#" class="btn btn-primary btn-rounded mt-4" data-toggle="modal" data-target="#modal-pagamento">
                                        Presentear
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
	            </div>
            </div>
        </section>

        <!-- FOOTER SECTION -->
        <footer class="footer-section overlay-shadow2" style="background-image: url(imagens/foto1.jpg); height: 500px">
            <div class="container text-center">
                <div class="thanks">
                    Obrigado!
                </div>
                <div class="couples">
                    Celine &amp; Luan
                </div>

                <!-- COPY RIGHT -->
                <div class="copyright">
                    <div class="copyRight_text text-center">
                        <p>
                            © <?= date("Y") ?> Celine &amp; Luan
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>