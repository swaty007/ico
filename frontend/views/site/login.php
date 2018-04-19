<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;


$this->title = 'Sign In';
$this->params['breadcrumbs'][] = $this->title;
?>

<section id="site-login" class="site-login">
    <div class="container">
        <div class="row">

            <div class="logo-block col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1 col-xs-12">
                <?= Html::img('@web/images/img_logo.svg') ;?>
            </div>

            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                'layout' => 'horizontal',
                'options'=>['class'=>'col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1 col-xs-12'],
                'fieldConfig' => [
                    'template' => "<div class=\"col-md-12\">{input}</div>\n<div class=\"col-md-12 text-right\">{error}</div>",
                    'labelOptions' => ['class' => 'col-lg-3 col-md-3 col-sm-4 col-sx-12 control-label'],
                ],
            ]); ?>

            <h1 class="col-md-12"><?= Html::encode($this->title) ?></h1>

            <?= $form->field($model, 'username')->textInput(['placeholder' => 'Email']);?>

            <?= $form->field($model, 'password')->passwordInput()->textInput(['placeholder' => 'Password']); ?>

            <?= $form->field($model, 'faCode')->textInput(['placeholder' => '2-FA Code']) ?>

            <?= $form->field($model, 'rememberMe')->checkbox([
                'template' => "<div class=\"col-md-6 checkbox-block\">{input} {label}</div><div class='col-md-6 text-right'>".Html::a('Reset Password', ['site/request-password-reset']) ."</div>",
            ]) ?>


            <div class="recaptcha-block">
                <script src='https://www.google.com/recaptcha/api.js'></script>
                <div class="g-recaptcha" data-sitekey="6Ld7Rj4UAAAAAOtdDPDK33WhkENWR8pjxhDTHtWl"></div>
            </div>

            <div class="form-group">
                <div class="col-lg-12 text-center">
                    <?= Html::submitButton('Sign In', ['class' => 'main-btn', 'name' => 'login-button']) ?>
                </div>
            </div>

            <a href="#" class="text-btn">Sign Up</a>

            <?php ActiveForm::end(); ?>

        </div>
    </div>
</section>
