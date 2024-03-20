<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi-Json</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- css -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- vue 3 -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    
    <div id="app">

        <header>
            <div class="container">
                <img src="https://i0.wp.com/brandingforum.org/wp-content/uploads/2023/10/Spotify-logo-500x281-1.png?resize=500%2C281&ssl=1" alt="logo">
            </div>
        </header>

        <main>
            <div class="container text-white">
                <div class="row">

                    <div class="col-4 card" v-for="currentDisco in dischiList">
                        <img :src="currentDisco.poster" alt="poster">
                        <h2>
                            {{currentDisco.title}}
                        </h2>
                        <h3>
                            {{currentDisco.author}}
                        </h3>
                        <h2>
                            {{currentDisco.year}}
                        </h2>
                    </div>
                </div>
            </div>
        </main>


    </div>



    <!-- js -->
    <script src="./js/main.js"></script>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>