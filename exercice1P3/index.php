<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Exercice1P3</title>
    </head>
    <body>
        <header>
            <div class="jumbotron text-center">
                <h1 class="display-3 text-center">Exercice 1 partie 3</h1>
                <p class="lead text-center">Créer une variable et l'initialiser à 0.</p>
                <p class="lead text-center">Tant que cette variable n'atteint pas 10, il faut :</p>
                <ol>
                    <li>l'afficher</li>
                    <li>l'incrementer</li>
                </ol>
            </div>
        </header>
        <main>
            <div class="php text-center">
                <?php
                //déclaration de ma variable
                $myVariable = 0;
                //début de la boucle jusqu'au chiffre 10
                while ($myVariable <= 10) {
                    //affichage de la boucle a la ligne
                    echo $myVariable . '<br/>';
                    $myVariable++;
                }
                ?>
            </div>
        </main>
    </body>
</html>
