<?php
if(file_exists('todolist.json')){
    $todoList = json_decode(file_get_contents('todolist.json'), true);

}else{
    $todoList =[
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
}

                    
                    
if (isset($_POST['todoItem']) && !empty($_POST['todoItem'])) {
        $todoList[] = ['task' => $_POST['todoItem'], 'done' => false,];
        

       

        if(( isset($_POST['index']))){
            array_splice($todoList,$_POST['index'],1);
        
        }

        file_put_contents('todolist.json', json_encode($todoList));
       
  
}elseif((isset($_POST['updateTask']) && !empty($_POST['updateTask']) && isset($_POST['listIndex']) && !empty($_POST['listIndex']) )){
        $todoList[$_POST['listIndex']]['done'] = $_POST['updateTask'];

        file_put_contents('todolist.json', json_encode($todoList));

}elseif((isset($_POST['delete']))) {
    $index = $_POST['delete'];
    array_splice($todoList,$index,1);
    file_put_contents('todolist.json', json_encode($todoList));

}






header('Content-Type: application/json');
echo json_encode($todoList);