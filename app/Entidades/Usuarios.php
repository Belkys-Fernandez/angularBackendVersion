<?php

    class Usuarios{

        public $usuario;
        public $nombre;
        public $apellido;
        public $cuenta;
        public $password;

       
      

        public static  function buscarListaUsuario(){
            $accesoDatos=Acceso_datos::obtenerConexionBD();
            $consulta=$accesoDatos->prepararConsulta("SELECT * FROM usuarios" );
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_CLASS,'Usuarios'); 
        }
        
        public function buscarUsuarioPorId($usuario){
            $accesoDatos=Acceso_datos::obtenerConexionBD();
            $consulta=$accesoDatos->prepararConsulta("SELECT * FROM usuarios WHERE usuario= $usuario"  );
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_CLASS,'Usuarios'); 
        }
        
    

        public function buscarDescripcionUsuario($usuario){
            $accesoDatos=Acceso_datos::obtenerConexionBD();
            $consulta=$accesoDatos->prepararConsulta("SELECT contra FROM usuarios WHERE usuario= $usuario "  );
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_CLASS,'Usuarios'); 
        }

        public function retornarLogin($datosLogin){
            $user=$datosLogin['usuario'];
            $password=$datosLogin['password'];
            
            $accesoDatos=Acceso_datos::obtenerConexionBD();  
            $consulta=$accesoDatos->prepararConsulta("SELECT * FROM usuarios WHERE usuario= ''and password='' "  );
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_CLASS,'Usuarios'); 
        }
        
        public function RegistrarUsuario($datosUsuarioDecodificado){
            $user=$datosUsuarioDecodificado['usuario'];
            $nom=$datosUsuarioDecodificado['nombre'];
            $apell=$datosUsuarioDecodificado['apellido'];
            $cuenta=$datosUsuarioDecodificado['cuenta'];
            $password=$datosUsuarioDecodificado['password'];

            $accesoDatos=Acceso_datos::obtenerConexionBD();
            $consulta=$accesoDatos->prepararConsulta("INSERT INTO usuarios(
                                                            usuario, nombre, apellido, cuenta, password)
                                                            VALUES ('$user', '$nom', '$apell', '$cuenta', '$password')" );
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_CLASS,'Usuarios'); 
        }


        
      
        public function buscarUsuario($usuario){
            $accesoDatos=Acceso_datos::obtenerConexionBD();
            $consulta=$accesoDatos->prepararConsulta("SELECT password FROM usuarios WHERE usuario='$usuario'" );
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_CLASS,'Usuarios'); 
        }

        public function buscarEliminar($usuario){
            $accesoDatos=Acceso_datos::obtenerConexionBD();
             $consulta=$accesoDatos->prepararConsulta("DELETE FROM usuarios WHERE usuario='$usuario'"  );
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_CLASS,'Usuarios'); 
        }
        
  
     }
        
        
?>        