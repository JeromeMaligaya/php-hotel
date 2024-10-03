<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

?>


<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Melvin Jerome Luna Maligaya">
    <title>php-hotel</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <main class="m-5">
        <div class="container">
            <h1 class="text-center mb-4">php-hotel</h1>
            <section>
                <ul class="list-unstyled row justify-content-center flex-wrap">
                    <?php foreach ($hotels as $hotel) { ?>
                        <li class="mb-5 col-5">
                            <div class="card w-100" style="width: 18rem;">
                                <div class="card-header">
                                    <h2><?php echo $hotel["name"]; ?></h2>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <p><?php echo $hotel["description"]; ?></p>
                                    </li>
                                    <li class="list-group-item">
                                        <p>Parcheggio:
                                            <span><?php echo $hotel["parking"] ? 'Disponibile' : 'non disponibile'; ?></span>
                                        </p>
                                    </li>
                                    <li class="list-group-item">
                                        <p>Voto:
                                            <span><?php echo $hotel["vote"]; ?></span>
                                        </p>
                                    </li>
                                    <li class="list-group-item">
                                        <p>Distanza dal centro:
                                            <span><?php echo $hotel["distance_to_center"]; ?> km</span>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            </section>
        </div>
    </main>

    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>