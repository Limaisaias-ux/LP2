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



?>