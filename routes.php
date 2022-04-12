<?php
define('FOLDER','/lp2/api/'); // cria a constante caminho padrão
$url = $_SERVER['REQUEST_URI']; // pega o que está na url
$lengthStrFolder = strlen(FOLDER); // guarda o tamanho da constante folder
$urlClean = substr($url, $lengthStrFolder); // separa a string por partes

$route = explode('/', $urlClean);

//carrega autoloaders
require('helpers/autoloaders.php');

//cria obejeto de resposta da api
$response = new Output();

//Checa se o controller existe
$file_path = 'controllers/'.$route[0].'Controller.php';

if(file_exists($file_path)){
    require($file_path);
}else {
    $result['message'] = "404 - Rota da api não Encontrada";
    $response->out($result, 404);
    
}

?>