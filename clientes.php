<?php
session_start();

// Verificar si la sesión está iniciada
$nombreUsuario = isset($_SESSION['usuario']) ? $_SESSION['usuario'] : "Invitado";


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
<!-- este es el link de boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- este es el link de boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


    <!--Este tipo de letra sera para los textos-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jersey+20+Charted&family=Jersey+25&family=Pixelify+Sans:wght@400..700&display=swap" rel="stylesheet">
    <!--igualmente es pixelar 1-->

    <!--Este tipo de letra sera para los textos-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Jersey+20+Charted&family=Jersey+25&family=Pixelify+Sans:wght@400..700&display=swap" rel="stylesheet">
    <!--igualmente es pixelar numero 3-->


    <!--Este es el link el cual le dara el tipo de letra a ocupar dentro de la pagina, me refiero al de abajo-->
    <!-- Es de tipo pixelar-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jersey+25&display=swap" rel="stylesheet">
    <!--Este es el link el cual le dara el tipo de letra a ocupar dentro de la pagina, me refiero al de arriba-->
</head>
<style>
    /* Reset de estilos para asegurar consistencia en todos los navegadores */
h3{
  font-family: "Jersey 25", serif;
  font-weight: 400;
  font-style: normal; 
}
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

/* Estilo del cuerpo */
body {
    line-height: 1.6;
    background-color: #4EAEC2;
    color: #333;
    padding: 0 20px;
}


/* Encabezado y navegación */
header {
    background-color: #387C86;
    color: #fff;
    padding: 15px 05;
    margin-bottom: 20px;

}

nav ul {
    list-style: none;
    text-align: center;
}

nav ul li {
    display: inline;
    margin-right: 15px;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
    font-size: 16px;
    padding: 5px 10px;
    transition: background-color 0.3s;
}

nav ul li a:hover {
    background-color: #555;
    border-radius: 5px;
}

/* Secciones del sitio */
section {
    margin-bottom: 40px;
    padding: 20px;
    background-color: #387C86;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

/* Títulos de las secciones */
section h2, section h3 {
    color: #FFFFFF;
    margin-bottom: 20px;
    text-align: center;
    font-weight: normal;

    font-family: "Jersey 25", serif;
    font-weight: 400;
    font-style: normal;
}

/* Categorías */
#categorias ul {
    list-style: none;
    padding: 0;
    text-align: center;
}

#categorias ul li {
    display: inline-block;
    margin: 0 10px;
    background-color: #687388;
}

#categorias ul li a {
    color: #0A4A50;
    text-decoration: none;
    font-weight: bold;
    padding: 10px 15px;
    transition: color 0.3s, background-color 0.3s;
}

#categorias ul li a:hover {
    color: #fff;
    background-color: #9B70EB;
    border-radius: 5px;
}

/* Carrito de compras */
#carrito {
    margin-bottom: 30px;
}

/* Pie de página */
footer {
    text-align: center;
    padding: 20px;
    background-color: #387C86;
    color: #fff;
    margin-top: 20px;
    position: relative;
    bottom: 0;
    width: 100%;
}


img {
    max-width: 60%;
    height: auto;
    margin: 20px auto;
}

h1{
   /* Esta parte contiene los cambios necesarios para la aplicacion del tipo de letra pixelar */ 
  font-family: "Jersey 25", serif;
  font-weight: 400;
  font-style: normal;
  /* Este de abajo es para centrar los textos */
  text-align: center;
  color: #FFFFFF;
}

a{
  font-family: "Black Ops One", serif;
  font-weight: 400;
  font-style: normal;
  color: #FFFFFF;
}

p{
    width: auto;
    height: auto;
    margin: auto;
    text-align: left;
    color: #1BEBD3;
    text-align: center;
}

h6{
  text-align: center;

  font-family: "Black Ops One", serif;
  font-weight: 400;
  font-style: normal;
  
  background-color: #3BE5AB;
  color: #FFFFFF;
}

.card{
    width: 100%, auto;
    height: 90vh,auto;
    margin: auto;
    background-color: #0A4A50;
    
}

.card-body .card-text input[type="submit"] {
    background-color: #387C86; /* Match your header color */
    color: #FAF270;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;

    font-family: "Jersey 25", serif;
    font-weight: 400;
    font-style: normal;
}

.card-body .card-text input[type="submit"]:hover {
    background-color: #9B70EB;
    color: #fff;

    font-family: "Jersey 25", serif;
    font-weight: 400;
    font-style: normal;
}

