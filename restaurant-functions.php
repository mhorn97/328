<?php
    /*
     * Michael Horn & Scott Medlock
     * 1/5/2018
     * restaurant-functions.php
     * Functions for tip-calculator.php
     */

    function calcTip($billAmount, $tipPercentage) {
        return $billAmount * $tipPercentage;
    }

    function calcTax($billAmount){
        return $billAmount * .1;
    }

    function perPerson($total, $numPeople){
        return $total / $numPeople;
    }

    function convertPercent($stringPercent){
        $percent = str_replace('%', '', $stringPercent);
        return $percent * .01;
    }

    function isValidValue($value){
        if(empty($value) || $value < 0 || !is_numeric($value)){
            echo "Input is invalid: value was $value";
            return false;
        }
        else {
            return true;
        }
    }