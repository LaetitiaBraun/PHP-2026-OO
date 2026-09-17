<?php
require_once "Animal.php";
require_once "Chien.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body>
    <pre><code>$animal = new Animal("LaChose");
echo "Mon animal se nomme ".$animal->getName();
echo $animal->manger();
echo $animal->crier();</code></pre>
    <?php
    $animal = new Animal("LaChose");
    echo "Mon animal se nomme ".$animal->getName();
    echo "<br>".$animal->manger();
    echo "<br>".$animal->crier();

    var_dump($animal);
    ?>
    <hr>
    <pre><code>$chien = new Chien("Rex");
echo "Mon chien se nomme ".$chien->getName();
echo $chien->manger();
echo $chien->aboyer();
echo $chien->crier();</code></pre>
    <?php
    $chien = new Chien("Rex");
    echo "Mon animal se nomme ".$chien->getName();
    echo "<br>".$chien->manger();
    echo "<br>".$chien->aboyer();
    echo "<br>".$chien->crier();

    var_dump($chien);
    ?>
</body>
</html>