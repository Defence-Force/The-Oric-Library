
<?php
	// Define the books
	include 'books.php';

	function AddArray(&$entry,$value_to_add=1)
	{
		if (isset($entry))
		{
			$entry+=$value_to_add;
		}
		else
		{
			$entry=$value_to_add;
		}
	}

	$totals=array();
	$totals_downloadable=array();

	$total_entries=0;
	$total_entries_downloadable=0;

	$formatter = new NumberFormatter('en_US', NumberFormatter::PERCENT);
	//print $formatter->format(.45);

	$countries=array();
	$years=array();

    $current_entry=0;
	foreach ($books as $book)
	{	
		if (!empty($book))
		{
			++$total_entries;

			// Available
			$downloadable=empty($book['download'])?0:1;
			$total_entries_downloadable+=$downloadable;

			$type=$book['type'];
			AddArray($totals[$type]);
			AddArray($totals_downloadable[$type],$downloadable);

			// Country
			$language=$book['language'];
			if (!empty($language))
			{
	    		$splitLanguage=explode("|",$language);
    			foreach ($splitLanguage as $language)
    			{
					AddArray($countries[$language]);
    			}
			}

			// Year
			$year=$book['year'];
			if (!empty($year))
			{
				AddArray($years[$year]);
			}

		}
    }	
	// 405
	// - 109 / 26
	// - 41
	// - 255

	$content.= '<div class="article_title">Statistics (WORK IN PROGRESS)</div>';

	$content.= '<div class="text">';
	$content.= 'Have you ever wondered how many books, magazines about Oric computers were published, or in which countries the machine could be found? Here are some answers for you.';
	$content.= "</div>";		

	$content.= '<ul>';

	//
	// Entries
	//
	$content.= '<li>Total number of entries: '.$total_entries.' ('.$formatter->format($total_entries_downloadable/$total_entries).' <a href="/index.php?content=any&page=books&sort_by=name&content=available">available</a> for download)';
	$content.= '<ul>';	
	$content.= '<li>Number of books: ';
	$content.= '<a href="/index.php?content=any&page=books&sort_by=name&type=book">'.$totals['book'].'</a>';
	$content.= ' ('.$formatter->format($totals_downloadable['book']/$totals['book']).' <a href="/index.php?content=any&page=books&sort_by=name&type=book&content=available">available</a> for download)';

	$content.= '<li>Number of manuals: ';
	$content.= '<a href="/index.php?content=any&page=books&sort_by=name&type=manual">'.$totals['manual'].'</a>';
	$content.= ' ('.$formatter->format($totals_downloadable['manual']/$totals['manual']).' <a href="/index.php?content=any&page=books&sort_by=name&type=manual&content=available">available</a> for download)';

	$content.= '<li>Number of magazines: ';
	$content.= '<a href="/index.php?content=any&page=books&sort_by=name&type=magazine">'.$totals['magazine'].'</a>';
	$content.= ' ('.$formatter->format($totals_downloadable['magazine']/$totals['magazine']).' <a href="/index.php?content=any&page=books&sort_by=name&type=magazine&content=available">available</a> for download)';

	$content.= '<li>Number of datasheets: ';
	$content.= '<a href="/index.php?content=any&page=books&sort_by=name&type=datasheet">'.$totals['datasheet'].'</a>';
	$content.= ' ('.$formatter->format($totals_downloadable['datasheet']/$totals['datasheet']).' <a href="/index.php?content=any&page=books&sort_by=name&type=datasheet&content=available">available</a> for download)';

	$content.= '<br><br></ul>';	

	//
	// Languages
	//
	arsort($countries); // Sort Array in Descending Order, According to Value
	$content.= '<li>Total number of countries: '.sizeof($countries);
	$content.= '<ul>';
	$last_count=-1;
	foreach ($countries as $country => $count) 
	{	
		if ($count != $last_count)
		{
			$last_count=$count;
			$content.= '<li> '.$count.': ';
		}
		else
		{
			$content.= ', ';
		}
		$content.= '<a href="/index.php?content=any&page=books&sort_by=name&language='.$country.'">';
		$content.= '<img style="margin:2px;box-shadow:2px 2px 3px #404040bd;" src="pics/flags/'.$country.'.png" title="Language: '.$languages[$country].'">';
		//$content.= '<img src="pics/flags/'.$country.'.png" title="'.$country.'"> ';
		$content.= '</a>';
	}
	$content.= '<br><br></ul>';	

	//
	// Year
	//
	ksort($years);
	$year_max=max($years);

	$content.= '<li>Number of entries per year: ';
	$counter=0;
	$content.='<table style="border-spacing:0px">';
	foreach ($years as $year => $count) 
	{	
		$content.=' <tr>';
		$content.= '<td><b>'.$year.':</b></td>';
		$content.= '<td>'.$count.'</td>';
		$content.= '<td width=100%>';
		$content.= '<a href="/index.php?content=any&page=books&sort_by=name&year='.$year.'">';
		$color='hsl('.$counter*360/sizeof($years).',80%,64%)';
		//$style='border:none;margin-top:2px;margin-bottom:2px;background-color:'.$color.';box-shadow:2px 2px #404040bd;color:'.$color.';';
		$style='margin-top:2px;margin-bottom:2px;background-color:'.$color.';box-shadow:2px 2px #404040bd;color:'.$color.';';
		$content.= '<hr align=left style="'.$style.'" size=15 width='.$count*100/$year_max.'% noshade>';		// hsl(9, 100%, 64%)  https://www.w3schools.com/html/html_colors_hsl.asp
		$content.= '</a>';
		$content.= '</td>';
		$content.=' </tr>';

		++$counter;
	}
	$content.='</table>';

	$content.= '</ul>';	


	$GLOBALS['content']      =$content;
	$GLOBALS['leftcontent']  =$leftcontent;
	$GLOBALS['rightcontent'] =$rightcontent;
	$GLOBALS['topcontent']   =$topcontent;
	$GLOBALS['title']        ="Statistics";
