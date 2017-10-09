<?php include 'header.php'; ?>
<style>
	.hidden_warning{
		display: none;
	}
	@media (max-width: 768px) {
		.hidden_warning{
			display: block;
		}
	}
</style>
<div class="container page">
	<div class="row page_header">  			
		<div class="col-md-12">
  			<h1>Meteorites</h1> 
			<p>
				Simple game made with phaser.io 2D game engine for the iPhone and Android. 
			</p> 
			<!-- <img class="img-responsive" src="../inc/images/simple_game.png" alt="..."> -->
		</div>	
	
	</div>
	<div class="row page_row">		
		<div class="col-md-12">
			<h1>Simple Game</h1>		
			<p>	
				I've always wanted to learn about game engines and build a simple game. I tried unreal engine
				but it was overkill for what I wanted to do. I wanted to build a small simple game
				for the iOS or android. After searching around I found phaser.io which is a simple 2d game
				engine that uses JavaScript and WebGL. It was a really fun learning experience, check out the
				game and source below.
			</p>
			<p style="text-align:center">
				<img class="img-responsive" src="../inc/images/simple_game.png" alt="...">
			</p>			
		</div>
	</div>
	<div class="row page_row">	
		<div class="col-md-12" style="padding:15px;text-align:center">		
			<p class="hidden_warning" style="text-align:center">
				Game not optimized for mobile browser.
			</p> 	
			<iframe src="game2/index.html" width="320" height="580" seamless></iframe>
		</div>
	</div>
	<div class="row page_row pastebin">		
		<div class="col-md-12">
			<script src="//pastebin.com/embed_js/yEECgwWU"></script>
		</div>
	</div>
</div>
<?php include 'footer.php'; ?>