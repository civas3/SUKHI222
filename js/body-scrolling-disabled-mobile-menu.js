
const body = document.querySelector("body");
const toggleMenu = document.querySelector(".menu-icon");

  toggleMenu.addEventListener("click", () => {
    body.classList.toggle("lock-scroll");
  });

  
