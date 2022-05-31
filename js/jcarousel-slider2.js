(function($) {
    $(function() {
        var jcarousel = $('.jcarousel2');
        jcarousel
            .jcarousel({
                wrap: 'circular',
				auto: 1,
				animation: 10000,
            }).jcarouselAutoscroll({
				interval: 10000,
				target: '+=1',
				autostart: true
			});

        $('.jcarousel-control-prev2')
            .jcarouselControl({
                target: '-=1'
            });

        $('.jcarousel-control-next2')
            .jcarouselControl({
                target: '+=1'
            });

        $('.jcarousel-pagination')
            .on('jcarouselpagination:active', 'a', function() {
                $(this).addClass('active');
            })
            .on('jcarouselpagination:inactive', 'a', function() {
                $(this).removeClass('active');
            })
            .on('click', function(e) {
                e.preventDefault();
            })
            .jcarouselPagination({
                perPage: 1,
                item: function(page) {
                    return '<a href="#' + page + '">' + page + '</a>';
                }
            });
    });
})(jQuery);
