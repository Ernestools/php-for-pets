<h1>Liste des Utilisateurs</h1>
<a href="?route=add">Ajouter un Utilisateur</a>
<ul>
    <?php foreach ($users as $user): ?>
        <li><?= htmlspecialchars($user['name']) ?> - <?= htmlspecialchars($user['email']) ?>
            <a href="?route=delete&id=<?= $user['id'] ?>">Supprimer</a></li>
    <?php endforeach; ?>
</ul>
