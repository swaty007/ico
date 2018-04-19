<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Security';
?>


<div class="token-sale-wrap security-page">
    <div class="row">
        <div class="col-md-12">
            <div class="token-block-wrap">
                <h3 class="title">
                    2-Factor Authorization
                </h3>

                <div class="row">
                    <div class="col-md-8 col-lg-6">
                        <div class="image-sec-block">
                            <div class="img-block"></div>
                        </div>
                        <div class="text-block-secur">
                            <p class="text-black">
                                Your account protected by Two Factor Authorization
                            </p>
                            <div class="row">
                                <div class="col-xs-6">
                                    <button type="submit" class="main-btn ">Disable</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8 col-lg-6">
                        <div class="image-sec-block fa2-disabled">
                            <div class="img-block"></div>
                        </div>
                        <div class="text-block-secur">
                            <p class="text-red">
                                To Protect your Account with Two Factor Authorization do the following steps:
                            </p>
                            <div class="text-secur">
                                <p class="num">1.</p>
                                <span>
                                     Download one of these apps <a href="#">Google Authenticator</a> or <a href="#">Authy</a> from Google Play Market or Apple App Store.
                                </span>
                            </div>
                            <div class="text-secur">
                                <p class="num">2.</p>
                                <span>
                                    Scan QR Code or enter this key <strong>KHGF3756JHF</strong> into your 2FA App.
                                </span>
                            </div>
                            <div class="text-secur">
                                <p class="num">3.</p>
                                <span>
                                   After you scan QR Code or enter the key above, your app will provide you with a unique passcode. Enter that code below.
                                </span>
                            </div>
                        </div>

                        <form class="secure-form" action="">
                            <div class="row">
                                <div class="col-xs-6">
                                    <input type="text" class="input-text" placeholder="Passcode">
                                </div>
                                <div class="col-xs-6">
                                    <button type="submit" class="main-btn ">Confirm Code</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4 col-lg-6">
                        <div class="qr-code-block">
                            <p class="title-qr">Scan this code with your 2FA App</p>
                            <div class="img-block">
                                <img src="http://tsm.infinitum.tech/web/images/qr.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="token-block-wrap">
                <h3 class="title">
                    Change Password
                </h3>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Current Password">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="New Password">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Retype Password">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="main-btn ">Change</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>