<?php
$news_html_content_old = "";
$xml=simplexml_load_file("db/news.xml") or die("Error: Cannot create object");
$news_html_content = "";
$news_html_content .= "<iframe src=\"https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Faddisabeba.restaurant.jena%2Fposts%2F367527087127527&width=500\" width=\"500\" height=\"211\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allow=\"encrypted-media\"></iframe>";
$news_html_content .= "<iframe src=\"https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Faddisabeba.restaurant.jena%2Fposts%2F367099560503613&width=500\" width=\"500\" height=\"429\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allow=\"encrypted-media\"></iframe>";
$news_html_content .= "<iframe src=\"https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Faddisabeba.restaurant.jena%2Fposts%2F361297587750477&width=500\" width=\"500\" height=\"173\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allow=\"encrypted-media\"></iframe>";
$news_html_content .= "<iframe src=\"https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Faddisabeba.restaurant.jena%2Fposts%2F257716464775257&width=500\" width=\"500\" height=\"429\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allow=\"encrypted-media\"></iframe>";
$news_html_content .= "<iframe src=\"https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Faddisabeba.restaurant.jena%2Fvideos%2F257370444809859%2F&show_text=0&width=560\" width=\"560\" height=\"286\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allowFullScreen=\"true\"></iframe>";

$n_news = 0;
$p = 0;
foreach($xml->children() as $this_news) { // Lunch, Dinner, Drink
$p = $p + 1;
$this_news_title = $this_news->Title;
$this_news_author = $this_news->Author;
$this_news_date = $this_news->Date;

$this_news_short_text = $this_news->ShortText;
$this_news_long_text = $this_news->LongText;

$this_news_image = "images/news/".$this_news->Image;

$read_more_news_id = "read_more_news_".$p;
$this_news_id = "news_".$p;
$this_news_long_id = "long_news_".$p;
$this_news_short_id = "short_news_".$p;

$this_news_display_fun_name = "display_news_".$p;

$news_html_content_old .= 
"<div class=\"col-lg-4 col-md-6 col-sm-6\">
<div class=\"media d-block mb-4 text-center site-media site-animate\">
<img src=". $this_news_image . " alt=\"Addis Abeba Restaurant Jena\" class=\"img-fluid\" width=\"40%\">
<div class=\"media-body p-md-5 p-4\">
<h5 class=\"mt-0 h4\">" . $this_news_title . "</h5>
<p>Date: ". $this_news_author . " By:  ".$this_news_date. "</p>

<p class=\"mb-4\" id=\"".$this_news_short_id ."\" style =\"display:none\">".$this_news_short_text. "</p>
<p class=\"mb-4\" id=\"".$this_news_long_id ."\" style =\"display:none\">".$this_news_long_text. "</p>
<p class=\"mb-4\" id=\"".$this_news_id."\">".$this_news_short_text."</p>
<p class=\"mb-0\">
<a style=\"color:white; font-size:14px\" class=\"btn btn-primary btn-sm\" id=\"".$read_more_news_id. "\"
onclick=\"function " .$this_news_display_fun_name. "(){
	if(document.getElementById('".$read_more_news_id."').innerHTML=='Read More'){
		document.getElementById('".$this_news_id."').innerHTML = document.getElementById('".$this_news_long_id ."').innerHTML ; 
		document.getElementById('".$read_more_news_id."').innerHTML = 'Read Less';
	}
	else{
		document.getElementById('".$this_news_id."').innerHTML = document.getElementById('".$this_news_short_id ."').innerHTML ; 
		document.getElementById('".$read_more_news_id."').innerHTML = 'Read More';
	}
}; ". $this_news_display_fun_name ."()\" >Read More</a> </p>
</div>
</div>
</div>";
}
echo $news_html_content;
?>
