var Main = function () {
    return Main.fn.init();
};

Main.fn = Main.prototype = {
    config: {
        selectorSliderNewsHome : '.js__slider-news-home',
        selectorMenu: '.wrapper-menu',
    },

    init: function () {
        this.initSlider();
        this.fixScrollMenu()
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

    fixScrollMenu: function() {
        let self = this;

        $(window).scroll(function(){
            if($(this).scrollTop()>250){
                $(self.config.selectorMenu).addClass("fix-scroll");
            }
            else{
                $(self.config.selectorMenu).removeClass("fix-scroll");
            }
        });
    }

}

var main = new Main();