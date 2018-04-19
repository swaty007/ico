<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Ico';
?>


<div class="token-sale-wrap">
    <div class="row">
        <div class="col-md-3">
            <div class="token-block-wrap right-m">
                <h3 class="title gray">
                    Your Balance
                </h3>
                <p class="num-text">
                    0.00 TKN
                </p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="token-block-wrap right-m left-m">
                <h3 class="title gray">
                    Token Price
                </h3>
                <p class="num-text">
                    10.00 USD
                </p>
            </div>
        </div>
        <div class="col-md-6">

<!--            Первый Вариант -->
            <div class="token-block-wrap left-m two-inputs-wrap" >
                <h3 class="title gray">
                    Current Bonus
                </h3>

                <div class="two-inputs">
<!--                    amount-control должен так и оставаться не менять местами-->
                    <span class="amount-control">TKN</span>
                    <input class="form-control" type="text" placeholder="Amount">
                </div>
                <div class="two-inputs">
                    <span class="amount-control">TKN</span>
                    <input class="form-control" type="text" placeholder="You will receive">
                </div>
                <p class="num-text">
                    20%
                </p>
            </div>
            <!--            Первый Вариант -->
            <!--            Второй Вариант -->
            <div class="token-block-wrap combine-line left-m" style="display:none">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="title gray">
                            Current Bonus
                        </h3>
                        <p class="num-text">
                            30%
                        </p>
                    </div>
                    <div class="col-md-6">
                        <h3 class="title gray">
                            Ends In
                        </h3>
                        <p class="num-text">
                            9d 20:12:35
                        </p>
                    </div>
                </div>
            </div>
            <!--            Второй Вариант -->

        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="token-block-wrap">
            <h3 class="title">
                Token Sale Progress
            </h3>
            <div class="row">
                <div class="col-md-12">
                    <div class="line-wrapp">
                        <div class="line">
                            <span data-value="15,345,771 USD" style="width:50%;"></span>
                        </div>
                        <div class="clearfix">
                            <div class="pull-left">
                                <p class="price active">3,000,000 USD</p>
                                <p class="desc">Soft Cap </p>
                            </div>
                            <div class="pull-right">
                                <p class="price">20,000,000 USD</p>
                                <p class="desc">Hard Cap </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 col-md-offset-2 col-xs-3">
                                <div class="balance-block">
                                    <div class="item">
                                        <?= Html::img('@web/images/BTC.png') ;?>
                                        <p class="currency">13,04 BTC</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-xs-3">
                                 <div class="balance-block">
                                    <div class="item">
                                        <?= Html::img('@web/images/ETH.png') ;?>
                                        <p class="currency">1,500.5 ETH</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-xs-3">
                                 <div class="balance-block">
                                    <div class="item">
                                        <?= Html::img('@web/images/XRP.png') ;?>
                                        <p class="currency">556,765.00 XRP</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-xs-3">
                                 <div class="balance-block">
                                    <div class="item">
                                        <?= Html::img('@web/images/DASH.png') ;?>
                                        <p class="currency">456,333 DASH</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="token-block-wrap clearfix">
                <h3 class="title">
                    Buy Tokens
                </h3>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="nav-tabs-pay-wrapp">
                            <ul class="nav nav-pills nav-tabs-pay" id="currency-tabs">
                                <li class="active">
                                    <a data-currency="ETH">Ethereum</a>
                                </li>
                                <li>
                                    <a data-currency="BTC">Bitcoin</a>
                                </li>
                                <li>
                                    <a data-currency="ETH">Litecoin</a>
                                </li>
                                <li>
                                    <a data-currency="ETH">Stellar</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-cur-content" id="currency-content">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label title="Amount of tokens to purchase" class="control-label">Amount of tokens to purchase</label>
                                    <span class="amount-control">TKN</span>
                                    <input type="text"  class="form-control" placeholder="100.00">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label title="Bonus Tokens" class="control-label">Bonus Tokens</label>
                                    <span class="amount-control">TKN</span>
                                    <input type="text"  class="form-control" placeholder="+10,555,788.00">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label title="Amount to Pay" class="control-label">Amount to Pay</label>
                                    <span class="amount-control">TKN</span>
                                    <input type="text"  class="form-control" placeholder="2.32535">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <p class="result-text">
                                        ≈ 1200.35 USD
                                    </p>
                                </div>
                            </div>
                        </div>
                    <input type="hidden" name="currency" class="currency-input" value="TKN">
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <a href="<?= Url::to(['/site/help-center']); ?>" class="main-btn" name="login-button">Buy Tokens</a>
                            </div>
                        </div>
                </div>
            </div>
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    $('#currency-tabs a').on('click',function () {
                        var cur = $(this).attr('data-currency');
                        $('#currency-content span.amount-control').text(cur);
                        $('#currency-content .currency-input').val(cur);
                        $('#currency-tabs li').removeClass('active');
                        $(this).closest('li').addClass('active');
                    });
                });
            </script>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <ul class="nav nav-pills nav-tabs-bonus">
                <li class="active">
                    <a href="#tab-bonus-1" data-toggle="tab">Bonus by Volume</a>
                </li>
                <li>
                    <a href="#tab-bonus-2" data-toggle="tab">Bonus by Date</a>
                </li>
            </ul>



            <div class="tab-content slider-fix">

                <div id="tab-bonus-1" class="tab-pane fade in active">
                    <div class="bonus-items">
                            <div class="token-block-wrap">
                               <div class="row">
                                   <div class="col-md-12">
                                       <p class="title-slide">Less than</p>
                                   </div>
                                   <div class="col-xs-12">
                                       <p class="desc-slide">>100 TKN</p>
                                   </div>
                               </div>
                                <div class="row">
                                    <div class="footer-slide">
                                        <div class="col-xs-6">
                                            <p class="footer-text">
                                                Additional
                                                Bonus
                                            </p>
                                        </div>
                                        <div class="col-xs-6">
                                            <p class="footer-value">
                                                +5%
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php for ($i=0; $i<5; $i++): ?>
                        <div class="token-block-wrap">
                            <div class="row">
                                <div class="col-xs-6">
                                    <p class="title-slide">From</p>
                                </div>
                                <div class="col-xs-6">
                                    <p class="title-slide">To</p>
                                </div>
                                <div class="col-xs-6">
                                    <p class="desc-slide">101 TKN </p>
                                </div>
                                <div class="col-xs-6">
                                    <p class="desc-slide">300 TKN</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="footer-slide">
                                    <div class="col-xs-6">
                                        <p class="footer-text">
                                            Additional
                                            Bonus
                                        </p>
                                    </div>
                                    <div class="col-xs-6">
                                        <p class="footer-value">
                                            +5%
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endfor;?>
                    </div>
                </div>

                <div id="tab-bonus-2" class="tab-pane fade active">
                    <div class="bonus-items">

                        <div class="token-block-wrap completed">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="date-title">Presale</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <p class="date-text">
                                        March 9, 2018, 0:00
                                    </p>
                                    <p class="date-text">
                                        March 18, 2018, 23:59
                                    </p>
                                    <p class="timestamp">
                                        (UTC)
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="footer-slide">
                                    <div class="col-xs-6">
                                        <p class="footer-text">
                                            Stage completed
                                        </p>
                                    </div>
                                    <div class="col-xs-6">
                                        <p class="footer-value">
                                            +30%
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="token-block-wrap current">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="date-title">Presale</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <p class="date-text">
                                        March 9, 2018, 0:00
                                    </p>
                                    <p class="date-text">
                                        March 18, 2018, 23:59
                                    </p>
                                    <p class="timestamp">
                                        (UTC)
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="footer-slide">
                                    <div class="col-xs-6">
                                        <p class="footer-text">
                                            Stage completed
                                        </p>
                                    </div>
                                    <div class="col-xs-6">
                                        <p class="footer-value">
                                            +30%
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php for ($i=0; $i<5; $i++): ?>
                            <div class="token-block-wrap">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p class="date-title">Presale</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <p class="date-text">
                                            March 9, 2018, 0:00
                                        </p>
                                        <p class="date-text">
                                            March 18, 2018, 23:59
                                        </p>
                                        <p class="timestamp">
                                            (UTC)
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="footer-slide">
                                        <div class="col-xs-6">
                                            <p class="footer-text">
                                                Stage completed
                                            </p>
                                        </div>
                                        <div class="col-xs-6">
                                            <p class="footer-value">
                                                +30%
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endfor;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.addEventListener("load", function() {
            function initSlider() {
                $('.bonus-items').slick({
                    dots: false,
                    infinite: true,
                    speed: 300,
                    slidesToShow: 4,
                    slidesToScroll: 2,
                    autoplay: false,
                    autoplaySpeed: 4000,
                    responsive: [
                        {
                            breakpoint: 1200,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 1,
                            }
                        },
                        {
                            breakpoint: 600,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1
                            }
                        },
                        {
                            breakpoint: 480,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        }
                    ]
                });
            };
            (function () {
                initSlider();
                setTimeout(function () {
                    $('#tab-bonus-2').removeClass('active');
                },1000);
            })();


        });

    </script>


