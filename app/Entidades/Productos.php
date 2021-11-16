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

public function RegistrarProducto($datosUsuarioDecodificado){
    $nom=$datosUsuarioDecodificado['nombre'];
    $categ=$datosUsuarioDecodificado['categoria'];
    $prec=$datosUsuarioDecodificado['precio'];
    $pres=$datosUsuarioDecodificado['presentacion'];
  

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
     $consulta=$accesoDatos->prepararConsulta("DELETE FROM productos WHERE nombre= $nombre"  );
    $consulta->execute();
    return $consulta->fetchAll(PDO::FETCH_CLASS,'Productos'); 
}

public function buscarActualizacion($nombre){
    $accesoDatos=Acceso_datos::obtenerConexionBD();
    $consulta=$accesoDatos->prepararConsulta("SELECT * FROM productos WHERE nombre= $nombre"  );
    $consulta->execute();
    return $consulta->fetchAll(PDO::FETCH_CLASS,'Productos'); 
}

}


?>