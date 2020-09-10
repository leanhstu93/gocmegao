var Main = function () {
    return Main.fn.init();
};

Main.fn = Main.prototype = {
    config: {
        selectorSliderNewsHome : '.js__slider-news-home',
    },

    init: function () {
        this.initSlider();
    },


    initSlider :function() {
       $(this.config.selectorSliderNewsHome).slick({
           centerPadding: '30px',
           slidesToShow: 3,
           slidesToScroll: 3,
           arrows: false,
           autoplay:true,
           dots: true,
           speed: 500,
       });
    },

}

var main = new Main();