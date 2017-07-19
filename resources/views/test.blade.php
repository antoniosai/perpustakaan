<?php
$rootdir = dirname($_SERVER["DOCUMENT_ROOT"]);

$pdf_file = $rootdir.'/public/uploads/pdf/test.pdf';

echo dirname($pdf_file) . PHP_EOL;


// $file = File::get($pdf_file);

var_dump($pdf);

$im = new \Imagick( $pdf_file.'[0]'); 
$im->setImageColorspace(255); 
$im->setResolution(300, 300);
$im->setCompressionQuality(95); 
$im->setImageFormat('jpeg'); 
$im->writeImage('thumb.jpg'); 
$im->clear(); 
$im->destroy();
?>