<?php
/**
 * Created by PhpStorm.
 * User: floba
 * Date: 27.01.2019
 * Time: 21:57
 */

namespace app\controllers;

use app\models\AppModel;
use core\base\Controller;

class AppController extends Controller
{
    public function __construct($route)
    {
        parent::__construct($route);
        new AppModel();
    }
}