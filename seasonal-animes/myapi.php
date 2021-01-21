<?php
/**
 * Created by PhpStorm.
 * User: KING
 * Date: 1/30/2020
 * Time: 10:38 PM
 */

function get_seasonal_animes(){
    $url = "https://api.jikan.moe/v3/season/";
    $year = date("Y");
    $season = get_season((int)date("m"));
    $url_build = $url.$year."/".$season;

    $contents = file_get_contents($url_build);
    return json_decode($contents);
}

function get_season($a){
    switch ($a) {
        case 1:
            return 'winter';
            break;
        case 2:
            return 'winter';
            break;
        case 3:
            return 'spring';
            break;
        case 4:
            return 'spring';
            break;
        case 5:
            return 'spring';
            break;
        case 6:
            return 'summer';
            break;
        case 7:
            return 'summer';
            break;
        case 8:
            return 'summer';
            break;
        case 9:
            return 'fall';
            break;
        case 10:
            return 'fall';
            break;
        case 11:
            return 'fall';
            break;
        case 12:
            return 'winter';
            break;
    }
    return 1;
}