$(document).ready(function(){
    // ToolTips settings
    var bsToolTips = {
        title: "Go to English page",
        animation: true,
        delay: {
            show: 500,
            hide: 100
        },
        // template: '<div class="tooltip" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>',
        placement: "bottom"
    };
    $('.flags').tooltip(bsToolTips);

});