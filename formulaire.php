<?php        
        
        $todo = file_get_contents('todo.json'); //Chargement du fichier todo.json pour le formulaire

                $decode = json_decode($todo, true);

                foreach ($decode as $task) {
                        echo '<input name="check" type="checkbox" value="' . $task['tache'] . '">' . $task['tache'] . '';
                    }
?>