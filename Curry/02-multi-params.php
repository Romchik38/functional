<?php

declare(strict_types=1);

$curry = function (callable $fn) {
    return (
        function (...$params) use ($fn) {
            return $fn(...$params);
        }
    );
};

$power = function (int $numb, int $power = 1) {
    return pow($numb, $power);
}; 

$curriedPower = $curry($power);

$result = $curriedPower(2, 8);

var_dump($result);