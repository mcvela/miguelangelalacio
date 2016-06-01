<?php
$host = $_SERVER['HTTP_HOST'];

?>
body {
     position: relative;
     height: auto;
     min-height: 100% !important;
     background: black;
}
.bcolorgrey{
background-color:grey;
text-decoration: none;
}
.bcolorgrey:hover,
.bcolorgrey:focus,
.bcolorgrey:active,
.bcolorgrey:active{
    border: solid 2px #fff;
    color: black;
    background: #fff;
	text-decoration: none;
}
	 .btn-social {
    display: inline-block;
    width: 50px;
    height: 50px;
    border: 2px solid #fff;
    border-radius: 100%;
    text-align: center;
    font-size: 20px;
    line-height: 45px;
	 text-decoration: none;
	
}
.btn-outline {
    margin-top: 15px;
    border: solid 2px #fff;
    font-size: 20px;
    color: #fff;
    background: 0 0;
    transition: all .3s ease-in-out;
	 background: black;
	 text-decoration: none;
}

.btn-outline:hover,
.btn-outline:focus,
.btn-outline:active,
.btn-outline.active {
    border: solid 2px #fff;
    color: black;
    background: #fff;
	
}

#headInfo{
 margin: auto;
   
   
    padding: none;
    min-height: 100%;
 
}
			.info {
				 
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
 
 
.bg-1 {
	background: url('http://<?php echo $host; ?>/img/background/2.jpg') no-repeat center center fixed; 
    -webkit-background-size: cover;
  	-moz-background-size: cover;
  	-o-background-size: cover;
  	background-size: cover;
}

.bg-2 {
	background: url('http://miguelangelalacio.meximas.com/img/background/2.jpg') no-repeat center center fixed; 
    -webkit-background-size: cover;
  	-moz-background-size: cover;
  	-o-background-size: cover;
  	background-size: cover;
}

.bg-3 {
	background: url('http://miguelangelalacio.meximas.com/img/background/3.jpg') no-repeat center center fixed; 
    -webkit-background-size: cover;
  	-moz-background-size: cover;
  	-o-background-size: cover;
  	background-size: cover;
}
.bg-7 {
	background: url('http://miguelangelalacio.meximas.com/img/background/7.jpg') no-repeat center center fixed; 
    -webkit-background-size: cover;
  	-moz-background-size: cover;
  	-o-background-size: cover;
  	background-size: cover;
}

a:link {text-decoration: none;cursor:pointer}
a:visited {text-decoration: none;cursor:pointer}
a:active {text-decoration: none;cursor:pointer}
a:hover {text-decoration: none;cursor:pointer}

#mybutton:hover{cursor:pointer;}
#title:hover{cursor:pointer;}
#myname:hover{cursor:pointer;}