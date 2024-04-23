<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Valent Company - Inicio</title>
    <?php include 'assets/layout/css.php' ?>
</head>
<body style="user-select: none;">
    <?php include 'assets/layout/header.php' ?>
    <section id="clients" class="clients section-bg">
        <div class="container">
            <div class="row" data-aos="zoom-in">

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
                </div>

            </div>
        </div>
    </section>

    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Acerca De</h2>
            </div>
            <div class="row content">
                <div class="col-lg-6">
                    <p>
                        Valent Company es una empresa dedicada a la fabricación y exportación de productos textiles de alta calidad. Fundada en 2022, nos hemos destacado en el mercado internacional por nuestra excelencia en diseño, calidad de fabricación y compromiso con la sostenibilidad.
                    </p>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <p>
                        Somos una empresa textil dedicada a la producción de textiles de alta calidad con un enfoque en el diseño innovador. Con una amplia gama de productos, desde prendas de vestir hasta textiles para el hogar, nos enorgullece exportar nuestros productos a clientes de todo el mundo.
                    </p>
                    <button type="button" class="btn-learn-more" data-bs-toggle="modal" data-bs-target="#acercade">
                        Ver mas
                    </button>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="acercade" tabindex="-1" aria-labelledby="acercadeLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="acercadeLabel">Acerca De</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Somos una empresa textil dedicada a la producción de textiles de alta calidad con un enfoque en el diseño innovador. Con una amplia gama de productos, desde prendas de vestir hasta textiles para el hogar, nos enorgullece exportar nuestros productos a clientes de todo el mundo. Nuestra pasión por la moda y nuestro compromiso con la excelencia nos impulsan a ofrecer productos que no solo son estéticamente atractivos, sino también duraderos y funcionales. Con un enfoque en la sostenibilidad y la responsabilidad social, nos esforzamos por mantener estándares éticos en todas nuestras operaciones. Estamos comprometidos con la creación de moda sin fronteras, llevando nuestro estilo distintivo a cada rincón del mundo.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <section id="why-us" class="why-us section-bg">
        <div class="container-fluid" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
                    <div class="content">
                        <h3>Únete a Nuestra Historia: <strong>Donde la Moda Encuentra su Propósito</strong></h3>
                        <p>
                            Te invitamos a descubrir nuestra marca, a explorar nuestras colecciones y a ser parte de nuestra historia en la creación de un mundo donde la moda no solo inspira, sino que también transforma. ¡Bienvenido a la familia de Valent Company!
                        </p>
                    </div>
                    <div class="accordion-list">
                        <ul>
                            <li>
                                <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Colecciones <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                                    <p>
                                    <ul>Primavera/Verano</ul>
                                    <ul>Otoño/Invierno</ul>
                                    <ul>Edición Limitada</ul>
                                    <ul>Básicos Essentials</ul>
                                    </p>
                                </div>
                            </li>

                            <li>
                                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Categorías de Productos <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                    <p>
                                    <ul>Ropa para Mujer</ul>
                                    <ul>Ropa para Hombre</ul>
                                    <ul>Ropa para Niños</ul>
                                    </p>
                                </div>
                            </li>

                            <li>
                                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Sostenibilidad y Ética <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                                    <p>
                                    <ul>Nuestra Filosofía</ul>
                                    <ul>Materiales Sostenibles</ul>
                                    <ul>Procesos de Fabricación</ul>
                                    <ul>Impacto Social</ul>
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("/Assets/img/img1.png");' data-aos="zoom-in" data-aos-delay="150">
                </div>
            </div>
        </div>
    </section>

    <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">
            <div class="row">
                <div class="col-lg-9 text-center text-lg-start">
                    <h3>Llamada a la accion</h3>
                    <p>¡Descubre tu estilo único hoy mismo con <span class="badge bg-success">Valent France!</span> Explora nuestras colecciones de moda sostenible y encuentra prendas de calidad que reflejen tu personalidad. ¡Haz una declaración de moda y únete a nuestra comunidad global de amantes de la moda consciente! </p>
                </div>
                <div class="col-lg-3 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="#">¡Compra ahora!</a>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Servicios</h2>
                <p>"En Valent Company, ofrecemos diseño personalizado y fabricación de alta calidad para satisfacer las demandas de nuestros clientes más exigentes. Con un enfoque en la innovación, la sostenibilidad y la atención al cliente excepcional, nos esforzamos por ofrecer productos que no solo sigan las últimas tendencias de moda, sino que también superen las expectativas. Desde la concepción hasta la entrega, estamos comprometidos con la excelencia en cada paso del proceso.</p>
            </div>

            <div class="row">
                <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <h4><a style="cursor: pointer;">Fabricación de Alta Calidad</a></h4>
                        <p>Producción de prendas de calidad superior utilizando los mejores materiales y técnicas de fabricación.</p>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box">
                        <h4><a style="cursor: pointer;">Logística Internacional</a></h4>
                        <p>Gestión eficiente y confiable de la logística de exportación para entregar nuestros productos a clientes en todo el mundo.</p>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box">
                        <h4><a style="cursor: pointer;">Innovación y Tendencias</a></h4>
                        <p>Estar a la vanguardia de las últimas tendencias de moda y ofrecer productos innovadores que destaquen en el mercado global.</p>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
                    <div class="icon-box">
                        <h4><a style="cursor: pointer;">Diseño de Moda Personalizado</a></h4>
                        <p>Creación de colecciones exclusivas y diseños personalizados para clientes específicos o marcas minoristas.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Equipo</h2>
                <p>Nuestro equipo está formado por personas con una profunda comprensión de la industria textil y un compromiso inquebrantable con la calidad y la innovación. Desde el diseño inicial hasta la entrega final, cada miembro de nuestro equipo aporta su experiencia única y su creatividad para garantizar que nuestras prendas sean de la más alta calidad y reflejen las últimas tendencias de moda.</p>
            </div>
            <div class="row">
                <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Walter Canahualpa</h4>
                            <span>Gerente General</span>
                            <p>Liderando con visión y pasión hacia la excelencia empresarial.</p>
                            <div class="social">
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>kathy</h4>
                            <span>Contabilidad</span>
                            <p>Garantizando precisión y transparencia en cada cifra.</p>
                            <div class="social">
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Vicente Rivera</h4>
                            <span>Ing industrial</span>
                            <p>Aplicando innovación y eficiencia en la producción textil.</p>
                            <div class="social">
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <span>Accountant</span>
                            <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                            <div class="social">
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div class="container-fluid" id="contenido-dinamico">

    </div>

    <?php include 'assets/layout/footer.php' ?>
    <?php include 'assets/layout/js.php' ?>
</body>
</html>