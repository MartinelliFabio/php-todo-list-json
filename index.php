<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==' crossorigin='anonymous' referrerpolicy='no-referrer' />
    <script src='https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js'></script>
    <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
    <script src='./js/script.js' defer></script>
    <link rel='stylesheet' href='./css/style.css'>
    <title>Todo List</title>
</head>
<body>
    <div id="app">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center form-container">
                <h1 class="display-1">Todo List</h1>
                <div class="form">
                    <ul class="d-flex flex-column">
                        <li v-for="(item, index) in list" class="todo" :class="item.done ? 'done' : ''" @click="taskDone(index)">
                            {{ item.text }} 
                            <span class="icon float-end" @click.stop="deleteTask(index)">
                                <i class="fa-solid fa-trash float-end"></i>
                            </span>
                        </li>
                    </ul>
                <div>
                    <input type="text" v-model="newTask" placeholder="Scrivi il Task..." name="newTask" @keyup.enter='send()'>
                    <button class="button" @click='send()'>Inserisci</button>
                </div>
                </div>
                
            </div>
        </div>
    </div>
</body>
</html>