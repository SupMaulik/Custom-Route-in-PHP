<?php ob_start(); ?>

<h2>Product List</h2>
<ul>
    <?php foreach ($products as $product): ?>
        <li>
            <?= htmlspecialchars($product['name'], ENT_QUOTES) ?> - $<?= number_format($product['price'], 2) ?>
            <a href="/crud_route/edit/<?= $product['id'] ?>">Edit</a>
            <a href="/crud_route/delete/<?= $product['id'] ?>">Delete</a>
        </li>
    <?php endforeach; ?>
</ul>

<?php $content = ob_get_clean(); ?>
<?php include 'views/layout.php'; ?>
