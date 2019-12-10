<?php
  $page = "exercice5";
  include '../header.php';
  $department[02] = 'Aisne';
  $department[59] = 'Nord';
  $department[60] = 'Oise';
  $department[80] = 'Somme';
  $department[62] = 'Pas-de-Calais';
  foreach($department as $element)
  {
      echo $element . '<br />';
  }
?>
<p>Créer un tableau associatif avec comme index le numéro des départements des Hauts de France et en valeur leur nom.</p>
<?php
include '../footer.php';
 ?>
