const loserAudio = document.getElementById("loserAudio");
const bgAudio = document.getElementById("bgAudio");
function playLoserAudioAndRedirect(path){
    bgAudio.pause(); 
    loserAudio.play();
    setTimeout(()=>{
        window.location.href = path;
    }, 2 * 1000 /* 2s */);

}
