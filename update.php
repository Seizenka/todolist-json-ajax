<?php

       //Formulaire  "rajouter une tâche" et le bouton "ajouter"
       if (isset($_POST['ajout']) && !empty($_POST['tache'])) {
                
               $task = $_POST['tache'];
               echo $task;
               //trim
            //    $task = trim($_POST['tache']);
            //    //sanitize
            //    $sanitisation = array(
            //    'tache' => FILTER_SANITIZE_STRING, FILTER_SANITIZE_FULL_SPECIAL_CHARS,
            //    );
            //    $result = filter_input_array(INPUT_POST, $sanitisation);
            //    echo $result;
            //    //JSON champ du formulaire "rajouter une tâche"

               $todo = file_get_contents("todo.json");
               //--Récupérer le fichier JSON

               $decode = json_decode($todo, true);
               //--Décoder le fichier JSON en PHP

               $decode[] = array("name" => $task, "statut" => true);
               //Créer un tableau en php avec le même nom de variable au-dessus
               //you can turn PHP into JSON with json_encode()

               file_put_contents("todo.json", json_encode($decode), LOCK_EX);
}


?>