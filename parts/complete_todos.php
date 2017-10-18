<?php

/* The first parantheses are the columns you want to insert into. The second
 * parantheses are the placeholders for the values you want to insert. So the
 * statement isn't populated until the 'execute'-function runs. We don't need
 * to supply ID because that is created automatically.
 */
$statement = $pdo->prepare(
    "INSERT INTO todos (completed) 
    VALUES (:completed)"
);
/* 
 * In the execute statement you insert the actual values from your form submit. 
 * The argument to 'execute()' is an associative array. The keys are the 
 * placeholders from the prepared statement and the values are the ones from
 * the form
 */
$statement->execute(array(
    ":completed" => $_POST["completed"]
));