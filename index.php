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
            <h1 class="text-center mb-5">Form Hotels</h1>
            <form action="process.php" method="GET">
                <div class="mb-3">
                    <label for="parking" class="form-label">Parcheggio:</label>
                    <select name="parking" id="parking" class="form-select">
                        <option selected disabled>scegli un opzione</option>
                        <option value="all">Tutti</option>
                        <option value="available">Disponibile</option>
                        <option value="not_available">Non Disponibile</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Cerca</button>
            </form>
        </div>
    </main>

    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>