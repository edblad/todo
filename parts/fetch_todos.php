<?php

require 'database.php';

$statement = $pdo->prepare(
    "SELECT * FROM todos"
);

$statement->execute();

$todos = $statement->fetchAll(PDO::FETCH_ASSOC);