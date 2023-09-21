'use strict';

$(window).on('load', function () {

    var body = $('body');

    switch (body.attr('data-page')) {
		
        case "index":
            /* swiper carousel connectionwiper */
            var swiper2 = new Swiper(".connectionwiper", {
                slidesPerView: "auto",
                spaceBetween: 0,
                pagination: false
            });

            break;
    }

});
