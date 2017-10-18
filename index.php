<?php
require 'parts/head.php';
require 'parts/database.php';
require 'parts/fetch_todos.php';
?>

<div class="wrapper">
   
    <header>
        <h1>Att göra</h1>
    </header>
    
    <main>
    <form action="index.php" method="POST">
        <?php foreach($todos as $do_this){ ?>

            <input type="checkbox" name="<?= $do_this["title"]; ?>" id="<?= $do_this["id"]; ?>">
            <label for="<?= $do_this["id"]; ?>"><?= $do_this["title"]; ?></label>
            <br />

        <?php } ?>
        <input type="submit" value="Avklarat" class="btn btn-success">
    </form>

    <div class="done">
        <h2>Klart</h2>
        <?php 
        
        foreach($_POST as $done){
            echo $done;
            echo "<br />";
        }
        ?>
        
        <?php var_dump($_POST);?>
    </div>
   </main>
   
</div>


<?php require 'parts/foot.php'; ?>