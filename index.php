<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>TODOLIST</title>

    <style>
        .line-through {
            text-decoration: line-through;
        }
    </style>
</head>
<body>
        <div id="app"  class="text-bg-dark vh-100">
            <header class="text-center py-5">
                <h1 class="display-1">TODOLIST JSON</h1>
            </header>
            <main>
      <div class="container">

        <ul class="list-group my-5">
          <li v-for="(todo,index) in todoList" class="list-group-item" :class="todo.done?'line-through':''"> {{todo.task}} </li>
        </ul>

        <div class="row row-cols-lg-auto g-3 align-items-center justify-content-center">

          <div class="col flex-grow-1">
            <input v-model="todoItem.text" type="text" class="form-control" id="newItemInput" placeholder="Inserisci un nuovo todo" @keyup.enter="addTodoCheck">
          </div>

          <div class="form-check col">
            <input class="form-check-input" type="checkbox" id="newTodoCheck" v-model="todoItem.done">
            
          </div>

          <div class="col">
            <button type="button" class="btn btn-primary" @click="addTodoCheck">Inserisci</button>
          </div>

        </div>

      </div>
    </main>
        
        </div>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.6/axios.min.js" integrity="sha512-06NZg89vaTNvnFgFTqi/dJKFadQ6FIglD6Yg1HHWAUtVFFoXli9BZL4q4EO1UTKpOfCfW5ws2Z6gw49Swsilsg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src='main.js'></script>
    
</body>
</html>