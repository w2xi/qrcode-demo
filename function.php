<?php 

function genRandomChars($length = 6)
{
    $source = '123456789abcdefghjkmnpqrstuvwxyABCDEFGHJKLMNPQRSTUVWXY';
    $str = '';
    for ( $i = 0; $i < $length; $i++ ){
        $index = mt_rand(0, strlen($source)-1);
        $str .= $source[$index];
    }
    return $str;
}