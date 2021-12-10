<?php
require_once "../config.php";

$filename=$_GET['filename'];

header("Content-type:application/pdf");

// It will be called downloaded.pdf
header("Content-Disposition:inline;filename='".$filename."'");

 $filename_path="../PDF_FILES/".basename($filename).".pdf";
 $filename_path_not_fount="../PDF_FILES/PDF_NOT_FOUND.pdf";
 
 if(file_exists($filename_path))
 {
   // The PDF source is in original.pdf
   readfile($filename_path);	
 }
 else
 {
	//die("File not found: ".$filename_path);
	 readfile($filename_path_not_fount);	
 }
?>