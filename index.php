<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hoteles Hilton</title>
    <link rel="stylesheet" href="Style/style.css" />
    <script src="https://kit.fontawesome.com/bcc3f4ccfc.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inclusive+Sans&display=swap" rel="stylesheet">
</head>

<body>
    <div class="section0">
        <header>
            <h1>Hoteles Hilton</h1>
        </header>

        <section class="section1">
            <div class="content_section1_hotel">
                <h3>Resort</h3>
                <img src="img/resort.png" alt="image" />
                <p>+150.000$</p>
            </div>
            <div class="content_section1_hotel">
                <h3>Posada</h3>
                <img src="img/posada.png" alt="image" />
                <p>+70.000$ a 150.000$</p>
            </div>
            <div class="content_section1_hotel">
                <h3>Hostal</h3>
                <img src="img/hostal.png" alt="image" />
                <p>40.000$ a 70.000$</p>
            </div>
        </section>

        <section class="section2">
            <form action="logic.php" method="post" class="content_section2">
                <p>Ingrese el costo por noche:</p>
                <input type="number" id="input_costo" class="costo" placeholder="ej: 50000" />
                <button type="button" id="click_buscar" onclick="mostrarFormulario()">Buscar</button>
            </form>
        </section>
    </div>
    <section class="section3" id="in_section3">
        <?php if (isset($formulario)) echo $formulario;
        ?>
    </section>

    <script src="script.js"></script>
</body>

</html>