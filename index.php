<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'>
    <link rel='stylesheet' href='./css/style.css'>
    <script src='https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js'></script>
    <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
    <script src='./js/script.js' defer></script>
    <title>Todo List</title>
</head>
<body>
    <div id="app">
        <div class="container">
            <h1>TodoList</h1>
            <div>
                <ul>
                    <li v-for="(item, index) in list">{{ item }}</li>
                </ul>
            </div>
            <input type="text" v-model="newTask">
            <button class="btn btn-primary" @click='send()'>Invia</button>
        </div>
    </div>
</body>
</html>