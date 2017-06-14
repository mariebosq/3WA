<?php

/**
 * Le point d'entrée aiguille la requête de l'utilisateur vers les traitements appropriés
 *
 * L'URL a pour forme : http://127.0.0.1/blog/index.php?route=<route>[&<param>=<value]*
 * Les noms entre chevrons désignent des variables
 * les crochets désignent des éléments optionnels et l'astérique indique que ces éléments peuvent être en nombre entre 0 et l'infini
 *
 * 1) On doit d'abord tester le type de requete HTTP : GET, POST, autre ? — on se limite ici à GET et POST :o)
 *
 * 2) On doit trouver quelle est la route qui a été demandée par l'utilisateur
 *
 * 3) En fonction de cette route, on exécute un certain traitement
 *
 */

/**
 * A la place du "if", il serait possible de tester la valeur du tableau super-global $_SERVER['REQUEST_METHOD']
 * qui indique quelle méthode HTTP a été utilisée
 */
if (!empty($_GET)) {

    /**
     * On doit maintenant — pour chaque branche — examiner toutes les possibilités de routes correspondant à
     * des cas d'utilisation déterminés
     */

    switch ($_GET['route']) {
        case '***':
            /**
             *  1) Importer le script correspondant au traitement
             *  2) Exécuter la fonction ad hoc
             */
            break;

        default:
            /**
             * Que faire si aucune route valide n'a été détectée ?
             */
            break;
    }

} elseif (!empty($_POST)) {

    /**
     * cf. supra)
     */

} else {
    /**
     *  Deux cas possibles :
     *  1) C'est la page d'accueil
     *  2) C'est une erreur quelque part !
     *  Donc, on renvoie vers la page d'accueil systématiquement
     */
}
