<br>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="<?php echo img_url('img1.jpg') ?>" style="width:80%">
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="<?php echo img_url('img2.jpg') ?>" style="width:80%">
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="<?php echo img_url('img3.jpg') ?>" style="width:80%">
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>


<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000);
}
</script>