/* =====================================
   CoreX-Docs Custom JavaScript
   ===================================== */

// Show flash messages for a few seconds before fading out
document.addEventListener("DOMContentLoaded", function () {
    let flashMessages = document.querySelectorAll(".alert");
    flashMessages.forEach(function (msg) {
        setTimeout(function () {
            msg.style.transition = "opacity 0.5s";
            msg.style.opacity = "0";
            setTimeout(function () {
                msg.style.display = "none";
            }, 500);
        }, 3000);
    });
});

// Confirm before deleting documentation
document.addEventListener("DOMContentLoaded", function () {
    let deleteButtons = document.querySelectorAll(".btn-danger");
    deleteButtons.forEach(function (button) {
        button.addEventListener("click", function (event) {
            if (!confirm("Are you sure you want to delete this documentation? This action cannot be undone.")) {
                event.preventDefault();
            }
        });
    });
});

// Auto-generate slug from title input
document.addEventListener("DOMContentLoaded", function () {
    let titleInput = document.getElementById("title");
    let slugInput = document.getElementById("slug");

    if (titleInput && slugInput) {
        titleInput.addEventListener("input", function () {
            let slug = titleInput.value
                .toLowerCase()
                .trim()
                .replace(/ /g, "-")
                .replace(/[^a-z0-9\-]/g, "");

            slugInput.value = slug;
        });
    }
});

// Responsive Navbar Toggle
document.addEventListener("DOMContentLoaded", function () {
    let navToggle = document.querySelector(".navbar-toggler");
    let navMenu = document.querySelector(".navbar-collapse");

    if (navToggle && navMenu) {
        navToggle.addEventListener("click", function () {
            navMenu.classList.toggle("show");
        });
    }
});

// Smooth Scroll to Anchor Links
document.addEventListener("DOMContentLoaded", function () {
    let anchorLinks = document.querySelectorAll('a[href^="#"]');

    anchorLinks.forEach(function (link) {
        link.addEventListener("click", function (event) {
            event.preventDefault();
            let targetId = link.getAttribute("href").substring(1);
            let targetElement = document.getElementById(targetId);

            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 60,
                    behavior: "smooth"
                });
            }
        });
    });
});

// Copy to Clipboard Functionality (For API Keys or Code Blocks)
document.addEventListener("DOMContentLoaded", function () {
    let copyButtons = document.querySelectorAll(".copy-btn");

    copyButtons.forEach(function (button) {
        button.addEventListener("click", function () {
            let targetId = button.getAttribute("data-target");
            let targetElement = document.getElementById(targetId);

            if (targetElement) {
                navigator.clipboard.writeText(targetElement.textContent).then(function () {
                    button.innerText = "Copied!";
                    setTimeout(() => button.innerText = "Copy", 2000);
                }).catch(err => console.error("Error copying text: ", err));
            }
        });
    });
});

// Dark Mode Toggle
document.addEventListener("DOMContentLoaded", function () {
    let darkModeToggle = document.getElementById("dark-mode-toggle");
    if (darkModeToggle) {
        darkModeToggle.addEventListener("click", function () {
            document.body.classList.toggle("dark-mode");
            localStorage.setItem("darkMode", document.body.classList.contains("dark-mode"));
        });

        if (localStorage.getItem("darkMode") === "true") {
            document.body.classList.add("dark-mode");
        }
    }
});
