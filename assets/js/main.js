//Menu burger
const burgerIcon = document.querySelector(".header__burger-icon");
if (burgerIcon) {
  burgerIcon.addEventListener("click", function (e) {
    document.body.classList.toggle("active__burger");
  });
}

//add swiper if items more than 6
const partnersParent = document.querySelector(".first_screen__partners");
if (partnersParent) {
  const siblings = partners_image.arr;

  if (siblings.length < 6) {
    partnersParent.insertAdjacentHTML("beforeend", doSingleImage(siblings));
  }

  if (siblings.length > 6) {
    let swiperHTML = `
    <div class='first_screen__partners_swiper'>
    <div class="swiper">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        ${doSingleSlides(siblings)}
      </div>
      <!-- If we need pagination -->
      <div class="swiper-pagination"></div>
    </div>
    </div>
    `;

    partnersParent.insertAdjacentHTML("afterend", swiperHTML);
    partnersParent.remove();
  }
}
function doSingleSlides(param) {
  return param.map((el) => `<div class="swiper-slide"><img src='${el}' alt='slide image' class='swiper_slide_image' /></div>`).join("");
}

function doSingleImage(param) {
  return param.map((el) => `<img class='partner_logo' src='${el}' alt='partner logo'  />`).join("");
}

const swiper = new Swiper(".swiper", {
  // Optional parameters
  slidesPerView: 6,
  spaceBetween: 10,
  // loop: true,
  grabCursor: true,
  autoplay: {
    delay: 1500,
    disableOnInteraction: false,
  },

  // If we need pagination
  pagination: {
    el: ".swiper-pagination",
  },
  // And if we need scrollbar
  scrollbar: {
    el: ".swiper-scrollbar",
  },
});
