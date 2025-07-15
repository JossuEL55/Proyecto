<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Cga Project</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic"
        rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#page-top">Cga Store</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#about">Nosotros</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Servicios</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Productos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contáctanos</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-white  font-weight-bold">Todo para el mundo petrolero en un solo lugar.
                    </h1>
                    <hr class="divider" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white mb-5">Tu aliado confiable en productos y servicios para la industria
                        petrolera</p>
                    <a class="btn btn-primary btn-xl" href="#about">Mucho mas </a>
                </div>
            </div>
        </div>
    </header>
    <!-- About-->
    <section class="page-section bg-primary" id="about">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mt-0">¡Lo que tu operación necesita, lo tenemos!</h2>
                    <hr class="divider divider-light" />
                    <p class="text-white-75 mb-4">Productos y servicios especializados para la industria petrolera.</p>
                    <a class="btn btn-light btn-xl" href="#services">Comencemos</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container px-4 px-lg-5">
            <h2 class="text-center mt-0">A tu Servicio</h2>
            <hr class="divider" />
            <div class="row gx-4 gx-lg-5">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi bi-box fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Productos</h3>
                        <p class="text-muted mb-0">Suministros industriales de alta calidad adaptados a tus necesidades.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi bi-gear-wide-connected fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Servicios</h3>
                        <p class="text-muted mb-0">Soluciones técnicas confiables y soporte especializado.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi bi-person-circle fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Técnicos</h3>
                        <p class="text-muted mb-0">Personal calificado para garantizar un servicio eficiente.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi bi-truck fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Entregas</h3>
                        <p class="text-muted mb-0">Logística rápida y segura a nivel nacional.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio-->
    <div id="portfolio">
        <div class="container-fluid p-0">
            <div class="row g-0">
                @php
                    $productos = [
                        ['nombre' => 'Lubricante Premium', 'categoria' => 'Lubricantes', 'imagen' => 1],
                        ['nombre' => 'Filtro de Aire HD', 'categoria' => 'Filtros', 'imagen' => 2],
                        ['nombre' => 'Aceite Hidráulico', 'categoria' => 'Aceites', 'imagen' => 3],
                        ['nombre' => 'Válvula de Presión', 'categoria' => 'Componentes', 'imagen' => 4],
                        ['nombre' => 'Extintor ABC', 'categoria' => 'Seguridad', 'imagen' => 5],
                        ['nombre' => 'Manguera Industrial', 'categoria' => 'Accesorios', 'imagen' => 6],
                    ];
                @endphp
                @foreach ($productos as $producto)
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box"
                            href="{{ asset('assets/assets/img/portfolio/fullsize/' . $producto['imagen'] . '.jpg') }}"
                            title="{{ $producto['nombre'] }}">
                            <img class="img-fluid"
                                src="{{ asset('assets/assets/img/portfolio/thumbnails/' . $producto['imagen'] . '.jpg') }}"
                                alt="{{ $producto['nombre'] }}" />
                            <div class="portfolio-box-caption p-3">
                                <div class="project-category text-white-50">{{ $producto['categoria'] }}</div>
                                <div class="project-name">{{ $producto['nombre'] }}</div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 col-xl-6 text-center">
                    <h2 class="mt-0">Let's Get In Touch!</h2>
                    <hr class="divider" />
                    <p class="text-muted mb-5">Send us a message and we will get back to you soon!</p>
                </div>
            </div>
            <!-- Contact form (no backend logic) -->
            <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                <div class="col-lg-6">
                    <form id="contactForm">
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" type="text" placeholder="Enter your name..."
                                required />
                            <label for="name">Full name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" type="email" placeholder="name@example.com"
                                required />
                            <label for="email">Email address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" required />
                            <label for="phone">Phone number</label>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="message" placeholder="Enter your message here..."
                                style="height: 10rem" required></textarea>
                            <label for="message">Message</label>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary btn-xl" id="submitButton" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-4 text-center mb-5 mb-lg-0">
                    <i class="bi-phone fs-2 mb-3 text-muted"></i>
                    <div>+1 (555) 123-4567</div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="bg-light py-5">
        <div class="container px-4 px-lg-5">
            <div class="small text-center text-muted">Copyright &copy;
                {{ now()->year }} - Company Name
            </div>
        </div>
    </footer>
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
</body>

</html>