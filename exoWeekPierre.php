<?php
//Exo1
// echo phpinfo(INFO_GENERAL);
//EXO2 
echo "<h4>afficher en PHP les chaines suivantes : (le - ne fait pas partie de la chaine !) à l'interieur de la balise indiquée entre () Demain j'apprends l'algo PHP et j'évite l'erreur (span) le chemin : del c:\\*.* n'existe pas (div) l'objet \"auteur\" n'est pas l'auteur de l'objet (h3)  Si l'on continue à s'extasier l'on n'aura plus d'élan (p) </h4>";
echo "<span> Demain j'apprends l'algo PHP et j'évite l'erreur </span>";
echo "<div> le chemin : del c:\\*.* n'existe pas </div>";
echo "<h3> l'objet \"auteur\" n'est pas l'auteur de l'objet </h3>";
echo "<p> Si l'on continue à s'extasier l'on n'aura plus d'élan </p>";

//EXO3
//  extrayez les composants Scheme / Host / Path de l'url suivante 
$url = 'https://www.monsite.com/php-exercises/php-basic-exercises.php';

var_dump(parse_url($url));

echo "<br>";

//EXO4
$word = "Tarek";
$nmb_letters = 1 ;
$firstletter = substr($word, 0, $nmb_letters);
$prout = substr($word, $nmb_letters);


echo '<span style="color: red;">' . $firstletter . '</span>' . $prout;

//EXO 5
echo "<h4>En utilisant la variable suivante : d = A00 , affichez les éléments suivants :  A01 ,A02, A03, A04, A05 </h4> <br>";

$d= "A00";
$prefix = substr($d, 0, 2); 

for ($i=0; $i < 6 ; $i++) {
    echo $prefix.$i."<br>";
}

//EXO 6
echo "<h4>Ecrivez un script PHP pour trouver la liste des nombres premiers inférieurs à 100 
(rappel : un nombre premier n'est divisible que par 1 et lui-même) 
et retournez la somme de ces nombres (égale à 1060 ! )</h4>";


//EXO 9
echo "ecrivez un script PHP pour compter le nombre de voyelles d'un mot (d'une chaine) passé(e) en argument";
echo "<br>";

$mot ="prout";
$vows =["a","e","i","o","u","y"];
$count = 0;
for ($i=0; $i < strlen($mot) ; $i++) { 
    for ($j=0; $j < count($vows) ; $j++) {
        if ($mot[$i] == $vows[$j]){
            $count++;
        }
    }
}
echo $count;
?>
