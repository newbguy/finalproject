<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
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
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'Applied Web - Final',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Speakers', 'url' => ['/site/speakers']],
            ['label' => 'Schedule', 'url' => ['/site/schedule']],
            ['label' => 'Venue', 'url' => ['/site/venue']],
            
            //['label' => 'Contact', 'url' => ['/site/contact']],
            //['label' => 'User-Login', 'url' => ['/user/security/login'],],
           
            Yii::$app->user->isGuest ?
            ['label' => 'Sign in', 'url' => ['/user/security/login']] :
            ['label' => 'Sign out (' . Yii::$app->user->identity->username . ')', 'url' => ['/user/security/logout'], 'linkOptions' => ['data-method' => 'post']],
            ['label' => 'Signup', 'url' => ['/user/registration/register'], 'visible' => Yii::$app->user->isGuest],            
            ['label' => 'Edit Profile', 'url' => ['/user/settings/account'], 'visible' => !Yii::$app->user->isGuest],
            ['label' => 'User DB', 'url' => ['/user/admin/index'], 'visible' => !Yii::$app->user->isGuest && Yii::$app->user->identity->isAdmin],
            
            
//              Yii::$app->user->isAdmin ?
//    ['label' => 'Sign in', 'url' => ['/user/security/login']] :
//    ['label' => 'Sign out (' . Yii::$app->user->identity->username . ')',
//        'url' => ['/user/security/logout'],
//        'linkOptions' => ['data-method' => 'post']],
//['label' => 'Register', 'url' => ['/user/registration/register'], 'visible' => !Yii::$app->user->isGuest && Yii::$app->user->identity->isAdmin],
            
//            Yii::$app->user->isGuest ? (
//                ['label' => 'Login', 'url' => ['/site/login']]
//            ) : (
//                '<li>'
//                . Html::beginForm(['/site/logout'], 'post')
//                . Html::submitButton(
//                    'Logout (' . Yii::$app->user->identity->username . ')',
//                    ['class' => 'btn btn-link logout']
//                )
//                . Html::endForm()
//                . '</li>'
//            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= date('Y') ?> Andre Harriott - 2011020845</p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
