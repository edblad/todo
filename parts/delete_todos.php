<?php 
header("Location: ../index.php");

require 'database.php';

if(isset($_POST['delete'])){
    foreach ($_POST as $key => $value) {
        $statement = $pdo->prepare(
            "DELETE FROM todo WHERE id = " . $value
        );
        $statement->execute();
    }
}else if(isset($_POST['done'])){
    foreach ($_POST as $key => $value) {
        $statement = $pdo->prepare(
            "UPDATE todo SET completed = 1 WHERE id = " . $value
        );
        $statement->execute();
    }
}