<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>Exercice 1</p>
<p>Créez une variable et lui affecter une chaîne de caractères. Afficher cette variable.</p>
    <?php 
    $text = 'Hello world';
    echo $text;
    ?>

<p> Exercice 2</p>
<p>Créez trois variables : nom, prénom, âge. Afficher ces variables dans une phrase(ex: Je m'appelle "nom prénom" et j'ai "age" ans.)</p>
<?php
$nom = 'Doe';
$prenom = 'John';
$age = '33';
// echo 'Je m\apelle ' . $nom ' ' . $prenom ' et j\'ai . $age . ' ans.;
// ?>

<p>Exercice 3</p>
<p>Créez une variable age. Afficher vous êtes majeur ou vous êtes mineur en fonction de l'âge.</p>
<?php 
$age = 0;
if ($age > 0){
    if($age >=18){
        echo 'Vous êtes majeur';
    }else{
        echo 'Vous êtes mineur';
    }

    }else{
        echo 'Veuillez entrer un age valide';
    }
?>


 <p>Exercice 4 </p>
 <p>Créez une variable age aléatoire. Afficher vous êtes majeur ou vous êtes mineur en fonction de l'âge obtenu.</p>

<?php
$age = rand(0,100);
echo $age;
if ($age >= 18){
    echo 'Vous êtes majeur';

}else{
    echo 'Vous êtes minieur';

}

?>

<p>Exercice 5</p>
 <p>Créez une variable âge et une variable genre. Afficher aléatoirement vous êtes une femme et vous avez xans ou vous êtes un homme et vous avez xans. </p>
<?php
$age = rand(0, 100);
$sexe= array('homme', 'femme');
$genre = $sexe[rand(0,1)];
$result = $age . ' ' . $genre;
echo $result;

if($age > 0 && ($genre == 'femme'|| $genre = 'homme')){
    if ($age >= 18 && $genre == 'femme'){
        echo 'Vous êtes une femme majeure';
    }elseif ($age < 18 && $genre == 'femme'){
        echo 'Vous êtes un femme mineur';
        }elseif ($age >= 18 && $genre == 'homme'){
            echo 'Vous êtes un homme majeur';
        }elseif ($age < 18 && $genre == 'homme'){
            echo 'Vous êtes un homme mineur';
    }
}else{
        echo 'Veuillez entrer des infos valides';
}

?>

 <p>Exercice 6</p>
 <p>Créez une variable magnitude allant de 0 à 9. Gérez l'affichage selon la magnitude.</p>
</body>
</html>