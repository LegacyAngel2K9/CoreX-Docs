// CoreX Documentation - JavaScript Functions

document.addEventListener("DOMContentLoaded", function () {
    
    // Confirm before submitting admin changes
    const adminForm = document.querySelector("form[action='/admin/update']");
    if (adminForm) {
        adminForm.addEventListener("submit", function (event) {
            const confirmUpdate = confirm("Are you sure you want to save changes?");
            if (!confirmUpdate) {
                event.preventDefault();
            }
        });
    }

    // Highlight active navigation link
    const currentPath = window.location.pathname;
    const navLinks = document.querySelectorAll("nav a");
    
    navLinks.forEach(link => {
        if (link.getAttribute("href") === currentPath) {
            link.style.fontWeight = "bold";
            link.style.textDecoration = "underline";
        }
    });

});
