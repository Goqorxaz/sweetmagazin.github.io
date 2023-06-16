let img = document.querySelector(".imgner");
let arrow = document.querySelector(".uu")
window.onscroll = function () {
    if(this.scrollY >=500) {
        arrow.style.transition = "1s"
        arrow.style.opacity = 1;

    }else{
        arrow.style.transition = "1s";
        arrow.style.opacity = 0;
    }
}

