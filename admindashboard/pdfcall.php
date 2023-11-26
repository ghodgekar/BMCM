<?php
header('Content-type: text/html; charset=UTF-8');
// Include autoloader 
require_once '../assets/plugin/dompdf/vendor/autoload.php';
 
// Reference the Dompdf namespace 
use Dompdf\Dompdf; 
// $fontDirectory = '../assets/font/freeserif';

// Instantiate and use the dompdf class 
$dompdf = new Dompdf();

// Set font path
$dompdf->set_option('fontDir', '../assets/font/freeserif/');

// Set font
$dompdf->set_option('defaultFont', 'FreeSerif.ttf');

// Load content from html file 
$html = file_get_contents("demoview.php"); 
$dompdf->loadHtml($html, 'UTF-8'); 
 
// (Optional) Setup the paper size and orientation 
$dompdf->setPaper('A4', 'landscape'); 
// Render the HTML as PDF 
$dompdf->render(); 
 
// Output the generated PDF (1 = download and 0 = preview) 
$dompdf->stream("codexworld", array("Attachment" => 0));

?>