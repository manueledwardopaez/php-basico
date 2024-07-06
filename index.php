<?php
const API_URL = "https://whenisthenextmcufilm.com/api";

//Si solo queremos hacer un GET de un API podemos usar:
//$result = file_get_contents(API_URL);

#Inicializar una nueva sesion de curl; ch = CURL handle
$ch = curl_init(API_URL);

//Indicar que queremos recibir un resultado de la peticion y no mostrarla en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//Ejecutar la peticion y guardamos el resultado
$result = curl_exec($ch);
$data = json_decode($result, true);

curl_close($ch);



?>




<head>
    <title>La Proxima Pelicula de Marvel</title>
    <link rel="icon" href="https://www.marvel.com/static/favicon/favicon.ico" type="image/x-icon" sizes="16x16 32x32">
    <!-- Centered viewport -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css" />
</head>


<main>
    <section>
        <h2>La Proxima Pelicula de Marvel</h2>
        <img src="<?= $data["poster_url"] ?>" alt="Poster de  <?= $data["title"] ?>" width="300px" style="border-radius: 16px">
    </section>

    <hgroup>

        <h3><?= $data["title"] ?> se estrena en <?= $data["days_until"] ?>  dias</h3>
        <p>Fecha de estreno: <?= $data["release_date"] ?></p>
        <p>La siguiente es: <?= $data["following_production"]["title"] ?></p>
    </hgroup>

</main>




<style>
    :root {
        color-scheme: light-dark;
    }

    body {
        display: grid;
        place-content: center;
      /*   background: black;
        color: white; */
    }

    section {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    hgroup {
        text-align: center;
    }


</style>