.caja {
    background-color: #9B70EB;

    /*font-family: "Jersey 25", serif;
    font-weight: 400;
    font-style: normal;
    */
    font-family: "Black Ops One", serif;
    font-weight: 400;
    font-style: normal;

    border-radius: 5px;
    padding: 05px 05px;
    margin: 10;
    height: 06vh;
    width: 15%;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 1rem;
    max-width: 100%;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

h4{
    color: #FFFFFF;
    margin-bottom: 20px;
    text-align: center;
    font-weight: normal;

    font-family: "Jersey 25", serif;
    font-weight: 400;
    font-style: normal;
}

</style>

<body>
    <!-- Encabezado -->
    <header>
        <nav>
            <h1>VentasOcean</h1>
            <ul>
                <li>  
                    <div class="caja">
                        <?php echo 'Usuario:  '.$nombreUsuario; ?>
                    </div>
               </li>
                <li><a href="#categorias">Categorías</a></li>
                <li><a href="carrito.php">Carrito</a></li>
                <li><a href="cerrar_sesion.php">Cerrar Sesión</a></li>
            </ul>
        </nav>
    </header>

    <!-- Sección de Inicio -->
    <section id="inicio">
        <h2>Encuentra todo lo que necesitas en un solo lugar.</h2>
    </section>

    <section id="categorias">
        <h3>Categorías</h3>
        <ul>
            <li><a href="#herramientas">herramientas</a></li>
            <li><a href="#muebles">muebles</a></li>
            <li><a href="#tecnologia">tecnología</a></li>
            <li><a href="#limpieza-hogar">limpieza y hogar</a></li>
            <li><a href="#mascotas">mascotas</a></li>
        </ul>
    </section>

    <section class="productos">
            <h2>Herramientas</h2>
            <div id="herramientas">
            <div class="row">

                <div class="col-md-4">
                    <div class="card">
                        <img src="Taladro_Percutor.jpeg" class="card-img-top" alt="taladro percutor">
                        <div class="card-body">
                            <h6 class="card-title">Taladro Percutor Bosch GSB 550 RE 550W7</h6>
                            <p class="card-text">Taladro Percutor, cuenta con un motor de 550W de utilidad para diferentes materiales.</p><br>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <img src="Sierracircular.JPEG" class="card-img-top" alt="sierra circular">
                        <div class="card-body">
                            <h6 class="card-title">Sierra circular Makita 1800W</h6>
                            <p class="card-text">Esta sierra tiene un motor 8,2 AMP, genera cortes 0° a -56° u positivos de 22,5°, 45° y 56°.</p><br>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="card">
                        <img src="Lijadora_Roto_orbital_Stanley.JPEG" class="card-img-top" alt="lijadora stanley">
                        <div class="card-body">
                            <h6 class="card-title">Lijadora Roto-orbital Stanley Ss30-b2c 300w</h6>
                            <p class="card-text"> Lijadora con regulador de velocidad, motor de 300W y recolector de polvo.</p><br><br><br><br>
                        </div>
                    </div>
                </div>
                <p><a href="herramienetas.php">Mas Herramientas</a></p>
            </div>
        </section>

        <section class="productos">
            <h2>Muebles</h2>
            <div id="muebles">
            <div class="row">

                <div class="col-md-4">
                    <div class="card">
                        <img src="estante_acero.jpeg" class="card-img-top" alt="taladro percutor">
                        <div class="card-body">
                            <h6 class="card-title">Estante Acero Pintado 90x40x180 cm</h6>
                            <p class="card-text">Estanteria de estructura en base a perfiles metalicos ranurados con la capacidad de ensamblado, cuenta con una capacidad de 175 kgs por bandeja.</p><br>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <img src="comedor1.JPG" class="card-img-top" alt="sierra circular">
                        <div class="card-body">
                            <h6 class="card-title">Juego de Comedor 4 Sillas</h6>
                            <p class="card-text">Comedor de la marca vekkahome ,este incluye cuatro sillas, las sillas estan acolchadas, esto entrega una mayor comodidad para momentos largos de uso .</p><br>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <img src="sofa2cuerpos.jpeg" class="card-img-top" alt="lijadora stanley">
                        <div class="card-body">
                            <h6 class="card-title">Sofá Mira 2 Cuerpos Zander</h6>
                            <p class="card-text">Sofa 2 cuerpos con tapizado de alta calidad, construido en base a madera de pino, le otorga una base solida y resi
                        </div>
                    </div>
                </div>
                <p><a href="muebles.php">Mas Muebles</a></p>
            </div>
        </section>

        <section class="productos">

            <h2>Tecnologia</h2>
            <div id="tecnologia">
            <div class="row">

                <div class="col-md-4">
                    <div class="card">
                    <img src="proyector_android_led_500.JPEG" class="card-img-top" alt="sierra circular">
                        <div class="card-body">
                            <h6 class="card-title">Proyector Android Led 500 ANSI 9000</h6>
                            <p class="card-text">Proyector led ansi las funciones con las que cuenta es un sistema operativo con android 9.0 y una appstore, conexion inalambrica y resolucion de 1920x1080.</p><br>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <img src="camara1.JPEG" class="card-img-top" alt="sierra circular">
                        <div class="card-body">
                            <h6 class="card-title">Smart Camera Seguridad</h6>
                            <p class="card-text">Camara de seguridad de la marca Xiaomi la cual tiene como caracteristica una grabacion de 1920px1080p, cuenta con una vision de 360° y conexion wifi.</p><br>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <img src="tablet1.JPG" class="card-img-top" alt="lijadora stanley">
                        <div class="card-body">
                            <h6 class="card-title">Tablet M9 4GB-128GB 9" IPS</h6>
                            <p class="card-text">Tablet de la marca lenovo con una camara de 8 MP, con una pantalla de aproximadamente de 22.86 cm o tambien pulgadas, procesador octa core, almacenamiento 128 GB y 4GB de ram.</p><br>
                        </div>
                    </div>
                </div>
                <p><a href="tecnologia.php">Mas Tecnología</a></p>
            </div>
        </section>

        <section class="productos">

            <h2>Limpieza</h2>
            <div id="limpieza-hogar">
            <div class="row">

                <div class="col-md-4">
                    <div class="card">
                    <img src="limpiza_bolsas.png" class="card-img-top" alt="Bolsas de Basura">
                        <div class="card-body">
                            <h6 class="card-title">Bolsas de Basura</h6>
                            <p class="card-text">Bolsas de Basura de 50 x 70 cm de la marca Impeke de 10 unidades de gran resistencia.</p><br>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <img src="limpieza_trapero.png" class="card-img-top" alt="Traperos para pisos">
                        <div class="card-body">
                            <h6 class="card-title">Trapero Húmedo Cerámica</h6>
                            <p class="card-text">Trapero húmedo para ceramica de la marca Virginia con olor a lavanda y flores el packete contiene 10 unidades</p><br>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <img src="limpieza_mopa.png" class="card-img-top" alt="Mopa de la marca Virutex">
                        <div class="card-body">
                            <h6 class="card-title">Mopa Plana Virutex</h6>
                            <p class="card-text">Mopa Plana de la marca Virutex de 35cm, entrega una gran versatilidad al momento de ser utilizada en espacios reducidos.</p><br>
                        </div>
                    </div>
                </div>
                <p><a href="limpieza.php">Mas Limpieza</a></p>
            </div>
        </section>


        <section class="productos">

            <h2>Mascotas</h2>
            <div id="mascotas">
            <div class="row">

                <div class="col-md-4">
                    <div class="card">
                    <img src="mascotas_alimento1.png" class="card-img-top" alt="Saco de alimento para mascotas">
                        <div class="card-body">
                            <h6 class="card-title">Saco de alimento MASTER DOG Adulto</h6>
                            <p class="card-text">Saco de alimento para perros adultos de la marca Masterdog con sabor a carn, es un saco de 18kg.</p><br>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <img src="mascota_alimento2.png" class="card-img-top" alt="Saco de alimento gatos pequeños">
                        <div class="card-body">
                            <h6 class="card-title">Saco de alimento de 1kg gatos pequeños</h6>
                            <p class="card-text">Saco de alimento para gatos pequeños de 1kg de la marca Champion Cat con sabor a carne y leche</p><br>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <img src="mascotas_alimento3.pgn.jpg" class="card-img-top" alt="Saco de alimento para perro">
                        <div class="card-body">
                            <h6 class="card-title">Saco de alimento Sabro Kan de 9kg perro adulto</h6>
                            <p class="card-text">Saco de alimento para perros adultos de 9kg de la marca Sabro Kan con sabor a carne y arroz</p><br>
                        </div>
                    </div>
                </div>
                <p><a href="mascotas.php">Mas Mascotas</a></p>
            </div>
        </section>

    <footer>
        <p>&copy; 2024 E-commerce de diego y cristopher.</p><br>
        <p>&copy; 2024 VentasOcean.</p>
    </footer>

</body>
</html>