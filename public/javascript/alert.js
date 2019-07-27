let episode = document.getElementById('supepisode');
if (episode != null) {
  episode.addEventListener('click', function(e){
      if (window.confirm("voulez vous supprimer ce message?")){

      }else{
        e.preventDefault();
      }
  });
}

let comSignaler = document.getElementById('supmessage');
if (comSignaler != null){
  comSignaler.addEventListener('click', function(e){
      if (window.confirm("voulez vous supprimer ce message?")){

      }else{
        e.preventDefault();
      }
  });
}
