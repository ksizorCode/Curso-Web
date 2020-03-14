<?php

$datos = [
    "titulo" =>  "Fruteria Manolo",
    "url" =>     "www.manoloFruit.com",
    "favicon" => "img/favicon.png",
    "logo" =>    "img/logo.png",
    "subtitulo"=>"Juguetes de ayer y hoy",
    "tel" =>     "666555777",
    "email" =>   "info@jugueteriamaria.com",
    "direccion"=>"C/ Uria 54 Bajo",
    "lang"=> "fr"
];


// --------------------------------------------- NO TOCAARRR!!!! --------- 

function mostrar($valor){
    // importar valores de fuera de la función debido a que si no nun rula 
    // esta linea de código de debajo sirve para importar dentro de la función, en este caso el array $datos.
    global $datos;
    echo $datos[$valor];
}

// mostrar('url');






//echo "<div class='development'>cargué tos los datos bien</div>";




function caca(){
    include 'inc/head.php';
}



?>