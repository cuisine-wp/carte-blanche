export default class Nav {

    constructor() {

        this.toggle = $('.toggle-menu');
        this.toggleBtn = $('.toggle-menu i');
        this.menu = $('.menu-main-container');
        this.feedbackWrapper = $('.feedback-wrapper');

        if( this.toggle.length > 0 ){
            this.setEvents();
        }
    }

    /**
     * Set the navigation events:
     */
    setEvents() {

        this.toggle.on('click tap', function () {
            this.menu.toggleClass('fold-out');
            this.toggleBtn.toggleClass('fa-remove');
            this.toggleBtn.toggleClass('fa-bars');

            return false;
        });

        $('html').on('click tap', function (e) {

            //Hide the menus if visible
            if (this.menu.hasClass('fold-out')) {

                this.menu.removeClass('fold-out');
                this.toggleBtn.removeClass('fa-remove');
                this.toggleBtn.addClass('fa-bars');

                //return false;

            } else if ( this.feedbackWrapper.hasClass('fold-out') ) {

                this.feedbackWrapper.trigger('click');

            }
        });

        $('.menu-item-has-children > a').on('click', function (e) {

            if (this.menu.hasClass('fold-out')) {

                e.preventDefault();

                let parent = $(this).parent();

                if (parent.hasClass('fold-out')) {

                    if ($(this).attr('href').length > 0) {
                        let _url = $(this).attr('href');
                    } else {
                        _url = $(this).find('a').attr('href');
                    }

                    window.location.href = _url;

                } else {

                    parent.addClass('fold-out');

                    return false;

                }

                return false;
            }
        });
    }
}
