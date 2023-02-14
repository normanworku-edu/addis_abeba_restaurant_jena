<?php
$dir = "images/background";
$sliding_background_html_content = "";

if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
			if (is_dir($file)){
				// echo "folder name : .".$file."<br />";
			}
			else{
				//echo "file name : ".$file."<br />";
				$sliding_background_html_content .=
				 "<img class=\"mySlides\" src=\"images/background/".$file."\"  style=\"width:100%\" >";
			}
        }
        closedir($dh);
    }
}

echo $sliding_background_html_content;
?>