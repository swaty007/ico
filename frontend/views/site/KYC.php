<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Know Your Customer';
?>

<div class="token-sale-wrap KYC-page">
    <div class="row">
        <div class="col-md-12">
            <div class="token-block-wrap">
                <h3 class="title">
                    <?= $this->title; ?>
                </h3>


                <div class="row">

                    <div class="col-md-3 col-md-push-9">
                        <p class="text-red">
                            Before investing, please provide following information (complete the fields below, all fieds are required).
                        </p>
                    </div>

                    <div class="col-md-9 col-sm-12 col-md-pull-3">
                        <form action="" class="col-md-12 site-login">
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
                            <div class="row">
                                <div class="col-lg-12 text-left">
                                    <div class="form-group">
                                        <?= Html::submitButton('Send', ['class' => 'main-btn', 'name' => 'login-button']) ?>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <!-- In Progress-->
                        <div class="info-verification">
                            <div class="img-block">
                            </div>
                            <p class="status-text">
                                Your documents verification is still in progress…
                            </p>
                        </div>
                        <!--  In Progress-->
                        <!--  Fail verification-->
                        <div class="info-verification fail-v">
                            <div class="img-block">
                            </div>
                            <p class="status-text">
                                Your documents failed verification
                            </p>
                            <p class="text">
                                You can submit your documents again. For more information please contact Operator in
                                <a href="<?= Url::to(['/site/help-center']); ?>">Help Center</a>
                            </p>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <div class="form-group">
                                        <button type="submit" class="main-btn" name="login-button">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  Fail verification-->
                        <!--  success verification-->
                        <div class="info-verification success-v">
                            <div class="img-block">
                            </div>
                            <p class="status-text">
                                Your documents have been verified successful
                            </p>
                            <p class="text">
                                Congratulation! Now you can become an investor!
                            </p>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <div class="form-group">
                                        <a href="<?= Url::to(['/site/index']); ?>" type="submit" class="main-btn" name="login-button">Buy Tokens</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  success verification-->

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>