"use strict";
//navbar variables
const nav = document.querySelector(".mobile-nav");
const navMenuBtn = document.querySelector(".nav-menu-btn");
const navCloseBtn = document.querySelector(".nav-close-btn");
//toggle navbar
const toggleNav = function (){ nav.classList.toggle("active");}
navMenuBtn.addEventListener("click", toggleNav);
navCloseBtn.addEventListener("click", toggleNav);

//theme toggle variables
const themeBtn = document.querySelectorAll(".theme-btn");
themeBtn.forEach((btn) =>{
    btn.addEventListener("click", () =>{
        document.body.classList.toggle("dark-theme");
        document.body.classList.toggle("light-theme");

        themeBtn.forEach((button) =>{
            button.classList.toggle("light");
            button.classList.toggle("dark");
        });
    })

    });
const viewportWidth = window.innerWidth;
console.log(`Viewport width: ${viewportWidth}px`);
document.querySelector(".btn-load-more").innerHTML = `Load More (${viewportWidth}px)`;
