<?php
if(isset($_POST['delete']) || isset($_POST['done'])){
    header("Location: ../index.php");
}

require 'database.php';

foreach ($_POST as $key => $value) {
    if(isset($_POST['delete'])){
        $statement = $pdo->prepare(
            "DELETE FROM todo WHERE id = " . $value
        );
        $statement->execute();
    }
    else if(isset($_POST['done'])){
        $statement = $pdo->prepare(
            "UPDATE todo SET completed = 1 WHERE id = " . $value
        );
        $statement->execute();
    }
}