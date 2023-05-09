const hamburger=document.querySelector('.hamburger');
const vavMenu=document.querySelector('.nav-menu');

hamburger.addEventListener("click",() =>{
    hamburger.classList.toggle("active");
    vavMenu.classList.toggle("active");
})

document.querySelectorAll(".nav-link").forEach(n=>n.addEventListener("click",()=>{
    hamburger.classList.remove("active");
    vavMenu.classList.remove("active");
}))
