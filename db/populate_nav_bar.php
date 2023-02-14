<?php
$nav_bar_html_content = "";
    
$nav_bar_html_content = "<nav class=\"navbar navbar-expand-lg navbar-dark site_navbar bg-dark site-navbar-light\" id=\"site-navbar\">".
         "<div class=\"container\" style=\"margin-left: 0px; margin-right: 0px; max-width:100%\">".
            "<a class=\"navbar-brand\" href=\"index.php\" style=\"padding-left: 0px; padding-right: 0px; color:#000\">".
            "<img style=\"display:block\" src=\"images/logo.jpg\" alt=\"Trulli\" width=\"100%\" height=\"100%\">".		
            "</a>".
            "<a class=\"navbar-brand-name-large\" href=\"index.php\" style=\"padding-left: 0px; padding-right: 0px; color:#000\">".
            "Addis Abeba Restaurant <br> <p class=\"navbar-brand-name-small\"> Äthiopische Gerichte in Jena </p>".
            "</a>".
            "<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#site-nav\" aria-controls=\"site-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">".
            "<span class=\"oi oi-menu\"></span> ".
            "</button>".
            "<div class=\"collapse navbar-collapse\" id=\"site-nav\">".
               "<ul class=\"navbar-nav ml-auto\">".
                  "<li class=\"nav-item active\"><a href=\"#section-home\" class=\"nav-link\" style =\"visibility:hidden ! important;\">   H O M E     </a></li> ".
                  "<!-- <li class=\"nav-item\"><a href=\"about.php\" class=\"nav-link\">Über uns</a></li> -->".
                  "<!-- <li class=\"nav-item\"><a href=\"#section-offer\" class=\"nav-link\">Offer</a></li> ".
                  "<li class=\"nav-item\"><a href=\"#section-menu\" class=\"nav-link\">Menü</a></li> -->".
				  "<li class=\"nav-item\"><a href=\"menu.php\" class=\"nav-link\">Menü</a></li>".
                  "<!-- <li class=\"nav-item\"><a href=\"#section-opening_time\" class=\"nav-link\">Öffnungszeit</a></li>-->".
                  "<!-- <li class=\"nav-item\"><a href=\"news.php\" class=\"nav-link\">Nachrichten</a></li> -->".
                  "<!--  <li class=\"nav-item\"><a href=\"#section-gallery\" class=\"nav-link\">Galerie</a></li> -->".
				  "<li class=\"nav-item\"><a href=\"gallery.php\" class=\"nav-link\">Galerie</a></li>".
                  "<li class=\"nav-item\"><a href=\"contact.php\" class=\"nav-link\">Kontakt</a></li>".
	
	"<!-- <li class=\"nav-item\"> <select class=\"selectpicker\" data-width=\"fit\">
  <option  data-content='<span class=\"flag-icon flag-icon-de\"></span> Deutsch'>DE</option>
  <option data-content='<span class=\"flag-icon flag-icon-gb\"></span> English'>EN</option>
</select> </li> -->".
 
			  "</ul>".
            "</div>".
         "</div>".
      "</nav>";
	  
	  echo $nav_bar_html_content;
