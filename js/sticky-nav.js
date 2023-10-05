const header = document.querySelector(".hidden-header");
const headerHeight = header.offsetHeight;
let lastScrollTop = scrollY;

window.addEventListener("scroll", () => {
  let st = scrollY;
  // Scrolling down so remove sticky nav
  if (st > lastScrollTop) {
    if (lastScrollTop <= 0) {
      header.style.display = "none";
    } else {
      header.style.display = null;
    }
    header.classList.remove("show");
  }
  // scrolling up and Y is greater than header height so show sticky nav
  else if (st < lastScrollTop) {
    if (scrollY >= headerHeight) {
      header.classList.add("show");
    }
  }
  // some mobile devices allow for negative scrollY
  lastScrollTop = st <= 0 ? 0 : st;
});
