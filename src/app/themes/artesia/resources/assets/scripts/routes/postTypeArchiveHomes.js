export default {
    init() {
        function isMobile() {
            return window.matchMedia("(max-width: 767px)").matches
        }

        // Lots Map Status and details
        // ------
        $.fn.lot_status = function (options) {
            var settings = $.extend({
                details: '',
            }, options);

            var $window = $(window);
            var $map = this;
            var $lots = $map.find('*[class=lot]');
            var $details = $(settings.details);
            var scrolltop = 0;
            var classes = {
                'Available': 'available',
                'Quick Possession': 'quick-possession',
                'Sold': 'sold',
                'Showhomes': 'showhomes',
                'Coming Soon': 'coming-soon',  
            }
            var isover = false;
            var $overlay = $('#lotMapOverlay');

            $lots.click(function(){
                if (isMobile()) {
                    var $this = $(this);
                    var id = $this.attr('id');
                    var $detail = $details.find('.lot[data-id=' + id + ']');

                    $details.addClass('lot-clicked-open');
                    $details.find('.lot').removeClass('clicked');
                    $overlay.addClass('lot-clicked-open');

                    if ($detail.attr('data-active') == 'true') {
                        $detail.addClass('clicked');
                    }                    
                }
            });

            $('.close-lot, #lotMapOverlay').click(function(e){
                e.preventDefault();
                $details.find('.lot').removeClass('clicked');
                $overlay.removeClass('lot-clicked-open');
                $details.removeClass('lot-clicked-open');
            });

            $lots.mouseenter(function () {
                if (!isMobile()) {
                    var $this = $(this);
                    var id = $this.attr('id');
                    var $detail = $details.find('.lot[data-id=' + id + ']');

                    isover = true;
                    $details.addClass('lot-hovered');
                    $details.find('.lot').removeClass('hover');

                    if ($detail.attr('data-active') == 'true') {
                        $detail.addClass('hover');
                    }                    
                }
            }).mouseleave(function () {
                if (!isMobile()) {
                    isover = false;
                    setTimeout(function () {
                        if (!isover) {
                            $details.removeClass('lot-hovered');
                        }
                    }, 300);                    
                }
            });

            $(window).resize(function () {
                $details.removeAttr("style"); 
            });

            $(document).on('mousemove', function (e) {
                if (!isMobile()) {
                    var x = e.pageX;
                    var y = e.pageY - scrolltop;
                    x = (x < 90) ? 90 : x;
                    x = (x > $window.width() - 90) ? $window.width() - 90 : x;
                    y = (y > 310) ? y : 310;
                    $details.css({ left: x, top: y });                    
                }
            });

            $window.on('scroll', function () {
                scrolltop = $window.scrollTop();
            });

            $details.find('.lot').each(function () {
                var $this = $(this);

                var id = $this.data('id');

                var status = $this.data('status');

                var $lot = $map.find('#' + id);

                $lot.attr("class", "lot " + classes[status]);

                if (status == 'Available' || status == 'Quick Possession' || status == 'Showhomes') {
                    $lot.attr('data-active', 'true');
                    $this.attr('data-active', 'true');
                } else {
                    $lot.attr('data-active', 'false');
                    $this.attr('data-active', 'false');
                }
            });

            return this;
        }

    },
    finalize() {
        $('#lotMapSvg').lot_status({ details: '#lotMapDetails' }); 
    },
};
