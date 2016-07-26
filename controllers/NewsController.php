<?php

class NewsController {

    public function actionIndex() {
        echo 'Список новостей';
        return true;
    }
    
    public function actionView() {
        echo 'Список одной новости';
        return true;
    }

}
