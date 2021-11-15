<?php


    class PersonasController{

        public static function retornarListapersona($request,$response,$args){
            $listapersona=personas::buscarListapersona();
            $response->getBody()->write(json_encode($listapersona));
            return $response;
        }
      

        public  function retornarBuscarpersona($request,$response,$args){
            $json = $request->getBody();
            $json_id = json_decode($json,true);
            $onjetopersona=new personas;
            $buscarpersona=$onjetopersona->buscarpersona($json_id['personas']);
            $response->getBody()->write(json_encode($buscarpersona));
            return $response;
        }
     
        
        public  function retornarpersonaPorId($request,$response,$args){
            $onjetopersona=new personas;
            $persona=$onjetopersona->buscarpersonaPorId($args['persona']);
            $response->getBody()->write(json_encode($persona));
            return $response;
        }

        public  function retornarRegistropersona($request,$response,$args){
            $datospersona = $request->getBody();
            $datosUsuadioDecodificado = json_decode($datospersona,true);
            $onjetopersona=new personas;
            $registropersona=$onjetopersona->Registrarpersona($datosUsuadioDecodificado);
            $response->getBody()->write(json_encode($registropersona));
            return $response;
        }

        
       

        public  function retornarEliminacion($request,$response,$args){
            $json = $request->getBody();
            $json_id = json_decode($json,true);
            $onjetopersona=new personas;
            $descripcionpersona=$onjetopersona->buscarEliminar($json_id['persona']);
            $response->getBody()->write(json_encode($descripcionpersona));
            return $response;
        }
        public  function retornarActualizacion($request,$response,$args){
            $json = $request->getBody();
            $json_id = json_decode($json,true);
            $onjetopersona=new personas;
            $descripcionpersona=$onjetopersona->buscarActualizacion($json_id['persona']);
            $response->getBody()->write(json_encode($descripcionpersona));
            return $response;
        }



    }


?>