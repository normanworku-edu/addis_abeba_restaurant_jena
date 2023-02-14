<?php
$allergens_and_additives_html_contnet = "<div> <h5 font-weight =\"bold\">" . "Allergene und Zusatzstoffe" . "</h5> <hr> </div>";
$allergens_and_additives_html_contnet .= "<table class=\"table table-striped\" align=center>
               <thead>
                  <tr>
                     <th>Allergense</th>
                     <th>Zusatzstoffe</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td class=\"text-left\">1. Glutenhaltiges Getreide</td>
                     <td class=\"text-left\">a = mit Farbstoff(en)</td>
                  </tr>
                  <tr>
                     <td class=\"text-left\">2. Eier und eihaltige Lebensmittel</td>
                     <td class=\"text-left\">b = mit Antioxydationsmittel</td>
                  </tr>
                  <tr>
                     <td class=\"text-left\">3. Erdnüsse und daraus gewonnene Erzeugnisse</td>
                     <td class=\"text-left\">c = chininhaltig</td>
                  </tr>
                  <tr>
                     <td class=\"text-left\">4. Milch und daraus gewonnene Erzeugnisse</td>
                     <td class=\"text-left\">d = mit Süßungsmittel</td>
                  </tr>
                  <tr>
                     <td class=\"text-left\">5. Schalenfrüchte</td>
                     <td class=\"text-left\">e = enthält eine Phenylalaninquelle</td>
                  </tr>
                  <tr>
                     <td class=\"text-left\">6. Senf und daraus gewonnene Erzeugnisse</td>
                     <td class=\"text-left\">f = Säuerungsmittel</td>
                  </tr>
                  <tr>
                     <td class=\"text-left\">7. Sesamsamen und daraus gewonnene Erzeugnisse</td>
                     <td class=\"text-left\">g = koffeinhaltig</td>
                  </tr>
                  <tr>
                     <td class=\"text-left\">8. Schwefeldioxid und Sulfite</td>
                     <td class=\"text-left\"> </td>
                  </tr>
                  <tr>
                     <td class=\"text-left\">9. Fisch und daraus gewonnene Erzeugnisse</td>
                     <td class=\"text-left\"> </td>
                  </tr>
               </tbody>
            </table>";
			   
			   echo $allergens_and_additives_html_contnet;
?>