import"./style.ca29ffd0.js";function d(){document.querySelector(".button__add").addEventListener("click",()=>{const e=document.querySelector("#container1");e.classList.remove("modal__container--disabled"),e.classList.add("modal__container--enabled");const o=document.querySelector("#popupsm1");o.classList.remove("modal__popupsm--disabled"),o.classList.add("modal__popupsm--enabled")}),document.querySelector(".edit-senha").addEventListener("click",()=>{const e=document.querySelector("#container2");e.classList.remove("modal__container--disabled"),e.classList.add("modal__container--enabled");const o=document.querySelector("#popupsm2");o.classList.remove("modal__popupsm--disabled"),o.classList.add("modal__popupsm--enabled")});const t=document.querySelectorAll(".ri-close-line");for(let e=0;e<t.length;e++)t[e].addEventListener("click",()=>{const o=document.querySelectorAll(".modal__container")[e];o.classList.remove("modal__container--enabled"),o.classList.add("modal__container--disabled");const n=document.querySelectorAll(".modal__popup")[e];n.classList.remove("modal__popup--enabled"),n.classList.add("modal__popup--disabled")});const a=document.querySelectorAll(".copy"),l=document.querySelectorAll(".value");for(let e=0;e<a.length;e++)a[e].addEventListener("click",()=>{navigator.clipboard.writeText(l[e].innerText)})}d();