<?php

    function dbconnect(){
        $db= new PDO("mysql:dbhost=localhost;dbname=chatapp", "root", "",[
            PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING,
            PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ,
        ]);
        return $db;
    }

