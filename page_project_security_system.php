<?php include 'header.php'; ?>
<style>
	@media (min-width: 768px) {
		.page_header>.col-md-12>img{
			width: initial;
			height: initial;
			max-width: 600px;
			max-height: 600px;
		}
	}

	.carousel-inner>.item>a>img, .carousel-inner>.item>img {    
    	max-height: 450px;
	}    
	.carousel_col{
		padding-left: 0px;
		padding-right: 0px;
	}
    #myCarousel{
	    padding: 15px;
    	background-color: transparent;
    	background: rgba(0, 0, 0, 0.5);
    	border: 2px solid white;
    }
</style>
<div class="container page">
	<div class="row page_header">  			
		<div class="col-md-12">
  			<h1>Security System</h1> 
			<p>
				A project to learn about how to design printed circuit boards and programming PIC Microcontrollers.
			</p>
			<!-- <img class="img-responsive" src="../inc/images/security_system.png" alt="..."> --> 
		</div>	
	</div>
	<div class="row page_slider">		
		<div class="col-md-12 carousel_col">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			  	<?php
			  		$path = 'inc/images/security_system/';
			  		$files = scandir($path);
					$set_active = 0;
					foreach($files as $file) {
						if(basename($file) == '.' || basename($file) == '..') continue;
			  			if($set_active == 0){
			  				echo '<li data-target="#myCarousel" data-slide-to="' . $set_active .'" class="active"></li>';							
			  			}
						else{
							echo '<li data-target="#myCarousel" data-slide-to="' . $set_active .'"></li>';	
						}
						$set_active++;			  			
					}
			  	?>
			  </ol>
			
			  <div class="carousel-inner" role="listbox">
			  	<?php
			  		$path = 'inc/images/security_system/';
			  		$files = scandir($path);
					$set_active = 0;
					foreach($files as $file) {
						if(basename($file) == '.' || basename($file) == '..') continue;
			  			if($set_active == 0){
			  				echo '<div class="item active">';
							$set_active = 1;
			  			}
						else{
							echo '<div class="item">';	
						}			  			
		      			echo '<img class="img-responsive center-block" src="' . $path . basename($file) . '" alt="n64">';
		    			echo '</div>';
					}
			  	?>

			  </div>
			
			  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
		</div>
	</div>
	<div class="row page_row">		
		<div class="col-md-12">		
			<p>	
				This project was a security system with a motion alarm, password keypad, and bluetooth control. The main
				goal of the project was to get a circuit board produced, and learn more about programming PIC microcontrollers.
				The system used a PIC18F45K22 microcontroller and was written in C. There were a couple of feature like a
				EEPROM stored password and a serial bluetooth module for wireless communication.
			</p>			
			<p style="text-align:center">
				<img class="img-responsive" src="../inc/images/security_system.png" alt="...">
			</p>
			<p>
				See the full source code at <a href="https://bitbucket.org/zbblanton/security_system">Bitbucket</a>. This code was wrote
				several years ago and may contains errors along with unoptimized code.
			</p>
		</div>
	</div>	
</div>
<?php include 'footer.php'; ?>