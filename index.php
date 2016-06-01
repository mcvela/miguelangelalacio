 
<?php
header('Content-type: text/html');

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

 

function sanitize_output($buffer) {

    $search = array(
        '/\>[^\S ]+/s',  // strip whitespaces after tags, except space
        '/[^\S ]+\</s',  // strip whitespaces before tags, except space
        '/(\s)+/s'       // shorten multiple whitespace sequences
    );

    $replace = array(
        '>',
        '<',
        '\\1'
    );

    $buffer = preg_replace($search, $replace, $buffer);

	$buffer = preg_replace('/<!--(.|\s)*?-->/', '', $buffer); // quitar comentarios
	
	/* remove comments */
    $buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);


    return $buffer;
}
ob_start('sanitize_output');



$str_nombre="Miguel &Aacute;ngel Alacio";
$str_nombrecorto="Miguel A. Alacio";
$str_puesto="Software Developer";

$str_copy=" All right reserved";
$str_aboutme="About me";
$str_contact="Contact";
$str_myskills="My Skills";
$host = $_SERVER['HTTP_HOST'];


$str_titulo=$str_nombre . " - ".$str_puesto;

?>

<!DOCTYPE html>
<html lang="en" manifest="mcvela_appcache.php">
<head>
    <!-- ==========================
    	Meta Tags 
    =========================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="pragma" content="no-cache" />
    <meta http-equiv="cache-control" value="no-cache, no-store, must-revalidate" />
    <meta http-equiv="expires" content="0">
 
    <!-- ==========================
    	Title 
    =========================== -->
    <title><?php echo $str_titulo ?></title>
    
    <!-- ==========================
    	Favicons 
    =========================== -->
   
	<link rel="shortcut icon" href="/img/favicon.ico">
	<link rel="apple-touch-icon" href="/icons/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/icons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/icons/apple-touch-icon-114x114.png">
	 
<?php /*  
    <!-- ==========================
    	Fonts 
    =========================== -->
	<link href="/font-awesome/css/font-awesome.min.tree.css" rel="stylesheet" type="text/css">
	<link href='css/allfonts.css' rel='stylesheet' type='text/css'>
    <!-- ==========================
    	CSS 
    =========================== -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" >
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" >
    <link href="plugins/animate/animate.css" rel="stylesheet" type="text/css" >
    <link href="plugins/creative-brands/creative-brands.css" rel="stylesheet" type="text/css" >
    <link href="plugins/vertical-carousel/vertical-carousel.css" rel="stylesheet" type="text/css" > 
    <link href="css/custom.css" rel="stylesheet" type="text/css" >
	<link rel="stylesheet" type="text/css" media="all" href="css/bootstrap-glyphicons.css">
	<link rel="stylesheet" media="all" href="/css/menu3d_libre.css" />
	<link href="/css/hover-min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" media="all" href="/css/mcvela_css.php" />
	<link href="css/timeline.css" rel="stylesheet" type="text/css">
	
	


<style>
<?php 
//include("./css/mcvela_css_inline.php");

echo file_get_contents("./css/mcvela_css_inline.php");
?>
</style>
	
*/?>

<link href="/css/mcvela_css.php" rel="stylesheet" type="text/css">	

    <!-- ==========================
    	JS 
    =========================== -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    
 
	
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
 
	<?php 
	/*
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
      function initialize() {
        var map_canvas = document.getElementById('map_canvas');
        var map_options = {
          center: new google.maps.LatLng(40.463659, -3.642561),
          zoom: 8,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(map_canvas, map_options)
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
	*/ 
	 ?>
	 
	   
   
</head>
 
