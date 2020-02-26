<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/blog.controlador.php";
require_once "modelos/blog.modelo.php";

require 'extensiones/vendor/autoload.php';

$plantilla = new ControladorPlantilla();
$plantilla -> ctrTraerPlantilla();