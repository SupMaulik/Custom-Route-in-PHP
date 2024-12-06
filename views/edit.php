<?php ob_start(); ?>

<h2>Edit Product</h2>
<form method="POST" action="/crud_route/products/update/<?= $product['id'] ?>">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" value="<?= htmlspecialchars($product['name'], ENT_QUOTES) ?>" required>
    
    <label for="price">Price:</label>
    <input type="number" name="price" id="price" step="0.01" value="<?= htmlspecialchars($product['price'], ENT_QUOTES) ?>" required>

    <button type="submit">Update</button>
</form>

<?php $content = ob_get_clean(); ?>
<?php include 'views/layout.php'; ?>
