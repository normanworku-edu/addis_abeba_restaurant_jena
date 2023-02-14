<?php
$news_html_content_old = "";
$xml=simplexml_load_file("db/news.xml") or die("Error: Cannot create object");
$news_html_content = "";
$news_html_content .= "<iframe src=\"https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Faddisabeba.restaurant.jena%2Fposts%2F367527087127527&width=500\" width=\"500\" height=\"250\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allow=\"encrypted-media\"></iframe>";
$news_html_content .= "<iframe src=\"https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Faddisabeba.restaurant.jena%2Fposts%2F367099560503613&width=500\" width=\"500\" height=\"380\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allow=\"encrypted-media\"></iframe>";
$news_html_content .= "<iframe src=\"https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Faddisabeba.restaurant.jena%2Fposts%2F361297587750477&width=500\" width=\"500\" height=\"200\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allow=\"encrypted-media\"></iframe>";
$news_html_content .= "<iframe src=\"https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Faddisabeba.restaurant.jena%2Fposts%2F257716464775257&width=500\" width=\"500\" height=\"400\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allow=\"encrypted-media\"></iframe>";
$news_html_content .= "<iframe src=\"https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Faddisabeba.restaurant.jena%2Fvideos%2F257370444809859%2F&show_text=0&width=500\" width=\"500\" height=\"300\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allowFullScreen=\"true\"></iframe>";

echo $news_html_content;
?>
