
<link rel="stylesheet" href="./css/products.css">
<div class="product-section">
    <h1 class="styled-title"> Users List </h1>
    <div class="product-container">
    <?php foreach ($items as $user): ?>
        <li><?= htmlspecialchars($user['username']) ?>
        <form method="get" action="?route=deleteUser&id=<?= $user['id'] ?>">
            <button class="delete-now">Delete</button>
        </form>
        </li>
    <?php endforeach; ?>
    </div>
    <?php if($this->GetIsAdmin()):?>
        <form method="post" action="?route=addUserView">
            <button class="buy-now">Add User</button>
        </form>
    <?php endif; ?>

</div>
