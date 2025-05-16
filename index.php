<?php

use MercadoPago\MercadoPagoConfig;

require 'vendor/autoload.php';

MercadoPagoConfig::setAccessToken("");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La tienda del alfajor</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="build/css/app.css">
</head>

<body>
    <!-- Header - Menu -->
    <header>
        <div class="contenedor contenido-header">
            <div class="logo">
                <a href="/">
                    <img src="/src/img/logo-icono.svg" alt="">
                    <p>Alfa<span>Shop</span></p>
                </a>
            </div>
            <div class="menu">
                <nav>
                    <ul>
                        <li><a href="#">Productos</a></li>
                        <li><a href="#">Envios</a></li>
                        <li><a href="#">Contacto</a></li>
                    </ul>
                </nav>
                <a href="#" class="btn__header">Admin</a>
                <div class="redes-sociales">
                    <a href="#"><img src="/src/img/instagram-icono.svg" alt=""></a>
                    <a href="#"><img src="/src/img/facebook-icono.svg" alt=""></a>
                    <a href="#"><img src="/src/img/youtube-icono.svg" alt=""></a>
                    <a href="#"><img src="/src/img/whatsapp-icono.svg" alt=""></a>
                </div>
            </div>
            <input type="checkbox" id="menuMovil"></input>
            <label for="menuMovil" class="menu__open">
                <div class="open"></div>
            </label>
            <div class="menu__movil menu__effects">
                <label for="menuMovil"></label>
                <div class="menu__content">
                    <ul>
                        <li><a href="#">Productos</a></li>
                        <li><a href="#">Envios</a></li>
                        <li><a href="#">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <div class="scroll-trigger"></div>
    <main>
        <!-- HERO -->
        <div class="hero">
            <div class="hero__column contenedor">
                <section class="hero__text">
                    <h1>La tienda on line de venta de Alfajores más rica de la web</h1>
                    <p>Sabias que Argentina es el mayor consumidor de alfajores del mundo, con más de 900 millones de unidades vendidas al año.</p>
                    <p>Es que el alfajor no es sólo una de las cosas más ricas del país, es parte de nuestra identidad nacional!</p>
                    <a href="#" class="btn__hero btn__green">Comprar</a>
                </section>
                <section class="hero__img">
                    <img src="/src/img/hero-img.png" alt="">
                </section>

            </div>
        </div>

        <!-- SECCION UNO -->
        <section class="first">
            <div class="cards contenedor">
                <p>¡TENES QUE PROBARLOS!</p>
                <h1>LLevate hoy una caja de alfajores al mejor precio</h1>
                <div class="cards-container">
                    <div class="card-primary">
                        <img src="/src/img/alfajor-negro.png" alt="">
                        <h2>Chocolate Negro</h2>
                        <p>Nuestro Alfajor de Chocolate conformado por dos sabrosas galletitas de receta propia, rellenas de una generosa porción de dulce de leche de excelente calidad, recubierto por el más puro y fino chocolate.</p>
                        <p class="price">$10.000</p>
                        <a href="#" class="btn__card">Comprar</a>
                    </div>
                    <div class="card-primary">
                        <img src="/src/img/alfajor-blanco.png" alt="">
                        <h2>Chocolate Blanco</h2>
                        <p>El Alfajor de Chocolate Blanco realizado con dos sabrosas galletitas de receta propia, rellenas de una generosa porción de dulce de leche de excelente calidad, recubierto por el más puro y fino chocolate blanco.</p>
                        <p class="price">$10.000</p>
                        <a href="#" class="btn__card">Comprar</a>
                    </div>
                    <div class="card-primary">
                        <img src="/src/img/alfajor-limon.png" alt="">
                        <h2>Limón</h2>
                        <p>Nuestro Alfajor de Limón esta conformado por dos sabrosas galletitas de receta propia, rellenas de una generosa porción de pasta de Limón de excelente calidad sin baño de reposteria obteniendo un exquisito sabor cítrico.</p>
                        <p class="price">$8.000</p>
                        <a href="#" class="btn__card">Comprar</a>
                    </div>
                </div>
            </div>

        </section>

        <section class="second">
            <div class="contenedor">
                <div class="about">
                    <h1>Alfajores de calidad premium a bajo precio</h1>
                    <p>La Recova es una empresa familiar dedicada a la elaboración de productos de primera calidad. Tales como Alfajores de Chocolate Negro, Alfajores de chocolate Blanco, Alfajores de Limón y Dulce de leche.</p>
                    <a href="#" class="btn__about btn__green">Comprar</a>
                </div>
                <div class="about__img">
                    <img src="/src/img/about-1.png" alt="">
                    <img src="/src/img/about-2.png" alt="">
                </div>
            </div>
        </section>

        <footer>
            <div class="footer contenedor">
                <p>AlfaShop. Todos los derechos reservados.</p>
            </div>
        </footer>

    </main>
    <script src="/build/js/app.js"></script>
</body>

</html>