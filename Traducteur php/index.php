<?php

$dictionnaire [
  'monde' => 'word',
  'mer' => 'sea',
  'arbre' => 'tree',
  'maison' => 'house',
  'table' => 'table',
];

$dictionnaireEn = array_flip($dictionnaire)
var_dump ($_GET); die;

$clefAtraduire = $_GET['word'];
$direction = $_GET['direction'];


function translate ($clefAtraduire, $direction) {
  if ($direction == 'toEnglish')
  switch($clefAtraduire) {
    case 'monde';
    echo $dictionnaire['monde'];
    break;
  } else {
    switch($clefAtraduire) {
      case "world";
      echo $dictionnaireEn['world'];
      break;
    }
  }
}
?>

<div>
    <p>La traduction de :</p>
    <p><?php echo $_POST['word'] ?></p>
    <p>est</p>
    <p><?php $clefAtraduire = $_GET['word']; echo $dictionnaire[$_GET[$clefAtraduire]]; ?></p>
</div>
