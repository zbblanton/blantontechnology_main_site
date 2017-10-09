<?php include 'header.php'; ?>
<div class="container page">
	<div class="row page_header">  			
		<div class="col-md-12">
  			<h1>IoT Toggling LEDs</h1> 
			<p>
				Small project to learn about Node.js. Remotely controls LEDs on an Arduino board.
			</p> 
			<!-- <img class="img-responsive" src="../inc/images/simple_game.png" alt="..."> -->
		</div>	
	
	</div>
	<div class="row page_row">		
		<div class="col-md-12">
			<h1>IoT</h1>							
			<p>	
				I wanted to learn what all Node.js could do so I made this small project that toggles LED's from a webpage.
				Below I've pasted three different blocks of code. The first is a small Arduino sketch, this sketch starts up
				a serial connection and listens for a string such as "led11:toogle" and then toggles the LED. The serial
				connection is connected to a laptop with a Node.js server running on Ubuntu. This leads to the next chunk of
				code. This piece is the Node.js server that could actually be simplified but the concept worked perfectly. 
				The server was simply a pass-through, the server received some string from a client and passed it to the
				serial port. The last paste is just a snippet for the script that runs on the client. The picture above shows
				a couple buttons, the buttons are linked to jQuery and sends a toggle command to our server whenever pressed.
			</p>
			<p style="text-align:center">
				<img class="img-responsive" src="../inc/images/led_web_btns.png" alt="...">	
			</p>
		</div>
	</div>
	<div class="row page_row pastebin">		
		<div class="col-md-12">			
			<h1>Arduino</h1>
			<script src="//pastebin.com/embed_js/cJQzrGkb"></script>
		</div>
	</div>
	<div class="row page_row pastebin">		
		<div class="col-md-12">
			<h1>Server</h1>
			<script src="//pastebin.com/embed_js/Fi4D0rcv"></script>
		</div>
	</div>
	<div class="row page_row pastebin">		
		<div class="col-md-12">
			<h1>Client</h1>
			<script src="//pastebin.com/embed_js/v59n1Zut"></script>
		</div>
	</div>
</div>
<?php include 'footer.php'; ?>