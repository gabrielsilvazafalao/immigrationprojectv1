function funcsetcookiejs() {
   $.ajax({
      url:'setcoockie.php',
      complete: function () {
         alert('Será lembrado!');
          document.getElementById("cookieset").style.display = "none";
          document.getElementById("cookieinset").style.display = "inline-block";
      },
      error: function () {
          alert('Erro');
      }
  });  
  return false;
}

function funcunsetcookiejs() {
   $.ajax({
      url:'uncoockie.php',
      complete: function () {
         alert('Lamentamos ter que esquecer-lo.');
         document.getElementById("cookieinset").style.display = "none";
         document.getElementById("cookieset").style.display = "inline-block";
      },
      error: function () {
          alert('Erro');
      }
  });  
  return false;
}