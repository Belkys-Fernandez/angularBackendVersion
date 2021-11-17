<?php
 class Productos{


public $nombre;
public $categoria;
public $precio;
public $presentacion;


public static  function buscarListaProductos(){
    $accesoDatos=Acceso_datos::obtenerConexionBD();
    $consulta=$accesoDatos->prepararConsulta("SELECT * FROM productos" );
    $consulta->execute();
    return $consulta->fetchAll(PDO::FETCH_CLASS,'Productos'); 
}

public function buscarProductosPorId($nombre){
    $accesoDatos=Acceso_datos::obtenerConexionBD();
    $consulta=$accesoDatos->prepararConsulta("SELECT * FROM productos WHERE nombre= $nombre"  );
    $consulta->execute();
    return $consulta->fetchAll(PDO::FETCH_CLASS,'Productos'); 
}

public function RegistrarProducto($datosProductoDecodificado){
    $nom=$datosProductoDecodificado['nombre'];
    $categ=$datosProductoDecodificado['categoria'];
    $prec=$datosProductoDecodificado['precio'];
    $pres=$datosProductoDecodificado['presentacion'];
  

    $accesoDatos=Acceso_datos::obtenerConexionBD();
    $consulta=$accesoDatos->prepararConsulta("INSERT INTO productos(
                                                    nombre, categoria, precio, presentacion)
                                                    VALUES ('$nom', '$categ', '$prec', '$pres')" );
    $consulta->execute();
    return $consulta->fetchAll(PDO::FETCH_CLASS,'Productos'); 
}

public function buscarDescripcionProducto($nombre){
    $accesoDatos=Acceso_datos::obtenerConexionBD();
    $consulta=$accesoDatos->prepararConsulta("SELECT categoria FROM productos WHERE nombre= $nombre"  );
    $consulta->execute();
    return $consulta->fetchAll(PDO::FETCH_CLASS,'Productos'); 
}


public function buscarEliminar($nombre){
    $accesoDatos=Acceso_datos::obtenerConexionBD();
    $consulta=$accesoDatos->prepararConsulta("DELETE FROM productos WHERE nombre= '$nombre'" );
    $consulta->execute();
    return $consulta->fetchAll(PDO::FETCH_CLASS,'Productos'); 
}

public function buscarActualizacion($producto){
   
    $nom=$producto['nombre'];
    $categ=$producto['categoria'];
    $prec=$producto['precio'];
    $pres=$producto['presentacion'];
    $accesoDatos=Acceso_datos::obtenerConexionBD();
    var_dump("UPDATE productos
    SET categoria='$categ', precio= '$prec', presentacion='$pres'
    WHERE nombre='$nom';");
    $consulta=$accesoDatos->prepararConsulta("UPDATE productos
                                                SET categoria='$categ', precio= '$prec', presentacion='$prec'
                                                WHERE nombre='$nom';");
    $consulta->execute();
    return $consulta->fetchAll(PDO::FETCH_CLASS,'Productos'); 
}

}


?>