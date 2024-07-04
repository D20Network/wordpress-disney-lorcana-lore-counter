jQuery(document).ready(function($) {
    $('.lp-btn').click(function() {
        var change = parseInt($(this).data('lp-change'));
        var $lpDisplay = $(this).siblings('.lp-display');
        var currentLP = parseInt($lpDisplay.data('lp'));
        var newLP = currentLP + change;
        $lpDisplay.data('lp', newLP).text('LP: ' + newLP);
    });

    $('.status-toggle').click(function() {
        var status = $(this).data('status');
        var currentStatus = $(this).text();
        var newStatus = (currentStatus === 'Off') ? 'On' : 'Off';
        $(this).text(newStatus);
    });
});

