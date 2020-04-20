<?php
function checkMinNumber($arrayNumber)
{
    $minNumber = $arrayNumber[0];
    foreach ($arrayNumber as $number) {
        if ($number < $minNumber) {
            $minNumber = $number;
        }
    }
    return $minNumber;
}

function checkMaxNumber($arrayNumber)
{
    $maxNumber = $arrayNumber[0];
    for ($i = 1; $i < count($arrayNumber); $i++) {
        if ($arrayNumber[$i] > $maxNumber) {
            $maxNumber = $arrayNumber[$i];
        }
    }
    return $maxNumber;
}

$arrayRandomIntNumber = [];
for ($i = 0; $i < 100; $i++) {
    $arrayRandomIntNumber[$i] = rand(0, 100);
}
var_dump(checkMinNumber($arrayRandomIntNumber));
var_dump(checkMaxNumber($arrayRandomIntNumber));
