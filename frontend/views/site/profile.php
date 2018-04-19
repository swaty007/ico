<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Profile';
?>

<div class="profile-page token-sale-wrap">
    <div class="row">
        <div class="col-md-12">


            <div class="token-block-wrap">
                <h3 class="title">
                    Profile
                </h3>
                <div class="row">
                    <div class="col-md-4 col-md-push-8">
<!--                        <div class="image-sec-block">-->
<!--                            <div class="img-block"></div>-->
<!--                        </div>-->
                        <div class="image-sec-block fa2-disabled">
                            <div class="img-block"></div>
                        </div>
                        <p class="text-red">
                            Before investing, please provide following information (complete the fields below, all fieds are required).
                        </p>
                        <a href="#" class="red-btn hidden-lg hidden-md">KYC Application Form</a>
                    </div>
                    <div class="col-md-8 col-md-pull-4">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Email</label>
                                    <p class="form-control input-text-simulation">user@tokensale.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">First Name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">First Name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4 hidden-xs hidden-sm">
                                <a href="#" class="red-btn">KYC Application Form</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="main-cancel">Cancel</button>
                                <button type="submit" class="main-btn ">Change</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="token-block-wrap">
                <h3 class="title">
                    Add Wallets
                </h3>

                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group img-group">
                                <?= Html::img('@web/images/BTC.png') ;?>
                            <label class="control-label">Add your Ethereum Wallet</label>
                            <input type="text" class="form-control" placeholder="Current Password">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group img-group">
                            <?= Html::img('@web/images/BTC.png') ;?>
                            <label class="control-label">Add your Ethereum Wallet</label>
                            <input type="text" class="form-control" placeholder="New Password">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button class="main-cancel">Cancel</button>
                        <button type="submit" class="main-btn ">Change</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
