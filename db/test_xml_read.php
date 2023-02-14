<!DOCTYPE html>
<html>
<body>

<?php
$xml=simplexml_load_file("books.xml") or die("Error: Cannot create object");
echo $xml->book[0]->title . "<br>";
echo $xml->book[1]->title;
?> 


<?php
$xml=simplexml_load_file("books.xml") or die("Error: Cannot create object");
foreach($xml->children() as $books) { 
    echo $books->title . ", "; 
    echo $books->author . ", "; 
    echo $books->year . ", ";
    echo $books->price . "<br>"; 
} 
?>

<?php
$xml=simplexml_load_file("menu.xml") or die("Error: Cannot create object");
echo "I am here";
echo "<br><br>"; 
foreach($xml->children() as $main_category) { 
	echo $main_category;
	echo "<br>"; 
	
	foreach($main_category->children() as $sub_category) {  
		echo "----". $sub_category;
		echo "<br>"; 
		foreach($sub_category->children() as $this_item) {  
			echo "--------Name : ". $this_item->Name;
			echo "<br>"; 
			echo "--------Description : ". $this_item->Description;
			echo "<br>"; 
			echo "--------Price : ". $this_item->Price;
			echo "<br>"; 
			echo "--------Image : ". $this_item->Image;
			echo "<br><br>"; 
	}
	}
	echo "<br><br>"; 
} 
?>

</body>
</html>