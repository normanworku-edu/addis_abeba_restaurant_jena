<?php
$dir = "images/background";
$sliding_background_html_content = "<div class=\"slideshow-container\">";
$counter = 0;

if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
			if (is_dir($file)){
				// echo "folder name : .".$file."<br />";
			}
			else{
				$counter = $counter + 1;
				//echo "file name : ".$file."<br />";
$sliding_background_html_content .=				
				 "<div class=\"mySlides\" ontouchstart=\"onTouchStartSlidingBackground(event)\" ontouchend=\"onTouchEndSlidingBackground(event)\" >
					<!-- <div class=\"numbertext\">".$counter."</div> -->
					<img id=\"sliding_background_image\"    src=\"images/background/".$file."\" style=\"width:100%\">
					<div class=\"text\"> </div>
				</div>";

			}
        }
        closedir($dh);
    }
}
$sliding_background_html_content .=	
"<a class=\"prev\" onclick=\"plusSlides(-1)\">&#10094;</a>
<a class=\"next\" onclick=\"plusSlides(1)\">&#10095;</a>
</div>
<br>
<div style=\"text-align:center\">";

  for($i = 1; $i <= $counter; $i++) {
      $sliding_background_html_content .=	"<span class=\"dot\" onclick=\"currentSlide(".$i.")\"></span> ";
  }
$sliding_background_html_content .=	
"</div>
<script>
var slideIndex = 1;
var TOUCH_START_X = 0;
var TOUCH_START_Y = 0;
var TOUCH_END_X = 0;
var TOUCH_END_Y = 0;
var INCREMENT = 1;

showSlides(slideIndex);	
setInterval(nextSlide,600000);

function onTouchStartSlidingBackground(event){
  TOUCH_START_X = event.changedTouches[0].pageX;
  TOUCH_START_Y = event.changedTouches[0].pageY;
}
	 
function onTouchEndSlidingBackground(event){
	TOUCH_END_X = event.changedTouches[0].pageX;
    TOUCH_END_Y = event.changedTouches[0].pageY;
  
	  if (TOUCH_END_X > TOUCH_START_X){
	  INCREMENT = 1;
	  plusSlides(INCREMENT);
  }
  else if (TOUCH_END_X < TOUCH_START_X){
	  INCREMENT = -1;
	  plusSlides(INCREMENT);
  }
  else{
  }
  
 TOUCH_START_X = 0;
 TOUCH_START_Y = 0;
 TOUCH_END_X = 0;
 TOUCH_END_Y = 0;
}	 
		
function nextSlide() {
 plusSlides(INCREMENT);
}
	
function plusSlides(n) {
 INCREMENT = n;
 showSlides(slideIndex += INCREMENT);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName(\"mySlides\");
  var dots = document.getElementsByClassName(\"dot\");
  if (n > slides.length) {slideIndex = 1}   
  if (n < 1) {slideIndex = slides.length}
  
    slides[slideIndex-1].style.display = \"block\";  
  dots[slideIndex-1].className += \" active\";
  
  for (i = 0; i < slides.length; i++) {
	  if (i!=slideIndex-1){
      slides[i].style.display = \"none\";
	  }
 }
  for(i = 0; i < dots.length; i++) {
	  if (i!=slideIndex-1){
      dots[i].className = dots[i].className.replace(\" active\", \"\");
	  }
  }
  

}
</script>";

echo $sliding_background_html_content;
?>