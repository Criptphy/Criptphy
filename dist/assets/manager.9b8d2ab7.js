import"./style.329fa817.js";function d(){document.querySelector(".button__add").addEventListener("click",()=>{const e=document.querySelector("#container1");e.classList.remove("modal__container--disabled"),e.classList.add("modal__container--enabled");const o=document.querySelector("#popupsm1");o.classList.remove("modal__popupsm--disabled"),o.classList.add("modal__popupsm--enabled")}),document.querySelector(".edit-senha").addEventListener("click",()=>{const e=document.querySelector("#container2");e.classList.remove("modal__container--disabled"),e.classList.add("modal__container--enabled");const o=document.querySelector("#popupsm2");o.classList.remove("modal__popupsm--disabled"),o.classList.add("modal__popupsm--enabled")});const a=document.querySelectorAll(".ri-close-line");for(let e=0;e<a.length;e++)a[e].addEventListener("click",()=>{const o=document.querySelectorAll(".modal__container")[e];o.classList.remove("modal__container--enabled"),o.classList.add("modal__container--disabled");const l=document.querySelectorAll(".modal__popup")[e];l.classList.remove("modal__popup--enabled"),l.classList.add("modal__popup--disabled")});const t=document.querySelectorAll(".copy"),n=document.querySelectorAll(".value");for(let e=0;e<t.length;e++)t[e].addEventListener("click",()=>{navigator.clipboard.writeText(n[e].defaultValue)})}d();
