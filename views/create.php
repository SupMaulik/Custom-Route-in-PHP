<?php ob_start(); ?>

<h2>Create Product</h2>
<form method="POST" action="/crud_route/store">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required>
    
    <label for="price">Price:</label>
    <input type="number" name="price" id="price" step="0.01" required>

    <button type="submit">Create</button>
</form>

<?php $content = ob_get_clean(); ?>
<?php include 'views/layout.php'; ?>
