<?php

function show($get_request) 
{
    echo "<pre>";
    print_r($get_request);
    echo "</pre>";
}

function esc($str)
{
    return htmlspecialchars($str);
}