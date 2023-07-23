<?php

if($_SERVER['SERVER_NAME'] == 'localhost')
{
    /** database config **/
    define('DBNAME', 'my_db');
    define('DBHOST', 'localhost');
    define('DBUSER', 'user');
    define('DBPASS', 'password');
    // define('DBDRIVER', '');

    define('ROOT', 'http://localhost/mcv_framework/public');
} else {
    /** database config **/
    define('DBNAME', 'my_db');
    define('DBHOST', 'localhost');
    // define('DBUSER', 'user');
    // define('DBPASS', 'password');
    // define('DBDRIVER', '');

    define('ROOT', 'https://www.yourwebsite.com');
}

define('APP_NAME', "MY Website");

define('DEBUG', true);
