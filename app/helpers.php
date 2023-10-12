<?php

if (!function_exists('abbreviateNumber')) {
    function abbreviateNumber($number) {
        $abbreviations = array(
            12 => 'T',
            9 => 'M',
            6 => 'jt'
        );

        foreach ($abbreviations as $exponent => $abbreviation) {
            if ($number >= pow(10, $exponent)) {
                $abbreviatedNumber = $number / pow(10, $exponent);
                $abbreviatedNumber = number_format($abbreviatedNumber, 1, ',', '.');
                return $abbreviatedNumber . $abbreviation;
            }
        }

        return $number;
    }

}
