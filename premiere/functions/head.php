<?php

	//Contains all the site pages default dependencies/tags - using php so it can be changed once and reflect everywhere
	class Header
	{
		//Page info : $page_title,$page_author,page_description,page_keywords,page_copyright
		private $page_title="";
		private $page_author="";
		private $page_description="";
		private $page_keywords="";

		#Stores the html content of the header
		private $header_content;

		function __construct($title,$description,$keywords)
		{
			#Initialize the page values since it is a requirement in html5
			$this->page_title = $title;
			$this->page_author = "Allan N. Jeremy (Deflix Enterprises)";
			$this->page_description = $description;
			$this->page_keywords = $keywords;

			#the content that will be printed by the header
			$this->header_content = <<<EOD
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
	<title>$this->page_title</title>
	
	<!-- Mobile scaling -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Metas -->
	<meta name="description" content="$this->page_description">
	<meta name="author" content="$this->page_author">
	<meta name="keywords" content="$this->page_keywords">

	<!--Font-->
	<link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

	<!--CSS-->
	<link rel="stylesheet" type="text/css" href="css/layout.css">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/skeleton.css">
	<link rel="stylesheet" type="text/css" href="css/color.css">
</head>
<body>
<main>

EOD;
		}
		//Initializes the page information
		public function init_page()
		{
			echo $this->header_content;
		}
	}

?>


