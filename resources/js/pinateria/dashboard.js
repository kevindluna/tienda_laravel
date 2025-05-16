document.getElementById("menu-toggle").addEventListener("click", function(e) {
   e.preventDefault();
   document.getElementById("wrapper").classList.toggle("toggled");
});

document.getElementById("menu-toggle-2").addEventListener("click", function(e) {
   e.preventDefault();
   document.getElementById("wrapper").classList.toggle("toggled-2");
   document.querySelectorAll('#menu ul').forEach(ul => ul.style.display = 'none');
});

function initMenu() {
   document.querySelectorAll('#menu ul').forEach(ul => ul.style.display = 'none');
   document.querySelectorAll('#menu ul').forEach(ul => {
      if (ul.querySelector('.current')) {
         ul.style.display = 'block';
      }
   });
   document.querySelectorAll('#menu li a').forEach(link => {
      link.addEventListener('click', function() {
         const checkElement = this.nextElementSibling;
         if (checkElement && checkElement.tagName.toLowerCase() === 'ul') {
            if (checkElement.style.display === 'block') {
               return false;
            } else {
               document.querySelectorAll('#menu ul').forEach(ul => {
                  if (ul.style.display === 'block') {
                     ul.style.display = 'none';
                  }
               });
               checkElement.style.display = 'block';
               return false;
            }
         }
      });
   });
}

document.addEventListener("DOMContentLoaded", function() {
   initMenu();
});
