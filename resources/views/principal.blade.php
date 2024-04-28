<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
        
        <title>Axolotito PC | Pagina Web Oficial</title>
    </head>
    <body>
        <header class="header" id="header">
            <nav class="nav contaiiner">
                <div class="nav__logo">
                    <img class="img-logo" src="{{ asset('img/axolotitopc-oficial.png') }}" alt="Axolotito PC | Oficial">
                </div>
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#home" class="nav__link active-link">
                                <i class='bx bx-home nav__icon'></i>
                                <span class="nav__name">Inicio</span>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#services" class="nav__link">
                                <i class='bx bx-package nav__icon'></i>
                                <span class="nav__name">Servicios</span>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#customers" class="nav__link">
                                <i class='bx bx-user-pin nav__icon'></i>
                                <span class="nav__name">Clientes</span>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#contact" class="nav__link">
                                <i class='bx bx-chat nav__icon'></i>
                                <span class="nav__name">Contacto</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <main>
            <section class="section__height" id="home">
                <div id="carouselExampleCaptions" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('img/banner-one.png') }}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h3>~ SOLUCIONES A LA MEDIDA ~</h3>
                                <p>Has crecer tu negocio, al implementar y al usar la tecnologia a tu favor, generando confianza y seguridad en tus clientes</p>
                            </div>
                        </div>
                </div>
            </section>

            <section class="container section section__height" id="services">
                <h2 class="section__title">Servicios</h2>
            </section>

            <section class="container section section__height" id="customers">
                <h2 class="section__title">Clientes</h2>
            </section>

            <section class="contact" id="contact">
                <div class="contaiiner section section__height">
                    <h2 class="section__title__contact">Contacto</h2>

                    <form action="" method="post">

                        <div class="form-group">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label class="form-label">Nombre Completo: *</label>
                                        <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="--Ingrese su nombre--" required>
                                    </div>
                                </div>
                                <br>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label class="form-label">Correo Electronico: *</label>
                                        <input type="email" class="form-control form-control-user" id="email" name="email" placeholder="--Ingrese su corrreo electronico--" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="form-label">Dirección:</label>
                            <input type="text" class="form-control form-control-user" id="address" name="address" placeholder="--Ingrese su dirección--" required>
                        </div>
                    </form>
                    
                </div>
            </section>
        </main>

        <script src="{{ asset('js/navbar.js') }}"></script>
    </body>
</html>