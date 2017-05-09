<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Gestionnaire de tâches :-)</title>
  </head>
  <body>
    <h1>Gestionnaire de tâches :-)</h1>

    <main>
      <!-- Liste des taches -->
      <form method="POST" action="remove.php">
        <fieldset>
          <legend>Liste des tâches</legend>
          <ul>
            <?php foreach ($listeTaches as $i => $tache): ?>
              <li>
                <input type="checkbox" name="tache[]" value="<?php echo $i?>">
                <h4><?php echo $tache[0]?></h4>
                <p><?php echo $tache[1]?></p>
                <p><?php echo $tache[2]?></p>
                <p><?php echo $tache[3]?></p>
              </li>
            <?php endforeach ?>
          </ul>
          
          <input type="submit" value="Supprimer les éléments sélectionnés" />
        </fieldset>
      </form>

      <!-- Formulaire -->
      <section>
        
      </section>

    </main>
    <hr />

    <form method="POST" action="add.php">
      <fieldset>
        <legend>Information sur la tâche</legend>

        Titre : <input type="text" name="titre" /><br/>

        Tâche : <textarea name="description" rows="8" cols="80"></textarea><br/>

        Date de fin :
        <select name="jour">
          <?php foreach ($jours as $jour): ?>
            <option value="<?php echo $jour ?>">
              <?php echo $jour ?>
            </option>
          <?php endforeach ?>
        </select>
            
        <select name="mois">
          <?php foreach ($mois as $i => $m): ?>
            <option value="<?php echo ($i + 1) ?>">
              <?php echo $m ?>
            </option>
          <?php endforeach ?>
        </select>

        <select name="annee">
          <?php 
            for ($i = 2016; $i <= 2020; $i++) {
              echo '<option value="' . $i . '">' . $i . '</option>'; 
            }
          ?>
        </select>

        <br/>

        Priorité :
        <input type="radio" name="priorite" id="basse" value="priority-low" checked/> 
        <label for="basse"> Basse</label>

        <input type="radio" name="priorite" id="normal" value="priority-normal"/> 
        <label for="normal"> Normale</label>

        <input type="radio" name="priorite" id="haute" value="priority-high"/> 
        <label for="haute"> Haute</label></li>

        <br/>

        <input type="submit" value="Ajouter" />

      </fieldset>
    </form>
  </body>
</html>
