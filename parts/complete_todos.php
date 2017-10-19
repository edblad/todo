<?php
//
////$statement = $pdo->prepare(
////    "SELECT INTO todo (completed) 
////    VALUES (:completed)"
////);
////
////$statement->execute(array(
////    ":completed" => $_POST["completed"]
////));
//
//if($_POST["delete"]){
//    $todelete = $_POST['deletetask']; 
//    
//    $statement = $pdo->prepare(
//        "DELETE FROM todo WHERE id = :id"
//    );
//
////    $delete_id = $_POST['name'];
////    $nc = count($delete_id);
////    
////    for($i=0; $i<$nc; $i++){
////        
////        $did = $delete_id[$i];
////        $statement->bindParam(":id", $did, PDO::PARAM_INT); 
////    }
//        
////    foreach ($_POST as $key => $value) {
////        $statement->bindParam(":id", $value, PDO::PARAM_INT); 
////    }
//    
//    foreach ($todelete['deletetask'] as $id){
//        $statement->bindParam(":id", $id, PDO::PARAM_INT); 
//        $statement->execute($id);
//    }
//}