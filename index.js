var preloader = document.getElementById("web-loader");

function loading() {
  preloader.style.display = "none";
}

$(window).scroll(function () {
  if (window.scrollY > 100) {
    document.getElementById("FirstHeader").classList.add("scrolled");
    document.getElementById("SecondHeader").classList.add("scrolled");
  } else {
    document.getElementById("FirstHeader").classList.remove("scrolled");
    document.getElementById("SecondHeader").classList.remove("scrolled");
    document.getElementById("FirstHeader").classList.add("unscrolled");
    document.getElementById("SecondHeader").classList.add("unscrolled");
  }
});

//////////////////////////////////////////
// Animation for Header Logo
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (window.scrollY > 100) {
    document.getElementById("header__logo").classList.add("animateLogo");
  } else {
    document.getElementById("header__logo").classList.remove("animateLogo");
  }
}

const activePage= window.location.pathname;
const links = document.getElementsByClassName('header-navbar__link');

Array.from(links).forEach(function (element) {

  const linkName=element.getAttribute('href')
  if(linkName.includes(`${activePage}`))
  {
    element.classList.add('hell')
  }
});
// const links = document.getElementsByClassName('header-navbar__link').forEach(element => {
//   console.log(element);
// });
