<?php

$dir = "images/review";
$sliding_fb_review_html_content = "<div class=\"slideshow-container\">";
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
$sliding_fb_review_html_content .=				
				 "<div class=\"mySlides_fb_review fade\">".
					"<img href= \"https://www.facebook.com/addisabeba.restaurant.jena\" src=\"images/review/".$file."\" style=\"width:100%\">".
				"</div>";

			}
        }
        closedir($dh);
    }
}
"</div>".
"<br>".

"<div style=\"text-align:center\">";

  for($i = 1; $i <= $counter; $i++) {
      $sliding_fb_review_html_content .=	"<span class=\"dot_fb_review\" onclick=\"currentSlide_fb_review(".$i.")\"></span> ";
  }
$sliding_fb_review_html_content .=	
"</div>".
"<script>".
"var slideIndex = 1;".
"showSlides_fb_review(slideIndex);".
"carousel_fb_review();".
            
"function carousel_fb_review() {".
	"plusSlides_fb_review(1);".
	"setTimeout(carousel_fb_review, 3000); ".
"}".
			
"function plusSlides_fb_review(n) {".
  "showSlides_fb_review(slideIndex += n);".
"}".

"function currentSlide_fb_review(n) {".
  "showSlides_fb_review(slideIndex = n);".
"}".

"function showSlides_fb_review(n) {".
  "var i;".
  "var slides = document.getElementsByClassName(\"mySlides_fb_review\");".
  "var dot_fb_reviews = document.getElementsByClassName(\"dot_fb_review\");".
  "if (n > slides.length) {slideIndex = 1}  ".  
  "if (n < 1) {slideIndex = slides.length}".
  "for (i = 0; i < slides.length; i++) {".
      "slides[i].style.display = \"none\";".
 "}". 
  "for(i = 0; i < dot_fb_reviews.length; i++) {".
      "dot_fb_reviews[i].className = dot_fb_reviews[i].className.replace(\" active\", \"\");".
  "}".
  "slides[slideIndex-1].style.display = \"block\";  ".
  "dot_fb_reviews[slideIndex-1].className += \" active\";".
"}".
"</script>";

echo $sliding_fb_review_html_content;
?>