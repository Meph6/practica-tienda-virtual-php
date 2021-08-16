<?php
session_start();
require_once 'autoload.php';

// conexión a base de datos
require_once 'config/Database.php';
// rutas amigables
require_once 'config/Parametros.php';
// diseño
require_once 'vistas/diseno/encabezado.php';

function errores(){
    $error = new errorControlador();
    $error->index();
}

if(isset($_GET['controlador'])){
    $nombre_controlador = $_GET['controlador'].'Controlador';
}elseif(!isset($_GET['controlador']) && !isset($_GET['accion'])){
    $nombre_controlador = ctrl_defecto;
}else{
    $error = errores();
    exit();
}

if(class_exists($nombre_controlador)){
    $controlador = new $nombre_controlador();

    if(isset($_GET['accion']) && method_exists($controlador, $_GET['accion'])){
        $accion = $_GET['accion'];
        $controlador->$accion();
    }elseif(!isset($_GET['controlador']) && !isset($_GET['accion'])){
        $accion_defecto = accion_defecto;
        $controlador->$accion_defecto();
    }else{
        $error = errores();
    }
}else{
    $error = errores();
}

require_once 'vistas/diseno/lateral.php';
require_once 'vistas/diseno/pie_de_pagina.php';