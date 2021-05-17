$(document).ready(function () {
    setMapHeight();
    setImgHeight();
    generateSlider();
    initImagePopUp();
});

$(window).resize(function () {
    setImgHeight()
    setMapHeight();
});

$(window).on('load', function () {
    setPreviewImgHeight()
})

//set Img Height on desktop
function setImgHeight() {
    if ($(window).width() > 1024 && $(window).width() > $(window).height()) {

        imgHeight = $(window).height() - $('#m-navbar').height();

        $('.project-img').css('height', imgHeight + 'px');
    }
}


//set Map Height on LG -> XL screen
function setMapHeight() {
    if ($(window).width() > 600) {
        height = $('.detail-info').height() + 'px';
        $('#map_img').height(height)
    }
}

//set preview slider img height
function setPreviewImgHeight() {
    minHeight = $('.preview-img').first().height();

    $('.preview-img').each(function () {
        if ($(this).height() < minHeight) {
            minHeight = $(this).height()
        }
    })
    $('.preview-img').css('height', minHeight + 'px')
}

//
function generateSlider() {
    $('.project-preview').slick({
        centerMode: true,
        centerPadding: '30px',
        slidesToShow: 3,
        infinite: true,
        arrow: true,
        dots: true,
        autoplay: true,
        autoplaySpeed: 2500,
        responsive: [{
            breakpoint: 768,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 3
            }
        },
        {
            breakpoint: 480,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
            }
        }
        ]
    });
}

//Image pop up
function initImagePopUp() {
    //
    $(".project-img").on("click", setImgSrc);
    $(".preview-img").on("click", setImgSrc);

    //
    $(".close").on('click', function(){
        $("#popUpModal").css("display", "none");
        console.log('close');
        
    });

    function setImgSrc() {
        
        imgSrc = $(this).attr('src');
        imgtext = $(this).attr('alt');

        $("#popUpModal").css('display', 'flex');
        $("#imgModal").attr('src', imgSrc);
        $('#captionModal').html(imgtext);
    }
}