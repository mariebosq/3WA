<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Traducteur Anglais-Francais</title>
  </head>
  <body>
    <h1>Traducteur Anglais-Francais</h1>
    <form action="index.php" method="POST">
      <p>
      <select name="direction" size="1">
        <option value="toEnglish">français vers anglais</option>
        <option value="toFrench">anglais vers francais</option>
      </select>
      </p>
      <p>
        <label for="word">Votre mot</label>
        <input type="text" name="word"/>
      </p>
      <input type="submit" name="Envoyer" id="bouton"/>
    </form>
    <?php
    if ($_POST == null) {
      echo 'R.A.S.';
    } else {
      include "form.php";
    }
    ?>
  </body>
</html>
