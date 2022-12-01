<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>@yield('title')</title>
    <!-- favicon -->
    <!-- Estilos -->

</head>
<body>
    <!-- header -->
    <!-- nav -->
    @yield('content')

    <section class="page-section bg-light" id="Galeria_de_productos">
        <div class="container gallery-container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Galeria de imagenes</h2>
                <h3 class="section-subheading text-muted">Aqui te presentamos una muestra de los productos que podemos
                    fabricar</h3>
            </div>

            <h4>🔸Escritorio con dos cajoneras🔸</h4>
            <hr style="width:75%; border-color:#35373a;">

            <div class="tz-gallery">
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <a class="lightbox"
                            href="assets/img/Galeria de imagenes/Escritorio con cajoneras/Lado de atras.jpg">
                            <img src="assets/img/Galeria de imagenes/Escritorio con cajoneras/Lado de atras.jpg"
                                alt="Park">
                        </a> 
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <a class="lightbox"
                            href="assets/img/Galeria de imagenes/Escritorio con cajoneras/Lado derecho.jpg">
                            <img src="assets/img/Galeria de imagenes/Escritorio con cajoneras/Lado derecho.jpg"
                                alt="Bridge">
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-3">
                        <a class="lightbox"
                            href="assets/img/Galeria de imagenes/Escritorio con cajoneras/Parte de cajonera.jpg">
                            <img src="assets/img/Galeria de imagenes/Escritorio con cajoneras/Parte de cajonera.jpg"
                                alt="Tunnel">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <a class="lightbox"
                            href="assets/img/Galeria de imagenes/Escritorio con cajoneras/Partte izquierda.jpg">
                            <img src="assets/img/Galeria de imagenes/Escritorio con cajoneras/Partte izquierda.jpg"
                                alt="Coast">
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="tz-gallery">
                <div class="row">
               <div class="col-sm-6 col-md-3">
                <div class="card h-100">
                    <!-- Sale badge-->
                    <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                    <!-- Product image-->
                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Special Item</h5>
                            <!-- Product reviews-->
                            <div class="d-flex justify-content-center small text-warning mb-2">
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                            </div>
                            <!-- Product price-->
                            <span class="text-muted text-decoration-line-through">$20.00</span>
                            $18.00
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Ver mas</a></div>
                    </div>
                </div>
            </div> 
            </div>
            </div>
            
            

            <h4>🔸Cajonera de tres piezas🔸</h4>
            <hr style="width:75%; border-color:#35373a;">
            <div class="tz-gallery">
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <a class="lightbox"
                            href="assets/img/Galeria de imagenes/Cajonera de 3 piezas/Vista frontal.jpg">
                            <img src="assets/img/Galeria de imagenes/Cajonera de 3 piezas/Vista frontal.jpg" alt="Park">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <a class="lightbox"
                            href="assets/img/Galeria de imagenes/Cajonera de 3 piezas/Vista izquierda.jpg">
                            <img src="assets/img/Galeria de imagenes/Cajonera de 3 piezas/Vista izquierda.jpg"
                                alt="Bridge">
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-3">
                        <a class="lightbox"
                            href="assets/img/Galeria de imagenes/Cajonera de 3 piezas/Vista derecha sin luz.jpg">
                            <img src="assets/img/Galeria de imagenes/Cajonera de 3 piezas/Vista derecha sin luz.jpg"
                                alt="Tunnel">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <a class="lightbox"
                            href="assets/img/Galeria de imagenes/Cajonera de 3 piezas/Vista derecha.jpg">
                            <img src="assets/img/Galeria de imagenes/Cajonera de 3 piezas/Vista derecha.jpg"
                                alt="Coast">
                        </a>
                    </div>
                </div>
            </div>

            <h4>🔸Closet con dos cajoneras, repisas y divisiones🔸</h4>
            <hr style="width:75%; border-color:#35373a;">
            <div class="tz-gallery">
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <a class="lightbox"
                            href="assets/img/Galeria de imagenes/Closet con cajoneras y repisas/closet con cajoneras 1 frente.jpg">
                            <img src="assets/img/Galeria de imagenes/Closet con cajoneras y repisas/closet con cajoneras 1 frente.jpg"
                                alt="Park">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <a class="lightbox"
                            href="assets/img/Galeria de imagenes/Closet con cajoneras y repisas/closet con cajoneras 2 lado derecho.jpg">
                            <img src="assets/img/Galeria de imagenes/Closet con cajoneras y repisas/closet con cajoneras 2 lado derecho.jpg"
                                alt="Bridge">
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-3">
                        <a class="lightbox"
                            href="assets/img/Galeria de imagenes/Closet con cajoneras y repisas/closet con cajoneras y repisas 1.jpg">
                            <img src="assets/img/Galeria de imagenes/Closet con cajoneras y repisas/closet con cajoneras y repisas 1.jpg"
                                alt="Tunnel">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <a class="lightbox"
                            href="assets/img/Galeria de imagenes/Closet con cajoneras y repisas/closet con cajoneras y repisas 2.jpg">
                            <img src="assets/img/Galeria de imagenes/Closet con cajoneras y repisas/closet con cajoneras y repisas 2.jpg"
                                alt="Coast">
                        </a>
                    </div>
                </div>
            </div>

            <h4>🔸Escritorio empotrado con una cajonera🔸</h4>
            <hr style="width:75%; border-color:#35373a;">
            <div class="tz-gallery">
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <a class="lightbox"
                            href="assets/img/Galeria de imagenes/Escritorio empotrado/Escritorio empotrado a la pared FRENTE.jpg">
                            <img src="assets/img/Galeria de imagenes/Escritorio empotrado/Escritorio empotrado a la pared FRENTE.jpg"
                                alt="Park">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <a class="lightbox"
                            href="assets/img/Galeria de imagenes/Escritorio empotrado/Escritorio empotrado a la pared ADENTRO.jpg">
                            <img src="assets/img/Galeria de imagenes/Escritorio empotrado/Escritorio empotrado a la pared ADENTRO.jpg"
                                alt="Bridge">
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-3">
                        <a class="lightbox"
                            href="assets/img/Galeria de imagenes/Escritorio empotrado/Escritorio empotrado a la pared ARRIBA.jpg">
                            <img src="assets/img/Galeria de imagenes/Escritorio empotrado/Escritorio empotrado a la pared ARRIBA.jpg"
                                alt="Tunnel">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <a class="lightbox"
                            href="assets/img/Galeria de imagenes/Escritorio empotrado/Escritorio empotrado a la pared ABAJO.jpg">
                            <img src="assets/img/Galeria de imagenes/Escritorio empotrado/Escritorio empotrado a la pared ABAJO.jpg"
                                alt="Coast">
                        </a>
                    </div>
                </div>
            </div>

            <h4>🔸Alacena empotrada🔸</h4>
            <hr style="width:75%; border-color:#35373a;">

            <div class="tz-gallery">
                <div class="row">
                    <div class="col-sm-4 col-md-3">
                        <a class="lightbox"
                            href="assets/img/Galeria de imagenes/Alacena empotrada/Alacena empotrada 1.jpg">
                            <img src="assets/img/Galeria de imagenes/Alacena empotrada/Alacena empotrada 1.jpg"
                                alt="Park">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <a class="lightbox"
                            href="assets/img/Galeria de imagenes/Alacena empotrada/Alacena empotrada 2.jpg">
                            <img src="assets/img/Galeria de imagenes/Alacena empotrada/Alacena empotrada 2.jpg"
                                alt="Bridge">
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-3">
                        <a class="lightbox"
                            href="assets/img/Galeria de imagenes/Alacena empotrada/Alacena empotrada 3.jpg">
                            <img src="assets/img/Galeria de imagenes/Alacena empotrada/Alacena empotrada 3.jpg"
                                alt="Tunnel">
                        </a>
                    </div>

                </div>
            </div>

            <h4>🔸Zapateras con repisas movibles🔸</h4>
            <hr style="width:75%; border-color:#35373a;">
            <div class="tz-gallery">
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <a class="lightbox"
                            href="assets/img/Galeria de imagenes/Zapateras con repisas removibles/Zapatera cerrada 1.jpg">
                            <img src="assets/img/Galeria de imagenes/Zapateras con repisas removibles/Zapatera cerrada 1.jpg"
                                alt="Park">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <a class="lightbox"
                            href="assets/img/Galeria de imagenes/Zapateras con repisas removibles/Zapatera cerrada 2.jpg">
                            <img src="assets/img/Galeria de imagenes/Zapateras con repisas removibles/Zapatera cerrada 2.jpg"
                                alt="Bridge">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <a class="lightbox"
                            href="assets/img/Galeria de imagenes/Zapateras con repisas removibles/Zapateras cerradas 1.jpg">
                            <img src="assets/img/Galeria de imagenes/Zapateras con repisas removibles/zapateras cerradas 1.jpg"
                                alt="Bridge">
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-3">
                        <a class="lightbox"
                            href="assets/img/Galeria de imagenes/Zapateras con repisas removibles/zapateras cerradas 2.jpg">
                            <img src="assets/img/Galeria de imagenes/Zapateras con repisas removibles/zapateras cerradas 2.jpg"
                                alt="Tunnel">
                        </a>
                    </div>
                </div>
            </div>

            <!--Ver mas-->
            <details>
                <summary>
                    Ver más imágenes ➕📸
                </summary>
                <div class="tz-gallery">
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <a class="lightbox"
                                href="assets/img/Galeria de imagenes/Zapateras con repisas removibles/Zapatera abierta 1.jpg">
                                <img src="assets/img/Galeria de imagenes/Zapateras con repisas removibles/Zapatera abierta 1.jpg"
                                    alt="Park">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <a class="lightbox"
                                href="assets/img/Galeria de imagenes/Zapateras con repisas removibles/Zapatera abierta 2.jpg">
                                <img src="assets/img/Galeria de imagenes/Zapateras con repisas removibles/Zapatera abierta 2.jpg"
                                    alt="Bridge">
                            </a>
                        </div>
                        <div class="col-sm-12 col-md-3">
                            <a class="lightbox"
                                href="assets/img/Galeria de imagenes/Zapateras con repisas removibles/Zapatera abierta 3.jpg">
                                <img src="assets/img/Galeria de imagenes/Zapateras con repisas removibles/Zapatera abierta 3.jpg"
                                    alt="Tunnel">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <a class="lightbox"
                                href="assets/img/Galeria de imagenes/Zapateras con repisas removibles/Zapatera abierta 4.jpg">
                                <img src="assets/img/Galeria de imagenes/Zapateras con repisas removibles/Zapatera abierta 4.jpg"
                                    alt="Park">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <a class="lightbox"
                                href="assets/img/Galeria de imagenes/Zapateras con repisas removibles/Zapatera abierta 5.jpg">
                                <img src="assets/img/Galeria de imagenes/Zapateras con repisas removibles/Zapatera abierta 5.jpg"
                                    alt="Bridge">
                            </a>
                        </div>
                    </div>
                </div>

            </details>
            <br>
            <br>

            <h4>🔸Zapateras de repisas movibles con alacena🔸</h4>
            <hr style="width:75%; border-color:#35373a;">
            <div class="tz-gallery">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <a class="lightbox"
                            href="assets/img/Galeria de imagenes/Zapateras con alacena/Zapateras con alacena 1.jpg">
                            <img src="assets/img/Galeria de imagenes/Zapateras con alacena/Zapateras con alacena 1.jpg"
                                alt="Park">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <a class="lightbox"
                            href="assets/img/Galeria de imagenes/Zapateras con alacena/Zapateras con alacena 2.jpg">
                            <img src="assets/img/Galeria de imagenes/Zapateras con alacena/Zapateras con alacena 2.jpg"
                                alt="Bridge">
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <a class="lightbox"
                            href="assets/img/Galeria de imagenes/Zapateras con alacena/Zapateras con alacena 3.jpg">
                            <img src="assets/img/Galeria de imagenes/Zapateras con alacena/Zapateras con alacena 3.jpg"
                                alt="Tunnel">
                        </a>
                    </div>
                </div>
            </div>

            <!--Ver mas-->

            <details>
                <summary>Ver más imágenes ➕📸</summary>
                <div class="tz-gallery">
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <a class="lightbox"
                                href="assets/img/Galeria de imagenes/Zapateras con alacena/Zapatera con alacena abierta IZQUIERDA.jpg">
                                <img src="assets/img/Galeria de imagenes/Zapateras con alacena/Zapatera con alacena abierta IZQUIERDA.jpg"
                                    alt="Coast">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <a class="lightbox"
                                href="assets/img/Galeria de imagenes/Zapateras con alacena/Zapatera con alacena abierta DERECHA.jpg">
                                <img src="assets/img/Galeria de imagenes/Zapateras con alacena/Zapatera con alacena abierta DERECHA.jpg"
                                    alt="Coast">
                            </a>
                        </div>
                    </div>
                </div>
            </details>

            <br>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
            <script>
                baguetteBox.run('.tz-gallery');
            </script>
        </div>
    </section>

    <!-- footer -->

    <!-- script -->
</body>
</html>