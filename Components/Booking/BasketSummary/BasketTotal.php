<!-- Totals & Continue btn (which will be it's own component) -->
<div class="basket-summary__totals">
    <div class="basket-summary__totals-top">

        <div class="basket-summary__ksp">
            <?php svg('zero-card-fee', 30, 200, 'basket-summary__ksp-svg', '');?>
        </div>

        <div class="basket-summary__totals-block">

            <div class="basket-summary__price-row">
                <div class="basket-summary__price-item">Base price</div>
                <div class="basket-summary__price-value">£1,470.00</div>
            </div>

            <div class="basket-summary__price-row">
                <div class="basket-summary__price-item">Hotel extras</div>
                <div class="basket-summary__price-value">£20.00</div>
            </div>


                <div class="basket-summary__price-row">
                    <div class="basket-summary__price-item">
                        <a href="#" class="basket-summary__essentials-btn js-basket-essentials-trigger"><span class="underline">Holiday Essentials</span> <?php svg('arrow-down-bold', 12, 12, 'basket-summary__essentials-icon', ''); ?></a>
                        </div>
                    <div class="basket-summary__price-value">£232</div>
                </div>

                <div class="basket-summary__essentials basket-summary__essentials-content basket-summary__essentials-content--visible js-basket-essentials-content">
                    <div class="basket-summary__price-row">
                        <div class="basket-summary__price-item">Additional luggage</div>
                        <div class="basket-summary__price-value">£92.00</div>
                    </div>
                    <div class="basket-summary__price-row">
                        <div class="basket-summary__price-item">Sports equipment</div>
                        <div class="basket-summary__price-value">£120.00</div>
                    </div>
                    <div class="basket-summary__price-row">
                        <div class="basket-summary__price-item">2 x New transfer type</div>
                        <div class="basket-summary__price-value">£250.00</div>
                    </div>
                </div>

            <div class="basket-summary__price-row">
                <div class="basket-summary__price-item">Card fee</div>
                <div class="basket-summary__price-value">£5.00</div>
            </div>

            <div class="basket-summary__price-row basket-summary__price-row--discount">
                <div class="basket-summary__price-item">Discount</div>
                <div class="basket-summary__price-value">-£100.00</div>
            </div>
        </div>
    </div>

        <div class="basket-summary__totals-block">

            <div class="basket-summary__price-row basket-summary__price-row--total">
                <div class="basket-summary__price-item">
                    <?php svg('info', 12, 12, 'basket-summary__price-icon js-component-tooltip', 'data-tooltip-id="tooltip-basket-terms"'); ?>
                    Holiday price from
                </div>
                <div class="basket-summary__price-value basket-summary__price-value--total" data-js-basket-price>£1,370.<span class="pence">00</span></div>
            </div>

            <div class="basket-summary__price-row basket-summary__price-row--secure">
                <div class="basket-summary__price-item"><?php svg('info', 12, 12, 'basket-summary__secure-icon js-component-tooltip', 'data-tooltip-id="tooltip-basket-terms"'); ?> Book today for just</div>
                <div class="basket-summary__price-value">£180.00</div>
            </div>


            <div class="basket-summary__continue">
                <a href="" class="bttn bttn--primary bttn--full-width">Continue</a>
            </div>

            <p class="basket-summary__supplement-text small-text">Additional holiday / flight supplement may apply</p>

        </div>
    </div>

</div>