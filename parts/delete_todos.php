<?php 

foreach ($_POST as $key => $value) {
    $statement = $pdo->prepare(
        "DELETE FROM todo WHERE id = " . $value
    );
    $statement->execute();
    //echo "DELETE FROM todo WHERE id = " . $value;
}