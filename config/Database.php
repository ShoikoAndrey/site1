<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Database
 *
 * @author ShoikoA
 */
class Database {

    static public function getConnection() {
        $host = "127.0.0.1";
        $dbname = "site1";
        $user = "root";
        $pass = "";

        try {
            $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
            //echo 'OK';
        } catch (Exception $exc) {
            die($exc->getTraceAsString());
        }
        return $DBH;
    }

}
