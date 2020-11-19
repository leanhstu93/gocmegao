var Main = function () {
    return Main.fn.init();
};
Main.fn = Main.prototype = {
    pageCurrent: 0,
    dataQuizz : [
        {
            name: 'hello',
            type: 'wellcome',
            value: 0
        },
        {
            name: 'Giới tính của bạn là gì?',
            type: 'gender',
            value: 0
        },
        {
            name: 'Bạn cao bao nhiêu?',
            type: 'tall',
            value: ''
        },
        {
            name: 'Bạn sinh năm nào?',
            type: 'birthday',
            value: ''
        },
    ],
    config: {
        selectorSliderNewsHome: '.js__slider-news-home',
        selectorMenu: '.wrapper-menu',
        selectorScroll: '.js__scroll_read_multi',
        selectorBackToTop: '.js_scroll-top',
        selectorStickyAnchor: '#rightsticky',
        selectorSticky: '#rightsticky',
        selectorStopSticky: '#stop-sticky',
        selectorOnOffContent: '.js__on-of-content',
        selectorViewVideo: '.js-handle-view-video',
        selectorScreenVideo: '.js__wrapper-video-main',
        selectorTitleQuizz: '.js-title-quizz',
        selectorBtnNext: '.js-btn-next',
        selectorBtnPrev: '.js-btn-prev'
    },
    init: function () {
        this.initSlider();
        this.fixScrollMenu();
        this.initScrollReadMulti();
        this.handleScrollToTop();
        this.handleShowContentAnswer();
        // this.handleSticky();
        this.handleViewVideo();
        $(this.config.selectorViewVideo+':first').trigger('click');
        this.handleClickNextQuizz();
        this.handleClickPrevQuizz();
        this.handleOnClickBtnGender();
        this.handleOnchangeTall();
        this.handleOnchangeBirthday();
        this.handleGetDataQuizz();
        this.handleOnchangeQuizz();

        this.handleCloseModal();
        this.handleCallModal();
    },
    setup: function() {
        this.handleDataQuizz(this.dataQuizz[this.pageCurrent]);
    },
    handleSticky: function () {
        let self = this;
        var rightboxtop, rightboxbot, mytop, rightstickyheight;
        var ismobile = $(window).width() < 1200;
        let width = $(self.config.selectorSticky).width();
        rightstickyheight = $(self.config.selectorSticky).height();
        rightboxtop = $(self.config.selectorStickyAnchor).position().top - 51;
        rightboxbot = $(self.config.selectorStopSticky).position().top - rightstickyheight - 51;
        if ((!ismobile)) {
            $(window).scroll(function () {
                mytop = $(window).scrollTop();
                if (mytop >= rightboxtop) {

                    if (mytop <= rightboxbot - 51) {

                        if ($(self.config.selectorSticky).css('position') != 'fixed') {
                            $(self.config.selectorSticky).css({'position': 'fixed', 'top': '40px'}).width(width);
                        }

                    } else {

                        if ($(self.config.selectorSticky).css('position') != 'relative') {
                            $(self.config.selectorSticky).css({'position': 'relative', 'top': rightboxbot + 'px'});
                        }

                    }

                } else {

                    console.log(1);

                    if ($(self.config.selectorSticky).css('position') != '') {
                        $(self.config.selectorSticky).css('position', '');
                    }

                }

            });

        }

    },

    initSlider: function () {

        $(this.config.selectorSliderNewsHome).slick({

            slidesToShow: 1,

            autoplay: true,

            speed: 500,
            prevArrow: "<div class='slick-prev slick-arrow'></div>",
            nextArrow: "<div class='slick-next slick-arrow'></div>",
            arrow: true,

        });

    },


    fixScrollMenu: function () {

        let self = this;


        $(window).scroll(function () {

            if ($(this).scrollTop() > 250) {

                $(self.config.selectorMenu).addClass("fix-scroll");

            } else {

                $(self.config.selectorMenu).removeClass("fix-scroll");

            }

        });

    },


    initScrollReadMulti: function () {

        $(this.config.selectorScroll).slimScroll({

            allowPageScroll: true,

            height: '450px',

        });

    },

    handleScrollToTop: function () {

        var t = this;

        $(this.config.selectorBackToTop).hide();

        var o = $(window).scrollTop();

        $(window).scroll(function () {

            var e = $(window).scrollTop();

            o < e || e < 150 ? $(t.config.selectorBackToTop).fadeOut() : $(t.config.selectorBackToTop).fadeIn(),

                o = e

        }),

            $(this.config.selectorBackToTop).click(function () {

                return $("html, body").animate({

                    scrollTop: 0

                }, 800),

                    !1

            })

    },

    handleShowContentAnswer: function() {
        $(this.config.selectorOnOffContent).click(function() {
            let has = $(this).parent().parent().find('.js__content-full').hasClass('active');
            console.log(has);
            if(has) {
                $(this).parent().parent().find('.js__content-full').removeClass('active');
            } else {
                $(this).parent().parent().find('.js__content-full').addClass('active');
            }
        });
    },

    handleViewVideo: function()
    {
        let self = this;
        $(this.config.selectorViewVideo).click(function(){
            $(self.config.selectorViewVideo).removeClass('play');
            $(this).addClass('play');
            let id = $(this).data('id');
            let src = 'https://www.youtube.com/embed/'+id+'?autoplay=1';
            $(self.config.selectorScreenVideo).attr('src',src);

        });
    },

    listGender: function()
    {
        return [
            {
                value: 0,
                name: 'Nữ'
            }
        ];
    },

    handleBtnNextPrev: function()
    {
        if (this.pageCurrent < this.dataQuizz.length) {
            $(this.config.selectorBtnNext).show();
        }
        if (this.pageCurrent > 1) {
            $(this.config.selectorBtnPrev).show();
        }
        if (this.pageCurrent == this.dataQuizz.length) {
            $(this.config.selectorBtnNext).hide();
        }

        if (this.pageCurrent == 0 || this.pageCurrent == 1) {
            $(this.config.selectorBtnNext).hide();
        }

    },

    handleDataQuizz: function(data)
    {
        let self = this;
        if (data.type == 'result') {
            $.ajax({
                type: "post",
                dataType : 'json', // data type
                url: "site/save-result",
                data: {
                    data: JSON.stringify(this.dataQuizz)
                },
                success: function( msg ) {
                    if(msg.result) {
                        $('.section-quizz').hide();
                        $('#section-'+data.type).show();
                        $('.number__large').html(self.pageCurrent + 1);
                        $('.js-text-result').html(msg.data);
                    }
                }});
        } else {
            $('.section-quizz').hide();
            $('#section-'+data.type).show();
            $('.number__large').html(this.pageCurrent + 1);

            this.handleHideShowBtnNextPrev();
        }
    },

    handleHideShowBtnNextPrev: function()
    {
        if (this.pageCurrent == 0) {
            $(this.config.selectorBtnPrev).hide();
        } else {
            $(this.config.selectorBtnPrev).show();
        }

        if (this.pageCurrent == (this.dataQuizz.length - 1)) {
            $(this.config.selectorBtnNext).hide();
        } else {
            let data = this.dataQuizz[this.pageCurrent];
            if (data.value === 0 || data.value > 0 || data.type == "wellcome") {
                $(this.config.selectorBtnNext).show();
            }
        }
    },
    handleClickNextQuizz: function()
    {

        let self =  this;
        $(this.config.selectorBtnNext).click(function (e) {
            e.preventDefault();
            self.handleBtnNextPrev();
            let page = self.pageCurrent + 1;
            self.pageCurrent++;
            let dataCurrent = self.dataQuizz[page];

            self.handleDataQuizz(dataCurrent);

        });
    },
    handleClickPrevQuizz: function()
    {

        let self =  this;
        $(this.config.selectorBtnPrev).click(function (e) {
            e.preventDefault();
            self.handleBtnNextPrev();
            let page = self.pageCurrent - 1;
            self.pageCurrent--;
            let dataCurrent = self.dataQuizz[page];
            self.handleDataQuizz(dataCurrent);
        });
    },

    handleOnClickBtnGender: function()
    {
        let self = this;

        $('#section-gender .js-get-val').click(function () {
            let data = $(this).data();

            $('#section-gender .js-get-val').removeClass('active');
            $(this).addClass('active');
            self.setValueByName(data.type,data.value);
            self.handleHideShowBtnNextPrev();
        });
    },

    handleOnchangeTall: function()
    {
        let self = this;
      $('#section-tall .js-value-quizz').on('keypress',function(){
          let data = $(this).data();
          setTimeout(self.setValueByName(data.type,$(this).val()));
          self.handleHideShowBtnNextPrev();
      });
    },

    handleOnchangeBirthday: function()
    {
        let self = this;
        $('#section-birthday .js-value-quizz').on('keypress',function(){
            let data = $(this).data();
            setTimeout(self.setValueByName(data.type,$(this).val()));
            self.handleHideShowBtnNextPrev();
        });
    },

    handleOnchangeQuizz: function()
    {
        let self = this;
        $('.js__section-quizz-quizz .js-get-val').click(function () {
            let data = $(this).data();

            $(this).parent().find('.js-get-val').removeClass('active');
            $(this).addClass('active');
            console.log(data);
            self.setValueByName(data.type,data.value);
            self.handleHideShowBtnNextPrev();
        });
    },

    setValueByName: function(type,value)
    {
        this.dataQuizz.map((e,k) => {
            if (e.type == type) {
                this.dataQuizz[k].value = parseInt(value);
            }
        })

        console.log(this.dataQuizz);
    },

    handleGetDataQuizz: function()
    {
        let self = this;
        $.ajax({
            type: "GET",
            dataType : 'json', // data type
            url: "site/get-quizz-json",
            data: {},
            success: function( msg ) {
                if(msg.result) {
                    let data = $.merge(self.dataQuizz,msg.data);
                    data = $.merge(data,[{type : 'thankyou', value : '', name: ''}]);
                    data = $.merge(data,[{type : 'result', value : '', name: ''}]);
                    $('.number__dim').html('/'+(data.length ));
                }
            }});
    },

    handleShowModal: function () {
        $(".ta__wrapper-modal").show();
        $(".ta__wrapper-modal").addClass('show');
    },

    handleCallModal: function() {
        let self = this;
        $('.js__call-modal').click(function(){
            self.handleShowModal();
        })
    },

    handleCloseModal: function () {
        $('.js-btn-close-modal').click(function () {
            $(".ta__wrapper-modal").hide();
            $(".ta__wrapper-modal").removeClass('show');
        })
    }
}


var main = new Main();
main.setup();