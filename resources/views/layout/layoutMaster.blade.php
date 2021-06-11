<!doctype html>
<html class="no-js" lang="en">

<head>
<title> @yield("title")  </title>
    @include('layout.inc.linksMeta')
    @include('layout.inc.linksCss')
</head>
<body id="page-top">
        <!-- barra de navegación-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5 d-flex">
                <a class="navbar-brand" href="#page-top"><img src="{{ asset ('assets/logo.png') }}" alt="logo" width="30%"></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#about">Sobre Nosotros</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Servicios</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Portafolio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contactanos</a></li>
                    </ul>
                </div>
            </div>
        </nav>
<!-- Inicio del header-->
<header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">Programadores Confiables</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5">Contratar los servicios para realizar la página web, puede aumentar tus ganancias hasta en un 70%</p>
                        <a class="btn btn-primary btn-xl" href="#about">Click para conocernos mejor</a>
                    </div>
                </div>
            </div>
        </header>
<!--Termina el header-->
  @yield("content")


    @include('layout.inc.linksJs')

</body>
</html>
