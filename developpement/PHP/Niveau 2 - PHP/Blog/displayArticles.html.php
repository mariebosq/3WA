<!-- Page d'accueil -->
<h2>Liste des articles</h2>

<!-- Liste des articles du blog -->
<ul class="post-list">
    <?php foreach($articles as $a): ?>
        <li class="post">
            <h3>
                <i class=""></i>&nbsp;
                <!-- Lien vers article de blog détaillé avec les commentaires -->
                <a href="index.php?route=single-article&id=<?= intval($a['id']) ?>" title="Consulter l'article">
                    <?= htmlspecialchars($a['title']) ?>
                </a>
            </h3>
            <!-- Seul un extrait de l'article du blog est affiché -->
            <article><?= substr(htmlspecialchars(a['content']), 0, 100) ?>&nbsp;[...]</article>
            <small>
                <!-- Rédigé par <?= htmlspecialchars(a['FirstName']) ?> <?= htmlspecialchars(a['LastName']) ?> -->
                le <?= htmlspecialchars(a['datePublication']) ?>
            </small>
        </li>
    <?php endforeach; ?>
</ul>
