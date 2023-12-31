<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Esercizio</title>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js" defer></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="./script.js" defer></script>
    <link rel="stylesheet" href="./style.css" />
</head>

<body>
    <div id="app">
        <header>
            <div class="container">
                <img src="./img/logo-small.svg" alt="" class="logo-small" />
            </div>
        </header>
        <main>
            <div class="container my-5">
                <div class="row">
                    <div v-for="disco in dischi" class="col-4 g-3">
                        <div class="card d-flex direction-column align-items-center">
                            <div class="card-img">
                                <img :src="disco.poster" alt="" />
                            </div>
                            <div>
                                <div class="title">{{disco.title}}</div>
                                <div class="author">{{disco.author}}</div>
                                <div class="year">{{disco.year}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>