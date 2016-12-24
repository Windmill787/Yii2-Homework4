<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use common\widgets\TestWidget;
use frontend\assets\GreyAsset;
use yii\widgets\Menu;
use frontend\assets\ProgressAsset;

$this->registerCssFile('@web/themes/grey/css/input.css');
ProgressAsset::register($this);
GreyAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

</head>
<body class="wsite-theme-light tall-header-page wsite-page-index weeblypage-index">
<?php $this->beginBody() ?>

<div id="container">
    <table id="header">
        <tr>
            <td id="logo"><span class='wsite-logo'><a href='/'><span id="wsite-title"><?php echo Html::encode(\Yii::$app->name); ?></span></a></span></td>
            <td id="header-right">
                <table>
                    <tr>
                        <td class="phone-number"></td>
                        <td class="social"></td>
                    </tr>
                </table>
                <div class="search"></div>
            </td>
        </tr>
    </table>

<div id="main">
    <div id="navigation">
    <?php
    echo Menu::widget([
        'options' => ['class' => 'nav'],
        'items' => [
            ['label' => 'Students', 'url' => ['/students/index']],
            ['label' => 'Homework', 'url' => ['/homework/index']],
            ['label' => 'Department', 'url' => ['/department/index']],
            ['label' => 'Thema', 'url' => ['/thema/index']],
            ['label' => 'Test', 'url' => ['/test/index']],
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ?
                ['label' => 'Login', 'url' => ['/site/login']] :
                ['label' => 'Logout (' . Yii::$app->user->identity->username .')' , 'url' => ['/site/logout']],
        ],
    ]);

    ?>
    <div class="clear"></div>
</div>

    <div class="banner-container">
        <div id="banner">
            <div class="wsite-header"></div>
        </div>
    </div>

    <div id="container">
        <div id='wsite-content' class='wsite-not-footer'>

        <?= $content ?>
        </div>

        <div class="clear"></div>
    </div>
</div>

<footer id="footer">
    <div class="banner-container">
        <p>&copy; My Company <?= date('Y') ?></p>
        <p><?= Yii::powered() ?></p>
    </div>
</footer>
</div>

<script>
    $('body').show();
    $('.version').text(NProgress.version);
    NProgress.start();
    setTimeout(function() { NProgress.done(); $('.fade').removeClass('out'); }, 1000);
</script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
