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
            <?php
              include 'utilities.php';

              $listeTaches = loadTasks('tasks.csv');

              for ($i = 0; $i < count($listeTaches); $i++) {
                echo '<li><input type="checkbox" value="'. $i . '" name="tache[]"/><h4>' . $listeTaches[$i][0] . '</h4><p>' . $listeTaches[$i][1] . '</p><p>' . $listeTaches[$i][2] . '</p><p>' . $listeTaches[$i][3] . '</p></li>';
                if (en retard...) {
                echo ...
                }
              } 
            ?>
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
          <?php 
            for ($i = 1; $i <= 31; $i++) {
              echo '<option value="' . $i . '">' . $i . '</option>'; 
            }
          ?>
        </select>
            
        <select name="mois">
          <?php 

            $mois = ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre'];

            for ($i = 0; $i < count($mois); $i++) {
              echo '<option value="' . ($i + 1) . '">' . $mois[$i] . '</option>'; 
            }
          ?>
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
