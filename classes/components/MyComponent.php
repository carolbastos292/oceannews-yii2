<?php
/**
 * Created by PhpStorm.
 * User: basto
 * Date: 12/09/2018
 * Time: 12:45
 */

namespace app\classes\components;


use yii\base\Component;

class MyComponent extends Component
{
    public $string;
    public function printString(){
        echo $this->string;
    }
}