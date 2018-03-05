class MapContent {
    constructor(root) {
        this.root = root;

        this._cacheNodes();
        this._bindEvents();
        this._ready();
    }

    _cacheNodes() {
        this.nodes = {

        }
    }

    _bindEvents() {
        $(window).resize(() => {
            this.do();
        });
    }

    _ready() {
        this.do();
    }
    
    do() {
        let width = $(window).width();
        let r = (width - 1280) / 2;

        if (r > 50) {
            this.root.css({
                'left': r + 'px'
            });
        } else {
            this.root.css({
                'left': '50px'
            });
        }
    }
}

class TopButton {
    constructor(root) {
        this.root = root;

        this._cacheNodes();
        this._bindEvents();
        this._ready();
    }

    _cacheNodes() {
        this.nodes = {
            topButton: $('.topButton')
        }
    }

    _bindEvents() {
        $(window).scroll(() => {
            this.do();
        });

        this.nodes.topButton.click(() => {
            $("html, body").animate({ scrollTop: 0 }, 300);
        });
    }

    _ready() {
        this.do();
    }

    do() {
        if ($(window).scrollTop() > 100) {
            $('.topButton').stop().fadeIn();
        } else {
            $('.topButton').stop().fadeOut();
        }
    }
}

class Filter {
    constructor(root) {
        this.root = root;

        this._cacheNodes();
        this._bindEvents();
        this._ready();
    }

    _cacheNodes() {
        this.nodes = {
            filterSelect: $('.filter__select')
        }
    }

    _bindEvents() {
        this.nodes.filterSelect.on('selectmenuchange', () => {
            this.root.submit();
        });

        $('.filter__clear').click(() => {
            this.nodes.filterSelect.val(0);
            this.nodes.filterSelect.selectmenu("refresh");
            this.root.find('[name="query"]').val('');

            setTimeout(() => {
                this.root.submit();
            }, 200);
        });
    }

    _ready() {

    }
}

class DesListPlitka {
    constructor(root) {
        this.root = root;

        this._cacheNodes();
        this._bindEvents();
        this._ready();
    }

    _cacheNodes() {
        this.nodes = {
            list: $('.designersList'),
            plitka: $('.designersPlitka')
        }
    }

    _bindEvents() {
        /*if (this.nodes.list.get(0) && this.nodes.plitka.get(0)) {
            $(window).resize((event) => {
                this.do();
            });
        }*/

        $('.changeView [name="view"]').click((event) => {
            let value = $(event.currentTarget).val();

            $('.changeView__item').removeClass('active');
            $(event.currentTarget).parents('.changeView__item').addClass('active');

            if (value == 'list') {
                this.nodes.list.show();
                this.nodes.plitka.hide();
            } else {
                this.nodes.list.hide();
                this.nodes.plitka.show();
            }

            flexGridAddElements('catalogPlitka__inner', 'catalogBrick__item', 'catalogBrick__item_hide');

            //$(event.currentTarget).parents('form').submit();
        });
    }

    _ready() {
        this.do();
    }

    do() {
        let width = $(document).width();

        if (width < 550) {
            this.nodes.list.hide();
            this.nodes.plitka.show();
            flexGridAddElements('designersPlitka__inner', 'designersPlitka__item', 'designersPlitka__item_hide');
        } else {
            this.nodes.list.show();
            this.nodes.plitka.hide();
            flexGridAddElements('designersList__bottomInner', 'catalogBrick__item', 'catalogBrick__item_hide');
        }
    }
}

class CatalogListPlitka {
    constructor(root) {
        this.root = root;

        this._cacheNodes();
        this._bindEvents();
        this._ready();
    }

    _cacheNodes() {
        this.nodes = {
            list: $('.catalogList'),
            plitka: $('.catalogPlitka')
        }
    }

