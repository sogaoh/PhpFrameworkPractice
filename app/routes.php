<?php


$routes = [];

$routes['/'] = function () {
    ob_start();
    include __DIR__ . '/../app/view/index.phtml';
    return [200, ['Content-Type' => 'text/html'], ob_get_clean()];
};

$routes['/phpinfo.php'] = function () {
    ob_start();
    phpinfo();
    return [200, ['Content-Type' => 'text/html'], ob_get_clean()];
};

return $routes;

/*
$routes['/'] = function () {
    echo "<!DOCTYPE html>\n";
    echo "<title>test</title>\n";
    echo "<p>現在は" . h(date('Y年m月d日H時i分s秒')) . "です</p>\n";
    echo "<ul><li><a href='/phpinfo.php'><code>phpinfo()</code></a></ul>\n";
    echo "<hr>\n";
};
*/

