<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo-list</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,600;0,700;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing: border-box;
        }
        body{
            background-image: linear-gradient(120deg,#e2c35d, #d88771);
            color:white;
            font-family: 'Poppins', sans-serif;
            min-height:100vh;
        }
        header{
            font-size:1.5rem;
        }
        header,form{
            min-height:20vh;
            display:flex;
            justify-content: center;
            align-items: center;
        }
        form input, form button{
            padding:0.5rem;
            font-size:2rem;
            border:none;
            background: white;
        }
        form button{
            color:#d88771;
            cursor:pointer;
            background: white;
            transition:all 0.3s ease;
        }
        form button:hover{
            background: #d88771;
            color:white;
        }

        .todo-container{
            display:flex;
            justify-content: center;
            align-items: center;
        }
        .todo-list{
            min-width:30%;
            list-style: none
        }
        .todo{
            margin:0.5rem;
            background-color: white;
            color:black;
            font-size:1.5rem;
            display:flex;
            justify-content: space-between;
            align-items: center
            transition:all 0.5s ease;
        }
        .todo li{
            flex:1;
        }
        .trash-btn,.complete-btn{
            background: #ff6f47;
            border:none;
            color:white;
            cursor:pointer;
            font-size:1rem;
            padding:1rem;
        }
        .complete-btn{
            background: green;
        }
        .todo-item{
            padding:0rem 0.5rem;
        }
        .fa-trash,.fa-check{
            pointer-events: none;
        }
        .completed{
            text-decoration: line-through;
            opacity: 0.5;
        }
        .fall{
            transform:translateY(8rem) rotateZ(20deg);
            opacity:0;
        }
        select{
            -webkit-appearance: none;
            -moz-appearance:none;
            appearance: none;
            outline:none;
            border:none;
        }

        .select{
            margin:1rem;
            position:relative;
            overflow:hidden;
        }
        select{
            color:#ff6f47;
            width:10rem;
            cursor:pointer;
            padding:1rem;
        }
        .select::after{
            content:"\25BC";
            position:absolute;
            background: #ff6f47;
            top:0;
            padding:0;
            pointer-events:none;
            transition:all 0.3s ease;
        }
  
    </style>
</head>
<body>
    <header>
        <h1>Rebecca's Todo List</h1>
    </header>
    <form>
        <input type="text" class="todo-input">
        <button class="todo-button" type="submit">
            <i class="fas fa-plus-square"></i>
        </button>
        <div class="select">
            <select name="todos" class="filter-todo">
                <option value="all">All</option>
                <option value="completed">Completed</option>
                <option value="uncompleted">Uncompleted</option>
            </select>
        </div>
        
    </form>
    <div class="todo-container">
        <ul class="todo-list">
          
        </ul>
    </div>




    <script>
        //selectore
        const todoInput = document.querySelector('.todo-input');
        const todoButton = document.querySelector('.todo-button');
        const todoList = document.querySelector('.todo-list');
        const filterOption = document.querySelector('.filter-todo');
        //event listener
        todoButton.addEventListener('click',addTodo);
        todoList.addEventListener('click', deleteCheck);
        filterOption.addEventListener('click',filterTodo);
        //function
        function addTodo(event){
            //Prevent form from submitting
            event.preventDefault();

            //todo div
            
            const todoDiv = document.createElement('div');
            todoDiv.classList.add('todo');
            //todo list
            const newTodo = document.createElement('li');
            newTodo.innerText = todoInput.value;
            newTodo.classList.add('todo-item');
            todoDiv.appendChild(newTodo);

            //button - checked one
            const completedButton = document.createElement('button');
            completedButton.innerHTML = '<i class="fas fa-check"></i>';
            completedButton.classList.add('complete-btn');
            todoDiv.appendChild(completedButton);

            //trash button
            const trashButton = document.createElement('button');
            trashButton.innerHTML = '<i class="fas fa-trash"></i>';
            trashButton.classList.add('trash-btn');
            todoDiv.appendChild(trashButton);

            //append to list
            todoList.appendChild(todoDiv);

            //Clear todo input value
            todoInput.value="";
        }

        function deleteCheck(e){
            const item = e.target;
            //delete to
            if(item.classList[0]==="trash-btn"){
              const todo = item.parentElement;
              //animation
              todo.classList.add("fall");
              todo.addEventListener('transitioned', function(){
                  todo.remove();
              });
     
            }

            //check mark
            if(item.classList[0]==='complete-btn'){
                const todo = item.parentElement;
                todo.classList.toggle("completed");
            }
        }

        function filterTodo(e){
           const todos = todoList.childNodes;
           todos.forEach(function(todo){
               switch(e.target.value){
                    case "all":
                        todo.style.display = "flex";
                        break;
                    case "completed":
                        if(todo.classList.contains("completed")) {
                            todo.style.display = "flex";
                        }  else{
                            todo.style.display = "none";
                        }
                        break;
                    case "uncompleted":
                        if(!todo.classList.contains('completed')){
                            todo.style.display="flex";
                        }   else{
                            todo.style.display = "none";
                        } 
                 
               }
           })
        }

        

    </script>
</body>
</html>