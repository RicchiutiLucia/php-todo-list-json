<?php

$todoList = [
                        
                    [
                        "task" => "Ritirare in negozio la nuova tavola da surf",
                        "done"=> false
                    ],
                    [
                        "task"=> "Comprare il regalo per la laurea di Giovanna",
                        "done"=> true
                    ],
                    [
                        "task"=> "Prenotare un viaggio post corso",
                        "done"=> true
                    ],
                    [
                        "task"=> "Aggiustare vetrino iPhone prima che mi si rompe del tutto",
                        "done"=> false
                    ],
                    [
                        "task"=> "Fare la spesa",
                        "done"=> true
                    ],
                    

            ];
                    
                    
                    
if (isset($_POST['todoItem'])) {
        $todoList[] = $_POST['todoItem'];
}


header('Content-Type: application/json');
echo json_encode($todoList);