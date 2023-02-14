<?php
$dir = "images/gallery";
$gallery_html_contnet = "";

if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
			if (is_dir($file)){
				// echo "folder name : .".$file."<br />";
			}
			else{
				//echo "file name : ".$file."<br />";
				$gallery_html_contnet .=
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

echo $gallery_html_contnet;
?>