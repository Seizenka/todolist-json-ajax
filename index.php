<?php
    include 'update.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Todo-List Ajax</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/style.css" />
    
</head>
<body>
    <!--les tâches à enregistrer représentées dans un premier bloc -->
    <fieldset class="btn">
<!-- modif formulaire en index-->
        <form id="index" action="index.php" method="POST">
            
            <h1> Ma todolist !</h1>
                <h2>Tâches à faire :</h2>
                <div id="task" class="dropper"></div>
          
            <input class="sup" type="submit" value="supprimer" name="supprimer">
            <input class="archive" type="submit" value="archive" name="archive">
            <p></p>
        </form>
    </fieldset>

    <!-- Les tâches arrivées dans un deuxième bloc-->
    <fieldset class="dropper">
        <h2>Tâches accomplies :</h2>
        <div id="archive" class="dropper2"></div>
    </fieldset>


    <!-- Les tâches à entrer dans un troisième bloc-->
    <fieldset class="form">
        <form action="index.php" method="POST">
            <label for="task">La tâche à ajouter</label>
            <input class="rajout" name="tache" type="text" required placeholder="rajouter une tâche">
            <input class="ajout" type="submit" value="ajouter" name="ajout">
        </form>
    </fieldset>


    <script src="assets/js/app.js"></script>
</body>
</html>