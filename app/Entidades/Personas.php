<?php

    class personas{

        public $personas;
        public $nombre;
        public $apellido;
        public $sexo;


       
      

        public static  function buscarListapersonas(){
            $accesoDatos=Acceso_datos::obtenerConexionBD();
            $consulta=$accesoDatos->prepararConsulta("SELECT * FROM personas" );
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_CLASS,'personas'); 
        }
        
        public function buscarpersonasPorId($personas){
            $accesoDatos=Acceso_datos::obtenerConexionBD();
            $consulta=$accesoDatos->prepararConsulta("SELECT * FROM personas WHERE personas= $personas"  );
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_CLASS,'personass'); 
        }
        
    

        public function Registrarpersonas($datospersonasDecodificado){
            $user=$datospersonasDecodificado['personas'];
            $nom=$datospersonasDecodificado['nombre'];
            $apell=$datospersonasDecodificado['apellido'];
            $sexo=$datospersonasDecodificado['cuenta'];
         

            $accesoDatos=Acceso_datos::obtenerConexionBD();
            $consulta=$accesoDatos->prepararConsulta("INSERT INTO personas(
                                                            usuario, nombre, apellido, , cuenta)
                                                            VALUES ('$user', '$nom', '$apell', '$cuenta')" );
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_CLASS,'personas'); 
        }


        
      
        public function buscarpersonas($personas){
            $accesoDatos=Acceso_datos::obtenerConexionBD();
            $consulta=$accesoDatos->prepararConsulta("SELECT * FROM personas WHERE personas= $personas "  );
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_CLASS,'personas'); 
        }

        public function buscarEliminar($personas){
            $accesoDatos=Acceso_datos::obtenerConexionBD();
             $consulta=$accesoDatos->prepararConsulta("DELETE FROM personas WHERE personas= $personas "  );
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_CLASS,'personas'); 
        }
        
  
     }
        
        
?>        