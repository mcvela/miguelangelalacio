<?php
require '../jsmin.php';

header('Content-type: application/javascript');


exitIfNotModifiedSince(setLastModified());

function setLastModified($lastModified=NULL) {
    $pageModified = getlastmod();
    $file=$_SERVER['SCRIPT_FILENAME'];
	
    if(empty($lastModified) || ($lastModified < $pageModified))
        $lastModified = $pageModified;
    $headerModified = filemtime(__FILE__);
    if($headerModified > $lastModified)
        $lastModified = $headerModified;
    header('Last-Modified: ' . date("r",$lastModified));
	$timestamp=filemtime($_SERVER['SCRIPT_FILENAME']);
	$gmt_mtime = gmdate('r', $timestamp);
    header('ETag: "'.md5($timestamp.$file).'"');
    header('Cache-Control: public');
    return $lastModified;
}

function exitIfNotModifiedSince($lastModified) {
    if(array_key_exists("HTTP_IF_MODIFIED_SINCE",$_SERVER)) {
        $ifModifiedSince = strtotime(preg_replace('/;.*$/', '',
                                     $_SERVER["HTTP_IF_MODIFIED_SINCE"]));
        if($ifModifiedSince >= $lastModified) { 
            header("HTTP/1.0 304 Not Modified");
            exit();
        }
    }
}



$host = $_SERVER['HTTP_HOST'];

/*
include("jquery-1.11.0.min.js");
include("jquery-latest.min.js");
include("bootstrap.min.js");
include("plugins/creative-brands/creative-brands.js");
include("plugins/easy-pie-chart/jquery.easy-pie-chart.js");
include("plugins/modernizr/modernizr.custom.js");
include("plugins/waypoints/waypoints.min.js");
*/
 
/* AGUA */	
/*
include("build/three.min.js");
include("controls/OrbitControls.js");
include("Mirror.js");
include("WaterShader.js");
include("Detector.js");
include("libs/stats.min.js");	 
*/		
 
//include("custom.js");


 

//echo JSMin::minify(file_get_contents("../js/jquery-1.11.0.min.js"));
echo JSMin::minify(file_get_contents("../js/jquery-latest.min.js"));
echo JSMin::minify(file_get_contents("../js/bootstrap.min.js"));
echo JSMin::minify(file_get_contents("../plugins/creative-brands/creative-brands.js"));
echo JSMin::minify(file_get_contents("../plugins/easy-pie-chart/jquery.easy-pie-chart.js"));
echo JSMin::minify(file_get_contents("../plugins/modernizr/modernizr.custom.js"));
echo JSMin::minify(file_get_contents("../plugins/waypoints/waypoints.min.js"));
 
/* AGUA */	

echo JSMin::minify(file_get_contents("../build/three.min.js"));
echo JSMin::minify(file_get_contents("../js/controls/OrbitControls.js"));
echo JSMin::minify(file_get_contents("../js/Mirror.js"));
echo JSMin::minify(file_get_contents("../js/WaterShader.js"));
echo JSMin::minify(file_get_contents("../js/Detector.js"));
echo JSMin::minify(file_get_contents("../js/libs/stats.min.js"));	 
	
 
echo JSMin::minify(file_get_contents("../js/custom.js"));
 
?>	

