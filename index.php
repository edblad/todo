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
        <h1>Att göra</h1>
    </header>
    
    <main>
    <form action="index.php" method="POST">
       <label for="title">Syssla:&nbsp;</label><input type="text" name="title"><br />
       <label for="createdBy">Namn:&nbsp;</label><input type="text" name="createdBy"><br />
       <input type="submit" value="Lägg till" class="btn btn-success">
    </form>
    <br /><br />
    <form action="index.php" method="POST">
        <?php foreach($todos as $do_this){ ?>

            <input type="checkbox" name="<?= $do_this["id"]; ?>" id="<?= $do_this["id"]; ?>" value="<?= $do_this["id"]; ?>">
            <label for="<?= $do_this["id"]; ?>"><?= $do_this["title"]; ?></label>
            <br />

        <?php } ?>
        <input type="submit" value="Ta bort" name="delete" class="btn btn-success">
    </form>

    <div class="done">
        <h2>Klart</h2>
        <?php
        
        
        ?>
        
        <?php //var_dump($_POST);?>
    </div>
   </main>
   
</div>


<?php require 'parts/foot.php'; ?>