    _bindEvents() {
        /*if (this.nodes.list.get(0) && this.nodes.plitka.get(0)) {
            $(window).resize((event) => {
                this.do();
            });
        }*/

        $('.changeView [name="view"]').click((event) => {
            let value = $(event.currentTarget).val();
            
            $('.changeView__item').removeClass('active');
            $(event.currentTarget).parents('.changeView__item').addClass('active');

            if (value == 'list') {
                this.nodes.list.show();
                this.nodes.plitka.hide();
            } else {
                this.nodes.list.hide();
                this.nodes.plitka.show();
            }
        });
    }

    _ready() {
        this.do();
    }

    do() {
        let width = $(document).width();

        if (width < 550) {
            this.nodes.list.hide();
            this.nodes.plitka.show();
            flexGridAddElements('designersPlitka__inner', 'designersPlitka__item', 'designersPlitka__item_hide');
        } else {
            this.nodes.list.show();
            this.nodes.plitka.hide();
        }
    }
}

class Application {
    constructor() {
        this._mainScripts();
        this._initClasses();
    }

    _mainScripts() {
        flexGridAddElements('catalogBrick__inner', 'catalogBrick__item', 'catalogBrick__item_hide');
        flexGridAddElements('reviews__inner', 'reviews__item', 'reviews__item_hide');
        flexGridAddElements('partnersPage__inner', 'partnersPage__item', 'partnersPage__item_hide');
        flexGridAddElements('partnersPage__inner', 'partnersPage__item', 'partnersPage__item_hide');
        flexGridAddElements('catalogPlitka__inner', 'catalogPlitka__item', 'catalogPlitka__item_hide');
        flexGridAddElements('designersList__bottomInner', 'catalogBrick__item', 'catalogBrick__item_hide');

        $('.video__slider').owlCarousel({
            items: 1,
            nav: true,
            navText: false,
            center: true,
            loop: true
        });

        $('.lphotos_slider').owlCarousel({
            items: 7,
            nav: true,
            dots: false,
            navText: false,
            center: false,
            loop: false,
            responsiveClass:true,
            responsive:{
                0:{
                    items:2
                },
                500:{
                    items:3
                },
                550:{
                    items:7
                }
            }
        });

        $('.people__slider').owlCarousel({
            items: 5,
            nav: true,
            navText: false,
            dots: false,
            center: true,
            loop: true,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1
                },
                1000:{
                    items:3
                },
                1680:{
                    items:5
                }
            }
        });

        $('.partners__slider').owlCarousel({
            items: 3,
            nav: true,
            navText: false,
            dots: false,
            loop: true,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1
                },
                560:{
                    items:2
                },
                850:{
                    items:3
                }
            }
        });

        $('.reviewsSlider').owlCarousel({
            items: 1,
            nav: true,
            navText: false,
            dots: true,
            loop: true,
            center: true
        });

        $('.catalogList__slider').owlCarousel({
            items: 1,
            nav: true,
            navText: false,
            dots: true,
            loop: false
        });

        $('.mainHeader__mobileTrigger').click(function() {
            if ($(this).hasClass('active')) {
                $(this).removeClass('active');
                $('.mainHeader__menus').slideUp('fast');
                $('.mainHeader__contacts').slideUp('fast');
            } else {
                $(this).addClass('active');
                $('.mainHeader__menus').slideDown('fast');
                $('.mainHeader__contacts').slideDown('fast');
            }
        });

        $(window).resize(function() {
            /*if ($(window).width() > 860) {
                $('.mainHeader__menus').show();
                $('.mainHeader__contacts').show();
            } else {
                $('.mainHeader__mobileTrigger').removeClass('active');
                $('.mainHeader__menus').hide();
                $('.mainHeader__contacts').hide();
            }*/
        });

        if ($('#map').get(0)) {
            ymaps.ready(function () {
                var myMap = new ymaps.Map('map', {
                        center: [55.695870, 37.458283],
                        zoom: 15
                    }, {
                        searchControlProvider: 'yandex#search'
                    }),

                    myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
                        hintContent: '',
                        balloonContent: ''
                    }, {
                        iconLayout: 'default#image',
                        iconImageHref: '/img/baloon.png',
                        iconImageSize: [47, 63],
                        iconImageOffset: [-23, -32]
                    });

                myMap.behaviors.disable('scrollZoom');

                myMap.geoObjects
                    .add(myPlacemark);
            });
        }

        $('.filter__select').selectmenu();

        $('.catalogList__sliderItem').hover(
            function() {
                let parent = $(this).parents('.catalogList__slider');
                let info = parent.siblings('.catalogList__info');

                $(this).addClass('hover');

                if (info.hasClass('catalogList__info_odd')) {
                    info.css({'transform': 'translate(150px, 0)'});
                }

                if (info.hasClass('catalogList__info_even')) {
                    info.css({'transform': 'translate(-150px, 0)'});
                }
            },
            function() {
                let parent = $(this).parents('.catalogList__slider');
                let info = parent.siblings('.catalogList__info');

                $(this).removeClass('hover');

                info.css({'transform': 'translate(0, 0)'});
            }
        );

        $('.subscribeForm').on('beforeSubmit', function (e) {
            $.post('/site/subscribe', $(this).serialize(), function(response) {
                console.log(response);
                if (response == 'success') {
                    alert('Вы подписаны');
                } else if (response == 'already') {
                    alert('Вы уже подписаны');
                } else {
                    alert('Ошибка');
                }
            });
            return false;
        });

        $('body').on('beforeSubmit', '.sendForm', (event) => {
            $.post('/mail/index', $(event.currentTarget).serialize(), function(response) {
                console.log(response);
                if (response == 'success') {
                    $.fancybox.close();

                    setTimeout(function() {
                        $.fancybox.open($('#success'));
                    }, 100);

                    setTimeout(function() {
                        $.fancybox.close();
                    }, 3000);
                } else {
                    alert('Ошибка');
                }
            });
            return false;
        });

        $('.js-consult').fancybox({
            beforeLoad: (instance, slide) => {
                let button = $(slide.opts.$orig);
                let listItem = button.parents('.designersList__item');
                let brickItem = button.parents('.designersPlitka__item');
                let name = listItem.find('.designersList__name').text() || brickItem.find('.designersPlitka__name').text();

                $('#callbackform-consult').val(name);
            },
            afterClose: (instance, slide) => {
                $('#callbackform-consult').val('');
            }
        });

        $('.mainCategories__item').hover(
            function() {
                $('.mainCategories__item').removeClass('active');
                $(this).addClass('active');
            },
            function() {
                $('.mainCategories__item').removeClass('active');
                $('.mainCategories__item').eq(1).addClass('active');
            }
        );

        if ($('.designersList').get(0)) {
            if (location.search.indexOf('id')) {
                let params = window
                    .location
                    .search
                    .replace('?','')
                    .split('&')
                    .reduce(
                        function(p,e){
                            var a = e.split('=');
                            p[ decodeURIComponent(a[0])] = decodeURIComponent(a[1]);
                            return p;
                        },
                        {}
                    );
                let designer = $('.designersList__item[data-id="'+params["id"]+'"]');
                
                if (designer.get(0)) {
                    let offset = designer.offset();
                    $("html, body").animate({ scrollTop: offset.top - 40 }, 100);
                }
            }
        }

        $('.catalogList__sliderItem, [data-fancybox="productImages"]').fancybox({
            buttons : [
                'slideShow',
                'fullScreen',
                'thumbs',
                'share',
                'close'
            ],
        });
    }

    _initClasses() {
        new MapContent($('.map__content'));
        new DesListPlitka();
        new CatalogListPlitka();
        new Filter($('#filter'));
        new TopButton();
    }
}

(function () {
    new Application();
})();