<?php

require 'database.php';
require 'fetch_todos.php';


if(isset($_POST["title"])){
    $statement = $pdo->prepare(
        "INSERT INTO todo (title, createdBy) 
        VALUES (:title, :createdBy)"
    );

    $statement->execute(array(
        ":title"        => $_POST["title"],
        ":createdBy"    => $_POST["createdBy"]
    ));

    $id = $pdo->lastInsertId();
    header("Location: ../index.php?id=" . $id );
}