<!--    Первый Вариант-->
    <div class="row" style="display: none">
        <div class="col-md-6">
            <div class="token-block-wrap subscribe right-m">
                <h3 class="title">
                    Subscribe fo News
                </h3>
                <form action="">
                    <div class="row">
                        <div class="col-md-8">
                            <input type="text" class="input-text" placeholder="Email">
                        </div>
                        <div class="col-md-4 text-center">
                            <button type="submit" class="main-btn ">Subscribe</button>
                        </div>

                    </div>
                </form>

            </div>
        </div>
        <div class="col-md-6">
            <div class="token-block-wrap left-m">
                <h3 class="title">
                    Social Networks
                </h3>
                <div class="social-group">
                    <a href="#"> <?= Html::img('@web/images/ic_telegram.svg') ;?></a>
                    <a href="#"> <?= Html::img('@web/images/ic_telegram.svg') ;?></a>
                    <a href="#"> <?= Html::img('@web/images/ic_telegram.svg') ;?></a>
                </div>
            </div>
        </div>
    </div>
    <!--    Первый Вариант-->
    <!--    Второй Вариант-->
    <div class="row">
        <div class="col-md-12">
            <div class="token-block-wrap subscribe">
                <h3 class="title">
                    Subscribe fo News
                </h3>
                <div class="row">
                    <div class="col-md-6">
                        <form action="">
                            <div class="row">
                                <div class="col-md-8">
                                    <input type="text" class="input-text" placeholder="Email">
                                </div>
                                <div class="col-md-4 text-center">
                                    <button type="submit" class="main-btn ">Subscribe</button>
                                </div>

                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <div class="social-group">
                            <a href="#"> <?= Html::img('@web/images/ic_telegram.svg') ;?></a>
                            <a href="#"> <?= Html::img('@web/images/ic_telegram.svg') ;?></a>
                            <a href="#"> <?= Html::img('@web/images/ic_telegram.svg') ;?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--    Второй Вариант-->
</div>
