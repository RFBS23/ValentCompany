<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Valent Company - Contacto</title>
    <?php include '../assets/layout/layouts/css.php' ?>
</head>
<body style="user-select: none;">
    <?php include '../assets/layout/layouts/header.php' ?>
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Contacto</h2>
                <p>¿Tienes alguna pregunta, comentario o consulta sobre nuestros productos o servicios? ¡Estamos aquí para ayudarte! En Valent Company, valoramos la comunicación con nuestros clientes y nos esforzamos por brindar un servicio al cliente excepcional en cada interacción.</p>
            </div>

            <div class="row">

                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Ubicacion:</h4>
                            <p>Calle 2 Mz. B Lt.15 Urb. Los Productores Santa Anita Lima</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Correo:</h4>
                            <p>info@example.com</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Telefono:</h4>
                            <p>+51 987654321</p>
                        </div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1262.847333498914!2d-76.95333921158046!3d-12.034566283162942!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c427d38a01e1%3A0x7018d80e854eed78!2sValent%20France%20Moda%20Y%20Estilo!5e1!3m2!1ses-419!2spe!4v1713760829826!5m2!1ses-419!2spe" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Nombre y apellidos</label>
                                <input type="text" name="name" class="form-control" id="name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">correo Electronico</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Asunto</label>
                            <input type="text" class="form-control" name="subject" id="subject" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Mensaje</label>
                            <textarea class="form-control" name="message" rows="10" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Enviar Mensaje</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php include '../assets/layout/layouts/footer.php' ?>
    <?php include '../assets/layout/layouts/js.php' ?>
</body>
</html>