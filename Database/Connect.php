<?php

namespace Database;

use RedBeanPHP\R;

class Connect
{
    /**
     * Подключение к базе данных через `RedBeanPHP`
     * @return void
     */
    public static function connect() : void
    {
        $configDb = require 'Configs/configDb.php';

        $host = $configDb['host'];
        $dbname = $configDb['dbname'];

        R::setup("mysql:host=$host;dbname=$dbname", $configDb['user'], $configDb['password'], false);
    }
}

?>