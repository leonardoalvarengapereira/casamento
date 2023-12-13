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
                    <a class="navbar-brand" href="/">
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
                            <li class="nav-item active">
                                <a class="nav-link" href="/casamento">Casamento</a>
                            </li>
                            <li class="nav-item">
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
				                <div class="scale-top banner-img" style="background-image: url(imagens/foto_17.jpg)"></div>
				                <div class="slider-caption">
					                <h1 class="text-white mt-3">Casamento</h1>
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
			    <a href="#section-padding" class="btn-scroll-down">
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>
		    </div>
	    </section>

        <!-- EVENT DETAILS -->
	    <section id="section-padding" class="section-padding">
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-9">
	                    <div class="image">
	                        <img src="{{ asset('imagens/foto_3.jpg') }}" alt="Image" class="img-fluid" />
	                    </div>
	                    <p class="mt-5">
                            Numa tarde repleta de promessas suaves e corações entrelaçados, dois destinos convergem para um só caminho: o sagrado matrimônio. O casamento, esse elo mágico que transcende o tempo, é a celebração de amor e comprometimento, onde duas almas se unem para dançar a sinfonia da vida em perfeita harmonia.
                        </p>
	                    <p class="mt-4">
                            No altar da existência, eles trocam votos como juras eternas, prometendo suportar as tempestades e saborear os raios de sol que iluminarão o trajeto compartilhado. O anel que desliza delicadamente pelos dedos não é apenas um símbolo, mas uma aliança que transcende o material, representando a infinitude do amor que, como o próprio ouro, é puro, raro e precioso.
                        </p>
	                    <p class="mt-4">
                            Nesse banquete da alma, as lágrimas de felicidade regam a semente de uma jornada repleta de descobertas e alegrias. Cada olhar trocado é uma poesia silenciosa, cada toque, uma melodia que ecoa nos corações enamorados. O casamento é a promessa de estar presente não apenas nos dias de sol, mas também nas noites escuras, segurando a luz da esperança.
                        </p>
	                    <div class="row mt-4">
	                        <div class="col-md-4">
	                            <div class="image mb-4 mb-md-0">
	                                <img src="{{ asset('imagens/foto_6.jpg') }}" alt="Image" class="img-fluid" />
	                            </div>
	                        </div>
	                        <div class="col-md-4">
	                            <div class="image mb-4 mb-md-0">
	                                <img src="{{ asset('imagens/foto_9.jpg') }}" alt="Image" class="img-fluid" />
	                            </div>
	                        </div>
	                        <div class="col-md-4">
	                            <div class="image mb-4 mb-md-0">
	                                <img src="{{ asset('imagens/foto_13.jpg') }}" alt="Image" class="img-fluid" />
	                            </div>
	                        </div>
	                    </div>
	                    <p class="mt-4">
                            Como dois pássaros que voam juntos, esses seres abraçam a liberdade de serem quem são, enquanto entrelaçam suas asas na dança da vida. O casamento é uma jornada compartilhada, onde cada passo é um elo a mais na corrente do destino, e cada desafio é uma oportunidade para crescer e fortalecer o laço que os une.
                        </p>
	                    <p class="mt-4">
                            Que a chama que arde no altar da sua união nunca se apague, mas sim cresça a cada amanhecer, iluminando os dias com o calor do amor. Que o casamento seja não apenas uma aliança de mãos, mas uma aliança de almas, tecendo uma história que transcende o efêmero, criando raízes profundas que resistem ao vento do tempo.
                        </p>
                        <p class="mt-4">
                            Assim, no grande palco da vida, onde o amor é a estrela principal, que o casamento de Celine e Luan seja uma obra-prima, pintada com as cores vibrantes da compreensão, paciência, e, acima de tudo, um amor que transcende as palavras, ecoando eternamente no coração de dois que se tornaram um.
                        </p>
	                </div>
	                <aside class="col-lg-3">
	                    <h2 class="mt-5 mt-lg-0">Informações</h2>
	                    <ul class="list-style-2 mt-4">
	                        <li>
                                <i class="fa fa-calendar-days" aria-hidden="true"></i>
                                27 de janeiro de 2024
                            </li>
	                        <li>
                                <i class="fa fa-clock" aria-hidden="true"></i>
                                17:30h - 23:59h
                            </li>
	                        <li>
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                (53) 99163-5351
                            </li>
	                        <li>
                                <i class="fa fa-location-dot" aria-hidden="true"></i>
                                Av. Engenheira Lúcia Maria Balbela Chiesa, 7331
                            </li>
	                    </ul>
	                    <div class="map-canvas border mt-5 mt-lg-4">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2812.18915985995!2d-52.18382521565859!3d-32.16477291416447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95118579c209787f%3A0x2a1ca18b2c774bfd!2sAv.%20Engenheira%20L%C3%BAcia%20Maria%20Balbela%20Chiesa%2C%207331%20-%20Rio%20Grande%2C%20RS%2C%2096217-230!5e0!3m2!1spt-BR!2sbr!4v1701017317954!5m2!1spt-BR!2sbr" width="240" height="255" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	      	            </div>
	                </aside>
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