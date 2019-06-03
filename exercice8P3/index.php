<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Exercice8P3</title>
    </head>
    <body>
        <header>
            <div class="jumbotron text-center">
                <h1 class="display-3 text-center">Exercice 8 partie 3</h1>
                <p class="lead text-center">En allant de 200 à 0 avec un pas de 12, afficher le message Enfin !!!!.</p>
            </div>
        </header>
        <main>
            <div class="php text-center">
                <?php
                    //déclaration de la variable
                    $myVariable = 200;
                    //début de la boucle
                    while ($myVariable >= 0) {
                    //affichage de la boucle
                    echo $myVariable . 'ENFIN !!!' . '<br/>';
                    $myVariable-= 12;
                    }
                    echo $myVariable;
                ?>
            </div>
        </main>
    </body>
</html>
