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
  <p>Exercice 1</p>
<p>Créez une fonction qui retourne un booléen.</p>

<?php
function booleen(){
    return true;

}
echo booleen();
?>

<p>Exercice 2</p>
<p>Créez une fonction qui retourne une chaîne de caractère</p>
<?php 
$string = 'Hello Descodeuses';
function text($string){
    return $string;

}
?>


 

?> 
<div class container-fluid> 
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <button class="btn btn-outline-secondary"  name="valider" type="button">Valider</button>
  </div>
  <input type="text" class="form-control" placeholder="Entrer votre chaine de caractere" aria-label="" aria-describedby="basic-addon1" value="<?php echo $chaine?>" name="chaine">
</div>
</div>



<p>Exercices3</p>
<p>Créez deux variables contenant chacune une string. Créez une fonction qui retourne le contenu de ces deux variable.</p>
<?php 
$text1 ='Hello';
$text2 ='Descodeuses';
$text3 ='ça va ?';
$text4 = 'Lili';
$text5 = 'Lola';

function concatString ($string1, $string2){
    $concatText = $string1.' '. $string2;
    return $contactText;
}
echo concatString ($text1, $text2);
// echo concatString (Lili, Lola);
echo concatString ($text1, $text3);

?>
<p>Exercice4</p>
<p>Créez une fonction qui retourne deux nombres aléatoire allant de 1 à 15. Si le premier nombre est plus grand que le deuxième affichez "le premier nombre est plus grand que le deuxième" sinon si le deuxième nombre est plus grand affichez "le premier nombre est plus petit que le deuxième". affichez "les deux nombres sont égaux" si les deux nombres sont identiques.</p>
    <?php 
    $number1 = rand(1,15);
    $number2 = rand(1,15);

    function random($number1,$number2){
    return $random; 
    
    }
    echo $number1,$number2;
    
      ?>
    

<p>Exercice 5<p>
<p>Créez une fonction qui retourne une chaîne de caractère et un nombre aléatoire.<p>

<?php 
$string = 'Hello Descodeuse';
$number = rand(0,10);
function result ($string, $number){
    return result;
    
}
echo $string , $number;

?>
<p>Exercice 6<p>
<p>Créez une fonction qui retourne l'addition de trois nombres.</p>
<?php
    function addition($nb1,$nb2,$nb3){
        echo $nb1+$nb2+$nb3;
    }
    addition(3,9,5);
?>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>