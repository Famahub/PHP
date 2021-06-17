<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 2 PHP</title>
</head>
<body>
<p>Exercice 1</p>
<p>Créez une boucle qui affiche les nombres de 0 à 10.</p>
<?php
            $number = 0;
            while($number <= 10){
            echo $number++ ;
            }
            ?>
    

         <!-- Exemple JP
    $number = 0;
    while($number <= 10){ 
     ?>
    <p><?= $number ?></p>
    ?php> $number++ ;
    }
    ?>
         -->

<p>Exercice 2</p>
<p>Créez deux variables. L\une initialisée à 0 et l\autre avec un nombre aléatoire de 1 à 100. Tant que la variable n\a pas atteint 20, multiplier la première variable par la deuxième est afficher le résultat.<p>
<?php
$numb = 0;
$ramdom = 40;
$result = $numb * $ramdom;

if($numb <= 20){
    echo $numb ;

}else{
    echo $result ;
}
?>

<p>Exercice 3</p>
 <p>Créez une variable initialisé à 1. Tant que cette variable n\a pas atteint 15, affichez On y est presque.</p>
 <?php
for($number=1; $number <= 15; $number++){
    if($number !=15){
        echo 'On y est presque';
}else{
    echo 'On a atteint';
}
echo $number. '<br>';
    }
    
?>
<p>Exercice 4</p>
<p>Initialisez une variable à 1. Tant que cette variable est inférieure à 100, incrémentez avec un pas de 15.</p>
<?php
// Ma variable number est iniatialisé à 1 ; ma variable number tourne (boucle ) jusqu'a 100 ma variable number s'incrémente d'un pas de 15
for($number=1; $number <= 100; $number+=15){
    ?>
    <p><?= $number ?><p>
        <?php
 }
 ?>


<p>Exercice 5</p>
<p>Initialisez une variable à 200. Tant que cette variable est supérieure à 0, décrémentez avec un pas de 12.</p>
<?php
for($number=200; $number <= 0; $number-12){
    ?>
    <p><?= $number ?><p>
        <?php
 }
 ?>

<p>Exercice6</p>

<select>
      <?php
      $tab = array('Janvier','Fevrier','Mars','Avril','Mai','Juin','Juillet','Août', 'Septembre','Octobre','Novembre','Décembre');
      $tablength = count($tab);
      for($i = 0; $i < $tablength; $i++){
        ?>
        <!-- <option>Choisir un mois</option> -->
        <option><?= $tab[$i] ?></option>
        <?php
      }
      ?>
    </select>

<!-- Exemple JP -->
    <?php
        $tab = array('Janvier','Fevrier','Mars','Avril','Mai','Juin','Juillet','Août', 'Septembre','Octobre','Novembre','Décembre');
      ?>
      <select>
        <?php
        foreach ($tab as $value) {
          ?>
          <option><?= $value ?></option>
          <?php
        }
        ?>
      </select>


</body>
</html>