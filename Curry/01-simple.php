<?php

declare(strict_types=1);

$curry = function (callable $fn) {
    return (
        function ($param) use ($fn) {
            return $fn($param);
        }
    );
};

$square = function (int $numb) {
    return $numb * $numb;
}; 

$curriedSquare = $curry($square);

$result = $curriedSquare(5);

var_dump($result);