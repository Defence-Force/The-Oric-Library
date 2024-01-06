<!DOCTYPE HTML PUBLIC>
<HTML lang="en-GB" dir=ltr>
	<HEAD>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">	
		<meta name="description" content="Books and magazines for the Oric computers">
		<meta name="keywords" content="mickael, pointier, dbug, defence force, oric, books, magazines">
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
<?php
		if (isset($_GET['mobile']))
		{
			// Mobile CSS
			echo '<link href="/css/mobile.css" rel="stylesheet" type="text/css">';
		}
		else
		{
			// Desktop CSS
			echo '<link href="/css/main.css" rel="stylesheet" type="text/css">';
		}
		//
?>	
		
		<link href="js/google-code-prettify/prettify.css" type="text/css" rel="stylesheet" />
		<script type="text/javascript" src="js/google-code-prettify/prettify.js"></script>		

		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		<link rel="icon" href="/favicon.ico" type="image/x-icon">		
<?php
    ini_set('display_errors','On');   // Uncomment to debug

	$uri    = $_SERVER['REQUEST_URI'];
	$domain = $_SERVER['HTTP_HOST']; 
	$page   = isset($_GET['page'])?$_GET['page']:"";

	// All the customization should go to this file:
	include 'setup.php';

	if ($page=='books')
	{
		include 'book_search.php';
  	}
	else
	if ($page=='statistics')
	{
		include 'statistics.php';
  	}
	else
	if ($page=='contributors')
	{
		//
		// Contributors
		//
		$content.= '<div class="article_title">Contributing to the Oric Library</div>';
		$content.= '<div class="text">';
		$content.= 'Collecting and scanning all these document takes some time, and I could not have done it without the help of many people and sources:<br>';
		$content.= '<ul>';
		$content.= '<li>Abandonware-Magazines';
		$content.= '<li>André Cheramy';
		$content.= '<li>Anthony Ogden';
		$content.= '<li>Archive.org';
		$content.= '<li>Chema Enguita';
		$content.= '<li>Christophe Devalland';
		$content.= '<li>David Blum';
		$content.= '<li>Didier Vallet';
		$content.= '<li>Dominique Pessan';
		$content.= '<li>François Schuler';
		$content.= '<li>Hakan Karlsson';
		$content.= '<li>Ivan Savchev';
		$content.= '<li>Jim Groom';
		$content.= '<li>Kamel Biskri';
		$content.= '<li>Maxime Croizer';
		$content.= '<li>Oric.org';
		$content.= '<li>Paul Guttin';
		$content.= '<li>Peter Finan';
		$content.= '<li>Romual Liné';
		$content.= '<li>Silicebit';
		$content.= '<li>Simon Guyart';
		$content.= '<li>Steve Marshall';
		$content.= '<li>Wilfrid Avrillon';
		$content.= '<li>William Saint-Cricq';
		$content.= '</ul>';
		$content.= 'If you have Oric related documents, manuals, books, magazines, etc... not present on the library, or in better quality than what is available in the library, feel free to contact us to webmaster at defence-force.org';
		$content.= "</div>";		
  	}
	else
	{
		//
		// Main page
		//
		$content.= '<center><img src="/pics/library_logo_large.png" alt="Oric Library logo" title="The Oric Library" border="0"></center>';

		$content.= '<div class="article_title">Welcome to the Oric Library</div>';

		$content.= '<div class="text">';
		$content.= '<p>The aim of the Oric Library is to provide an easy to access resource for Oric enthusiasts, such as books, magazines and manuals.</p>';
		$content.= '<p>The objective is to focus first on the rare or fragile documents which have some historical relevance (for example the various news letters published by Oric groups over the world), because the more we wait the more chances they disappear forever.</p>';
		$content.= '<p>Most of the documents are specifically Oric related, but some more generic ones are present when it makes sense, such as generic magazines with Oric related articles, or hardware manuals related to the equipment found in Oric computers.</p>';
		$content.= '<p>We fully acknoweldge the fact that most these documents are copyrighted, but hope that everybody will agree that there is a preservation value in offering all these books and magazines in digital form.</p>';
		$content.= "</div>";		
  	}
		// Generate the title dynamically
		echo "<title>";
		echo "The Oric Library";
		if (isset($GLOBALS['title']))
		{
			echo " - ".$GLOBALS['title'];
		}
		echo "</title>";
?>
		
	</HEAD>

	<BODY>

<div class="wrapper">
	<div class="header">
<?php
	$debugmode = isset($_GET['debugmode'])?1:0;
	//$debugmode=1;

	// Logo
	echo '<center>';
	//echo '<a href="index.php?page=main"><img src="/pics/library_logo_large.png" alt="Oric Library logo" title="The Oric Library" border="0"></a>';
	echo '<a href="index.php?page=main"><img src="/pics/library_logo'.rand(1,7).'.png" alt="Oric Library logo" title="Yes, the logos change randomly on each page refresh. Why? Why not!" border="0"></a>';
	echo '</center>';
		
	$page = isset($_GET['page'])?trim($_GET['page']):"";    // $page = $_GET['page'];
	if ($page=='statistics')
	  echo '<div id="page3">';
	else
	if ($page=='contributors')
	  echo '<div id="page4">';
	else
	if ($page=='books')
	  echo '<div id="page2">';
	else
	  echo '<div id="page1">';  
?>

	<ul id="tabs">
	<li id="tab1"><a href="index.php?page=main">Main</a></li>
	<li id="tab2"><a href="index.php?page=books">Books</a></li>
	<li id="tab3"><a href="index.php?page=statistics">Statistics</a></li>
	<li id="tab4"><a href="index.php?page=contributors">Contributors</a></li>
	</ul> 	
	</div>


	</div>
	
	<div id="container">
<?php
	if (isset($GLOBALS['topcontent']))
	{
		echo $GLOBALS['topcontent'];
	}
?>
		<form action="/index.php">
		<div class="side-a">

<?php
	if (isset($GLOBALS['leftcontent']))
	{
		echo $GLOBALS['leftcontent'];
	}
	else
	{
		echo '<div class="quote">&ldquo;Yeah, awesome!&rdquo;</div>';
		echo '<div class="author">me</div>';
		echo '<br>';
		echo '<div class="quote">&ldquo;What do you mean by \'this is not a real quote\'?&rdquo;</div>';
		echo '<div class="author">mini-me</div>';
		echo '<br>';
		echo '<div class="quote">&ldquo;All your websites are belong to us.&rdquo;</div>';
		echo '<div class="author">Anonymous</div>';
		echo '<br>';
		echo '<div class="quote">&ldquo;I will sue you for using my meme!!!&rdquo;</div>';
		echo '<div class="author">Cats</div>';
		echo '<br>';
		echo '<div class="quote">&ldquo;Old computers never die .. their users do!&rdquo;</div>';
		echo '<div class="author">ibisum</div>';
	}
?>

				
		</div>
		
		<div class="content">
	
<?php
	echo $GLOBALS['content'];  	  	  	
?>
	
		</div>
		
		<div class="side-b">				
		<?php	
		include 'side_b.php';
		?>		
		</div>

	</form>
	</div>
	<div id="footer">
		(The Oric Library) - All content &copy; by the respective Authors
	</div>
</div>	
		
	</BODY>
</HTML>

	