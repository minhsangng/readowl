document.addEventListener("DOMContentLoaded", function () {
  let navItem = document.querySelectorAll(".nav-item");
  let params = new URLSearchParams(window.location.search);
  let currentPage = params.get("p");

  navItem.forEach((item) => {
    if (item.id === (currentPage || "home")) {
      item.classList.add("active");
      item.classList.add("text-orange-600");
    }
  });
});

// PROGRESS BAR
let scrollPrecentage = () => {
  let scrollProgress = document.getElementById("progress-bar");
  let pos = document.body.scrollTop || document.documentElement.scrollTop;
  let calcHeight =
    document.documentElement.scrollHeight -
    document.documentElement.clientHeight;
  let scrollVal = Math.round((pos * 100) / calcHeight);
  scrollProgress.style.background = `conic-gradient(var(--third-color) ${scrollVal}%,var(--second-color) ${scrollVal}%)`;
};

document.addEventListener("load", scrollPrecentage);
document.addEventListener("scroll", scrollPrecentage);
