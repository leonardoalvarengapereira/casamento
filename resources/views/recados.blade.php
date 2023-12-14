<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">

        <!-- SITE TITTLE -->
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
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
        <link href="{{ asset('css/style_final.css') }}" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/default.css') }}" id="option_color" />

        <!-- FAVICON -->
        <link href="{{ asset('imagens/favicon.png') }}" rel="shortcut icon">

        <script type="text/javascript" charset="UTF-8" src="{{ asset('js/recados.js') }}"></script>
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
                    <a class="navbar-brand d-none d-sm-block" href="/">
                        <font style="font-family: bad script,cursive; font-weight: bold !important; color: #fff;">C &amp; L</font>
                    </a>
                    <a class="navbar-brand d-block d-sm-none" href="/">
                        <font style="font-family: bad script,cursive; font-weight: bold !important; color: #fff;">Celine &amp; Luan</font>
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
                            <li class="nav-item">
                                <a class="nav-link" href="/presentes">Lista de presentes</a>
                            </li>
                            <li class="nav-item active">
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
                        <div class="owl-item cloned" style="width: 100%;">
                            <div class="single-slide overlay-shadow">
				                <div class="scale-top banner-img" style="background-image: url(imagens/foto_21.jpg)"></div>
				                <div class="slider-caption">
					                <h1 class="text-white mt-3">Mural de Recados</h1>
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
			    <a href="#recados" class="btn-scroll-down">
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>
		    </div>
	    </section>

        <!-- MODAL PIX -->
        <div id="modal-novo-recado" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Deixe seu recado para Celine & Luan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="inputNome">Nome:</label>
                                <input type="text" class="form-control" id="inputNome" id="name" placeholder="Informe o seu nome ..." maxlength="100" />
                            </div>
                            <div class="form-group">
                                <label for="inputMensagem">Mensagem:</label>
                                <textarea id="inputMensagem" name="inputMensagem" class="form-control" rows="5" placeholder="Escreva aqui sua mensagem aos noivos ..."></textarea>
                            </div>
                            <div class="form-group">
                                <div id="alert-recado" class="alert alert-danger" role="alert" style="display: none;">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" onclick="enviarRecado(); return false;">Enviar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- LOVE STORY SECTION -->
        <section id="recados" class="section-padding bg-white-smoke">
            <div class="container">
                <div class="row justify-content-center text-center mb-4">
                    <div class="col-lg-6 col-12">
                        <a href="#" class="btn btn-primary btn-rounded btn-lg mt-4" data-toggle="modal" data-target="#modal-novo-recado">
                            Adicione seu recado
                        </a>
                    </div>
                </div>
                <div class="row justify-content-center text-center mb-4">
                    <div class="col-lg-6 col-12">
                        <i class="demo-icon">
                            <img src="{{ asset('imagens/flor.jpeg') }}" />
                        </i>
                    </div>
                </div>
                <div class="row col-divider">
                    @foreach ($recados as $recado)
                    <div class="col-12 col-md-12 col-xl-6">
                        <div class="media media-style-02 left-side mt-5 ">
                            <div class="media-body" style="border-left: none !important;">
                                <h2 class="mt-0 pb-3">
                                    {{ $recado->nome }}
                                </h2>
                                <p class="pb-3">
                                    {{ $recado->mensagem }}
                                </p>
                                <h5 class="mt-0 pb-3">
                                    {{ $recado->data }}
                                </h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- FOOTER SECTION -->
        <footer class="footer-section overlay-shadow2" style="background-image: url(imagens/foto_14.jpg); height: 500px">
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