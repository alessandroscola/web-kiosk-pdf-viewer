<?php 
require_once "config.php";
$pag="";
if(isset($_GET['pag']) and !empty($_GET['pag'])) $pag=$_GET['pag'];
?>
<!doctype html>
<html lang="en">
	<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
 	
	<!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	
	<!-- jsPDF Scripts and CSS -->
	<link rel="stylesheet" href="js/pdfjs/viewer.css">
	<!-- This snippet is used in production (included from viewer.html) -->
	<link rel="resource" type="application/l10n" href="js/pdfjs/locale/locale.properties">
	<script src="js/pdfjs/pdf.js"></script>
	<script src="js/pdfjs/viewer.js"></script>

    <!-- Bootstrap 4.1.3 CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
   
    <!-- Font-awesome CSS -->    
	<link rel="stylesheet" href="font-awesome/css/all.css">
	
	<!-- Custom CSS -->
	<link rel="stylesheet" href="css/custom.css">
	
	<!-- Keyboard CSS -->
	<link rel="stylesheet" type="text/css" href="<?php print CONFIG_BASE_URL ?>/keyboard-master/css/keyboard-basic-custom.css">	
	
		
    <title>PDF Viewer Demo</title>
    </head>
    <body>
	    <div id="wrapper">
		
		
			<!-- Sidebar -->
			<nav id="sidebar">
				<ul class="sidebar-nav">
					<li <?php if(empty($pag)) print 'class="active"' ?>><a href="index.php" title="PDF"><i class="far fa-file-pdf"></i></a></li>
					<li <?php if($pag=='credits') print 'class="active"' ?>><a href="?pag=credits" title="Info"><i class="fas fa-info-circle"></i></a></li>
				</ul>			
			</nav> 	

			<!-- Page Content -->
			<div id="content">
					<div class="container-fluid">
						<?php
						if (!isset($pag) or empty($pag)) include("pdf_viewer.php"); 
						elseif ($pag == "pdf_viewer") include("pdf_viewer.php");
						elseif ($pag == "credits") include("credits.php");
						else include("pdf_viewer.php"); 						
						?>
					</div>
			</div>
		</div> <!-- wrapper -->
		  
				
		<script src="<?php print CONFIG_BASE_URL ?>/keyboard-master/dist/js/jquery.keyboard.min.js"></script>
		<!-- keyboard extensions (optional) -->
		<script src="<?php print CONFIG_BASE_URL ?>/keyboard-master/dist/js/jquery.mousewheel.min.js"></script>
		<script src="<?php print CONFIG_BASE_URL ?>/keyboard-master/dist/js/jquery.keyboard.extension-typing.min.js"></script>
		<script src="<?php print CONFIG_BASE_URL ?>/keyboard-master/dist/js/jquery.keyboard.extension-caret.min.js"></script>
		
		
    </body>
</html>