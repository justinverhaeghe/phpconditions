<?php
$age = 34;

if ($age < 0 || $age > 100) {
    $message = 'Entrez un âge valide';
} else {
    if ($age >= 18) {
        $message = 'Vous êtes majeur';
    } else {
        $message = 'Vous êtes mineur';
    }
}

?>

<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Handjet:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/assets/css/style.css">
    <title>PHP Conditions - Exercice 1</title>
</head>
<!-- Header -->

<body>
    <header class="d-flex flex-column justify-content-center align-items-center text-light">
        <h1>PHP Conditions</h1>
        <h2>Exercice 1</h2>
    </header>
    <main>
        <!-- Consigne de l'exercice -->
        <div class="d-flex justify-content-center pt-5">
            <p>Consigne : Créer une variable age et l'initialiser avec une valeur.
                Si l'âge est supérieur ou égale à 18, afficher Vous êtes majeur. Dans le cas contraire, afficher Vous
                êtes mineur.
            </p>
        </div>
        <hr>
        <!-- Réponse -->
        <div class="d-flex justify-content-center ">
            <p>
                <?= $message ?>
            </p>
        </div>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
        </script>
</body>

</html>