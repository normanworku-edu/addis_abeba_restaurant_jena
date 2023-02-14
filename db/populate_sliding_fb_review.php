<?php
$sliding_fb_review_html_content = "<div class=\"slideshow-container\">";

$fb_review_frames[0] = 	"<iframe src=\"https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fnormgirm%2Fposts%2F10212113400886595%3A0&width=100%\" width=\"100%\" height=\"371\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allow=\"encrypted-media\"></iframe>";
$fb_review_frames[1] = 	"<iframe src=\"https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fjorg.remde%2Fposts%2F2136103729995133%3A0&width=100%\" width=\"100%\" height=\"428\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allow=\"encrypted-media\"></iframe>";
$fb_review_frames[2] = 	"<iframe src=\"https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Ffranz.burgold%2Fposts%2F2094583744087130%3A0&width=100%\" width=\"100%\" height=\"390\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allow=\"encrypted-media\"></iframe>";
$fb_review_frames[3] = 	"<iframe src=\"https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Ffelix.krautkrautkraut%2Fposts%2F1978966708820625%3A0&width=100%\" width=\"100%\" height=\"371\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allow=\"encrypted-media\"></iframe>";
$fb_review_frames[4] = 	"<iframe src=\"https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fsandy.remde%2Fposts%2F1814131515348934%3A0&width=100%\" width=\"100%\" height=\"371\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allow=\"encrypted-media\"></iframe>";
$fb_review_frames[5] = 	"<iframe src=\"https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fclemens.wanderer%2Fposts%2F981828048661991%3A0&width=100%\" width=\"100%\" height=\"371\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allow=\"encrypted-media\"></iframe>";
$fb_review_frames[6] = 	"<iframe src=\"https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fpermalink.php%3Fstory_fbid%3D749086088781844%26id%3D100010413791889&width=100%\" width=\"100%\" height=\"275\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allow=\"encrypted-media\"></iframe>";
$fb_review_frames[7] = 	"<iframe src=\"https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fheide.wenzel.5%2Fposts%2F2061138757262731&width=100%\" width=\"100%\" height=\"244\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allow=\"encrypted-media\"></iframe>";
$fb_review_frames[8] = 	"<iframe src=\"https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Ftina.lebeschoen%2Fposts%2F10217363258258495%3A0&width=100%\" width=\"100%\" height=\"390\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allow=\"encrypted-media\"></iframe>";
$fb_review_frames[9] = 	"<iframe src=\"https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FSHoelzel.1996%2Fposts%2F2121326814598585&width=100%\" width=\"100%\" height=\"773\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allow=\"encrypted-media\"></iframe>";
$counter = 10;

  for($i = 0; $i < $counter; $i++) {
      $sliding_fb_review_html_content .=	
	  "<div class=\"mySlides_fb_review fade\">".
		  $fb_review_frames[$i].
	  "</div>";
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
"var slideIndex_fb_review = 1;".
"showSlides_fb_review(slideIndex_fb_review);".
"carousel_fb_review();".
            
"function carousel_fb_review() {".
	"plusSlides_fb_review(1);".
	"setTimeout(carousel_fb_review, 3000); ".
"}".
			
"function plusSlides_fb_review(n) {".
  "showSlides_fb_review(slideIndex_fb_review += n);".
"}".

"function currentSlide_fb_review(n) {".
  "showSlides_fb_review(slideIndex_fb_review = n);".
"}".

"function showSlides_fb_review(n) {".
  "var i;".
  "var slides = document.getElementsByClassName(\"mySlides_fb_review\");".
  "var dot_fb_reviews = document.getElementsByClassName(\"dot_fb_review\");".
  "if (n > slides.length) {slideIndex_fb_review = 1}  ".  
  "if (n < 1) {slideIndex_fb_review = slides.length}".
  "for (i = 0; i < slides.length; i++) {".
      "slides[i].style.display = \"none\";".
 "}". 
  "for(i = 0; i < dot_fb_reviews.length; i++) {".
      "dot_fb_reviews[i].className = dot_fb_reviews[i].className.replace(\" active\", \"\");".
  "}".
  "slides[slideIndex_fb_review-1].style.display = \"block\";  ".
  "dot_fb_reviews[slideIndex_fb_review-1].className += \" active\";".
"}".
"</script>";

echo $sliding_fb_review_html_content;
?>