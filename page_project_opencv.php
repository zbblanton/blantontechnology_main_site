<?php include 'header.php'; ?>
<div class="container page">
	<div class="row page_header">  			
		<div class="col-md-12">
  			<h1>OpenCV Light/Dot Tracking</h1> 
			<p>
				Small project that uses OpenCV to track a dot and then move a light to the position.
			</p>
			<!-- <img class="img-responsive" src="../inc/images/opencv.png" alt="..."> --> 
		</div>	
	</div>
	<div class="row page_row">		
		<div class="col-md-12">		
			<h1>OpenCV Tracking</h1>	
			<p>	
				This is a small project where I used OpenCV to learn about object tracking. There are two videos below, the left is
				a simple program that creates a line behind the dot as it moves. The right video shows a green LED mounted to two servos, where
				the LED follows the Dot. You can see in the left video I had the coordinates output as the dot moved, almost like making a 2D
				space. In the right video I then made a small algorithm that would convert the coordinates into degrees for the servos to move to.
			</p>
			<div class="row" style="text-align:center;padding:10px;">
				<div class="col-md-6">
		  			<iframe style="width:100%;height:315px;" src="https://www.youtube.com/embed/eMJq8KExoI0" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="col-md-6">
		  			<iframe style="width:100%;height:315px;" src="https://www.youtube.com/embed/QDz5-NUcMMg" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
	
</div>
<?php include 'footer.php'; ?>