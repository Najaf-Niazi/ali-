const header = document.getElementById("header");
const menuBtn = document.getElementById("menuBtn");
const navLinks = document.getElementById("navLinks");

window.addEventListener("scroll", function () {
    if (window.scrollY > 40) {
        header.classList.add("scrolled");
    } else {
        header.classList.remove("scrolled");
    }
});

menuBtn.addEventListener("click", function () {
    navLinks.classList.toggle("show-menu");

    if (navLinks.classList.contains("show-menu")) {
        menuBtn.innerHTML = "✕";
    } else {
        menuBtn.innerHTML = "☰";
    }
});

const revealElements = document.querySelectorAll(
    ".reveal, .reveal-left, .reveal-right"
);

const revealObserver = new IntersectionObserver(
    function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add("show");
            }
        });
    },
    {
        threshold: 0.12
    }
);

revealElements.forEach(function (element) {
    revealObserver.observe(element);
});


const counters = document.querySelectorAll(".counter");

let counterStarted = false;

const counterSection = document.querySelector(".stats-section");

const counterObserver = new IntersectionObserver(
    function (entries) {

        if (entries[0].isIntersecting && !counterStarted) {

            counterStarted = true;

            counters.forEach(function (counter) {

                const target = Number(counter.dataset.target);

                let current = 0;

                const duration = 1000;

                const incrementTime = duration / target;

                const timer = setInterval(function () {

                    current++;

                    counter.innerText = current;

                    if (current >= target) {
                        clearInterval(timer);
                    }

                }, incrementTime);

            });

        }

    },
    {
        threshold: 0.4
    }
);

if (counterSection) {
    counterObserver.observe(counterSection);
}


document.querySelectorAll(".nav-links a").forEach(function (link) {

    link.addEventListener("click", function () {

        navLinks.classList.remove("show-menu");

        menuBtn.innerHTML = "☰";

    });

});


const floatingCards = document.querySelectorAll(".floating-card");

document.addEventListener("mousemove", function (event) {

    const x = (event.clientX / window.innerWidth - 0.5) * 8;
    const y = (event.clientY / window.innerHeight - 0.5) * 8;

    floatingCards.forEach(function (card) {

        card.style.marginLeft = x + "px";
        card.style.marginTop = y + "px";

    });

});

document.addEventListener("DOMContentLoaded", function () {

    const menuBtn = document.getElementById("menuBtn");
    const navLinks = document.getElementById("navLinks");

    if (menuBtn && navLinks) {
        menuBtn.addEventListener("click", function () {
            navLinks.classList.toggle("show-menu");
        });
    }


    const contactForm = document.getElementById("contactForm");
    const formStatus = document.getElementById("formStatus");

    if (!contactForm) {
        return;
    }


    contactForm.addEventListener("submit", function (event) {

        event.preventDefault();

        const nameInput = document.getElementById("name");
        const emailInput = document.getElementById("email");
        const phoneInput = document.getElementById("phone");
        const subjectInput = document.getElementById("subject");
        const serviceInput = document.getElementById("service");
        const messageInput = document.getElementById("message");

        const name = nameInput.value.trim();
        const email = emailInput.value.trim();
        const phone = phoneInput.value.trim();
        const subject = subjectInput.value.trim();
        const service = serviceInput.value;
        const message = messageInput.value.trim();

        const receiverEmail = "sirajniazi6565@gmail.com";


        if (
            name === "" ||
            email === "" ||
            subject === "" ||
            message === ""
        ) {
            formStatus.textContent =
                "Please fill all required fields.";

            formStatus.style.color = "#ff6b6b";

            return;
        }


        const emailSubject = encodeURIComponent(subject);

        const emailBody = encodeURIComponent(
            "Name: " + name +
            "\nEmail: " + email +
            "\nPhone: " + phone +
            "\nService: " + service +
            "\n\nMessage:\n" + message
        );


        formStatus.textContent = "Opening email...";
        formStatus.style.color = "#39c5ff";


        const mailLink =
            "mailto:" +
            receiverEmail +
            "?subject=" +
            emailSubject +
            "&body=" +
            emailBody;


        window.location.href = mailLink;

    });

});
