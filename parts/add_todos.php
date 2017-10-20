<?php

header("Location: ../index.php");

require 'database.php';

if(isset($_POST["title"])){

    $statement = $pdo->prepare(
        "INSERT INTO todo (title, createdBy) 
        VALUES (:title, :createdBy)"
    );

    $statement->execute(array(
        ":title"        => $_POST["title"],
        ":createdBy"    => $_POST["createdBy"]
    ));
}

