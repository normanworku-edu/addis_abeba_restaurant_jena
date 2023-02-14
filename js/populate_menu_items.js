var parser, xmlDoc;
var text_menu = "<Menu>"+
	"<Lunch>"+
		"<NonVegetarian>"+
			"<Item>"+
				"<Name> Doro Wot </Name>"+
				"<Description> Doro Wot </Description>"+
				"<Price> €12,00 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+
			
			"<Item>"+
				"<Name> Kay Wot </Name>"+
				"<Description> Kay Wot </Description>"+
				"<Price> €13,50 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+
			"<Item>"+
				"<Name> Ye Beg Wot </Name>"+
				"<Description> Ye Beg Wot </Description>"+
				"<Price> €13,50 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+
			"<Item>"+
				"<Name> Bozena Shiro </Name>"+
				"<Description> Bozena Shiro </Description>"+
				"<Price> €12,00 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+
			"<Item>"+
				"<Name> Kitfo </Name>"+
				"<Description> Kitfo </Description>"+
				"<Price> €14,90 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+
			"<Item>"+
				"<Name> Gored Gored </Name>"+
				"<Description> Gored Gored </Description>"+
				"<Price> €16,00 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+
			"<Item>"+
				"<Name> Yebere Tibs </Name>"+
				"<Description> Yebere Tibs </Description>"+
				"<Price> €13,90 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+
			"<Item>"+
				"<Name> Yebeg Tibs </Name>"+
				"<Description> Yebeg Tibs </Description>"+
				"<Price> €13,90 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+
			"<Item>"+
				"<Name> Zilzil Tibs </Name>"+
				"<Description> Zilzil Tibs </Description>"+
				"<Price> €15,50 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+
			"<Item>"+
				"<Name> Ruz Be Siga </Name>"+
				"<Description> Ruz Be Siga </Description>"+
				"<Price> €11,50 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+
			"<Item>"+
				"<Name> Beyeaynet </Name>"+
				"<Description> Beyeaynet </Description>"+
				"<Price> €14,00 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+
			"<Item>"+
				"<Name> Mahiberawi für 2 Person </Name>"+
				"<Description> Mahiberawi für 2 Person </Description>"+
				"<Price> €26,00 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+
			"<Item>"+
				"<Name> Mahiberawi für 4 Person </Name>"+
				"<Description> Mahiberawi für 4 Person </Description>"+
				"<Price> €49,00 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+
		"</NonVegetarian>"+
		
		"<Vegetarian>"+
			"<Item>"+
				"<Name> Alicha </Name>"+
				"<Description> Alicha </Description>"+
				"<Price> €8,50 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+
			"<Item>"+
				"<Name> Shiro </Name>"+
				"<Description> Shiro </Description>"+
				"<Price> €9,50 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+
			"<Item>"+
				"<Name> Messir Wot </Name>"+
				"<Description> Messir Wot </Description>"+
				"<Price> €9,50 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+
			"<Item>"+
				"<Name> Yeatekilt Beyeaynet </Name>"+
				"<Description> Yeatekilt Beyeaynet </Description>"+
				"<Price> €12,90 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+
			"<Item>"+
				"<Name> Ruz Beatekilt  </Name>"+
				"<Description> Ruz Beatekilt </Description>"+
				"<Price> €11,50 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+
		"</Vegetarian>"+
	"</Lunch>"+

	"<Dinner>"+
		"<NonVegetarian>"+
			"<Item>"+
				"<Name> Doro Wot </Name>"+
				"<Description> Doro Wot </Description>"+
				"<Price> €12,00 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+
			
			"<Item>"+
				"<Name> Kay Wot </Name>"+
				"<Description> Kay Wot </Description>"+
				"<Price> €13,50 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+
			"<Item>"+
				"<Name> Ye Beg Wot </Name>"+
				"<Description> Ye Beg Wot </Description>"+
				"<Price> €13,50 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+
			"<Item>"+
				"<Name> Bozena Shiro </Name>"+
				"<Description> Bozena Shiro </Description>"+
				"<Price> €12,00 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+
			"<Item>"+
				"<Name> Kitfo </Name>"+
				"<Description> Kitfo </Description>"+
				"<Price> €14,90 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+
			"<Item>"+
				"<Name> Gored Gored </Name>"+
				"<Description> Gored Gored </Description>"+
				"<Price> €16,00 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+
			"<Item>"+
				"<Name> Yebere Tibs </Name>"+
				"<Description> Yebere Tibs </Description>"+
				"<Price> €13,90 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+
			"<Item>"+
				"<Name> Yebeg Tibs </Name>"+
				"<Description> Yebeg Tibs </Description>"+
				"<Price> €13,90 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+
			"<Item>"+
				"<Name> Zilzil Tibs </Name>"+
				"<Description> Zilzil Tibs </Description>"+
				"<Price> €15,50 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+
			"<Item>"+
				"<Name> Ruz Be Siga </Name>"+
				"<Description> Ruz Be Siga </Description>"+
				"<Price> €11,50 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+
			"<Item>"+
				"<Name> Beyeaynet </Name>"+
				"<Description> Beyeaynet </Description>"+
				"<Price> €14,00 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+
			"<Item>"+
				"<Name> Mahiberawi für 2 Person </Name>"+
				"<Description> Mahiberawi für 2 Person </Description>"+
				"<Price> €26,00 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+
			"<Item>"+
				"<Name> Mahiberawi für 4 Person </Name>"+
				"<Description> Mahiberawi für 4 Person </Description>"+
				"<Price> €49,00 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+
		"</NonVegetarian>"+
		
		"<Vegetarian>"+
			"<Item>"+
				"<Name> Alicha </Name>"+
				"<Description> Alicha </Description>"+
				"<Price> €8,50 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+
			"<Item>"+
				"<Name> Shiro </Name>"+
				"<Description> Shiro </Description>"+
				"<Price> €9,50 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+
			"<Item>"+
				"<Name> Messir Wot </Name>"+
				"<Description> Messir Wot </Description>"+
				"<Price> €9,50 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+
			"<Item>"+
				"<Name> Yeatekilt Beyeaynet </Name>"+
				"<Description> Yeatekilt Beyeaynet </Description>"+
				"<Price> €12,90 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+
			"<Item>"+
				"<Name> Ruz Beatekilt  </Name>"+
				"<Description> Ruz Beatekilt </Description>"+
				"<Price> €11,50 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+
		"</Vegetarian>"+
	"</Dinner>"+
	
	
	"<Drinks>"+
		"<WarmDrinks>"+
			"<Item>"+
				"<Name> Buna für 1 Person </Name>"+
				"<Description> Buna für 1 Person </Description>"+
				"<Price> €3,60 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+
			"<Item>"+
				"<Name> Buna für 2 Personen </Name>"+
				"<Description> Buna für 2 Personen </Description>"+
				"<Price> €6,80 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+
			"<Item>"+
				"<Name> Machiato Einfach </Name>"+
				"<Description> Machiato Einfach </Description>"+
				"<Price> €2,20 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+	
			"<Item>"+
				"<Name> Machiato Doppelt </Name>"+
				"<Description> Machiato Doppelt </Description>"+
				"<Price> €3,90 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+
			"<Item>"+
				"<Name> Espresso Einfach </Name>"+
				"<Description> Espresso Einfach </Description>"+
				"<Price> €1,50 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+	
			"<Item>"+
				"<Name> Espresso Doppelt </Name>"+
				"<Description> Espresso Doppelt </Description>"+
				"<Price> €2,80 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+
			"<Item>"+
				"<Name> Chai </Name>"+
				"<Description> Chai </Description>"+
				"<Price> €2,50 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+
			"<Item>"+
				"<Name> Ingwer Chai </Name>"+
				"<Description> Ingwer Chai </Description>"+
				"<Price> €2,50 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+
			"<Item>"+
				"<Name> Chai Espries</Name>"+
				"<Description> Chai Espries </Description>"+
				"<Price> €2,50 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+
			"<Item>"+
				"<Name> Haustee </Name>"+
				"<Description> Haustee (0.3l glass) </Description>"+
				"<Price> €5,40 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+
		"</WarmDrinks>"+	
		
		"<SoftDrinks>"+
			"<Item>"+
				"<Name> Coca Cola (0.2l) </Name>"+
				"<Description> Coca Cola (0.2l) </Description>"+
				"<Price> €2,20 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+
			"<Item>"+
				"<Name> Coca Cola (0.4l) </Name>"+
				"<Description> Coca Cola (0.4l) </Description>"+
				"<Price> €3,90 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+
			"<Item>"+
				"<Name> Sprite (0.2l) </Name>"+
				"<Description> Sprite (0.2l) </Description>"+
				"<Price> €2,20 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+
			"<Item>"+
				"<Name> Sprite (0.4l) </Name>"+
				"<Description> Sprite (0.4l) </Description>"+
				"<Price> €3,90 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+
			"<Item>"+
				"<Name> Fanta (0.2l) </Name>"+
				"<Description> Fanta (0.2l) </Description>"+
				"<Price> €2,20 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+
			"<Item>"+
				"<Name> Fanta (0.4l) </Name>"+
				"<Description> Fanta (0.4l) </Description>"+
				"<Price> €3,90 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+
			"<Item>"+
				"<Name> Miniral Wasser (Still/Classic) (0.2l) </Name>"+
				"<Description> Miniral Wasser (Still/Classic) (0.2l) </Description>"+
				"<Price> €2,00 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+
			"<Item>"+
				"<Name> Miniral Wasser (Still/Classic) (0.4l) </Name>"+
				"<Description> Miniral Wasser (Still/Classic) (0.4l) </Description>"+
				"<Price> €3,50 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+
			"<Item>"+
				"<Name> Saft (Apfel/Orangen/Kirsch/Multivitamin) (0.2l) </Name>"+
				"<Description> Saft (Apfel/Orangen/Kirsch/Multivitamin) (0.2l) </Description>"+
				"<Price> €2,30 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+
			"<Item>"+
				"<Name> Saft (Apfel/Orangen/Kirsch/Multivitamin) (0.4l) </Name>"+
				"<Description> Saft (Apfel/Orangen/Kirsch/Multivitamin) (0.4l) </Description>"+
				"<Price> €3,60 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+
			"<Item>"+
				"<Name> Saftschorlen (Apfel/Orangen/Kirsch/Multivitamin) (0.2l) </Name>"+
				"<Description> Saftschorlen (Apfel/Orangen/Kirsch/Multivitamin) (0.2l) </Description>"+
				"<Price> €2,30 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+
			"<Item>"+
				"<Name> Saftschorlen (Apfel/Orangen/Kirsch/Multivitamin) (0.4l) </Name>"+
				"<Description> Saftschorlen (Apfel/Orangen/Kirsch/Multivitamin) (0.4l) </Description>"+
				"<Price> €3,60 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+
		"</SoftDrinks>"+
		
		"<Bier>"+
			"<Item>"+
				"<Name> Augustiner Helles </Name>"+
				"<Description> Augustiner Helles </Description>"+
				"<Price> €3,20 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+
			"<Item>"+
				"<Name> Lammsbräu </Name>"+
				"<Description> Lammsbräu </Description>"+
				"<Price> €3,20 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+
			"<Item>"+
				"<Name> Becks Alcholfrei </Name>"+
				"<Description> Becks Alcholfrei </Description>"+
				"<Price> €3,20 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+
			"<Item>"+
				"<Name> Hefeweizen </Name>"+
				"<Description> Hefeweizen </Description>"+
				"<Price> €3,20 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+
			"<Item>"+
				"<Name> Hefeweizen Dunkel </Name>"+
				"<Description> Hefeweizen Dunkel </Description>"+
				"<Price> €3,20 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+
			"<Item>"+
				"<Name> Hefeweizen Alcholfrei </Name>"+
				"<Description> Hefeweizen Alcholfrei </Description>"+
				"<Price> €3,20 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+
			"<Item>"+
				"<Name> Radler </Name>"+
				"<Description> Radler </Description>"+
				"<Price> €3,20 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+
		"</Bier>"+

		"<Wein>"+
			"<Item>"+
				"<Name> Hauswein Rot  </Name>"+
				"<Description> Hauswein Rot (0,25l Glass trocken )  </Description>"+
				"<Price> €4,10 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+
			"<Item>"+
				"<Name> Hauswein Weiß  </Name>"+
				"<Description> Hauswein Weiß (0,25l Glass trocken )  </Description>"+
				"<Price> €4,10 </Price>"+
				"<Image>menu_1.jpg</Image>"+
			"</Item>"+
		"</Wein>"+
	"</Drinks>"+
