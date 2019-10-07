<?php

require __DIR__ . '/../vendor/autoload.php';

$routes = [];

$routes['/'] = function(){
    echo "<!DOCTYPE html>\n";
    echo "<title>test</title>\n";
    echo "<p>現在は" . h(date('Y年m月d日H時i分s秒')) . "です</p>\n";
    echo "<ul><li><a href='/phpinfo.php'><code>phpinfo()</code></a></ul>\n";
    echo "<hr>\n";
    exit;
};

$routes['/phpinfo.php'] = function () {
    phpinfo();
};

if (isset($routes[$_SERVER['REQUEST_URI']])) {
    $f = $routes[$_SERVER['REQUEST_URI']];
    $f();
} else {
    http_response_code(404);
    echo '<h1>404 Not Found</h1>';
}


/*
if ($_SERVER['REQUEST_URI'] === '/') {
    echo "<!DOCTYPE html>\n";
    echo "<title>test</title>\n";
    echo "<p>現在は" . h(date('Y年m月d日H時i分s秒')) . "です</p>\n";
    echo "<ul><li><a href='/phpinfo.php'><code>phpinfo()</code></a></ul>\n";
    echo "<hr>\n";
    exit;
}

if ($_SERVER['REQUEST_URI'] === '/phpinfo.php') {
    phpinfo();
    exit;
}

http_response_code(404);
echo '<h1>404 Not Found</h1>';
*/