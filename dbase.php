<?php

class dbase {
     
    private static $site_db = null;
    
    const HOST = '127.0.0.1';
    const USER = 'mysql';
    const PASS = 'mysql';
    const DB   = 'newdb';

        static function activate()
        {
            self::$site_db = new mysqli(self::HOST,self::USER,self::PASS,self::DB);
            if(self::$site_db->connect_errno)
                echo 'Не удалось подключиться к бд:'.self::$site_db->connect_error;
            self::$site_db->query('SET NAMES \'utf8\'');
        }

        static function db()
        {
            if(!self::$site_db)
                self::activate();
            return self::$site_db;
        }


}
