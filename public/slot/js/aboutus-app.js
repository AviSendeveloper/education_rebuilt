/* ************************************************************************ */
// Init
/* ************************************************************************ */
if (typeof SignUpGenius == 'undefined') {
    var SignUpGenius = {};
}

/* ************************************************************************ */
// Main class
/* ************************************************************************ */
SignUpGenius = {
    vars: {

    },
    tests: {
        isUsingRetina: window.devicePixelRatio > 1
    },
    config: {

    },
    main: (function() {
        return {
            init: function() {
                this.initScripts();
                this.registerEvents();
            },
            initScripts: function() {
                SignUpGenius.videothumbs.init();
                SignUpGenius.modals.init();

                $('body').addClass('ready');
            },
            registerEvents: function() {

                // Stop the hash, man
                $(document).on("click", "a[href='#']", function(e) {
                    e.preventDefault();
                });

            },
            isTouchDevice: function() {
                return Modernizr.touch;
            },
            isMobileDevice: function() {
                return $.browser.mobile;
            },
            phones: function() {

            }
        };
    })()
};


/* ************************************************************************ */
// Google analytics helpers
/* ************************************************************************ */
SignUpGenius.videothumbs = (function(){
    return {
        init: function() {

        	// Load each thumbnail based on existing videos in the dom, or manually per video from the script here or in the html
        	//this.loadThumb( 145661340 );

        	//SignUpGenius.videothumbs.loadThumb( 145661340 );
        	//SignUpGenius.videothumbs.loadThumb( 145661333 );
        	//SignUpGenius.videothumbs.loadThumb( 145661337 );

        },
        loadThumb: function(id){
		    $.ajax({
		        type:'GET',
		        url: 'https://vimeo.com/api/v2/video/' + id + '.json',
		        jsonp: 'callback',
		        dataType: 'jsonp',
		        success: function(data){
		            var thumbnail_src = data[0].thumbnail_large;
		            var thumbnail_title = data[0].title;
		            $('#vimeo-' + id).append('<img src="' + thumbnail_src + '" title="' + thumbnail_title + '"/>');
		        }
		    });
		},
    };
})();


/* ************************************************************************ */
// Init modals
/* ************************************************************************ */
SignUpGenius.modals = (function(){
    return {
        init: function() {

		    $('.modal-inline').magnificPopup({
				type:'inline',
				removalDelay: 300,
				mainClass: 'mfp-fade'
			});

			$('.modal-video').magnificPopup({
				type: 'iframe',
		        mainClass: 'mfp-fade',
		        removalDelay: 300,
		        tLoading: ''
			});

			$('.modal-iframe').magnificPopup({
				type: 'iframe',
		        mainClass: 'mfp-fade',
		        removalDelay: 300,
		        tLoading: ''
			});

			/* Bio clicker */
			/* Gets the name and other data attributes, dynamically builds the modal */
			$('.bio').on('click', function () {
				var bulbx = $(this).data('bulb-x');
				var bulby = $(this).data('bulb-y');

				var extrasmall_style = '';

				var newx = bulbx.replace(/\D/g,'');
				var newx = parseInt(newx);

				if ( newx > 299){
					extrasmall_style = 'extrasmall-lightbulb-left';
				} else {
					extrasmall_style = 'extrasmall-lightbulb-right';
				}

				var pic = $(this).data('image') + "-closeup-2x.jpg";
				var name = $(this).data('name');
				var title = $(this).data('title');
				var bio = $(this).find('.bio-description').html();

				$.magnificPopup.open({
					mainClass: 'mfp-fade',
			        removalDelay: 300,
					items: {
						src: 	'<div id="dynamic-modal" class="white-popup team-bio">' +

                    '<div class="hidden-xs">' +
    									'<div class="row">' +
    										'<div class="col-md-6 hidden-sm">' +
    											'<div class="lightbulb" style="right:' + bulbx + '; top:' + bulby + '" ><img class="bottom" src="/images/staff-pic-thumbnails/lightbulb-2x.png"></div>' +
    											'<div class="team-pic"><img class="bottom" src="/images/staff-pic-thumbnails/' + pic + '"></div>' +
    										'</div>' +
    										'<div class="col-md-6 col-sm-12">' +
    											'<div class="team-name h1">' + name + '</div>' +
    											'<div class="team-title h3">' + title + '</div>' +
    											'<p>' + bio + '</p>' +
    										'</div>' +
    									'</div>' +
                    '</div>' +

  								  '<div class="visible-xs">'+
  										'<div class="row">' +
  											'<div class="col-xs-12">' +
  												'<div class="lightbulb ' + extrasmall_style + '" style="right:' + bulbx + '; top:' + bulby + '" ><img class="bottom" src="/images/staff-pic-thumbnails/lightbulb-2x.png"></div>' +
  												'<div class="team-pic extrasmallbottom"><img class="bottom" src="/images/staff-pic-thumbnails/' + pic + '"></div>' +
  											'</div>' +
  											'<div class="col-xs-12">' +
  												'<div class="team-name h1">' + name + '</div>' +
  												'<div class="team-title h3">' + title + '</div>' +
  												'<p>' + bio + '</p>' +
  											'</div>' +
  										'</div>'+
  									'</div>' +

							    '</div>'
					},
					type: 'inline'
				});
			});

			$('.modal-gallery').each(function() {
				/*
				$('.gallery-item').magnificPopup({
        			type: 'image',
			        mainClass: 'mfp-fade',
			        removalDelay: 300,
			        gallery: {
						enabled: true, // set to true to enable gallery
						navigateByImgClick: true,
						arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>', // markup of an arrow button
						tPrev: 'Previous (Left arrow key)', // title for left button
						tNext: 'Next (Right arrow key)', // title for right button
						tCounter: '<span class="mfp-counter">%curr% of %total%</span>' // markup of counter
					}
				});
				*/
			});

			$('.gallery-item').magnificPopup({
    			type: 'image',
		        mainClass: 'mfp-fade',
		        removalDelay: 300,
		        gallery: {
					enabled: true, // set to true to enable gallery
					navigateByImgClick: true,
					arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>', // markup of an arrow button
					tPrev: 'Previous (Left arrow key)', // title for left button
					tNext: 'Next (Right arrow key)', // title for right button
					tCounter: '<span class="mfp-counter">%curr% <span class="gamma">/</span> %total%</span>' // markup of counter
				},
				tLoading: '<div class="preloader"><span></span><span></span><span></span><span></span><span></span></div>'
			});

			// From jQuery object
			$('.gallery-item').on( "click", function(event) {
				event.preventDefault(); // Don't scroll the browser
			});

			$('.gallery-trigger').on( "click", function(event) {
				event.preventDefault();
				$('.gallery-item').first().trigger('click');
			});

			$('.close-modal').click(function(){
			    $.magnificPopup.close();
			});


        }
    };
})();


/* ************************************************************************ */
//
/* ************************************************************************ */
$(function() {
    SignUpGenius.main.init();
    console.log("App ready");
});


$(document).ready(function(){
	// not used

});
