<?php

require './cssmin-v3.0.1-minified.php';

$host = $_SERVER['HTTP_HOST'];

/* your css files */
echo CssMin::minify(file_get_contents("./font-awesome/css/font-awesome.min.tree.css"));
echo CssMin::minify(file_get_contents('./css/allfonts.css'));
echo CssMin::minify(file_get_contents("./css/bootstrap.min.css"));
echo CssMin::minify(file_get_contents("./css/font-awesome.min.css"));
echo CssMin::minify(file_get_contents("./plugins/animate/animate.css"));
echo CssMin::minify(file_get_contents("./plugins/creative-brands/creative-brands.css"));
echo CssMin::minify(file_get_contents("./plugins/vertical-carousel/vertical-carousel.css")); 
echo CssMin::minify(file_get_contents("./css/custom.css"));
echo CssMin::minify(file_get_contents("./css/bootstrap-glyphicons.css"));
echo CssMin::minify(file_get_contents("./css/menu3d_libre.css"));
echo CssMin::minify(file_get_contents("./css/hover-min.css"));

echo CssMin::minify(file_get_contents("./css/main_web.css"));

echo CssMin::minify(file_get_contents("./css/timeline.css"));


?>