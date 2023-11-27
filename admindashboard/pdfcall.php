<?php
header('Content-type: text/html; charset=UTF-8');
require_once '../assets/plugin/dompdf/vendor/autoload.php';
use Dompdf\Dompdf; 
$dompdf = new Dompdf();
$html = file_get_contents("view_pdf.php"); 
$dompdf->loadHtml($html, 'UTF-8'); 
$dompdf->setPaper('A4', 'landscape'); 
$dompdf->render(); 
$dompdf->stream("codexworld", array("Attachment" => 0));
?>