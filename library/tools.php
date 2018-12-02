<?php


function path($url){
    $url = explode('/', rtrim(filter_var($_GET['url'], FILTER_SANITIZE_URL), '/'));
    if (isset($url[2])){
        return $path = '../../';
    } elseif (isset($url[1])){
        return $path = '../';
    } else {
        return $path = '';
    }
}