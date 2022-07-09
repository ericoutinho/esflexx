const toggle = document.querySelector(".menu__toggle");
const collapse = document.querySelector(".menu__links");

toggle.addEventListener("click", ()=> {
    collapse.classList.toggle("js-active");
})


// Scroll reveal

const initial = {
    type: "fromtop",
    duration: "1s",
    delay: "0s"
}

let observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            let type = entry.target.dataset.animation || initial.type;
            let duration = entry.target.dataset.duration || initial.duration;
            let delay = entry.target.dataset.delay || initial.delay;
            let animation = `${type} ${duration} ease-in-out ${delay} forwards`;
            entry.target.style.animation = animation;
        }
    });
}, {threshold: 1, rootMargin:"0px 0px 100px 0px"})

document.querySelectorAll(".to-reveal").forEach( item => {
    observer.observe(item);
});


// Loader
window.addEventListener("load", ()=> {
    document.querySelector(".js-loader").style.display = "none";
    document.body.classList.remove("js-body-hidden");
})