const slides = document.querySelectorAll('.slide');
const auto = false; // Auto scroll
const intervalTime = 5000;
let slideInterval;

const nextSlide = () => {
    const current = document.querySelector('.current');

    current.classList.remove('current');

    if (current.nextElementSibling) {
        current.nextElementSibling.classList.add('current');
    } else {
        slides[0].classList.add('current');
    }


}

const prevSlide = () => {

    const current = document.querySelector('.current');


    current.classList.remove('current');

    if (current.previousElementSibling) {
        current.previousElementSibling.classList.add('current');
    } else {
        slides[slides.length - 1].classList.add('current');
    }

};

document.addEventListener('keydown', function (e) {
    switch (e.key) {
        case 'ArrowLeft':
            prevSlide();
            if (auto) {
                clearInterval(slideInterval);
                slideInterval = setInterval(nextSlide, intervalTime);
            }
            break;
        case 'ArrowRight':
            nextSlide()
            if (auto) {
                clearInterval(slideInterval);
                slideInterval = setInterval(nextSlide, intervalTime);
            }
            break;
    }
});
