<?php include 'header.php'; ?>
<style>
	.carousel-inner>.item>a>img, .carousel-inner>.item>img {    
    	max-height: 450px;
	}    
	.carousel_col{
		padding-left: 0px;
		padding-right: 0px;
	}
    #myCarousel{
	    /*border-radius: 6px;*/
	    padding: 15px;
    	background-color: transparent;
    	background: rgba(0, 0, 0, 0.5);
    	border: 2px solid white;
    }
</style>
<div class="container page">
	<div class="row page_header">  			
		<div class="col-md-8 col-md-offset-2">
  			<h1>Robotic Arm</h1>
  			<!-- <img class="img-responsive" src="http://i.imgur.com/GPyCq9p.png" alt="..."> --> 
			<p>
				Five degrees of freedom robotic arm that can be control with Bluetooth or Wi-Fi.
			   	Arduino based controller with Ethernet and Bluetooth modules, written in C++.
			</p> 
			 
		</div>	
	</div>
	
	<div class="row page_slider">		
		<div class="col-md-12 carousel_col">
			
			<div id="myCarousel" class="carousel slide" data-ride="carousel">

			  <ol class="carousel-indicators">
			  	<?php
			  		$path = 'inc/images/robotic_arm/';
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
			  		$path = 'inc/images/robotic_arm/';
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
			<h1>rArm</h1>		
			<p>					
				Meet rArm, my robotic arm. This has been an ongoing project since high school. It's a five degrees of freedom robotic
				arm that can be control with Bluetooth or Wi-Fi. The robot has been through several versions and currently at rArm 4.0.
				I've built a custom control application for windows that can control each servo and view up to 2 connected webcams. Version
				2.0 was able to be controlled via a webpage as shown in the slides above.
			</p>
			<p style="text-align:center">
				<img class="img-responsive" src="../inc/images/robotic_arm/IMG_1358.JPG" alt="...">
			</p>				
			<p>				 								 
				The old versions used Arduino with an ethernet shield. Version 4.0, that is still on going, it uses a PIC18F4520 with a
				TLC5940 LED Driver to control the servos. I have not decided how I want to control the new robot yet. The ESP8266 looks
				promising for controlling the robot with Wi-Fi. The picture is the newest version, this time I decided to simply print
				someone's design instead of making my own. I didn't want to focus all my time in the design.
			</p>
			<div class="row">
				<div class="col-md-6 col-md-offset-3">					
					<iframe style="width:100%;height:315px;" src="https://www.youtube.com/embed/2360H5ts2hE" frameborder="0" allowfullscreen></iframe>
					<p style="text-align:center">Using a PIC18F4520 with a TLC5940 LED Driver to control the servos.</p>
				</div>
			</div>			
			<div class="row">				
				<div class="col-md-6 col-md-offset-3">					
					<iframe style="width:100%;height:315px;" src="https://www.youtube.com/embed/kQQBzfU_i0U" frameborder="0" allowfullscreen></iframe>
					<p style="text-align:center">Old video of version 2.0 placing an object into a cup.</p>
				</div>
			</div>				
		</div>
	</div>
</div>
<?php include 'footer.php'; ?>