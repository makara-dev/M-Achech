let isShow = false;
let previousId ;
let widthScreen ;

// let timeLineHeight = {
//     "m1" : "155px",
//     "m2" : "775px",
//     "m3" : "310px",
//     "m4" : "55px"
// };
let timeLineHeight = {
    m1 : ["125px", "105px"],
    m2 : ["720px", "700px"],
    m3 : ["270px", "230px"],
    m4 : ["55px", ""]
};

// console.log(timeLineHeight2.m1[0]);
// console.log(timeLineHeight2.m1[1]);


// show time-line
let show = function(id) {
    switch(id) {
        case "m1": {
            $(`#${id}`).children('.time-line-body').css("height", timeLineHeight.m1[0]);
            $('.time-line-vline').css("height", timeLineHeight.m1[1]);
        }break;
        case "m2": {
            $(`#${id}`).children('.time-line-body').css("height", timeLineHeight.m2[0]);
            $('.time-line-vline').css("height", timeLineHeight.m2[1]);
        }break;
        case "m3": {
            $(`#${id}`).children('.time-line-body').css("height", timeLineHeight.m3[0]);
            $('.time-line-vline').css("height", timeLineHeight.m3[1]);
        }break;
        case "m4": {
            $(`#${id}`).children('.time-line-body').css("height", timeLineHeight.m4[0]);
            $('.time-line-vline').css("height", timeLineHeight.m4[1]);
        }
    }
}

// hide time-line
let hide = function (id) {
    $(`#${id}`).children('.time-line-body').css("height", "0px");
}

let showProfile_Mobile = function(clientWidth) {
    widthScreen = clientWidth;
    if(widthScreen <= "335") {
        timeLineHeight.m1[0] = "130px";
        timeLineHeight.m2[0] = "650px";
        timeLineHeight.m3[0] = "245px";
        timeLineHeight.m4[0] = "30px";
    }
    
    $('.service-menu').click(function(){
        // getting service-menu id
        let serviceId = $(this).attr('id');
        if(isShow) {
            if(previousId != null) {
                if(serviceId == previousId){
                    hide(previousId);
                    previousId = serviceId;
                    isShow = false;
                }
                if(serviceId != previousId) {
                    hide(previousId);
                    show(serviceId);
                    previousId = serviceId;
                    isShow = true;
                }
            }
        }else{
            show(serviceId);
            previousId = serviceId;
            isShow = true;
        }
    });
}