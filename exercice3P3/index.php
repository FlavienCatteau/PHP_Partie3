<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Exercice3P3</title>
    </head>
    <body>
        <header>
            <div class="jumbotron text-center">
                <h1 class="display-3 text-center">Exercice 3 partie 3</h1>
                <p class="lead text-center">Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris entre 1 et 100.</p>
                <p class="lead text-center">Tant que la première variable n'est pas inférieure ou égale à 10 :</p>
                <ol>
                    <li>multiplier la première variable avec la deuxième</li>
                    <li>afficher le résultat</li>
                    <li>décrémenter la première variable</li>
                </ol>
            </div>
        </header>
        <main>
            <div class="php text-center">
                <?php
                    //déclaration des deux variables
                    $myFirst = 100;
                    $mySecond = 50;
                    //début de la boucle
                    while ($myFirst >= 10) {
                        //affichage de la boucle de 100 a 10
                        echo $myFirst * $mySecond . '<br/>';
                        $myFirst--;
                    }
                ?>
            </div>
        </main>
    </body>
</html>
