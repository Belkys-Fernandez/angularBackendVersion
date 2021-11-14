<?php


    class ProductosController{

        public static function retornarListaProductos($request,$response,$args){
            $listaProductos=Productos::buscarListaProductos();
            $response->getBody()->write(json_encode($listaProductos));
            return $response;
        }
    

        public  function retornarProductosPorId($request,$response,$args){
            $onjetoProducto=new Productos;
            $Producto=$onjetoProducto->buscarProductosPorId($args['nombre']);
            $response->getBody()->write(json_encode($Producto));
            return $response;
        }
        
        public  function retornarProductosDescripcion($request,$response,$args){
            $json = $request->getBody();
            $json_id = json_decode($json,true);
            $onjetoProducto=new Productos;
            $descripcionProductos=$onjetoProducto->buscarDescripcionProducto($json_id['nombre']);
            $response->getBody()->write(json_encode($descripcionProductos));
            return $response;
        }
        public  function retornarRegistroProductos($request,$response,$args){
            $json = $request->getBody();
            $json_id = json_decode($json,true);
            $onjetoProducto=new Productos;
            $registroProducto=$onjetoProducto->buscarRegistroProducto($json_id['nombre']);
            $response->getBody()->write(json_encode($registroProducto));
            return $response;
        }


        public  function retornarEliminacion($request,$response,$args){
            $json = $request->getBody();
            $json_id = json_decode($json,true);
            $onjetoProducto=new Productos;
            $descripcionProductos=$onjetoProducto->buscarEliminar($json_id['nombre']);
            $response->getBody()->write(json_encode($descripcionProductos));
            return $response;
        }
        public  function retornarActualizacion($request,$response,$args){
            $json = $request->getBody();
            $json_id = json_decode($json,true);
            $onjetoProducto=new Productos;
            $descripcionProductos=$onjetoProducto->buscarActualizacion($json_id['nombre']);
            $response->getBody()->write(json_encode($descripcionProductos));
            return $response;
        }



    }


?>