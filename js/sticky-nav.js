// header is duplicate of main header
const header = document.querySelector(".hidden-header");
const headerHeight = header.offsetHeight;
let lastScrollTop = window.scrollY;

window.addEventListener("scroll", () => {
  let st = window.scrollY;
  // hide header when scroll at top
  if (st === 0) {
    header.style.display = "none";
  } else {
    header.style.display = null;
  }

  // scrolling down so hide sticky nav
  if (st > lastScrollTop) {
    header.classList.remove("show");
  }
  // scrolling up and Y is greater than header height so show sticky nav
  else if (st < lastScrollTop) {
    if (st >= headerHeight) {
      console.log("scrolling up");
      header.classList.add("show");
    }
  }
  // some mobile devices allow for negative scrollY
  lastScrollTop = st <= 0 ? 0 : st;
});
