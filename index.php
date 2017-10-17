<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Inlämningsuppgift 2 - Helena Edblad</title>
</head>
<body>
    <?php
    
    require 'parts/database.php';
    require 'parts/fetch_todos.php';
    
    foreach($todos as $do_this){ 
        
        echo $do_this["title"]; 

    }
   
   
    ?>
</body>
</html>