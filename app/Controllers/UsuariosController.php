<?php


    class UsuariosController{

        public static function retornarListaUsuario($request,$response,$args){
            $listaUsuario=Usuarios::buscarListaUsuario();
            $response->getBody()->write(json_encode($listaUsuario));
            return $response;
        }
      

        public  function retornarBuscarUsuario($request,$response,$args){
            $json = $request->getBody();
            $json_id = json_decode($json,true);
            $onjetoUsuario=new Usuarios;
            $buscarUsuario=$onjetoUsuario->buscarUsuario($json_id['usuario']);
            $response->getBody()->write(json_encode($buscarUsuario));
            return $response;
        }
        public  function retornarLogin($request,$response,$args){
            $json = $request->getBody();
            $json_id = json_decode($json,true);
            $onjetoLogin=new Usuarios;
            $retornarLogin=$onjetoLogin->retornarLogin($json_id['usuario'], $json_id['password']);
            $response->getBody()->write(json_encode($retornarLogin));
            return $response;
        }
        
        
    
        public  function retornarUsuarioPorId($request,$response,$args){
            $onjetoUsuario=new Usuarios;
            $Usuario=$onjetoUsuario->buscarUsuarioPorId($args['usuario']);
            $response->getBody()->write(json_encode($Usuario));
            return $response;
        }

        public  function retornarRegistroUsuario($request,$response,$args){
            $datosUsuario = $request->getBody();
            $datosUsuadioDecodificado = json_decode($datosUsuario,true);
            $onjetoUsuario=new Usuarios;
            $registroUsuario=$onjetoUsuario->RegistrarUsuario($datosUsuadioDecodificado);
            $response->getBody()->write(json_encode($registroUsuario));
            return $response;
        }

        
        public  function retornarUsuarioDescripcion($request,$response,$args){
            $json = $request->getBody();
            $json_id = json_decode($json,true);
            $onjetoUsuario=new Usuarios;
            $descripcionUsuario=$onjetoUsuario->buscarDescripcionUsuario($json_id['usuario']);
            $response->getBody()->write(json_encode($descripcionUsuario));
            return $response;
        }

        public  function retornarEliminacion($request,$response,$args){
            $json = $request->getBody();
            $json_id = json_decode($json,true);
            $onjetoUsuario=new Usuarios;
            $descripcionUsuario=$onjetoUsuario->buscarEliminar($json_id['usuario']);
            $response->getBody()->write(json_encode($descripcionUsuario));
            return $response;
        }
        public  function retornarActualizacion($request,$response,$args){
            $json = $request->getBody();
            $json_id = json_decode($json,true);
            $onjetoUsuario=new Usuarios;
            $descripcionUsuario=$onjetoUsuario->buscarActualizacion($json_id['usuario']);
            $response->getBody()->write(json_encode($descripcionUsuario));
            return $response;
        }



    }


?>