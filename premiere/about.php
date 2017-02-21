<?php
//
#Page info (meta tags) :page_description,page_keywords,page_copyright

$description = "Very indepth description";
$keywords = "about premiere conven";

#includes the key head files 
require_once("functions/head.php");
$head = new Header("About Premiere conventions",$description,$keywords);

#initialize the head section
$head->init_page();

#navigation
require_once("functions/navigation.php");
$nav = new Navigation('about');
?>

<!-- Body content goes here -->
<div class='container'>

	<!-- <img src='media/kicc.jpg' class='u-full-width' alt='kicc'> -->
	<h3 class='center_text'>Some information about the company</h3>
	<div>
		<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>		
	</div>
</div>
<?php
#includes the footer and closing tags
require_once("functions/footer.php");
?>