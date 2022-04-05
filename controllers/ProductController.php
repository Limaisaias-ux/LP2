<?php
    if(isset($route[1]) && $route[1] != ''){
        if($route[1] == 'create'){
            $product = new Product(10, 'Isaias','','');
            $product->create();
        }elseif ($route[1] == 'delete') {
            $product = new Product(10, 'Isaias','','');
            $product->delete();
        }else{
            $result['message'] = "404 - Rota da api não Encontrada";
            $response = new Output();
            $response->out($result, 404);
        }
    }else{
        $result['message'] = "404 - Rota da api não Encontrada";
        $response = new Output();
        $response->out($result, 404);
    }
?>