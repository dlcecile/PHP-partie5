<?php
  $page = "exercice8";
  include '../header.php';
  $result = '';
  $month = array ('janvier','février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'spetembre', 'octobre', 'novembre','decembre');
  // Puis on fait une boucle pour tout afficher :
for ($numero = 0; $numero < 12; $numero++)
{
    echo $month[$numero] . '<br />'; // affichera $month[0], $month[1] etc.
}
?>
<p>Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau.</p>
<?php
include '../footer.php';
 ?>
