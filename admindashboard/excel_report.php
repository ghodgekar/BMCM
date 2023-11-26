<?php
require '../assets/plugin/excel/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// Create a new PhpSpreadsheet object
$spreadsheet = new Spreadsheet();

// Get the active sheet
$sheet = $spreadsheet->getActiveSheet();

// HTML content
$html = "<table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
            <tr>
                <td>John Doe</td>
                <td>john@example.com</td>
                <td>123-456-7890</td>
            </tr>
            <tr>
                <td>Jane Doe</td>
                <td>jane@example.com</td>
                <td>987-654-3210</td>
            </tr>
        </table>";

// Load HTML content into the spreadsheet
$spreadsheet->getActiveSheet()->fromArray(['Html Table'], null, 'A1');
$spreadsheet->getActiveSheet()->getCell('A2')->setValue($html);

// Save the spreadsheet to a file
$writer = new Xlsx($spreadsheet);
$excelPath = 'output.xlsx';
$writer->save($excelPath);
?>