<body id="page-top">
 
 
 <div class="preloader" id="loadingmaav">
       <div class="spinner">
           <div  class="bounce1">
			      <div class="row"><a href="#about" data-id="about" class="scroll-link" ><div id="myname"  class="font-effect-emboss wobble-top" style="cursor:hand">Miguel &Aacute;ngel Alacio</div></a></div>
			        <div class="row">
					<a href="/index.php#about"  data-id="about" class="scroll-link"  >
					 <!-- Slideshow start -->                          
						<div id="slideshow" class="carousel slide vertical scrollpoint sp-effect3" data-ride="carousel">
							<div class="carousel-inner" >
								
								<div id="title" class="item active font-effect-emboss wobble-top"><h3><i class="fa fa-coffee"></i>  Software Developer <i class="fa fa-code icon"></i></h3></div>
							 <div id="title" class="item  font-effect-emboss wobble-top"><h3>I <i class="fa fa-heart icon-first"></i> GROOVY</h3></div>
							   <div id="title" class="item font-effect-emboss wobble-top" ><h3><i class="fa fa-trophy"></i> Grails developer</h3></div>
                               <div id="title" class="item font-effect-emboss wobble-top" ><h3><i class="fa fa-picture-o"></i> Front - Back developer <i class="fa fa-code icon"></i></h3></div>
							   <div id="title" class="item font-effect-emboss wobble-top" ><h3><i class="fa fa-briefcase"></i>  CTO / Manager</h3></div>
							   
							</div>
						</div>
					</a>
					</div>
			         <div class="row">
                         
                        <ul class="list-inline ">
						   <li alt="Blogger" title="Blogger"><a  href="http://mcvela.blogspot.com.es/" class="btn-social btn-outline cta hover-shadow bcolorgrey" target="blogger_maav" ><b>B</b></a>
                            </li>
                          <li alt="GitHub" title="GitHub"><a  href="https://github.com/mcvela" class="btn-social btn-outline cta hover-shadow bcolorgrey" target="github_maav" ><i class="fa fa-github"></i></a>
                            </li>
                            <li alt="LinkedIn" title="LinkedIn"><a  href="https://www.linkedin.com/in/miguelangelalacio" target="linkedin_maav" class="btn-social btn-outline cta hover-shadow bcolorgrey" ><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li alt="Skype" title="Skype">
								<a  href="skype:mcvela?userinfo" class="btn-social btn-outline cta hover-shadow bcolorgrey" style="" target="_blank">
								<i class="fa fa-skype"></i>
								</a>
                            </li>
							 <li alt="More" title="More"> 
								 
                            </li>
                        </ul>
						
                    </div>    
			 
		    </div>
        </div>
    </div>
	

 <section id="home" style="position: absolute;">
 	 <div id="agua" style="position: absolute;top: 0px;z-index:1"> 
     </div>  
 </section>	 

    <!-- menu  izquierdo-->
	<leftnav style="display:none;">
		<ul>
		     <li style="height:80px">&nbsp;
			 </li>
			 <li alt="Blogger" title="Blogger">
			 <a  href="http://mcvela.blogspot.com.es/" class="btn-social btn-outline cta hover-shadow" target="blogger_maav" style="background-color:grey;text-decoration: none"><b>&nbsp;Blogger</b></a>
                            </li>
			 <li alt="GitHub" title="GitHub">
			 <a  href="https://github.com/mcvela" class="btn-social btn-outline cta hover-shadow" target="github_maav" style="background-color:grey"><i class="fa fa-github"></i>&nbsp;GitHub</a>
                            </li>
			  <li alt="LinkedIn" title="LinkedIn">
			  <a  href="https://www.linkedin.com/in/miguelangelalacio" target="linkedin_maav" class="btn-social btn-outline cta hover-shadow" style="background-color:grey">
			  <i class="fa fa-fw fa-linkedin"></i>&nbsp;LinkedIn</a>
                            </li>
		</ul>
	</leftnav>
 
<div class="mywindow">

	<a href="#page-top" class="scroll-up scroll"><i class="fa fa-chevron-up"></i></a>
    <h1><?php echo $str_puesto ?></h1>
	<!-- ==========================
    	HEADER - START 
    =========================== -->

    <header >
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" id="botonmenumovil" class="navbar-toggle" data-toggle="collapse" data-target="#myNavigation"><i class="fa fa-bars"></i></button>
                    <a href="index.php#home"  data-id="home" class="scroll-link"  style="cursor:hand"  ><img width="50" height="56" src="/img/mcvela_profile.jpg" class="img-circle navbar-logo pull-left" alt="" /></a>
                    <a href="index.php#home"  data-id="home" style="cursor:hand" class="scroll-link navbar-brand animated flipInX"><?php echo $str_nombrecorto ?></a>
                </div>
              
				
				<!-- Collect the nav links for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse navbar-right animated flipInX" id="myNavigation">
                <ul class="nav navbar-nav">
                    <li><a  href="/index.php#about" class="scroll-link" data-id="about"><?php echo $str_aboutme ?> </a></li>
					<li><a  onclick="abrirSkills()" class="scroll-link" data-id="myskills" href="/index.php#myskills" ><?php echo $str_myskills ?> </a></li>
                         <li><a  href="/index.php#contact" class="scroll-link" data-id="contact"><?php echo $str_contact ?> </a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
			
            </div><!-- /.container -->
        </nav>
       <br>
