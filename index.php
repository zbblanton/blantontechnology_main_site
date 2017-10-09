<!DOCTYPE html>
<html lang="en">
<head>
  <title>Blantontechnology.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <style>
    body{
      margin: 0;
      width: 100%;
      height:100%;
      /*background: url("Golden_Gate_Bridge_at_night.jpg") no-repeat center fixed;*/
      /*background: url("ponds5.png") no-repeat center fixed;*/
      background: url("inc/images/sunset-690742.jpg") no-repeat center fixed;
      background-size: cover;
      background-color: #0e0e0e;
    }

	/*Loading screen*/
	#loading_overlay_container
	{
		position: fixed;
		top: 0%;
		left: 0%;
		width: 100%;
		height: 100%;
		z-index: 1000;
		background-color: #0e0e0e;
	}

	#loading_overlay_gif
	{
		position: fixed;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
	}
	/*End Loading screen*/

    #menu{
      width: 260px;
      color: white;
      margin-top: 1%;
      text-align: center;
      margin-left: auto;
      margin-right: auto;
    }

    #menu img{
      background-color: rgba(0, 0, 0, 0.18);
      border-radius: 150px;
      width: 200px;
      height: 200px;
    }

    #menu ul{
      list-style-type: none;
      margin: 0;
      padding: 0;
    }

    #menu li{
      width:100%;
      margin-top: 10px;
      margin-bottom: 10px;
      box-sizing: border-box;
      border: 2px solid white;
      font-size: 30px;
      padding: 10px;
      letter-spacing: 4px;
    }

    #menu li:hover{
      cursor: default;
    }

    #menu a{
    	text-decoration: none;
    	color:white;
    }

  </style>
</head>
<body>

	<!--Loading Screen-->
	<div id="loading_overlay_container">
		<div id="loading_overlay_gif">
			<img src="inc/images/loading.gif">
		</div>
	</div>

  <div id="menu">
    <img src="inc/images/ZBTrans.png" alt="...">
  	<h1>Hello, I'm Zachary Blanton</h1>
  	<p>Welcome to my website.</p>
    <ul>
      <a href="resume.php"><li class="menu_item">Resume</li></a>
      <a href="projects.php"><li class="menu_item">Projects</li></a>
      <a href="websites.php"><li class="menu_item">Websites</li></a>
    </ul>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script>
  	//Jquery loading screen fade out
	$(window).load(function(){
	   $('#loading_overlay_container').fadeOut();
	})

	$('.menu_item').mouseenter(function(){;
     $(this).animate({
        'letter-spacing': '9px'
      }, 100);
	  });

	  $('.menu_item').mouseleave(function(){
	      $(this).animate({
	         'letter-spacing': '4px'
	       }, 100);
	  });
  </script>
</body>
</html>
