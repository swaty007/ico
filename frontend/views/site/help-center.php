<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Help Center';
?>



<div class="modal modal-main fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">

    <a href="#" type="button" class="close-btn" data-dismiss="modal" aria-label="Close"></a>

    <div class="modal-dialog" role="document">
        <div class="modal-content text-center">

            <div class="modal-header">
                <h4 class="modal-title">Minimal Investment</h4>
            </div>

            <div class="modal-body">
                <p class="modal-text">
                    Your amont less than minimal investment.
                    Investment amount must be between
                    0.2 and 1000 BTC
                </p>
                <button class="main-cancel" type="button" data-dismiss="modal" aria-label="Close">Close</button>
            </div>

        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded',function () {
        $('#exampleModal').modal('show');
    });
</script>


<div class="token-sale-wrap help-center-page">
    <div class="row">
        <div class="col-md-12">
            <div class="token-block-wrap">

                <div class="row">
                    <div class="col-md-12">
                        <div class="tab-help-content">
                        <ul class="nav nav-pills nav-tabs-help nav-justified" id="tab-help">
                            <li class="active">
                                <a href="#tab-help-1" class="tab-btn"><span class="num">1</span>Add Ethereum Address</a>

                                <div id="tab-help-1" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-md-8 col-md-offset-2">
                                            <div class="form-group">
                                                <label class="control-label title">Enter Address on which you want to receive ERC20 Tokens</label>
                                                <input type="text"  class="form-control" placeholder="Your Ethereum Address">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <button type="submit" class="main-cancel" name="login-button">Cancel</button>
                                            <button onclick="showHelpBlock(2);" type="submit" class="main-btn" name="login-button">Next</button>
                                        </div>
                                    </div>
                                </div>

                            </li>
                            <li>
                                <a href="#tab-help-2" class="tab-btn"><span class="num">2</span>Make Payment</a>

                                <div id="tab-help-2" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-md-10 col-md-offset-2">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <div class="form-group grey-form">
                                                                <label class="control-label">Please send</label>
                                                                <p class="form-control input-text-simulation">0.11799995 BTC</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group grey-form">
                                                                <label class="control-label">to the address</label>
                                                                <p class="form-control input-text-simulation">15vqxmdXiF2vwVTE8Dye19dHUb148QjZz3</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <img class="QR-code" src="http://tsm.infinitum.tech/web/images/qr.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-md-offset-2">
                                            <div class="help-text">
                                                <h3 class="title">In order to receive 14,000.00 TSC (including 4,000 TSC bonus)</h3>
                                                <p class="text">Applicable exchange rate is 8,474.58 BTC/USD. The token price is 0.1 USD per 1 TSC.
                                                    In case you send a different amount of BTC, the number of assigned tokens will be updated accordingly.</p>
                                                <p class="text"> The tokens will appear in your account balance only after transaction gets 5 confirmations. You will also receive an email.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <button onclick="showHelpBlock(3,'await');" type="submit" class="main-btn" name="login-button">Next</button>
                                        </div>
                                    </div>
                                </div>

                            </li>
                            <li>
                                <a href="#tab-help-3" class="tab-btn"><span class="num">3</span>Receive Tokens</a>

                                <div id="tab-help-3" class="tab-pane fade">
                                    <div class="await-block">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="waiting-block">

                                                    <div class="animation">
                                                        <div class="barlittle"></div>
                                                        <div class="barlittle"></div>
                                                        <div class="barlittle"></div>
                                                    </div>

                                                    <p class="text">
                                                        Waiting for payment…
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <button type="submit" class="main-cancel" name="login-button">Cancel Purchase</button>
                                            </div>
                                        </div>
                                        <script>
                                            setTimeout(function () {
                                                showHelpBlock(3,'await end');
                                            },5000);
                                        </script>

                                    </div>

                                    <div class="tokens-block" style="display: none;">
                                        <div class="row">
                                            <div class="col-md-9 col-md-offset-2">
                                                <div class="form-group">
                                                    <p class="tokens-text">Mar-18-2018 06:48:13 <span class="green">Success</span></p>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Tokens received</label>
                                                            <p class="tokens-amount">3758.758 TSC</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Amount sent</label>
                                                            <p class="tokens-amount">2 ETH</p>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label class="control-label">Tx Hash</label>
                                                    <div class="row">
                                                        <div class="col-xs-8">
                                                            <p class="tokens-text">0x0022f20c4eba8827f74bb7436f6ff77b092b8429ec7de40f576ebc686505662d</p>
                                                        </div>
                                                        <div class="col-xs-4">
                                                            <a class="ref-tok" href="#">Look at Etherscan.io</a>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label">To Address</label>
                                                    <p class="tokens-text"><a href="#" class="address-tok">0xa9c7d31bb1879bff8be25ead2f59b310a52b7c5a</a></p>
                                                </div>


                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <button type="submit" class="main-cancel" >Close</button>
                                                <button type="submit" class="main-btn" >Buy Tokens</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </li>
                        </ul>

                            <script>
                                function showHelpBlock(num, await) {
                                    $('#tab-help .tab-pane').removeClass('in');
                                    $('#tab-help .tab-pane').parent('li').removeClass('active');
                                    var element = $('#tab-help-'+ String(num));
                                    element.parent('li').addClass('active');
                                    element.addClass('in');
                                    if (num === 3, await !=undefined) {
                                        if (await == 'await') {
                                            $('.await-block').show();
                                            $('.tokens-block').hide();
                                        } else if (await == 'await end') {
                                            $('.await-block').hide();
                                            $('.tokens-block').show();
                                        }
                                    }

                                    setTimeout(function () {
                                        var heigth = element.height();
                                        if (heigth > 0) {
                                            heigth += 350;
                                        } else {
                                            heigth = 450;
                                        }
                                        $('#tab-help').closest('.token-block-wrap').css('min-height', heigth);
                                    },1)
                                }

                                document.addEventListener("DOMContentLoaded", function () {
                                    showHelpBlock(1);
                                });
                            </script>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
