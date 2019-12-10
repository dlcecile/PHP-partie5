<?php
  $page = "exercice1";
  include '../header.php';
  $result = '';
  $month = array ('janvier','février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'spetembre', 'octobre', 'novembre','decembre');
  // Puis on fait une boucle pour tout afficher :
for ($numero = 0; $numero < 12; $numero++)
{
    echo $month[$numero] . '<br />'; // affichera $month[0], $month[1] etc.
}
?>
<p>Créer un tableau months et l'initialiser avec les valeurs suivantes :</p>
<?php
include '../footer.php';
 ?>
