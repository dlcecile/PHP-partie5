<?php
  $page = "exercice3";
  include '../header.php';
  $result = '';
  $month = array ('janvier','février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'spetembre', 'octobre', 'novembre','decembre');
  $result = $month[5];
?>
<p>Avec le tableau de l'exercice 1, afficher la valeur de la troisième ligne de ce tableau. :</p>
<p><?= $result ?>
<?php
include '../footer.php';
 ?>
