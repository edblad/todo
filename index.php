<?php

require 'parts/head.php';
require 'parts/database.php';
require 'parts/fetch_todos.php';
require 'parts/add_todos.php';
//require 'parts/complete_todos.php';
require 'parts/delete_todos.php';
?>

<div class="wrapper">
   
    <header>
        <h1>Att-göra-lista</h1>
    </header>
    
    <main>
        <div class="add_new">
            <h2>Lägg till ny</h2>
            <div class="added_task_message">
               <?php

               if(isset($_POST["title"])){
                   echo "YAY!";
               }

               ?>
            </div>
            <form action="parts/add_todos.php" method="POST">
               <span class="new"><label for="title">Syssla:&nbsp;</label><input type="text" name="title"></span><br />
               <label for="createdBy">Skapad av:&nbsp;</label><input type="text" name="createdBy"><br />
               <input type="submit" value="Lägg till" name="add" class="btn btn-success">
            </form>
        </div>

        <br /><br />
        
        <div class="todo">
            <h2>Att göra</h2>
            <form action="parts/delete_todos.php" method="POST">
                <?php foreach($todos as $do_this){ 

                    if($do_this["completed"] == 0){
                   ?>
                        <input type="checkbox" name="<?= $do_this["id"]; ?>" id="<?= $do_this["id"]; ?>" value="<?= $do_this["id"]; ?>">
                        <label for="<?= $do_this["id"]; ?>"><?= $do_this["title"]; ?></label>
                        <br />

                <?php }} ?>

                <input type="submit" value="Klart" name="done" class="btn btn-success">
            </form>
       </div>
       
        <div class="done">
            <h2>Klart</h2>

           <form action="parts/delete_todos.php" method="POST">
            <?php foreach($todos as $do_this){ ?>
                
                <?php 
                if($do_this["completed"] == 1){ ?>
                    <input type="checkbox" name="<?= $do_this["id"]; ?>" id="<?= $do_this["id"]; ?>" value="<?= $do_this["id"]; ?>">
                    <label for="<?= $do_this["id"]; ?>"><?= $do_this["title"]; ?></label>
                    <br />
                <?php } ?>
                
            <?php } ?>
            <input type="submit" value="Ta bort" name="delete" class="btn btn-danger">
            </form>
        </div>
   </main>
   
</div>


<?php require 'parts/foot.php'; ?>