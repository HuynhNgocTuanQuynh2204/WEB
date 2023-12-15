let slides = document.querySelectorAll(".myslides");
let dots = document.querySelectorAll(".dot-show");
const pre = document.querySelector(".prev-show");
const next = document.querySelector(".next-show");
let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

pre.onclick = () => plusSlides(-1);
next.onclick = () => plusSlides(1);

function showSlides(n) {
  let i;
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].classList.remove("active-slide");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].classList.add ("active-slide");
}
