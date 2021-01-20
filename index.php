<?php 
require_once 'classe/Compte.php';

//On instance le compte 
$compte1 = new Compte('Benoit', -500);

$compte1->setSolde(200);

// On dépose 100 euros
$compte1->deposer(100);

echo $compte1->getTitulaire();
$compte1->setTitulaire("");
?>

<p> <?=$compte1->voirSolde(); ?></p>

<?php 

$compte1->retirer(400);

var_dump($compte1);

echo "Le taux d'interet du compte est : ". Compte::TAUX_INTERETS. "%"; /* :: = Opérateur de résolution de portée */

?>


