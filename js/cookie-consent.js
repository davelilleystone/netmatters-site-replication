const body = document.querySelector("body");
const cookieConsentContainer = document.querySelector(".cookie-consent-container");
const cookieInforPage = document.querySelector(".cookie-info-page");
const cookieInfoBtn = document.querySelector(".cookie-btn-info");
const cookieCancelBtn = document.querySelector(".cookie-btn-cancel");
const cookieAcceptBtn = document.querySelectorAll(".cookie-btn-accept");

const checkCookieConsent = () => {
  if (!localStorage.getItem("acceptCookies")) {
    showCookieConsentContainer();
    setOverflowHidden();
  }
};

const setOverflowHidden = () => {
  body.classList.add("overflow-hidden");
};

const removeOverflowHidden = () => {
  body.classList.remove("overflow-hidden");
};

// below is for cookie info page - will come back to this later when I have time
// const showCookieInfoPage = () => {
//   cookieInforPage.classList.remove("hidden");
// };

// below is for cookie info page - will come back to this later when I have time
// const hideCookieInfoPage = () => {
//   cookieInforPage.classList.add("hidden");
// };

const showCookieConsentContainer = () => {
  cookieConsentContainer.classList.remove("hidden");
};

const hideCookieConsentContainer = () => {
  cookieConsentContainer.classList.add("hidden");
};

// add event listeners

cookieAcceptBtn.forEach((btn) => {
  btn.addEventListener("click", (evt) => {
    hideCookieConsentContainer();
    removeOverflowHidden();
    localStorage.setItem("acceptCookies", true);
  });
});

// below is for cookie info page - will come back to this later when I have time
// cookieInfoBtn.addEventListener("click", showCookieInfoPage);

cookieCancelBtn.addEventListener("click", hideCookieInfoPage);

window.addEventListener("DOMContentLoaded", checkCookieConsent);
