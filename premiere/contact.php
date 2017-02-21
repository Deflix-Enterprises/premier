<?php
//
#Page info (meta tags) :page_description,page_keywords,page_copyright

$description = "Very indepth description";
$keywords = "Some few key words";

#includes the key head files 
require_once("functions/head.php");
$head = new Header("Contact us",$description,$keywords);

#initialize the head section
$head->init_page();

#navigation
require_once("functions/navigation.php");
$nav = new Navigation('contact');

?>

<!-- Body content goes here -->
<div class='container'>
	
	<h3 class='center_text'>Basic contact information</h3>
	<p>Offices : Office Location</p>
	<p>Phone : (+254)722973424</p>
	<p>Working hours : 8:00am - 5.00pm (GMT+3) </p>
	
	<hr>
	
	<h4 class='center_text'>Send us a message</h4>
	
	<form action="functions/sendMail.php" method='post'>
		<div class='row'>
			<div class='six columns'>
				<label for='your_email'>Your Email</label>
				<input  type='email' placeholder='Your Email (Optional)' class='u-full-width' id='your_email' name='contact_email_input'>
			</div>

			<div class='six columns'>
				<label for='contacting_reason'>Reason for Contacting</label>
				<select class='u-full-width' id='contacting_reason' name='contact_reason_input'>
					<option value='enquiry'>Service Enquiry</option>
					<option value='feedback'>Feedback/Suggestions</option>
					<option value='other'>Other</option>
				</select>
			</div>

			<div class='u-full-width'>
				<label for='contact_message'>Message</label>
				<textarea placeholder='Message' id='contact_message' name='contact_message_input' class='u-full-width'></textarea>
			</div>

			<button type='button' class='four columns button-primary'>Send</button>

<!-- Send yourself a copy of the email - to add later -->
<!-- 			<div class='six columns'>
				<label class='float_right'>
					<input type='checkbox' id='send_self' name='send_self_input'>
					<span class='label-body'>Send a copy to yourself</span>
				</label>
			</div> -->
		</div>
	</form>
</div>

<?php
#includes the footer and closing tags
require_once("functions/footer.php");
?>