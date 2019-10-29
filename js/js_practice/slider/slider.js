var slideIndex = 1;
showSlider(slideIndex);
function plusSlider(n){
    showSlider(slideIndex+=n)
}

function currentSlide(n){
    showSlider(slideIndex = n);
}

function showSlider(n){
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");

    if (n>slides.length){
        slideIndex = 1
    }
    if (n<1){
        slideIndex=slides.length
        }
        for (i=0; i < slides.length; i++){
            slides[i].style.display = "none";
        
        }
        for (i=0; i< DOMStringList.length; i++){
            dots[i].className = dots[i].className.replate("active", "")
        }

        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].style.display += "activer";
}