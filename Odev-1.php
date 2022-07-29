<?php
error_reporting(E_ALL);

function ucgen($str) {
    $stn = 1;
    while ($str>=$stn)
    {
        for ($i = 1; $i <= $stn; $i++)
        {
            echo "O";
        }
        echo "<br>";
        $stn++;
    }
}

$a = 15;
if (is_int($a))
    ucgen($a);
else
    echo "GİRİLEN DEĞER TAM SAYI OLMALI!";

?>