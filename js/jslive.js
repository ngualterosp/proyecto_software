(function(){
  var video = document.getElementById('video'),
    vendorUrl = window.URL || window.webkitURL;

  navigator.getMedia = navigator.getUserMedia ||
            navigator.webkitGetUserMedia ||
            navigator.mozGetUserMedia ||
            navigator.msGetUserMedia;

            //capturar video
      navigator.getMedia({
        video: true,
        audio: false
      }, function(stream){
        video.src = vendorUrl.createObjectURL(stream);
        video.play();
      }, function(error) {
          //si un error ocurre
          // error.code
      });
})();
