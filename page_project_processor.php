<?php include 'header.php'; ?>
<style>
@media (min-width: 768px) {
	.page_header>.col-md-12>img{
		width: initial;
		height: initial;
		max-width: 700px;
		max-height: 600px;
	}
}
</style>
<div class="container page">
	<div class="row page_header">  			
		<div class="col-md-12">
  			<h1>Single Cycle Processor</h1> 
			<p>
				A simple 16-bit processor with basic instructions wrote in Verilog. 
			</p>
 			<!-- <img class="img-responsive" src="../inc/images/processor.png" alt="..."> -->
		</div>		
	</div>
	<div class="row page_row">		
		<div class="col-md-12">
			<h1>Simple Processor</h1>		
			<p>					
				This was a semester long project for my advance architecture class. The task was
				to build a 16-bit processor that ran a custom architecture with an instruction set similar to MIPS. 
				This is only the first part of the class, the rest of the semester we added on different things, for
				example we added pipelining and a floating-point module.
			</p>
			<p style="text-align:center">
				<img class="img-responsive" src="../inc/images/processor.png" alt="...">
			</p>			
		</div>
	</div>
	<div class="row page_row pastebin">		
		<div class="col-md-12">
			<h1>Verilog</h1>
			<script src="//pastebin.com/embed_js/nU3A6A9P"></script>
		</div>
	</div>
</div>
<?php include 'footer.php'; ?>