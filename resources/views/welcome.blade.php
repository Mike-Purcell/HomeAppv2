<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home App</title>
        <link rel="stylesheet" type="text/css" href="css/app.css">
        <script src="https://kit.fontawesome.com/0d6ad6dcf2.js" crossorigin="anonymous" async></script>
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js" async></script>
    </head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="navbar-brand">
            <i class="fas fa-home fa-2x navbar-text"></i>
            <div class="h1 navbar-text">Home App</div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-9">
                <div class="h3 text-center text-info">Calendar</div>
            </div>
            <div class="col-3">
                <div class="h3 text-center text-info">Shopping list</div>
                <div id="list">
                    <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center" v-for="item in items" v-text="item"><span class="badge badge-dark badge-pill">14</span></li>
                    </ul>
                    <br>
                    <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                            <button class="input-group-text" type="button" id="inputGroup-sizing-sm" @click="addName">Add item</button>
                        </div>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" id="input" v-model="newItem">
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Recipient's Email" aria-label="Recipient's Email" aria-describedby="button-addon2">
                        <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
        <div class="row">
            <div class="col">
            <div class="h3 text-center text-info">Weather</div>
            </div>
            <div class="col">
            <div class="h3 text-center text-info">Links</div>
            </div>
        </div>      
    </div>

    <script>
        var app = new Vue({
            el: '#list',
            data: {
                newItem: '',
                items: ['Meat', 'Veg', 'Fruit', 'Soap']
            },
            methods: {
                addName() {
                    this.items.push(this.newItem);
                    this.newItem = '';
                }
            }
        })
    </script>
</body>
</html>