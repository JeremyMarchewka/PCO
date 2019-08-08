/* dé-commenter pour activer la lecture automatique de la vidéo
au chargement de la page */

//$('#video-principale')[0].play();

var player = document.querySelector('#videoPlayer');

/* fonction qui permet de lancer la video */
var getBtn = document.getElementById('playBtn');
var getIcon = document.getElementById('transportIcon');

getBtn.addEventListener('click', function () {
    if (getIcon.className === 'far fa-play-circle fa-2x') {
        getIcon.setAttribute('class', 'far fa-pause-circle fa-2x');
    } else {
        getIcon.setAttribute('class', 'far fa-play-circle fa-2x');
    }
});

/* fonction qui permet de mettre la vidéo en pause */
function play(idPlayer, control) {
  var player = document.querySelector('#' + idPlayer);

    if (player.paused) {
      player.play();
    } else {
      player.pause();
    }
}

/* fonction qui arrête la video et la ré-initialise à 0 */
  function resume(idPlayer) {
    var player = document.querySelector('#' + idPlayer);

    player.currentTime = 0;
    player.pause();
  }

/* fonction qui gère le volume */
  function volume(idPlayer, vol) {
    var player = document.querySelector ('#' + idPlayer);

    player.volume = vol;
  }
/* fonction qui gère le plein écran */
function fullscreen() {
  var elem = document.getElementById("videoPlayer");
  if (elem.requestFullscreen) {
  elem.requestFullscreen();
  }
}
/* fonction de la barre de progression */
function update(player) {
    var duration = player.duration; // Durée totale
    var time     = player.currentTime;// Temps écoulé

    var fraction = time / duration;
    var percent  = Math.ceil(fraction * 100);

    var progress = document.querySelector('#progressBar');
    progress.style.width = percent + '%';
}
/* rendre la barre cliquable */
function getMousePosition(event) {
    return {
        x: event.pageX,
        y: event.pageY
    };
}
function getPosition(element){
    var top = 0, left = 0;
    do {
        top  += element.offsetTop;
        left += element.offsetLeft;
    } while (element = element.offsetParent);
    return { x: left, y: top };
}
function clickProgress(idPlayer, control, event) {
    var parent = getPosition(control);    // La position absolue de la progressBar
    var target = getMousePosition(event); // L'endroit de la progressBar où on a cliqué
    var player = document.querySelector('#' + idPlayer);

    var x = target.x - parent.x;
    var wrapperWidth = document.querySelector('#progressBarControl').offsetWidth;

    var percent = Math.ceil((x / wrapperWidth) * 100);
    var duration = player.duration;

    player.currentTime = (duration * percent) / 100;
}
