<?php
//$xml=simplexml_load_file("db/menu.xml") or die("Error: Cannot create object");
$xml=simplexml_load_file("db/menu_food_drinks.xml") or die("Error: Cannot create object");

$menu_html_contnet = "";
$n_items_this_sub_cat = 0;
$this_sub_category = 0; 
$this_item = 0; 
$n_this_item_prop = 0; 
$this_main_category = 0; 
$n_sub_category = 0; 
$main_menu_children = 0;
$p = 0;
foreach($xml->children() as $main_category) { // Lunch, Dinner, Drink
	$p = $p + 1;
	$n_main_category  = $main_category->count();
	if ($p == 1) {
	 //$menu_html_contnet .= "<div class=\"tab-pane fade\" id=\"pills-lunch\" role=\"tabpanel\" aria-labelledby=\"pills-lunch-tab\">" ;
	 continue;
	} elseif ($p == 2) {
	$menu_html_contnet .= 
	"<div class=\"tab-pane fade show active\" id=\"pills-dinner\" role=\"tabpanel\" aria-labelledby=\"pills-dinner-tab\">" ;
	} else {
	$menu_html_contnet .= "<div class=\"tab-pane fade\" id=\"pills-drinks\" role=\"tabpanel\" aria-labelledby=\"pills-drinks-tab\">" ;
	//continue;	
	}
	foreach($main_category->children() as $this_sub_category) {  // Vegitarian, Non_Vegitarian
		$menu_html_contnet .= 
			"<div> <h4 font-weight =\"bold\">" . $this_sub_category . "</h4>
				<hr>
				<div class=\"row\">";
		$n_items_this_sub_cat  = $this_sub_category->count();
		
				// First coulmn
					$menu_html_contnet .= 
					"<div class=\"col-md-1 site-animate\"> </div>
					<div class=\"col-md-5 site-animate\">";
						for ($j = 0; $j < intval(ceil($n_items_this_sub_cat/2)); $j++) { // j: Item
							$this_item = $this_sub_category->children()[$j];
							$thisItemIndex = $j + 1;

							$n_this_item_prop = $this_item->count();
							
							$this_description_short_text = $this_item->Description ;
							$this_description_long_text =  $this_item->LongDescription;
							$string = preg_replace('/\s+/', '', $main_category);			
							$menu_item_identifier_suffix = preg_replace('/\s+/', '', $main_category).'_'.preg_replace('/\s+/', '', $this_sub_category).'_'.preg_replace('/\s+/', '', $thisItemIndex);				
							$read_more_description_id = "read_more_description_".$menu_item_identifier_suffix;
							$this_description_id = "description_".$menu_item_identifier_suffix;
							$this_description_long_id = "long_description_".$menu_item_identifier_suffix;
							$this_description_short_id = "short_description_".$menu_item_identifier_suffix;
							$this_description_display_fun_name = "display_description_".$menu_item_identifier_suffix;

							
							$menu_html_contnet .=   
							"<div class=\"media menu-item\">
								<img class=\"mr-3\" src=\"images/menu/". trim($this_item->Image). "\" class=\"img-fluid\" alt=\"images/".$this_item->Image."\"> 
								<div class=\"media-body\"> 
									<h5 class=\"mt-0\">" . $this_item->Name  . "</h5>
									<p class=\"mb-0\" id=\"".$this_description_short_id ."\" style =\"display:none !important;\">".$this_description_short_text. "</p>
									<p class=\"mb-0\" id=\"".$this_description_long_id ."\" style =\"display:none !important;\">".$this_description_long_text. "</p>
									<p class=\"mb-0\" id=\"".$this_description_id."\">".$this_description_short_text."</p>

									<p class=\"mb-0\">
									<a style=\"color:white; font-size:14px\" class=\"btn btn-primary btn-sm\" id=\"".$read_more_description_id. "\"
									onclick=\"function " .$this_description_display_fun_name. "(){
										if(document.getElementById('".$read_more_description_id."').innerHTML=='Weiterlesen'){
											document.getElementById('".$this_description_id."').innerHTML =  document.getElementById('".$this_description_long_id ."').innerHTML ; 
											document.getElementById('".$read_more_description_id."').innerHTML = 'Lese weniger';
										}
										else{
											document.getElementById('".$this_description_id."').innerHTML = document.getElementById('".$this_description_short_id ."').innerHTML ; 
											document.getElementById('".$read_more_description_id."').innerHTML = 'Weiterlesen';
										}
									}; ". $this_description_display_fun_name ."()\" >Weiterlesen</a> </p>

									<h6 class=\"text-primary menu-price\">" . $this_item->Price .  "</h6> 
								</div>
							</div>";
						}
					$menu_html_contnet .=  
					"</div>";
					
					// Second coulmn
					$menu_html_contnet .= 
					"<div class=\"col-md-5 site-animate\">";
						for ($j = intval(ceil($n_items_this_sub_cat/2)); $j < intval(ceil($n_items_this_sub_cat)); $j++) { // j: Item
							$this_item = $this_sub_category->children()[$j];
							$thisItemIndex = $j + 1;

							$n_this_item_prop = $this_item->count();
							
							$this_description_short_text = $this_item->Description;
							$this_description_long_text = $this_item->LongDescription;
							$string = preg_replace('/\s+/', '', $main_category);			
							$menu_item_identifier_suffix = preg_replace('/\s+/', '', $main_category).'_'.preg_replace('/\s+/', '', $this_sub_category).'_'.preg_replace('/\s+/', '', $thisItemIndex);				
							$read_more_description_id = "read_more_description_".$menu_item_identifier_suffix;
							$this_description_id = "description_".$menu_item_identifier_suffix;
							$this_description_long_id = "long_description_".$menu_item_identifier_suffix;
							$this_description_short_id = "short_description_".$menu_item_identifier_suffix;
							$this_description_display_fun_name = "display_description_".$menu_item_identifier_suffix;

							
							$menu_html_contnet .=   
							"<div class=\"media menu-item\">
								<img class=\"mr-3\" src=\"images/menu/" . trim($this_item->Image). "\" class=\"img-fluid\" alt=\"images/".trim($this_item->Image)."\">
								<div class=\"media-body\">
									<h5 class=\"mt-0\">" . $this_item->Name  . "</h5>

									<p class=\"mb-0\" id=\"".$this_description_short_id ."\" style =\"display:none\">".$this_description_short_text. "</p>
									<p class=\"mb-0\" id=\"".$this_description_long_id ."\" style =\"display:none\">".$this_description_long_text. "</p>
									<p class=\"mb-0\" id=\"".$this_description_id."\">".$this_description_short_text."</p>

									<p class=\"mb-0\">
									<a style=\"color:white; font-size:14px\" class=\"btn btn-primary btn-sm\" id=\"".$read_more_description_id. "\"
									onclick=\"function " .$this_description_display_fun_name. "(){
										if(document.getElementById('".$read_more_description_id."').innerHTML=='Weiterlesen'){
											document.getElementById('".$this_description_id."').innerHTML = document.getElementById('".$this_description_long_id ."').innerHTML ; 
											document.getElementById('".$read_more_description_id."').innerHTML = 'Lese weniger';
										}
										else{
											document.getElementById('".$this_description_id."').innerHTML = document.getElementById('".$this_description_short_id ."').innerHTML ; 
											document.getElementById('".$read_more_description_id."').innerHTML = 'Weiterlesen';
										}
									}; ". $this_description_display_fun_name ."()\" >Weiterlesen</a> </p>


									<h6 class=\"text-primary menu-price\">" . $this_item->Price .  "</h6>
								</div>
							</div>";
						}
					$menu_html_contnet .=  
					"</div>";
	
			$menu_html_contnet .=  
				"</div>"; // End of "<div class=\"row\">\n";
			$menu_html_contnet .=  
			"</div>"; // End of "<div> " . this_sub_category.tagName  . "\n" . 
	}
	
	$menu_html_contnet .=  
	"</div>"; // End of "<div class=\"tab-pane fade\" id=\"pills-lunch\  
} 
echo $menu_html_contnet;
?>