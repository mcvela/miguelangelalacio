<!DOCTYPE html>
<html lang="en">
	<head>
		 <title>Miguel Angel Alacio - Software Developer</title>

    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/css/freelancer.css" rel="stylesheet" type="text/css">
     <link href="/css/hover-min.css" rel="stylesheet" type="text/css">
    <!-- Fonts -->
    <link href="/font-awesome/css/font-awesome.min.tree.css" rel="stylesheet" type="text/css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
	<link href='http://fonts.googleapis.com/css?family=Rock+Salt' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Fredoka+One&effect=shadow-multiple|emboss|3d' rel='stylesheet' type='text/css'>
	
    <!-- IE8 support for HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
	
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->


<link rel="stylesheet" media="all" href="/css/menu3d.css" />

		<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
		<style>
			body {
				color: #000;
				font-family:Monospace;
				font-size:13px;
				margin: 0px;
				overflow: hidden;
				background-color:#BCBCBC;
				
			}

			#info {
				position: absolute;
				top: 0px; width: 100%;height: 150px;
				text-align:center;
				padding: 5px;
				background-color:#E4E4E4;
				background-image:url('/textures/roto.jpg');
				align:center;
			}

			a {

				color: #a06851;
			}
           #myname {
			font-family: 'Rock Salt', cursive;
             font-size: 35px;
			color: black;
			cursor:default ;
		   }
		   #title {
			 font-family: 'Fredoka One', cursive;
             font-size: 30px;
			 color: #4F58AE;
			 cursor:default ;
		   }
		</style>
		
		
	</head>
	<body>
    <!-- menu -->
	<nav>
		<ul>
			 <li alt="Blogger" title="Blogger">
			 <a  href="http://mcvela.blogspot.com.es/" class="btn-social btn-outline cta hover-shadow" target="blogger_maav" style="background-color:grey;text-decoration: none"><b>&nbsp;Blogger</b></a>
                            </li>
			 <li alt="GitHub" title="GitHub">
			 <a  href="https://github.com/mcvela" class="btn-social btn-outline cta hover-shadow" target="github_maav" style="background-color:grey"><i class="fa fa-github-alt"></i>&nbsp;GitHub</a>
                            </li>
			  <li alt="LinkedIn" title="LinkedIn">
			  <a  href="https://www.linkedin.com/in/miguelangelalacio" target="linkedin_maav" class="btn-social btn-outline cta hover-shadow" style="background-color:grey">
			  <i class="fa fa-fw fa-linkedin"></i>&nbsp;LinkedIn</a>
                            </li>
		</ul>
	</nav>

	<!-- main article -->
	<article style="width:125%;background-color:transparent;overflow:hidden;left:-190px;pointer-events:none">
	
		<div id="info"  style="pointer-events:auto">
	 
		    <div class="row">
			 <div class="col-md-3" style="align:right"><a class="wobble-top" href="#" alt="Miguel Ángel Alacio (Mcvela)" title="Miguel Ángel Alacio (Mcvela)"> <img  src="/img/profile.jpg" 
			  onmouseout="this.src='/img/profile.jpg'" onmouseover="this.src='/img/mcvela_profile.jpg'" 
			 class="img-thumbnail" style="cursor:default"></img></a></div>
			 <div class="col-md-4" >
			        <div class="row"><div id="myname"  class="font-effect-emboss wobble-top">Miguel &Aacute;ngel Alacio</div></div>
			        <div class="row"><div id="title" class="font-effect-emboss wobble-top">Software Developer</div></div>
			          <div class="row">
                         
                        <ul class="list-inline">
						   <li alt="Blogger" title="Blogger"><a  href="http://mcvela.blogspot.com.es/" class="btn-social btn-outline cta hover-shadow" target="blogger_maav" style="background-color:grey;text-decoration: none"><b>B</b></a>
                            </li>
                          <li alt="GitHub" title="GitHub"><a  href="https://github.com/mcvela" class="btn-social btn-outline cta hover-shadow" target="github_maav" style="background-color:grey"><i class="fa fa-github-alt"></i></a>
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
           
        </div>
	<div id="agua"></div>

