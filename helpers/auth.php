<?php
class Auth{
    function allowedRole($role){
        $response = new Output();
        //Verifia se possui ACCESS_TOKEN
        $headers = apache_request_headers();
        if(!isset($headers['access_token'])){
            $result['message'] = "ACCESS_TOKEN não informado!";
            $response->out($result, 403);
        }
        $token = $headers['access_token'];

        $session = new Session(null, $token, null);
        $user_session = $session->checkSessionRoles();
        
        //Verifica se possui sessão 
        if(!$user_session){
            $result['message'] = "Sessão não autorizada!";
            $response->out($result, 403);
        }

        //Verifica se possui papel de admin
        if(strpos($user_session['roles'], $role) === false){
            $result['message'] = "Sessão não possui permissão de $role!";
            $response->out($result, 403);
        }

        return $user_session;
    }
}
?>