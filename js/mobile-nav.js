const hamburgers = document.querySelectorAll(".top-nav__hamburger");
const hamburgerIcons = document.querySelectorAll(".top-nav__hamburger-icon");
const mobileOverlay = document.querySelector(".mobile-nav-overlay");
const mainContent = document.querySelector(".main-content");

console.log(hamburgers instanceof NodeList);

hamburgers.forEach((el) => {
  el.addEventListener("click", (evt) => {
    hamburgerIcons.forEach((el) => {
      el.classList.add("menu-open");
    });
    mobileOverlay.classList.add("menu-open");
    mainContent.classList.add("menu-open");
  });
});

mobileOverlay.addEventListener("click", () => {
  mobileOverlay.classList.remove("menu-open");
  hamburgerIcons.forEach((el) => {
    el.classList.remove("menu-open");
  });
  mainContent.classList.remove("menu-open");
});
