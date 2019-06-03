<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Exercice7P3</title>
    </head>
    <body>
        <header>
            <div class="jumbotron text-center">
                <h1 class="display-3 text-center">Exercice 7 partie 3</h1>
                <p class="lead text-center">En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout.</p>
            </div>
        </header>
        <main>
            <div class="php text-center">
                <?php
                    //déclaration de la variable
                    $myVariable = 1;
                    //début de la boucle
                    while ($myVariable <= 100) {
                    //affichage de la boucle
                    echo $myVariable . 'On tient le bon bout.' . '<br/>';
                    $myVariable+= 15;
                    }
                    echo $myVariable;
                ?>
            </div>
        </main>
    </body>
</html>
