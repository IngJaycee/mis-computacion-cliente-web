<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Titulo de la Pagina -->
    <title>TAAC Capacitaciones</title>
    <!-- vinculo hacia hoja de estilos -->
    <link rel="stylesheet" href="assets/css/main.css">

    <!-- JQUERY CORE -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- //JQUERY UI -->
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/eddbdb7ddb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

    <!-- vinxulo hacia documento con metodos js (particularmente para Jquery en este caso) -->
    <script src="assets/js/main.js"></script>

</head>
<body>
    <header>
        <!-- Titulo -->
        <h1>TAAC Capacitaciones</h1>
        <!-- Navegacion de la pagina -->
        <nav>
            <a id="btnAbout" href="/index/inicio"><i class="fas fa-address-card"></i> Acerca de nosotros</a>
            <a id="btnAddress" href="/index/inicio"><i class="fas fa-map-marker-alt"></i> Dirección</a>
            <a id="btnLocate" href="/index/inicio"><i class="fas fa-paper-plane"></i> Contáctenos</a>
        </nav>
    </header>
    <div id="content">
<?php
// se carga por defecto la pagina de Acerca de nosotros.
    $this->load->view('about_us.php');
?>
    </div>
    <footer>
    <!-- Permite actualizar el año de manera automatica en el pie de pagina -->
    &copy; Copyright <?php echo date('Y'); ?> MIS - Computación en el Cliente Web.
    </footer>

</body>
</html>