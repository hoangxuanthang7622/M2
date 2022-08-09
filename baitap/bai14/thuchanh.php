<?php

function isFirstLetterUpperCase($str)
{
    $regexp = '/^[0-9]/';
    if (preg_match($regexp, $str)) {
        echo("Ký tự đầu tiên của chuỗi là số");
    } else {
        echo("Ký tự đầu tiên của chuỗi không phải là số");
    }
}

isFirstLetterUpperCase('a423');
