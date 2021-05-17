// 2. This code loads the IFrame Player API code asynchronously.
var tag = document.createElement('script');

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// 3. This function creates an <iframe> (and YouTube player)
//    after the API code downloads.
var player;
var player2;
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
