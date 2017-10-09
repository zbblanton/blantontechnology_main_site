<?php include 'header.php'; ?>
<div class="container page">
	<div class="row page_header">  			
		<div class="col-md-12">
  			<h1>AWS S3 Backup Script</h1> 
			<p>
				PHP script to backup apache configuration, MySQL databases, and website files to AWS S3.
			</p>
			<!-- <img class="img-responsive" src="../inc/images/code_snippet.jpg" alt="..."> --> 
		</div>	
	</div>
	<div class="row page_row">		
		<div class="col-md-12">	
			<h1>S3 Backups</h1>	
			<p>	
				This project comes from a need for a backup solution for a server I was running. I needed daily backups that were off-site
				and needed some kind of encryption. I found out how cheap AWS S3 storage was and decided to try it out. I wrote the simple
				PHP script below that will backup the apache configuration, the MySQL databases, and the website files. The script starts
				by compressing everything into encrypted 7z files, then proceeds to do maintenance by deleting old files, and finally sends
				the files AWS.
			</p>			
			<p style="text-align:center">
				<img class="img-responsive" src="../inc/images/code_snippet.jpg" alt="...">
			</p>
		</div>
	</div>
	<div class="row page_row pastebin">		
		<div class="col-md-12">
			<h1>PHP Script</h1>
			<script src="//pastebin.com/embed_js/UF5jPt6a"></script>
		</div>
	</div>
</div>
<?php include 'footer.php'; ?>