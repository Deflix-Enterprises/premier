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

<div class="home_container ">
	<!-- Body content goes here -->
	<div id='home_main' class='container'>
	    <div class='row'>
		<!-- <img src='media/kicc.jpg' class='u-full-width' id='home_pic' alt='kicc'> -->
			<h3 class='center_text'>Welcome to premier conventions</h3>

			<p class='center_text'>Some introductory text for premier conventions.</p>
			<a class='button button-primary center four columns' href='services.php'>Our Services</a>
	    </div>

	</div>
	<hr>
	<div class='container'>
		<div class='row'>
			<h3 class='center_text'>Basic about information</h3>
			<p class='center_text'></p>
			<a class='button button-primary center four columns' href='about.php'>More about us</a>
		</div>
	</div>
</div>
<?php
#includes the footer and closing tags
require_once("functions/footer.php");
?>