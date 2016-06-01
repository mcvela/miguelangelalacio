<?php
$str_nombre="Miguel Ángel Alacio";
$str_nombrecorto="Miguel A. Alacio";
$str_puesto="Software Developer";
$str_copy=" - 2014 All right reserved";
$str_aboutme="About me";
$str_contact="Contact";

$str_titulo=$str_nombre . " - ".$str_puesto;

?>

<!DOCTYPE html>
<html>
<head>
    <!-- ==========================
    	Meta Tags 
    =========================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
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
	 
    
    <!-- ==========================
    	Fonts 
    =========================== -->
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lilita+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Alegreya+Sans+SC' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	<link href="/font-awesome/css/font-awesome.min.tree.css" rel="stylesheet" type="text/css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
	<link href='http://fonts.googleapis.com/css?family=Rock+Salt' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Fredoka+One&effect=shadow-multiple|emboss|3d' rel='stylesheet' type='text/css'>
	

    <!-- ================= <link href="/css/freelancer.css" rel="stylesheet" type="text/css">=========
    	CSS 
    =========================== -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="plugins/animate/animate.css" rel="stylesheet" type="text/css">
    <link href="plugins/creative-brands/creative-brands.css" rel="stylesheet" type="text/css">
    <link href="plugins/vertical-carousel/vertical-carousel.css" rel="stylesheet" type="text/css">
    <link href="css/custom.css" rel="stylesheet" type="text/css">
	 
    
   
	<link rel="stylesheet" media="all" href="/css/menu3d_libre.css" />
	 <link href="/css/hover-min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" media="all" href="/css/mcvela.css" />
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
</head>
<body id="page-top">
<div id="agua" style="position: absolute;">
</div>
 	   
	<?php				 
	include 'agua.php';		 
	?>
	
    <!-- menu  izquierdo-->
	<leftnav style="display:none">
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
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavigation"><i class="fa fa-bars"></i></button>
                    <img src="/img/mcvela_profile.jpg" class="img-circle navbar-logo pull-left" alt="" />
                    <a href="default.php" class="navbar-brand animated flipInX"><?php echo $str_nombrecorto ?></a>
                </div>
                
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="myNavigation">
                    <ul class="nav navbar-nav navbar-right animated flipInX">
                        <li><a href="#about" class="scroll"><?php echo $str_aboutme ?> </a></li>
                         <li><a href="#contact" class="scroll"><?php echo $str_contact ?> </a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container -->
        </nav>
        
<div   class="jumbotron" id="headInfo"><!-- jumbotron -->
            
	 
		    <div class="row"  >
			<?php /*  <div class="col-md-3" style="align:right"><a class="wobble-top" href="#" alt="Miguel Ángel Alacio (Mcvela)" title="Miguel Ángel Alacio (Mcvela)"> <img  src="/img/profile.jpg" 
			  onmouseout="this.src='/img/profile.jpg'" onmouseover="this.src='/img/mcvela_profile.jpg'" 
			 class="img-circle" style="cursor:default"></img></a></div> */ 
			 ?>
			 <div class="col-md-6" >
			        <div class="row"><a href="#about"><div id="myname"  class="font-effect-emboss wobble-top">Miguel &Aacute;ngel Alacio</div></a></div>
			        <div class="row">
					<a href="#about">
					 <!-- Slideshow start -->                          
						<div id="slideshow" class="carousel slide vertical scrollpoint sp-effect3" data-ride="carousel">
							<div class="carousel-inner">
								
								<div id="title" class="item active font-effect-emboss wobble-top"><h3><i class="fa fa-coffee"></i>  Software Developer <i class="fa fa-code icon"></i></h3></div>
							 <div id="title" class="item  font-effect-emboss wobble-top"><h3>I <i class="fa fa-heart icon-first"></i> GROOVY</h3></div>
							   <div id="title" class="item font-effect-emboss wobble-top"><h3><i class="fa fa-trophy"></i> Grails developer</h3></div>
                               <div id="title" class="item font-effect-emboss wobble-top"><h3><i class="fa fa-picture-o"></i> Front - Back developer <i class="fa fa-code icon"></i></h3></div>
							   <div id="title" class="item font-effect-emboss wobble-top"><h3><i class="fa fa-briefcase"></i>  CTO / Manager</h3></div>
							   
							</div>
						</div>
					</a>
					</div>
			         <div class="row">
                         
                        <ul class="list-inline ">
						   <li alt="Blogger" title="Blogger"><a  href="http://mcvela.blogspot.com.es/" class="btn-social btn-outline cta hover-shadow" target="blogger_maav" style="background-color:grey;text-decoration: none"><b>B</b></a>
                            </li>
                          <li alt="GitHub" title="GitHub"><a  href="https://github.com/mcvela" class="btn-social btn-outline cta hover-shadow" target="github_maav" style="background-color:grey"><i class="fa fa-github"></i></a>
                            </li>
                            <li alt="LinkedIn" title="LinkedIn"><a  href="https://www.linkedin.com/in/miguelangelalacio" target="linkedin_maav" class="btn-social btn-outline cta hover-shadow" style="background-color:grey"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li alt="Skype" title="Skype">
								<a  href="skype:mcvela?userinfo" class="btn-social btn-outline cta hover-shadow" style="background-color:grey" target="_blank">
								<i class="fa fa-skype"></i>
								</a>
                            </li>
                        </ul>
						
                    </div>  
			 
			 </div>
             
           </div>
			<div id="buttonKnowme"> 
			   <!-- Slideshow end -->  
        <br><br><br><br><br><br>
        <a href="#about" class="btn btn-reference btn-lg scroll scrollpoint sp-effect1" role="button"><i class="fa fa-smile-o"></i> <?php echo $str_aboutme ?></a>
        <a href="#contact" class="btn btn-reference btn-lg  scroll scrollpoint sp-effect2" role="button"><i class="fa fa-bolt"></i> <?php echo $str_contact ?></a> 
            </div>			
           
   
		
	
		  
		
</div><!-- fin jumbotron -->

	
</header>

    <!-- ==========================
    	HEADER - END 
    =========================== --> 
 
 <?php
 include 'about.php';	
 
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
                    
                    <p>© <?php echo $str_titulo ?> <?php echo $str_copy ?></p>
                </div>   	
            </div>
        </div>
    </section>
</div>	
    <!-- ==========================
    	FOOTER - END 
    =========================== -->
  

  

  
 
   
    <!-- ==========================
    	JS 
    =========================== -->
        
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="plugins/creative-brands/creative-brands.js"></script>
    <script src="plugins/easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="plugins/modernizr/modernizr.custom.js"></script>
    <script src="plugins/waypoints/waypoints.min.js"></script>
    <script src="js/custom.js"></script>
	
	
<script>
$(function() {
    if (!Modernizr.cssvhunit) {
        var windowH = $(window).height();
        $('#headInfo').css({'height':($(window).height())+'px'});
		//$('#buttonKnowme').css({'height':($(window).height()/2)+'px'});
    }
});
 
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-52112968-1', 'miguelangelalacio.com');
  ga('send', 'pageview');

</script>
	
</body>
</html>