"</Menu>";	


parser = new DOMParser();
xmlDoc_menu = parser.parseFromString(text_menu,"text/xml");
xLen = xmlDoc_menu.length;

var n_items_this_sub_cat, this_sub_category, this_item, n_this_item_prop,this_main_category,n_sub_category, main_menu_children;

main_menu_children = xmlDoc_menu.childNodes[0].childNodes; 
n_main_category = main_menu_children.length;

var menu_html_contnet = "";

for (p = 0; p <n_main_category; p++) { // p = Lunch, Dinner, Drink
	this_main_category = main_menu_children[p];
	n_sub_category = this_main_category.childNodes.length;	
	if (p == 0) {
	menu_html_contnet += 
	"<div class=\"tab-pane fade show active\" id=\"pills-lunch\" role=\"tabpanel\" aria-labelledby=\"pills-lunch-tab\">" ;
	} else if (p == 1) {
	menu_html_contnet += 
	"<div class=\"tab-pane fade\" id=\"pills-dinner\" role=\"tabpanel\" aria-labelledby=\"pills-dinner-tab\">" ;
	} else {
	menu_html_contnet += 
	"<div class=\"tab-pane fade\" id=\"pills-drinks\" role=\"tabpanel\" aria-labelledby=\"pills-drinks-tab\">" ;
	}
		for (i = 0; i <n_sub_category; i++) { // i: Vegetarian, NonVegetarian
			this_sub_category = this_main_category.childNodes[i];
			n_items_this_sub_cat = this_sub_category.childNodes.length;	
			menu_html_contnet += 
			"<div> " + this_sub_category.tagName  + 
				"<hr>" +
				"<div class=\"row\">";
								
					// First coulmn
					menu_html_contnet += 
					"<div class=\"col-md-6 site-animate\">";
						for (j = 0; j < Math.ceil(n_items_this_sub_cat/2); j++) { // j: Item
							this_item = this_sub_category.childNodes[j];
							thisItemIndex = j + 1;
							n_this_item_prop = this_item.childNodes.length;
							menu_html_contnet +=   
							"<div class=\"media menu-item\">" +  
								"<img class=\"mr-3\" src=\"images/" + this_item.getElementsByTagName("Image")[0].childNodes[0].nodeValue + "\" class=\"img-fluid\" alt=\"Addis Abeba Restaurant Jena\">" + 
								"<div class=\"media-body\">" + 
									"<h5 class=\"mt-0\">" + this_item.getElementsByTagName("Name")[0].childNodes[0].nodeValue  + "</h5>" + 
									"<p class=\"mt-0\">" + this_item.getElementsByTagName("Description")[0].childNodes[0].nodeValue  + "</p" + 
									"<h6 class=\"text-primary menu-price\">" + this_item.getElementsByTagName("Price")[0].childNodes[0].nodeValue  +  "</h6>" + 
								"</div>"+
							"</div>";
						}
					menu_html_contnet +=  
					"</div>";
					
					// Second coulmn
					menu_html_contnet += 
					"<div class=\"col-md-6 site-animate\">";
						for (j = Math.ceil(n_items_this_sub_cat/2); j < n_items_this_sub_cat; j++) { // j: Item
							this_item = this_sub_category.childNodes[j];
							thisItemIndex = j + 1;
							n_this_item_prop = this_item.childNodes.length;
							menu_html_contnet +=   
							"<div class=\"media menu-item\">" +  
								"<img class=\"mr-3\" src=\"images/" + this_item.getElementsByTagName("Image")[0].childNodes[0].nodeValue + "\" class=\"img-fluid\" alt=\"Addis Abeba Restaurant Jena\">" + 
								"<div class=\"media-body\">" + 
									"<h5 class=\"mt-0\">" + this_item.getElementsByTagName("Name")[0].childNodes[0].nodeValue  + "</h5>" + 
									"<p class=\"mt-0\">" + this_item.getElementsByTagName("Description")[0].childNodes[0].nodeValue  + "</p" + 
									"<h6 class=\"text-primary menu-price\">" + this_item.getElementsByTagName("Price")[0].childNodes[0].nodeValue  +  "</h6>" + 
								"</div>"+
							"</div>";
						}
					menu_html_contnet +=  
					"</div>";
				menu_html_contnet +=  
				"</div>"; // End of "<div class=\"row\">\n";
			menu_html_contnet +=  
			"</div>"; // End of "<div> " + this_sub_category.tagName  + "\n" + 
		}
	menu_html_contnet +=  
	"</div>"; // End of "<div class=\"tab-pane fade\" id=\"pills-lunch\  
}
document.getElementById("menu_html").innerHTML = menu_html_contnet; 