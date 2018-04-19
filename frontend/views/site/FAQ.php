<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'FAQ';
?>


<div class="token-sale-wrap faq-page">
    <div class="row">
        <div class="col-md-7 col-lg-8">
            <div class="token-block-wrap right-m">
                <h3 class="title">
                    <?= $this->title; ?>
                </h3>

                <div class="white-panel">
                    <a class="white-header" data-toggle="collapse" href="#collapseDocuments1" aria-expanded="true">
                        What is ERC20 compatible wallet address?
                    </a>
                    <div id="collapseDocuments1" class="white-body collapse in" aria-expanded="true">
                        <p class="white-text">
                            To participate Ethereum token sale you need a wallet website or a wallet app where you and you only holds the private keys. Private keys are needed to correctly interact with smart contract functions, like transferring tokens.
                        </p>
                        <p class="white-strong">
                            DO NOT PARTICIPATE TO TOKEN SALES DIRECLY FROM CRYPTOCURRENCY EXCHANGE ADDRESSES. YOU NEED A TOKEN COMPATIBLE ETHEREUM WALLET.
                        </p>
                        <p class="white-text">
                            The following wallets are known to be compatible with Ethereum tokens (ERC20 standard):
                        </p>
                        <ul class="">
                            <li>
                                <a href="">MyEtherWallet</a><span>(no download needed)</span>
                            </li>
                            <li>
                                <a href="">MetaMask </a><span>(Firefox and Chrome browser addon)</span>
                            </li>
                            <li>
                                <a href="">Mist </a><span>(Desktop)</span>
                            </li>
                            <li>
                                <a href="">Parity</a><span>(Desktop)</span>
                            </li>
                            <li>
                                <a href="">imToken </a><span>(iPhone)</span>
                            </li>
                            <li>
                                <a href="">imToken</a><span> (Android)</span>
                            </li>
                            <li>
                                <a href="">Trust </a><span>(iPhone)</span>
                            </li>
                            <li>
                                <a href="">Trust</a><span> (Android)</span>
                            </li>
                            <li>
                                <a href="">Cipher</a><span>(iPhone)</span>
                            </li>
                            <li>
                                <a href="">Cipher</a><span>(Android)</span>
                            </li>
                        </ul>
                        <p class="white-text">
                            Please contact us <a href="mailto:helpdesk@tokesalecabinet.io">helpdesk@tokesalecabinet.io</a> if you have updates to the token compatible wallet list.
                        </p>
                        <p class="white-title">
                            Do not use the following wallets to participate any token sale. First move your ETH to a compatible wallet in the above list:
                        </p>
                        <ul class="line-through">
                            <li>Any Bitcoin exchange</li>
                            <li>Any Ethereum exchange</li>
                            <li>Jaxx</li>
                            <li>Exodus</li>
                            <li>Coinbase</li>
                            <li>Poloniex</li>
                            <li>Kraken</li>
                            <li>Bitstamp</li>
                            <li>Bitfinex</li>
                            <li>Bitrexx</li>
                            <li>Cex.io</li>
                        </ul>
                    </div>
                </div>

                <div class="white-panel">
                    <a class="white-header" data-toggle="collapse" href="#collapseDocuments2" aria-expanded="true">
                        What is ERC20 compatible wallet address?
                    </a>
                    <div id="collapseDocuments2" class="white-body collapse" aria-expanded="true">
                        <p class="white-text">
                            Please contact us <a href="mailto:helpdesk@tokesalecabinet.io">helpdesk@tokesalecabinet.io</a> if you have updates to the token compatible wallet list.
                        </p>
                        <p class="white-title">
                            Do not use the following wallets to participate any token sale. First move your ETH to a compatible wallet in the above list:
                        </p>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-md-5 col-lg-4">
            <div class="token-block-wrap left-m">
                <h3 class="title">
                    Support
                </h3>
                <ul class="nav nav-and-images">
                    <li>
                        <a href="#"><?= Html::img('@web/images/ic_mail.svg') ;?>Telegram</a>
                    </li>
                    <li>
                        <a href="#"><?= Html::img('@web/images/ic_intercom.svg') ;?>Slack</a>
                    </li>
                    <li>
                        <a href="#"><?= Html::img('@web/images/ic_intercom.svg') ;?>Intercom</a>
                    </li>
                    <li>
                        <a href="#"><?= Html::img('@web/images/ic_intercom.svg') ;?>Mail</a>
                    </li>
                </ul>
            </div>
            <div class="token-block-wrap left-m">
                <h3 class="title">
                    Documents
                </h3>
                <ul class="nav nav-and-images">
                    <li>
                        <a href="#"><?= Html::img('@web/images/ic_document.svg',['class'=>'bg-images']) ;?>How to Contribute?</a>
                    </li>
                    <li>
                        <a href="#"><?= Html::img('@web/images/ic_document.svg',['class'=>'bg-images']) ;?>Token Sale Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#"><?= Html::img('@web/images/ic_document.svg',['class'=>'bg-images']) ;?>Token Sale Terms of Services</a>
                    </li>
                    <li>
                        <a href="#"><?= Html::img('@web/images/ic_document.svg',['class'=>'bg-images']) ;?>White Paper</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>