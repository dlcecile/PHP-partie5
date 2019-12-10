<?php
  $page = "exercice10";
  include '../header.php';
  $department[02] = 'Aisne';
  $department[59] = 'Nord';
  $department[60] = 'Oise';
  $department[80] = 'Somme';
  $department[62] = 'Pas-de-Calais';
  foreach($department as $cle => $element)
  {
    echo 'Le département ' .$deparment. ' a le numéro ' .$cle. '<br />';
  }
?>
<p>Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés.</p>
<p>Cela pourra être, par exemple, de la forme : "Le département" + nom du département + "a le numéro" + numéro du département</p>
<?php
include '../footer.php';
 ?>
