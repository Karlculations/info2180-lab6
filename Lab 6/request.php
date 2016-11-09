<?php

// accept a term (keyword)
// respond with a value
$all = $_GET['&all'];
$query = $_GET['q'];
$definition = [
    "definition" => "A statement of the exact meaning of a word, especially in a dictionary.",
    "bar" => "A place that sells alcholic beverages",
    "ajax" => "Technique which involves the use of javascript and xml (or JSON)",
    "html" => "The standard markup language for creating web pages and web applications.",
    "css" => "A style sheet language used for describing the presentation of a document written in a markup language.",
    "javascript" => "A lightweight, interpreted programming language with first-class functions that adds interactivity to your website.",
    "php" => "A server-side scripting language, and a powerful tool for making dynamic and interactive websites",
];

if ($all){
	print "<h3>";
}else{
	print "<h3>" . strtoupper($query) . "</h3>";
	print "<p>" . $definition[$query] . "</p>";
}

?>

<?php
$xmldata = '<?xml version="1.0" encoding="UTF-8"?>
<people>
    <person>
        <name>Captain America</name>
        <email>capt.america@example.com</email>
    </person>
    <person>
        <name>Spiderman</name>
        <email>spidey@example.com</email>
    </person>
    <person>
        <name>Ironman</name>
        <email>tony.stark@example.com</email>
    </person>
    <person>
        <name>Black Widow</name>
        <email>romanov@example.com</email>
    </person>
    <person>
        <name>Storm</name>
        <email>storm@example.com</email>
    </person>
</people>';
header('Content-Type: text/xml');
$xmlOutput = new SimpleXMLElement($xmldata);
echo $xmlOutput->asXML();