const hamburgers = document.querySelectorAll(".top-nav__hamburger");
const hamburgerIcons = document.querySelectorAll(".top-nav__hamburger-icon");
const mobileOverlay = document.querySelector(".mobile-nav-overlay");
const mainContent = document.querySelector(".main-content");
const hiddenHeader = document.querySelector(".hidden-header");
const sidebar = document.querySelector(".sidebar");

// add menu-open classes when hamburger is clicked
hamburgers.forEach((el) => {
  el.addEventListener("click", (evt) => {
    hamburgerIcons.forEach((el) => {
      el.classList.add("menu-open");
    });
    mobileOverlay.classList.add("menu-open");
    mainContent.classList.add("menu-open");
    hiddenHeader.classList.add("menu-open");
    body.style.overflow = "hidden";
  });
});

// remove menu-open classes when overlay is clicked
mobileOverlay.addEventListener("click", () => {
  hamburgerIcons.forEach((el) => {
    el.classList.remove("menu-open");
  });
  mainContent.classList.remove("menu-open");
  mobileOverlay.classList.remove("menu-open");
  sidebar.classList.remove("menu-open");
  hiddenHeader.classList.remove("menu-open");
  body.style.overflow = null;
});

// adjust z-index of sidebar after slide to left is complete to improve transition effect
mainContent.addEventListener("transitionend", (evt) => {
  if (evt.target.classList.contains("main-content")) {
    if (getComputedStyle(evt.target).transform != "none") {
      sidebar.classList.add("menu-open");
    }
  }
});
