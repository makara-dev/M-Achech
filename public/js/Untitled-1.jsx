function timeLineInit(id) {

    prevIdClick = undefined;

    // hide item
    hide = function(id) {
        $(`#project-node${id}`).toggleClass(`show`);
        setTimeout(() => {
            $(`#sub-v-line${id}`).toggleClass(`show`);
            setTimeout(() => {
                $(`#v-line${id}`).toggleClass(`show`);
            }, 150);
        }, 300);
    };

    // show item
    show = function(id) {
        $(`#v-line${id}`).toggleClass(`show`);
        setTimeout(() => {
            $(`#sub-v-line${id}`).toggleClass(`show`);
            setTimeout(() => {
                $(`#project-node${id}`).toggleClass(`show`);
            }, 150);
        }, 150);
    }

    // toggle show and hide Animation
    toggle = function(isShown,id){
        if (isShown) {
            hide(id);
        } else {
            show(id);
        }
    }

    // Main code Runtime
    main = (() => {
        $(`#circle-node${id}`).click(function (event) {
            currentIdClick = event.target.id.slice(-1);
            if(currentIdClick === prevIdClick){
                isPrevNodeShown = $(`#project-node${prevIdClick}`).hasClass(`show`);
                toggle(isPrevNodeShown,currentIdClick);                
            }else{
                hide(prevIdClick);
                show(currentIdClick);
            }
            prevIdClick = currentIdClick;            
        });

    })();
}
