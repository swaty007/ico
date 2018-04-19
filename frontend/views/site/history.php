<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Purchase History';
?>


<div class="token-sale-wrap history-page">
    <div class="row">
        <div class="col-md-12">
            <div class="token-block-wrap">
                <h3 class="title">
                    <?= $this->title; ?>
                </h3>

                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
                        <div class="nav-tabs-pay-wrapp">
                            <ul class="nav nav-pills nav-tabs-pay">
                                <li class="active">
                                    <a href="#tab-history-1" data-toggle="tab">All Transactions</a>
                                </li>
                                <li>
                                    <a href="#tab-history-2" data-toggle="tab">User’s Transactions</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="tab-content tab-cur-content">
                    <div id="tab-history-1" class="tab-pane fade in active">

                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Type</th>
                                <th scope="col">Timestamp</th>
                                <th scope="col">Value</th>
                                <th scope="col">Currency</th>
                                <th scope="col">Received</th>
                                <th scope="col">TxHash</th>
                                <th scope="col">Status</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php for ($i = 0; $i < 3; $i++): ?>
                                <tr class="success-st">
                                    <td class="type" data-label="Type"> <?= Html::img('@web/images/ic_token_ref.svg'); ?>Tokens
                                    </td>
                                    <td data-label="Timestamp">Mar-18-2018 06:48:13</td>
                                    <td data-label="Value">2.72357</td>
                                    <td data-label="Currency">ETH</td>
                                    <td class="received" data-label="Received">3758.758 TSC</td>
                                    <td class="hash" data-label="TxHash"><span>0xDa0131319B5d8fAA0F4057cD2E62…</span>
                                    </td>
                                    <td class="status" data-label="Status">Reservation</td>
                                </tr>
                                <tr class="fail-st">
                                    <td class="type" data-label="Type"> <?= Html::img('@web/images/ic_token_tok.svg'); ?>Tokens
                                    </td>
                                    <td data-label="Timestamp">Mar-18-2018 06:48:13</td>
                                    <td data-label="Value">2.72357</td>
                                    <td data-label="Currency">ETH</td>
                                    <td class="received" data-label="Received">3758.758 TSC</td>
                                    <td class="hash" data-label="TxHash"><span>0xDa0131319B5d8fAA0F4057cD2E62…</span>
                                    </td>
                                    <td class="status" data-label="Status">Reservation</td>
                                </tr>
                                <tr class="processing-st">
                                    <td class="type" data-label="Type"> <?= Html::img('@web/images/ic_token_tok.svg'); ?>Tokens
                                    </td>
                                    <td data-label="Timestamp">Mar-18-2018 06:48:13</td>
                                    <td data-label="Value">2.72357</td>
                                    <td data-label="Currency">ETH</td>
                                    <td class="received" data-label="Received">3758.758 TSC</td>
                                    <td class="hash" data-label="TxHash"><span>0xDa0131319B5d8fAA0F4057cD2E62…</span>
                                    </td>
                                    <td class="status" data-label="Status">Reservation</td>
                                </tr>
                            <?php endfor; ?>

                            </tbody>
                        </table>

                    </div>

                    <div id="tab-history-2" class="tab-pane fade">
                    </div>
                </div>

                <div class="dataTables_paginate paging_simple_numbers" id="data_table_paginate">
                    <span>
                        <a class="paginate_button current">1</a>
                        <a class="paginate_button" aria-controls="data_table" data-dt-idx="2" tabindex="0">2</a>
                        <a class="paginate_button" aria-controls="data_table" data-dt-idx="3" tabindex="0">3</a>
                        <a class="paginate_button" aria-controls="data_table" data-dt-idx="4" tabindex="0">4</a>
                        <a class="paginate_button" aria-controls="data_table" data-dt-idx="5" tabindex="0">5</a>
                        <a class="paginate_button" aria-controls="data_table">30</a>
                    </span>
                </div>

            </div>
        </div>
    </div>
</div>