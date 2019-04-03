<?php
/**
 * Created by PhpStorm.
 * User: sjawa
 * Date: 4/3/2019
 * Time: 2:23 PM
 */

//
$array = array(7,9,8,9,8,8,6);
function printArr($array)
{
    foreach ($array as $value) {
        echo "$value"."<br>";
    }
}

// largest function
function largest($array)
{
    $maxValue =max($array);
    return $maxValue;

}

// average function
function avg($array)
{
    $avg = array_sum($array)/count($array);
    return $avg;

}

// remove dups function
function removeDups($array)
{
    $rmvDups = array_unique($array);
    foreach ( $rmvDups as $value) {
echo $value."<br>";
    }
    return $rmvDups;

}

// distributions function
function distribution($array)
{
    $nArray = array_count_values($array);
        ksort($nArray);
        return $nArray;
}

