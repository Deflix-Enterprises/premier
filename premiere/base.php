<?php
#Page info (meta tags) :page_description,page_keywords,page_copyright

$description = "Very indepth description";
$keywords = "Some few key words";

#includes the key head files 
require_once("functions/head.php");
$head = new Header("Home",$description,$keywords);

#initialize the head section
$head->init_page();

#navigation
require_once("functions/navigation.php");
$nav = new Navigation('home');
?>


<!-- Body content goes here -->

<?php
#includes the footer and closing tags
require_once("functions/footer.php");
?>