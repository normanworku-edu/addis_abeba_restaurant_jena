<?php
$about_us_html_content = "";

$about_us_long_text = "In Addis Abeba Restaurant we serve delicious traditional Ethiopian dishes in very traditional way. You can also drink original Ethiopian coffee with small traditional coffee ceremony.";
$about_us_short_text = "In Addis Abeba Restaurant we serve delicious traditional Ethiopian dishes ...";
$about_us_image = "images/about_img.jpg";

$about_us_html_content .= 
"<div class=\"col-md-5 site-animate mb-5\">"
	."<h4 class=\"site-sub-title\">Our Story</h4>"
	. "<h2 class=\"site-primary-title display-4\">Welcome</h2>"
	. "<p class=\"mb-4\" id=\"about_us_short\" style =\"display:none\">". $about_us_short_text. "</p>"
	. "<p class=\"mb-4\" id=\"about_us_long\" style =\"display:none\">". $about_us_long_text. "</p>"
	. "<p class=\"mb-4\" id=\"about_us\">".$about_us_short_text."</p>"
	. "<p class=\"mb-0\">"
	. "<a style=\"color:white; font-size:14px\" class=\"btn btn-primary btn-sm\" id=\"read_more_about_us\""
	. "onclick=\"function display_me(){"
		. "if(document.getElementById('read_more_about_us').innerHTML=='Read More'){"
			. "document.getElementById('about_us').innerHTML = document.getElementById('about_us_long').innerHTML ; "
			. "document.getElementById('read_more_about_us').innerHTML = 'Read Less';"
		. "}"
		. "else{"
			. "document.getElementById('about_us').innerHTML = document.getElementById('about_us_short').innerHTML ; "
			. "document.getElementById('read_more_about_us').innerHTML = 'Read More';"
		. "}"
	. "}; display_me()\" >Read More</a> </p>"
. "</div>"
. "<div class=\"col-md-1\"></div>"
. "<div class=\"col-md-6 site-animate img\" data-animate-effect=\"fadeInRight\">"
	. "<img src=".$about_us_image." alt=\"Addis Abeba Restaurant Jena\" class=\"img-fluid\" style=\"max-width:\"75%\">"
. "</div>";
echo $about_us_html_content;
?>