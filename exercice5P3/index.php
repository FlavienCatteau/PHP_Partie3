<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Exercice5P3</title>
    </head>
    <body>
        <header>
            <div class="jumbotron text-center">
                <h1 class="display-3 text-center">Exercice 5 partie 3</h1>
                <p class="lead text-center">En allant de 1 à 15 avec un pas de 1, afficher le message On y arrive presque.</p>
            </div>
        </header>
        <main>
            <div class="php text-center">
                <?php
                    //déclaration de la variable
                    $myVariable = 1;
                    //début de la boucle
                    while ($myVariable <= 15) {
                    //affichage de la boucle
                    echo $myVariable . 'On y arrive presque' . '<br/>';
                    $myVariable++;
                    }
                    echo $myVariable;
                ?>
            </div>
        </main>
    </body>
</html>
