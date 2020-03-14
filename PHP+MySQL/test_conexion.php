<!doctype html>
<html>
  <head>
  <meta charset="utf-8">
    <title>Test de Conexión</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

<div class="container">
    <div class="row">
    <h1>Test de conexión</h1>
    </div>
    <div class="row">
<?php
// Definimos los datos de conexión para acceder a la base de datos
// inserta los tuyos propios:
$servidor = "localhost";
$usuario = "rafarafa";
$contrasena = "Moces1200";

/*
 CREAR CONEXIÓN
 Se crea una variable que se iguala a la función con los valores anteriormente definidos, para realizar la conexión
 de esta manera, la proxima ves que necesitemso conectarnos, se podrá realizar la conexión en determinadas funciones, pasanso como parámetro la variable que almacena la conexión
 */

 $conexion = mysqli_connect($servidor, $usuario, $contrasena);

/*
COMPROBAR CONEXIÓN
Con un if y un else; en el caso de que la conexión no se realice if(!$conexion) escribe Conexión fallida
Si la conexión se realiza escribirá echo "Se ha realizado..."
*/
if (!$conexion) {
  die("Conexión Fallida: ".mysqli_connect_error());
}
echo "Se ha conectado satisfactoriamente";


?>


    </div> <? // fin de row ?>
</div> <? // fin de container ?>

  </body>
</html>