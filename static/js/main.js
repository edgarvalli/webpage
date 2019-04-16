window.addEventListener("scroll", function(e) {
  const header = document.getElementById("sticky-navbar");
  const sticky = header.offsetTop;
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
});
const showMenu = () => {
  const menu = document.querySelector("#menu");
  menu.classList.contains("menu-show")
    ? menu.classList.remove("menu-show")
    : menu.classList.add("menu-show");
};
