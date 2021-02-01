<?php

class Connection {
    public PDO $pdo;

    public function __construct() {
        $this->pdo = new PDO("mysql:server=localhost;dbname=notes", "root", ""); // Connect to the database
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function getNotes() {
        // Query to db for notes
        $statement = $this->pdo->prepare("SELECT * FROM notes ORDER BY create_date DESC");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC); // return notes as associative array format.
    }

    public function addNote($note) {

        $statement = $this->pdo->prepare("
            INSERT INTO notes (title, description, create_date)
            VALUES(:title, :description, :date)
        ");

        $statement->bindValue("title", $note["title"]);
        $statement->bindValue("description", $note["description"]);
        $statement->bindValue("date", date("Y-m-d H:i:s"));

        return $statement->execute();
    }

    public function getNote($id) {
        $statement = $this->pdo->prepare("SELECT * FROM notes WHERE id = :id");

        $statement->bindValue("id", $id);
        $statement->execute();

        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function updateNote($note) {
        $statement = $this->pdo->prepare("
            UPDATE notes SET title = :title, description = :description WHERE id = :id
        ");

        $statement->bindValue("title", $note["title"]);
        $statement->bindValue("description", $note["description"]);
        $statement->bindValue("id", $note["id"]);
        
        return $statement->execute();
    }
}

return new Connection();