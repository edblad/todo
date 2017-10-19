<?php

require 'database.php';

$statement = $pdo->prepare(
    "SELECT * FROM todo"
);

$statement->execute();

$todos = $statement->fetchAll(PDO::FETCH_ASSOC);