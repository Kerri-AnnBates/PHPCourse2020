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
}

return new Connection();