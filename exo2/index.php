<?php
  $page = "exercice2";
  include '../header.php';
  $result = '';
  $month = array ('janvier','février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'spetembre', 'octobre', 'novembre','decembre');
  $result = $month[2];
?>
<p>Avec le tableau de l'exercice 1, afficher la valeur de la troisième ligne de ce tableau. :</p>
<p><?= $result ?>
<?php
include '../footer.php';
 ?>
