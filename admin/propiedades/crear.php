<?php
// Base de datos
require '../../includes/config/database.php';
$db = conectarDb();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';

    $titulo = $_POST['titulo'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];
    $habitaciones = $_POST['habitaciones'];
    $wc = $_POST['wc'];
    $estacionamiento = $_POST['estacionamiento'];
    $vendedorId = $_POST['vendedor'];
    
    // Insertar en la base de datos
    $query = " INSERT INTO propiedades(titulo, precio, descripcion, habitaciones, wc, estacionamiento,
    vendedores_id ) VALUES ('$titulo', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$vendedorId'); ";

    // echo $query;

    $resultado = mysqli_query($db, $query);

    if ($resultado) {
        echo "Insertado Correctamente";
    }

}

require '../../includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Crear</h1>

    <a href="/admin" class="boton-verde">Volver</a>

    <form method="POST" action="/admin/propiedades/crear.php" class="formulario">
        <fieldset>
            <legend>Información general</legend>

            <label for="titulo">Titulo:</label>
            <input type="text" name="titulo" id="titulo" placeholder="Titulo propiedad">

            <label for="precio">Precio:</label>
            <input type="number" name="precio" id="precio" placeholder="Titulo propiedad">

            <label for="imagen">Imagen:</label>
            <input type="file" name="" id="imagen" accept="image/jpeg, image/png">

            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion"></textarea>

        </fieldset>

        <fieldset>
            <legend>Información Propiedad</legend>

            <label for="habitaciones">Habitaciones:</label>
            <input type="number" name="habitaciones" min="1" max="9" name="" id="habitaciones" placeholder="Ej: 3">

            <label for="wc">Baños:</label>
            <input type="number" name="wc" min="1" max="9" name="" id="wc" placeholder="Ej: 3">

            <label for="estacionamiento">Estacionamiento:</label>
            <input type="number" name="estacionamiento" min="1" max="9" name="" id="estacionamiento" placeholder="Ej: 3">

        </fieldset>

        <fieldset>
            <legend>Vendedor</legend>

            <select name="vendedor">
                <option value="1">Hector</option>
                <option value="2">Pedro</option>
            </select>
        </fieldset>

        <input type="submit" value="Crear Propiedad" class="boton-verde">

    </form>

</main>

<?php
incluirTemplate('footer');
?>