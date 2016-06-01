/*------------------------------
 * Copyright 2014 Pixelized
 * http://www.pixelized.cz
 *
 * Freelancer theme v1.0
------------------------------*/

$(window).scroll(function(){
	if($(window).scrollTop() > 600) {
		$('.navbar-default').fadeIn(300);
	}
	else {
		$('.navbar-default').fadeOut(300);
	}
	
	if($(window).width() > 767) {
		if ($(this).scrollTop() > 600) {
			$('.scroll-up').fadeIn(300);
		} else {
			$('.scroll-up').fadeOut(300);
		}		
	}
});

$(document).ready(function() {	

	$("a.scroll[href^='#']").on('click', function(e) {
		e.preventDefault();
		var hash = this.hash;
		$('html, body').animate({ scrollTop: $(this.hash).offset().top}, 1000, function(){window.location.hash = hash;});
	});
	
	$('#skills-toggle').click(function() {
        $('#skills').slideToggle(500);
		$('.chart').easyPieChart({
			barColor: '#1ABC9C',
			trackColor: '#2F4254',
			scaleColor: false,
			lineCap: 'butt',
			lineWidth: 12,
			size:110,
			animate: 2000
		});
    });
	
	$('#overlay-hide').click(function() {
		$('#reference .reference-overlay').animate({opacity:0},1000);
		$('#reference-text').animate({opacity:0},1000);
	});
		
	$('.overlay-wrapper').mouseenter(function() {
		$(this).find('.overlay a:first-child').addClass('animated slideInLeft');
		$(this).find('.overlay a:last-child').addClass('animated slideInRight');
    });
	
	$('.overlay-wrapper').mouseleave(function() {
		$(this).find('.overlay a:first-child').removeClass('animated slideInLeft');
		$(this).find('.overlay a:last-child').removeClass('animated slideInRight');
    });
	
	$('.carousel').mouseenter(function() {
		$('.carousel-control').fadeIn(300);
	});
	
	$('.carousel').mouseleave(function() {
		$('.carousel-control').fadeOut(300);
	});
	
	if($(window).width() > 767) {
		$('.service').mouseenter(function(e) {
			$(this).find('img').animate({paddingBottom: "15px"},500);
		});
		
		$('.service').mouseleave(function(e) {
			$(this).find('img').stop().animate({paddingBottom: "0px"},500);
		});
	}
	
	if($(window).width() > 767) {
		$('.scrollpoint.sp-effect1').waypoint(function(){$(this).toggleClass('active');$(this).toggleClass('animated fadeInLeft');},{offset:'90%'});
		$('.scrollpoint.sp-effect2').waypoint(function(){$(this).toggleClass('active');$(this).toggleClass('animated fadeInRight');},{offset:'90%'});
		$('.scrollpoint.sp-effect3').waypoint(function(){$(this).toggleClass('active');$(this).toggleClass('animated fadeInDown');},{offset:'90%'});
		$('.scrollpoint.sp-effect4').waypoint(function(){$(this).toggleClass('active');$(this).toggleClass('animated fadeIn');},{offset:'60%'});
		
		$('.macbook-inner').waypoint(function(){$(this).toggleClass('active');$(this).toggleClass('black');},{offset:'60%'});
	}
});



//////////////////////
 
$(document).ready(function() {
	// navigation click actions	
	$('.scroll-link').on('click', function(event){
		event.preventDefault();
		var sectionID = $(this).attr("data-id");
		scrollToID('#' + sectionID, 750);
	});
	// scroll to top action
	$('.scroll-top').on('click', function(event) {
		event.preventDefault();
		$('html, body').animate({scrollTop:0}, 'slow'); 		
	});
	// mobile nav toggle
	$('#nav-toggle').on('click', function (event) {
		event.preventDefault();
		$('#main-nav').toggleClass("open");
	});
});
// scroll function
function scrollToID(id, speed){
	var offSet = 50;
	var targetOffset = $(id).offset().top - offSet;
	var mainNav = $('#main-nav');
	$('html,body').animate({scrollTop:targetOffset}, speed);
	if (mainNav.hasClass("open")) {
		mainNav.css("height", "1px").removeClass("in").addClass("collapse");
		mainNav.removeClass("open");
	}
}
if (typeof console === "undefined") {
    console = {
        log: function() { }
    };
}

function abrirSkills(){
   if( $("#skills").css('display') != 'block' ) {
	  $('#skills-toggle').click();
	}
}

//// agua


 
		var idAgua=null
		var d = new Date();
        var n = d.getHours();
		var estado=2;
		 
		if (n>7 && n<18){
		   estado=0;
		}else if (n>18 && n<21){
		  estado=1;
		}else{
		  if (document.getElementById('myname')) document.getElementById('myname').style.color="white";
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

				//container = document.createElement( 'div' );
				 
				container= document.getElementById( 'agua' );
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
                 
				idAgua=requestAnimationFrame( animate );
				render();

			}

			function render() {

				water.material.uniforms.time.value += 1.0 / 60.0;
				controls.update();
				water.render();
				renderer.render( scene, camera );

			}

	 




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
  })(window,document,'script','//www.miguelangelalacio.com/js/analytics.js','ga');

  ga('create', 'UA-52112968-1', 'auto');
  ga('send', 'pageview');

 /*
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','http://www.miguelangelalacio.com/js/analytics.js','ga');

  ga('create', 'UA-52112968-1', 'miguelangelalacio.com');
  ga('send', 'pageview');

 */
 
 $("#height_water").height($("#agua").height());
 
 window.onload = function(){ $("#loadingmaav").css("display", "none");};
 
 


