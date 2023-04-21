<?php
if(file_exists('todolist.json')){
    $todoList = json_decode(file_get_contents('todolist.json'), true);

}else{
    $todoList =[];
}

                    
                    
if (isset($_POST['todoItem']) && !empty($_POST['todoItem'])) {
        $todoList[] = ['task' => $_POST['todoItem'], 'done' => false,];
        file_put_contents('todolist.json', json_encode($todoList));
}

if(isset($_POST['updateTask']) && !empty($_POST['updateTask']) && isset($_POST['listIndex']) && !empty($_POST['listIndex'])){
    $todoList[$_POST['listIndex']]['state'] = $_POST['updateTask'];
    file_put_contents('todolist.json', json_encode($todoList));
}


header('Content-Type: application/json');
echo json_encode($todoList);