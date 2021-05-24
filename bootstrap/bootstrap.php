<?php
require INC_ROOT . '/vendor/autoload.php';

use Practice\Factories\DesktopFactory;
use Practice\Factories\LaptopFactory;

$data = [
    [
        'brand' => 'Dell',
        'name' => 'XPS 13',
        'type' => 'laptop',
        'cpu' => 'Intel Core i3-1115G4',
        'memory' => '8GB LPDDR4x 4267MHz',
        'battery' => '52 WHr',
        'weight' => '1.16kg',
    ], [
        'brand' => 'Dell',
        'name' => 'XPS Desktop',
        'type' => 'desktop',
        'cpu' => 'Intel Core i3-10100',
        'memory' => '1x8GB DDR4 2666MHz',
    ], [
        'brand' => 'Dell',
        'name' => 'Alienware m15 R4',
        'type' => 'laptop',
        'cpu' => 'Intel Core i9-10980HK',
        'memory' => '32GB DDR4 2933MHz',
        'battery' => '86 WHr',
        'weight' => '2.11kg',
    ], [
        'brand' => 'Apple',
        'name' => 'MacBook Air',
        'type' => 'laptop',
        'cpu' => 'Apple M1 chip',
        'memory' => '8GB',
        'battery' => '49.9 WHr',
        'weight' => '1.29kg',
    ], [
        'brand' => 'Apple',
        'name' => 'Mac Pro',
        'type' => 'desktop',
        'cpu' => '3.5GHz Intel Xeon W',
        'memory' => '4x8GB DIMMs',
    ], [
        'brand' => 'Apple',
        'name' => 'Mac mini',
        'type' => 'desktop',
        'cpu' => 'Apple M1 chip',
        'memory' => '8GB',
    ], [
        'brand' => 'FUJITSU',
        'name' => 'LIFEBOOK A3510',
        'type' => 'laptop',
        'cpu' => 'Intel Core i5-1035G1',
        'memory' => '32GB',
        'battery' => '45 WHr',
        'weight' => '1.95kg',
    ], [
        'brand' => 'FUJITSU',
        'name' => 'ESPRIMO D538',
        'type' => 'desktop',
        'cpu' => 'Intel Core i7-9700',
        'memory' => '32GB DDR4 2666 MHz',
    ],
    ];

$format = htmlspecialchars($_GET['format']);

$a = array_filter($data,'searchBrandName');

foreach ($a as $value) {
    print_r($value);
    if ($value['type'] === 'desktop') {
        // $b = array_values($value);
        echo '1';
        // $computer[] = (new DesktopFactory())->createComputer($b);

    }
}


function searchBrandName($value) {
    $brandName = htmlspecialchars($_GET['brand']);
    return $value['brand'] === $brandName;
}

function searchComputerName($value) {
    $computerName = htmlspecialchars($_GET['name']);
    return $value['name'] === $computerName;
}

function searchComputerType($value) {
    $computerType = htmlspecialchars($_GET['type']);
    return $value['type'] === $computerType;
}


// if ($computerType === 'desktop') {
//     $computers = (new DesktopFactory())->createComputer();
// } elseif ($computerType === 'laptop') {
//     $computers = (new LaptopFactory())->createComputer();
// } else {
//     die;
// }

// switch($format) {
//     case 'table':
//         $thead = '';
//         $tbody = '<tbody>';

//         foreach ($computers as $computer) {
//             if ('' === $thead) {
//                 $a = get_object_vars($computer);
//                 $thead.= '<thead>';
//                 $thead.= '<tr>';
//                 $thead.= '<th>';
//                 $thead = implode(' ', array_keys($a));
//                 $thead.= '</th>';
//                 $thead.= '</tr>';
//                 $thead.= '</thead>';
//             }
//             $a = get_object_vars($computer);
//             $tbody.= '<tr>';
//             $tbody.= '<td>';
//             $tbody.= implode('</td><td>', array_values($a));
//             $tbody.= '</td>';
//             $tbody.= '</tr>';
//         }
//         $tbody.= '</tbody>';
//         $tableHtml = '';
//         $tableHtml.= '<table>';
//         $tableHtml.= $thead;
//         $tableHtml.= $tbody;
//         $tableHtml.= '</table>';
//         $response = $tableHtml;
//         break;

//     case 'json':
//         $response = json_encode($computers);
//         break;

//     case 'csv':
//         $header = null;
//         foreach ($computers as $computer) {
//             if (null === $header) {
//                 $header = get_object_vars($computer);
//                 $header = implode(',', array_keys($header));
//                 $rows[] = $header;
//             }
//             $row = get_object_vars($computer);
//             $rows[] = implode(',', array_values($row));
//         }
//         $response = implode('<br>', $rows);
//         break;

//     default:
//         die;
// }
// print_r($response);