</article>

		<script src="/build/three.min.js"></script>

		<script src="/js/controls/OrbitControls.js"></script>
		<script src="/js/Mirror.js"></script>
		<script src="/js/WaterShader.js"></script>

		<script src="/js/Detector.js"></script>
		<script src="/js/libs/stats.min.js"></script>

		<script>
		var d = new Date();
        var n = d.getHours();
		var estado=2;
		 
		if (n>7 && n<18){
		   estado=0;
		}else if (n>18 && n<21){
		  estado=1;
		}else{
		  document.getElementById('myname').style.color="white";
		}
		
       var browserdevice = (/android|webos|iphone|ipad|ipod|blackberry|iemobile|opera mini/i.test(navigator.userAgent.toLowerCase()));
			if ( ! Detector.webgl ) {

				Detector.addGetWebGLMessage();
				document.getElementById( 'container' ).innerHTML = "";

			}

			var container, stats;
			var camera, scene, renderer;

			var parameters = {
				width: 2000,
				height: 2000,
				widthSegments: 250,
				heightSegments: 250,
				depth: 1500,
				param: 4,
				filterparam: 1
			}
			
			var waterNormals;

			//if (!browserdevice){ //// mobile
			 init();
			 animate();
			//}

			function init() {

				container = document.createElement( 'div' );
				 
				//container= document.getElementById( 'agua' );
				document.body.appendChild( container );
				container.style.cursor="move"; 

				renderer = new THREE.WebGLRenderer();
				renderer.setSize( window.innerWidth, window.innerHeight );
				container.appendChild( renderer.domElement );

				scene = new THREE.Scene();
				camera = new THREE.PerspectiveCamera( 55, window.innerWidth / window.innerHeight, 0.5, 3000000 );

				camera.position.set( 100, Math.max( parameters.width * 1.5, parameters.height ) /32, parameters.height );
				camera.lookAt( new THREE.Vector3( 0, 0, 0 ) );

				controls = new THREE.OrbitControls( camera, renderer.domElement );
				controls.userPan = false;
				controls.userPanSpeed = 0.0;
				controls.maxDistance = 5000.0;
				controls.maxPolarAngle = Math.PI * 0.495;

				directionalLight = new THREE.DirectionalLight( 0xffff55, 1 );
				directionalLight.position.set( - 1, 0.4, - 1 );
				scene.add( directionalLight );

				
				
				waterNormals = new THREE.ImageUtils.loadTexture( '/textures/waternormals.jpg' );
				waterNormals.wrapS = waterNormals.wrapT = THREE.RepeatWrapping; 

				water = new THREE.Water( renderer, camera, scene, {
					textureWidth: 512, 
					textureHeight: 512,
					waterNormals: waterNormals,
					alpha: 	1.0,
					sunDirection: directionalLight.position.normalize(),
					sunColor: 0xffffff,
					waterColor: 0x001e0f,
					distortionScale: 50.0,
				} );
               
                
				mirrorMesh = new THREE.Mesh(
					new THREE.PlaneGeometry( parameters.width * 500, parameters.height * 500, 50, 50 ), 
					water.material
				);
				

				mirrorMesh.add( water );
				mirrorMesh.rotation.x = - Math.PI * 0.5;
				scene.add( mirrorMesh );

                
				
				// load skybox

				var cubeMap = new THREE.Texture( [] );
				cubeMap.format = THREE.RGBFormat;
				cubeMap.flipY = false;
			 

				var loader = new THREE.ImageLoader();
				loader.load( '/textures/madrid'+estado+'.jpg', function ( image ) {

					var getSide = function ( x, y ) {

						var size = 1024;

						var canvas = document.createElement( 'canvas' );
						canvas.width = size;
						canvas.height = size;

						var context = canvas.getContext( '2d' );
						context.drawImage( image, - x * size, - y * size );

						return canvas;

					};

					cubeMap.image[ 0 ] = getSide( 2, 1 ); // px
					cubeMap.image[ 1 ] = getSide( 0, 1 ); // nx
					cubeMap.image[ 2 ] = getSide( 1, 0 ); // py
					cubeMap.image[ 3 ] = getSide( 1, 2 ); // ny
					cubeMap.image[ 4 ] = getSide( 1, 1 ); // pz
					cubeMap.image[ 5 ] = getSide( 3, 1 ); // nz
					cubeMap.needsUpdate = true;

				} );

				var cubeShader = THREE.ShaderLib['cube'];
				cubeShader.uniforms['tCube'].value = cubeMap;

				var skyBoxMaterial = new THREE.ShaderMaterial( {
					fragmentShader: cubeShader.fragmentShader,
					vertexShader: cubeShader.vertexShader,
					uniforms: cubeShader.uniforms,
					depthWrite: false,
					side: THREE.BackSide
				});

				var skyBox = new THREE.Mesh(
					new THREE.BoxGeometry( 1000000, 1000000, 1000000 ),
					skyBoxMaterial
				);
				
				scene.add( skyBox );
				
			 
				
			}

		

			function animate() {

				requestAnimationFrame( animate );
				render();

			}

			function render() {

				water.material.uniforms.time.value += 1.0 / 60.0;
				controls.update();
				water.render();
				renderer.render( scene, camera );

			}

		</script>
		
		
	<script src="/js/jquery-1.10.2.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="/js/classie.js"></script>
    <script src="/js/cbpAnimatedHeader.js"></script>
    <script src="/js/freelancer.js"></script>
	
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-52112968-1', 'miguelangelalacio.com');
  ga('send', 'pageview');

</script>

	</body>
</html>
