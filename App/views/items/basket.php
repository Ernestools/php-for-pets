<link rel="stylesheet" href="./css/products.css">
<div class="product-section">
    <h1 class="styled-title">Panier </h1>
    <div class="product-container">
        <?php foreach ($items as $item): ?>
            <div class="product-card">
                <img src="<?= htmlspecialchars($item['imageUrl']) ?>" alt="Product 1" class="product-img1">
                <div class="product-details">
                    <h2><?= htmlspecialchars($item['name']) ?></h2>
                    <p><?= htmlspecialchars($item['price']) ?></p>
                    <?php if($this->GetIsAdmin()):?>
                        <form method="post" action="?route=delete">
                            <input type="hidden" name="id" value="<?= htmlspecialchars($item['id']) ?>"/>
                            <button class="buy-now">Delete</button>
                        </form>
                    <?php else: ?>
                        <button class="buy-now">Buy</button>
                    <?php endif; ?>
                    <button class="convert-btn" data-usd="<?= htmlspecialchars($item['price']) ?>">Convert to Dinar</button>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <?php if($this->GetIsAdmin()):?>
        <form method="post" action="?route=addView">
            <button class="buy-now">Add</button>
        </form>
    <?php endif; ?>

</div>