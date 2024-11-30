const showPopupBtn = document.querySelector(".login-btn");
const hidePopupBtn = document.querySelector(".popup .close");

showPopupBtn.addEventListener("click", () => {
        document.body.classList.toggle("show-popup");
});

hidePopupBtn.addEventListener("click", () =>{
    document.body.classList.toggle("show-popup");
});
