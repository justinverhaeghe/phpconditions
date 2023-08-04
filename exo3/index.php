<?php
$age = 34;
$gender = 'homme';

if (($age >= 18) && ($gender == 'homme')) {
    $result = 'Vous êtes un homme et vous êtes majeur';
} else if (($age >= 18) && ($gender == 'femme')) {
    $result = 'Vous êtes une femme et vous êtes majeure';
} else if (($age <= 18) && ($gender == 'femme')) {
    $result = 'Vous êtes une femme et vous êtes mineure.';
} else if (($age <= 18) && ($gender == 'homme')) {
    $result = 'Vous êtes un homme et vous êtes mineur';
} else {
    $result = 'Erreur, entrez une donnée valide';
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
    <title>PHP Conditions - Exercice 3</title>
</head>
<!-- Header -->

<body>
    <header class="d-flex flex-column justify-content-center align-items-center text-light">
        <h1>PHP Conditions</h1>
        <h2>Exercice 3</h2>
    </header>
    <main>
        <!-- Consigne de l'exercice -->
        <div class="p-3">
            <p>Consigne : Créer deux variables age et gender. La variable gender peut prendre comme valeur :</p>
            <ul>
                <li>Homme</li>
                <li>Femme</li>
            </ul>
            <p>En fonction de l'âge et du genre afficher la phrase correspondante :</p>
            <ul>
                <li>Vous êtes un homme et vous êtes majeur</li>
                <li>Vous êtes un homme et vous êtes mineur</li>
                <li>Vous êtes une femme et vous êtes majeure</li>
                <li>Vous êtes une femme et vous êtes mineur</li>
            </ul>
            <p>Gérer tous les cas.</p>

        </div>
        <hr>
        <!-- Réponse -->
        <div class="d-flex justify-content-center ">
            <p>
                <?= $result ?>
            </p>
        </div>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
        </script>
</body>

</html>