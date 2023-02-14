<?php
$xml=simplexml_load_file("db/menu.xml") or die("Error: Cannot create object");
echo "<br><br>"; 
$menu_html_contnet = "";
echo $menu_html_contnet;
echo "<br>";

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
	$menu_html_contnet .= 
	"<div class=\"tab-pane fade show active\" id=\"pills-lunch\" role=\"tabpanel\" aria-labelledby=\"pills-lunch-tab\">" ;
	} elseif ($p == 2) {
	$menu_html_contnet .= 
	"<div class=\"tab-pane fade\" id=\"pills-dinner\" role=\"tabpanel\" aria-labelledby=\"pills-dinner-tab\">" ;
	} else {
	$menu_html_contnet .= 
	"<div class=\"tab-pane fade\" id=\"pills-drinks\" role=\"tabpanel\" aria-labelledby=\"pills-drinks-tab\">" ;
	}
	foreach($main_category->children() as $this_sub_category) {  // Vegitarian, Non_Vegitarian
		$menu_html_contnet .= 
			"<div> " . $this_sub_category . 
				"<hr>" .
				"<div class=\"row\">";
		$n_items_this_sub_cat  = $this_sub_category->count();
		
				// First coulmn
					$menu_html_contnet .= 
					"<div class=\"col-md-6 site-animate\">";
						for ($j = 0; $j < intval(ceil($n_items_this_sub_cat/2)); $j++) { // j: Item
							$this_item = $this_sub_category->children()[$j];
							$thisItemIndex = $j + 1;

							$n_this_item_prop = $this_item->count();
							$menu_html_contnet .=   
							"<div class=\"media menu-item\">" .  
								"<img class=\"mr-3\" src=\"images/". trim($this_item->Image). "\" class=\"img-fluid\" alt=\"images/".$this_item->Image."\">" . 
								"<div class=\"media-body\">" . 
									"<h5 class=\"mt-0\">" . $this_item->Name  . "</h5>" . 
									"<p class=\"mt-0\">" . $this_item->Description . "</p" . 
									"<h6 class=\"text-primary menu-price\">" . $this_item->Price .  "</h6>" . 
								"</div>".
							"</div>";
						}
					$menu_html_contnet .=  
					"</div>";
					
					// Second coulmn
					$menu_html_contnet .= 
					"<div class=\"col-md-6 site-animate\">";
						for ($j = intval(ceil($n_items_this_sub_cat/2)); $j < intval(ceil($n_items_this_sub_cat)); $j++) { // j: Item
							$this_item = $this_sub_category->children()[$j];
							$thisItemIndex = $j + 1;

							$n_this_item_prop = $this_item->count();
							$menu_html_contnet .=   
							"<div class=\"media menu-item\">" .  
								"<img class=\"mr-3\" src=\"images/" . trim($this_item->Image). "\" class=\"img-fluid\" alt=\"images/" . $this_item->Image."\">" . 
								"<div class=\"media-body\">" . 
									"<h5 class=\"mt-0\">" . $this_item->Name  . "</h5>" . 
									"<p class=\"mt-0\">" . $this_item->Description . "</p" . 
									"<h6 class=\"text-primary menu-price\">" . $this_item->Price .  "</h6>" . 
								"</div>".
							"</div>";
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