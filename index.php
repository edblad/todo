<?php

require 'parts/head.php';
require 'parts/database.php';
require 'parts/fetch_todos.php';
require 'parts/add_todos.php';
require 'parts/delete_todos.php';
?>


   
<header>
    <h1>Att-göra-lista</h1>
</header>

<main>
    <div class="add_new">
        <h2>Lägg till ny uppgift</h2>
           <?php
            foreach($todos as $do_this){
               if(isset($_GET["id"]) && ($_GET["id"] == $do_this["id"])){
                    echo "<div class='added_task_message'>Du har lagt till en ny uppgift!</div>";
                }
            }
           ?>
        <form action="parts/add_todos.php" method="POST">
           <span class="new">
               <label for="title">Att göra:&nbsp;</label>
               <input type="text" name="title" id="title">
            </span>
           <span class="new">
               <label for="createdBy">Skapad av:&nbsp;</label>
               <input type="text" name="createdBy" id="createdBy">
            </span>
            <br />
           <input type="submit" value="Lägg till" name="add" class="btn btn-success">
        </form>
    </div>

    <br /><br />

    <div class="todo">
        <h2>Att göra</h2>
        <form action="parts/delete_todos.php" method="POST">
            <?php 
            foreach($todos as $do_this):
                if($do_this["completed"] == 0): ?>
                    <input type="checkbox" name="<?= $do_this["title"]; ?>" id="<?= $do_this["id"]; ?>" value="<?= $do_this["id"]; ?>">
                    <label for="<?= $do_this["id"]; ?>"><?= $do_this["title"]; ?><span class="byline"> &ndash; <?= $do_this["createdBy"]; ?></span></label>
                    <br />
            <?php 
            endif; 
            endforeach; 
            ?>
            <input type="submit" value="Klart" name="done" class="btn btn-success">
        </form>
   </div>

    <div class="done">
        <h2>Klart</h2>

       <form action="parts/delete_todos.php" method="POST">
        <?php foreach($todos as $do_this): 
            if($do_this["completed"] == 1): ?>
                <input type="checkbox" name="<?= $do_this["title"]; ?>" id="<?= $do_this["id"]; ?>" value="<?= $do_this["id"]; ?>">
                <label for="<?= $do_this["id"]; ?>"><?= $do_this["title"]; ?></label>
                <br />
            <?php
            endif; 
            endforeach; 
            ?>
            <input type="submit" value="Ta bort" name="delete" class="btn btn-danger">
        </form>
    </div>
</main>



<?php require 'parts/foot.php'; ?>