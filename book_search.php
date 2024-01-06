
<?php
	// Define the books
	include 'books.php';

$unwanted_array = array(    'Š'=>'S', 'š'=>'s', 'Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
                            'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U',
                            'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss', 'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c',
                            'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o',
                            'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ü'=>'u', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y' ,
                            '&#233;'=>'e','&#232;'=>'e','&#231;'=>'c',
                            ' '=>'');

	//
	// Make the list of all keywords
	//
	$criteria_cache_filename="cache/criteria.cache";
	$criteria_cache_valid = false;
	if (file_exists($criteria_cache_filename))
	{
		$criteria_cache_timestamp=filemtime($criteria_cache_filename);
		if ($criteria_cache_timestamp >= filemtime('books.php') &&
			$criteria_cache_timestamp >= filemtime('book_search.php'))
		{
			$criteria_cache_valid=true;
		}
	}

	if ($criteria_cache_valid)
	{
		// The Timestamp of the cache is more recent that the book and book search, just load it
		$criterias = unserialize(file_get_contents($criteria_cache_filename));
		//$content.= '<br>Criteria cache loaded from '.$criteria_cache_filename.'<br>';
	}
	else
	{
		// Timestamp of the cache is older than the current file
		// Regenerate the cache file
		function InsertCriteria(&$criteria,$value)
		{
	    	//GLOBAL $criterias;

	    	if ($value)
	    	{
	    		if (is_array($value))
	    		{
	    			// Description is typically made of multiple entries, like downloads or comments for french, english, spanish, etc..
	    			foreach ($value as $key => $entry)
	    			{
	    				$criteria[$entry]=0; 			
	    			}
	    		}
	    		else
	    		{
	    			// It is a string, just parse it			
		    		$splitValue=explode("|",$value);
	    			foreach ($splitValue as $entry)
	    			{
	    				$criteria[$entry]=0;
	    			}
	    		}
	    	}
		}

		$criterias=array(
		);
		InsertCriteria($criterias['content'],"any|available|missing");	
		foreach ($books as $book) 
		{	
			InsertCriteria($criterias['language'],$book['language']);
			InsertCriteria($criterias['type'],$book['type']);
			InsertCriteria($criterias['year'],$book['year']);
			InsertCriteria($criterias['author'],$book['author']);
			InsertCriteria($criterias['publisher'],$book['publisher']);
	    }
	    file_put_contents($criteria_cache_filename, serialize($criterias));	
		//$content.= '<br>Criteria cache saved to '.$criteria_cache_filename.'<br>';
		//InsertCriteria($criterias['content'],'any');
	}

	//
	// Search stuff
	//
	$search_criteria=array(
		'content' => array(),
		'author' => array(),
		'type' => array(),
		'year' => array(),
		'publisher' => array(),
		'language' => array(),
	);

	$parsed_url=parse_url($_SERVER['REQUEST_URI']);

	$has_search_criteria=false;
	$search_content='any';
	$search_free='';

	if (isset($_GET['clear']))
	{
		// Clear Search
	}
	else
	{
		$splitValue=explode("&",$parsed_url['query']);
		/*
		print_r($_SERVER['REQUEST_URI']);
		print("<hr>");
		print_r($parsed_url);
		print("<hr>");
		print_r($splitValue);
		print("<hr>");
		*/
		foreach ($splitValue as $entry)
		{	
			//$splitEntry=explode("=",$entry);
			list($criteriaName, $criteriaNameValue)=explode("=",$entry);
			if (in_array("$criteriaName", array("type","year","author","publisher","language")))  // $search_criteria)) //
			{
				array_push($search_criteria[$criteriaName],$criteriaNameValue);
				$has_search_criteria=true;
			}
			else
			if ($criteriaName=="content")
			{
				if ($criteriaNameValue!='any')
				{			
					$search_content=$criteriaNameValue;
					$has_search_criteria=true;
				}
			}
			else
			if ($criteriaName=="freesearch")
			{
				$search_free=$_GET['freesearch']; //$criteriaNameValue;
				$has_search_criteria=true;
			}
		}
	}
	

	// Some basic filtering to remove all the empty place-holder entries
	function empty_book($book)
	{
		global $search_criteria;
		global $unwanted_array;
		global $search_content;
		global $search_free;

	    if ($book['name']=='')
	    {
	    	return false;
	    }

		if ( ($search_content == 'available') and (empty($book['download'])) )
		{
			return false;
		}
		else
		if ($search_content == 'missing')
		{
			if ( (!empty($book['download'])) and ($book['download']!='missing.jpg') )
			{
			return false;				
			}
		}

		if ($search_free)
		{
			// This is the free form research criteria, kind of evil and 
			foreach ($book as $key => $entry)
			{
				if (is_array($entry))
				{
					foreach ($entry as $subentry)
					{
						if (stristr($subentry,$search_free))
						{
							goto found_criteria;
						}						
					}
				}
				else
				{			
					//if (strtr($entry,$search_free))
					if (stristr($entry,$search_free))
					{
						goto found_criteria;
					}
				}

/*
				print_r($key);
				print_r($entry);
	print("<br>");
	*/

				/*
	    		if (in_array("$entry", $criteria_values)) 
	    		{
	    			goto out;
	    		}
	    		*/
			}		
			return false;
		found_criteria:
		}

		foreach ($search_criteria as $criteria_name => $criteria_values)
		{
			if (!empty($criteria_values))
			{
				$key=strtr($book[$criteria_name],$unwanted_array);
	    		$splitValue=explode("|",$key);
				foreach ($splitValue as $key => $entry)
				{
		    		if (in_array("$entry", $criteria_values)) 
		    		{
		    			goto out;
		    		}
				}
				return false;
			out:    			
			}
		}
		return true;
	}
	$books = array_filter($books,"empty_book");



    //
    // Then actually process the bookl
    //
    $flip = 1;
    $valid_flags=array('au','bg','be','de','dk','en','es','fr','jp','mk','nl','no','se','si','hr','sr');
    	//"fr","en","es","au","jp");

    function InsertRow(&$book_data,$color,$book,$value_name,$value_name2="")
    {
    	GLOBAL $valid_flags;
    	GLOBAL $languages;

		$value =$book[$value_name];
    	if ($value)
    	{
    		if (is_array($value))
    		{
    			// Description is typically made of multiple entries, like downloads or comments for french, english, spanish, etc..
    			foreach ($value as $key => $entry)
    			{
	    			$book_data.='<td valign="top" bgcolor="'.$color.'" style="vertical-align:top">';		    			
		    		if (in_array("$key", $valid_flags)) 
		    		{
		    			$book_data.= '<img src="pics/flags/'.$key.'.png"> ';
		    		}
		    		if ($value_name=='download')
		    		{
		    			// Generate a download link		    			
		    			$book_data.='<a href="';
		    			if (strpos($entry,'http') === 0)    // str_starts_with  <- PHP 8
		    			{
		    				// Web link
			    			$book_data.=$entry;
		    			}
		    			else
		    			{
		    				// Local file
			    			$book_data.='books/content/'.$entry.'';
		    			}
		    			$book_data.='"" download> Download <img src="pics/';

						$file_parts = pathinfo($entry);
						switch ($file_parts['extension'])
						{
						case "pdf":
		    				$book_data.='file_pdf.png';
						    break;

						case "png":
		    				$book_data.='file_png.png';
						    break;

						case "zip":
		    				$book_data.='file_zip.png';
						    break;

					    default:
		    				$book_data.='download.png';
						    break;
						}
		    			$book_data.='"></a>';
		    		}
		    		else
		    		{
		    			// Just print the content
		    			$book_data.=$entry;	    			
		    		}
		    		$book_data.='</td></tr>';				
    			}
    		}
    		else
    		{
    			// It is a string, just parse it			
	    		$splitValue=explode("|",$value);

	    		$book_data.='<td valign="top" bgcolor="'.$color.'">';
				foreach ($splitValue as $key => $entry)
				{
					if ($key>0)
					{
		    			$book_data.=', ';
					}
		    		$book_data.=$entry;
				}
	    		if ($value_name2)
	    		{
	    			if ($value_name2=="language")
	    			{
						$value2=$book[$value_name2];
	    				$splitValue=explode("|",$value2);
						foreach ($splitValue as $key => $entry)
						{
				    		$book_data.='<span style="float:right;vertical-align: middle;"><img style="margin:2px;box-shadow:2px 2px 3px #404040bd;" src="pics/flags/'.$entry.'.png" title="Language: '.$languages[$entry].'"></span>';
						}
	    			}
	    			else
	    			{	   			
						$value2=$book[$value_name2];
			    		$book_data.='<hr>'.$value2;
	    			}
	    		}
	    		$book_data.='</td></tr>';
    		}
    	}
    }

    function InsertCover(&$book_data,$cover)
    {
		$book_data.= '<td valign="top">';
		$splitValue=explode("|",$cover);
		foreach ($splitValue as $key => $entry)
		{
			if ($key>0)
			{
    			//$book_data.=', ';
			}
			$book_data.= ' <IMG src="books/covers/'.$entry.'" width=116 height=auto class="zoom">';
		}
		$book_data.= '</td>';
    }

    function InsertBook(&$content,$book,$flip)
    {
		$content.= '<table width="100%" cellspacing="5">';
		$content.= '<tr valign="top">';

		if ($flip)
		{	
			InsertCover($content,$book["cover"]);
		}

		$content.= '<td valign="top" width="100%">';
		$content.= '<table width="100%">';
    	InsertRow($content,"#ff0000",$book,"name","language");  // Test
    	InsertRow($content,"#ff5000",$book,"issue");
    	InsertRow($content,"#ff7000",$book,"author");
    	InsertRow($content,"#ff9000",$book,"year");
    	//InsertRow($content,"#ffa000",$book,"language");
    	InsertRow($content,"#ffb000",$book,"publisher");
    	InsertRow($content,"#ffc000",$book,"isbn");
    	InsertRow($content,"#ffd000",$book,"download");
    	InsertRow($content,"#f3edde",$book,"description");


		$content.= '</table>';
		$content.= '</td>';

		if (!$flip)
		{	
			InsertCover($content,$book["cover"]);
		}

		$content.= '</tr>';
		$content.= '</table>';

		return $content;
    }

    if (isset($_GET['csv']))
    {
    	// CSV export
		$out = fopen('php://output', 'w');
		//fputs($fp, $bom =( chr(0xEF) . chr(0xBB) . chr(0xBF) ));  //add BOM to fix UTF-8 in Excel
		foreach ($books as $book) 
		{	
			if (!empty($book))
			{
				//fputcsv($out, array('this','is some', 'csv "stuff", you know.'));
				fputcsv($out, 
					array(
						$book['name'],
						$book['type'],
						$book['language'],
						$book['author'],
						$book['year'],
						$book['publisher'],
						$book['isbn']
						));
				fputs($out,"<br>");
			}
		}
		fclose($out);
		exit();
    }

    // Normal page
    $total_entries = sizeof($books);

	$jylam_mode=false;
	if (isset($_GET['jylam_mode']))
	{
		$jylam_mode=true;
		$topcontent='';
	}

	$sort_criteria        = isset($_GET['sort_by'])?$_GET['sort_by']:"name";
    $max_entries_per_page = isset($_GET['entries_per_page'])?trim($_GET['entries_per_page']):"13";
    $max_page      = ceil($total_entries/$max_entries_per_page);

    $current_page         = min(max(1,isset($_GET['current_page'])?trim($_GET['current_page']):"1"),$max_page);

    $base_url = strtok($_SERVER["REQUEST_URI"], '?').'?page=books';
    if ($sort_criteria!='name')
    {
    	$base_url .= '&sort_by='.$sort_criteria;    	
    }
    $base_url.= '&amp;entries_per_page='.$max_entries_per_page;
    //$sort_url = '&sort_by='.$sort_criteria;

    $first_entry = ($current_page-1)*$max_entries_per_page;
    $last_entry  = $first_entry+$max_entries_per_page;

    // Search box
    // https://library.defence-force.org/index.php?page=books&author=Geoff+Philips&author=Georges+El+Andaloussi&author=Gilles+Bertin
    // https://library.defence-force.org/index.php?page=books&year=1983&year=1984
    // https://library.defence-force.org/index.php?page=books&year=1983&year=1984
    $content.= '<input type="hidden" name="page" value="books" />';
	$content.= '<input type="hidden" name="sort_by" value="'.$sort_criteria.'" />';

    //$content.= '<input type="text">';  // Free form search
    //$content.= '<input type="submit">';

	//$content.= '<center>Found '.$total_entries.' entries matching the search criteria</center>';
	if (!$has_search_criteria)
	{
		$content.= 'Showing all '.$total_entries.' entries in the library';	
	}
	else
	{
		$content.= 'Found '.$total_entries.' entries matching the search criteria:';	
		$content.= '<ul>';
		if ($search_content)
		{
			$content.= '<li><b>content:</b> '.$search_content;
		    $base_url.= '&amp;content='.$search_content;
		}
		if ($search_free)
		{
			$content.= '<li><b>free search:</b> '.$search_free;
		    $base_url.= '&amp;freesearch='.$search_free;
		}
		foreach ($search_criteria as $criteria_name => $criteria_values)
		{
			if (!empty($criteria_values))
			{
				$content.= '<li><b>'.$criteria_name.':</b> ';
				foreach ($criteria_values as $key => $criteria_value)
				{
					if ($key)
					{
						$content.= ', ';
					}
					if ($criteria_name=='language')
					{
						$content.= $languages[$criteria_value];
					}
					else
					{
						$content.= $criteria_value;					
					}
				    $base_url.= '&amp;'.$criteria_name.'='.$criteria_value;
				}
			}
		}
		$content.= '</ul>';
	}

    $page_display ='';
	$page_display.= '<center>';
	$page_display.= '<hr>';

    $page = 1;
	while ($page<=$max_page)
	{
		if ($page>1)
		{
			$page_display.=' / ';
		}
		if ($page==$current_page)
		{
			$page_display.= '<u>';
		}
		$page_display.= '<a href="'.$base_url.'&amp;current_page='.$page.'">'.$page.'</a>';
		if ($page==$current_page)
		{
			$page_display.= '</u>';
		}
		$page++;
	}

	$page_display.= '</center>';
	$page_display.= '<hr>';

	$content.= $page_display;

	//
	// Sort --->
	//
	//$sort_order   =isset($_GET['issue_sort_order'])?$_GET['issue_sort_order']:"";
	// &#8679; UP WHITE ARROW
	// &#8681; DOWN WHITE ARROW

	function CompareDate($a, $b) 
	{ 
		if ($a['year'] == $b['year'])
		{
			// Same year, sort by month
			//return strnatcmp($a['month'],$b['month']);
			if ($a['month'] == $b['month'])
			{
				return 0;
			}
			return ($a['month'] < $b['month']) ? -1 : 1;
		}
		return strnatcasecmp($a['year'],$b['year']); 
	}


	function CompareName($a, $b) 
	{ 
		if ($a['name'] == $b['name'])
		{
			// Same name -> we sort by date
			return CompareDate($a,$b);
		}
		return strnatcasecmp($a['name'],$b['name']);
	}

	// Sort the array by Issue ID
	if ($sort_criteria=='name')
	{
		// Sort by name
		usort($books,"CompareName");
		$content .= '<div id="page1">';  
	}
	else
	if ($sort_criteria=='date')
	{
		// Sort by date
		usort($books,"CompareDate");
		$content .= '<div id="page2">';  
	}
	else
	if ($sort_criteria=='author')
	{
		// Sort by author
		usort($books, function($a, $b) 
		{ 
			$left =$a['author'];
			$right=$b['author'];
			if (empty($left))
			{
				$left='zzz';
			}
			if (empty($right))
			{
				$right='zzz';
			}
			return strnatcasecmp($left,$right); 
		});  					
		$content .= '<div id="page3">';  
	}
	else
	{
		// Sort by publisher
		usort($books, function($a, $b) 
		{ 
			$left =$a['publisher'];
			$right=$b['publisher'];
			if (empty($left))
			{
				$left='zzz';
			}
			if (empty($right))
			{
				$right='zzz';
			}
			return strnatcasecmp($left,$right); 
		});  					
		//usort($books, function($a, $b) { return strnatcmp($a['component']->name,$b['component']->name); });  // Sort by publisher
		$content .= '<div id="page4">';  
	}

	$content .= '<ul id="tabs">';
	$content .= '<li id="tab1"><a href="'.$base_url.'&sort_by=name">Name</a></li>';
	$content .= '<li id="tab2"><a href="'.$base_url.'&sort_by=date">Date</a></li>';
	$content .= '<li id="tab3"><a href="'.$base_url.'&sort_by=author">Author</a></li>';
	$content .= '<li id="tab4"><a href="'.$base_url.'&sort_by=publisher">Publisher</a></li>';
	$content .= '</ul>';
	$content .= '</div>';

    $current_entry=0;
	foreach ($books as $book) 
	{	
		if (!empty($book))
		{
			$content.= '<tr>';

			if ( ($current_entry>=$first_entry) and ($current_entry<$last_entry) )
			{
				// Actually process AND display
				InsertBook($content,$book,$flip);			
			}
			else
			{
				// Don't display, but still process
				$discarded_content='';
				InsertBook($discarded_content,$book,$flip);
			}

			$flip = 1-$flip;
			$current_entry++;
		}
    }	
	$content.= $page_display;

   	$leftcontent.='<center><hr>';
   	$leftcontent.= '<input type="submit" value="Search">';
   	$leftcontent.= '&nbsp;';
   	$leftcontent.= '<input type="submit" value="CSV" name="csv">';
   	$leftcontent.= '&nbsp;';
   	$leftcontent.= '<input type="submit" value="Clear" name="clear">';
   	$leftcontent.= '<hr>';

   	if ($jylam_mode)
   	{
		$topcontent.= '<td valign="top">'.$box_content;
		$topcontent.= '<label for="freesearch"><b>free search</b></label><br>';
	    $topcontent.= '<input type="text" id="freesearch" name="freesearch" style="width:100%;" value="'.$search_free.'">';  // Free form search
	    $topcontent.= '</td>';   		
   	}
   	else
   	{
	   	$rightcontent.= '<center>';
		$rightcontent.=' <label for="freesearch"><b>free search</b></label><br>';
	    $rightcontent.= '<input type="text" id="freesearch" name="freesearch" style="width:100%;" value="'.$search_free.'">';  // Free form search   		
   	}


   	$flip = 0;

   	if ($jylam_mode)
   	{
   		$topcontent.='<table width=100%><tr>';
		foreach ($criterias as $name=>$criteria)
		{
			$topcontent.= '<th><b>'.$name.'</b></th>';
		}   		
   		$topcontent.='</tr><tr>';
   	}

    foreach ($criterias as $name=>$criteria)
    {
	   	if ($jylam_mode)
	   	{	
			$box_content ='<select name="'.$name.'" multiple size='.min(3,sizeof($criteria)).' style="width:100%;text-align:center;">';
		}
		else
		{
			$box_content ='<label for="'.$name.'"><b>'.$name.'</b></label><br>';
			$box_content.='<select name="'.$name.'" multiple size='.sizeof($criteria).' style="width:100%;text-align:center;overflow:hidden;">';		
		}		
    	uksort($criteria,'strcasecmp');
	    foreach ($criteria as $criteria_name=>$criteriaValue)
	    {
	    	$filtered_criteria_name=strtr($criteria_name,$unwanted_array);
	    	$box_content.='<option ';

    		if ($name=='content')
    		{
    			if ($criteria_name==$search_content)
    			{
		    		$box_content.=' selected ';   				
    			}
    		}
    		else
    		{ 			
	    		if ($name=='language')
	    		{
	    			/*
	    			print($criteria_name);
	    			print("<br>");
	    			print($filtered_criteria_name);
	    			print("<br>");
	    			print($search_criteria[$name]);
	    			print("<br>");
	    			*/
	    			$criteria_name=$languages[$criteria_name];
	    		}
	    		
				if (in_array($filtered_criteria_name, $search_criteria[$name])) 
		    	{
		    		$box_content.=' selected ';    		
		    	}

		    	if ($criteriaValue)
		    	{
		    		$box_content.=' selected ';    		
		    	}
    		}
	    	$box_content.='value ="'.$filtered_criteria_name.'">'.$criteria_name;
	    	$box_content.='</option>';
	    }
	    $box_content.='</select>';
	   	$box_content.='<br>';  

	   	if ($jylam_mode)
	   	{
	   		$topcontent.='<td valign="top">'.$box_content.'</td>';
	   	}
	   	else
	   	{   		
			$flip = 1-$flip;
		   	if ($flip)
		   	{
		   		$leftcontent.=$box_content;
		   	}
		   	else
		   	{
		   		$rightcontent.=$box_content;
		   	}
	   	}
    }
   	if ($jylam_mode)
   	{
   		$topcontent.='</tr></table>';
   	}

   	$leftcontent.='</center>';
   	$rightcontent.='</center>';

	$GLOBALS['content']      =$content;
	$GLOBALS['leftcontent']  =$leftcontent;
	$GLOBALS['rightcontent'] =$rightcontent;
	$GLOBALS['topcontent']   =$topcontent;
	$GLOBALS['title']        ="Books";
?>

