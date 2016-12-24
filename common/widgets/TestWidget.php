<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 24.12.16
 * Time: 17:51
 */

namespace common\widgets;

use yii\base\Widget;
use yii\helpers\Html;

class TestWidget extends Widget
{
    public $message;

    public function init()
    {
        parent::init();
        if ($this->message === null) {
            $this->message = 'Hello World';
        }
    }

    public function run()
    {
        return Html::encode($this->message);
    }

}