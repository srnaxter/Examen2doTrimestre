<?php
// retrasamos 2 segundos la ejecución de esta página PHP.
sleep(2);
// Cabecera para indicar que vamos a enviar datos JSON y que no haga caché de los datos.
header('Content-Type: application/json');
header('Cache-Control: no-cache, must-revalidate');

$listadoHerramienta = array();

$herramienta1= [
        "nombre" => "Martillo",
        "descripcion" => "Sirve para martillar",
        "reparado" => "2",
        "garantia" => "5"
    ];

$herramienta2= [
    "nombre" => "Sierra",
    "descripcion" => "Sirve para serrar",
    "reparado" => "1",
    "garantia" => "3"
];

$herramienta3= [
    "nombre" => "Destornillado",
    "descripcion" => "Sirve para destornillar",
    "reparado" => "3",
    "garantia" => "6"
];

$herramienta4= [
    "nombre" => "Taladro",
    "descripcion" => "Sirve para taladrar",
    "reparado" => "4",
    "garantia" => "9"
];

$herramienta5= [
    "nombre" => "Metro",
    "descripcion" => "Sirve para medir",
    "reparado" => "0",
    "garantia" => "5"
];

$listadoHerramienta[] = $herramienta1;
$listadoHerramienta[] = $herramienta2;
$listadoHerramienta[] = $herramienta3;
$listadoHerramienta[] = $herramienta4;
$listadoHerramienta[] = $herramienta5;

echo json_encode($listadoHerramienta);