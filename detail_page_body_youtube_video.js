(function(){
  var i, newifr, mobileVideoHeight, divsVidYt = document.getElementsByClassName("youtube_in_body");
  if(divsVidYt.length > 0) {
    for (i = 0; i < divsVidYt.length; i++) {
      newifr = document.createElement("iframe");
      newifr.setAttribute("src", "https://www.youtube.com/embed/" + divsVidYt[i].textContent);
      newifr.setAttribute("frameborder", "0");
      newifr.setAttribute("allowfullscreen", true);
      newifr.className = "max_width_100";
      newifr.style.width = "640px";
      if(isSizeMobile() || cek_mobile()){
        mobileVideoHeight = Math.round((parseInt(window.innerWidth) / 16) * 10);
        newifr.style.height = mobileVideoHeight + "px"
      }
      else newifr.style.height = "400px";
      divsVidYt[i].innerHTML = "";
      divsVidYt[i].appendChild(newifr);
    }
  }
})();