<h1>Liste des Utilisateurs</h1>
<a href="?route=add">Ajouter un Utilisateur</a>
<ul>
    <?php foreach ($items as $user): ?>
        <li><?= htmlspecialchars($user['username']) ?>
            <a href="?route=deleteUser&id=<?= $user['id'] ?>">Supprimer</a>
        </li>
    <?php endforeach; ?>
</ul>
