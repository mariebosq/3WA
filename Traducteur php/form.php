<div>
    <p>La traduction de :</p>
    <p>
      <?php
        $clefAtraduire = $_POST['word'];
        echo $clefAtraduire
      ?>
    </p>

    <p>est</p>

    <p>
      <?php
        $dictionnaire = [
        'monde' => 'world',
        'mer' => 'sea',
        'arbre' => 'tree',
        'maison' => 'house',
        'table' => 'table',
      ];

      $dictionnaireEn = array_flip($dictionnaire);

    // var_dump ($_POST);
      $clefAtraduire = $_POST['word'];
      $direction = $_POST['direction'];

    /*function translate ($clefAtraduire, $direction) {*/
      if (strcmp($direction, 'toEnglish') == 0) {
        echo $dictionnaire[$clefAtraduire];
      } else {
        echo $dictionnaireEn[$clefAtraduire];
      }
    /*}*/
    ?>
  </p>
</div>
