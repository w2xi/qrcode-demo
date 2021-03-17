<?php 

require './vendor/autoload.php';
require './function.php';

use Da\QrCode\QrCode;

$qrCode = (new QrCode('https://www.wanjiali.net/road/#/home?scene='.genRandomChars(16)))
    ->setSize(250)
    ->setMargin(5)
    ->useForegroundColor(0,0,0);

// now we can display the qrcode in many ways
// saving the result to a file:

$qrCode->writeFile(sprintf('./images/%s.png', genRandomChars(32))); // writer defaults to PNG when none is specified

// display directly to the browser 
header('Content-Type: '.$qrCode->getContentType());
echo $qrCode->writeString();
