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
    $("#m-architect-icon").on("load", function () {
        let screenHeight = $(window).height();
        let containerHeight = screenHeight - $("#m-navbar").height();
        $(".project-preview-container").height(containerHeight + "px");
        $(".project-slide-wrapper").height( containerHeight - 40 +"px");

        //set vertical img(video) height
        let heightRatio = 0.45;
        screenWidth = $(window).width();
        if (screenWidth < 450) {
            heightRatio = 0.35;
        } else if (screenWidth < 720) {
            heightRatio = 0.38;
        } else if (screenWidth < 920) {
            heightRatio = 0.5;
        } else if (screenWidth < 1200) {
            heightRatio = 0.65;
        } else {
            heightRatio = 0.85;
        }

        let imgShowcaseHeight = containerHeight * heightRatio;
        $(".project-showcase").height(imgShowcaseHeight + "px");

        let imgHorizontalHeight = imgShowcaseHeight / 1.8;
        $(".img-horizontal-block").height(imgHorizontalHeight + "px");

        let imgHorizontalMargin = (imgShowcaseHeight - imgHorizontalHeight) / 2;
        $(".img-horizontal-block").css("margin-top", imgHorizontalMargin);

        if (screenWidth > 1024 && screenWidth / screenHeight >= 12 / 10) {
            /*ipad ratio*/
            let containerPadding = parseInt($(".project-slide-wrapper").css("padding-top"));
            let imgShowcaseMargin = (containerHeight - imgShowcaseHeight) / 2 - containerPadding;
            $(".project-showcase").css("margin-top", imgShowcaseMargin);

            $(window).on("load", function setCSS() {
                let containerPadding = parseInt($(".project-slide-wrapper").css("padding-top"));
                let imgShowcaseMargin = (containerHeight - imgShowcaseHeight) / 2 - containerPadding;
                $(".project-showcase").css("margin-top", imgShowcaseMargin);
                $(".header-description-text").css("margin-top", textSectionMargin);
            });
        }
    });
    //might trigger 2 times but better than not triggering
    //(Img cached in browser)
    $("#m-architect-icon").trigger("load");

    /*
    DID NOT WORK
    if ( $('#m-architect-icon').complete ) {
        $('#m-architect-icon').trigger('load');
    }
    */
})();

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

        if (firstIndex === 1) {
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

    // 2. This code loads the IFrame Player API code asynchronously.
    var tag = document.createElement('script');

    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    // 3. This function creates an <iframe> (and YouTube player)
    //    after the API code downloads.
    var player;
    function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
            height: '390',
            width: '640',
            videoId: 'vua0cEMSPkk',
            playerVars: {
                'controls': 0
            },
            events: {
                'onReady': onPlayerReady,
                // 'onStateChange': onPlayerStateChange
                onStateChange: function (e) {
                    if (e.data === YT.PlayerState.ENDED) {
                        player.playVideo();
                    }
                }
            }
        });
    }

    // 4. The API will call this function when the video player is ready.
    function onPlayerReady(event) {
        player.playVideo();
    }

    // 5. The API calls this function when the player's state changes.
    //    The function indicates that when playing a video (state=1),
    //    the player should play for six seconds and then stop.
    var done = false;
    function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.PLAYING && !done) {
            setTimeout(stopVideo, 18000);
            done = true;
        }
    }

    // stop playing video
    function stopVideo() {
        player.stopVideo();
    }
    // pausing video
    function pauseVideo() {
        player.pauseVideo();
    }
    // play the video
    function playVideo() {
        player.playVideo();
    }
    // replay video
    function replayVideo() {
        player.seekTo(0);
        playVideo();
    }

