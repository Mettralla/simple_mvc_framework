<?php

if($_SERVER['SERVER_NAME'] == 'localhost')
{
    define('ROOT', 'http://localhost/mcv_framework/public');
} else {
    define('ROOT', 'https://www.yourwebsite.com');
}