<?php
  $page = "exercice4";
  include '../header.php';
  $result = '';
  $month = array ('janvier','février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'spetembre', 'octobre', 'novembre','decembre');
  $month[7] = 'août';
  $result = $month[7];
?>
<p>Avec le tableau de l'exercice 1, modifier le mois de aout pour lui ajouter l'accent manquant.</p>
<p><?= $result ?>
<?php
include '../footer.php';
 ?>
