<?php
/**
 * Created by PhpStorm.
 * User: floba
 * Date: 27.01.2019
 * Time: 21:40
 */

namespace app\controllers;

class MainController extends AppController
{
    public function indexAction(){
        $this->setMeta('Главная страница', 'Описание', 'Ключевые слова');
    }
}