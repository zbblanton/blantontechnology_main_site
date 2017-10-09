<!DOCTYPE html>
<html lang="en">
<head>
  <title>Blantontechnology.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>
<body>
	<!--Loading Screen-->
	<div id="loading_overlay_container">
		<div id="loading_overlay_gif">
			<img src="../inc/images/loading.gif">
		</div>
	</div>

  <div id="header">
    <img src="inc/images/ZBTrans.png" alt="...">
  </div>
  <nav class="navbar navbar-inverse">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span>Menu</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="http://www.blantontechnology.com">Home</a></li>
          <li><a <?php if($_SERVER['SCRIPT_NAME'] == "/resume.php") {echo 'style="border: 2px solid white;"';}?> href="resume.php">Resume</a></li>
          <li><a <?php if($_SERVER['SCRIPT_NAME'] == "/projects.php") {echo 'style="border: 2px solid white;"';}?> href="projects.php">Projects</a></li>
          <li><a <?php if($_SERVER['SCRIPT_NAME'] == "/websites.php") {echo 'style="border: 2px solid white;"';}?> href="websites.php">Websites</a></li>
        </ul>
      </div>
    </div>
  </nav>
