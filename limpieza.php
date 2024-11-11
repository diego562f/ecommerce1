<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Limpieza</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!--tipo de letra titulos-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jersey+20+Charted&family=Jersey+25&family=Pixelify+Sans:wght@400..700&display=swap" rel="stylesheet">
<!--tipo de letra titulos-->

<!--Este tipo de letra sera para los textos-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Jersey+20+Charted&family=Jersey+25&family=Pixelify+Sans:wght@400..700&display=swap" rel="stylesheet">
<!--igualmente es pixelar numero 3-->

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
.row {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.col-md-4 {
    flex: 0 -1 30%; /* Ajusta el ancho según tus necesidades */
    margin-bottom: 40px;
}

div p a{
color: white;
}

#carrito {
    margin-top: 40px;
    background-color: #f8f9fa;
    padding: 20px;
    border-radius: 5px;
}

#carrito-items {
    margin-bottom: 20px;
}

#carrito-items div {
    padding: 5px;
    border-bottom: 1px solid #ccc;
}


</style>
<body>
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
                <p class="card-text"><strong>Precio: $586</strong></p>
                <p class="card-text"><input type="submit" value="Agregar al Carrito"></p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <img src="limpieza_trapero.png" class="card-img-top" alt="Traperos para pisos">
            <div class="card-body">
                <h6 class="card-title">Trapero Húmedo Cerámica</h6>
                <p class="card-text">Trapero húmedo para ceramica de la marca Virginia con olor a lavanda y flores el packete contiene 10 unidades</p><br>
                <p class="card-text"><strong>Precio: $2.890</strong></p>
                <p class="card-text"><input type="submit" value="Agregar al Carrito"></p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <img src="limpieza_mopa.png" class="card-img-top" alt="Mopa de la marca Virutex">
            <div class="card-body">
                <h6 class="card-title">Mopa Plana Virutex</h6>
                <p class="card-text">Mopa Plana de la marca Virutex de 35cm, entrega una gran versatilidad al momento de ser utilizada en espacios reducidos.</p><br>
                <p class="card-text"><strong>Precio: $13.890</strong></p>
                <p class="card-text"><input type="submit" value="Agregar al Carrito"></p>
            </div>
        </div>
    </div>
    <div>
        <p><a href="clientes.php" class="btn-back">Volver</a></p>
    </div>

</div>
</section>

    <footer>
    <p>&copy; 2024 E-commerce de diego y cristopher.</p><br>
    <p>&copy; 2024 VentasOcean.</p>
    </footer>

</body>
</html>
