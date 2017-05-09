<?php
  include 'utilities.php';

  $listeTaches = loadTasks('tasks.csv');

 $jours = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21 ,22, 23, 24, 25, 26, 27, 28, 29, 30, 31];
 $mois = ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre'];
 $annee = [2015, 2016, 2017, 2018, 2019];

  require('indexView.php');
?>
