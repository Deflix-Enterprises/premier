<?php
//Class dealing with navigation
class Navigation
{
	public $active_page='';#string storing the active page name

	public $nav_content;#navigation html content

	#classes for the different pages
	private $class_home;
	private $class_services;
	private $class_about;
	private $class_contact;

	#the name of the active class
	private $active_class;

	#constructor - active page passed in as a parameter
	function __construct($active_page)
	{	
		#initialize the name of the active class
		$this->active_class = "class ='active'";

		#init the active page variable
		$this->active_page = $active_page;

		#check to see which page is the active page
		switch($this->active_page)
		{
			case 'home':
				$this->resetAllClasses();
				$this->class_home = $this->active_class;
			break;
			
			case 'services':
				$this->resetAllClasses();
				$this->class_services = $this->active_class;
			break;
			
			case 'about':
				$this->resetAllClasses();
				$this->class_about = $this->active_class;
			break;
			
			case 'contact':
				$this->resetAllClasses();
				$this->class_contact = $this->active_class;
			break;

			default:#if an invalid or empty string is entered
				$this->resetAllClasses();

		}

		#Initialize the navigation content
		$this->nav_content = <<<EOD
	<nav class='site-nav fixed-navbar'>
		<ul>
	<!-- 		<li><a href=''><img src='media/logo_sm.png' id='nav_logo' alt='Company logo'></a></a></li> -->
			<li><a href='index.php' $this->class_home >HOME</a> </li>
			<li><a href='services.php' $this->class_services >SERVICES</a></li>
			<li><a href='about.php' $this->class_about >ABOUT</a></li>
			<li><a href='contact.php' $this->class_contact >CONTACT</a></li>

			<li class='nav-icon'><a href='javascript:void(0) onClick='toggleMobileMenu()'>&#9776</a></li>
		</ul>
		<hr>
	</nav>

EOD;

	#print out the navigation content
	echo $this->nav_content;
	}

	#resets all classes
	private function resetAllClasses()
	{
		$this->class_home='';
		$this->class_services='';
		$this->class_about='';
		$this->class_contact='';
	}
}