<div   class="jumbotron1" id="headInfo1" style="position: absolute;z-index:10;background-color:transparent;width:50%"><!-- jumbotron -->
            
	 <div class="row"  >
			<?php /*  <div class="col-md-3" style="align:right"><a class="wobble-top" href="#" alt="Miguel Ã�ngel Alacio (Mcvela)" title="Miguel Ã�ngel Alacio (Mcvela)"> <img  src="/img/profile.jpg" 
			  onmouseout="this.src='/img/profile.jpg'" onmouseover="this.src='/img/mcvela_profile.jpg'" 
			 class="img-circle" style="cursor:default"></img></a></div> */ 
			 ?>
			 <div class="col-md-6" >
			 <br>
			        <div class="row"><a href="#about" data-id="about" class="scroll-link" ><div id="myname"  class="font-effect-emboss wobble-top" style="cursor:hand">Miguel &Aacute;ngel Alacio</div></a></div>
			        <div class="row">
					<a href="/index.php#about"  data-id="about" class="scroll-link"  >
					 <!-- Slideshow start -->                          
						<div id="slideshow" class="carousel slide vertical scrollpoint sp-effect3" data-ride="carousel">
							<div class="carousel-inner" >
								
								<div id="title" class="item active font-effect-emboss wobble-top"><h3><i class="fa fa-coffee"></i>  Software Developer <i class="fa fa-code icon"></i></h3></div>
							 <div id="title" class="item  font-effect-emboss wobble-top"><h3>I <i class="fa fa-heart icon-first"></i> GROOVY</h3></div>
							   <div id="title" class="item font-effect-emboss wobble-top" ><h3><i class="fa fa-trophy"></i> Grails developer</h3></div>
                               <div id="title" class="item font-effect-emboss wobble-top" ><h3><i class="fa fa-picture-o"></i> Front - Back developer <i class="fa fa-code icon"></i></h3></div>
							   <div id="title" class="item font-effect-emboss wobble-top" ><h3><i class="fa fa-briefcase"></i>  CTO / Manager</h3></div>
							   
							</div>
						</div>
					</a>
					</div>
			         <div class="row">
                         
                        <ul class="list-inline ">
						   <li alt="Blogger" title="Blogger"><a  href="http://mcvela.blogspot.com.es/" class="btn-social btn-outline cta hover-shadow bcolorgrey" target="blogger_maav" ><b>B</b></a>
                            </li>
                          <li alt="GitHub" title="GitHub"><a  href="https://github.com/mcvela" class="btn-social btn-outline cta hover-shadow bcolorgrey" target="github_maav" ><i class="fa fa-github"></i></a>
                            </li>
                            <li alt="LinkedIn" title="LinkedIn"><a  href="https://www.linkedin.com/in/miguelangelalacio" target="linkedin_maav" class="btn-social btn-outline cta hover-shadow bcolorgrey" ><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li alt="Skype" title="Skype">
								<a  href="skype:mcvela?userinfo" class="btn-social btn-outline cta hover-shadow bcolorgrey" style="" target="_blank">
								<i class="fa fa-skype"></i>
								</a>
                            </li>
							 <li alt="More" title="More"> 
								<a  href="/index.php#about"  data-id="about" class="scroll-link btn-social btn-outline cta hover-shadow bcolorgrey scroll-down scroll" style="" >
								<i class="fa fa-chevron-down"></i>
								</a>
                            </li>
                        </ul>
						
                    </div>  
			 
			 </div>
             
    </div>
			
   
		
	
		  
		
</div><!-- fin jumbotron -->

	
</header>

    <!-- ==========================
    	HEADER - END 
    =========================== --> 
 <div id="height_water"> </div> 
 <?php
 include 'about_timeline.php';	
 
 //include 'reference.php';	
 //include 'blog.php';	
  
 include 'contact.php';	
 ?>  
    
    
    <!-- ==========================
    	FOOTER - START
    =========================== -->   
    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 scrollpoint sp-effect3">
                
               			<ul class="brands brands-inline">
                            <li>&nbsp; </li>
                           
							 
                        </ul>  
                    
                    <p>© <?php echo date("Y") ?> - <?php echo $str_titulo ?> <?php echo $str_copy ?></p>
                </div>   	
            </div>
			<br>
        </div>
    </section>
	
</div>	
    <!-- ==========================
    	FOOTER - END 
    =========================== -->
  

<?php
/*
<script src="/js/jquery-1.11.0.min.js"></script>
<script src="/js/jquery-latest.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/plugins/creative-brands/creative-brands.js"></script>
<script src="/plugins/easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="/plugins/modernizr/modernizr.custom.js"></script>
<script src="/plugins/waypoints/waypoints.min.js"></script>
 
<!-- == AGUA == -->	
<script src="/build/three.min.js"></script>
<script src="/js/controls/OrbitControls.js"></script>
<script src="/js/Mirror.js"></script>
<script src="/js/WaterShader.js"></script>
<script src="/js/Detector.js"></script>
<script src="/js/libs/stats.min.js"></script>
		
 
<script src="/js/custom.js"></script>
  
  
 */
 
 
 /*
 
 <script src="./js/mcvela_js_externo.php" defer></script>
<script src="./js/mcvela_js_externo2.php" defer></script>

 */
 ?>
   
    <!-- ==========================
    	JS   

    =========================== -->

<script type="text/javascript" >
   <?php
     include ("./js/mcvela_js.php");
    ?>
</script> 
 


 
 
	
	
<div id="online_status" style="position:absolute;top:0px;z-index:100000;text-align:right;width:100%"><img src="/image/offline.png"></div>
</body>
</html>

<?php
 ob_end_flush();
?>

