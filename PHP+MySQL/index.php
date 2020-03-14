<?php 
$micolorfavorito="lime";
?>

<!doctype html>
<html lang="es">
  <head>
  <meta charset="utf-8">
    <title>Dicampus / Alumnos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
<style>

h1{ color: <?php echo $micolorfavorito?>}
  li.items{ border-radius:20px; background:<?php echo $micolorfavorito;?>; padding: 10px; margin:4px;  display: inline-block; width:30%; height: 300px;}
  li.items img{ width:80px; height: 80px; border-radius:50%; margin:10px; transition: 0.3s; border: solid white 3px}
  li.items img:hover{ transform: scale(3) rotate(360deg); border: solid black 5px;}

</style>
  <body>

<div class="container">
    <div class="row">
    <h1>Listado de Alumnos</h1>
    </div>
    <div class="row">

<?php
$servidor = "miguelesteban.net";
$usuario = "rafarafa";
$contrasena = "Moces1200";
$basedatos = "dicampus";

// Crear conexión
$conexion = mysqli_connect($servidor, $usuario, $contrasena, $basedatos);
// Verificar conexión
if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}

//cambiar el conjunto de caracteres a utf8 para que se muestran ñ y tildes
if(!$conexion->set_charset("utf8")){
  printf("Error cargando el conjunto de caracteres utf8: %\n", $conexion->error);
  exit();
}
//Consulta a base de datos
$sql_consulta = "SELECT nombre, apellidos, email, rollu, foto FROM alumnos";
$resultado = mysqli_query($conexion, $sql_consulta);

if (mysqli_num_rows($resultado) > 0) {
    echo '<ul>';
    // datos de salida para cada fila
    while($fila = mysqli_fetch_assoc($resultado)) {
        echo '<li class="items">';
            echo '<img src="img/'.$fila["foto"].'">';
            echo '<h2>'.$fila["nombre"];
            echo ' ';
            echo $fila["apellidos"].'</h2>';
            echo '<a href="mailto:'.$fila["email"].'"> Escribe a '.$fila["nombre"].'</a>';
            echo '<p>'.$fila["rollu"].'</p>';
        echo '</li>';
    }
    echo '</ul>';
}
else {
    echo "No se han encontrado resultados";
}

mysqli_close($conexion);
?>


    </div> <? // fin de row ?>
</div> <? // fin de container ?>

  </body>
</html>