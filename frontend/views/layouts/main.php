<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
<!--    <link href="/frontend/web/css/main.less" rel="stylesheet/less" type="text/css">-->
    <script>
        less = {
//            relativeUrls: true,
            rootpath: "/web/"
        };
    </script>
</head>
<body>
<?php $this->beginBody() ?>

<div class="container-fluid">
    <div class="row row-eq-height">

        <div id="navbar-adaptive" class="navbar-container navbar-adaptive col-md-3 col-lg-2">
            <div class="navbar-header">
                    <button id="menu-btn" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#w0-collapse">
                    </button>

                <div class="status-block user">
                    <div class="img-block"></div>
                    <p class="title">Konstantin<br>
                        Konstantinopolskyy</p>
                </div>

                <a class="navbar-brand" href="<?= Url::to(['/site/index']); ?>"><?= Html::img('@web/images/img_logo.svg') ;?></a>

            </div>
            <div id="w0-collapse" class="navbar-collapse text-center collapse" aria-expanded="false" style="height: 1px;">
                <ul id="w1" class="navbar-nav nav text-center">
                    <li>
                        <a  class="<?php if (Yii::$app->controller->action->id == 'about') echo 'active' ?>"
                            href="<?= Url::to(['/site/index']); ?>"><?= Html::img('@web/images/ic_tokensale.svg') ;?>Home</a>
                    </li>
                    <li>
                        <a  class="<?php if (Yii::$app->controller->action->id == 'about') echo 'active' ?>"
                            href="<?= Url::to(['/site/about']); ?>"><?= Html::img('@web/images/ic_refferal.svg') ;?>About</a>
                    </li>
                    <li>
                        <a  class="<?php if (Yii::$app->controller->action->id == 'kyc') echo 'active' ?>"
                            href="<?= Url::to(['/site/kyc']); ?>"><?= Html::img('@web/images/ic_kyc.svg') ;?>KYC</a>
                    </li>
                    <li>
                        <a  class="<?php if (Yii::$app->controller->action->id == 'history') echo 'active' ?>"
                            href="<?= Url::to(['/site/history']); ?>"><?= Html::img('@web/images/ic_txs.svg') ;?>Purchase History</a>
                    </li>
                    <li>
                        <a  class="<?php if (Yii::$app->controller->action->id == 'security') echo 'active' ?>"
                            href="<?= Url::to(['/site/security']); ?>"><?= Html::img('@web/images/ic_security.svg') ;?>Security</a>
                    </li>
                    <li>
                        <a  class="<?php if (Yii::$app->controller->action->id == 'help-center') echo 'active' ?>"
                            href="<?= Url::to(['/site/help-center']); ?>"><?= Html::img('@web/images/ic_helpcenter.svg') ;?>Help Center</a>
                    </li>

                    <li class="divider-line">
                    </li>

                    <li>
                        <a  class="<?php if (Yii::$app->controller->action->id == 'about') echo 'active' ?>"
                            href="<?= Url::to(['/site/login']); ?>"><?= Html::img('@web/images/ic_document.svg') ;?>White Paper</a>
                    </li>

                    <li class="dropdown hidden-md hidden-lg">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="" aria-expanded="false">
                                Language
                                <span class="caret-alex"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="">
                                        English
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        Russian
                                    </a>
                                </li>
                            </ul>
                    </li>

                </ul>
            </div>

            <div class="navbar-footer">
                <div id="w0-collapse" class="navbar-collapse text-center collapse" aria-expanded="false" style="height: 1px;">
                    <ul class="navbar-nav nav text-center">
                        <li>
                            <a  class="<?php if (Yii::$app->controller->action->id == 'about') echo 'active' ?>"
                                href="<?= Url::to(['/site/index']); ?>">Go to Landing</a>
                        </li>
                        <?php
                        if (Yii::$app->user->isGuest) :?>
                            <li>
                                <a  class="<?php if (Yii::$app->controller->action->id == 'about') echo 'active' ?>"
                                    href="<?= Url::to(['/site/signup']); ?>">Signup</a>
                            </li>
                            <li>
                                <a  class="<?php if (Yii::$app->controller->action->id == 'about') echo 'active' ?>"
                                    href="<?= Url::to(['/site/login']); ?>">Login</a>
                            </li>
                        <? else :?>

                            <li>
                                <a  class="<?php if (Yii::$app->controller->action->id == 'about') echo 'active' ?>"
                                    href="<?= Url::to(['/site/logout']); ?>">Login</a>
                                <?= Html::a("Выход", ['/site/logout'], [
                                    'data' => ['method' => 'post'],
                                    'class' => '',
                                ]);?>
                            </li>
                        <? endif;?>
                    </ul>
                </div>
            </div>

        </div>

        <div class="col-md-9 col-lg-10">
            <div class="row">
                <div class="content-wrap clearfix">
                    <div class="info-block clearfix hidden-sm hidden-xs">
                        <span class="time">Friday, 18 March 2018</span>

                        <a href="<?= Url::to(['/site/kyc']); ?>" class="status-block kyc active">
                            <div class="img-block"></div>
                            <p class="title">KYC</p>
                            <p class="status-text">Passed</p>
                        </a>
                        <a href="#" class="status-block fa-2">
                            <div class="img-block"></div>
                            <p class="title">2FA</p>
                            <p class="status-text">Disabled</p>
                        </a>
                        <div class="status-block user">
                            <div class="img-block"></div>
                            <p class="title">Konstantin<br>
                                Konstantinopolskyy</p>
                        </div>
                    </div>

                        <?= $content ?>

                    <footer class="footer">
                        <h3 class="title">Copyright © 2012—2018 Token Sale Cabinet</h3>
                        <ul class="nav nav-block nav-pills">
                            <li>
                                <a href="">Terms &amp; Conditions</a>
                            </li>
                            <li>
                                <a href="">Privacy</a>
                            </li>
                            <li>
                                <a href="">Help Center</a>
                            </li>
                            <li>
                                <a href="">Contribute Instructions</a>
                            </li>
                            <li>
                                <a href="">White Paper</a>
                            </li>
                        </ul>

<!--                        <div class="dropdown">-->
<!--                            <a class="dropdown-toggle" data-toggle="dropdown" href="" aria-expanded="false">-->
<!--                                Language-->
<!--                                <span class="caret-alex"></span>-->
<!--                            </a>-->
<!--                            <ul class="dropdown-menu">-->
<!--                                <li>-->
<!--                                    <a href="">-->
<!--                                        English-->
<!--                                    </a>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a href="">-->
<!--                                        Russian-->
<!--                                    </a>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </div>-->
                        <select class="dropdown form-control">
                            <option>English</option>
                            <option>English</option>
                            <option>English</option>
                            <option>English</option>
                        </select>

                    </footer>
                </div>
            </div>
        </div>

    </div>


    <script>
        document.addEventListener('DOMContentLoaded',function () {
            alertPurchase('Someone from London bought', 1000000,250000,'TSC','about 2 minutes ago')
            //Вызвать алерт
        });
    </script>

</div>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
