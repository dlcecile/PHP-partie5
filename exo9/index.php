<?php
  $page = "exercice9";
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
<p>Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau.</p>
<?php
include '../footer.php';
 ?>
