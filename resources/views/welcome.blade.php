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
                            <li class="nav-item active">
                                <a class="nav-link" href="/welcome">Home</a>
                            </li>
                            <li class="nav-item">
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
				                <div class="scale-top banner-img" style="background-image: url(imagens/foto.jpeg)"></div>
				                <div class="slider-caption">
					                <h5 class="text-white">
                                        Faltam
                                        <?php
                                            $origin = new DateTime(date("Y-m-d"));
                                            $target = new DateTime("2024-01-27");
                                            $interval = $origin->diff($target);
                                            echo $interval->format("%a");
                                        ?>
                                        dias
                                    </h5>
					                <h1 class="text-white mt-3">Celine &amp; Luan</h1>
					                <span class="date">27/01/2024</span>
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
			    <a href="#about" class="btn-scroll-down">
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>
		    </div>
	    </section>

        <!-- HOME ABOUT SECTION -->
        <section class="bg-white-smoke position-relative pt-100 pb-90" id="about">
            <div class="container">
                <div class="row justify-content-center text-center mb-70">
                    <div class="col-lg-6 col-12">
                        <h1 class="section-title">Sobre o casal</h1>
                        <i class="demo-icon">
                            <img src="{{ asset('imagens/flor.jpeg') }}" />
                        </i>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="media media-style-01">
                            <div class="media-body mr-lg-4">
                                <h2 class="mt-0 mb-1 text-lg-right">Luan Alvarena Pereira</h2>
                                <span class="d-block text-lg-right">Noivo</span>
                                <p class="text-lg-right mt-3">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </p>
                                <div class="social-links text-lg-right mt-4">
                                    <a href="https://www.facebook.com/luan.pereira.1800" class="" target="_blank;">
                                        <i class="fa-brands fa-facebook"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="image">
                                <img class="rounded-circle img-fluid" src="{{ asset('imagens/luan.jpg') }}" alt="Generic placeholder image" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="media media-style-01 ">
                            <div class="media-body order-lg-1 ml-lg-4">
                                <h2 class="mt-0 mb-1 text-lg-left">Celine Ferreira</h2>
                                <span class="d-block text-lg-left">Noiva</span>
                                <p class="mt-3 text-lg-left">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </p>
                                <div class="social-links mt-4 text-lg-left">
                                    <a href="https://www.facebook.com/celine.ferreira.99" class="" target="_blank;">
                                        <i class="fa-brands fa-facebook"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="image ">
                                <img class="rounded-circle img-fluid" src="{{ asset('imagens/Celine.jpg') }}" alt="Generic placeholder image" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="boder-img-bottom" style="background-image: url(imagens/border-img-01.png)"></div>
        </section>

        <!-- LOVE STORY SECTION -->
        <!-- <section class="section-padding bg-white-smoke">
            <div class="container">
                <div class="row justify-content-center text-center mb-4">
                    <div class="col-lg-6 col-12">
                        <h1 class="section-title">Uma história de amor</h1>
                        <i class="demo-icon">
                            <img src="{{ asset('imagens/flor.jpeg') }}" />
                        </i>
                    </div>
                </div>
                <div class="row col-divider">
                    <div class="col-12 col-md-12 col-xl-6">
                        <div class="media media-style-02 left-side mt-5 ">
                            <div class="image">
                                <img class="" src="{{ asset('imagens/love-img-01.jpg') }}" alt="Generic placeholder image" />
                                <div class="icon-overlay">
                                    <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid" width="90.031" height="79.97" viewBox="0 0 90.031 79.97">
                                        <path d="M45.031,79.982 C-42.782,32.418 20.727,-26.719 45.031,13.111 C69.337,-26.719 132.853,32.418 45.031,79.982 Z" class="heart-fill"></path>
                                    </svg>
                                    <span>01 agosto, 2021</span>
                                </div>
                            </div>
                            <div class="media-body ">
                                <h2 class="mt-0 pb-3">O primeiro encontro</h2>
                                <p class="pb-3">
                                    Nemo modi primis eros totam cupidatat
                                    cras ex hic, sint Varius debitis. Ultricies laoreet, earum sollicitudin,
                                    malesuada, amet Occaecati suscipit.
                                </p>
                            </div>
                            <div class="left-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" width="27px" height="25px">
                                    <path class="sm-heart-stroke" fill-rule="evenodd" stroke="" stroke-width="2px" stroke-linecap="butt" stroke-linejoin="miter" fill="#fff" d="M12.995,5.806 C9.888,-1.823 1.057,-0.043 0.999,8.811 C0.967,13.674 5.204,15.492 8.025,17.436 C10.761,19.321 12.708,21.900 13.013,22.998 C13.275,21.922 15.443,19.270 17.975,17.383 C20.744,15.319 25.034,13.621 25.002,8.758 C24.943,-0.118 15.958,-1.519 12.995,5.806 "></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-xl-6 mt-xl-200">
                        <div class="media media-style-02 right-side mt-5 ">
                            <div class="image order-xl-1">
                                <img class="" src="{{ asset('imagens/love-img-02.jpg') }}" alt="Generic placeholder image" />
                                <div class="icon-overlay">
                                    <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid" width="90.031" height="79.97" viewBox="0 0 90.031 79.97">
                                        <path d="M45.031,79.982 C-42.782,32.418 20.727,-26.719 45.031,13.111 C69.337,-26.719 132.853,32.418 45.031,79.982 Z" class="heart-fill"></path>
                                    </svg>
                                    <span>22 agosto, 2021</span>
                                </div>
                            </div>
                            <div class="media-body">
                                <h2 class="mt-0 pb-3">O pedido de namoro</h2>
                                <p class="pb-3">
                                    Nemo modi primis eros totam cupidatat
                                    cras ex hic, sint Varius debitis. Ultricies laoreet, earum sollicitudin,
                                    malesuada, amet Occaecati suscipit.
                                </p>
                            </div>
                            <div class="right-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" width="27px" height="25px">
                                    <path class="sm-heart-stroke" fill-rule="evenodd" stroke="" stroke-width="2px" stroke-linecap="butt" stroke-linejoin="miter" fill="#fff" d="M12.995,5.806 C9.888,-1.823 1.057,-0.043 0.999,8.811 C0.967,13.674 5.204,15.492 8.025,17.436 C10.761,19.321 12.708,21.900 13.013,22.998 C13.275,21.922 15.443,19.270 17.975,17.383 C20.744,15.319 25.034,13.621 25.002,8.758 C24.943,-0.118 15.958,-1.519 12.995,5.806 "></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-xl-6">
                        <div class="media media-style-02 left-side mt-5 mt-xl-m40">
                            <div class="image">
                                <img class="" src="{{ asset('imagens/love-img-03.jpg') }}" alt="Generic placeholder image" />
                                <div class="icon-overlay">
                                    <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid" width="90.031" height="79.97" viewBox="0 0 90.031 79.97">
                                        <path d="M45.031,79.982 C-42.782,32.418 20.727,-26.719 45.031,13.111 C69.337,-26.719 132.853,32.418 45.031,79.982 Z" class="heart-fill"></path>
                                    </svg>
                                    <span>19 fevereiro, 2023</span>
                                </div>
                            </div>
                            <div class="media-body ">
                                <h2 class="mt-0 pb-3">O pedido de casamento</h2>
                                <p class="pb-3">
                                    Nemo modi primis eros totam cupidatat
                                    cras ex hic, sint Varius debitis. Ultricies laoreet, earum sollicitudin,
                                    malesuada, amet Occaecati suscipit.
                                </p>
                            </div>
                            <div class="left-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" width="27px" height="25px">
                                    <path class="sm-heart-stroke" fill-rule="evenodd" stroke="" stroke-width="2px" stroke-linecap="butt" stroke-linejoin="miter" fill="#fff" d="M12.995,5.806 C9.888,-1.823 1.057,-0.043 0.999,8.811 C0.967,13.674 5.204,15.492 8.025,17.436 C10.761,19.321 12.708,21.900 13.013,22.998 C13.275,21.922 15.443,19.270 17.975,17.383 C20.744,15.319 25.034,13.621 25.002,8.758 C24.943,-0.118 15.958,-1.519 12.995,5.806 "></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-xl-6">
                        <div class="media media-style-02 right-side mt-5 mb-40 mt-xl-160">
                            <div class="image order-xl-1">
                                <img class="" src="{{ asset('imagens/love-img-04.jpg') }}" alt="Generic placeholder image" />
                                <div class="icon-overlay">
                                    <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid" width="90.031" height="79.97" viewBox="0 0 90.031 79.97">
                                        <path d="M45.031,79.982 C-42.782,32.418 20.727,-26.719 45.031,13.111 C69.337,-26.719 132.853,32.418 45.031,79.982 Z" class="heart-fill"></path>
                                    </svg>
                                    <span>27 janeiro, 2024</span>
                                </div>
                            </div>
                            <div class="media-body ">
                                <h2 class="mt-0 pb-3">Casando</h2>
                                <p class="pb-3">
                                    Nemo modi primis eros totam cupidatat
                                    cras ex hic, sint Varius debitis. Ultricies laoreet, earum sollicitudin,
                                    malesuada, amet Occaecati suscipit.
                                </p>
                            </div>
                            <div class="right-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" width="27px" height="25px">
                                    <path class="sm-heart-stroke" fill-rule="evenodd" stroke="" stroke-width="2px" stroke-linecap="butt" stroke-linejoin="miter" fill="#fff" d="M12.995,5.806 C9.888,-1.823 1.057,-0.043 0.999,8.811 C0.967,13.674 5.204,15.492 8.025,17.436 C10.761,19.321 12.708,21.900 13.013,22.998 C13.275,21.922 15.443,19.270 17.975,17.383 C20.744,15.319 25.034,13.621 25.002,8.758 C24.943,-0.118 15.958,-1.519 12.995,5.806 "></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- SOCIAL MEDIA SLIDER SECTION -->
        <section class="section-padding bg-paralax " style="background-image: url(imagens/bg-img-02.jpg);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-6">
                        <div class="icon-style-1">
                            <div class="icon">
                                <i class="fa fa-heart" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div id="social-media" class="owl-carousel carousel-style-01 owl-loaded owl-drag">
                            <div class="owl-stage-outer">
                                <div class="owl-stage" style="width: 3240px; font-weight: bold; font-size: 25px; color: #fff;">
                                    <div class="owl-item cloned" style="width: 540px;">
                                        <div class="single-item">
                                            <a href="" style="cursor: pointer;" onclick="">
                                                "O amor é paciente e bondoso. Tudo sofre, tudo crê, tudo espera e tudo suporta" 1 Co 13:4-7
                                            </a>
                                        </div>
                                    </div>
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