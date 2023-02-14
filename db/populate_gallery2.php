<?php
$dir = "images/gallery";
for($s = 0; $s<50; $s++){
	$this_gallery_html_contnet[$s] = "";
	$this_gallery_name[$s] = "My Gallery";
}
$n_gallery = 0;
$ng = 0;
if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
			if (is_dir($file) && !strcmp($file, "..") && !strcmp($file, "...")){
				echo "folder name : .".$file."<br />";
				$ng = $ng + 1;
				$dir = "images/gallery/".$file;
				$this_gallery_html_contnet[$ng] = "";
				if (is_dir($dir)) {
					if ($dh1 = opendir($dir)) {
						while (($file = readdir($dh1)) !== false) {
							if (is_dir($file)){
								// echo "folder name : .".$file."<br />";
								
							}
							else{
								//echo "file name : ".$file."<br />";
								$this_gallery_html_contnet[$ng] .=
										  "<div class=\"col-md-4 site-animate\">".
							"<a href=\"images/gallery/".$file."\" class=\"site-thumbnail image-popup\">".
							 "<img src=\"images/gallery/".$file."\" alt=\"Addis Abeba Restaurant Jena\" class=\"img-fluid\">".
							"</a>".
						  "</div>";
							}
						}
						closedir($dh1);
					}
				}
			}
			else{
				//echo "file name : ".$file."<br />";
				$this_gallery_html_contnet[0] .=
				          "<div class=\"col-md-4 site-animate\">".
            "<a href=\"images/gallery/".$file."\" class=\"site-thumbnail image-popup\">".
             "<img src=\"images/gallery/".$file."\" alt=\"Addis Abeba Restaurant Jena\" class=\"img-fluid\">".
            "</a>".
          "</div>";
			}
        }
        closedir($dh);
    }
}




$xml=simplexml_load_file("db/news.xml") or die("Error: Cannot create object");
$gallery_html_content = "";
$fully_displayed_gallery_id = "display_frame_gallery";

for($p = 0; $p<=$ng; $p++){
	$this_gallery_title = $this_gallery_name[$p];
	$this_gallery_author = "Unkown";
	$this_gallery_date = "01.01.2000";

	$this_gallery_short_text = "ShortText";
	$this_gallery_long_text = "LongText";

	$show_this_gallery_id = "read_more_gallery_".$p;
	$this_gallery_id = "gallery_".$p;
	$this_gallery_long_id = "long_gallery_".$p;
	$this_gallery_short_id = "short_gallery_".$p;
	
	$this_gallery_display_frame_id = "display_frame_gallery_".$p;

	$this_gallery_display_fun_name = "display_gallery_".$p;
$empty_gallery_display_frame_id = "empty_frame_gallery";
	
	$gallery_html_content .= "<div id=\"".$this_gallery_display_frame_id ."\" style =\"display:none;\">".$this_gallery_html_contnet[$p]. "</div>";
	$gallery_html_content .= "<div id=\"".$empty_gallery_display_frame_id ."\" style =\"display:none;\">"."aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa". "</div>";

	
	$gallery_html_content .= 
	"<div class=\"col-lg-3 col-md-4 col-sm-6\">"
	. "<div class=\"media d-block mb-4 text-center site-media site-animate\">"
	. "<img src=\"images/menu/offer_3.jpg\" alt=\"Addis Abeba Restaurant Jena\" class=\"img-fluid\">"
	. "<div class=\"media-body p-md-5 p-4\">"
	. "<h5 class=\"mt-0 h4\">" . $this_gallery_title . "</h5>"
	. "<p>Date: ". $this_gallery_author . " By:  ".$this_gallery_date. "</p>"

	. "<p class=\"mb-4\" id=\"".$this_gallery_short_id ."\" style =\"display:none\">".$this_gallery_short_text. "</p>"
	. "<p class=\"mb-4\" id=\"".$this_gallery_long_id ."\" style =\"display:none\">".$this_gallery_long_text. "</p>"
	. "<p class=\"mb-4\" id=\"".$this_gallery_id."\">".$this_gallery_short_text."</p>"
	. "<p class=\"mb-0\">"
	. "<a style=\"color:white; font-size:14px\" class=\"btn btn-primary btn-sm\" id=\"".$show_this_gallery_id. "\""
	. "onclick=\"function " .$this_gallery_display_fun_name. "(){"
		. "if(document.getElementById('".$show_this_gallery_id."').innerHTML=='View'){"
			. "document.getElementById('".$fully_displayed_gallery_id ."').display = block; "
			. "document.getElementById('".$this_gallery_id."').innerHTML = document.getElementById('".$this_gallery_long_id ."').innerHTML; "
			. "document.getElementById('".$show_this_gallery_id."').innerHTML = 'Hide';"
			
		. "}"
		. "else{"
			. "document.getElementById('".$fully_displayed_gallery_id ."').display = none; "
			. "document.getElementById('".$this_gallery_id."').innerHTML = document.getElementById('".$this_gallery_short_id ."').innerHTML ; "
			. "document.getElementById('".$show_this_gallery_id."').innerHTML = 'View';"
		. "}"
	. "}; ". $this_gallery_display_fun_name ."()\" >View</a> </p>"
	. "</div>"
	. "</div>"
	. "</div>";
}


$gallery_html_content .= "<br>" . "<div id=\"". $fully_displayed_gallery_id ."\">".$this_gallery_html_contnet[0]."</div>";

echo $gallery_html_content;
?>