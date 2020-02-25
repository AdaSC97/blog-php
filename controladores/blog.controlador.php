<?php

class ControladorBlog{
    //Mostrar contenido de la tabla blog
    static public function ctrMostrarBlog(){

        $tabla = "blog";

        $respuesta = ModeloBlog::mdlMostrarBlog($tabla);

        return $respuesta;
    }
    //Mostrar contenido de categorías
    static public function ctrMostrarCategorias(){

        $tabla = "categorias";

        $respuesta = ModeloBlog::mdlMostrarCategorias($tabla);

        return $respuesta;
    }
    //Mostrar artículos y categorías con Inner Join

    static public function  ctrMostrarConInnerJoin($desde, $cantidad, $item, $valor){

        $tabla1 = "categorias";
        $tabla2 = "articulos";

        $respuesta = ModeloBlog::mdlMostrarConInnerJoin($tabla1,$tabla2, $desde, $cantidad, $item, $valor);

        return $respuesta;

    }
    static public function ctrMostrarTotalArticulos($item, $valor){

        $tabla = "articulos";

        $respuesta = ModeloBlog::mdlMostrarTotalArticulos($tabla, $item, $valor);

        return $respuesta;
        
    }
}