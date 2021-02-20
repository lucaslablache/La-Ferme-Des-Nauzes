<?php foreach ($posts as $post): ?>
<section>
    <h3><?= $post['titre'] ?></h3>
    <?= htmlspecialchars_decode($post['texte']) ?>
    <div><?= $post['auteur'] ?></div>
    <div><?= $post['date'] ?></div>
    <div><?= $post['photo'] ?></div>
</section>
<?php endforeach; ?>