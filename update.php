<?php
    if(isset($_POST['archive']) && ($_POST['check'])){

        $task = $_POST['check'];

        $todo = file_get_contents("todo.json");
        //--Récupérer le fichier JSON

        $decode = json_decode($todo, true);
        //--Décoder le fichier JSON en PHP

        $decode[] = array("name" => $task, "statut" => false);
        //Créer un tableau en php avec le même nom de variable au-dessus
        //you can turn PHP into JSON with json_encode()

        file_put_contents("todo.json", json_encode($decode), LOCK_EX);
    }

       

?>