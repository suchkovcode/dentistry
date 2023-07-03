// @ts-nocheck
/* eslint-disable no-unused-expressions */

import Swiper, { Navigation, Autoplay } from "swiper";

window.addEventListener("DOMContentLoaded", () => {
   const cardMoreTogge = async () => {
      const btnToggle = document.querySelectorAll(".price__card-btn");
      const moreContent = document.querySelectorAll(".price__card");

      btnToggle.forEach((element) => {
         element.addEventListener("click", (event) => {
            const { index, open, close } = event.currentTarget.dataset;
            moreContent[index].classList.toggle("active");
            moreContent[index].classList.contains("active")
               ? (element.textContent = close) : (element.textContent = open);
         });
      });
   };
   cardMoreTogge();

   const faqToggle = () => {
      const faqItem = document.querySelectorAll(".faq__item");

      faqItem[0].classList.add("active");
      faqItem[0].open = true;

      faqItem.forEach((element) => {
         element.addEventListener("click", (event) => {
            const { index } = event.currentTarget.dataset;

            if (event.target.classList.contains("faq__title")) {
               faqItem.forEach((element) => {
                  element.classList.remove("active");
                  element.open = false;
               });
               faqItem[index].classList.toggle("active");
            }
         });
      });
   };
   faqToggle();

   const swiper = new Swiper(".swiper", {
      modules: [Navigation, Autoplay],
      speed: 500,
      grabCursor: true,

      autoplay: {
         delay: 5000,
      },
      navigation: {
         nextEl: ".swiper-button-next",
         prevEl: ".swiper-button-prev",
      },

      breakpoints: {
         320: {
            slidesPerView: 1,
            spaceBetween: 30,
         },

         768: {
            slidesPerView: 2,
            spaceBetween: 30,
         },

         1200: {
            slidesPerView: 3,
            spaceBetween: 30,
         },
      },
   });
});
