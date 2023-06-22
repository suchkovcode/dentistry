// @ts-nocheck
/* eslint-disable no-unused-expressions */
window.addEventListener("DOMContentLoaded", () => {
   const cardMoreTogge = () => {
      const btnToggle = document.querySelectorAll(".price__card-btn");
      const moreContent = document.querySelectorAll(".price__card");

      moreContent[2].classList.add("active");

      btnToggle.forEach((element) => {
         element.addEventListener("click", (event) => {
            const { index, open, close } = event.currentTarget.dataset;
            moreContent[index].classList.toggle("active");
            moreContent[index].classList.contains("active")
               ? (element.textContent = close)
               : (element.textContent = open);
         });
      });
   };
   cardMoreTogge();
});
