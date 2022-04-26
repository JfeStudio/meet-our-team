// scroll sticky navigation

const stickyNavigation = document.querySelector("#scroll-navigation");

window.addEventListener("scroll", () => {
  stickyNavigation.classList.toggle("active", this.scrollY > 20);
});

// set dark mode

const html = document.querySelector("html");
const btnDarkMode = document.querySelector(".toggle-darkmode");

btnDarkMode.addEventListener("click", () => {
  btnDarkMode.classList.toggle("changes");
  if (html.dataset.colorMode === "light") {
    html.dataset.colorMode = "dark";
  } else {
    html.dataset.colorMode = "light";
  }
});