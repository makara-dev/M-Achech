/**
 * This is the Backup Raw Source File
 * Change the code in index.min.js instead
 */

$(document).ready(function () {
    initProjectSlider();
    clientIconSlideReInit();
    clientIconSlideResponsive();
});

/**
 * Set Dimension for Project slider
 * NOTE :: DO NOT USE INSIDE $(document).ready
 */
(function setProjectSliderStyle() {
    $('#m-architect-icon').on('load',
        function () {       
            let screenHeight = $(window).height();
            let containerHeight = screenHeight - $('#m-navbar').height();
            $('.project-preview-container').height(containerHeight + 'px');
            $(".project-slide-wrapper").height(containerHeight - 40 + "px");

            //set vertical img(video) height
            let heightRatio = 0.45;
            screenWidth = $(window).width();
            if(screenWidth < 450){
                heightRatio = 0.35;
            } else if (screenWidth < 720) {
                heightRatio = 0.38;
            } else if (screenWidth < 920) {
                heightRatio = 0.5;
            } else if (screenWidth < 1200) {
                heightRatio = 0.65;
            }else {
                heightRatio = 0.85;
            }

            let imgShowcaseHeight = containerHeight * heightRatio;
            $('.project-showcase').height(imgShowcaseHeight + 'px');

            let imgHorizontalHeight = imgShowcaseHeight / 1.8;
            $('.img-horizontal-block').height(imgHorizontalHeight + 'px');

            let imgHorizontalMargin = (imgShowcaseHeight - imgHorizontalHeight) / 2;
            $('.img-horizontal-block').css('margin-top', imgHorizontalMargin);
            
            if (screenWidth > 1024 && (screenWidth / screenHeight) >= (12/10)) { /*ipad ratio*/
                
                let containerPadding = parseInt($('.project-slide-wrapper').css('padding-top'));
                let imgShowcaseMargin = ((containerHeight - imgShowcaseHeight) / 2) - containerPadding;
                $('.project-showcase').css('margin-top', imgShowcaseMargin);
                
                $(window).on('load',
                    function setCSS() { 
                        textSectionMargin = imgHorizontalMargin + imgShowcaseMargin + ((imgHorizontalHeight - $('.header-description-text').height() - $('.body-description-text').height()) /2);
                        $('.header-description-text').css('margin-top', textSectionMargin);
                });
            }
        }
    );

    //might trigger 2 times but better than not triggering
    //(Img cached in browser)  
    $('#m-architect-icon').trigger('load');

    /*
    DID NOT WORK
    if ( $('#m-architect-icon').complete ) {
        $('#m-architect-icon').trigger('load');
    }
    */
}())

// slick slider for construction image
function initProjectSlider() {
    var $slickElement = $(".project-preview-container");

    $slickElement.slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: true,
        dots: true,
    });

    $slickElement.on("init reInit afterChange", function (
        event,
        slick,
        currentSlide
    ) {
        if (!slick.$dots) {
            return;
        }
        var firstIndex = (currentSlide ? currentSlide : 0) + 1;

        if (firstIndex === 1 ) {
            player.playVideo();
        } else {
            player.stopVideo();
        }
    });
}

// Slick slider for our client icons
function clientIconSlideInit(numOfSlide) {
    $(".ourclient-slide-wrapper").slick({
        slidesToShow: numOfSlide,
        slidesToScroll: numOfSlide,
        dots: true,
    });
}

//Init Slider Clients' Icons
function clientIconSlideReInit() {
    let clientWidth = $(window).width();

    if (clientWidth < 590) {
        $(".ourclient-slide-wrapper").slick("unslick");
        // clientIconSlideInit(1);
    } else if (clientWidth < 720) {
        clientIconSlideInit(3);
    } else {
        clientIconSlideInit(5);
    }
}

//responsive Slider Client Icon
function clientIconSlideResponsive() {
    $(window).resize(function () {
        clientIconSlideReInit();
    });
}


