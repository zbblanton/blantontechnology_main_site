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
		<div class="col-md-12">
  			<h1>Portable N64 (WIP)</h1> 
			<p>
			   A work in progress project to make a portable, battery powered Nintendo 64.
			</p>
			<!-- <img class="img-responsive" src="../inc/images/n64.jpg" alt="..."> --> 
		</div>	
	</div>	
	<div class="row page_slider">		
		<div class="col-md-12 carousel_col">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			  	<?php
			  		$path = 'inc/images/n64/';
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
			  		$path = 'inc/images/n64/';
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
			<h1>N64</h1>		
			<p>	
				This project is still very much a work in progress. So far the cartridge slot has been moved to work
				similar to a gameboy slot. The screen has been tested and works. Batteries have been very tough, 
				primary with safety and charging. A arduino nano will be used to control the n64. For example it will
				measure the battery voltage, a battery meter, lcd to TV switch, and LCD controls.
			</p>			
			<p style="text-align:center">
				<img class="img-responsive" src="../inc/images/n64.jpg" alt="...">
			</p> 
		</div>
	</div>	
	
</div>
<?php include 'footer.php'; ?>