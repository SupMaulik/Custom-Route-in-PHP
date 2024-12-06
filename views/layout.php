<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Application</title>
    <link rel="stylesheet" href="/crud_route/assets/style.css"> <!-- Optional CSS -->
</head>
<body>
    <header>
        <h1>CRUD Application</h1>
        <nav>
            <a href="/crud_route/">Home</a>
            <a href="/crud_route/create">Create Product</a>
        </nav>
        <hr>
    </header>
    <main>
        <?= $content ?>
    </main>
    <footer>
        <hr>
        <p>&copy; <?= date('Y') ?> CRUD Application</p>
    </footer>
</body>
</html>
