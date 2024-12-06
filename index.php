<?php

// Autoloader
spl_autoload_register(function ($class) {
    $classPath = str_replace('\\', '/', $class) . '.php';
    $file = __DIR__ . '/' . $classPath;

    if (file_exists($file)) {
        require_once $file;
    } else {
        die("Autoload failed: File '$file' not found.");
    }
});

// Include routes
require_once 'routes/web.php';

// Get the requested URI
$basePath = '/crud_route';
$uri = str_replace($basePath, '', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$match = false;

// Match routes
foreach ($routes as $route => $handler) {
    if (preg_match("#^$route$#", $uri, $matches)) {
        list($controller, $method) = explode('@', $handler);
        $controller = "Controllers\\$controller";
        $controllerInstance = new $controller();
        array_shift($matches); // Remove full match
        call_user_func_array([$controllerInstance, $method], $matches);
        $match = true;
        break;
    }
}

if (!$match) {
    http_response_code(404);
    echo "404 Not Found - No route matches.";
}
