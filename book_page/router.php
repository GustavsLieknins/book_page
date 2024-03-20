<?php

require __DIR__."/routes.php";

$url_array = parse_url($_SERVER["REQUEST_URI"]);
$url = $url_array["path"];

print_r($routes);

// if(array_key_exists($url, $routes))
// {
//     require $routes[$url];
// }