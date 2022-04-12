<?php

    class UserController{
        function create(){
            //Entradas
            $name = $_POST['name'];
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            //Processamento ou Persistência
            $user = new user(null, $name, $email, $pass);
            $id = $user->create();
            //Saída
            $result['message'] = "Cadastrado com sucesso ";
            $result['user']['id'] = $id;
            $result['user']['name'] = $name;
            $result['user']['email'] = $email;
            $result['user']['pass'] = $pass;
            $response = new Output();
            $response->out($result);
        }

        function Delete(){
           
            $user = new user(null, $name, $email, $pass);
            $id = $user->delete();
            
            $result['message'] = "Deletado com sucesso ";
            $result['user']['id'] = $id;      
            $response = new Output();
            $response->out($result);

            function update(){
                
                $id = $_POST['id'];
                $name = $_POST['name'];
                $email = $_POST['email'];
                $pass = $_POST['pass'];
               
                $user = new user(null, $name, $email, $pass);
                $id = $user->update();
               
                $result['message'] = "User Atualizado com Sucesso!";
                $result['user']['id'] = $id;
                $result['user']['name'] = $name;
                $result['user']['email'] = $email;
                $result['user']['pass'] = $pass;
                $response = new Output();
                $response->out($result);

                function selecAll(){
                    $user = new user(null, null, null, null);
                    $rseult = user->selectAll();
                    $response = new Output();
                    $response->out($result);

                }
            }
        }
    }

//checa obejeto de resposta da api
$response = new Output();

//checa se o o controller e a action existem na rota
if(!isset($route[0]) || !isset($route[1])){
    $result['message'] = "404 - Rota da api não Encontrada";
    $response->out($result, 404);
}

$controller_name = $route[0];
$action = str_replace('-', '', $route[1]);

$controller_path = 'controllers/'.$controller_name.'Controller.php';

//Checa se o arquivo do controller existe 
if(file_exists($controller_path)) {
    $controller_class_name = $controller_name.'controler';
    $controller = new $controller_class_name();
    if(method_exists($controller_path)){
        $controller->$action();
    }
}

$result['message'] = "404 - Rota da api não Encontrada";
$response->out($result, 404);

?>