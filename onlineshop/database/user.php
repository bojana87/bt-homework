<?php

class DB {
private $host = "localhost";
private $username = "root";
private $password = "";
private $database = "shop-bt";

    public function connect() {
        $dsn = "mysql:host=" . $this->host . "; dbname=" . $this->database;
        $pdo = new PDO ($dsn, $this->username, $this->password);
        $pdo -> setAttribute (PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}

class Users extends DB {
    
    public function getUser() {
        $stmt = $this->connect()->query('SELECT * FROM contacts');

        while ($row = $stmt -> fetch()) {
            $id = $row['id'];
            $name = $row['name'];
            $email = $row['email'];
            $message = $row['message'];
        }
    }

    public function setUser ($name, $email, $message) {

        $sql = 'INSERT INTO contacts (name, email, message) VALUES (?, ?, ?);';
        $statement = $this->connect()->prepare($sql);
        $statement->execute([$name,$email,$message]);
   
        
    }
}
