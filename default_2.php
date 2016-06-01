<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Miguel Angel Alacio - Software Developer</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/freelancer.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- IE8 support for HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">
<script>
 var browserdevice = (/android|webos|iphone|ipad|ipod|blackberry|iemobile|opera mini/i.test(navigator.userAgent.toLowerCase()));
 //alert(document.location.href.indexOf("dentro"));
 if (browserdevice && document.location.href.indexOf("dentro")<0){
   //alert(browserdevice);
   window.document.location.href="http://miguelangelalacio.meximas.com/?dentro"
 }
</script>
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
               <!--  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>-->
                <a class="navbar-brand" href="#page-top">Miguel Angel Alacio</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling 
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                   
                    <li class="page-scroll">
                        <a href="#about">About</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </div>-->
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="container">
            <div class="row">
                    
					<div class="col-md-4 col-md-offset-1 col-sm-4 col-sm-offset-1 col-xs-offset-3 col-xs-6">

                       <img  src="img/profile.jpg" class="img-thumbnail"></img>

                       </div>
                    <div class="col-md-4">
                         
                        <ul class="list-inline">
                          <!--  <li><a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-crunchbase">C<b>B</b></i></a>
                            </li>-->
                            <li><a href="https://www.linkedin.com/in/miguelangelalacio" target="linkedin_maav" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
								<a href="skype:mcvela?userinfo" class="btn-social btn-outline" target="_blank">
								<i class="fa fa-skype"></i>
								</a>
                            </li>
                        </ul>
                    </div>
                     
                </div>
        </div>
    </header>

	
<!--
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About</h2>
                    <hr  >
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional LESS stylesheets for easy customization.</p>
                </div>
                <div class="col-lg-4">
                    <p>Whether you're a student looking to showcase your work, a professional looking to attract clients, or a graphic artist looking to share your projects, this template is the perfect starting point!</p>
                </div>
               
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Contact Me</h2>
                    <hr  >
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <form role="form">
                        <div class="row">
                            <div class="form-group col-xs-12 floating-label-form-group">
                                <label for="name">Name</label>
                                <input class="form-control" type="text" name="name" placeholder="Name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-12 floating-label-form-group">
                                <label for="email">Email Address</label>
                                <input class="form-control" type="email" name="email" placeholder="Email Address">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-12 floating-label-form-group">
                                <label for="message">Message</label>
                                <textarea placeholder="Message" class="form-control" rows="5"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-lg btn-success">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Location</h3>
                        
                            <br>Madrid, SPAIN 28043</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Around the Web</h3>
                        <ul class="list-inline">
                             
                            <li><a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
							<a href="skype:mcvela?userinfo" target="_blank">
								<i class="fa fa-skype"></i>
								</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                       </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; 2014 - Miguel Angel Alacio 
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="scroll-top page-scroll visible-xs visble-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>
-->
	

    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>
    <script src="js/freelancer.js"></script>

	 <script>
 /*
                        $(document).ready(function(){
                                function fix_height(){
                                        var h = 0;//$("#tray").height();   
                                        //$("#preview").attr("height", (($(window).height()) - h) + "px");
										window.top.frames[0].height=$(window).height();
                                }
                                $(window).resize(function(){ fix_height(); }).resize();
                                //$("#preview").contentWindow.focus();
                        });
						
						// window.top.frames[0].location.href
						// window.top.outerHeight
						  */
					 
						window.onload = function (){
						    // alert(window.top.innerHeight);
							function fix_height(){
								//var alto=window.top.innerHeight;							 
								// window.top.frames[0].height = alto+"px" ;
								var alto=window.innerHeight;	
                                //alert(alto);								
								window.height = alto+"px" ;
								window.top.frames[0].height = alto+"px" ;
								//window.top.frames[0].attr("height", alto+"px" );
								//alert(window.top.frames[0].height);
							 }
							 $(window).resize(function(){ fix_height(); }).resize(); 
                           }	
 				  
						
</script>
</body>

</html>
