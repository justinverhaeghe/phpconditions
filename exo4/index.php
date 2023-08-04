<?php
$magnitude = 9;
switch ($magnitude) {
    case 1:
        $result = "Magnitude $magnitude, Micro-séisme impossible à ressentir.";
        break;

    case 2:
        $result = "Magnitude $magnitude, Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
        break;

    case 3:
        $result = "Magnitude $magnitude, Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
        break;

    case 4:
        $result = "Magnitude $magnitude, Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
        break;

    case 5:
        $result = "Magnitude $magnitude, Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
        break;

    case 6:
        $result = "Magnitude $magnitude, Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
        break;

    case 7:
        $result = "Magnitude $magnitude, Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
        break;
    case 8:
        $result = "Magnitude $magnitude, Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
        break;
    case 9:
        $result = "Magnitude $magnitude, Séisme capable de tout détruire sur une très vaste zone.";
        break;
    default:
        $result = 'Erreur de saisie';
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
    <title>PHP Conditions - Exercice 4</title>
</head>
<!-- Header -->

<body>
    <header class="d-flex flex-column justify-content-center align-items-center text-light">
        <h1>PHP Conditions</h1>
        <h2>Exercice 4</h2>
    </header>
    <main>
        <!-- Consigne de l'exercice -->
        <div class="p-5">
            <p>Consigne : L'échelle de Richter est un outil de mesure qui permet de définir la magnitude de moment d'un
                tremblement de terre. Cette échelle va de 1 à 9.
                Créer une variable magnitude. Selon la valeur de magnitude, afficher la phrase correspondante.</p>

        </div>
        <hr>
        <!-- Réponse -->
        <div class="text-center ">
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