import $ from 'jquery';

const triggerBreakdown = $('.js-basket-desktop-trigger');
const contentBreakdown = $('.js-basket-breakdown-content');
const triggerEssential = $('.js-basket-essentials-trigger');
const contentEssential = $('.js-basket-essentials-content');

function setDivHeight() {
    if ($(window).width() > 767) {
        const basketBreakdownContainer = $('.basket-summary__breakdown');
        const basketTotalContainer = $('.basket-summary__totals');
        if (basketBreakdownContainer.height() > basketTotalContainer.height()) {
            basketTotalContainer.height(basketBreakdownContainer.height());
        } else {
            basketBreakdownContainer.height(basketTotalContainer.height());
        }
    }
}

setDivHeight();

triggerBreakdown.on('click', () => {
    contentBreakdown.toggle();
    setDivHeight();
});

triggerEssential.on('click', () => {
    contentEssential.toggle();
    setDivHeight();
});