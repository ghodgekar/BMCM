<?php
require_once '../assets/plugin/dompdf/vendor/autoload.php';
use Dompdf\Dompdf;
use Dompdf\Options;
$options = new Options();
$options->set('isRemoteEnabled', true);
$dompdf = new Dompdf($options);
$html = file_get_contents("view_pdf.php"); 
$dompdf->loadHtml($html, 'UTF-8'); 
$dompdf->setPaper('A4', 'landscape'); 
$dompdf->render();
$dompdf->stream("codexworld", array("Attachment" => 0));
?>