<?php

$float32ToInt32 = function($n) {
    return (int)$n;
};

$exports['float32ToInt32'] = $float32ToInt32;
return $exports;
