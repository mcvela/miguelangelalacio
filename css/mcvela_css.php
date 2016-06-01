<?php
header('Content-type: text/css');


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


ob_start("compress");
function compress($buffer) {
/* remove comments */
$buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);
/* remove tabs, spaces, newlines, etc. */
$buffer = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $buffer);
return $buffer;
}


/* your css files */
include("../font-awesome/css/font-awesome.min.tree.css");
include('./allfonts.css');
include("./bootstrap.min.css");
include("./font-awesome.min.css");
include("../plugins/animate/animate.css");
include("../plugins/creative-brands/creative-brands.css");
include("../plugins/vertical-carousel/vertical-carousel.css"); 
include("./custom.css");
include("./bootstrap-glyphicons.css");
include("./menu3d_libre.css");
include("./hover-min.css");

include("./main_web.css");

include("./timeline.css");

ob_end_flush();
?>