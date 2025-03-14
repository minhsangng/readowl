document.addEventListener("DOMContentLoaded", function () {
    let navItem = document.querySelectorAll(".nav-item");
    let params = new URLSearchParams(window.location.search);
    let currentPage = params.get("p");
    
    navItem.forEach(item => {
        if (item.id === (currentPage || "home")) {
            item.classList.add("active");
            item.classList.add("text-orange-600");
        }
    });
});