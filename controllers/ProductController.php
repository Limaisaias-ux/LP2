<?php
class ProductController{

function create(){
    $response = new Output();
    $response->allowedMethod('POST');

    $auth = new Auth();
    $user_session = $auth->allowedRole('admin');

    //Entradas
    $photo = $_POST['photo'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    //Processamento ou Persistencia
    $product = new Product(null, $photo, $title, $description, $price);
    $id = $product->create();
    //Saída
    $result['message'] = "Produto Cadastrado com sucesso!";
    $result['product']['id'] = $id;
    $result['product']['photo'] = $photo;
    $result['product']['description'] = $description;
    $result['product']['title'] = $title;
    $result['product']['price'] = $price;
    $response->out($result);
}

function delete(){
    $response = new Output();
    $response->allowedMethod('POST');

    $auth = new Auth();
    $user_session = $auth->allowedRole('admin');

    $id = $_POST['id'];
    $product = new Product($id, null, null, null, null);
    $product->delete();
    $result['message'] = "Produto deletado com sucesso!";
    $result['product']['id'] = $id;
    $response->out($result);
}

function update(){
    $response = new Output();
    $response->allowedMethod('POST');

    $auth = new Auth();
    $user_session = $auth->allowedRole('admin');

    $id = $_POST['id'];
    $photo = $_POST['photo'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $product = new Product($id, $photo, $title, $description, $price);
    $id = $product->update();

    $result['message'] = "Produto Editado com sucesso!";
    $result['product']['id'] = $id;
    $result['product']['photo'] = $photo;
    $result['product']['description'] = $description;
    $result['product']['title'] = $title;
    $result['product']['price'] = $price;
    $response->out($result);
}
function selectAll(){
    $response = new Output();
    $response->allowedMethod('GET');
    $product = new Product(null, null, null, null, null);
    $result = $product->selectAll();
    $response->out($result);
}

function selectById(){
    $response = new Output();
    $response->allowedMethod('GET');
    $id = $_GET['id'];
    $product = new Product($id, null, null, null, null);
    $result = $product->selectById();
    $response->out($result);
}

}
?>