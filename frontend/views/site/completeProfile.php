<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;


$this->title = 'Complete Profile';
$this->params['breadcrumbs'][] = $this->title;
?>

<section id="site-login" class="site-login">
    <div class="container">
        <div class="row">

            <div class="logo-block col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2 col-xs-12">
                <?= Html::img('@web/images/img_logo.svg') ;?>
            </div>

            <form action="" class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12">

                <a href="#" class="back-btn">
                    <span class="hidden-xs hidden-sm">Back</span>
                </a>

                <h1 class="col-md-12"><?= Html::encode($this->title) ?></h1>
                <p class="desc">Please complete the fields below. All fields are required.</p>


                <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">First Name</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">First Name</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                </div>

                <div class="row">
                    <div class="col-md-2 col-xs-4">
                        <div class="form-group">
                            <label class="control-label">Date of Birth</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-4">
                        <div class="form-group no-label">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-4">
                        <div class="form-group no-label">
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-4 col-xs-8">
                        <div class="form-group">
                            <label class="control-label">Country of Residence</label>
                            <select class="form-control" id="sel1">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-4">
                        <div class="form-group">
                            <label class="control-label">Zip Code</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Address</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Phone Number</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>


                <div class="row">
                    <?php for ($i=0; $i<4; $i++): ?>
                    <div class="col-md-3 col-sm-6">
                        <div class="form-group">
                            <div class="fileContainer">
                                <img src=""/>
                                <p class="select-text">
                                    Select...
                                </p>
                                <p class="name-text">
                                    Front of ID Card
                                </p>
                                <input type="file" accept="image/*" onchange="readURL(this);"/>
                            </div>
                        </div>
                    </div>
                    <?php endfor;?>

                </div>

                <div class="form-group">
                    <div class="col-lg-12 text-center">
                        <?= Html::submitButton('Next', ['class' => 'main-btn', 'name' => 'login-button']) ?>
                    </div>
                </div>
            </form>

        </div>
    </div>

    <div class="close-btn">

    </div>
</section>
