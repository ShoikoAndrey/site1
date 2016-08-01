<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author ShoikoA
 */
class UserController {

    function actionList() {

        $DB = Database::getConnection();

        $query = "SELECT * FROM users";

        $STH = $DB->query($query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);

        $users_array = array();
        $i = 0;
        while ($row = $STH->fetch()) {
            $users_array[$i]['ID'] = $row['ID'];
            $users_array[$i]['name'] = $row['name'];
            $users_array[$i]['email'] = $row['email'];
            $users_array[$i]['password'] = $row['password'];
            $users_array[$i]['role'] = $row['role'];
            $i++;
        }
        print_r($users_array);
    }

    function actionIndex() {

        include ROOT . '\administrator\view\index.php';
    }

}
