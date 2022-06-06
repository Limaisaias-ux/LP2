<?php 
class User{
    public $id;
    public $name;
    public $email;
    public $date;
    public $cpf;
    public $city; 
    public $state; 
    public $cep;
    public $pass;
    function __construct($id, $name, $email, $date, $cpf, $city, $state, $cep, $pass) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->date = $date;
        $this->cpf = $cpf;
        $this->city = $city;
        $this->state = $state;
        $this->cep = $cep;
        $this->pass = $pass;
    }
    function create(){
        $db = new Database();
        try {
            $stmt = $db->conn->prepare("INSERT INTO users (name, email, date, cpf, city, state, cep, pass, roles)
            VALUES (:name, :email, :date, :cpf, :city, :state, :cep, :pass, 'client');");
            $stmt->bindParam(':name', $this->name);
            $stmt->bindParam(':email', $this->email);
            $stmt->bindParam(':date', $this->date);
            $stmt->bindParam(':cpf', $this->cpf);
            $stmt->bindParam(':city', $this->city);
            $stmt->bindParam(':state', $this->state);
            $stmt->bindParam(':cep', $this->cep);
            $stmt->bindParam(':pass', $this->pass);
            $stmt->execute();
            $id = $db->conn->lastInsertId();
            return $id;
        }catch(PDOException $e) {
            $result['message'] = "Error Select All User: " . $e->getMessage();
            $response = new Output();
            $response->out($result, 500);
        }
    }
    function delete(){
        $db = new Database();
        try {
            $stmt = $db->conn->prepare("DELETE FROM users WHERE id = :id;");
            $stmt->bindParam(':id', $this->id);
            $stmt->execute();
            return $stmt->rowCount();
        }catch(PDOException $e) {
            $result['message'] = "Error Delete User: " . $e->getMessage();
            $response = new Output();
            $response->out($result, 500);
        }
    }
    function update(){
        $db = new Database();
        try {
            $stmt = $db->conn->prepare("UPDATE users SET name = :name, email = :email, date = :date, cpf = :cpf,
            city = :city, state = :state, cep = :cep, pass = :pass WHERE id = :id;");
            $stmt->bindParam(':id', $this->id);
            $stmt->bindParam(':name', $this->name);
            $stmt->bindParam(':email', $this->email);
            $stmt->bindParam(':date', $this->date);
            $stmt->bindParam(':cpf', $this->cpf);
            $stmt->bindParam(':city', $this->city);
            $stmt->bindParam(':state', $this->state);
            $stmt->bindParam(':cep', $this->cep);
            $stmt->bindParam(':pass', $this->pass);
            $stmt->execute();
            return true;
        }catch(PDOException $e) {
            $result['message'] = "Error Update User: " . $e->getMessage();
            $response = new Output();
            $response->out($result, 500);
        }
    }
    function selectAll(){
        $db = new Database();
        try {
            $stmt = $db->conn->prepare("SELECT id, name, email, date, cpf, city, state, cep FROM users;");
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }catch(PDOException $e) {
            $result['message'] = "Error Select All User: " . $e->getMessage();
            $response = new Output();
            $response->out($result, 500);
        }
    }

    function selectById(){
        $db = new Database();
        try {
            $stmt = $db->conn->prepare("SELECT id, name, email, date, cpf, city, state, cep FROM users WHERE id = :id;");
            $stmt->bindParam(':id', $this->id);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        }catch(PDOException $e) {
            $result['message'] = "Error Select User By Id: " . $e->getMessage();
            $response = new Output();
            $response->out($result, 500);
        }
    }

    function login(){
        $db = new Database();
        try {
            $stmt = $db->conn->prepare("SELECT id, name, email, roles FROM users WHERE email = :email AND pass = :pass; ");
            $stmt->bindParam(':email', $this->email);
            $stmt->bindParam(':pass', $this->pass);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        }catch(PDOException $e) {
            $result['message'] = "Error User Login:" . $e->getMessage();
            $response = new Output();
            $response->out($result, 500);
        }
    }
}
?>