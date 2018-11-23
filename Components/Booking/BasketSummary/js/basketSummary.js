import $ from 'jquery';

const triggerBreakdown = $('.js-basket-desktop-trigger');
const contentBreakdown = $('.js-basket-breakdown-content');
const triggerEssential = $('.js-basket-essentials-trigger');
const contentEssential = $('.js-basket-essentials-content');

triggerBreakdown.on('click', () => {
    contentBreakdown.toggle();
});

triggerEssential.on('click', () => {
    contentEssential.toggle();
});