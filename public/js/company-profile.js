function timeLineInit(id) {
    prevIdClick = undefined;
    isNodeShown = false;

    // hide item
    hide = function (id) {
        $(`.project-node${id}`).removeClass(`show`);
        setTimeout(() => {
            $(`#sub-v-line${id}`).removeClass(`show`);
            setTimeout(() => {
                $(`#v-line${id}`).removeClass(`show`);
            }, 150);
        }, 300);
    };

    // show item
    show = function (id) {
        $(`#v-line${id}`).addClass(`show`);
        setTimeout(() => {
            $(`#sub-v-line${id}`).addClass(`show`);
            setTimeout(() => {
                $(`.project-node${id}`).addClass(`show`);
            }, 150);
        }, 150);
    };

    // toggle show and hide Animation
    toggle = function (isShown, id) {
        if (isShown) {
            setTimeout(() => {
                $('.time-line-body').height(0);
            }, 450);

            hide(id);
        } else {
            childHeight = $(`#project-container${id}`).height(); 
            $('.time-line-body').height(`${childHeight}px`);
            console.log(childHeight);
            
            show(id);
        }
    };

    // Main code Runtime
    main = (() => {
        $(`#circle-node${id}`).click(function (event) {
            console.log('click');
            currentIdClick = event.target.id.slice(-1);
            switch(prevIdClick){
                //hide or show current item 
                case currentIdClick:
                    toggle(isNodeShown, currentIdClick);
                    isNodeShown = (isNodeShown) ? false : true;
                break;
                //show item on first click
                case undefined:
                    toggle(isNodeShown, currentIdClick);
                    isNodeShown = true;
                break;
                //hide previous item
                //show current item
                default:
                    if (isNodeShown) {
                        toggle(true, prevIdClick);
                        setTimeout(() => {
                            toggle(false, currentIdClick);
                        }, 450);
                    } else {
                        toggle(false, currentIdClick);
                    }
                    isNodeShown = true;
                break;
            }
            prevIdClick = currentIdClick;
        });
    })();
}

//
function setMargin(){
    timeLineNav = document.getElementsByClassName('time-line-list')[0];
    timeLineBody = document.getElementsByClassName('time-line-body')[0];

    timeLineMargin = timeLineNav.offsetLeft + 'px';
    timeLineBody.style.marginLeft = timeLineMargin;
}
//
function setPadding(id){
    projectContainer = document.getElementById(`project-container${id}`);
    projectContainer.style.paddingLeft =  (215*id) + 'px';
}
