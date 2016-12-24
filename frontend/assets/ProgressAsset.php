<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 24.12.16
 * Time: 22:07
 */

namespace frontend\assets;

use yii\web\AssetBundle;
use yii\web\View;

class ProgressAsset extends AssetBundle
{
    public $basePath = '@webroot/themes/nprogress';
    public $baseUrl = '@web/themes/nprogress';
    public $css = [
        'http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300&subset=latin,cyrillic',
        'nprogress.css'
    ];
    public $js = [
        'http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js',
        'nprogress.js'
    ];
    public $jsOptions = ['position' => View::POS_HEAD];
    public $depends = [
    ];
}