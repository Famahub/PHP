<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container"> 
  <p class="h1 text-center" >PHP Partie 4</p>
<p>Exercice 1</p>
<p>Créez un tableau contenant les 12 mois de l'année, affichez "Mars".</p>
<?php
$mois[0]  = 'Janvier';
$mois[1]  = 'Février';
$mois[2]  = 'Mars';
$mois[3]  = 'Avril';
$mois[4]  = 'Mai';
$mois[5]  = 'Juin';
$mois[6]  = 'Juillet';
$mois[7]  = 'Aout';
$mois[8]  = 'Septembre';
$mois[9]  = 'Octobre';
$mois[10] = 'Novembre';
$mois[11] = 'Décembre';
echo $mois[2];
?>

<p class="h2">Exercice 2</p>
<p class="h2">Créez un tableau associatif contenant comme clé des chiffres de 1 à 5 et comme valeurs cinq langage de programmation. Affichez ces langages.</p>
<?php
$descodeuses = array(
    'Javascript' => '1',
    'PHP' => '2',
    'HTLM/CSS' => '3',
    'Pyton' => '4',
    'Canvas' => '5');
    
    while ($language = current($descodeuses)) {

        echo key($descodeuses).'<br />';
       next($descodeuses);
}
    ?>

<p class="h2">Exercice 3</p>
<p class="h2">Créez un tableau associatif contenant comme clé des chiffres de 1 à 5 et comme valeurs cinq langage de programmation. Affichez le troisième language.</p>
<?php
$descodeuses = array(
    'Javascript' => '1',
    'PHP' => '2',
    'HTLM/CSS' => '3',
    'Pyton' => '4',
    'Canvas' => '5');
    
    while ($language = current($descodeuses)) {
        if ($language == '2') {
            echo key($descodeuses), "\n";
        }
        next($descodeuses);

        
}
    ?>
    <p class='h3'>Exercice 4</p>
    <p class='h3'>Créez un tableau associatif contenant comme clé des chiffres de 1 à 5 et comme valeurs cinq langage de programmation. Ajoutez une clé et assignez lui une valeur. Affichez cette valeur.</p>
  <?php
  $descodeuses = array(
    'Javascript' => '1',
    'PHP' => '2',
    'HTLM/CSS' => '3',
    'Pyton' => '4',
    'Canvas' => '5',
    'Programmation' => '6');
    
    while ($language = current($descodeuses)) {
        if ($language == '6') {
            echo key($descodeuses), "\n";
        }
        next($descodeuses);

        
}
?>
<p>Exercice5</p>
<p>Créez un tableau associatif contenant comme clé des numéro de département et comme valeurs les départements correspondants. Affichez les départements et leurs clés respectives.</p>
<?php
$descodeuses = array(
    'Paris' => '75',
    'Seine-Maritime' => '76',
    'Seine-et-Marne' => '77',
    'Yvelines' => '78',
    'Deux-Sèvres' => '79')
    ?>
</div>

      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>