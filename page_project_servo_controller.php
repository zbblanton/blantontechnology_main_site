<?php include 'header.php'; ?>
<style>

</style>
<div class="container page">
	<div class="row page_header">  			
		<div class="col-md-12">
  			<h1>Servo Controller for PIC Microcontrollers</h1> 
			<p>
				16 Channel Servo controller using a TLC5940 PWM Driver
			</p>
			<!-- <img class="img-responsive" src="../inc/images/servo_controller_sch.png" alt="..."> --> 
		</div>	
	</div>
	<div class="row page_row">		
		<div class="col-md-12">		
			<h3>TLC5940 Servo Controller for PIC Microcontrollers</h3>
			<p>
				See the full source code and tutorial at <a href="https://bitbucket.org/zbblanton/tlc5940_servo_controller">Bitbucket</a>
			</p>	
			<p style="text-align:center">			
				<img class="img-responsive" src="http://i.imgur.com/F2dGZP9.png" alt="schematic">
			</p>
			<p>	
				<h1>16 Channel Servo Controller</h1>
				This is a 16 channel servo controller that uses the TLC5940 PWM driver with a PIC18F4520. This controller was used as a replacement
				for the Arduino controller on my robotic arm. The TLC5940 was meant to off load the servo controls from the PIC18F4520 and for the
				most part it did. There was however a need for a constant reset of a count pin using up some of my interrupt time. This controller
				allowed me to have very precise and stable control of my robotic arm.
			</p>	
			<p style="text-align:center">				
				<img class="img-responsive" src="http://i.imgur.com/UHxN4j8.png" alt="schematic">
			</p>
		</div>
	</div>
</div>
<?php include 'footer.php'; ?>