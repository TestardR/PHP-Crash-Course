<?php
    // echo date('d'); // Day
    // echo date('m'); // Month
    // echo date('y'); // Year
    // echo date('l'); // Day of the week
    // echo date('d/m/y');

    // echo date('h'); // hour
    // echo date('i'); // minute, second with s
    // echo date('a'); // AM or PM

    // echo date('h:i:sa');

    // Set Time Zone
    // date_default_timezone_set('America/New_York');
    // echo date('h:i:sa');

    $timestamp = mktime(3, 12, 1987);
    // echo $timestamp;
    // echo date('d/m/Y', $timestamp);

    $timestamp2 = strtotime('7:00pm March 22 2016');
    // echo $timestamp2;
    echo date('m/d/Y h:i:sa', $timestamp2);

    $timestamp3 = strtotime('next Sunday');
    $timestamp4 = strtotime('+2 Days');

?>