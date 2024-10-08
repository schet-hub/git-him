function reveal() {
    var reveals = document.querySelectorAll(".cont-prod");
  
    for (var i = 0; i < reveals.length; i++) {
      var windowHeight = window.innerHeight;
      var elementTop = reveals[i].getBoundingClientRect().top;
      var elementVisible = 150;
  
      if (elementTop < windowHeight - elementVisible) {
        reveals[i].classList.add("active");
      } else {
        reveals[i].classList.remove("active");
      }
    }
  }
  
  function rev() {
    var reve = document.querySelectorAll(".con-place");
  
    for (var i = 0; i < reve.length; i++) {
      var windowHeight = window.innerHeight;
      var elementTop = reve[i].getBoundingClientRect().top;
      var elementVisible = 50;
  
      if (elementTop < windowHeight - elementVisible) {
        reve[i].classList.add("active");
      } else {
        reve[i].classList.remove("active");
      }
    }
  }
  window.addEventListener("scroll", reveal, {passive: true});
  window.addEventListener("scroll", rev, {passive: true});