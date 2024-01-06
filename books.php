<?php
	$languages=array(
		'au' => 'Australian', 
		'bg' => 'Bulgarian', 
		'be' => 'Belgian (French)', 
		'de' => 'German', 
		'dk' => 'Danish', 
		'en' => 'English', 
		'es' => 'Spanish', 
		'fr' => 'French', 
		'jp' => 'Japanese', 
		'mk' => 'Macedonian', 
		'nl' => 'Dutch', 
		'no' => 'Norwegian', 
		'se' => 'Swedish', 
		'si' => 'Slovenian', 
		'hr' => 'Croatian', 
		'sr' => 'Serbian', 
	);


	$books=array(

		// -------------------------- ITALIAN stuff:
		// 030 MCMicrocomputer, page 60, Oric 1 - https://issuu.com/adpware/docs/mc030?fbclid=IwAR3-7E6-EzEHpoJjPx3J5xvHSbn1_YfF-3zouAyp2ph5DCowX1OJ_00ZnZo
		// List                                 - http://www.dizionariovideogiochi.it/doku.php?id=list_rivista

		// -------------------------- Generic Stuff with Oric References
		array(
			'type' => 'generic',
			'name' => "Personal Computer News",
			'issue' => 'No 80',
			'year' => '1984', 'month' => 9,
			'language' => 'en',
			'cover' => 'personal_computer_news/personal_computer_news_1984-09_80-OricContent.jpg',
			'download' => array('en' => "personal_computer_news/personal_computer_news_1984-09_80-OricContent.pdf"),
			'description' => array(
				'fr' => "Note: Ce document ne contient que les pages consacrées à l'Oric, ainsi que la table des matières et couverture.",
				'en' => "Note: This document only contains pages related to the Oric, as well as the table of content and cover."),
		),

		array(
			'type' => 'generic',
			'name' => "TV Gamer",
			'issue' => "June'84",
			'year' => '1984', 'month' => 6,
			'language' => 'en',
			'cover' => 'tv_gamer/tv_gamer_1984_06.jpg',
			'download' => array('en' => "tv_gamer/tv_gamer_1984_06-OricContent.pdf"),
			'description' => array(
				'fr' => "Note: Ce document ne contient que les pages consacrées à l'Oric, ainsi que la table des matières et couverture.",
				'en' => "Note: This document only contains pages related to the Oric, as well as the table of content and cover."),
		),


		// -------------------------- Tansoft/Microtan Stuff with Oric References

		array('type' => 'generic','name' => "TUG News"    ,'publisher' => 'Tangerine User Group','language' => 'en','issue' => 'No 29 - February' ,'year' => '1983', 'month' =>  2,
			'cover' => 'tangerine_user_group_news/TUGNews-29.jpg', 'download' => array('en' => "tangerine_user_group_news/TUGNews-29.pdf"),
			'description' => array(
				'fr' => "L'éditorial de cette revue dédiée au Microtan présente l'Oric-1.",
				'en' => "This Microtan newsletter's Editorial is presenting the Oric-1."),),

		array('type' => 'generic','name' => "TUG News"    ,'publisher' => 'Tangerine User Group','language' => 'en','issue' => 'No 30 - March' ,'year' => '1983', 'month' =>  3,
			'cover' => 'tangerine_user_group_news/TUGNews-30.jpg', 'download' => array('en' => "tangerine_user_group_news/TUGNews-30.pdf"),
			'description' => array(
				'fr' => "Ce numéro de cette revue dédiée au Microtan parle de la perte de garantie de l'Oric 1 si vous ouvrez le boitier.",
				'en' => 'This issue of the Microtan newsletter discusses if opening the Oric 1 voids the warranty.'),),

		array('type' => 'generic','name' => "TUG News"    ,'publisher' => 'Tangerine User Group','language' => 'en','issue' => 'No 31 - April' ,'year' => '1983', 'month' =>  4,
			'cover' => 'tangerine_user_group_news/TUGNews-31.jpg', 'download' => array('en' => "tangerine_user_group_news/TUGNews-31.pdf"),
			'description' => array(
				'fr' => "Ce numéro de cette revue dédiée au Microtan examine l'Oric 1 en détail.",
				'en' => 'This issue of the Microtan newsletter contains a complete review of the Oric 1.'),),

		array('type' => 'generic','name' => "TUG News"    ,'publisher' => 'Tangerine User Group','language' => 'en','issue' => 'No 32 - May' ,'year' => '1983', 'month' =>  5,
			'cover' => 'tangerine_user_group_news/TUGNews-32.jpg', 'download' => array('en' => "tangerine_user_group_news/TUGNews-32.pdf"),
			'description' => array(
				'fr' => "Ce numéro de cette revue dédiée au Microtan explique le fonctionnement du système d'attributs graphiques.",
				'en' => 'This issue of the Microtan newsletter explains how the Oric serial-attribute system works.'),),

		array('type' => 'generic','name' => "TUG News"    ,'publisher' => 'Tangerine User Group','language' => 'en','issue' => 'No 33 - June' ,'year' => '1983', 'month' =>  6,
			'cover' => 'tangerine_user_group_news/TUGNews-33.jpg', 'download' => array('en' => "tangerine_user_group_news/TUGNews-33.pdf"),
			'description' => array(
				'fr' => "Ce numéro de cette revue dédiée au Microtan contient un Ode à l'Oric, discutte les problèmes de certains utilisateurs et finalement annonce les modèles NTSC pour les marchés Japonais et Américain.",
				'en' => 'This issue of the Microtan newsletter contains an Ode to Oric, discusses various issues encountered by users, and announces the NTSC Oric for the Japan and US market.'),),

		array('type' => 'generic','name' => "TUG News"    ,'publisher' => 'Tangerine User Group','language' => 'en','issue' => 'No 34 - Juillet' ,'year' => '1983', 'month' =>  7,
			'cover' => 'tangerine_user_group_news/TUGNews-34.jpg', 'download' => array('en' => "tangerine_user_group_news/TUGNews-34.pdf"),
			'description' => array(
				'fr' => "Ce numéro de cette revue dédiée au Microtan contient un listing de jeu pour Oric (Escape), une démonstration des attributs, une compétision d'effects sonores, test de la 'console oric', et bien plus.",
				'en' => 'This issue of the Microtan newsletter contains a type-in game for the Oric (Escape), an attribute demo, a sound effect competition, reviews the Oric console, and more.'),),

		array('type' => 'generic','name' => "TUG News"    ,'publisher' => 'Tangerine User Group','language' => 'en','issue' => 'No 35 - August' ,'year' => '1983', 'month' =>  8,
			'cover' => 'tangerine_user_group_news/TUGNews-35.jpg', 'download' => array('en' => "tangerine_user_group_news/TUGNews-35.pdf"),
			'description' => array(
				'fr' => "Ce numéro de cette revue dédiée au Microtan contient énormément de contenur Oric, des programmes, explications techniques, nouveau matériel, etc...",
				'en' => 'This issue of the Microtan newsletter contains a lot of Oric related content, from source code to technical descriptions, new hardware, etc...'),),

		// -------------------------- Publicity
		array(
			'type' => 'publicity',
			'name' => "Oric System",
			'publisher' => 'Oric International',
			'language' => 'en',
			'cover' => 'publicity/oric_system.jpg',
			'download' => array('en' => "publicity/oric_system.pdf"),
			'description' => array(
				'fr' => "Un document publicitaire de Oric International présentant l'Oric Atmos et ses périphériques.",
				'en' => 'A marketing document from Oric International presenting the Oric Atmos computer system.'),
		),

		array(
			'type' => 'publicity',
			'name' => "Oric Help - A beginner's guide to the Oric Atmos",
			'publisher' => 'Oric International',
			'language' => 'en',
			'cover' => 'publicity/oric_help.jpg',
			'download' => array('en' => "publicity/oric_help.pdf"),
			'description' => array(
				'fr' => "Un document publicitaire de Oric International expliquant comment utiliser l'Oric Atmos.",
				'en' => 'A marketing document from Oric International explaining how to use the Oric Atmos.'),
		),

		array(
			'type' => 'publicity',
			'name' => "Oric Usable Memory (black)",
			'publisher' => 'Oric International',
			'language' => 'en',
			'cover' => 'publicity/oric_usable_memory-black.jpg',
			'download' => array('en' => "publicity/oric_usable_memory-black.png"),
			'description' => array(
				'fr' => "Un document publicitaire de Oric International comparant la mémoire utilisable sur différentes machines comparé à l'Oric Atmos.",
				'en' => "A marketing document from Oric International comparing the amount of usable memory of various computer system compared to the Oric Atmos"),
		),

		array(
			'type' => 'publicity',
			'name' => "Oric Usable Memory (white)",
			'publisher' => 'Oric International',
			'language' => 'en',
			'cover' => 'publicity/oric_usable_memory-white.jpg',
			'download' => array('en' => "publicity/oric_usable_memory-white.png"),
			'description' => array(
				'fr' => "Un document publicitaire de Oric International comparant la mémoire utilisable sur différentes machines comparé à l'Oric Atmos.",
				'en' => "A marketing document from Oric International comparing the amount of usable memory of various computer system compared to the Oric Atmos"),
		),

		array(
			'type' => 'publicity',
			'name' => "Three cures for amnesia.",
			'publisher' => 'Oric International',
			'language' => 'en',
			'cover' => 'publicity/three_cures_for_amnesia.jpg',
			'download' => array('en' => "publicity/three_cures_for_amnesia.png"),
			'description' => array(
				'fr' => "Un document publicitaire de Oric International comparant la mémoire utilisable sur différentes machines comparé à l'Oric Atmos.",
				'en' => "A marketing document from Oric International comparing the amount of usable memory of various computer system compared to the Oric Atmos"),
		),

		array(
			'type' => 'publicity',
			'name' => "The flexible computer system for the future.",
			'publisher' => 'Tangerine Computer',
			'language' => 'en',
			'cover' => 'publicity/the_flexible_computer_system_for_the_future.jpg',
			'download' => array('en' => "publicity/the_flexible_computer_system_for_the_future.png"),
			'description' => array(
				'fr' => "Un document de Tangerine Computer Systems Ltd présentant l'Oric 1, avec un bordereau de commande.",
				'en' => "A document from Tangerine Computer Systems Ltd presenting the Oric 1, including how to order it."),
		),

		array(
			'type' => 'publicity',
			'name' => "The Oric 1: The real computer system",
			'publisher' => 'Micro General',
			'year' => '1983',
			'language' => 'en',
			'cover' => 'publicity/micro_general-the_oric1_the_real_computer_system.jpg',
			'download' => array('en' => "publicity/micro_general-the_oric1_the_real_computer_system.png"),
			'description' => array(
				'fr' => "Une publicité de Micro General pour le système Oric 1",
				'en' => "An advertisement from Micro General for the Oric 1 computer system"),
		),

		array(
			'type' => 'publicity',
			'name' => "Test drive a disk drive",
			'publisher' => 'Tansoft Ltd',
			'language' => 'en',
			'cover' => 'publicity/test_drive_a_disc_drive.jpg',
			'download' => array('en' => "publicity/test_drive_a_disc_drive.png"),
			'description' => array(
				'fr' => "Un document de Tansoft expliquant pourquoi un Micro Disc Oric est mieux qu'un lecteur de cassettes ",
				'en' => "A document from Tansoft explaining why a Oric Micro Disc is better than a tape deck"),
		),


		array(
			'type' => 'publicity',
			'name' => "Micro Disc Technical Specifications",
			'publisher' => 'Tansoft Ltd',
			'language' => 'en',
			'cover' => 'publicity/micro_disc_technical_specifications.jpg',
			'download' => array('en' => "publicity/micro_disc_technical_specifications.png"),
			'description' => array(
				'fr' => "Un document de Tansoft présentant les caractéristiques du lecteur Micro Disc",
				'en' => "A document from Tansoft with the specifications of the Micro Disc drive"),
		),

		array(
			'type' => 'publicity',
			'name' => "The Computer Challenge",
			'publisher' => 'Oric International',
			'language' => 'en',
			'cover' => 'publicity/the_computer_challenge.jpg',
			'download' => array('en' => "publicity/the_computer_challenge.png"),
			'description' => array(
				'fr' => "Un document publicitaire de Oric International vantant les capacités de l'Oric 1",
				'en' => "A marketing document from Oric International showing the capabilities of the Oric 1"),
		),

		array(
			'type' => 'publicity',
			'name' => "Oric MCP 40 Colour Printer and Oric 1",
			'publisher' => 'Oric International',
			'language' => 'en',
			'cover' => 'publicity/oric_mcp40_colour_printer_oric1.jpg',
			'download' => array('en' => "publicity/oric_mcp40_colour_printer_oric1.png"),
			'description' => array(
				'fr' => "Un document publicitaire de Oric International présentant l'imprimante Oric MCP 40 et l'Oric 1",
				'en' => "A marketing document from Oric International showing the Oric MCP 40 and the Oric 1"),
		),

		array(
			'type' => 'publicity',
			'name' => "Revelations",
			'publisher' => 'Oric Computers PTY Ltd',
			'language' => 'au',
			'cover' => 'publicity/revelations_oric_australia.jpg',
			'download' => array('au' => "publicity/revelations_oric_australia.png"),
			'description' => array(
				'fr' => "Un document publicitaire de Oric pour le marché Australien publié dans le Australian Personal Computer de Novembre 1983",
				'en' => "A marketing document from Oric for the Australian market published in the November 1983 issue of Australian Personal Computer"),
		),

		array(
			'type' => 'publicity',
			'name' => "Tomorrow's micro... today!",
			'publisher' => 'Odessa',
			'language' => 'jp',
			'cover' => 'publicity/tomorrows_micro_today-japan.jpg',
			'download' => array('jp' => "publicity/tomorrows_micro_today-japan.jpg"),
			'description' => array(
				'fr' => "Un document publicitaire présentant l'Oric 1 pour le marché Japonais",
				'en' => "A marketing document presenting the Oric 1 to the Japanese market"),
		),

		array(
			'type' => 'publicity',
			'name' => "Odessa mail system",
			'publisher' => 'Odessa',
			'language' => 'jp',
			'cover' => 'publicity/odessa_mail_system-japan.jpg',
			'download' => array('jp' => "publicity/odessa_mail_system-japan.jpg"),
			'description' => array(
				'fr' => "Un document présentant l'Oric 1 pour le marché Japonais, avec un bon de commande pour la machine et l'imprimante",
				'en' => "A document presenting the Oric 1 to the Japanese market, including some ordering slip for the computer and printer"),
		),

		// -------------------------- Datasheet
		array(
			'type' => 'datasheet',
			'name' => "Hitachi Compact Floppy Disk Drive Model HFD305S",
			'publisher' => 'Hitachi',
			'language' => 'en',
			'cover' => 'datasheet/hitachi_compact_floppy_disk_drive_model_hfd305s.jpg',
			'download' => array('en' => "datasheet/hitachi_compact_floppy_disk_drive_model_hfd305s.pdf"),
			'description' => array(
				'fr' => 'Les lecteurs Hitachi 3" sont souvent présents dans les lecteurs Oric Microdisc. Le HFD305S est le modèle simple-face, et le HFD305D est un modèle double-face.',
				'en' => 'The 3" Hitachi disk drives are often present in the Oric Microdisc units. The HFD305S is a single-sided model, the HFD305D is the double-sided version.'),
		),

		array(
			'type' => 'datasheet',
			'name' => "General Instrument AY-3-8910/8912 Programmable Sound Generator",
			'publisher' => 'General Instrument',
			'language' => 'en',
			'cover' => 'datasheet/general_instrument_ay-3-8912.jpg',
			'download' => array('en' => "datasheet/general_instrument_ay-3-8912.pdf"),
			'description' => array(
				'fr' => "Les Oric sont équipé d'un générateur de son AY-3-8912 de chez General Instrument, servant a produire le son mais aussi d'interface pour les ports imprimante et clavier",
				'en' => 'The Oric is equiped with a General Instrument AY-3-8912 PSG chip, used to play sound, but also to interface the printer and keyboard.'),
		),

		array(
			'type' => 'datasheet',
			'name' => "MEA8000 Speech Synthesizer",
			'publisher' => 'Mullard',
			'year' => '1981', 'month' => 12,
			'language' => 'en',
			'cover' => 'datasheet/mea8000_datasheet-mullard.jpg',
			'download' => array('en' => "datasheet/mea8000_datasheet-mullard.pdf"),
			'description' => array(
				'fr' => "Le MEA8000 est le composant principal du synthétiseur vocal Oric Francais de TMPI",
				'en' => 'The MEA8000 is the main componant used by the French speaking Oric speech synthesizer released by TMPI'),
		),

		array(
			'type' => 'datasheet',
			'name' => "MEA8000 Speech Synthesizer",
			'publisher' => 'Signetics',
			'year' => '1985', 'month' => 9,
			'language' => 'en',
			'cover' => 'datasheet/mea8000_datasheet-signetics.jpg',
			'download' => array('en' => "datasheet/mea8000_datasheet-signetics.pdf"),
			'description' => array(
				'fr' => "Le MEA8000 est le composant principal du synthétiseur vocal Oric Francais de TMPI",
				'en' => 'The MEA8000 is the main componant used by the French speaking Oric speech synthesizer released by TMPI'),
		),

		array(
			'type' => 'datasheet',
			'name' => "Oric-1 and Atmos motherboard schematics",
			'publisher' => 'Oric International',
			'language' => 'en',
			'cover' => 'datasheet/oric_motherboard_schematics.jpg',
			'download' => array('en' => "datasheet/oric_motherboard_schematics.png"),
			'description' => array(
				'fr' => "Il existe plusieur versions de la carte mère des Oric 1 et Atmos, mais il y a peu de différences.",
				'en' => "There was multiple revisions of the Oric 1 and Atmos motherboard, but the differences were minor."),
		),

		array(
			'type' => 'datasheet',
			'name' => "Oric Telestrat motherboard schematics",
			'publisher' => 'Oric International',
			'language' => 'fr',
			'cover' => 'datasheet/telestrat_motherboard_schematics.jpg',
			'download' => array('fr' => "datasheet/telestrat_motherboard_schematics.pdf"),
			'description' => array(
				'fr' => "Cette version propre du schéma de la carte mère du Téléstrat a été retracée par Fred.",
				'en' => "This version of the Telestrat motherboard schematics was cleanly redrawn by Fred."),
		),

		array(
			'type' => 'datasheet',
			'name' => "VIA 6522 (Synertek SY6522)",
			'publisher' => 'Synertek',
			'language' => 'en',
			'cover' => 'datasheet/synertek_sy6522_via.jpg',
			'download' => array('fr' => "datasheet/synertek_sy6522_via.pdf"),
			'description' => array(
				'fr' => "Le VIA 6522 sert a interfacer avec des périphériques externes, et fourni aussi des compteurs. Certains Orics sont équipés de versions Rockwell, d'autres de chez Synertek",
				'en' => "The VIA 6522 is designed to interface with external peripherals, and provide some timers. Some Orics are equiped with a Rockwell model, other with a Synertek."),
		),

		array(
			'type' => 'datasheet',
			'name' => "VIA 6522 (Rockwell R65222A)",
			'publisher' => 'Rockwell',
			'language' => 'en',
			'cover' => 'datasheet/rockwell_r6522_via.jpg',
			'download' => array('fr' => "datasheet/rockwell_r6522_via.pdf"),
			'description' => array(
				'fr' => "Le VIA 6522 sert a interfacer avec des périphériques externes, et fourni aussi des compteurs. Certains Orics sont équipés de versions Rockwell, d'autres de chez Synertek",
				'en' => "The VIA 6522 is designed to interface with external peripherals, and provide some timers. Some Orics are equiped with a Rockwell model, other with a Synertek."),
		),

		array(
			'type' => 'datasheet',
			'name' => "Western Digital FD1790 Floppy Disc Controller",
			'publisher' => 'Western Digital',
			'language' => 'en',
			'cover' => 'datasheet/western_digital_fd1793.jpg',
			'download' => array('fr' => "datasheet/western_digital_fd1793.pdf"),
			'description' => array(
				'fr' => "Le FD1793 est utilisé dans les lecteurs de disquettes Microdisc et Cumana (Les modèles Jasmins utilisent la variante 1773)",
				'en' => "The FD1793 is used in the Microdisc and Cumana floppy disk drives (Jasmin disc drives are using a 1773 variant)."),
		),

	// Many Oric books on:
	// - http://www.skarstad.net/oric/books.html
	// - https://collection.onceuponabyte.org/item/search/oric?page=1	  Including Nova 64
	// - https://www.oric.org/ceomag_download/?action=&id=&exppath=/2006/disk/cd_2006/Complement   <- pdfs

    // - TUG (Tangerine USer Group)
	// - Klubb Oric Norden (Dane)
	// - Your Oric
	// - Oric Notes
	// - Oric Users Info


		/*
+ HARDWARE(5 entries - 1 downloadable)		
+ TELESTRAT MANUALS(3 entries)
+ PERIPHERALS (1 entries - 1 downloadable)
+ ADVANCED PROGRAMMING(9 entries - 1 downloadable)
+ 6502 PROGRAMMING(10 entries)
+ DISK OPERATING SYSTEM (6 entries - 4 downloadables)
+ Magazine-OricOwner
MANUALS (24 entries - 2 downloadables)
PROGRAMMING IN BASIC(42 entries)
MAGAZINES(11 entries)
		array(
		),
		array(
		),
		array(
		),
		array(
		),
		array(
		),
		array(
		),
		array(
		),
		array(
		),
		array(
		),
		array(
		),
		array(
		),
		array(
		),
		array(
		),
		*/
/*
		array(
			'cover' => 'book_le_tdos.jpg',
	'type' => 'book',
			'name' => "Le T.DOS et ses fichiers",
			'language' => 'fr',
			'author' => 'Pierre Marc Beaufils|Christian Arnaud',
			'year' => '1984',
			'publisher' => 'T.R.A.N.',
			'download' => array(
				'fr' => "Le_T-DOS_et_ses_fichiers_pour_Oric-1_et_Atmos.pdf"),
			'description' => array(
				'fr' => "Ce livre est le manuel de référence permetant d'utiliser le <b>Tran Disk Operating System</b> 
Le TDOS est le système d'exploitation livré avec les lecteur de disquette JASMIN. 
Tous les domaines sont couverts, incluant des explications sur le formatage, le système de stockage
des fichiers, comment invoquer le DOS en utilisant du code assembleur, comment trier les données,
accéder aux fichiers, etc...",
				'en' => "This books is the reference manual for using the <b>Tran Disk Operating System</b> 
The TDOS is the DOS that came with the JASMIN drives. 
Seems to cover clearly all the disk domain, including what's formating, filesystem, using assembly language,
sorts, file access, and so on... "),
		),
*/
		// -------------------------- Oric Feuillet / Le Petit Memoric
		// Author: "R. S."
		// Sylviane, Christophe, Vinciane, Michael, Rodolphe, Axel, Patrice, Rudi, Aesloos 
		array('type' => 'magazine','name' => "Oric Feuillet"    ,'publisher' => 'R.S.','language' => 'be','issue' => 'No 1 - 15 Janvier' ,'year' => '1987', 'month' =>  1,'cover' => 'oric_feuillet/oric_feuillet_1.jpg', 'download' => array('be' => "oric_feuillet/oric_feuillet_1.pdf"),),
		array('type' => 'magazine','name' => "Oric Feuillet"    ,'publisher' => 'R.S.','language' => 'be','issue' => 'No 2 - 30 Janvier' ,'year' => '1987', 'month' =>  1.5,'cover' => 'oric_feuillet/oric_feuillet_2.jpg', 'download' => array('be' => "oric_feuillet/oric_feuillet_2.pdf"),),
		array('type' => 'magazine','name' => "Le Petit Mem'Oric",'publisher' => 'R.S.','language' => 'be','issue' => 'No 3 - Février'    ,'year' => '1987', 'month' =>  2,'cover' => 'oric_feuillet/oric_feuillet_3_le_petit_memoric.jpg', 'download' => array('be' => "oric_feuillet/oric_feuillet_3_le_petit_memoric.pdf"),),
		array('type' => 'magazine','name' => "Le Petit Memoric" ,'publisher' => 'R.S.','language' => 'be','issue' => 'No 4 - Mars/Avril' ,'year' => '1987', 'month' =>  2,'cover' => 'oric_feuillet/oric_feuillet_4_le_petit_memoric.jpg', 'download' => array('be' => "oric_feuillet/oric_feuillet_4_le_petit_memoric.pdf"),),

		// -------------------------- CCO Bulletin (Carolo Club Oric International)
		array('type' => 'magazine','name' => "CCO Bulletin"    ,'publisher' => 'Carolo Club Oric','language' => 'be','issue' => 'No 1 - Janvier/Février/Mars' ,'year' => '1986', 'month' =>  1,'cover' => 'cco_bulletin/cco_bulletin_1.jpg', 'download' => array('be' => "cco_bulletin/cco_bulletin_1.pdf"),),
		array('type' => 'magazine','name' => "CCO Bulletin"    ,'publisher' => 'Carolo Club Oric','language' => 'be','issue' => 'No 2 - Avril-Mai-Juin'       ,'year' => '1986', 'month' =>  4,'cover' => 'cco_bulletin/cco_bulletin_2.jpg', 'download' => array('be' => "cco_bulletin/cco_bulletin_2.pdf"),),


		// -------------------------- Club Discoric --------------------------------------
		array('type' => 'magazine','name' => "Club Discoric",'language' => 'fr','issue' => 'No 2 Mars' ,'year' => '1989', 'month' =>  3,'cover' => 'club_discoric/cdo_1989_02_fr.jpg',),//'download' => array('en' => "club_discoric/cdo_1989_02_fr.pdf"),),

		array('type' => 'magazine','name' => "Club Discoric",'language' => 'en','issue' => 'Number 3 May' ,'year' => '1989', 'month' =>  5,'cover' => 'club_discoric/cdo_1989_03_en.jpg',),//'download' => array('en' => "club_discoric/cdo_1989_03_en.pdf"),),
		array('type' => 'magazine','name' => "Club Discoric",'language' => 'en','issue' => 'Number 4-5 August-Sept' ,'year' => '1989', 'month' =>  8,'cover' => 'club_discoric/cdo_1989_04-05_en.jpg',),//'download' => array('en' => "club_discoric/cdo_1989_04-05_en.pdf"),),
		array('type' => 'magazine','name' => "Club Discoric",'language' => 'en','issue' => 'Number 6-7 Nov-Dec' ,'year' => '1989', 'month' =>  11,'cover' => 'club_discoric/cdo_1989_06-07_en.jpg',),//'download' => array('en' => "club_discoric/cdo_1989_06-07_en.pdf"),),
		array('type' => 'magazine','name' => "Club Discoric",'language' => 'en','issue' => 'Number 8 Feb/March' ,'year' => '1990', 'month' =>  11,'cover' => 'club_discoric/cdo_1990_08_en.jpg',),//'download' => array('en' => "club_discoric/cdo_1990_08_en.pdf"),),

		// -------------------------- JEO Mag
		array('type' => 'magazine','name' => "JEO-mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 1 Mars' ,'year' => '1990', 'month' =>  3,'cover' => 'club_europe_oric/jeo_mag_1990_01_fr.jpg',),//'download' => array('en' => "club_europe_oric/jeo_mag_1990_01_fr.pdf"),),
		array('type' => 'magazine','name' => "JEO-mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 2 Mai ' ,'year' => '1990', 'month' =>  5,'cover' => 'club_europe_oric/jeo_mag_1990_02_fr.jpg',),//'download' => array('en' => "club_europe_oric/jeo_mag_1990_02_fr.pdf"),),
		array('type' => 'magazine','name' => "JEO-mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 3 Juin ' ,'year' => '1990', 'month' =>  6,'cover' => 'club_europe_oric/jeo_mag_1990_03_fr.jpg',),//'download' => array('en' => "club_europe_oric/jeo_mag_1990_03_fr.pdf"),),
		array('type' => 'magazine','name' => "JEO-mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 4 Juillet ' ,'year' => '1990', 'month' =>  7,'cover' => 'club_europe_oric/jeo_mag_1990_04_fr.jpg',),//'download' => array('en' => "club_europe_oric/jeo_mag_1990_04_fr.pdf"),),
		array('type' => 'magazine','name' => "JEO-mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 5-6 Aout/Septembre ' ,'year' => '1990', 'month' =>  8,'cover' => 'club_europe_oric/jeo_mag_1990_05-06_fr.jpg',),//'download' => array('en' => "club_europe_oric/jeo_mag_1990_05-06_fr.pdf"),),
		array('type' => 'magazine','name' => "JEO-mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 7 Decembre' ,'year' => '1990', 'month' =>  12,'cover' => 'club_europe_oric/jeo_mag_1990_07_fr.jpg',),//'download' => array('en' => "club_europe_oric/jeo_mag_1990_07_fr.pdf"),),  // Date not verified

		array('type' => 'magazine','name' => "JEO-mag",'publisher' => 'Club Europe Oric','language' => 'en','issue' => 'No 1 March' ,'year' => '1990', 'month' =>  3,'cover' => 'club_europe_oric/jeo_mag_1990_01_en.jpg',),//'download' => array('en' => "club_europe_oric/jeo_mag_1990_01_en.pdf"),),
		array('type' => 'magazine','name' => "JEO-mag",'publisher' => 'Club Europe Oric','language' => 'en','issue' => 'No 2 May ' ,'year' => '1990', 'month' =>  5,'cover' => 'club_europe_oric/jeo_mag_1990_02_en.jpg',),//'download' => array('en' => "club_europe_oric/jeo_mag_1990_02_en.pdf"),),
		array('type' => 'magazine','name' => "JEO-mag",'publisher' => 'Club Europe Oric','language' => 'en','issue' => 'No 3 June ' ,'year' => '1990', 'month' =>  6,'cover' => 'club_europe_oric/jeo_mag_1990_03_en.jpg',),//'download' => array('en' => "club_europe_oric/jeo_mag_1990_03_en.pdf"),),
		array('type' => 'magazine','name' => "JEO-mag",'publisher' => 'Club Europe Oric','language' => 'en','issue' => 'No 4 July ' ,'year' => '1990', 'month' =>  7,'cover' => 'club_europe_oric/jeo_mag_1990_04_en.jpg',),//'download' => array('en' => "club_europe_oric/jeo_mag_1990_04_en.pdf"),),
		array('type' => 'magazine','name' => "JEO-mag",'publisher' => 'Club Europe Oric','language' => 'en','issue' => 'No 5-6 August/September ' ,'year' => '1990', 'month' =>  8,'cover' => 'club_europe_oric/jeo_mag_1990_05-06_en.jpg',),//'download' => array('en' => "club_europe_oric/jeo_mag_1990_05-06_en.pdf"),),
		array('type' => 'magazine','name' => "JEO-mag",'publisher' => 'Club Europe Oric','language' => 'en','issue' => 'No 7 December' ,'year' => '1990', 'month' =>  12,'cover' => 'club_europe_oric/jeo_mag_1990_07_en.jpg',),//'download' => array('en' => "club_europe_oric/jeo_mag_1990_07_en.pdf"),),  // Date not verified

		// -------------------------- CEO Mag

		// ---------------- 
		// ----------------
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 81 Janvier'      ,'year' => '1997', 'month' =>  1, 'cover' => 'club_europe_oric/ceo_mag_1997_081.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 82 Février'      ,'year' => '1997', 'month' =>  2, 'cover' => 'club_europe_oric/ceo_mag_1997_082.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 83 Mars'         ,'year' => '1997', 'month' =>  3, 'cover' => 'club_europe_oric/ceo_mag_1997_083.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 84 Avril'        ,'year' => '1997', 'month' =>  4, 'cover' => 'club_europe_oric/ceo_mag_1997_084.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 85 Mai'          ,'year' => '1997', 'month' =>  5, 'cover' => 'club_europe_oric/ceo_mag_1997_085.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 86 Juin'         ,'year' => '1997', 'month' =>  6, 'cover' => 'club_europe_oric/ceo_mag_1997_086.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 87-88 Juillet-Aout'   ,'year' => '1997', 'month' =>  7, 'cover' => 'club_europe_oric/ceo_mag_1997_087-088.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 89 Septembre'    ,'year' => '1997', 'month' =>  9, 'cover' => 'club_europe_oric/ceo_mag_1997_089.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 90 Octobre'      ,'year' => '1997', 'month' => 10, 'cover' => 'club_europe_oric/ceo_mag_1997_090.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 91 Novembre'     ,'year' => '1997', 'month' => 11, 'cover' => 'club_europe_oric/ceo_mag_1997_091.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 92 Décembre'     ,'year' => '1997', 'month' => 12, 'cover' => 'club_europe_oric/ceo_mag_1997_092.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),

		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 93 Janvier'      ,'year' => '1998', 'month' =>  1, 'cover' => 'club_europe_oric/ceo_mag_1998_093.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 94 Février'      ,'year' => '1998', 'month' =>  2, 'cover' => 'club_europe_oric/ceo_mag_1998_094.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 95 Mars'         ,'year' => '1998', 'month' =>  3, 'cover' => 'club_europe_oric/ceo_mag_1998_095.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 96 Avril'        ,'year' => '1998', 'month' =>  4, 'cover' => 'club_europe_oric/ceo_mag_1998_096.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 97 Mai'          ,'year' => '1998', 'month' =>  5, 'cover' => 'club_europe_oric/ceo_mag_1998_097.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 98 Juin'         ,'year' => '1998', 'month' =>  6, 'cover' => 'club_europe_oric/ceo_mag_1998_098.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 99-100 Juillet-Aout'  ,'year' => '1998', 'month' =>  7, 'cover' => 'club_europe_oric/ceo_mag_1998_099-100.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 101 Septembre'   ,'year' => '1998', 'month' =>  9, 'cover' => 'club_europe_oric/ceo_mag_1998_101.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 102 Octobre'     ,'year' => '1998', 'month' => 10, 'cover' => 'club_europe_oric/ceo_mag_1998_102.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 103 Novembre'    ,'year' => '1998', 'month' => 11, 'cover' => 'club_europe_oric/ceo_mag_1998_103.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 104 Décembre'    ,'year' => '1998', 'month' => 12, 'cover' => 'club_europe_oric/ceo_mag_1998_104.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),

		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 105 Janvier'     ,'year' => '1999', 'month' =>  1, 'cover' => 'club_europe_oric/ceo_mag_1999_105.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 106 Février'     ,'year' => '1999', 'month' =>  2, 'cover' => 'club_europe_oric/ceo_mag_1999_106.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 107 Mars'        ,'year' => '1999', 'month' =>  3, 'cover' => 'club_europe_oric/ceo_mag_1999_107.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 108 Avril'       ,'year' => '1999', 'month' =>  4, 'cover' => 'club_europe_oric/ceo_mag_1999_108.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 109 Mai'         ,'year' => '1999', 'month' =>  5, 'cover' => 'club_europe_oric/ceo_mag_1999_109.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 110 Juin'        ,'year' => '1999', 'month' =>  6, 'cover' => 'club_europe_oric/ceo_mag_1999_110.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 111 Juillet'     ,'year' => '1999', 'month' =>  7, 'cover' => 'club_europe_oric/ceo_mag_1999_111.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 112 Septembre'   ,'year' => '1999', 'month' =>  9, 'cover' => 'club_europe_oric/ceo_mag_1999_112.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 113 Octobre'     ,'year' => '1999', 'month' => 10, 'cover' => 'club_europe_oric/ceo_mag_1999_113.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 114 Novembre'    ,'year' => '1999', 'month' => 11, 'cover' => 'club_europe_oric/ceo_mag_1999_114.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 115 Décembre'    ,'year' => '1999', 'month' => 12, 'cover' => 'club_europe_oric/ceo_mag_1999_115.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),

		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 116 Janvier'     ,'year' => '2000', 'month' =>  1, 'cover' => 'club_europe_oric/ceo_mag_2000_116.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 117 Février'     ,'year' => '2000', 'month' =>  2, 'cover' => 'club_europe_oric/ceo_mag_2000_117.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 118 Mars'        ,'year' => '2000', 'month' =>  3, 'cover' => 'club_europe_oric/ceo_mag_2000_118.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 119-120 Avril'   ,'year' => '2000', 'month' =>  4, 'cover' => 'club_europe_oric/ceo_mag_2000_119-120.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 121 Mai'         ,'year' => '2000', 'month' =>  5, 'cover' => 'club_europe_oric/ceo_mag_2000_121.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 122 Juin'        ,'year' => '2000', 'month' =>  6, 'cover' => 'club_europe_oric/ceo_mag_2000_122.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 123-124 Juillet-Aout','year' => '2000', 'month' =>  7, 'cover' => 'club_europe_oric/ceo_mag_2000_123-124.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 125 Septembre'   ,'year' => '2000', 'month' =>  9, 'cover' => 'club_europe_oric/ceo_mag_2000_125.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 126 Octobre'     ,'year' => '2000', 'month' => 10, 'cover' => 'club_europe_oric/ceo_mag_2000_126.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 127 Novembre'    ,'year' => '2000', 'month' => 11, 'cover' => 'club_europe_oric/ceo_mag_2000_127.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 128 Décembre'    ,'year' => '2000', 'month' => 12, 'cover' => 'club_europe_oric/ceo_mag_2000_128.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),

		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 129 Janvier'     ,'year' => '2001', 'month' =>  1, 'cover' => 'club_europe_oric/ceo_mag_2001_129.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 130 Février'     ,'year' => '2001', 'month' =>  2, 'cover' => 'club_europe_oric/ceo_mag_2001_130.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 131 Mars'        ,'year' => '2001', 'month' =>  3, 'cover' => 'club_europe_oric/ceo_mag_2001_131.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 132 Avril'       ,'year' => '2001', 'month' =>  4, 'cover' => 'club_europe_oric/ceo_mag_2001_132.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 133 Mai'         ,'year' => '2001', 'month' =>  5, 'cover' => 'club_europe_oric/ceo_mag_2001_133.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 134 Juin'        ,'year' => '2001', 'month' =>  6, 'cover' => 'club_europe_oric/ceo_mag_2001_134.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 135-136 Juillet-Aout','year' => '2001', 'month' =>  7, 'cover' => 'club_europe_oric/ceo_mag_2001_135-136.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 137 Septembre'   ,'year' => '2001', 'month' =>  9, 'cover' => 'club_europe_oric/ceo_mag_2001_137.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 138 Octobre'     ,'year' => '2001', 'month' => 10, 'cover' => 'club_europe_oric/ceo_mag_2001_138.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 139 Novembre'    ,'year' => '2001', 'month' => 11, 'cover' => 'club_europe_oric/ceo_mag_2001_139.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 140 Décembre'    ,'year' => '2001', 'month' => 12, 'cover' => 'club_europe_oric/ceo_mag_2001_140.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 141 Janvier'     ,'year' => '2002', 'month' =>  1, 'cover' => 'club_europe_oric/ceo_mag_2002_141.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 142 Février'     ,'year' => '2002', 'month' =>  2, 'cover' => 'club_europe_oric/ceo_mag_2002_142.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 143 Mars'        ,'year' => '2002', 'month' =>  3, 'cover' => 'club_europe_oric/ceo_mag_2002_143.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 144 Avril'       ,'year' => '2002', 'month' =>  4, 'cover' => 'club_europe_oric/ceo_mag_2002_144.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 145 Mai'         ,'year' => '2002', 'month' =>  5, 'cover' => 'club_europe_oric/ceo_mag_2002_145.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 146 Juin'        ,'year' => '2002', 'month' =>  6, 'cover' => 'club_europe_oric/ceo_mag_2002_146.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 147-148 Juillet-Aout','year' => '2002', 'month' =>  7, 'cover' => 'club_europe_oric/ceo_mag_2002_147-148.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 149 Septembre'   ,'year' => '2002', 'month' =>  9, 'cover' => 'club_europe_oric/ceo_mag_2002_149.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 150 Octobre'     ,'year' => '2002', 'month' => 10, 'cover' => 'club_europe_oric/ceo_mag_2002_150.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 151 Novembre'    ,'year' => '2002', 'month' => 11, 'cover' => 'club_europe_oric/ceo_mag_2002_151.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 152 Décembre'    ,'year' => '2002', 'month' => 12, 'cover' => 'club_europe_oric/ceo_mag_2002_152.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),

		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 153 Janvier'     ,'year' => '2003', 'month' =>  1, 'cover' => 'club_europe_oric/ceo_mag_2003_153.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 154 Mars'        ,'year' => '2003', 'month' =>  2, 'cover' => 'club_europe_oric/ceo_mag_2003_154.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 155 Février'     ,'year' => '2003', 'month' =>  3, 'cover' => 'club_europe_oric/ceo_mag_2003_155.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 156 Avril'       ,'year' => '2003', 'month' =>  4, 'cover' => 'club_europe_oric/ceo_mag_2003_156.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 157 Mai'         ,'year' => '2003', 'month' =>  5, 'cover' => 'club_europe_oric/ceo_mag_2003_157.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 158 Juin'        ,'year' => '2003', 'month' =>  6, 'cover' => 'club_europe_oric/ceo_mag_2003_158.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 159 Juillet-Aout','year' => '2003', 'month' =>  7, 'cover' => 'club_europe_oric/ceo_mag_2003_155.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 161 Septembre'   ,'year' => '2003', 'month' =>  9, 'cover' => 'club_europe_oric/ceo_mag_2003_161.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 162 Octobre'     ,'year' => '2003', 'month' => 10, 'cover' => 'club_europe_oric/ceo_mag_2003_162.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 163 Novembre'    ,'year' => '2003', 'month' => 11, 'cover' => 'club_europe_oric/ceo_mag_2003_163.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 164 Décembre'    ,'year' => '2003', 'month' => 12, 'cover' => 'club_europe_oric/ceo_mag_2003_164.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),

		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 165 Janvier'     ,'year' => '2004', 'month' =>  1, 'cover' => 'club_europe_oric/ceo_mag_2004_165.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 166 Février'     ,'year' => '2004', 'month' =>  2, 'cover' => 'club_europe_oric/ceo_mag_2004_166.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 167 Mars'        ,'year' => '2004', 'month' =>  3, 'cover' => 'club_europe_oric/ceo_mag_2004_167.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 168 Avril'       ,'year' => '2004', 'month' =>  4, 'cover' => 'club_europe_oric/ceo_mag_2004_168.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 169 Mai'         ,'year' => '2004', 'month' =>  5, 'cover' => 'club_europe_oric/ceo_mag_2004_169.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 170 Juin'        ,'year' => '2004', 'month' =>  6, 'cover' => 'club_europe_oric/ceo_mag_2004_170.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 171-172 Été'     ,'year' => '2004', 'month' =>  7, 'cover' => 'club_europe_oric/ceo_mag_2004_171-172.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 173 Septembre'   ,'year' => '2004', 'month' =>  9, 'cover' => 'club_europe_oric/ceo_mag_2004_173.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 174 Octobre'     ,'year' => '2004', 'month' => 10, 'cover' => 'club_europe_oric/ceo_mag_2004_174.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 175 Novembre'    ,'year' => '2004', 'month' => 11, 'cover' => 'club_europe_oric/ceo_mag_2004_175.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 176 Décembre'    ,'year' => '2004', 'month' => 12, 'cover' => 'club_europe_oric/ceo_mag_2004_176.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),

		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 177 Janvier'     ,'year' => '2005', 'month' =>  1, 'cover' => 'club_europe_oric/ceo_mag_2005_177.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 178 Février'     ,'year' => '2005', 'month' =>  2, 'cover' => 'club_europe_oric/ceo_mag_2005_178.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 179 Mars'        ,'year' => '2005', 'month' =>  3, 'cover' => 'club_europe_oric/ceo_mag_2005_179.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 180 Avril'       ,'year' => '2005', 'month' =>  4, 'cover' => 'club_europe_oric/ceo_mag_2005_180.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 181 Mai'         ,'year' => '2005', 'month' =>  5, 'cover' => 'club_europe_oric/ceo_mag_2005_181.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 182 Juin'        ,'year' => '2005', 'month' =>  6, 'cover' => 'club_europe_oric/ceo_mag_2005_182.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 183-184 Juillet' ,'year' => '2005', 'month' =>  7, 'cover' => 'club_europe_oric/ceo_mag_2005_183-184.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 185 Septembre'   ,'year' => '2005', 'month' =>  9, 'cover' => 'club_europe_oric/ceo_mag_2005_185.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 186 Octobre'     ,'year' => '2005', 'month' => 10, 'cover' => 'club_europe_oric/ceo_mag_2005_186.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 187 Novembre'    ,'year' => '2005', 'month' => 11, 'cover' => 'club_europe_oric/ceo_mag_2005_187.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 188 Décembre'    ,'year' => '2005', 'month' => 12, 'cover' => 'club_europe_oric/ceo_mag_2005_188.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),

		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 189 Janvier'     ,'year' => '2006', 'month' =>  1, 'cover' => 'club_europe_oric/ceo_mag_2006_189.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 190 Février'     ,'year' => '2006', 'month' =>  2, 'cover' => 'club_europe_oric/ceo_mag_2006_190.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 191 Mars'        ,'year' => '2006', 'month' =>  3, 'cover' => 'club_europe_oric/ceo_mag_2006_191.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 192 Avril'       ,'year' => '2006', 'month' =>  4, 'cover' => 'club_europe_oric/ceo_mag_2006_192.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 193 Mai'         ,'year' => '2006', 'month' =>  5, 'cover' => 'club_europe_oric/ceo_mag_2006_193.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 194 Juin'        ,'year' => '2006', 'month' =>  6, 'cover' => 'club_europe_oric/ceo_mag_2006_194.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 195-196 Juillet' ,'year' => '2006', 'month' =>  7, 'cover' => 'club_europe_oric/ceo_mag_2006_195-196.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 197 Septembre'   ,'year' => '2006', 'month' =>  9, 'cover' => 'club_europe_oric/ceo_mag_2006_197.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 198 Octobre'     ,'year' => '2006', 'month' => 10, 'cover' => 'club_europe_oric/ceo_mag_2006_198.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 199 Novembre'    ,'year' => '2006', 'month' => 11, 'cover' => 'club_europe_oric/ceo_mag_2006_199.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 200 Décembre'    ,'year' => '2006', 'month' => 12, 'cover' => 'club_europe_oric/ceo_mag_2006_200.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),

		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 201 Janvier'     ,'year' => '2007', 'month' =>  1, 'cover' => 'club_europe_oric/ceo_mag_2007_201.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 202 Février'     ,'year' => '2007', 'month' =>  2, 'cover' => 'club_europe_oric/ceo_mag_2007_202.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 203 Mars'        ,'year' => '2007', 'month' =>  3, 'cover' => 'club_europe_oric/ceo_mag_2007_203.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 204 Avril'       ,'year' => '2007', 'month' =>  4, 'cover' => 'club_europe_oric/ceo_mag_2007_204.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 205 Mai'         ,'year' => '2007', 'month' =>  5, 'cover' => 'club_europe_oric/ceo_mag_2007_205.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 206 Juin'        ,'year' => '2007', 'month' =>  6, 'cover' => 'club_europe_oric/ceo_mag_2007_206.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 207 Juillet'     ,'year' => '2007', 'month' =>  7, 'cover' => 'club_europe_oric/ceo_mag_2007_207.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 208 HS - Triche' ,'year' => '2007', 'month' =>  8, 'cover' => 'club_europe_oric/ceo_mag_2007_208-HS-Triche.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 209 Septembre'   ,'year' => '2007', 'month' =>  9, 'cover' => 'club_europe_oric/ceo_mag_2007_209.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 210 Octobre'     ,'year' => '2007', 'month' => 10, 'cover' => 'club_europe_oric/ceo_mag_2007_210.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 211 Novembre'    ,'year' => '2007', 'month' => 11, 'cover' => 'club_europe_oric/ceo_mag_2007_211.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 212 Décembre'    ,'year' => '2007', 'month' => 12, 'cover' => 'club_europe_oric/ceo_mag_2007_212.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),

		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 213 Janvier'     ,'year' => '2008', 'month' =>  1, 'cover' => 'club_europe_oric/ceo_mag_2008_213.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 214 Février'     ,'year' => '2008', 'month' =>  2, 'cover' => 'club_europe_oric/ceo_mag_2008_214.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 215 Mars'        ,'year' => '2008', 'month' =>  3, 'cover' => 'club_europe_oric/ceo_mag_2008_215.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 216 Avril'       ,'year' => '2008', 'month' =>  4, 'cover' => 'club_europe_oric/ceo_mag_2008_216.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 217 Mai'         ,'year' => '2008', 'month' =>  5, 'cover' => 'club_europe_oric/ceo_mag_2008_217.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 218 Juin'        ,'year' => '2008', 'month' =>  6, 'cover' => 'club_europe_oric/ceo_mag_2008_218.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 219-220 Été'     ,'year' => '2008', 'month' =>  7, 'cover' => 'club_europe_oric/ceo_mag_2008_219-220.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 220 HS - Triche' ,'year' => '2008', 'month' =>  9, 'cover' => 'club_europe_oric/ceo_mag_2008_220-HS-Triche.jpg', 'download' => array('fr' => "https://ceo.oric.org/ceo-mag-hs02-special-trucs/"), ),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 221 Septembre'   ,'year' => '2008', 'month' =>  9, 'cover' => 'club_europe_oric/ceo_mag_2008_221.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 222 Octobre'     ,'year' => '2008', 'month' => 10, 'cover' => 'club_europe_oric/ceo_mag_2008_222.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 223 Novembre'    ,'year' => '2008', 'month' => 11, 'cover' => 'club_europe_oric/ceo_mag_2008_223.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 224 Décembre'    ,'year' => '2008', 'month' => 12, 'cover' => 'club_europe_oric/ceo_mag_2008_224.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),

		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 225 Janvier'     ,'year' => '2009', 'month' =>  1, 'cover' => 'club_europe_oric/ceo_mag_2009_225.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 226 Février'     ,'year' => '2009', 'month' =>  2, 'cover' => 'club_europe_oric/ceo_mag_2009_226.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 227 Mars'        ,'year' => '2009', 'month' =>  3, 'cover' => 'club_europe_oric/ceo_mag_2009_227.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 228 Avril'       ,'year' => '2009', 'month' =>  4, 'cover' => 'club_europe_oric/ceo_mag_2009_228.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 229 Mai'         ,'year' => '2009', 'month' =>  5, 'cover' => 'club_europe_oric/ceo_mag_2009_229.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 230 Juin'        ,'year' => '2009', 'month' =>  6, 'cover' => 'club_europe_oric/ceo_mag_2009_230.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 231-232 Été'     ,'year' => '2009', 'month' =>  7, 'cover' => 'club_europe_oric/ceo_mag_2009_231-232.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 233 Septembre'   ,'year' => '2009', 'month' =>  9, 'cover' => 'club_europe_oric/ceo_mag_2009_233.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 234 Octobre'     ,'year' => '2009', 'month' => 10, 'cover' => 'club_europe_oric/ceo_mag_2009_234.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 235 Novembre'    ,'year' => '2009', 'month' => 11, 'cover' => 'club_europe_oric/ceo_mag_2009_235.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 236 Décembre'    ,'year' => '2009', 'month' => 12, 'cover' => 'club_europe_oric/ceo_mag_2009_236.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),

		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 237 Janvier'     ,'year' => '2010', 'month' =>  1, 'cover' => 'club_europe_oric/ceo_mag_2010_237.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 238 Février'     ,'year' => '2010', 'month' =>  2, 'cover' => 'club_europe_oric/ceo_mag_2010_238.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 239 Mars'        ,'year' => '2010', 'month' =>  3, 'cover' => 'club_europe_oric/ceo_mag_2010_239.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 240 Avril'       ,'year' => '2010', 'month' =>  4, 'cover' => 'club_europe_oric/ceo_mag_2010_240.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 241 Mai'         ,'year' => '2010', 'month' =>  5, 'cover' => 'club_europe_oric/ceo_mag_2010_241.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 242 Juin'        ,'year' => '2010', 'month' =>  6, 'cover' => 'club_europe_oric/ceo_mag_2010_242.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 243 Juillet'     ,'year' => '2010', 'month' =>  7, 'cover' => 'club_europe_oric/ceo_mag_2010_243.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 244 HS - Super Oric'     ,'year' => '2010', 'month' =>  8, 'cover' => 'club_europe_oric/ceo_mag_2010_244-HS-SuperOric.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 245 Septembre'   ,'year' => '2010', 'month' =>  9, 'cover' => 'club_europe_oric/ceo_mag_2010_245.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 246 Octobre'     ,'year' => '2010', 'month' => 10, 'cover' => 'club_europe_oric/ceo_mag_2010_246.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 247 Novembre'    ,'year' => '2010', 'month' => 11, 'cover' => 'club_europe_oric/ceo_mag_2010_247.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 248 Décembre'    ,'year' => '2010', 'month' => 12, 'cover' => 'club_europe_oric/ceo_mag_2010_248.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),

		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 249 Janvier'     ,'year' => '2011', 'month' =>  1, 'cover' => 'club_europe_oric/ceo_mag_2011_249.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 250 Février'     ,'year' => '2011', 'month' =>  2, 'cover' => 'club_europe_oric/ceo_mag_2011_250.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 251 Mars'        ,'year' => '2011', 'month' =>  3, 'cover' => 'club_europe_oric/ceo_mag_2011_251.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 252 Avril'       ,'year' => '2011', 'month' =>  4, 'cover' => 'club_europe_oric/ceo_mag_2011_252.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 253 Mai'         ,'year' => '2011', 'month' =>  5, 'cover' => 'club_europe_oric/ceo_mag_2011_253.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 254 Juin'        ,'year' => '2011', 'month' =>  6, 'cover' => 'club_europe_oric/ceo_mag_2011_254.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 255-256 Été'     ,'year' => '2011', 'month' =>  7, 'cover' => 'club_europe_oric/ceo_mag_2011_255-256.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 257 Septembre'   ,'year' => '2011', 'month' =>  9, 'cover' => 'club_europe_oric/ceo_mag_2011_257.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 258 Octobre'     ,'year' => '2011', 'month' => 10, 'cover' => 'club_europe_oric/ceo_mag_2011_258.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 259 Novembre'    ,'year' => '2011', 'month' => 11, 'cover' => 'club_europe_oric/ceo_mag_2011_259.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 260 Décembre'    ,'year' => '2011', 'month' => 12, 'cover' => 'club_europe_oric/ceo_mag_2011_260.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),

		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 261 Janvier'     ,'year' => '2012', 'month' =>  1, 'cover' => 'club_europe_oric/ceo_mag_2012_261.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 262 Février'     ,'year' => '2012', 'month' =>  2, 'cover' => 'club_europe_oric/ceo_mag_2012_262.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 263 Mars'        ,'year' => '2012', 'month' =>  3, 'cover' => 'club_europe_oric/ceo_mag_2012_263.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 264 Avril'       ,'year' => '2012', 'month' =>  4, 'cover' => 'club_europe_oric/ceo_mag_2012_264.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 265 Mai'         ,'year' => '2012', 'month' =>  5, 'cover' => 'club_europe_oric/ceo_mag_2012_265.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 266 Juin'        ,'year' => '2012', 'month' =>  6, 'cover' => 'club_europe_oric/ceo_mag_2012_266.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 267 Juillet'     ,'year' => '2012', 'month' =>  7, 'cover' => 'club_europe_oric/ceo_mag_2012_267.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 268 HS - Patrick Gueulle'    ,'year' => '2012', 'month' =>  7, 'cover' => 'club_europe_oric/ceo_mag_2012_268-HS-PatrickGueulle.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 269 Septembre'   ,'year' => '2012', 'month' =>  8, 'cover' => 'club_europe_oric/ceo_mag_2012_269.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 270 Octobre'     ,'year' => '2012', 'month' => 10, 'cover' => 'club_europe_oric/ceo_mag_2012_270.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 271 Novembre'    ,'year' => '2012', 'month' => 11, 'cover' => 'club_europe_oric/ceo_mag_2012_271.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 272 Décembre'    ,'year' => '2012', 'month' => 12, 'cover' => 'club_europe_oric/ceo_mag_2012_272.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),

		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 273 Janvier'     ,'year' => '2013', 'month' =>  1, 'cover' => 'club_europe_oric/ceo_mag_2013_273.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 274 Février'     ,'year' => '2013', 'month' =>  2, 'cover' => 'club_europe_oric/ceo_mag_2013_274.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 275 Mars'        ,'year' => '2013', 'month' =>  3, 'cover' => 'club_europe_oric/ceo_mag_2013_275.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 276 Avril'       ,'year' => '2013', 'month' =>  4, 'cover' => 'club_europe_oric/ceo_mag_2013_276.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 277 Mai'         ,'year' => '2013', 'month' =>  5, 'cover' => 'club_europe_oric/ceo_mag_2013_277.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 278 Juin'        ,'year' => '2013', 'month' =>  6, 'cover' => 'club_europe_oric/ceo_mag_2013_278.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 279 Été'         ,'year' => '2013', 'month' =>  7, 'cover' => 'club_europe_oric/ceo_mag_2013_279.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 280 HS- Super Oric','year' => '2013', 'month' =>  8, 'cover' => 'club_europe_oric/ceo_mag_2013_280-HS-SuperOric.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 281 Septembre'   ,'year' => '2013', 'month' =>  9, 'cover' => 'club_europe_oric/ceo_mag_2013_281.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 282 Octobre'     ,'year' => '2013', 'month' => 10, 'cover' => 'club_europe_oric/ceo_mag_2013_282.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 282 HS - Twilighte',
			'year' => '2013', 'month' =>  10, 'cover' => 'club_europe_oric/ceo_mag_2013_282-HS-Twilighte.jpg',
			'download' => array('en' => "club_europe_oric/ceo_mag_2013_282-HS-Twilighte.pdf"),
			'description' => array('fr' => "Jonathan 'Twilighte' Bristow est décédé en 2013, ce numéro spécial du Club Oric Magazine lui rend hommage",
				                   'en' => "Jonathan 'Twilighte' Bristow passed away in 2013, this special issue of Club Oric Magazine is dedicated to him"),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 283 Novembre'    ,'year' => '2013', 'month' => 11, 'cover' => 'club_europe_oric/ceo_mag_2013_283.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 284 Décembre'    ,'year' => '2013', 'month' => 12, 'cover' => 'club_europe_oric/ceo_mag_2013_284.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),

		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 285 Janvier'     ,'year' => '2014', 'month' =>  1, 'cover' => 'club_europe_oric/ceo_mag_2014_285.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 286 Février'     ,'year' => '2014', 'month' =>  2, 'cover' => 'club_europe_oric/ceo_mag_2014_286.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 287 Mars'        ,'year' => '2014', 'month' =>  3, 'cover' => 'club_europe_oric/ceo_mag_2014_287.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 288 Avril'       ,'year' => '2014', 'month' =>  4, 'cover' => 'club_europe_oric/ceo_mag_2014_288.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 289 Mai'         ,'year' => '2014', 'month' =>  5, 'cover' => 'club_europe_oric/ceo_mag_2014_289.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 290 Juin'        ,'year' => '2014', 'month' =>  6, 'cover' => 'club_europe_oric/ceo_mag_2014_290.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 291-292 Été'     ,'year' => '2014', 'month' =>  7, 'cover' => 'club_europe_oric/ceo_mag_2014_291-292.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 291 HS - MSA'    ,'year' => '2014', 'month' =>  7, 'cover' => 'club_europe_oric/ceo_mag_2014_291-HS-MSA.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 293 Septembre'   ,'year' => '2014', 'month' =>  8, 'cover' => 'club_europe_oric/ceo_mag_2014_293.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 294 Octobre'     ,'year' => '2014', 'month' => 10, 'cover' => 'club_europe_oric/ceo_mag_2014_294.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 295 Novembre'    ,'year' => '2014', 'month' => 11, 'cover' => 'club_europe_oric/ceo_mag_2014_295.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 296 Décembre'    ,'year' => '2014', 'month' => 12, 'cover' => 'club_europe_oric/ceo_mag_2014_296.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),

		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 297 Janvier'     ,'year' => '2015', 'month' =>  1, 'cover' => 'club_europe_oric/ceo_mag_2015_297.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 298 Février'     ,'year' => '2015', 'month' =>  2, 'cover' => 'club_europe_oric/ceo_mag_2015_298.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 299 Mars'        ,'year' => '2015', 'month' =>  3, 'cover' => 'club_europe_oric/ceo_mag_2015_299.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 300 Avril'       ,'year' => '2015', 'month' =>  4, 'cover' => 'club_europe_oric/ceo_mag_2015_300.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 301 Mai'         ,'year' => '2015', 'month' =>  5, 'cover' => 'club_europe_oric/ceo_mag_2015_301.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 302 Juin'        ,'year' => '2015', 'month' =>  6, 'cover' => 'club_europe_oric/ceo_mag_2015_302.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 303-304 Été'     ,'year' => '2015', 'month' =>  7, 'cover' => 'club_europe_oric/ceo_mag_2015_303-304.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 303 HS - OSDK'   ,'year' => '2015', 'month' =>  7, 'cover' => 'club_europe_oric/ceo_mag_2015_303-HS-OSDK.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 305 Septembre'   ,'year' => '2015', 'month' =>  8, 'cover' => 'club_europe_oric/ceo_mag_2015_305.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 306 Octobre'     ,'year' => '2015', 'month' => 10, 'cover' => 'club_europe_oric/ceo_mag_2015_306.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 307 Novembre'    ,'year' => '2015', 'month' => 11, 'cover' => 'club_europe_oric/ceo_mag_2015_307.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 308 Décembre'    ,'year' => '2015', 'month' => 12, 'cover' => 'club_europe_oric/ceo_mag_2015_308.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),

		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 309 Janvier'     ,'year' => '2016', 'month' =>  1, 'cover' => 'club_europe_oric/ceo_mag_2016_309.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 310 Février'     ,'year' => '2016', 'month' =>  2, 'cover' => 'club_europe_oric/ceo_mag_2016_310.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 311 Mars'        ,'year' => '2016', 'month' =>  3, 'cover' => 'club_europe_oric/ceo_mag_2016_311.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 312 Avril'       ,'year' => '2016', 'month' =>  4, 'cover' => 'club_europe_oric/ceo_mag_2016_312.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 313 Mai'         ,'year' => '2016', 'month' =>  5, 'cover' => 'club_europe_oric/ceo_mag_2016_313.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 314 Juin'        ,'year' => '2016', 'month' =>  6, 'cover' => 'club_europe_oric/ceo_mag_2016_314.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 315-316 Été'     ,'year' => '2016', 'month' =>  7, 'cover' => 'club_europe_oric/ceo_mag_2016_315-316.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 317 Septembre'   ,'year' => '2016', 'month' =>  9, 'cover' => 'club_europe_oric/ceo_mag_2016_317.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 318 Octobre'     ,'year' => '2016', 'month' => 10, 'cover' => 'club_europe_oric/ceo_mag_2016_318.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 319 Novembre'    ,'year' => '2016', 'month' => 11, 'cover' => 'club_europe_oric/ceo_mag_2016_319.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 320 Décembre'    ,'year' => '2016', 'month' => 12, 'cover' => 'club_europe_oric/ceo_mag_2016_320.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),

		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 321 Janvier'     ,'year' => '2017', 'month' =>  1, 'cover' => 'club_europe_oric/ceo_mag_2017_321.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 322 Février'     ,'year' => '2017', 'month' =>  2, 'cover' => 'club_europe_oric/ceo_mag_2017_322.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 323 Mars'        ,'year' => '2017', 'month' =>  3, 'cover' => 'club_europe_oric/ceo_mag_2017_323.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 324 Avril'       ,'year' => '2017', 'month' =>  4, 'cover' => 'club_europe_oric/ceo_mag_2017_324.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 325 Mai'         ,'year' => '2017', 'month' =>  5, 'cover' => 'club_europe_oric/ceo_mag_2017_325.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 326 Juin'        ,'year' => '2017', 'month' =>  6, 'cover' => 'club_europe_oric/ceo_mag_2017_326.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 327-328 Été'     ,'year' => '2017', 'month' =>  7, 'cover' => 'club_europe_oric/ceo_mag_2017_327-328.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 329 Septembre'   ,'year' => '2017', 'month' =>  9, 'cover' => 'club_europe_oric/ceo_mag_2017_329.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 330 Octobre'     ,'year' => '2017', 'month' => 10, 'cover' => 'club_europe_oric/ceo_mag_2017_330.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 331 Novembre'    ,'year' => '2017', 'month' => 11, 'cover' => 'club_europe_oric/ceo_mag_2017_331.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 332 Décembre'    ,'year' => '2017', 'month' => 12, 'cover' => 'club_europe_oric/ceo_mag_2017_332.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),

		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 333 Janvier'     ,'year' => '2018', 'month' =>  1, 'cover' => 'club_europe_oric/ceo_mag_2018_333.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 334 Février'     ,'year' => '2018', 'month' =>  2, 'cover' => 'club_europe_oric/ceo_mag_2018_334.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 335 Mars'        ,'year' => '2018', 'month' =>  3, 'cover' => 'club_europe_oric/ceo_mag_2018_335.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 336 Avril'       ,'year' => '2018', 'month' =>  4, 'cover' => 'club_europe_oric/ceo_mag_2018_336.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 337 Mai'         ,'year' => '2018', 'month' =>  5, 'cover' => 'club_europe_oric/ceo_mag_2018_337.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 338 Juin'        ,'year' => '2018', 'month' =>  6, 'cover' => 'club_europe_oric/ceo_mag_2018_338.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 339-340 Été'     ,'year' => '2018', 'month' =>  7, 'cover' => 'club_europe_oric/ceo_mag_2018_339-340.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 341 Septembre'   ,'year' => '2018', 'month' =>  9, 'cover' => 'club_europe_oric/ceo_mag_2018_341.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 342 Octobre'     ,'year' => '2018', 'month' => 10, 'cover' => 'club_europe_oric/ceo_mag_2018_342.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 343 Novembre'    ,'year' => '2018', 'month' => 11, 'cover' => 'club_europe_oric/ceo_mag_2018_343.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 344 Décembre'    ,'year' => '2018', 'month' => 12, 'cover' => 'club_europe_oric/ceo_mag_2018_344.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),

		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 345 Janvier'     ,'year' => '2019', 'month' =>  1, 'cover' => 'club_europe_oric/ceo_mag_2019_345.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 346 Février'     ,'year' => '2019', 'month' =>  2, 'cover' => 'club_europe_oric/ceo_mag_2019_346.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 347 Mars'        ,'year' => '2019', 'month' =>  3, 'cover' => 'club_europe_oric/ceo_mag_2019_347.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 348 Avril'       ,'year' => '2019', 'month' =>  4, 'cover' => 'club_europe_oric/ceo_mag_2019_348.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 349 Mai'         ,'year' => '2019', 'month' =>  5, 'cover' => 'club_europe_oric/ceo_mag_2019_349.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 350 Juin'        ,'year' => '2019', 'month' =>  6, 'cover' => 'club_europe_oric/ceo_mag_2019_350.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 351-352 Été'     ,'year' => '2019', 'month' =>  7, 'cover' => 'club_europe_oric/ceo_mag_2019_351-352.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 353 Septembre'   ,'year' => '2019', 'month' =>  9, 'cover' => 'club_europe_oric/ceo_mag_2019_353.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 354 Octobre'     ,'year' => '2019', 'month' => 10, 'cover' => 'club_europe_oric/ceo_mag_2019_354.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 355 Novembre'    ,'year' => '2019', 'month' => 11, 'cover' => 'club_europe_oric/ceo_mag_2019_355.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 356 Décembre'    ,'year' => '2019', 'month' => 12, 'cover' => 'club_europe_oric/ceo_mag_2019_356.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),

		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 357 Janvier'     ,'year' => '2020', 'month' =>  1, 'cover' => 'club_europe_oric/ceo_mag_2020_357.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 358 Février'     ,'year' => '2020', 'month' =>  2, 'cover' => 'club_europe_oric/ceo_mag_2020_358.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 359 Mars'        ,'year' => '2020', 'month' =>  3, 'cover' => 'club_europe_oric/ceo_mag_2020_359.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 360 Octobre'     ,'year' => '2020', 'month' =>  9, 'cover' => 'club_europe_oric/ceo_mag_2020_360.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),
		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 361 Décembre'    ,'year' => '2020', 'month' => 12, 'cover' => 'club_europe_oric/ceo_mag_2020_361.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),

		array('type' => 'magazine','name' => "CEO-Mag",'publisher' => 'Club Europe Oric','language' => 'fr','issue' => 'No 362 Mars'        ,'year' => '2021', 'month' =>  3, 'cover' => 'club_europe_oric/ceo_mag_2021_362.jpg','description' => array('fr' => "Le contenu n'est disponible que pour les membres du CEO.",'en' => "The content is only available for CEO members."),),

		// -------------------------- Oric User
		array(
			'type' => 'magazine',
			'name' => "Oric User",
			'publisher' => 'CCC',
			'language' => 'en',
			'issue' => 'No. 1',
			'year' => '1983',
			'cover' => 'oric_user/oric_user_1983_01.jpg',
			'download' => array('en' => "oric_user/Oric-User-1.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Oric User",
			'publisher' => 'CCC',
			'language' => 'en',
			'issue' => 'No. 2 October',
			'year' => '1983', 'month' => 10,
			'cover' => 'oric_user/oric_user_1983_02.jpg',
			'download' => array('en' => "oric_user/Oric-User-2.pdf"),
		),

		// -------------------------- Independent Oric User's Group
		array('type' => 'magazine','name' => "I.O.U.",'publisher' => 'I.O.U.G.','language' => 'en','issue' => 'Nr. 1 April'     ,'year' => '1985', 'month' =>  4,'cover' => 'independent_oric_users_group\ioug_1985_01.jpg','download' => array('en' => "independent_oric_users_group/ioug_1985_01.pdf"),),
		array('type' => 'magazine','name' => "I.O.U.",'publisher' => 'I.O.U.G.','language' => 'en','issue' => 'Nr. 2 June'      ,'year' => '1985', 'month' =>  6,'cover' => 'independent_oric_users_group\ioug_1985_02.jpg','download' => array('en' => "independent_oric_users_group/ioug_1985_02.pdf"),),
		array('type' => 'magazine','name' => "I.O.U.",'publisher' => 'I.O.U.G.','language' => 'en','issue' => 'Nr. 3 July'      ,'year' => '1985', 'month' =>  7,'cover' => 'independent_oric_users_group\ioug_1985_03.jpg','download' => array('en' => "independent_oric_users_group/ioug_1985_03.pdf"),),
		array('type' => 'magazine','name' => "I.O.U.",'publisher' => 'I.O.U.G.','language' => 'en','issue' => 'Nr. 4 August'    ,'year' => '1985', 'month' =>  8,'cover' => 'independent_oric_users_group\ioug_1985_04.jpg','download' => array('en' => "independent_oric_users_group/ioug_1985_04.pdf"),),
		array('type' => 'magazine','name' => "I.O.U.",'publisher' => 'I.O.U.G.','language' => 'en','issue' => 'Nr. 5 September' ,'year' => '1985', 'month' =>  9,'cover' => 'independent_oric_users_group\ioug_1985_05.jpg','download' => array('en' => "independent_oric_users_group/ioug_1985_05.pdf"),),
		array('type' => 'magazine','name' => "I.O.U.",'publisher' => 'I.O.U.G.','language' => 'en','issue' => 'Nr. 6 November'  ,'year' => '1985', 'month' => 11,'cover' => 'independent_oric_users_group\ioug_1985_06.jpg','download' => array('en' => "independent_oric_users_group/ioug_1985_06.pdf"),),

		array('type' => 'magazine','name' => "I.O.U.",'publisher' => 'I.O.U.G.','language' => 'en','issue' => 'Nr. 7 January'   ,'year' => '1986', 'month' =>  1,'cover' => 'independent_oric_users_group\ioug_1986_07.jpg','download' => array('en' => "independent_oric_users_group/ioug_1986_07.pdf"),),
		array('type' => 'magazine','name' => "I.O.U.",'publisher' => 'I.O.U.G.','language' => 'en','issue' => 'First Program Supplement' ,'year' => '1986', 'month' =>  2,'cover' => 'independent_oric_users_group\ioug_1986_program_supplement.jpg','download' => array('en' => "independent_oric_users_group/ioug_1986_program_supplement.pdf"),),
		array('type' => 'magazine','name' => "I.O.U.",'publisher' => 'I.O.U.G.','language' => 'en','issue' => 'Nr. 8 March'     ,'year' => '1986', 'month' =>  3,'cover' => 'independent_oric_users_group\ioug_1986_08.jpg','download' => array('en' => "independent_oric_users_group/ioug_1986_08.pdf"),),
		array('type' => 'magazine','name' => "I.O.U.",'publisher' => 'I.O.U.G.','language' => 'en','issue' => 'Nr. 9 May'       ,'year' => '1986', 'month' =>  5,'cover' => 'independent_oric_users_group\ioug_1986_09.jpg','download' => array('en' => "independent_oric_users_group/ioug_1986_09.pdf"),),
		array('type' => 'magazine','name' => "I.O.U.",'publisher' => 'I.O.U.G.','language' => 'en','issue' => 'Nr. 10 July'     ,'year' => '1986', 'month' =>  7,'cover' => 'independent_oric_users_group\ioug_1986_10.jpg','download' => array('en' => "independent_oric_users_group/ioug_1986_10.pdf"),),
		array('type' => 'magazine','name' => "I.O.U.",'publisher' => 'I.O.U.G.','language' => 'en','issue' => 'Nr. 11 August'   ,'year' => '1986', 'month' =>  8,'cover' => 'independent_oric_users_group\ioug_1986_11.jpg','download' => array('en' => "independent_oric_users_group/ioug_1986_11.pdf"),),
		array('type' => 'magazine','name' => "I.O.U.",'publisher' => 'I.O.U.G.','language' => 'en','issue' => 'Nr. 12 October'  ,'year' => '1986', 'month' => 10,'cover' => 'independent_oric_users_group\ioug_1986_12.jpg','download' => array('en' => "independent_oric_users_group/ioug_1986_12.pdf"),),
		array('type' => 'magazine','name' => "I.O.U.",'publisher' => 'I.O.U.G.','language' => 'en','issue' => 'Nr. 13 December' ,'year' => '1986', 'month' => 12,'cover' => 'independent_oric_users_group\ioug_1986_13.jpg','download' => array('en' => "independent_oric_users_group/ioug_1986_13.pdf"),),

		array('type' => 'magazine','name' => "I.O.U.",'publisher' => 'I.O.U.G.','language' => 'en','issue' => 'Nr. 14 February' ,'year' => '1987', 'month' =>  2,'cover' => 'independent_oric_users_group\ioug_1987_14.jpg','download' => array('en' => "independent_oric_users_group/ioug_1987_14.pdf"),),
		array('type' => 'magazine','name' => "I.O.U.",'publisher' => 'I.O.U.G.','language' => 'en','issue' => 'Nr. 15 April'    ,'year' => '1987', 'month' =>  4,'cover' => 'independent_oric_users_group\ioug_1987_15.jpg','download' => array('en' => "independent_oric_users_group/ioug_1987_15.pdf"),),
		array('type' => 'magazine','name' => "I.O.U.",'publisher' => 'I.O.U.G.','language' => 'en','issue' => 'Nr. 16 July'     ,'year' => '1987', 'month' =>  7,'cover' => 'independent_oric_users_group\ioug_1987_16.jpg','download' => array('en' => "independent_oric_users_group/ioug_1987_16.pdf"),),
		array('type' => 'magazine','name' => "I.O.U.",'publisher' => 'I.O.U.G.','language' => 'en','issue' => 'Nr. 17 September','year' => '1987', 'month' =>  9,'cover' => 'independent_oric_users_group\ioug_1987_17.jpg','download' => array('en' => "independent_oric_users_group/ioug_1987_17.pdf"),),
		array('type' => 'magazine','name' => "I.O.U.",'publisher' => 'I.O.U.G.','language' => 'en','issue' => 'Nr. 18 November' ,'year' => '1987', 'month' => 11,'cover' => 'independent_oric_users_group\ioug_1987_18.jpg','download' => array('en' => "independent_oric_users_group/ioug_1987_18.pdf"),),

		array('type' => 'magazine','name' => "I.O.U.",'publisher' => 'I.O.U.G.','language' => 'en','issue' => 'Nr. 19 March'    ,'year' => '1988', 'month' =>  3,'cover' => 'independent_oric_users_group\ioug_1988_19.jpg','download' => array('en' => "independent_oric_users_group/ioug_1988_19.pdf"),),
		array('type' => 'magazine','name' => "I.O.U.",'publisher' => 'I.O.U.G.','language' => 'en','issue' => 'Nr. 20 May'      ,'year' => '1988', 'month' =>  5,'cover' => 'independent_oric_users_group\ioug_1988_20.jpg','download' => array('en' => "independent_oric_users_group/ioug_1988_20.pdf"),),
		array('type' => 'magazine','name' => "I.O.U.",'publisher' => 'I.O.U.G.','language' => 'en','issue' => 'Nr. 21 August'   ,'year' => '1988', 'month' =>  8,'cover' => 'independent_oric_users_group\ioug_1988_21.jpg','download' => array('en' => "independent_oric_users_group/ioug_1988_21.pdf"),),
		array('type' => 'magazine','name' => "I.O.U.",'publisher' => 'I.O.U.G.','language' => 'en','issue' => 'Nr. 22 December' ,'year' => '1988', 'month' => 12,'cover' => 'independent_oric_users_group\ioug_1988_22.jpg','download' => array('en' => "independent_oric_users_group/ioug_1988_22.pdf"),),

		array('type' => 'magazine','name' => "I.O.U.",'publisher' => 'I.O.U.G.','language' => 'en','issue' => 'Nr. 23 February' ,'year' => '1989', 'month' =>  2,'cover' => 'independent_oric_users_group\ioug_1989_23.jpg','download' => array('en' => "independent_oric_users_group/ioug_1989_23.pdf"),),


		// -------------------------- Your Oric
		// http://www.48katmos.freeuk.com/mags.htm
		/*
		Next in Britain, came Your Oric. This was produced by the brothers, Ken and Chris Thompson. (I think those first names are right). 
		It says "Organised by the P.I.N.G user group" on the cover . I'm not sure what that is/was.
		Launched in June 1986 this magazine had quite a professional look about it, It ran bimonthly until June 1987 with a final issue in December 1987, making just 8 issues. 
		I really like this magazine. It has the right sort of mix of news, reviews and programs to type in. 
		The type-ins were well worth the effort with the final issue having an excellent Line Drawing program which found it's way onto one of the OUM disks.
		The presentation was very good, but unfortunately the English was appalling. (Yes, even worse than mine !!!). 
		Fortunately some people that could write stared to contribute to the magazine, notably one chap who went by the name of Archimedes, who wrote about the Oric scene in France. 
		This was none other than Jon Haworth. Also there was a chap called Mick Poat who produced the fabled Mick Poat drum machine, but I've never managed to see one. 
		Your Oric also managed to produce a decent piece of software, called Tyrant, which they sold. Not many got to see this and it appeared eventually on a Rhetoric disk.		
		*/ 
		array('type' => 'magazine','name' => "Your Oric",'publisher' => 'P.I.N.G User Group','language' => 'en','issue' => 'Nr. 1 June/July','year' => '1986', 'month' =>  6,'cover' => 'your_oric\your_oric_1986_01.jpg','download' => array('en' => "your_oric/your_oric_1986_01.pdf"),),
		array('type' => 'magazine','name' => "Your Oric",'publisher' => 'P.I.N.G User Group','language' => 'en','issue' => 'Nr. 2 Aug/Sept' ,'year' => '1986', 'month' =>  8,'cover' => 'your_oric\your_oric_1986_02.jpg','download' => array('en' => "your_oric/your_oric_1986_02.pdf"),),
		array('type' => 'magazine','name' => "Your Oric",'publisher' => 'P.I.N.G User Group','language' => 'en','issue' => 'Nr. 3 Oct/Nov'  ,'year' => '1986', 'month' => 10,'cover' => 'your_oric\your_oric_1986_03.jpg','download' => array('en' => "your_oric/your_oric_1986_03.pdf"),),
		array('type' => 'magazine','name' => "Your Oric",'publisher' => 'P.I.N.G User Group','language' => 'en','issue' => 'Nr. 4 Dec/Jan'  ,'year' => '1987', 'month' =>  1,'cover' => 'your_oric\your_oric_1987_04.jpg','download' => array('en' => "your_oric/your_oric_1987_04.pdf"),),
		array('type' => 'magazine','name' => "Your Oric",'publisher' => 'P.I.N.G User Group','language' => 'en','issue' => 'Nr. 5 Feb/Mar'  ,'year' => '1987', 'month' =>  2,'cover' => 'your_oric\your_oric_1987_05.jpg','download' => array('en' => "your_oric/your_oric_1987_05.pdf"),),
		array('type' => 'magazine','name' => "Your Oric",'publisher' => 'P.I.N.G User Group','language' => 'en','issue' => 'Nr. 6 Apr/May'  ,'year' => '1987', 'month' =>  4,'cover' => 'your_oric\your_oric_1987_06.jpg','download' => array('en' => "your_oric/your_oric_1987_06.pdf"),),
		array('type' => 'magazine','name' => "Your Oric",'publisher' => 'P.I.N.G User Group','language' => 'en','issue' => 'Nr. 7 June/July','year' => '1987', 'month' =>  6,'cover' => 'your_oric\your_oric_1987_07.jpg','download' => array('en' => "your_oric/your_oric_1987_07.pdf"),),
		array('type' => 'magazine','name' => "Your Oric",'publisher' => 'P.I.N.G User Group','language' => 'en','issue' => 'Nr. 8 Dec/Jan'  ,'year' => '1987', 'month' => 12,'cover' => 'your_oric\your_oric_1987_08.jpg','download' => array('en' => "your_oric/your_oric_1987_08.pdf",'extra' => "your_oric/your_oric_1987_08_listings.pdf"),),

		// -------------------------- Oric notes
		// http://www.48katmos.freeuk.com/mags.htm
		/*
		Lesser known magazines surfaced. Oric Notes and Plug News were both produced by Paul Meadows with the help of R 'Huw' Morgan-Jones, Lloyd Preston and Glenn Peacey. 
		Glenn and Paul were from Peterborough which may have something to do with the origins of 'PLUG' . It isn't clear what this refers to .
		Over to Oric Notes of which I have issue 2 dated December 1985. This is an A4 magazine baring some similarities with You Oric, though it isn't as well done. 
		It is again largely printed on the MCP40 but has other, better te xt added. 
		There is a PLUG page and more news etc than PLUG News and then there is a lot of listings again with a few tutorials too. 'Volume 5' is dated March-May which doesn't make too much sense. 
		There are again lots of listings including a rather intri guing program to morph from one object to another. The example in the program goes from an egg to a chicken. 
		There is also a map for Land of Illusion and material that is more advanced than you'd expect from this little offering. 
		I wish I had more of them or knew more about PLUG, but that's about all I can tell you.		
		*/
		array(
			'type' => 'magazine',
			'name' => "Oric Notes",
			'publisher' => 'P.L.U.G.',
			'language' => 'en',
			'issue' => 'Nr. 2 Dec',
			'year' => '1985', 'month' => 12,
			'cover' => 'oric_notes/oric_notes_1985_02.jpg',
			'download' => array('en' => "oric_notes/oricnotes2.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Oric Notes",
			'publisher' => 'P.L.U.G.',
			'issue' => 'Nr. 5 March/May',
			'language' => 'en',
			'year' => '1986', 'month' =>  3,
			'cover' => 'oric_notes/oric_notes_1986_05.jpg',
			'download' => array('en' => "oric_notes/oricnotes5.pdf"),
		),

		// -------------------------- PLug News
		// http://www.48katmos.freeuk.com/mags.htm
		array(
			'type' => 'magazine',
			'name' => "Plug News",
			'publisher' => 'P.L.U.G.',
			'language' => 'en',
			'issue' => 'Nr. 5 Sept',
			'year' => '1985', 'month' =>  9,
			'cover' => 'plug_news/plug_news_1986_05.jpg',
			'download' => array('en' => "plug_news/Plug-News-5.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Plug News",
			'publisher' => 'P.L.U.G.',
			'language' => 'en',
			'issue' => 'Nr. 6 Dec',
			'year' => '1986', 'month' => 12,
			'cover' => 'plug_news/plug_news_1986_06.jpg',
			'download' => array('en' => "plug_news/Plug-News-6.pdf"),
		),

		// Oric Users Info
		// magazine_oric_users_info
		array(
			'type' => 'magazine',
			'name' => "Oric Users Info",
			'publisher' => 'Oric Users Holland',
			'language' => 'nl',
			'issue' => 'Nummer 1 Juli',
			'year' => '1986', 'month' =>  7,
			'cover' => 'oric_users_info/oric_users_info_1986_01.jpg',
			'download' => array('nl' => "oric_users_info/oric_users_info_1986_01.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Oric Users Info",
			'publisher' => 'Oric Users Holland',
			'language' => 'nl',
			'issue' => 'Nummer 2 September',
			'year' => '1986', 'month' =>  9,
			'cover' => 'oric_users_info/oric_users_info_1986_02.jpg',
			'download' => array('nl' => "oric_users_info/oric_users_info_1986_02.pdf"),
		),


		// -------------------------- Oric Klubben
        // See Rhetoric #19 page 4
		array(
			'type' => 'magazine',
			'name' => "Oric Klubben",
			'language' => 'dk',
			'issue' => 'Nr. 1 Juni',
			'year' => '1984', 'month' =>  6,
			'cover' => 'oric_klubben/oric_klubben_1984_1.jpg',
		),

		// -------------------------- Oric Brugerbladet
		array(
			'type' => 'magazine',
			'name' => "65536",
			'language' => 'dk',
			'issue' => 'Nr. 2 December',
			'year' => '1984', 'month' =>  2,
			'cover' => 'oric_brugerbladet/oric_brugerbladet_1984_02.jpg',
		),
		array(
			'type' => 'magazine',
			'name' => "65536",
			'language' => 'dk',
			'issue' => 'Nr. 1 Januar',
			'year' => '1985', 'month' =>  1,
			'cover' => 'oric_brugerbladet/oric_brugerbladet_1985_01.jpg',
		),
		array(
			'type' => 'magazine',
			'name' => "65536 - Oric Brugerbladet",
			'language' => 'dk',
			'issue' => 'Nr. 2 Februar',
			'year' => '1985', 'month' =>  2,
			'cover' => 'oric_brugerbladet/oric_brugerbladet_1985_02.jpg',
		),
		array(
			'type' => 'magazine',
			'name' => "65536",
			'language' => 'dk',
			'issue' => 'Nr. 3 Marts',
			'year' => '1985', 'month' =>  3,
			'cover' => 'oric_brugerbladet/oric_brugerbladet_1985_03.jpg',
		),
		array(
			'type' => 'magazine',
			'name' => "65536",
			'language' => 'dk',
			'issue' => 'Nr. 4 April',
			'year' => '1985', 'month' =>  4,
			'cover' => 'oric_brugerbladet/oric_brugerbladet_1985_04.jpg',
		),
		array(
			'type' => 'magazine',
			'name' => "65536 - Oric Brugerbladet",
			'language' => 'dk',
			'issue' => 'Nr. 5 (mai?)',
			'year' => '1985', 'month' =>  5,  // TO CHECK
			'cover' => 'oric_brugerbladet/oric_brugerbladet_1985_05.jpg',
		),
		array(
			'type' => 'magazine',
			'name' => "65536 - Oric Brugerbladet",
			'language' => 'dk',
			'issue' => 'Nr. 6 (june?)',
			'year' => '1985', 'month' =>  6, // TO CHECK
			'cover' => 'oric_brugerbladet/oric_brugerbladet_1985_06.jpg',
		),

		// -------------------------- Oric Klubb Norden ----------------------
		array('type' => 'magazine','name' => "Klubb Oric Norden",'language' => 'no','issue' => 'Nummer 1 November/December','year' => '1989', 'month' => 11,'publisher' => 'Klubb Oric Norden','cover' => 'klubb_oric_norden/klubb_oric_norden_1989_01.jpg','download' => array('no' => 'klubb_oric_norden/klubb_oric_norden_1989_01.pdf'),),
		array('type' => 'magazine','name' => "Klubb Oric Norden",'language' => 'no','issue' => 'Nummer 2 Jan/Feb'          ,'year' => '1990', 'month' =>  1,'publisher' => 'Klubb Oric Norden','cover' => 'klubb_oric_norden/klubb_oric_norden_1990_02.jpg','download' => array('no' => 'klubb_oric_norden/klubb_oric_norden_1990_02.pdf'),),
		array('type' => 'magazine','name' => "Klubb Oric Norden",'language' => 'no','issue' => 'Nummer 3 March/April'      ,'year' => '1990', 'month' =>  3,'publisher' => 'Klubb Oric Norden','cover' => 'klubb_oric_norden/klubb_oric_norden_1990_03.jpg','download' => array('no' => 'klubb_oric_norden/klubb_oric_norden_1990_03.pdf'),),
		array('type' => 'magazine','name' => "Klubb Oric Norden",'language' => 'no','issue' => 'Nummer 7 November/December','year' => '1990', 'month' => 11,'publisher' => 'Klubb Oric Norden','cover' => 'klubb_oric_norden/klubb_oric_norden_1990_07.jpg','download' => array('no' => 'klubb_oric_norden/klubb_oric_norden_1990_07.pdf'),),
		array('type' => 'magazine','name' => "Klubb Oric Norden",'language' => 'no','issue' => 'Nummer 8 Januar/Februar'   ,'year' => '1991', 'month' =>  1,'publisher' => 'Klubb Oric Norden','cover' => 'klubb_oric_norden/klubb_oric_norden_1991_08.jpg','download' => array('no' => 'klubb_oric_norden/klubb_oric_norden_1991_08.pdf'),),
		array('type' => 'magazine','name' => "Klubb Oric Norden",'language' => 'no','issue' => 'Nummer 9 Mars/April'       ,'year' => '1991', 'month' =>  3,'publisher' => 'Klubb Oric Norden','cover' => 'klubb_oric_norden/klubb_oric_norden_1991_09.jpg','download' => array('no' => 'klubb_oric_norden/klubb_oric_norden_1991_09.pdf'),),

		// -------------------------- Oric Eieren ----------------------
		array(
			'type' => 'magazine',
			'name' => "Oric-Eieren",
			'language' => 'no',
			'issue' => 'Nr. 1 Sept/Oct',
			'year' => '1983', 'month' =>  9,
			'publisher' => 'Oric Brukerklubb',
			'cover' => 'oric_eieren/oric_eieren_01.jpg',
			'download' => array('no' => 'oric_eieren/oric_eieren_01.pdf'),
		),
		array(
			'type' => 'magazine',
			'name' => "Oric-Eieren",
			'language' => 'no',
			'issue' => 'Nr. 2 Nov/Dec',
			'year' => '1983', 'month' => 11,
			'publisher' => 'Oric Brukerklubb',
			'cover' => 'missing.jpg',
		),
		array(
			'type' => 'magazine',
			'name' => "Oric-Eieren",
			'language' => 'no',
			'issue' => 'Nr. 3 Jan/Feb',
			'year' => '1984', 'month' =>  1,
			'publisher' => 'Oric Brukerklubb',
			'cover' => 'missing.jpg',
		),
		array(
			'type' => 'magazine',
			'name' => "Oric-Eieren",
			'language' => 'no',
			'issue' => 'Nr. 4 March/April',
			'year' => '1984', 'month' =>  3,
			'publisher' => 'Oric Brukerklubb',
			'cover' => 'missing.jpg',
		),

		// -------------------------- Atmosphäre Magazine ----------------------
		array('type' => 'magazine','name' => "ATMOSPHÄRE",'language' => 'de','issue' => 'Nr. 1 Juli'             ,'year' => '1986', 'month' =>  7,'publisher' => 'KDB Computer Versand','cover' => 'atmosphare/atmosphare_1986_01.jpg','download' => array('de' => "atmosphare/atmosphare_01.pdf"), ),
		array('type' => 'magazine','name' => "ATMOSPHÄRE",'language' => 'de','issue' => 'Nr. 2 September/Oktober','year' => '1986', 'month' =>  9,'publisher' => 'KDB Computer Versand','cover' => 'atmosphare/atmosphare_1986_02.jpg','download' => array('de' => "atmosphare/atmosphare_02.pdf"), ),
		array('type' => 'magazine','name' => "ATMOSPHÄRE",'language' => 'de','issue' => 'Nr. 3 November/Dezember','year' => '1986', 'month' => 11,'publisher' => 'KDB Computer Versand','cover' => 'atmosphare/atmosphare_1986_03.jpg','download' => array('de' => "atmosphare/atmosphare_03.pdf"), ),

		array('type' => 'magazine','name' => "ATMOSPHÄRE",'language' => 'de','issue' => 'Nr. 4 Januar/Februar'   ,'year' => '1987', 'month' =>  1,'publisher' => 'KDB Computer Versand','cover' => 'atmosphare/atmosphare_1987_04.jpg','download' => array('de' => "atmosphare/atmosphare_04.pdf"), ),
		array('type' => 'magazine','name' => "ATMOSPHÄRE",'language' => 'de','issue' => 'Nr. 5 März/April'       ,'year' => '1987', 'month' =>  3,'publisher' => 'KDB Computer Versand','cover' => 'atmosphare/atmosphare_1987_05.jpg','download' => array('de' => "atmosphare/atmosphare_05.pdf"), ),
		array('type' => 'magazine','name' => "ATMOSPHÄRE",'language' => 'de','issue' => 'Nr. 6 Mai/Juni'         ,'year' => '1987', 'month' =>  5,'publisher' => 'KDB Computer Versand','cover' => 'atmosphare/atmosphare_1987_06.jpg','download' => array('de' => "atmosphare/atmosphare_06.pdf"), ),

	/*		
		array(
			'type' => 'magazine',
			'name' => "ATMOSPHÄRE",
			'language' => 'de',
			'issue' => 'Nr. 1 Juli',
			'year' => '1986', 'month' =>  7,
			'publisher' => 'KDB Computer Versand',
			'cover' => 'atmosphare/atmosphare_1986_01.jpg',
			'download' => array('de' => "atmosphare/atmosphare_01.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "ATMOSPHÄRE",
			'language' => 'de',
			'issue' => 'Nr. 2 September/Oktober',
			'year' => '1986', 'month' =>  9,
			'publisher' => 'KDB Computer Versand',
			'cover' => 'atmosphare/atmosphare_1986_02.jpg',
			'download' => array('de' => "atmosphare/atmosphare_02.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "ATMOSPHÄRE",
			'language' => 'de',
			'issue' => 'Nr. 3 November/Dezember',
			'year' => '1986', 'month' => 11,
			'publisher' => 'KDB Computer Versand',
			'cover' => 'atmosphare/atmosphare_1986_03.jpg',
			'download' => array('de' => "atmosphare/atmosphare_03.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "ATMOSPHÄRE",
			'language' => 'de',
			'issue' => 'Nr. 4 Januar/Februar',
			'year' => '1987', 'month' =>  1,
			'publisher' => 'KDB Computer Versand',
			'cover' => 'atmosphare/atmosphare_1987_04.jpg',
			'download' => array('de' => "atmosphare/atmosphare_04.pdf"),
		),
		*/

		// -------------------------- Atmosphere Magazine (German) ----------------------
		array(
			'type' => 'magazine',
			'name' => "ATMOSphere",
			'language' => 'de',
			'issue' => 'Nr. 15 Jan/Feb',
			'year' => '1986', 'month' =>  1,
			'publisher' => 'Oric Club Giessen',
			'cover' => 'atmosphere/atmosphere_1986_15.jpg',
			'download' => array('de' => "atmosphere/atmosphere_1986_15.pdf"),
		),

		// -------------------------- Atmosphere Magazine (French) ----------------------
		array(
			'type' => 'magazine',
			'name' => "Atmosphere Mag",
			'language' => 'fr',
			'issue' => 'Numéro 3 Mai',
			'year' => '1990', 'month' =>  3,
			'cover' => 'atmosphere_fr/atmosphere_1990_03.jpg',
		),

		// -------------------------- Teletic ----------------------
		array(
			'type' => 'magazine',
			'name' => "Le journal de Teletic",
			'language' => 'fr',
			'issue' => 'Numéro 3 Mai',
			'year' => '1988', 'month' =>  5,
			'cover' => 'teletic/teletic_1988_03.jpg',
			'download' => array('fr' => "teletic/Teletic-03.pdf"),
			'publisher' => 'Aedit',
		),


		// -------------------------- Der Oric Brief ----------------------
		array('type' => 'magazine','name' => "Der Oric-Brief",'language' => 'de','issue' => 'Nr. 1 October'          ,'year' => '1983', 'month' => 10,'publisher' => 'J. Müller','cover' => 'der_oric_brief/der_oric_brief_1.jpg','download' => array('de' => "der_oric_brief/der_oric_brief_1.pdf"),),
		array('type' => 'magazine','name' => "Der Oric-Brief",'language' => 'de','issue' => 'Nr. 2 Januar'           ,'year' => '1984', 'month' =>  1,'publisher' => 'J. Müller','cover' => 'der_oric_brief/der_oric_brief_2.jpg','download' => array('de' => "der_oric_brief/der_oric_brief_2.pdf"),),
		array('type' => 'magazine','name' => "Der Oric-Brief",'language' => 'de','issue' => 'Nr. 3 April/Mai'        ,'year' => '1984', 'month' =>  4,'publisher' => 'J. Müller','cover' => 'der_oric_brief/der_oric_brief_3.jpg','download' => array('de' => "der_oric_brief/der_oric_brief_3.pdf"),),
		array('type' => 'magazine','name' => "Der Oric-Brief",'language' => 'de','issue' => 'Nr. 4 Juli/August'      ,'year' => '1984', 'month' =>  7,'publisher' => 'J. Müller','cover' => 'der_oric_brief/der_oric_brief_4.jpg','download' => array('de' => "der_oric_brief/der_oric_brief_4.pdf"),),
		array('type' => 'magazine','name' => "Der Oric-Brief",'language' => 'de','issue' => 'Nr. 5 Dezember'         ,'year' => '1984', 'month' => 12,'publisher' => 'J. Müller','cover' => 'der_oric_brief/der_oric_brief_5.jpg','download' => array('de' => "der_oric_brief/der_oric_brief_5.pdf"),),
		array('type' => 'magazine','name' => "Der Oric-Brief",'language' => 'de','issue' => 'Nr. 6 März'             ,'year' => '1985', 'month' =>  3,'publisher' => 'J. Müller','cover' => 'der_oric_brief/der_oric_brief_6.jpg','download' => array('de' => "der_oric_brief/der_oric_brief_6.pdf"),),

		// -------------------------- BIT Magazine ----------------------
		array('type' => 'magazine','name' => "BIT",'language' => 'de','issue' => 'Nr. 1 Januar/Februar'   ,'year' => '1987', 'month' =>  1,'publisher' => 'Oric Club Velbert','cover' => 'bit/bit_1987_01.jpg','download' => array('de' => "bit/bit_1987_01.pdf"),),
		array('type' => 'magazine','name' => "BIT",'language' => 'de','issue' => 'Nr. 2 Marz/April'       ,'year' => '1987', 'month' =>  3,'publisher' => 'Oric Club Velbert','cover' => 'bit/bit_1987_02.jpg','download' => array('de' => "bit/bit_1987_02.pdf"),),
		array('type' => 'magazine','name' => "BIT",'language' => 'de','issue' => 'Nr. 3 Mai/Juni'         ,'year' => '1987', 'month' =>  5,'publisher' => 'Oric Club Velbert','cover' => 'bit/bit_1987_03.jpg','download' => array('de' => "bit/bit_1987_03.pdf"),),
		array('type' => 'magazine','name' => "BIT",'language' => 'de','issue' => 'Nr. 4 Juli/August'      ,'year' => '1987', 'month' =>  7,'publisher' => 'Oric Club Velbert','cover' => 'bit/bit_1987_04.jpg','download' => array('de' => "bit/bit_1987_04.pdf"),),
		array('type' => 'magazine','name' => "BIT",'language' => 'de','issue' => 'Nr. 5 September/Oktober','year' => '1987', 'month' =>  9,'publisher' => 'Oric Club Velbert','cover' => 'bit/bit_1987_05.jpg','download' => array('de' => "bit/bit_1987_05.pdf"),),
		array('type' => 'magazine','name' => "BIT",'language' => 'de','issue' => 'Nr. 6 November/Dezember','year' => '1987', 'month' => 11,'publisher' => 'Oric Club Velbert','cover' => 'bit/bit_1987_06.jpg','download' => array('de' => "bit/bit_1987_06.pdf"),),

		array('type' => 'magazine','name' => "BIT",'language' => 'de','issue' => 'Nr. 1 Januar/Februar'   ,'year' => '1988', 'month' =>  1,'publisher' => 'Oric Club Velbert','cover' => 'bit/bit_1988_01.jpg','download' => array('de' => "bit/bit_1988_01.pdf"),),
		array('type' => 'magazine','name' => "BIT",'language' => 'de','issue' => 'Nr. 2 Marz/April'       ,'year' => '1988', 'month' =>  3,'publisher' => 'Oric Club Velbert','cover' => 'bit/bit_1988_02.jpg','download' => array('de' => "bit/bit_1988_02.pdf"),),
		array('type' => 'magazine','name' => "BIT",'language' => 'de','issue' => 'Nr. 4 Juli/August'      ,'year' => '1988', 'month' =>  7,'publisher' => 'Oric Club Velbert','cover' => 'bit/bit_1988_04.jpg','download' => array('de' => "bit/bit_1988_04.pdf"),),

		array('type' => 'magazine','name' => "BIT",'language' => 'de','issue' => 'Nr. 3 Mai/Juni'         ,'year' => '1989', 'month' =>  5,'publisher' => 'Oric Club Velbert','cover' => 'bit/bit_1989_03.jpg','download' => array('de' => "bit/bit_1989_03.pdf"),),
		array('type' => 'magazine','name' => "BIT",'language' => 'de','issue' => 'Nr. 4 Juli/August'      ,'year' => '1989', 'month' =>  7,'publisher' => 'Oric Club Velbert','cover' => 'bit/bit_1989_04.jpg','download' => array('de' => "bit/bit_1989_04.pdf"),),
		array('type' => 'magazine','name' => "BIT",'language' => 'de','issue' => 'Nr. 5 September/Oktober','year' => '1989', 'month' =>  9,'publisher' => 'Oric Club Velbert','cover' => 'bit/bit_1989_05.jpg','download' => array('de' => "bit/bit_1989_05.pdf"),),
		array('type' => 'magazine','name' => "BIT",'language' => 'de','issue' => 'Nr. 6 November/Dezember','year' => '1989', 'month' => 11,'publisher' => 'Oric Club Velbert','cover' => 'bit/bit_1989_06.jpg','download' => array('de' => "bit/bit_1989_06.pdf"),),

		array('type' => 'magazine','name' => "BIT",'language' => 'de','issue' => 'Nr. 1 Januar/Februar'   ,'year' => '1990', 'month' =>  1,'publisher' => 'Oric Club Velbert','cover' => 'bit/bit_1990_01.jpg','download' => array('de' => "bit/bit_1990_01.pdf"),),
		array('type' => 'magazine','name' => "BIT",'language' => 'de','issue' => 'Nr. 2 Marz/April'       ,'year' => '1990', 'month' =>  3,'publisher' => 'Oric Club Velbert','cover' => 'bit/bit_1990_02.jpg','download' => array('de' => "bit/bit_1990_02.pdf"),),
		array('type' => 'magazine','name' => "BIT",'language' => 'de','issue' => 'Nr. 4 Juli/August'      ,'year' => '1990', 'month' =>  7,'publisher' => 'Oric Club Velbert','cover' => 'bit/bit_1990_04.jpg','download' => array('de' => "bit/bit_1990_04.pdf"),),
		array('type' => 'magazine','name' => "BIT",'language' => 'de','issue' => 'Nr. 5 September/Oktober','year' => '1990', 'month' =>  9,'publisher' => 'Oric Club Velbert','cover' => 'bit/bit_1990_05.jpg','download' => array('de' => "bit/bit_1990_05.pdf"),),

		// -------------------------- Basic programming ----------------------------------
		// https://www.defence-force.org/computing/oric/library/lib_coding_basic/index.htm
		array(
			'type' => 'book',
			'name' => "Jeux et programmes pour l'ordinateur Oric 1",
			'language' => 'fr',
			'author' => "Laurent Chemla|Nicolas Stronck",
			'cover' => "missing.jpg",
			'year' => '1984',
			'publisher' => "Shift Éditions",
		),
		array(
			'type' => 'book',
			'name' => "Jeux et programmes pour l'ordinateur Oric Atmos",
			'language' => 'fr',
			'author' => "Laurent Chemla|Nicolas Stronck",
			'cover' => "book_jeux_et_programmes_pour_ordinateur_oric_atmos.jpg",
			'year' => '1984',
			'publisher' => "Shift Éditions",
		),
		array(
			'type' => 'book',
			'name' => "Oric Atmos Oric-1 praktische tips, programa's, Basic",
			'language' => 'nl',
			'author' => "Albert Sickler|Wim Wijnolts",
			'cover' => "oric_atmos_oric1_praktische_tips_programmas_BASIC.jpg",
			'download' => array('nl' => "oric_atmos_oric1_praktische_tips_programmas_BASIC.pdf"),
			'year' => '1985',
			'isbn' => "ISBN 90 201 1700 9",
			'publisher' => "Kluwer Technische Boeken",
			'description' => array(
				'fr' => "L'auteur donne au novice une excellente présentation de la machine, commencant par l'utilisation du clavier et des fonctions sur l'écran, suivit d'un apprentisage complet du langage BASIC.",
				'en' => "The author gives the computer novice an excellent introduction to this computer. First of all, the reader gets to know the keyboard and the various screen functions, after which the main component follows: a complete BASIC course."),
		),
		array(
			'type' => 'manual',
			'name' => "Oric 1 Bediener-Handbuch",
			'language' => 'de',
			'cover' => "oric1_bediener-handbuch.jpg",
			'publisher' => "MVB GmbH",
			'download' => array('de' => "oric1_bediener-handbuch.pdf"),
		),

		array(
			'type' => 'book',
			'name' => "Atmos, 56 Programmes",
			'language' => 'fr',
			'author' => "Stanley R. Trost",
			'cover' => "atmos_56_programmes.jpg",
			'publisher' => "Sybex",
			'year' => '1984',
			'isbn' => "ISBN 2-7361-0072-9",
			'download' => array('fr' => "atmos_56_programmes.pdf"),
		),

		array(
			'type' => 'book',
			'name' => "Oric Atmos, vos programmes",
			'language' => 'fr',
			'author' => "Michel Bussac|G. Espeche",
			'cover' => "book_oric_atmos_vos_programmes.jpg",
			'year' => '1984',
			'publisher' => "Cedic|Nathan|Collection micro monde",
			'isbn' => "ISBN 2-7124-1510-8",
 			'download' => array('fr' => "atmos_vos_programmes.pdf"),
			'description' => array(
				'fr' => "Ce livre présente différents types de programmes en BASIC (+ Machine code DATA): les jeux, la programmation d’utilitaires, applications personnelles, etc .. 
					Ce qui est particulièrement intéressant dans ce livre est le fait, mis à part que les programmes sont très bien commentés, que vous trouverez de très belles routines en code machine (défilement vertical et horizontal) et sur la façon de les réutiliser. 
					Grâce à ces petits programmes, beaucoup de conseils utiles sont donnés dans différents domaines: les attributs de texte, utilisation de la ligne d’état, la redéfinition de caractères, chargement, sauvegarde, mémoire, Hires, Lores, musique, sons, etc .. 
					Définitivement un bon livre pour les débutants qui souhaitent maîtriser l'Atmos, progressivement. 
					Certainement, pour moi, c'est le produit intermédiaire entre le manuel de l'utilisateur, et 'Au coeur de l'Oric Atmos' de Gilles Bertin.
					A l'arrière du livre on peut lire:
					<i>
					Basic + langage machine
					Des jeux de réflexes pour les amateurs de sensations fortes, des spectacles visuels et sonores, des jeux de hasard et de mémoire, des jeux pour apprendre et des jeux pour créer.
					Ce livre propose aux utilisateurs de ORIC-1 et ORIC ATMOS, 26 programmes variés et originaux, faciles à transcrire.
					Aux amateurs de programmation, il offre quelques incursions dans le langage machine pour des réalisations particulièrement spectaculaires.
					</i>",
				'en' => "This book present various type in programs in BASIC (+Machine code in DATA) : games, programming utilities, home applications, etc... 
					What is particularly interesting in this book is the fact, put aside that the programs are very well commented, that you will find some very nice machine code routines (vertical and horizontal hires scrolling) and how to reuse them. 
					Through those little programs, a lot of very useful tips are given in various domains : Text attributes, state line, characters redef, Loading, Saving, memory, Hires, Lores, Music, sounds, etc... 
					Definitely a good book for the beginner who wish to master the Atmos, progressivelly. 
					Definitely, for me, it is the intermediate book between the user manual, and 'Au coeur de l'Oric Atmos' from Gilles Bertin.  
					On the back of the book can be read the folowing:
					<i>
					Basic + machine code
					Some reflexes games for lovers big thrills, some visual and sound spectacle, some luck and memory games, and some games to learn and create.
					This book proposes to the users of Oric-1 and ORIC ATMOS, 26 easy to transcribe, varied and original programs.
					To the amateurs of programming, it offers some incursions into the machine language for particularly spectacular achievements.
					</i>"),
		),

		array(
			'type' => 'book',
			'name' => "Parole et Micros - Synthèse Vocale",
			'language' => 'fr',
			'author' => "Hervé Benoit|Michel Weissgerber",
			'cover' => "parole_et_micros-synthese_vocale.jpg",
			'year' => '1985',
			'publisher' => "Cedic|Nathan",
			'isbn' => "ISBN 2-7124-1701-1",
 			'download' => array('fr' => "parole_et_micros-synthese_vocale.pdf"),
			'description' => array(
				'fr' => "Ce livre documente l'utilisation du synthétiseur vocal MEA 8000 avec différents processeurs (6502, Z80 et 6809), avec une description du fonctionnement interne et du code commenté",
				'en' => "This book explain how to interface the MEA 8000 speech synthesizer chip with different processors (6502, Z80 and 6809), complete with internal decription and commented code"),
		),

		array(
			'type' => 'book',
			'name' => "Pratique de l'Oric Atmos & 36 programmes",
			'language' => 'fr',
			'author' => "H.Lilen|J.Benard",
			'cover' => "pratique_de_l_oric_atmos_et_36_programmes.jpg",
			'download' => array('fr' => "pratique_de_l_oric_atmos_et_36_programmes.pdf"),
			'year' => '1984',
			'publisher' => "Editions Radio",
			'isbn' => "ISBN 2 7091 0947 6",
			'description' => array(
				'fr' => "36 programmes, avec tous les algorithmes et explications nécéssaires.
					Existe aussi en version pour l'Oric 1.",
				'en' => "36 programs, with algorithms and all needed explanations. 
					There is also an Oric 1 version."),
		),
		array( // From Maxime Croizer
			'type' => 'book',
			'name' => "Jeux en basic sur Oric",
			'language' => 'fr',
			'author' => "Peter Shaw",
			'cover' => "jeux_en_basic_sur_oric.jpg",
			'download' => array('fr' => "jeux_en_basic_sur_oric.pdf"),
			'year' => '1983',
			'publisher' => "Sybex",
			'description' => array(
				'fr' => "Des jeux en basic...",
				'en' => "Some basic games..."),
		),

		array(
			'type' => 'book',
			'name' => "Jeux en basic sur Atmos",
			'language' => 'fr',
			'author' => "Pierre Monsaut",
			'cover' => "jeux_en_basic_sur_atmos.jpg",
			'download' => array('fr' => "jeux_en_basic_sur_atmos.pdf"),
			'year' => '1983',
			'publisher' => "Sybex",
			'description' => array(
				'fr' => "Des jeux en basic...",
				'en' => "Some basic games..."),
		),
		array(
			'type' => 'book',
			'name' => "Faites vos jeux avec Oric",
			'language' => 'fr',
			'author' => "Claude Delannoy",
			'cover' => "faites_vos_jeux_avec_oric.jpg",
			'download' => array('fr' => "faites_vos_jeux_avec_oric.pdf"),
			'year' => '1984',
			'publisher' => "Eyrolles",
			'description' => array(
				'fr' => "Des jeux en basic...
					Comme beaucoup de livres, celui-ci à été réactualisé en version Atmos.",
				'en' => "Some basic games...
					Like most of those books, it has been updated with an Atmos version."),
		),
		array(
			'type' => 'book',
			'name' => "Faites vos jeux avec Atmos",
			'language' => 'fr',
			'author' => "Claude Delannoy",
			'cover' => "faites_vos_jeux_avec_atmos.jpg",
			'download' => array('fr' => "faites_vos_jeux_avec_atmos.pdf"),
			'year' => '1984',
			'publisher' => "Eyrolles",
			'description' => array(
				'fr' => "Des jeux en basic...
					Comme beaucoup de livres, celui-ci à été réactualisé en version Atmos.",
				'en' => "Some basic games...
					Like most of those books, it has been updated with an Atmos version."),
		),

		array(
			'type' => 'book',
			'name' => "La conduite de l'Oric 1",
			'language' => 'fr',
			'author' => "Jean-Yves Astier",
			'year' => '1983',
			'publisher' => "Eyrolles",
			'cover' => "la_conduite_de_oric1.jpg",
			'download' => array('fr' => "la_conduite_de_oric1.pdf"),
		),

		array(
			'type' => 'book',
			'name' => "Oric-1 a la conquête des jeux",
			'language' => 'fr',
			'author' => "Jean-Yves Astier",
			'year' => '1984',
			'publisher' => "Eyrolles",
			'cover' => "oric1_a_la_conquete_des_jeux.jpg",
			'download' => array('fr' => "oric1_a_la_conquete_des_jeux.pdf"),
		),

		array(
			'type' => 'book',
			'name' => "Atmos a la conquête des jeux",
			'language' => 'fr',
			'author' => "Jean-Yves Astier",
			'year' => '1984',
			'publisher' => "Eyrolles",
			'cover' => "atmos_a_la_conquete_des_jeux.jpg",
			'download' => array('fr' => "atmos_a_la_conquete_des_jeux.pdf"),
			'description' => array(
				'fr' => "Ce livre propose les jeux suivants:
					Glouton, Réflexe, Caméléons, Cache-tampon, Tour de Hanoï, Chute d'étoiles, Voyage dans l'espace, Chenille, 
					Enclumes, Mur de briques, Bataille navale, Master Mind, Beatles, Pendu.
					La fin du livre donne quelques astuces de programmation: Redéfinition des caractères, génération de
					code par programme, manipulation de la mémoire vidéo, et une petite initiation à l'assembleur 6502.",
				'en' => "This book contains the following games:
					Gobbler, Reflexes, Chameleons, Cache-tampon, Hanoi towers, Star falls, Space travel, Centipede, Anvil,
					Wall breaker, See war, Master Mind, Beatles, Hangman.
					At the end, the book give some programming tricks: Character redefinition, code generation, video memory
					manipulation and a short 6502 assembly code introduction."),
		),
		array(
			'type' => 'book',
			'name' => "Getting started on the Oric-1",
			'language' => 'en',
			'author' => "D.G.J. Cole",
			'cover' => "getting_started_on_the_oric1.jpg",
			'download' => array('en' => "getting_started_on_the_oric1.pdf"),
			'year' => '1983',
			'publisher' => "Ellis Horwood Ltd",
			'isbn' => "ISBN 0-85312-656-9",
		),
		array(
			'type' => 'book',
			'name' => "Easy Programming for the Oric-1",
			'language' => 'en',
			'author' => "Ian Stewart|Robin Jones",
			'cover' => "easy_programming_for_the_oric1.jpg",
			'download' => array('en' => "easy_programming_for_the_oric1.pdf"),
			'year' => '1983',
			'publisher' => "Shiva",
			'isbn' => "ISBN 0 906812 43 7",
		),

		array(
			'type' => 'book',
			'name' => "40 educational games for the oric atmos",
			'download' => array('en' => "40_educational_games_for_the_oric_atmos.pdf"),
			'language' => 'en',
			'author' => "Vince Apps",
			'year' => '1984',
			'publisher' => "Granada",
			'isbn' => "ISBN 0 246 12557 8",
			'cover' => "40_educational_games_for_the_oric_atmos.jpg",
			'description' => array(
				'fr' => "Plusieurs programmes BASIC dont le but principal est d'être éducatifs :)",
				'en' => "Several BASIC progs with education in mind."),
		),

		array(
			'type' => 'book',
			'name' => "Games To Play On Your Oric 1",
			'language' => 'en',
			'author' => "Czes Kosniowski",
			'cover' => "games_to_play_on_your_oric1.jpg",
			'download' => array('en' => "easy_programming_for_the_oric1.pdf"),
			'year' => '1983',
			'publisher' => "Shiva",
			'isbn' => "ISBN 090681248",
			'description' => array(
				'fr' => "Ce livre contient des programmes en BASIC. Contrairement à ce qu'indique le titre, ce livre contient
					aussi quelques démonstrations graphiques, en plus des jeux.",
				'en' => "Czes wrote this book of BASIC programs. 
					Despite the name it features graphics demos etc, not just games."),
		),
		array(
			'type' => 'book',
			'name' => "Learning to use the Oric 1 computer",
			'language' => 'en',
			'author' => "Steven Blake",
			'cover' => "book_learning_oric1.jpg",
			'download' => array('en' => "learning_to_use_the_oric1_computer.pdf"),
			'year' => '1983',
			'publisher' => "Gower",
			'isbn' => "ISBN 0 566 03495 6",
		),

		array(
			'type' => 'book',
			'name' => "Games for your oric",
			'language' => 'en',
			'author' => "Peter Shaw",
			'cover' => "games_for_your_oric.jpg",
			'download' => array('en' => "games_for_your_oric.pdf"),
			'year' => '1983',
			'publisher' => "Virgin",
			'isbn' => "ISBN 090708091",
			'description' => array(
				'fr' => "Une quantité de petit jeux en baisc, mais il y a aussi un jeu d'aventure complet de 25 ko !",
				'en' => "Many little basic games, but there is a 25kb adventure game !"),
		),

		array(
			'type' => 'book',
			'name' => "More Games for Your Oric",
			'language' => 'en',
			'author' => "Peter Shaw",
			'year' => '1984',
			'publisher' => "Virgin",
			'isbn' => "ISBN 0863690343",
			'cover' => "more_games_for_your_oric.jpg",
			'download' => array('en' => "more_games_for_your_oric.pdf"),
			'description' => array(
				'fr' => "Comme son titre l'indique, c'est la suite de 'Games for your Oric'.
					C'est plus ou moins la même chose, le même livre avec le même type de contenu.
					Toujours par Peter Shaw, avec pour éditeur Tim Hartnell.",
				'en' => "As the title say it, it's a follow up of 'Games for your Oric'.
					This is more of the same. Same size book, Same sort of content. 
					Again by Peter Shaw with Tim Hartnell as editor."),
		),
		array(
			'type' => 'book',
			'name' => "Getting more from your oric",
			'language' => 'en',
			'author' => "Henry Hicks",
			'cover' => "book_getting_more.jpg",
			'year' => '1984',
			'publisher' => "Sigma Technical Press",
			'isbn' => "ISBN 0 905104 56 0",
 			'download' => array('en' => "getting_more_from_your_oric.pdf"),
			'description' => array(
				'fr' => "Cet ouvrage vous initie au BASIC de L’ORIC et explique comment en étendre l'utilisation en utilisant les appels système, et le code machine, etc. 
					Pour les amateurs de matériel, Henry Hicks met l’ORIC en pièces en expliquant exactement ce que fait chaque puce. 
					Il y’a une description complète du processeur de l'ORIC – Le 6502 - et ce que cela implique au niveau de la programmation en assembleur. 
					Les besoins des programmeur les plus aventureux sont également couverts - vous y trouverez de nombreux conseils et astuces intéressantes - y compris de nombreuses techniques de programmation avancées. 

					Une partie de l'ouvrage s'intéresse aussi à la communication à d'autres périphériques. 
					Henry Hicks est un expert dans ce domaine et explique, en termes simples, l'utilisation d’extensions du matériel et la façon de les contrôler.",
				'en' => "This book takes you through ORIC BASIC and explains how to extend the use of BASIC by using system calls, machine code and the like. 
					For the hardware enthusiast, Henry Hicks literally takes the ORIC apart and
					puts it back together again - explaining exactly what each chip does. There is a full description of the ORIC's CPU - the 6502 chip - and how it relates to assembler language programming. 
					The needs of the more adventurous programmer are also covered - you'll find many stimulating hints and tips - including many advanced programming techniques.

					Importantly, a part of the book is concerned with communication to other devices. 
					Henry Hicks is an expert in this field and explains, in simple terms, the uses of add-on hardware and how to control it."),
		),
		array(
			'type' => 'book',
			'name' => "Exploring Adventures on the Oric 48k",
			'language' => 'en',
			'author' => 'Peter Gerrard',
			'cover' => "exploring_adventures_on_the_oric.jpg",
			'download' => array('en' => "exploring_adventures_on_the_oric.pdf"),
			'year' => '1984',
			'publisher' => 'Duckworth',
			'isbn' => "ISBN 0 7156 1822 9",
		),

		array(
			'type' => 'book',
			'name' => "Dynamic Games for Your Oric",
			'language' => 'en',
			'author' => "Clive Gifford",
			'publisher' => 'Interface Publications',
			'isbn' => 'ISBN 0 907563 45 7',
			'cover' => "dynamic_games_for_your_oric.jpg",
			'download' => array('en' => "dynamic_games_for_your_oric.pdf"),
			'year' => '1983', 'month' => 9,
			'description' => array(
				'fr' => "Un livre qui propose des programmes en BASIC.",
				'en' => "A book of BASIC programs."),
		),

		/*
		30 Hour BASIC, Oric Edition by Clive Prigmore. It was published by the National Extension College in 1983. 
		The aim of this book was to teach the reader how to program in Oric BASIC, presumably in around 30 hours. 
		Versions of this book were available for a number of computers, I am aware of specific examples for the Commodore 64, ZX Spectrum, ZX81 and BBC
		*/
		array(
			'type' => 'book',
			'name' => "30 Hour BASIC - Oric Edition",
			'author' => "Clive Prigmore|Paul Shreeve",
			'language' => 'en',
			'cover' => "30_hours_basic-oric_edition.jpg",
			'download' => array('en' => "30_hours_basic-oric_edition.pdf"),
			'year' => '1983',
			'publisher' => "National Extension College",
			'description' => array(
				'fr' => "Un livre qui accompagne le programme d'apprentissage de la BBC",
				'en' => "The companion book of the BBC TV show"),
		),
		array(
			'type' => 'book',
			'name' => "35 programmes pour oric 1 + atmos",
			'author' => "Dominique Lasseran",
			'publisher' => "ETSF - Micro Systemes",
			'language' => 'fr',
			'cover' => "35_programmes_pour_oric1_plus_atmos.jpg",
			'download' => array('fr' => "35_programmes_pour_oric1_plus_atmos.pdf"),
			'year' => '1984',
			'isbn' => 'ISBN 2-85535-100-6',
		),

		array(
			'type' => 'book',
			'name' => "Pilotez votre oric 1 + atmos",
			'author' => "Patrick Gueulle",
			'language' => 'fr',
			'cover' => "pilotez_votre_oric1_atmos.jpg",
			'download' => array('en' => "pilotez_votre_oric1_atmos.pdf"),
			'year' => '1984',
			'publisher' => "ETSF - Micro Systemes",
			'isbn' => 'ISBN 2-85535-067-0',
		),

		array(
			'type' => 'book',
			'name' => "Boite a outils pour oric (Oric 1 et Atmos)- Tome 1",
			'author' => "Michel Martin",
			'language' => 'fr',
			'cover' => "boite_a_outils_pour_oric_tome_1.jpg",
			'download' => array('fr' => "boite_a_outils_pour_oric_tome_1.pdf"),
			'year' => '1984',
			'publisher' => "Editions du P.S.I.",
			'isbn' => 'ISBN 2.87109.008.4',
		),
		array(
			'type' => 'book',
			'name' => "Boite a outils pour oric - Tome 2",
			'author' => "Michel Martin",
			'language' => 'fr',
			'cover' => "boite_a_outils_pour_oric_tome_2.jpg",
			'download' => array('fr' => "boite_a_outils_pour_oric_tome_2.pdf"),
			'year' => '1984',
			'publisher' => "Editions du P.S.I.",
			'isbn' => 'ISBN 2.87109.011.4',
		),

		array(
			'type' => 'book',
			'name' => "The oric 1 program book, 50 programs",
			'language' => 'en',
			'author' => "Vince Apps",
			'cover' => "the_oric1_program_book_50_programs.jpg",
			'download' => array('en' => "the_oric1_program_book_50_programs.pdf"),
			'year' => '1983',
			'publisher' => "Phoenix Publishing Associates",
			'isbn' => "ISBN 0 9465 7601 7",
			'description' => array(
				'fr' => "Ce libre contient 50 programmes a usage personel, éducatif et commercial, qui fonctionnent sur tous les modeals d'oric 1.",
				'en' => "This book contains 50 programs for home, educational and business use, that are compatible with all models of oric 1."),
		),
		array(
			'type' => 'book',
			'name' => "Meteoric programming for the oric 1",
			'language' => 'en',
			'author' => "John Vander Reyden",
			'year' => '1983',
			'publisher' => "Melbourne House",
			'isbn' => "ISBN 0 86161 124 1",
			'cover' => "meteoric_programming_for_the_oric1.jpg",
			'download' => array('en' => "meteoric_programming_for_the_oric1.pdf"),
			'description' => array(
				'fr' => "Plutot que parler du livre, je préfere résumer ce qui est écrit au dos du livre:
					<b>Attention</b>
					Votre Oric-1 est sur le point de devenir Mete-ORIC.
					Maintenant vous pouvez obtenir des performances meteoric de votre micro ordinateur avec cette
					collection de 30 programmes spéciallement conçus pour votre Oric-1.
					[...]
					The livre proposes de nombreux utilitaires qui vous permettrons de vraiment amméliorer vos 
					propres programmes. Ceci inclu des routines de renumérotation, un moniteur de code machine,
					un programme d'effacement de lignes par bloc, et des aides graphiques.
					[...]
					Les programmeurs expérimentés qui souhaitent développer leurs propres programes météoric vont
					vraiment apprécier les trucs et astuces professionelles qui ont été inclues dans ce livre.",
				'en' => "Instead of talking about this book, I prefer to write down what's written on the back:
					<b>Warning</b>
					Your Oric-1 is about to become Meteoric.
					Now you can achieve Meteoric software performance from your micro with this collection 
					of 30 dynamic programs, designed specifically for the Oric-1 home computer. 
					[...]
					The book includes many practical utilities that will enable you to really improve your own
					programs. These useful routines include Renumber, Machine Code Monitor, Block Line Deletion
					and Graphics Aid.
					[...]
					Experienced programmers who want to develop their own Meteoric programs will really appreciate
					all the experts hints and tips that have been included in the book."),
		),
		array(
			'type' => 'book',
			'name' => "The Atmos book of games",
			'language' => 'en',
			'author' => "Wynford James",
			'cover' => "the_atmos_book_of_games-micropress.jpg",
			'year' => '1984',
			'download' => array('en' => "the_atmos_book_of_games-micropress.pdf"),			
			'publisher' => "Micro Press",
			'isbn' => "ISBN 074470018",
			'description' => array(
				'fr' => "Ce livre est exactement le même que 20 Games For The Oric 1 excepté le
					fait que les programmes ont été légerement modifiés afin de pouvoir fonctionner
					aussi sur un oric Atmos.",
				'en' => "This book is exactly the same as 20 Games For The Oric 1 except 
					that the programs have all been altered slightly to run on the Atmos."),
		),
		array(
			'type' => 'book',
			'name' => "The Atmos book of games",
			'language' => 'en',
			'author' => "Mike James|S.M. Gee|Kay Ewbamk",
			'cover' => "book_the_atmos_book_of_games.jpg",
			'year' => '1984',
			'publisher' => "Granada",
			'isbn' => "ISBN 0-246-12534-9",
			'description' => array(
				'fr' => "Ce livre contient 21 programes en BASIC a tapper. Il contient d'utiles explication
					a propos du fonctionnement des programmes, ce qui est utile pour les débutants.",
				'en' => "It contains 21 programs in BASIC for you to type in. The book gives some explanation 
					of how the programs work which is useful to the beginner."),
		),
		array(
			'type' => 'book',
			'name' => "The oric book of games",
			'language' => 'en',
			'author' => "Mike James|S.M. Gee|Kay Ewbamk",
			'cover' => "the_oric_book_of_games.jpg",
			'download' => array('en' => "the_oric_book_of_games.pdf"),
			'year' => '1984',
			'publisher' => "Granada",
			'isbn' => "ISBN 024612534",
			'description' => array(
				'fr' => "Ce livre contient 21 programes en BASIC a tapper. Il contient d'utiles explication
					a propos du fonctionnement des programmes, ce qui est utile pour les débutants.",
				'en' => "It contains 21 programs in BASIC for you to type in. The book gives some explanation 
					of how the programs work which is useful to the beginner."),
		),

		array(
			'type' => 'book',
			'name' => "Pratique de l'oric 1, et 36 programmes",
			'language' => 'fr',
			'author' => "H.Lilen|J.Benard",
			'cover' => "pratique_de_l_oric1_et_36_programmes.jpg",
			'download' => array('fr' => "pratique_de_l_oric1_et_36_programmes.pdf"),
			'year' => '1983',
			'publisher' => "Editions Radio",
			'isbn' => "ISBN 2 7091 0932 8",
			'description' => array(
				'fr' => "36 programmes, avec tous les algorithmes et explications nécéssaires.
					Il existe aussi une version pour l'Oric Atmos.",
				'en' => "36 programs, with algorithms and all needed explanations. 
					There is also an Oric Atmos version."),
		),
		array(
			'type' => 'book',
			'name' => "102 programmes pour l'oric atmos",
			'language' => 'fr',
			'author' => "Jacques Deconchat",
			'cover' => "102_programmes_pour_oric_atmos.jpg",
			'download' => array('fr' => "102_programmes_pour_oric_atmos.pdf"),
			'year' => '1984', 'month' => 9,
			'publisher' => "Editions du P.S.I.",
			'isbn' => "ISBN 2-86595-179-0",
		),

		array(
			'type' => 'book',
			'name' => "20 games for the ORIC-1",
			'language' => 'en',
			'author' => "Wynford James",
			'cover' => "20_games_for_the_oric1.jpg",
			'download' => array('en' => "20_games_for_the_oric1.pdf"),
			'year' => '1983',
			'publisher' => "Micro Press",
			'isbn' => "ISBN 0-7447-0003-5",
			'description' => array(
				'fr' => "20 programmes, avec tous les algorithmes et explications nécéssaires.",
				'en' => "20 programs, with algorithms and all needed explanations."),
		),
		array(
			'type' => 'book',
			'name' => "The ORIC-1 and how to get the most from it",
			'language' => 'en',
			'author' => "Ian Sinclair",
			'cover' => "the_oric1_and_how_to_get_the_most_from_it.jpg",
			'download' => array('en' => "the_oric1_and_how_to_get_the_most_from_it.pdf"),
			'year' => '1983',
			'publisher' => " Granada",
			'isbn' => "ISBN 0 246 12130 0",
			'description' => array(
				'fr' => "Excepté le fait d'avoir le titre le plus long pour un livre parlant d'oric, il 
					n'y a vraiment pas grand chose a en dire. C'est une sorte de manuel qui tire en longueur.",
				'en' => "This is the longest title for an Oric book. 
					Nothing special at all."),
		),
		array(
			'type' => 'book',
			'name' => "Getting started on your Oric",
			'language' => 'en',
			'cover' => "getting_started_on_your_oric.jpg",
			'download' => array('en' => "getting_started_on_your_oric.pdf"),
			'author' => "Tim Hartnell|Peter Shaw",
			'year' => '1983',
			'publisher' => "Futura Publications",
			'isbn' => "ISBN 0 7088 2447 1",
			'description' => array(
				'fr' => "Un tout petit livre, une sorte de mini manuel d'utilisation qui tient dans la poche.",
				'en' => "A very small book, a kind of mini-user-manual. Fits in a pocket."),
		),
		array(
			'type' => 'book',
			'name' => "Jeux sur Oric",
			'language' => 'fr',
			'author' => "David Chane-Hune|Fran&#231;ois Darbois",
			'cover' => "jeux_sur_oric.jpg",
			'download' => array('fr' => "jeux_sur_oric.pdf"),
			'year' => '1983',
			'publisher' => "Edimicro",
			'isbn' => "ISBN 2-904457-06-2",
			'description' => array(
				'fr' => "Un livre d'initiation qui comme son nom l'indique propose des jeux sur oric...",
				'en' => "An initiation book that proposes some games in basic."),
		),
		array(
			'type' => 'book',
			'name' => "Jeux sur Oric (nouvelles edition)",
			'language' => 'fr',
			'author' => "David Chane-Hune|Fran&#231;ois Darbois",
			'cover' => "jeux_sur_oric-nouvelle_edition.jpg",
			'download' => array('fr' => "jeux_sur_oric-nouvelle_edition.pdf"),
			'year' => '1983',
			'publisher' => "Edimicro",
			'isbn' => "ISBN 2-904457-06-2",
			'description' => array(
				'fr' => "Un livre d'initiation qui comme son nom l'indique propose des jeux sur oric...",
				'en' => "An initiation book that proposes some games in basic."),
		),

		array(
			'type' => 'book',
			'name' => "Jeux graphiques sur Atmos",
			'language' => 'fr',
			'author' => "David Chane-Hune|Fran&#231;ois Darbois",
			'cover' => "jeux_graphiques_sur_atmos.jpg",
			'download' => array('fr' => "jeux_graphiques_sur_atmos.pdf"),
			'year' => '1984', 'month' => 11,
			'publisher' => "Edimicro",
		),
		array(
			'type' => 'book',
			'name' => "Nouveaux jeux sur Atmos",
			'language' => 'fr',
			'author' => "Czes Kosniowski",
			'cover' => "nouveaux_jeux_sur_atmos.jpg",
			'download' => array('fr' => "nouveaux_jeux_sur_atmos.pdf"),
			'year' => '1984',
			'publisher' => "Edimicro",
		),

		array(
			'type' => 'book',
			'name' => "L'Oric à l'affiche - 20 programmes en Basic",
			'language' => 'fr',
			'author' => "Jean-Francois Sehan",
			'cover' => "l_oric_a_l_affiche.jpg|book_oric_affiche_2.jpg",
			'download' => array('fr' => "l_oric_a_l_affiche.pdf"),
			'isbn' => "ISBN 2.86595.130.8",
			'year' => '1984',
			'publisher' => "Editions du P.S.I.",
			'description' => array(
				'fr' => "20 programmes, avec tous les algorithmes et explications nécéssaires.",
				'en' => "20 programs, with algorithms and all needed explanations."),
		),
		array(
			'type' => 'book',
			'name' => "Des programmes pour votre Oric",
			'language' => 'fr',
			'author' => "Michel Piot",
			'cover' => "des_programmes_pour_votre_oric.jpg",
			'download' => array('fr' => "des_programmes_pour_votre_oric.pdf"),
			'year' => '1983',
			'publisher' => "Cedic|Nathan",
			'isbn' => "ISBN 2-7124-0539-0",
			'description' => array(
				'fr' => "24 petits programmes en basic (fonctionnant aussi sur oric 16ko) qui pourraient être proposés
					en support d'un cours d'apprentissage de Basic. 
					Chaque instruction utilisée est expliquée en détail ce qui permet de comprendre le programe.",
				'en' => "24 little basic programs (16kb Oric compatible) that could be used as a Basic learning class. 
					An explanation of used instructions alows to understand these programs. "),
		),
		array(
			'type' => 'book',
			'name' => "Programmes pour votre Oric",
			'author' => "Edgar Jacob|Joseph Portelli",
			'language' => 'fr',
			'cover' => "programmes_pour_votre_oric.jpg",
			'download' => array('fr' => "programmes_pour_votre_oric.pdf"),
			'year' => '1984',
			'publisher' => "Editions SORACOM",
			'isbn' => "ISBN 2-904032-13-4",
		),

		array(
			'type' => 'book',
			'name' => "Naviguez avec Oric-1 et Atmos",
			'author' => "Edgar Jacob|Joseph Portelli",
			'language' => 'fr',
			'cover' => "naviguez_avec_oric1_et_atmos.jpg",
			'download' => array('fr' => "naviguez_avec_oric1_et_atmos.pdf"),
			'year' => '1984',
			'publisher' => "Editions SORACOM",
			'isbn' => "ISBN 2-904032-26-6",
		),


		array(
			'type' => 'book',
			'name' => "Mieux Programmer sur Oric 1 et Atmos",
			'author' => "Michel Archambault",
			'language' => 'fr',
			'cover' => "mieux_programmer_sur_oric1_et_atmos.jpg",
			'download' => array('fr' => "mieux_programmer_sur_oric1_et_atmos.pdf"),
			'year' => '1985',
			'publisher' => "Editions SORACOM",
			'isbn' => "ISBN 2-904032-30-4",
		),

		array( // 60 programs
			'type' => 'book',
			'name' => "Sixty programs for the Oric-1",
			'language' => 'en',
			'author' => "Robert Erskine|Humphrey Walwyn|Paul Stanley|Michael Bews",
			'cover' => "sixty_programs_for_the_oric1.jpg",
			'download' => array('en' => "sixty_programs_for_the_oric1.pdf"),			
			'year' => '1983',
			'publisher' => "Pan",
			'isbn' => "ISBN 033028261",
			'description' => array(
				'fr' => "De nombreux petit programmes en basic de relativement bonne qualité, allant du space invaders au calcul de biorithmes. 
Un bon livre pour débuter.",
				'en' => "Many small basic programs, most of them are pretty good. From games like Alien to Bioryth-program. A good book for a beginner."),
		),
		array(
			'type' => 'book',
			'name' => "Sechzig Programme für Ihren ORIC 1",
			'language' => 'de',
			'cover' => "sechzig_programme_fur_ihren_oric1.jpg",   // Made up cover image from original english book and ViC20 german book
			'author' => 'Robert Erskine|Humphrey Walwyn|Paul Stanley|Michael Bews',
			'publisher' => "Hueber Verlag GmbH & Co",
			'description' => array(
				'fr' => "Version allemande de Sixty programs for the Oric-1",
				'en' => "German version of Sixty programs for the Oric-1."),
		),

		array(
			'type' => 'book',
			'name' => "Premiers pas en programmation sur Oric",
			'language' => 'fr',
			'author' => "Georges Viguier",
			'year' => '1983',
			'publisher' => "Edimicro",
			'isbn' => "ISBN 2-904457-07-0",
			'cover' => "premiers_pas_en_programmation_sur_oric.jpg",
			'download' => array('fr' => "premiers_pas_en_programmation_sur_oric.pdf"),
		),
		array(
			'type' => 'book',
			'name' => "Oric, premiers programmes",
			'language' => 'fr',
			'cover' => "oric_premiers_programmes.jpg",
			'download' => array('fr' => "oric_premiers_programmes.pdf"),			
			'author' => "Rodnay Zaks",
			'year' => '1984',
			'publisher' => "Sybex",
			'isbn' => "ISBN 2-7361-0044-X",
			'description' => array(
				'fr' => "Après la programmation 6502, <B>Rodnay Zaks</B> vous enseigne le BASIC. 
					Comme tous les livres de Zacks il souffre de n'être qu'une adaptation 'oric' d'un livre
					qui existe en version AppleSoft basic et commodore 64 basic. Il n'utilise que du BASIC
					standard.",
				'en' => "After teatching you 6502 programming, <B>Rodnay Zaks</B> teaches you Basic Programming. 
					As all Zacks book, it's a 'multi-platform' book. It uses standard Basic, and exists for 
					the AppleSoft basic, and C64."),
		),

		array(
			'type' => 'book',
			'name' => "Guide de l'oric",
			'language' => 'fr',
			'author' => "Philippe Bayvejiel|Michel Birades|Dominique Joly|Philippe Le Bitoux|Jean-Marie Vallade",
			'cover' => "guide_de_l_oric.jpg",
			'download' => array('fr' => "guide_de_l_oric.pdf"),
			'year' => '1983',
			'publisher' => "Edimicro",
			'isbn' => "ISBN 2-904457-02-X",
			'description' => array(
				'fr' => "Ce livre n'est pas comme l'indique la couverture de <B>Philippe Bayvejiel</B> (ou BAYJEVIEL !)... 
					Les auteurs en sont <B>Michel Birades</B>, <B>Dominique Joly</B>, <B>Philippe Le Bitoux</B> et <B>Jean-Marie Vallade</B>. 
					Vous pouvez considérer ce libre comme étant un manuel d'utilisation.",
				'en' => "This book is not from  <B>Philippe Bayvejiel</B> (or BAYJEVIEL !), as written on the cover page... 
					The authors are <B>Michel Birades</B>, <B>Dominique Joly</B>, <B>Philippe Le Bitoux</B> and <B>Jean-Marie Vallade</B>. 
					You can consider this book as an Oric Basic user manual."),
		),

		array(
			'type' => 'book',
			'name' => "Le cahier du basic sur Oric 1 et Atmos",
			'language' => 'fr',
			'cover' => "le_cahier_du_basic_sur_oric1_et_atmos.jpg",
			'download' => array('fr' => "le_cahier_du_basic_sur_oric1_et_atmos.pdf"),
			'author' => "Jacques Boisgontier|Sophie Brebion",
			'year' => '1984',
			'publisher' => "Editions du P.S.I.",
			'isbn' => "ISBN 2.86595.163.4",
			'description' => array(
				'fr' => "Une initiation au Basic suivie d'un application avec des jeux.",
				'en' => "A Basic programing initiation, followed by some Basic games."),
		),

		array(
			'type' => 'book',
			'name' => "30 programmes - Oric 1 pour tous",
			'language' => 'fr',
			'author' => "Jacques Boisgontier",
			'cover' => "30_programmes_oric1_pour_tous.jpg",
			'download' => array('fr' => "30_programmes_oric1_pour_tous.pdf"),
			'year' => '1983', 'month' => 10,
			'publisher' => "Editions du P.S.I.",
			'isbn' => "ISBN 2 86595 116 2",
			'description' => array(
				'fr' => "C'est la suite de 'Oric 1 pour tous', avec de nouveaux programmes d'entrainement,
					éducation, gestion, des jeux, etc...
					Ce livre est bien écrit et la difficulté est bien dosée. Contient de nombreux programmes
					d'exemple présentant des animations graphiques, ...",
				'en' => "This book is a follow up of the previous one. With programs for exercise, education, gestion, games... "),
		),

		array(
			'type' => 'book',
			'name' => "52 programmes - Oric 1 pour tous",
			'language' => 'fr',
			'author' => "Jacques Boisgontier",
			'cover' => "52_programmes_oric1_pour_tous.jpg",
			'download' => array('fr' => "52_programmes_oric1_pour_tous.pdf"),
			'year' => '1983', 'month' => 12,
			'publisher' => "Editions du P.S.I.",
			'isbn' => "ISBN 2.86595.120.1",
			'description' => array(
				'fr' => "Et encore le même ! Cette fois, c'est 52 programmes, pour Oric 1.",
				'en' => "Still the same, now back with 52 programs for both Oric 1."),
		),

		array(
			'type' => 'book',
			'name' => "52 programmes - Oric pour tous (Oric 1 et Atmos)",
			'language' => 'fr',
			'author' => "Jacques Boisgontier",
			'cover' => "52_programmes_oric1_pour_tous_oric1_et_atmos.jpg",
			'download' => array('fr' => "52_programmes_oric1_pour_tous_oric1_et_atmos.pdf"),
			'year' => '1983', 'month' => 12,
			'publisher' => "Editions du P.S.I.",
			'isbn' => "ISBN 2.86595.120.2",
			'description' => array(
				'fr' => "Et encore le même ! Cette fois, c'est 52 programmes, pour Oric 1 et Atmos.",
				'en' => "Still the same, now back with 52 programs for both Oric 1 and Atmos."),
		),

		array(
			'type' => 'book',
			'name' => "Oric 1 pour tous",
			'language' => 'fr',
			'author' => "Jacques Boisgontier|Sophie Brebion",
			'cover' => "oric1_pour_tous.jpg",
			'download' => array('fr' => "oric1_pour_tous.pdf"),
			'year' => '1984', 'month' => 1,
			'publisher' => "Editions du P.S.I.",
			'isbn' => "ISBN 2 86595 098 0",
			'description' => array(
				'fr' => "Une sorte de manuel de l'oric.
					Ce livre est bien écrit et la difficulté est bien dosée. Contient de nombreux programmes
					d'exemple présentant des animations graphiques, ...",
				'en' => "A kind of Oric Basic programming manual.
					It's well written, and very progressive. Many sample programs doing graphics animations and so on...."),
		),

		array(
			'type' => 'book',
			'name' => "Oric pour tous",
			'language' => 'fr',
			'author' => "Jacques Boisgontier|Sophie Brebion",
			'cover' => "oric_pour_tous.jpg",
			'download' => array('fr' => "oric_pour_tous.pdf"),
			'year' => '1984', 'month' => 2,
			'publisher' => "Editions du P.S.I.",
			'isbn' => "ISBN 2.86595.098.0",
			'description' => array(
				'fr' => "Une seconde édition de Oric 1 pour tous, couvrant aussi l'Oric Atmos",
				'en' => "A second edition of Oric 1 pour tous, with additional material for the Oric Atmos"),
		),

		array(
			'type' => 'book',
			'name' => "Oric Atmos, votre micro ordinateur",
			'language' => 'fr',
			'cover' => "book_oric_atmos_votre_micro-ordinateur.jpg",
			'author' => "Michel Bussac",
			'year' => '1984',
			'publisher' => "Cedic|Nathan|Collection micro monde",
			'isbn' => "ISBN 2 7124 1506 X",
 			'download' => array('fr' => "atmos_votre_micro_ordinateur.pdf"),
			'description' => array(
				'fr' => "Dans ce livre le débutant trouvera tout ce qu'il faut pour se familiariser avec l'Oric Atmos.
					Le sujets traités vont de la description matérielle (ce qui est dans l'ordinateur, comment cela fonctionne, ...), jusqu'à la programmation, avec quelques astuces
					concernant les logiciels et périphériques existants.",
				'en' => "In this one, the beginner will find everything in order to familiarize himself with an Oric Atmos. Topics range from a bit of hardware (what is inside, how does it work...), to a bit of programming, 
					and a few tips about existing softwares and peripherals available. "),
		),

		// -------------------------- User Manuals ----------------------------------
		// https://www.defence-force.org/computing/oric/library/lib_manual_oric/index.htm
		array(
			'type' => 'manual',
			'name' => "Oric Atmos - Manuel d'Utilisation",
			'language' => 'fr',
			'cover' => "oric_atmos_manuel_utilisation.jpg", 
			'author' => "John Scriven",
			'year' => '1984',                      // TODO NOT VERIFIED
			'publisher' => "Ellix",
			'description' => array(
				'fr' => "Ce manuel était proposé par SPID (futur Euréka et Oric International...) en complément du manuel en anglais fourni avec les machines importées en parallèle avec celles d'ASN.
					Il est bien inférieur au manuel 'officiel' et il s'agit en fait d'une copie vaguement travestie et adapté du manuel de l'Oric1, fautes d'orthographe en plus.
					Un petit paragraphe supplémentaire présente néanmoins les instructions STORE et RECALL, propres à l'atmos.
					Les dernières pages présentent les logiciels et périphériques proposés par SPID.
					This manual was proposed by SPID (futur Eureka and Oric International) in addition to the English manual supplied with imported machines in parallel with those of ASN.",
				'en' => "It is far to be as good as the official manual and it is in fact a badly adapted version of the Oric 1 manual with added typos.
					A small additional paragraph has nevertheless STORE and RECALL instructions, specific to the atmos.
					The last pages show software and peripherals offered by SPID."),
		),

		array(
			'type' => 'book',
			'name' => "Clefs pour l'Oric",
			'language' => 'fr',
			'cover' => "book_clefs_pour_oric.jpg",
			'download' => array('fr' => "clefs_pour_l_oric.pdf"),
			'author' => "Emmanuel Flesselles",
			'year' => '1984',
			'publisher' => "Editions du P.S.I.",
			'description' => array(
				'fr' => "Une sorte de mémento qui permet de retrouver rapidement des informations utiles.",
				'en' => "A kind of notebook that help finding useful information easily."),
		),

		array( 
			// The publisher is incorrect thought. It should be "Prentice-Hall international / Inter-Editions". "Intermicro" is the collection
			// It must be a translation of Understanding Oric by Ian McLean which was originally printed by Prentice Hall.
			'type' => 'book',
			'name' => "Votre Oric (Oric 1 et Atmos)",
			'language' => 'fr',
			'cover' => "votre_oric.jpg",
			'author' => "Ian Mc Lean",
			'year' => '1984',
			'publisher' => "Prentice Hall|Inter-Editions",  // collection Intermicro
			'isbn' => "ISBN 2 7296 0112 0",
			'download' => array('fr' => "votre_oric.pdf"),
			'description' => array(
				'fr' => "Ce livre présente aux débutants en informatique les concepts fondamentaux relatifs à l'utilisation du micro-ordinateur ORIC. 
					Il permet notamment d'apprendre à manipuler les différents composants de l'ordinateur (clavier, écran, mémoires, imprimante) et ce, pour les deux versions les plus répandues: 
					ORIC et ORIC-ATMOS. Le langage de base est exposé et illustré à l'aide de nombreux exemples. une attention particulière est portée à la fonction sonore et graphique de l'ORIC. 
					Ce livre ne nécessite aucune connaissance préalable en informatique ou en mathématiques. 
					Rédigé de manière simple et alerte, il vous présente progressivement les différentes possibilités qui vous sont offertes par ORIC.",
				'en' => "A simplified user manual."),
		),

		array(
			'type' => 'book',
			'name' => "La découverte de l'Oric",
			'language' => 'fr',
			'cover' => "la_decouverte_de_l_oric.jpg",
			'download' => array('fr' => "la_decouverte_de_l_oric.pdf"),
			'author' => "Daniel-Jean David",
			'year' => '1984',
			'publisher' => "Editions du P.S.I.",
			'isbn' => "ISBN 2.86595.109.X",
			'description' => array(
				'fr' => "Une sorte de manuel d'utilisation simplifié avec quelques exercices pour tester ses connaissances.",
				'en' => "A kind of simplified user manual with some exercices to test knowledge."),
		),

		array(
			'type' => 'book',
			'name' => "La découverte de l'Oric (Oric 1 et Atmos)",
			'language' => 'fr',
			'cover' => "la_decouverte_de_l_oric_oric1_et_atmos.jpg" ,
			'download' => array('fr' => "la_decouverte_de_l_oric_oric1_et_atmos.pdf"),
			'author' => "Daniel-Jean David",
			'year' => '1984',
			'publisher' => "Editions du P.S.I.",
			'isbn' => "ISBN 2.86595.109.X",
			'description' => array(
				'fr' => "Seconde édition de 'la découverte de l'oric' avec le support additionel de l'Atmos",
				'en' => "An updated version of 'la découverte de l'oric' covering the Atmos."),
		),

		array(
			'type' => 'book',
			'name' => "Tout savoir sur Oric",
			'language' => 'fr',
			'cover' => "tout_savoir_sur_oric.jpg",
			'download' => array('fr' => "tout_savoir_sur_oric.pdf"),
			'author' => "Roger Politis|Bruno Vanryb",
			'year' => '1984',
			'publisher' => "Eyrolles",
			'description' => array(
				'fr' => "Un manuel d'utilisation avancé.",
				'en' => "An advanced user manual."),
		),
		array(
			'type' => 'book',
			'name' => "Tout savoir sur Atmos",
			'language' => 'fr',
			'cover' => "tout_savoir_sur_atmos.jpg",
			'download' => array('fr' => "tout_savoir_sur_atmos.pdf"),
			'author' => "Roger Politis|Bruno Vanryb",
			'year' => '1984',
			'publisher' => "Eyrolles",
			'description' => array(
				'fr' => "Un manuel d'utilisation avancé.",
				'en' => "An advanced user manual."),
		),

		// DOMASHEN COMPUTER - IZDATELSTVO TECHNIQUE (Yandex Translate)
		array(
			'type' => 'book',
			'name' => "Pravetz 8D Professional applications",
			'language' => 'bg',
			'year' => '1989',
			'cover' => "book_pravetz_8d_2.jpg",
			'download' => array('bg' => "Pravetz-8D-Pro.pdf"),
		),

		// https://knizhen-pazar.net/products/books/2403219-domashen-kompyutar-pravets-8d
		array(
			'type' => 'book',
			'name' => "Home computer Pravetz 8D",
			'language' => 'bg',
			'author' => "Orlin Valchev|Pencho Sirakov|Dimitar Vavov",
			'year' => '1986',
			'cover' => "book_pravetz_8d_1.jpg",
			'download' => array('bg' => "Pravetz-8D.pdf"),
		),


		array(
			'name' => "Pravetz 8D manual",
			'type' => 'manual',
			'language' => 'bg',
			'publisher' => "техника",
			'cover' => "home_computer_pravetz_8d.jpg",
			'download' => array('bg' => "home_computer_pravetz_8d.pdf"),			
			'year' => '1988',
			'description' => array(
				'fr' => "Le manuel fourni avec le Pravetz 8D est apparement un condensé du manuel de l'Oric Atmos.
					En effet, on y trouve une partie des informations de celui-ci à la fin: Table des attributs,
					code ascii, organisation mémoire en LORES et HIRES, ainsi que les dessins montrant les connecteurs
					à l'arrière de la machine.
					L'ensemble étant écrit en Cyrilique (Russe), je ne peut pas en dire plus :)",
				'en' => "The Pravetz 8D manual seems to be a condesed version of the Oric Atmos manual.
					It features almost the same attribute tables, ascii code tables, memory charts, and pictures
					showing the connectors at the back of the machine.
					Since the manual is written in Cyrilic characters, I cannot say more about it !"),
		),


		array(
			'type' => 'book',
			'name' => "Computing With The Oric 1",
			'language' => 'en',
			'cover' => "computing_with_the_oric1.jpg",
			'download' => array('en' => "computing_with_the_oric1.pdf"),	
			'author' => "Ian Hickman",
			'year' => '1984',
			'publisher' => "Newnes Microcomputer Books",
			'isbn' => "ISBN 040801444",
			'description' => array(
				'fr' => "148 pages index compris, c'est relativement peu pour une réécriture de manuel. Néanmoins il propose de bon conseils, ainsi qu'une section correcte consacrée au code machine.",
				'en' => "This is another of the 'Manual rewrites' only 148 pages with index, but it has quite a reasonable MC section and some good advice."),
		),



		array(
			'type' => 'book',
			'name' => "The Oric handbook",
			'cover' => "the_oric_handbook.jpg",
			'download' => array('en' => "the_oric_handbook.pdf"),	
			'language' => 'en',
			'author' => "Peter Lupton|Frazer Robinson",
			'year' => '1983',
			'publisher' => "Century",
			'isbn' => "ISBN 0 7126 0175 9",
			'description' => array(
				'fr' => "Le livre couvre les différences entre la ROM de l'oric 1 et celle de l'Atmos.
					Ce livre propose 17 chaiptre et 11 annexes, ainsi qu'une introduction, et un index. 
					Cela commence par de simples choses telles que la façon d'installer la machine, puis montre comment effectuer de petit calculs avec la commande PRINT.
					Puis, progressivement le lecteur est guidé dans un apprentissage du Basic selon une méthodologie très scolaire.
					Chaque chapitre résume ce qui a été couvert, et ce qui aurait du être acquis. Très bien pour les débutants, mais
					peut être irritant pour les personnes plus expérimentées.
					Les programmes d'exemple sont plutot bon, et proposent des démonstrations graphiques, un carnet d'adresse, un petit programme de dessin,
					ainsi qu'un mastermind parmis d'autre petits examples utiles tel une routine de lancé de dés.
					En conclusion c'est un bon titre pour toute personne ne disposant pas du manuel de l'Atmos. Il propose même uine petite section dédiée à l'assembleur.",
				'en' => "This book covers both Oric-1 and Atmos ROMs and shows the difference where applicable. 
					WHAT'S IN IT? Well, there's 17 chapters and 11 appendices plus an introduction and an index. 
					In brief the beginning is the simple stuff of how to set your Oric up and how computers work showing how you can get the Oric to do sums (PRINT 2+2).
					It builds up to more and more complicated things, so that it guides you easily through how to program BASIC. 
					With a somewhat school-book feel, it gives a summary of what was covered in a chapter and what you should have learnt. 
					Quite handy for beginners, but the more experienced might find it a bit irritating ! 
					But then this book is aimed mainly at beginners, being essentially like the manual.
					Example programs are quite good with the graphics demo showing you how to draw an Oric-1. 
					(Something they perhaps should have changed for the Atmos Handbook !) 
					An address book, sketch pad and a mastermind programs are featured amongst other useful little bit demonstrations, like the dice throwing routine. 
					SUMMARY. I found this a useful book. A good choice if you have no Atmos manual. 
					I like this one though it has a small machine code section."),
		),
		array(
			'type' => 'book',
			'name' => "The Oric Atmos handbook",
			'cover' => "the_oric_atmos_handbook.jpg" ,
			'download' => array('en' => "the_oric_atmos_handbook.pdf"),				
			'language' => 'en',
			'author' => "Peter Lupton|Frazer Robinson",
			'year' => '1984',
			'publisher' => "Century",
			'isbn' => "ISBN 0 7126 0542 8",
			'description' => array(
				'fr' => "Il n'y a aucune différence entre 'The Oric Handbook' et ce livre, on peut donc supposer que le renomage vise les éventuels possesseurs d'Atmos
					qui auraient cru que ce livre ne concernait que les possesseurs d'oric 1.",
				'en' => "There are no differences between 'The Oric Handbook' and this one, the rename presumably to target the new Atmos owners who might think the first handbook is only for the Oric-1."),
		),

		array(
			'type' => 'book',
			'name' => "The oric 1 companion",
			'language' => 'en',
			'author' => "Bob Maunder",
			'year' => '1983',
			'publisher' => "LINSAC",
			'cover' => "the_oric1_companion.jpg" ,
			'download' => array('en' => "the_oric1_companion.pdf"),
			'isbn' => "ISBN 090721103",
			'description' => array(
				'fr' => "Ce livre propose un désassemblage de la ROM, il est donc très similaire à l''Advanced user guide'.",
				'en' => "This book has a ROM disassembly so is similar to the Advanced user guide."),
		),
		
		array(
			'type' => 'book',
			'name' => "An introduction to Programming the Oric-1",
			'language' => 'en',
			'cover' => "an_introduction_to_programming_the_oric1.jpg",
			'download' => array('en' => "an_introduction_to_programming_the_oric1.pdf"),
			'author' => 'R.A. Penfold|J.W. Penfold',
			'year' => '1983',
			'publisher' => "Bernard Babani",
			'isbn' => "ISBN 085934104",
			'description' => array(
				'fr' => "R.A Penfold est un des plus prolifiques auteurs de grande bretagne. Il a écrit de nombreux livres, principalement concernant l'électronique.
					La majorité des titres consacrés à l'électronique publiés par Bernard Babani on été écris par Penfold.
					Lorsque les premiers ordinateurs sont arrivés, la collection Babani s'est enrichi d'un série dédié à l'apprentissage de ces nouvelles machines.
					Ce livre, consacré à l'Oric 1 est resté disponible pendant très longtemps, et pourrait d'ailleur être encore trouvé dans certaines bouquineries.
					C'est un petit manuel d'utilisation, qui n'est ni très didactique, ni très bon.",
				'en' => "R.A Penfold is one of the most prolific authors in Britain. He wrote numerous books, mainly on electronics. 
					A whole series of electronics books were published by Bernard Babani, most were by Penfold. 
					When computers arrived the Babani range extended to include instruction on how to use the new machine. 
					This one for the Oric-1 was available for a long time - and may still be available at some books shops.  
					It is a small brief 'manual rewrite' that is not very comprehensive, not very good."),
 		),

		array(
			'type' => 'book',
			'name' => "Getting the most from your Oric - The indispensable guide to your home computer",
			'language' => 'en',
			'cover' => "book_getting_the_most_from_your_oric.jpg",
			'author' => "Bryan Skinner",
			'year' => '1984',
			'publisher' => "Penguin",
			'isbn' => "ISBN 014007808",
			'download' => array('en' => "getting_the_most_from_your_oric.pdf"),
			'description' => array(
				'fr' => "Encore une des nombreuses réécritures de manuel.
					Il propose des informations sur comment utiliser l'Oric et son BASIC. Certaines pages intérieures sont en couleur.",
				'en' => "This on is another 'Manual re-write'. Instruction in how to use Oric and its' BASIC. Some colour pages inside."),
		),

		array(
			'type' => 'book',
			'name' => "Made Easy - Using your oric atmos",
			'language' => 'en',
			'cover' => "made_easy_using_your_oric_atmos.jpg",
			'download' => array('en' => "made_easy_using_your_oric_atmos.pdf"),
			'author' => "Garry Marshall",
			'year' => '1984',
			'publisher' => "Arrow",
			'isbn' => "ISBN 009938790",
			'description' => array(
				'fr' => "Ce livre a été écrit spécialement pour l'Atmos, et il n'existe aucune version précédente dédiée à l'oric 1.
					C'est une réécriture du manuel qui propose des photos et des capture d'écran, mais qui n'arrive pas néanmoins
					à surpasser le manuel original.",
				'en' => "Specifically written for the Atmos with no previous Oric-1 version, another 'manual rewrite' that features photos and screenshots. 
					OK, but not as good as the proper manual."),
		),

		array(
			'type' => 'manual',
			'name' => "Oric-1 manuel de programmation BASIC",
			'language' => 'fr',
			'cover' => "book_oric1_manuel_programmation_basic.jpg", 
			'author' => "John Scriven|Lucien Augustoni",
			'year' => '1983',
			'publisher' => "Oric International",
			'description' => array(
				'fr' => "Le manuel fourni avec l'Oric 1 est un bon livre pour débuter, mais il ne faut pas se voiler la face... 
					il ne vaut pas celui de l'Atmos ! 
					(Version française par Lucien Augustoni)",
				'en' => "It's a good book, but less complete than the Atmos manual.  
					(French localization by Lucien Augustoni)"),
		),
		array(
			'type' => 'manual',
			'name' => "Oric-1 BASIC programming manual",
			'language' => 'en',
			'cover' => "book_oric1_basic_programming_manual.jpg",
			'author' => "John Scriven",
			'year' => '1983',
			'publisher' => "Oric International",
			'download' => array('en' => "oric1manual.pdf"),
			'description' => array(
				'fr' => "Le manuel fourni avec l'Oric 1 est un bon livre pour débuter, mais il ne faut pas se voiler la face... 
					il ne vaut pas celui de l'Atmos ! 
					Version anglaise",
				'en' => "It's a good book, but less complete than the Atmos manual.  
					Original UK edition"),
		),
		array(
			'type' => 'manual',
			'name' => "Oric-1 Manual Básico de Programación",
			'language' => 'es',
			'cover' => "oric1_manual_basico_de_programacion.jpg",
			'author' => "John Scriven",
			'year' => '1983',
			'publisher' => "Oric International|D.S.E",
			'description' => array(
				'fr' => "Traduction espagnole du manuel original de l'Oric 1",
				'en' => "This is the Spanish edition of the original UK Oric 1 manual, with additional typos."),
		),

		array(
			'type' => 'manual',
			'name' => "Manual Atmos",
			'language' => 'es',
			'cover' => "manual_atmos-spanish.jpg",
			'author' => "Ian Adamson",
			'year' => '1984',
			'publisher' => "Oric International|D.S.E",
			'description' => array(
				'fr' => "Traduction espagnole du manuel original de l'Oric Atmos, sans mention de l'auteur original, et impression de mauvaise qualité",
				'en' => "This is the Spanish edition of the original UK Oric Atmos manual, with additional typos, bad print quality and no credits."),
		),



		array(
			'type' => 'book',
			'name' => "The COMPANION to the ORIC 1",
			'language' => 'en',
			'cover' => "the_companion_to_the_oric1.jpg",
			'download' => array('en' => "the_companion_to_the_oric1.pdf"),
			'author' => "Ian Adamson",
			'year' => '1983',	
			'publisher' => "Pan",  //  - Personal Computer News
			'description' => array(
				'fr' => "C'est vraiment un grand livre.
					Il parle de comment brancher l'ordinateur (agréable, avec des photos très claires), et explique brievement le fonctionnement d'un ordinateur. 
					Les chapitres suivants traitent de la programation en Basic, des fonctions graphiques et sonores. 
					Pour finir, une introduction à la programmation assembleur, et de nombreuses annexes avec des table de codes ASCII, code escapes, messages d'erreur, commandes de l'imprimante, shémas des connecteurs d'extension, etc...
					Ce livre deviendra par la suite le manuel de référence de l'Oric Atmos",
				'en' => "It's really a great book.
					In this book you can find how plug and use your Oric Computer (nice !), and you get a brief description of how a computer works. 
					Next chapters learn you the way of programming in Basic language, to do graphics and sounds. 
					At the end, you can find an introduction to machine code, and many appendices covering ASCII tables, escape codes,
					error messages, memory map, MCP 40 printer commands, I/O connectors, and many other interesting stuffs.
					It will become the official reference manual sold with Atmos computer (see below)"),
		),

		array(
			'type' => 'manual',
			'name' => "Manuel de l'Oric Atmos",
			'language' => 'fr',
			'author' => "Ian Adamson",
			'year' => '1984',
			'publisher' => "Oric International",
			'cover' => "book_manuel_atmos.jpg",
			'download' => array('fr' => "manuel_atmos.pdf"),
			'description' => array(
				'fr' => "Ce livre rose n'est ni plus ni moins que l'excellente traduction en Français.",
				'en' => "This pimk book is the french version of the Atmos manual. The translation is very good."),
		),
		array(
			'cover' => "book_manual_atmos.jpg",
			'type' => 'manual',
			'name' => "Oric atmos manual",
			'language' => 'en',
			'author' => "Ian Adamson",
			'year' => '1984',
			'publisher' => "Pan|Oric International",  //  Books
			'download' => array('fr' => "manual_atmos.pdf"),
			'description' => array(
				'fr' => "Ce livre est une version adaptée a l'Atmos du livre 'the companion to the oric 1'.",
				'en' => "This black manual is the based on 'The Companion to the ORIC-1' adapted to the Atmos."),
		),

		array(
			'cover' => "book_complement.jpg",
			'type' => 'manual',
			'name' => "Complement au manuel de programmation BASIC",
			'language' => 'fr',
			'year' => '1984',
			'description' => array(
				'fr' => "Petit fascicule qui suit traite de quelques informations manquant dans le manuel.",
				'en' => "Leaflet that covers some mising topics."),
		),

		array(
			'type' => 'manual',
			'name' => "Oric manualen",
			'language' => 'se',
			'author' => "Peter Jonsson",
			'year' => '1984',                      // TODO NOT VERIFIED
			'cover' => "book_manualen.jpg",
			'description' => array(
				'fr' => "La version suèdoise du manuel de l'Oric Atmos. 
					C'est un guide pour les utilisateurs novices, et est très fin, puisqu'il ne fait que 75 pages. 
					Mais il est très bien écrit, et couvre la majorité des thèmes traités par le manuel anglais.",
				'en' => "This book is the Swedish version of the Oric Atmos manual.
					It is a guide for first time users and it's very thin, only 75 pages. But it is very well written and covers most of the
					chapters from the english manual."),

		),

		array(
			'type' => 'book',
			'name' => "Guide Pratique de l'Oric",
			'language' => 'fr',
			'cover' => "guide_pratique_de_oric.jpg",
			'download' => array('fr' => "guide_pratique_de_oric.pdf"),			
			'author' => "Michel Bussac|Robert Lagoutte|Dominique Carrara",
			'year' => '1983',
			'publisher' => "Cedic|Nathan",
			'isbn' => "ISBN 2-7124-0528-5",
			'description' => array(
				'fr' => "Ce livre était vendu en 1983 avec l'Oric 1, en complément du manuel.
					C'est un bon livre pour les débutants, avec des nombreux examples, et des illustrations sympatiques :)",
				'en' => "It was sold with the Oric 1 in 1983 as an Oric manual.
					Compared to the Oric 1 manual, it was worthwhile...
					It talks about the Oric's usage, then go to the Basic explanations. 
					Really a good book for beginners. Gives syntax and examples for every functions. 
					And the pictures are interesting too."),
		),

		array(
			'type' => 'book',
			'name' => "Guide Pratique de l'Oric Atmos",
			'cover' => "guide_pratique_de_l_oric_atmos.jpg",
			'download' => array('fr' => "guide_pratique_de_l_oric_atmos.pdf"),			
			'language' => 'fr',
			'author' => "Michel Bussac|Robert Lagoutte|Dominique Carrara",
			'year' => '1984', 'month' => 9, 
			'publisher' => "Cedic|Nathan",
			'isbn' => "ISBN 2-7124-0585-4",
			'description' => array(
				'fr' => "Ce livre n'est que la version réactualisée tenant compte des particularités de l'Atmos. Cette seconde version n'offre que peut d'atraits comparé au manuel de l'Atmos.",
				'en' => "This book, is just a new edition dedicated to the Atmos, but compared to the Brand New Atmos Manual: It's just a copy..."),
		),

		array(
			'type' => 'book',
			'name' => "Understanding oric",
			'language' => 'en',
			'cover' => "understanding_oric.jpg",
			'download' => array('en' => "understanding_oric.pdf"),
			'author' => "Ian McLean",
			'year' => '1984',
			'publisher' => "Prentice Hall",
			'isbn' => "ISBN 013477332",
			'description' => array(
				'fr' => "Encore une réécriture du manuel de l'oric.
					Celui-ci est particulièrement correct, et en 284 pages couvre les roms 1.0 et 1.1, et propose
					de nombreuses annexes, un index ainsi qu'une table des matières.",
				'en' => "Another Manual rewrite.
					Quite a decent one with 284 pages and coverage of both ROMs, appendices, index and table of content."),
  
		),


		// -------------------------- Theoric ----------------------------------
		// https://www.defence-force.org/computing/oric/library/lib_magazine/theoric/index.htm
		/*
		array(
			'type' => 'magazine',
			'name' => "Théoric",
			'language' => 'fr',
			'issue' => 'No 1 Avril',
			'year' => '1984',
			'publisher' => 'Editions SORACOM',
			'cover' => 'theoric/theoric_01.jpg',
			'download' => array('fr' => "theoric/theoric-1.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Théoric",
			'language' => 'fr',
			'issue' => 'No 2 Juillet',
			'year' => '1984',
			'publisher' => 'Editions SORACOM',
			'cover' => 'theoric/theoric_02.jpg',
			'download' => array('fr' => "theoric/theoric-2.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Théoric",
			'language' => 'fr',
			'issue' => 'No 3 Septembre',
			'year' => '1984',
			'publisher' => 'Editions SORACOM',
			'cover' => 'theoric/theoric_03.jpg',
			'download' => array('fr' => "theoric/theoric-3.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Théoric",
			'language' => 'fr',
			'issue' => 'No 4 Décembre',
			'year' => '1984',
			'publisher' => 'Editions SORACOM',
			'cover' => 'theoric/theoric_04.jpg',
			'download' => array('fr' => "theoric/theoric-4.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Théoric",
			'language' => 'fr',
			'issue' => 'No 5 Février',
			'year' => '1985',
			'publisher' => 'Editions SORACOM',
			'cover' => 'theoric/theoric_05.jpg',
			'download' => array('fr' => "theoric/theoric-5.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Théoric",
			'language' => 'fr',
			'issue' => 'No 6 Mars',
			'year' => '1985',
			'publisher' => 'Editions SORACOM',
			'cover' => 'theoric/theoric_06.jpg',
			'download' => array('fr' => "theoric/theoric-6.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Théoric",
			'language' => 'fr',
			'issue' => 'No 7 Avril',
			'year' => '1985',
			'publisher' => 'Editions SORACOM',
			'cover' => 'theoric/theoric_07.jpg',
			'download' => array('fr' => "theoric/theoric-7.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Théoric",
			'language' => 'fr',
			'issue' => 'No 8 Mai',
			'year' => '1985',
			'publisher' => 'Editions SORACOM',
			'cover' => 'theoric/theoric_08.jpg',
			'download' => array('fr' => "theoric/theoric-8.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Théoric",
			'language' => 'fr',
			'issue' => 'No 9 Juin/Juillet',
			'year' => '1985',
			'publisher' => 'Editions SORACOM',
			'cover' => 'theoric/theoric_09.jpg',
			'download' => array('fr' => "theoric/theoric-9.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Théoric",
			'language' => 'fr',
			'issue' => 'No 10 Juillet/Aout',
			'year' => '1985',
			'publisher' => 'Editions SORACOM',
			'cover' => 'theoric/theoric_10.jpg',
			'download' => array('fr' => "theoric/theoric-10.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Théoric",
			'language' => 'fr',
			'issue' => 'No 11 Hors Série Aout/Septembre',
			'year' => '1985',
			'publisher' => 'Editions SORACOM',
			'cover' => 'theoric/theoric_11.jpg',
			'download' => array('fr' => "theoric/theoric-11-hs.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Théoric",
			'language' => 'fr',
			'issue' => 'No 12 Septembre/Octobre',
			'year' => '1985',
			'publisher' => 'Editions SORACOM',
			'cover' => 'theoric/theoric_12.jpg',
			'download' => array('fr' => "theoric/theoric-12.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Théoric",
			'language' => 'fr',
			'issue' => 'No 13 Octobre/Novembre',
			'year' => '1985',
			'publisher' => 'Editions SORACOM',
			'cover' => 'theoric/theoric_13.jpg',
			'download' => array('fr' => "theoric/theoric-13.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Théoric",
			'language' => 'fr',
			'issue' => 'No 14 Novembre/Décembre',
			'year' => '1985',
			'publisher' => 'Editions SORACOM',
			'cover' => 'theoric/theoric_14.jpg',
			'download' => array('fr' => "theoric/theoric-14.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Théoric",
			'language' => 'fr',
			'issue' => 'No 15 Décembre/Janvier',
			'year' => '1985',
			'publisher' => 'Editions SORACOM',
			'cover' => 'theoric/theoric_15.jpg',
			'download' => array('fr' => "theoric/theoric-15.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Théoric",
			'language' => 'fr',
			'issue' => 'No 16 Janvier/Février',
			'year' => '1986',
			'publisher' => 'Editions SORACOM',
			'cover' => 'theoric/theoric_16.jpg',
			'download' => array('fr' => "theoric/theoric-16.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Théoric",
			'language' => 'fr',
			'issue' => 'No 17 Février/Mars',
			'year' => '1986',
			'publisher' => 'Editions SORACOM',
			'cover' => 'theoric/theoric_17.jpg',
			'download' => array('fr' => "theoric/theoric-17.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Théoric",
			'language' => 'fr',
			'issue' => 'No 18 Mars/Avril',
			'year' => '1986',
			'publisher' => 'Editions SORACOM',
			'cover' => 'theoric/theoric_18.jpg',
			'download' => array('fr' => "theoric/theoric-18.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Théoric",
			'language' => 'fr',
			'issue' => 'No 19 Avril/Mai',
			'year' => '1986',
			'publisher' => 'Editions SORACOM',
			'cover' => 'theoric/theoric_19.jpg',
			'download' => array('fr' => "theoric/theoric-19.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Théoric",
			'language' => 'fr',
			'issue' => 'No 20 Mai-Juin',
			'year' => '1986',
			'publisher' => 'Editions SORACOM',
			'cover' => 'theoric/theoric_20.jpg',
			'download' => array('fr' => "theoric/theoric-20.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Théoric",
			'language' => 'fr',
			'issue' => 'No 21 Juin/Juillet',
			'year' => '1986',
			'publisher' => 'Editions SORACOM',
			'cover' => 'theoric/theoric_21.jpg',
			'download' => array('fr' => "theoric/theoric-21.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Théoric",
			'language' => 'fr',
			'issue' => 'No 22 Juillet/Aout',
			'year' => '1986',
			'publisher' => 'Editions SORACOM',
			'cover' => 'theoric/theoric_22.jpg',
			'download' => array('fr' => "theoric/theoric-22.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Théoric",
			'language' => 'fr',
			'issue' => 'No 23 Septembre',
			'year' => '1986',
			'publisher' => 'Editions SORACOM',
			'cover' => 'theoric/theoric_23.jpg',
			'download' => array('fr' => "theoric/theoric-23.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Théoric",
			'language' => 'fr',
			'issue' => 'No 24 Octobre',
			'year' => '1986',
			'publisher' => 'Editions SORACOM',
			'cover' => 'theoric/theoric_24.jpg',
			'download' => array('fr' => "theoric/theoric-24.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Théoric",
			'language' => 'fr',
			'issue' => 'No 25 Novembre',
			'year' => '1986',
			'publisher' => 'Editions SORACOM',
			'cover' => 'theoric/theoric_25.jpg',
			'download' => array('fr' => "theoric/theoric-25.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Théoric",
			'language' => 'fr',
			'issue' => 'No 26 Décembre',
			'year' => '1986',
			'publisher' => 'Editions SORACOM',
			'cover' => 'theoric/theoric_25_2.jpg',
			'download' => array('fr' => "theoric/theoric-26.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Théoric",
			'language' => 'fr',
			'issue' => 'No 27 Janvier',
			'year' => '1987',
			'publisher' => 'Editions SORACOM',
			'cover' => 'theoric/theoric_27.jpg',
			'download' => array('fr' => "theoric/theoric-27.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Théoric",
			'language' => 'fr',
			'issue' => 'No 28 Février',
			'year' => '1987',
			'publisher' => 'Editions SORACOM',
			'cover' => 'theoric/theoric_28.jpg',
			'download' => array('fr' => "theoric/theoric-28.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Théoric",
			'language' => 'fr',
			'issue' => 'No 29 Mars',
			'year' => '1987',
			'publisher' => 'Editions SORACOM',
			'cover' => 'theoric/theoric_29.jpg',
			'download' => array('fr' => "theoric/theoric-29.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Théoric",
			'language' => 'fr',
			'issue' => 'No 30 Avril',
			'year' => '1987',
			'publisher' => 'Editions SORACOM',
			'cover' => 'theoric/theoric_30.jpg',
			'download' => array('fr' => "theoric/theoric-30.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Théoric",
			'language' => 'fr',
			'issue' => 'No 31 Mai',
			'year' => '1987',
			'publisher' => 'Editions SORACOM',
			'cover' => 'theoric/theoric_31.jpg',
			'download' => array('fr' => "theoric/theoric-31.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Théoric",
			'language' => 'fr',
			'issue' => 'No 32 Juin',
			'year' => '1987',
			'publisher' => 'Editions SORACOM',
			'cover' => 'theoric/theoric_32.jpg',
			'download' => array('fr' => "theoric/theoric-32.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Théoric",
			'language' => 'fr',
			'issue' => 'No 33 Juillet',
			'year' => '1987',
			'publisher' => 'Editions SORACOM',
			'cover' => 'theoric/theoric_33.jpg',
			'download' => array('fr' => "theoric/theoric-33.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Théoric",
			'language' => 'fr',
			'issue' => 'No 34 Septembre',
			'year' => '1987',
			'publisher' => 'Editions SORACOM',
			'cover' => 'theoric/theoric_34.jpg',
			'download' => array('fr' => "theoric/theoric-34.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Théoric",
			'language' => 'fr',
			'issue' => 'No 35 Octobre',
			'year' => '1987',
			'publisher' => 'Editions SORACOM',
			'cover' => 'theoric/theoric_35.jpg',
			'download' => array('fr' => "theoric/theoric-35.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Théoric",
			'language' => 'fr',
			'issue' => 'No 36 Novembre',
			'year' => '1987',
			'publisher' => 'Editions SORACOM',
			'cover' => 'theoric/theoric_36.jpg',
			'download' => array('fr' => "theoric/theoric-36.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Théoric",
			'language' => 'fr',
			'issue' => 'No 37 Décembre',
			'year' => '1987',
			'publisher' => 'Editions SORACOM',
			'cover' => 'theoric/theoric_37.jpg',
			'download' => array('fr' => "theoric/theoric-37.pdf"),
		),
		*/
		array('type' => 'magazine','name' => "Théoric",'language' => 'fr','issue' => 'No 1 Avril'                      ,'year' => '1984', 'month' =>  4,'publisher' => 'Editions SORACOM','cover' => 'theoric/theoric_01.jpg','download' => array('fr' => "theoric/theoric-1.pdf"),),
		array('type' => 'magazine','name' => "Théoric",'language' => 'fr','issue' => 'No 2 Juillet'                    ,'year' => '1984', 'month' =>  7,'publisher' => 'Editions SORACOM','cover' => 'theoric/theoric_02.jpg','download' => array('fr' => "theoric/theoric-2.pdf"),),
		array('type' => 'magazine','name' => "Théoric",'language' => 'fr','issue' => 'No 3 Septembre'                  ,'year' => '1984', 'month' =>  9,'publisher' => 'Editions SORACOM','cover' => 'theoric/theoric_03.jpg','download' => array('fr' => "theoric/theoric-3.pdf"),),
		array('type' => 'magazine','name' => "Théoric",'language' => 'fr','issue' => 'No 4 Décembre'                   ,'year' => '1984', 'month' => 12,'publisher' => 'Editions SORACOM','cover' => 'theoric/theoric_04.jpg','download' => array('fr' => "theoric/theoric-4.pdf"),),
		
		array('type' => 'magazine','name' => "Théoric",'language' => 'fr','issue' => 'No 5 Février'                    ,'year' => '1985', 'month' =>  2,'publisher' => 'Editions SORACOM','cover' => 'theoric/theoric_05.jpg','download' => array('fr' => "theoric/theoric-5.pdf"),),
		array('type' => 'magazine','name' => "Théoric",'language' => 'fr','issue' => 'No 6 Mars'                       ,'year' => '1985', 'month' =>  3,'publisher' => 'Editions SORACOM','cover' => 'theoric/theoric_06.jpg','download' => array('fr' => "theoric/theoric-6.pdf"),),
		array('type' => 'magazine','name' => "Théoric",'language' => 'fr','issue' => 'No 7 Avril'                      ,'year' => '1985', 'month' =>  4,'publisher' => 'Editions SORACOM','cover' => 'theoric/theoric_07.jpg','download' => array('fr' => "theoric/theoric-7.pdf"),),
		array('type' => 'magazine','name' => "Théoric",'language' => 'fr','issue' => 'No 8 Mai'                        ,'year' => '1985', 'month' =>  5,'publisher' => 'Editions SORACOM','cover' => 'theoric/theoric_08.jpg','download' => array('fr' => "theoric/theoric-8.pdf"),),
		array('type' => 'magazine','name' => "Théoric",'language' => 'fr','issue' => 'No 9 Juin/Juillet'               ,'year' => '1985', 'month' =>  6,'publisher' => 'Editions SORACOM','cover' => 'theoric/theoric_09.jpg','download' => array('fr' => "theoric/theoric-9.pdf"),),
		array('type' => 'magazine','name' => "Théoric",'language' => 'fr','issue' => 'No 10 Juillet/Aout'              ,'year' => '1985', 'month' =>  7,'publisher' => 'Editions SORACOM','cover' => 'theoric/theoric_10.jpg','download' => array('fr' => "theoric/theoric-10.pdf"),),
		array('type' => 'magazine','name' => "Théoric",'language' => 'fr','issue' => 'No 11 Hors Série Aout/Septembre' ,'year' => '1985', 'month' =>  8,'publisher' => 'Editions SORACOM','cover' => 'theoric/theoric_11.jpg','download' => array('fr' => "theoric/theoric-11-hs.pdf"),),
		array('type' => 'magazine','name' => "Théoric",'language' => 'fr','issue' => 'No 12 Septembre/Octobre'         ,'year' => '1985', 'month' =>  9,'publisher' => 'Editions SORACOM','cover' => 'theoric/theoric_12.jpg','download' => array('fr' => "theoric/theoric-12.pdf"),),
		array('type' => 'magazine','name' => "Théoric",'language' => 'fr','issue' => 'No 13 Octobre/Novembre'          ,'year' => '1985', 'month' => 10,'publisher' => 'Editions SORACOM','cover' => 'theoric/theoric_13.jpg','download' => array('fr' => "theoric/theoric-13.pdf"),),
		array('type' => 'magazine','name' => "Théoric",'language' => 'fr','issue' => 'No 14 Novembre/Décembre'         ,'year' => '1985', 'month' => 11,'publisher' => 'Editions SORACOM','cover' => 'theoric/theoric_14.jpg','download' => array('fr' => "theoric/theoric-14.pdf"),),
		array('type' => 'magazine','name' => "Théoric",'language' => 'fr','issue' => 'No 15 Décembre/Janvier'          ,'year' => '1985', 'month' => 12,'publisher' => 'Editions SORACOM','cover' => 'theoric/theoric_15.jpg','download' => array('fr' => "theoric/theoric-15.pdf"),),

		array('type' => 'magazine','name' => "Théoric",'language' => 'fr','issue' => 'No 16 Janvier/Février'           ,'year' => '1986', 'month' =>  1,'publisher' => 'Editions SORACOM','cover' => 'theoric/theoric_16.jpg','download' => array('fr' => "theoric/theoric-16.pdf"),),
		array('type' => 'magazine','name' => "Théoric",'language' => 'fr','issue' => 'No 17 Février/Mars'              ,'year' => '1986', 'month' =>  2,'publisher' => 'Editions SORACOM','cover' => 'theoric/theoric_17.jpg','download' => array('fr' => "theoric/theoric-17.pdf"),),
		array('type' => 'magazine','name' => "Théoric",'language' => 'fr','issue' => 'No 18 Mars/Avril'                ,'year' => '1986', 'month' =>  3,'publisher' => 'Editions SORACOM','cover' => 'theoric/theoric_18.jpg','download' => array('fr' => "theoric/theoric-18.pdf"),),
		array('type' => 'magazine','name' => "Théoric",'language' => 'fr','issue' => 'No 19 Avril/Mai'                 ,'year' => '1986', 'month' =>  4,'publisher' => 'Editions SORACOM','cover' => 'theoric/theoric_19.jpg','download' => array('fr' => "theoric/theoric-19.pdf"),),
		array('type' => 'magazine','name' => "Théoric",'language' => 'fr','issue' => 'No 20 Mai-Juin'                  ,'year' => '1986', 'month' =>  5,'publisher' => 'Editions SORACOM','cover' => 'theoric/theoric_20.jpg','download' => array('fr' => "theoric/theoric-20.pdf"),),
		array('type' => 'magazine','name' => "Théoric",'language' => 'fr','issue' => 'No 21 Juin/Juillet'              ,'year' => '1986', 'month' =>  6,'publisher' => 'Editions SORACOM','cover' => 'theoric/theoric_21.jpg','download' => array('fr' => "theoric/theoric-21.pdf"),),
		array('type' => 'magazine','name' => "Théoric",'language' => 'fr','issue' => 'No 22 Juillet/Aout'              ,'year' => '1986', 'month' =>  7,'publisher' => 'Editions SORACOM','cover' => 'theoric/theoric_22.jpg','download' => array('fr' => "theoric/theoric-22.pdf"),),
		array('type' => 'magazine','name' => "Théoric",'language' => 'fr','issue' => 'No 23 Septembre'                 ,'year' => '1986', 'month' =>  9,'publisher' => 'Editions SORACOM','cover' => 'theoric/theoric_23.jpg','download' => array('fr' => "theoric/theoric-23.pdf"),),
		array('type' => 'magazine','name' => "Théoric",'language' => 'fr','issue' => 'No 24 Octobre'                   ,'year' => '1986', 'month' => 10,'publisher' => 'Editions SORACOM','cover' => 'theoric/theoric_24.jpg','download' => array('fr' => "theoric/theoric-24.pdf"),),
		array('type' => 'magazine','name' => "Théoric",'language' => 'fr','issue' => 'No 25 Novembre'                  ,'year' => '1986', 'month' => 11,'publisher' => 'Editions SORACOM','cover' => 'theoric/theoric_25.jpg','download' => array('fr' => "theoric/theoric-25.pdf"),),
		array('type' => 'magazine','name' => "Théoric",'language' => 'fr','issue' => 'No 26 Décembre'                  ,'year' => '1986', 'month' => 12,'publisher' => 'Editions SORACOM','cover' => 'theoric/theoric_25_2.jpg','download' => array('fr' => "theoric/theoric-26.pdf"),),

		array('type' => 'magazine','name' => "Théoric",'language' => 'fr','issue' => 'No 27 Janvier'                   ,'year' => '1987', 'month' =>  1,'publisher' => 'Editions SORACOM','cover' => 'theoric/theoric_27.jpg','download' => array('fr' => "theoric/theoric-27.pdf"),),
		array('type' => 'magazine','name' => "Théoric",'language' => 'fr','issue' => 'No 28 Février'                   ,'year' => '1987', 'month' =>  2,'publisher' => 'Editions SORACOM','cover' => 'theoric/theoric_28.jpg','download' => array('fr' => "theoric/theoric-28.pdf"),),
		array('type' => 'magazine','name' => "Théoric",'language' => 'fr','issue' => 'No 29 Mars'                      ,'year' => '1987', 'month' =>  3,'publisher' => 'Editions SORACOM','cover' => 'theoric/theoric_29.jpg','download' => array('fr' => "theoric/theoric-29.pdf"),),
		array('type' => 'magazine','name' => "Théoric",'language' => 'fr','issue' => 'No 30 Avril'                     ,'year' => '1987', 'month' =>  4,'publisher' => 'Editions SORACOM','cover' => 'theoric/theoric_30.jpg','download' => array('fr' => "theoric/theoric-30.pdf"),),
		array('type' => 'magazine','name' => "Théoric",'language' => 'fr','issue' => 'No 31 Mai'                       ,'year' => '1987', 'month' =>  5,'publisher' => 'Editions SORACOM','cover' => 'theoric/theoric_31.jpg','download' => array('fr' => "theoric/theoric-31.pdf"),),
		array('type' => 'magazine','name' => "Théoric",'language' => 'fr','issue' => 'No 32 Juin'                      ,'year' => '1987', 'month' =>  6,'publisher' => 'Editions SORACOM','cover' => 'theoric/theoric_32.jpg','download' => array('fr' => "theoric/theoric-32.pdf"),),
		array('type' => 'magazine','name' => "Théoric",'language' => 'fr','issue' => 'No 33 Juillet'                   ,'year' => '1987', 'month' =>  7,'publisher' => 'Editions SORACOM','cover' => 'theoric/theoric_33.jpg','download' => array('fr' => "theoric/theoric-33.pdf"),),
		array('type' => 'magazine','name' => "Théoric",'language' => 'fr','issue' => 'No 34 Septembre'                 ,'year' => '1987', 'month' =>  9,'publisher' => 'Editions SORACOM','cover' => 'theoric/theoric_34.jpg','download' => array('fr' => "theoric/theoric-34.pdf"),),
		array('type' => 'magazine','name' => "Théoric",'language' => 'fr','issue' => 'No 35 Octobre'                   ,'year' => '1987', 'month' => 10,'publisher' => 'Editions SORACOM','cover' => 'theoric/theoric_35.jpg','download' => array('fr' => "theoric/theoric-35.pdf"),),
		array('type' => 'magazine','name' => "Théoric",'language' => 'fr','issue' => 'No 36 Novembre'                  ,'year' => '1987', 'month' => 11,'publisher' => 'Editions SORACOM','cover' => 'theoric/theoric_36.jpg','download' => array('fr' => "theoric/theoric-36.pdf"),),
		array('type' => 'magazine','name' => "Théoric",'language' => 'fr','issue' => 'No 37 Décembre'                  ,'year' => '1987', 'month' => 12,'publisher' => 'Editions SORACOM','cover' => 'theoric/theoric_37.jpg','download' => array('fr' => "theoric/theoric-37.pdf"),),

		// -------------------------- Oric User Monthly ----------------------------------
		// http://compmuseum.narod.ru/articles/oric/chaptr12.html
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 1 September','year' => '1987', 'month' =>  9,'cover' => 'oric_user_monthly/oum_1987_001.jpg','download' => array('en' => "oric_user_monthly/oum_001.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 2 October'  ,'year' => '1987', 'month' => 10,'cover' => 'oric_user_monthly/oum_1987_002.jpg','download' => array('en' => "oric_user_monthly/oum_002.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 3 November' ,'year' => '1987', 'month' => 11,'cover' => 'oric_user_monthly/oum_1987_003.jpg','download' => array('en' => "oric_user_monthly/oum_003.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 4 December' ,'year' => '1987', 'month' => 12,'cover' => 'oric_user_monthly/oum_1987_004.jpg','download' => array('en' => "oric_user_monthly/oum_004.pdf"),),

		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 5 January'  ,'year' => '1988', 'month' =>  1,'cover' => 'oric_user_monthly/oum_1988_005.jpg','download' => array('en' => "oric_user_monthly/oum_005.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 6 February' ,'year' => '1988', 'month' =>  2,'cover' => 'oric_user_monthly/oum_1988_006.jpg','download' => array('en' => "oric_user_monthly/oum_006.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 7 March'    ,'year' => '1988', 'month' =>  3,'cover' => 'oric_user_monthly/oum_1988_007.jpg','download' => array('en' => "oric_user_monthly/oum_007.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 8 April'    ,'year' => '1988', 'month' =>  4,'cover' => 'oric_user_monthly/oum_1988_008.jpg','download' => array('en' => "oric_user_monthly/oum_008.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 9 May'      ,'year' => '1988', 'month' =>  5,'cover' => 'oric_user_monthly/oum_1988_009.jpg','download' => array('en' => "oric_user_monthly/oum_009.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 10 June'    ,'year' => '1988', 'month' =>  6,'cover' => 'oric_user_monthly/oum_1988_010.jpg','download' => array('en' => "oric_user_monthly/oum_010.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 11 July'    ,'year' => '1988', 'month' =>  7,'cover' => 'oric_user_monthly/oum_1988_011.jpg','download' => array('en' => "oric_user_monthly/oum_011.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 12 August'  ,'year' => '1988', 'month' =>  8,'cover' => 'oric_user_monthly/oum_1988_012.jpg','download' => array('en' => "oric_user_monthly/oum_012.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 13 September','year'=> '1988', 'month' =>  9,'cover' => 'oric_user_monthly/oum_1988_013.jpg','download' => array('en' => "oric_user_monthly/oum_013.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 14 October' ,'year' => '1988', 'month' => 10,'cover' => 'oric_user_monthly/oum_1988_014.jpg','download' => array('en' => "oric_user_monthly/oum_014.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 15 November','year' => '1988', 'month' => 11,'cover' => 'oric_user_monthly/oum_1988_015.jpg','download' => array('en' => "oric_user_monthly/oum_015.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 16 December','year' => '1988', 'month' => 12,'cover' => 'oric_user_monthly/oum_1988_016.jpg','download' => array('en' => "oric_user_monthly/oum_016.pdf"),),

		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 17 January' ,'year' => '1989', 'month' =>  1,'cover' => 'oric_user_monthly/oum_1989_017.jpg','download' => array('en' => "oric_user_monthly/oum_017.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 18 Feb'     ,'year' => '1989', 'month' =>  2,'cover' => 'oric_user_monthly/oum_1989_018.jpg','download' => array('en' => "oric_user_monthly/oum_018.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 19 March'   ,'year' => '1989', 'month' =>  3,'cover' => 'oric_user_monthly/oum_1989_019.jpg','download' => array('en' => "oric_user_monthly/oum_019.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 20 April'   ,'year' => '1989', 'month' =>  4,'cover' => 'oric_user_monthly/oum_1989_020.jpg','download' => array('en' => "oric_user_monthly/oum_020.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 21 May'     ,'year' => '1989', 'month' =>  5,'cover' => 'oric_user_monthly/oum_1989_021.jpg','download' => array('en' => "oric_user_monthly/oum_021.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 22 June'    ,'year' => '1989', 'month' =>  6,'cover' => 'oric_user_monthly/oum_1989_022.jpg','download' => array('en' => "oric_user_monthly/oum_022.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 23 July'    ,'year' => '1989', 'month' =>  7,'cover' => 'oric_user_monthly/oum_1989_023.jpg','download' => array('en' => "oric_user_monthly/oum_023.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 24 August'  ,'year' => '1989', 'month' =>  8,'cover' => 'oric_user_monthly/oum_1989_024.jpg','download' => array('en' => "oric_user_monthly/oum_024.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 25 September','year'=> '1989', 'month' =>  9,'cover' => 'oric_user_monthly/oum_1989_025.jpg','download' => array('en' => "oric_user_monthly/oum_025.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 26 October' ,'year' => '1989', 'month' => 10,'cover' => 'oric_user_monthly/oum_1989_026.jpg','download' => array('en' => "oric_user_monthly/oum_026.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 27 November','year' => '1989', 'month' => 11,'cover' => 'oric_user_monthly/oum_1989_027.jpg','download' => array('en' => "oric_user_monthly/oum_027.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 28 December','year' => '1989', 'month' => 12,'cover' => 'oric_user_monthly/oum_1989_028.jpg','download' => array('en' => "oric_user_monthly/oum_028.pdf"),),

		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 29 January' ,'year' => '1990', 'month' =>  1,'cover' => 'oric_user_monthly/oum_1990_029.jpg','download' => array('en' => "oric_user_monthly/oum_029.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 30 February','year' => '1990', 'month' =>  2,'cover' => 'oric_user_monthly/oum_1990_030.jpg','download' => array('en' => "oric_user_monthly/oum_030.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 31 March'   ,'year' => '1990', 'month' =>  3,'cover' => 'oric_user_monthly/oum_1990_031.jpg','download' => array('en' => "oric_user_monthly/oum_031.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 32 April'   ,'year' => '1990', 'month' =>  4,'cover' => 'oric_user_monthly/oum_1990_032.jpg','download' => array('en' => "oric_user_monthly/oum_032.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 33 May'     ,'year' => '1990', 'month' =>  5,'cover' => 'oric_user_monthly/oum_1990_033.jpg','download' => array('en' => "oric_user_monthly/oum_033.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 34 June'    ,'year' => '1990', 'month' =>  6,'cover' => 'oric_user_monthly/oum_1990_034.jpg','download' => array('en' => "oric_user_monthly/oum_034.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 35 July'    ,'year' => '1990', 'month' =>  7,'cover' => 'oric_user_monthly/oum_1990_035.jpg','download' => array('en' => "oric_user_monthly/oum_035.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 36 August'  ,'year' => '1990', 'month' =>  8,'cover' => 'oric_user_monthly/oum_1990_036.jpg','download' => array('en' => "oric_user_monthly/oum_036.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 37 September','year'=> '1990', 'month' =>  9,'cover' => 'oric_user_monthly/oum_1990_037.jpg','download' => array('en' => "oric_user_monthly/oum_037.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 38 October' ,'year' => '1990', 'month' => 10,'cover' => 'oric_user_monthly/oum_1990_038.jpg','download' => array('en' => "oric_user_monthly/oum_038.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 38 Listings','year' => '1990', 'month' => 10,'cover' => 'oric_user_monthly/oum_1990_038_programs.jpg','download' => array('en' => "oric_user_monthly/oum_038_programs.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 39 November','year' => '1990', 'month' => 11,'cover' => 'oric_user_monthly/oum_1990_039.jpg','download' => array('en' => "oric_user_monthly/oum_039.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 40 December','year' => '1990', 'month' => 12,'cover' => 'oric_user_monthly/oum_1990_040.jpg','download' => array('en' => "oric_user_monthly/oum_040.pdf"),),

		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 41 January' ,'year' => '1991', 'month' =>  1,'cover' => 'oric_user_monthly/oum_1991_041.jpg','download' => array('en' => "oric_user_monthly/oum_041.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 42 February','year' => '1991', 'month' =>  2,'cover' => 'oric_user_monthly/oum_1991_042.jpg','download' => array('en' => "oric_user_monthly/oum_042.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 43 March'   ,'year' => '1991', 'month' =>  3,'cover' => 'oric_user_monthly/oum_1991_043.jpg','download' => array('en' => "oric_user_monthly/oum_043.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 44 April'   ,'year' => '1991', 'month' =>  4,'cover' => 'oric_user_monthly/oum_1991_044.jpg','download' => array('en' => "oric_user_monthly/oum_044.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 45 May'     ,'year' => '1991', 'month' =>  5,'cover' => 'oric_user_monthly/oum_1991_045.jpg','download' => array('en' => "oric_user_monthly/oum_045.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 46 June'    ,'year' => '1991', 'month' =>  6,'cover' => 'oric_user_monthly/oum_1991_046.jpg','download' => array('en' => "oric_user_monthly/oum_046.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 47 July'    ,'year' => '1991', 'month' =>  7,'cover' => 'oric_user_monthly/oum_1991_047.jpg','download' => array('en' => "oric_user_monthly/oum_047.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 48 August'  ,'year' => '1991', 'month' =>  8,'cover' => 'oric_user_monthly/oum_1991_048.jpg','download' => array('en' => "oric_user_monthly/oum_048.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 49 September','year'=> '1991', 'month' =>  9,'cover' => 'oric_user_monthly/oum_1991_049.jpg','download' => array('en' => "oric_user_monthly/oum_049.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 50 October' ,'year' => '1991', 'month' => 10,'cover' => 'oric_user_monthly/oum_1991_050.jpg','download' => array('en' => "oric_user_monthly/oum_050.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 51 November','year' => '1991', 'month' => 11,'cover' => 'oric_user_monthly/oum_1991_051.jpg','download' => array('en' => "oric_user_monthly/oum_051.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 52 December','year' => '1991', 'month' => 12,'cover' => 'oric_user_monthly/oum_1991_052.jpg','download' => array('en' => "oric_user_monthly/oum_052.pdf"),),

		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 53 January' ,'year' => '1992', 'month' =>  1,'cover' => 'oric_user_monthly/oum_1992_053.jpg','download' => array('en' => "oric_user_monthly/oum_053.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 54 February','year' => '1992', 'month' =>  2,'cover' => 'oric_user_monthly/oum_1992_054.jpg','download' => array('en' => "oric_user_monthly/oum_054.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 55 March'   ,'year' => '1992', 'month' =>  3,'cover' => 'oric_user_monthly/oum_1992_055.jpg','download' => array('en' => "oric_user_monthly/oum_055.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 56 April'   ,'year' => '1992', 'month' =>  4,'cover' => 'oric_user_monthly/oum_1992_056.jpg','download' => array('en' => "oric_user_monthly/oum_056.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 57 May'     ,'year' => '1992', 'month' =>  5,'cover' => 'oric_user_monthly/oum_1992_057.jpg','download' => array('en' => "oric_user_monthly/oum_057.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 58 June'    ,'year' => '1992', 'month' =>  6,'cover' => 'oric_user_monthly/oum_1992_058.jpg','download' => array('en' => "oric_user_monthly/oum_058.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 59 July'    ,'year' => '1992', 'month' =>  7,'cover' => 'oric_user_monthly/oum_1992_059.jpg','download' => array('en' => "oric_user_monthly/oum_059.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 60/61 August/September'  ,'year' => '1992', 'month' =>  8,'cover' => 'oric_user_monthly/oum_1992_060-061.jpg','download' => array('en' => "oric_user_monthly/oum_060-061.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 62 October' ,'year' => '1992', 'month' => 10,'cover' => 'oric_user_monthly/oum_1992_062.jpg','download' => array('en' => "oric_user_monthly/oum_062.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 63 November','year' => '1992', 'month' => 11,'cover' => 'oric_user_monthly/oum_1992_063.jpg','download' => array('en' => "oric_user_monthly/oum_063.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 64 December','year' => '1992', 'month' => 12,'cover' => 'oric_user_monthly/oum_1992_064.jpg','download' => array('en' => "oric_user_monthly/oum_064.pdf"),),

		/*
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 65 January' ,'year' => '1993', 'month' =>  1,'cover' => 'oric_user_monthly/oum_1993_065.jpg',),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 66 February','year' => '1993', 'month' =>  2,'cover' => 'oric_user_monthly/oum_1993_066.jpg',),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 67 March'   ,'year' => '1993', 'month' =>  3,'cover' => 'oric_user_monthly/oum_1993_067.jpg',),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 68 April'   ,'year' => '1993', 'month' =>  4,'cover' => 'oric_user_monthly/oum_1993_068.jpg',),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 69 May'     ,'year' => '1993', 'month' =>  5,'cover' => 'oric_user_monthly/oum_1993_069.jpg',),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 70 June'    ,'year' => '1993', 'month' =>  6,'cover' => 'oric_user_monthly/oum_1993_070.jpg',),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 71 July'    ,'year' => '1993', 'month' =>  7,'cover' => 'oric_user_monthly/oum_1993_071.jpg',),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 72/73 August/September'  ,'year' => '1993', 'month' =>  8,'cover' => 'oric_user_monthly/oum_1993_072-073.jpg',),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 74 October' ,'year' => '1993', 'month' => 10,'cover' => 'oric_user_monthly/oum_1993_074.jpg',),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 75 November','year' => '1993', 'month' => 11,'cover' => 'oric_user_monthly/oum_1993_075.jpg',),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 76 December','year' => '1993', 'month' => 12,'cover' => 'oric_user_monthly/oum_1993_076.jpg',),

		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 77 January' ,'year' => '1994', 'month' =>  1,'cover' => 'oric_user_monthly/oum_1994_077.jpg',),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 78 February','year' => '1994', 'month' =>  2,'cover' => 'oric_user_monthly/oum_1994_078.jpg',),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 79 March'   ,'year' => '1994', 'month' =>  3,'cover' => 'oric_user_monthly/oum_1994_079.jpg',),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 80 April'   ,'year' => '1994', 'month' =>  4,'cover' => 'oric_user_monthly/oum_1994_080.jpg',),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 81 May'     ,'year' => '1994', 'month' =>  5,'cover' => 'oric_user_monthly/oum_1994_081.jpg',),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 82 June'    ,'year' => '1994', 'month' =>  6,'cover' => 'oric_user_monthly/oum_1994_082.jpg',),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 83 July'    ,'year' => '1994', 'month' =>  7,'cover' => 'oric_user_monthly/oum_1994_083.jpg',),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 84 August'  ,'year' => '1994', 'month' =>  8,'cover' => 'oric_user_monthly/oum_1994_084.jpg',),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 85 September','year' => '1994', 'month' => 9,'cover' => 'oric_user_monthly/oum_1994_085.jpg',),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 86/87 October/November','year' => '1994', 'month' => 10,'cover' => 'oric_user_monthly/oum_1994_086-087.jpg',),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 88 December','year' => '1994', 'month' => 12,'cover' => 'oric_user_monthly/oum_1994_088.jpg',),

		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 89 January' ,'year' => '1995', 'month' =>  1,'cover' => 'oric_user_monthly/oum_1995_089.jpg',),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 90 February','year' => '1995', 'month' =>  2,'cover' => 'oric_user_monthly/oum_1995_090.jpg',),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 91 March'   ,'year' => '1995', 'month' =>  3,'cover' => 'oric_user_monthly/oum_1995_091.jpg',),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 92/93 April/May'   ,'year' => '1995', 'month' =>  4,'cover' => 'oric_user_monthly/oum_1995_092-093.jpg',),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 94 June'    ,'year' => '1995', 'month' =>  6,'cover' => 'oric_user_monthly/oum_1995_094.jpg',),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 95 July'    ,'year' => '1995', 'month' =>  7,'cover' => 'oric_user_monthly/oum_1995_095.jpg',),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 96 August'  ,'year' => '1995', 'month' =>  8,'cover' => 'oric_user_monthly/oum_1995_096.jpg',),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 97/98 September/October','year' => '1995', 'month' => 9,'cover' => 'oric_user_monthly/oum_1995_097-098.jpg',),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 99 November','year' => '1995', 'month' => 11,'cover' => 'oric_user_monthly/oum_1995_099.jpg',),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 100 December','year' => '1995', 'month' => 12,'cover' => 'oric_user_monthly/oum_1995_100.jpg',),

		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 101 January' ,'year' => '1996', 'month' =>  1,'cover' => 'oric_user_monthly/oum_1996_101.jpg',),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 102 Feb'     ,'year' => '1996', 'month' =>  2,'cover' => 'oric_user_monthly/oum_1996_102.jpg',),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 103 March'   ,'year' => '1996', 'month' =>  3,'cover' => 'oric_user_monthly/oum_1996_103.jpg',),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 104 April'   ,'year' => '1996', 'month' =>  4,'cover' => 'oric_user_monthly/oum_1996_104.jpg',),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 105 May'     ,'year' => '1996', 'month' =>  5,'cover' => 'oric_user_monthly/oum_1996_105.jpg',),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 106 June'    ,'year' => '1996', 'month' =>  6,'cover' => 'oric_user_monthly/oum_1996_106.jpg',),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 107 July'    ,'year' => '1996', 'month' =>  7,'cover' => 'oric_user_monthly/oum_1996_107.jpg',),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 108-109 August/September'  ,'year' => '1996', 'month' =>  8,'cover' => 'oric_user_monthly/oum_1996_108-109.jpg',),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 110 October' ,'year' => '1996', 'month' => 10,'cover' => 'oric_user_monthly/oum_1996_110.jpg',),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 111 November','year' => '1996', 'month' => 11,'cover' => 'oric_user_monthly/oum_1996_111.jpg',),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 112 December','year' => '1996', 'month' => 12,'cover' => 'oric_user_monthly/oum_1996_112.jpg',),

		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 113 January' ,'year' => '1997', 'month' =>  1,'cover' => 'oric_user_monthly/oum_1997_113.jpg',),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 114 February','year' => '1997', 'month' =>  2,'cover' => 'oric_user_monthly/oum_1997_114.jpg',),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 115 March'   ,'year' => '1997', 'month' =>  3,'cover' => 'oric_user_monthly/oum_1997_115.jpg',),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 116 April'   ,'year' => '1997', 'month' =>  4,'cover' => 'oric_user_monthly/oum_1997_116.jpg',),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 117 May'     ,'year' => '1997', 'month' =>  5,'cover' => 'oric_user_monthly/oum_1997_117.jpg',),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 118 June'    ,'year' => '1997', 'month' =>  6,'cover' => 'oric_user_monthly/oum_1997_118.jpg',),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 119 July'    ,'year' => '1997', 'month' =>  7,'cover' => 'oric_user_monthly/oum_1997_119.jpg',),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 120/121 August/September'  ,'year' => '1997', 'month' =>  8,'cover' => 'oric_user_monthly/oum_1997_120-121.jpg',),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 122 October' ,'year' => '1997', 'month' => 10,'cover' => 'oric_user_monthly/oum_1997_122.jpg',),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 123 November','year' => '1997', 'month' => 11,'cover' => 'oric_user_monthly/oum_1997_123.jpg',),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 124 December','year' => '1997', 'month' => 12,'cover' => 'oric_user_monthly/oum_1997_124.jpg',),

		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 125/6 January/February' ,'year' => '1998', 'month' =>  1,'cover' => 'oric_user_monthly/oum_1998_125-126.jpg',),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 127 March'   ,'year' => '1998', 'month' =>  3,'cover' => 'oric_user_monthly/oum_1998_127.jpg',),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 128 April'   ,'year' => '1998', 'month' =>  4,'cover' => 'oric_user_monthly/oum_1998_128.jpg',),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 129 May'     ,'year' => '1998', 'month' =>  5,'cover' => 'oric_user_monthly/oum_1998_129.jpg',),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 130 June'    ,'year' => '1998', 'month' =>  6,'cover' => 'oric_user_monthly/oum_1998_130.jpg',),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 131 July'    ,'year' => '1998', 'month' =>  7,'cover' => 'oric_user_monthly/oum_1998_131.jpg',),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 132/3 August/September'  ,'year' => '1998', 'month' =>  8,'cover' => 'oric_user_monthly/oum_1998_132-133.jpg',),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 134 October' ,'year' => '1998', 'month' => 10,'cover' => 'oric_user_monthly/oum_1998_134.jpg',),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 135 November','year' => '1998', 'month' => 11,'cover' => 'oric_user_monthly/oum_1998_135.jpg',),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 136 December','year' => '1998', 'month' => 12,'cover' => 'oric_user_monthly/oum_1998_136.jpg',),

		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 137 January' ,'year' => '1999', 'month' =>  1,'cover' => 'oric_user_monthly/oum_1999_137.jpg',),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 138/9 February/March','year' => '1999', 'month' =>  2,'cover' => 'oric_user_monthly/oum_1999_138-139.jpg',),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 140 April'   ,'year' => '1999', 'month' =>  4,'cover' => 'oric_user_monthly/oum_1999_140.jpg',),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 141 May'     ,'year' => '1999', 'month' =>  5,'cover' => 'oric_user_monthly/oum_1999_141.jpg',),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 142 June'    ,'year' => '1999', 'month' =>  6,'cover' => 'oric_user_monthly/oum_1999_142.jpg',),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 143-144 July/August'    ,'year' => '1999', 'month' =>  7,'cover' => 'oric_user_monthly/oum_1999_143-144.jpg',),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 145 September','year'=> '1999', 'month' => 9,'cover' => 'oric_user_monthly/oum_1999_145.jpg',),

		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'Index Issues 1 to 145','year'=> '2002', 'month' => 4,'cover' => 'oric_user_monthly/oum_index.jpg',),
		*/

		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 65 January' ,'year' => '1993', 'month' =>  1,'cover' => 'oric_user_monthly/oum_1993_065.jpg', 'download' => array('en' => "oric_user_monthly/oum_065.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 66 February','year' => '1993', 'month' =>  2,'cover' => 'oric_user_monthly/oum_1993_066.jpg', 'download' => array('en' => "oric_user_monthly/oum_066.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 67 March'   ,'year' => '1993', 'month' =>  3,'cover' => 'oric_user_monthly/oum_1993_067.jpg', 'download' => array('en' => "oric_user_monthly/oum_067.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 68 April'   ,'year' => '1993', 'month' =>  4,'cover' => 'oric_user_monthly/oum_1993_068.jpg', 'download' => array('en' => "oric_user_monthly/oum_068.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 69 May'     ,'year' => '1993', 'month' =>  5,'cover' => 'oric_user_monthly/oum_1993_069.jpg', 'download' => array('en' => "oric_user_monthly/oum_069.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 70 June'    ,'year' => '1993', 'month' =>  6,'cover' => 'oric_user_monthly/oum_1993_070.jpg', 'download' => array('en' => "oric_user_monthly/oum_070.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 71 July'    ,'year' => '1993', 'month' =>  7,'cover' => 'oric_user_monthly/oum_1993_071.jpg', 'download' => array('en' => "oric_user_monthly/oum_071.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 72/73 August/September'  ,'year' => '1993', 'month' =>  8,'cover' => 'oric_user_monthly/oum_1993_072-073.jpg', 'download' => array('en' => "oric_user_monthly/oum_072-073.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 74 October' ,'year' => '1993', 'month' => 10,'cover' => 'oric_user_monthly/oum_1993_074.jpg', 'download' => array('en' => "oric_user_monthly/oum_074.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 75 November','year' => '1993', 'month' => 11,'cover' => 'oric_user_monthly/oum_1993_075.jpg', 'download' => array('en' => "oric_user_monthly/oum_075.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 76 December','year' => '1993', 'month' => 12,'cover' => 'oric_user_monthly/oum_1993_076.jpg', 'download' => array('en' => "oric_user_monthly/oum_076.pdf"),),

		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 77 January' ,'year' => '1994', 'month' =>  1,'cover' => 'oric_user_monthly/oum_1994_077.jpg', 'download' => array('en' => "oric_user_monthly/oum_077.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 78 February','year' => '1994', 'month' =>  2,'cover' => 'oric_user_monthly/oum_1994_078.jpg', 'download' => array('en' => "oric_user_monthly/oum_078.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 79 March'   ,'year' => '1994', 'month' =>  3,'cover' => 'oric_user_monthly/oum_1994_079.jpg', 'download' => array('en' => "oric_user_monthly/oum_079.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 80 April'   ,'year' => '1994', 'month' =>  4,'cover' => 'oric_user_monthly/oum_1994_080.jpg', 'download' => array('en' => "oric_user_monthly/oum_080.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 81 May'     ,'year' => '1994', 'month' =>  5,'cover' => 'oric_user_monthly/oum_1994_081.jpg', 'download' => array('en' => "oric_user_monthly/oum_081.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 82 June'    ,'year' => '1994', 'month' =>  6,'cover' => 'oric_user_monthly/oum_1994_082.jpg', 'download' => array('en' => "oric_user_monthly/oum_082.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 83 July'    ,'year' => '1994', 'month' =>  7,'cover' => 'oric_user_monthly/oum_1994_083.jpg', 'download' => array('en' => "oric_user_monthly/oum_083.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 84 August'  ,'year' => '1994', 'month' =>  8,'cover' => 'oric_user_monthly/oum_1994_084.jpg', 'download' => array('en' => "oric_user_monthly/oum_084.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 85 September','year' => '1994', 'month' => 9,'cover' => 'oric_user_monthly/oum_1994_085.jpg', 'download' => array('en' => "oric_user_monthly/oum_085.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 86/87 October/November','year' => '1994', 'month' => 10,'cover' => 'oric_user_monthly/oum_1994_086-087.jpg', 'download' => array('en' => "oric_user_monthly/oum_086-087.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 88 December','year' => '1994', 'month' => 12,'cover' => 'oric_user_monthly/oum_1994_088.jpg', 'download' => array('en' => "oric_user_monthly/oum_088.pdf"),),

		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 89 January' ,'year' => '1995', 'month' =>  1,'cover' => 'oric_user_monthly/oum_1995_089.jpg', 'download' => array('en' => "oric_user_monthly/oum_089.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 90 February','year' => '1995', 'month' =>  2,'cover' => 'oric_user_monthly/oum_1995_090.jpg', 'download' => array('en' => "oric_user_monthly/oum_090.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 91 March'   ,'year' => '1995', 'month' =>  3,'cover' => 'oric_user_monthly/oum_1995_091.jpg', 'download' => array('en' => "oric_user_monthly/oum_091.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 92/93 April/May'   ,'year' => '1995', 'month' =>  4,'cover' => 'oric_user_monthly/oum_1995_092-093.jpg', 'download' => array('en' => "oric_user_monthly/oum_092-093.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 94 June'    ,'year' => '1995', 'month' =>  6,'cover' => 'oric_user_monthly/oum_1995_094.jpg', 'download' => array('en' => "oric_user_monthly/oum_094.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 95 July'    ,'year' => '1995', 'month' =>  7,'cover' => 'oric_user_monthly/oum_1995_095.jpg', 'download' => array('en' => "oric_user_monthly/oum_095.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 96 August'  ,'year' => '1995', 'month' =>  8,'cover' => 'oric_user_monthly/oum_1995_096.jpg', 'download' => array('en' => "oric_user_monthly/oum_096.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 97/98 September/October','year' => '1995', 'month' => 9,'cover' => 'oric_user_monthly/oum_1995_097-098.jpg', 'download' => array('en' => "oric_user_monthly/oum_097-098.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 99 November','year' => '1995', 'month' => 11,'cover' => 'oric_user_monthly/oum_1995_099.jpg', 'download' => array('en' => "oric_user_monthly/oum_099.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 100 December','year' => '1995', 'month' => 12,'cover' => 'oric_user_monthly/oum_1995_100.jpg', 'download' => array('en' => "oric_user_monthly/oum_100.pdf"),),

		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 101 January' ,'year' => '1996', 'month' =>  1,'cover' => 'oric_user_monthly/oum_1996_101.jpg', 'download' => array('en' => "oric_user_monthly/oum_101.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 102 Feb'     ,'year' => '1996', 'month' =>  2,'cover' => 'oric_user_monthly/oum_1996_102.jpg', 'download' => array('en' => "oric_user_monthly/oum_102.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 103 March'   ,'year' => '1996', 'month' =>  3,'cover' => 'oric_user_monthly/oum_1996_103.jpg', 'download' => array('en' => "oric_user_monthly/oum_103.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 104 April'   ,'year' => '1996', 'month' =>  4,'cover' => 'oric_user_monthly/oum_1996_104.jpg', 'download' => array('en' => "oric_user_monthly/oum_104.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 105 May'     ,'year' => '1996', 'month' =>  5,'cover' => 'oric_user_monthly/oum_1996_105.jpg', 'download' => array('en' => "oric_user_monthly/oum_105.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 106 June'    ,'year' => '1996', 'month' =>  6,'cover' => 'oric_user_monthly/oum_1996_106.jpg', 'download' => array('en' => "oric_user_monthly/oum_106.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 107 July'    ,'year' => '1996', 'month' =>  7,'cover' => 'oric_user_monthly/oum_1996_107.jpg', 'download' => array('en' => "oric_user_monthly/oum_107.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 108-109 August/September'  ,'year' => '1996', 'month' =>  8,'cover' => 'oric_user_monthly/oum_1996_108-109.jpg', 'download' => array('en' => "oric_user_monthly/oum_108-109.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 110 October' ,'year' => '1996', 'month' => 10,'cover' => 'oric_user_monthly/oum_1996_110.jpg', 'download' => array('en' => "oric_user_monthly/oum_110.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 111 November','year' => '1996', 'month' => 11,'cover' => 'oric_user_monthly/oum_1996_111.jpg', 'download' => array('en' => "oric_user_monthly/oum_111.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 112 December','year' => '1996', 'month' => 12,'cover' => 'oric_user_monthly/oum_1996_112.jpg', 'download' => array('en' => "oric_user_monthly/oum_112.pdf"),),

		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 113 January' ,'year' => '1997', 'month' =>  1,'cover' => 'oric_user_monthly/oum_1997_113.jpg', 'download' => array('en' => "oric_user_monthly/oum_113.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 114 February','year' => '1997', 'month' =>  2,'cover' => 'oric_user_monthly/oum_1997_114.jpg', 'download' => array('en' => "oric_user_monthly/oum_114.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 115 March'   ,'year' => '1997', 'month' =>  3,'cover' => 'oric_user_monthly/oum_1997_115.jpg', 'download' => array('en' => "oric_user_monthly/oum_115.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 116 April'   ,'year' => '1997', 'month' =>  4,'cover' => 'oric_user_monthly/oum_1997_116.jpg', 'download' => array('en' => "oric_user_monthly/oum_116.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 117 May'     ,'year' => '1997', 'month' =>  5,'cover' => 'oric_user_monthly/oum_1997_117.jpg', 'download' => array('en' => "oric_user_monthly/oum_117.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 118 June'    ,'year' => '1997', 'month' =>  6,'cover' => 'oric_user_monthly/oum_1997_118.jpg', 'download' => array('en' => "oric_user_monthly/oum_118.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 119 July'    ,'year' => '1997', 'month' =>  7,'cover' => 'oric_user_monthly/oum_1997_119.jpg', 'download' => array('en' => "oric_user_monthly/oum_119.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 120/121 August/September'  ,'year' => '1997', 'month' =>  8,'cover' => 'oric_user_monthly/oum_1997_120-121.jpg', 'download' => array('en' => "oric_user_monthly/oum_120-121.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 122 October' ,'year' => '1997', 'month' => 10,'cover' => 'oric_user_monthly/oum_1997_122.jpg', 'download' => array('en' => "oric_user_monthly/oum_122.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 123 November','year' => '1997', 'month' => 11,'cover' => 'oric_user_monthly/oum_1997_123.jpg', 'download' => array('en' => "oric_user_monthly/oum_123.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 124 December','year' => '1997', 'month' => 12,'cover' => 'oric_user_monthly/oum_1997_124.jpg', 'download' => array('en' => "oric_user_monthly/oum_124.pdf"),),

		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 125/6 January/February' ,'year' => '1998', 'month' =>  1,'cover' => 'oric_user_monthly/oum_1998_125-126.jpg', 'download' => array('en' => "oric_user_monthly/oum_125-126.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 127 March'   ,'year' => '1998', 'month' =>  3,'cover' => 'oric_user_monthly/oum_1998_127.jpg', 'download' => array('en' => "oric_user_monthly/oum_127.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 128 April'   ,'year' => '1998', 'month' =>  4,'cover' => 'oric_user_monthly/oum_1998_128.jpg', 'download' => array('en' => "oric_user_monthly/oum_128.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 129 May'     ,'year' => '1998', 'month' =>  5,'cover' => 'oric_user_monthly/oum_1998_129.jpg', 'download' => array('en' => "oric_user_monthly/oum_129.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 130 June'    ,'year' => '1998', 'month' =>  6,'cover' => 'oric_user_monthly/oum_1998_130.jpg', 'download' => array('en' => "oric_user_monthly/oum_130.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 131 July'    ,'year' => '1998', 'month' =>  7,'cover' => 'oric_user_monthly/oum_1998_131.jpg', 'download' => array('en' => "oric_user_monthly/oum_131.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 132/3 August/September'  ,'year' => '1998', 'month' =>  8,'cover' => 'oric_user_monthly/oum_1998_132-133.jpg', 'download' => array('en' => "oric_user_monthly/oum_132-133.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 134 October' ,'year' => '1998', 'month' => 10,'cover' => 'oric_user_monthly/oum_1998_134.jpg', 'download' => array('en' => "oric_user_monthly/oum_134.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 135 November','year' => '1998', 'month' => 11,'cover' => 'oric_user_monthly/oum_1998_135.jpg', 'download' => array('en' => "oric_user_monthly/oum_135.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 136 December','year' => '1998', 'month' => 12,'cover' => 'oric_user_monthly/oum_1998_136.jpg', 'download' => array('en' => "oric_user_monthly/oum_136.pdf"),),

		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 137 January' ,'year' => '1999', 'month' =>  1,'cover' => 'oric_user_monthly/oum_1999_137.jpg', 'download' => array('en' => "oric_user_monthly/oum_137.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 138/9 February/March','year' => '1999', 'month' =>  2,'cover' => 'oric_user_monthly/oum_1999_138-139.jpg', 'download' => array('en' => "oric_user_monthly/oum_138-139.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 140 April'   ,'year' => '1999', 'month' =>  4,'cover' => 'oric_user_monthly/oum_1999_140.jpg', 'download' => array('en' => "oric_user_monthly/oum_140.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 141 May'     ,'year' => '1999', 'month' =>  5,'cover' => 'oric_user_monthly/oum_1999_141.jpg', 'download' => array('en' => "oric_user_monthly/oum_141.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 142 June'    ,'year' => '1999', 'month' =>  6,'cover' => 'oric_user_monthly/oum_1999_142.jpg', 'download' => array('en' => "oric_user_monthly/oum_142.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 143-144 July/August'    ,'year' => '1999', 'month' =>  7,'cover' => 'oric_user_monthly/oum_1999_143-144.jpg', 'download' => array('en' => "oric_user_monthly/oum_143-144.pdf"),),
		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'No 145 September','year'=> '1999', 'month' => 9,'cover' => 'oric_user_monthly/oum_1999_145.jpg', 'download' => array('en' => "oric_user_monthly/oum_145.pdf"),),

		array('type' => 'magazine','name' => "Oric User Monthly",'language' => 'en','issue' => 'Index Issues 1 to 145','year'=> '2002', 'month' => 4,'cover' => 'oric_user_monthly/oum_index.jpg', 'download' => array('en' => "oric_user_monthly/oum_index.pdf"),),
				
		// -------------------------- Rhetoric ----------------------------------
		// https://www.defence-force.org/computing/oric/library/lib_magazine/rhetoric/index.htm
        // http://www.48katmos.freeuk.com/mags.htm
        // All Rhetoric issues have been authorized by Steve Marshall, except issues 5 and 6 where some content has been redacted
		array(
			'type' => 'magazine',
			'name' => "Rhetoric",
			'language' => 'en',
			'issue' => 'Issue Number One August',
			'year' => '1999', 'month' =>  8,
			'cover' => 'rhetoric/rhetoric001.jpg',
			'download' => array('en' => "rhetoric/Rhetoric_01.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Rhetoric",
			'language' => 'en',
			'issue' => 'Issue #2 Nov',
			'year' => '1999', 'month' => 10,
			'cover' => 'rhetoric/rhetoric002.jpg',
			'download' => array('en' => "rhetoric/Rhetoric_02.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Rhetoric",
			'language' => 'en',
			'issue' => 'Issue Number 3 Real Nov',
			'year' => '1999', 'month' => 11,
			'cover' => 'rhetoric/rhetoric003.jpg',
			'download' => array('en' => "rhetoric/Rhetoric_03.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Rhetoric",
			'language' => 'en',
			'issue' => 'Issue #4 Christmas Special',
			'year' => '1999', 'month' => 12,
			'cover' => 'rhetoric/rhetoric004.jpg',
			'download' => array('en' => "rhetoric/Rhetoric_04.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Rhetoric",
			'language' => 'en',
			'issue' => 'Issue #5 Jan',
			'year' => '2000', 'month' =>  1,
			'cover' => 'rhetoric/rhetoric005.jpg',
			'download' => array('en' => "rhetoric/Rhetoric_05-authorised.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Rhetoric",
			'language' => 'en',
			'issue' => 'Issue #6 February',
			'year' => '2000', 'month' =>  2,
			'cover' => 'rhetoric/rhetoric006.jpg',
			'download' => array('en' => "rhetoric/Rhetoric_06-authorised.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Rhetoric",
			'language' => 'en',
			'issue' => 'Issue #7 March',
			'year' => '2000', 'month' =>  3,
			'cover' => 'rhetoric/rhetoric007.jpg',
			'download' => array('en' => "rhetoric/Rhetoric_07.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Rhetoric",
			'language' => 'en',
			'issue' => 'Issue #8 May',
			'year' => '2000', 'month' =>  5,
			'cover' => 'rhetoric/rhetoric008.jpg',
			'download' => array('en' => "rhetoric/Rhetoric_08.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Rhetoric",
			'language' => 'en',
			'issue' => 'Issue #9',
			'year' => '2000', 'month' =>  7,
			'cover' => 'rhetoric/rhetoric009.jpg',
			'download' => array('en' => "rhetoric/Rhetoric_09.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Rhetoric",
			'language' => 'en',
			'issue' => 'Issue 10',
			'year' => '2000', 'month' =>  9,
			'cover' => 'rhetoric/rhetoric010.jpg',
			'download' => array('en' => "rhetoric/Rhetoric_10.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Rhetoric",
			'language' => 'en',
			'issue' => 'Issue #11/12 October',
			'year' => '2000', 'month' => 11,
			'cover' => 'rhetoric/rhetoric011.jpg',
			'download' => array('en' => "rhetoric/Rhetoric_11-12.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Rhetoric",
			'language' => 'en',
			'issue' => 'Issue 13',
			'year' => '2000', 'month' => 12,
			'cover' => 'rhetoric/rhetoric013.jpg',
			'download' => array('en' => "rhetoric/Rhetoric_13.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Rhetoric",
			'language' => 'en',
			'issue' => '14 March',
			'year' => '2001', 'month' =>  3,
			'cover' => 'rhetoric/rhetoric014.jpg',
			'download' => array('en' => "rhetoric/Rhetoric_14.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Rhetoric",
			'language' => 'en',
			'issue' => '15', 'month' =>  4,
			'year' => '2001',
			'cover' => 'rhetoric/rhetoric015.jpg',
			'download' => array('en' => "rhetoric/Rhetoric_15.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Rhetoric",
			'language' => 'en',
			'issue' => '16 June',
			'year' => '2001', 'month' =>  6,
			'cover' => 'rhetoric/rhetoric016.jpg',
			'download' => array('en' => "rhetoric/Rhetoric_16.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Rhetoric",
			'language' => 'en',
			'issue' => '#17',
			'year' => '2001', 'month' =>  8,
			'cover' => 'rhetoric/rhetoric017.jpg',
			'download' => array('en' => "rhetoric/Rhetoric_17.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Rhetoric",
			'language' => 'en',
			'issue' => '18',
			'year' => '2001', 'month' => 12,
			'cover' => 'rhetoric/rhetoric018.jpg',
			'download' => array('en' => "rhetoric/Rhetoric_18.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Rhetoric",
			'language' => 'en',
			'issue' => '19',
			'year' => '2002', 'month' =>  1,
			'cover' => 'rhetoric/rhetoric019.jpg',
			'download' => array('en' => "rhetoric/Rhetoric_19.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Rhetoric",
			'language' => 'en',
			'issue' => 'Issue 20 Mar/Apr',
			'year' => '2002', 'month' =>  3,
			'cover' => 'rhetoric/rhetoric020.jpg',
			'download' => array('en' => "rhetoric/Rhetoric_20.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Rhetoric",
			'language' => 'en',
			'issue' => 'Issue 21 May',
			'year' => '2002', 'month' =>  5,
			'cover' => 'rhetoric/rhetoric021.jpg',
			'download' => array('en' => "rhetoric/Rhetoric_21.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Rhetoric",
			'language' => 'en',
			'issue' => 'Issue 22',
			'year' => '2002', 'month' =>  7,
			'cover' => 'rhetoric/rhetoric022.jpg',
			'download' => array('en' => "rhetoric/Rhetoric_22.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Rhetoric",
			'language' => 'en',
			'issue' => '23',
			'year' => '2002','month' => 10,
			'cover' => 'rhetoric/rhetoric023.jpg',
			'download' => array('en' => "rhetoric/Rhetoric_23.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Rhetoric",
			'language' => 'en',
			'issue' => '#24 Christmas',
			'year' => '2002', 'month' => 12,
			'cover' => 'rhetoric/rhetoric024.jpg',
			'download' => array('en' => "rhetoric/Rhetoric_24.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Rhetoric",
			'language' => 'en',
			'issue' => '#25 The End?',
			'year' => '2003', 'month' =>  2,
			'cover' => 'rhetoric/rhetoric025.jpg',
				'download' => array('en' => "rhetoric/Rhetoric_25.pdf"),
	),
		array(
		),

		// -------------------------- Microric ----------------------------------
		// https://www.defence-force.org/computing/oric/library/lib_magazine/microric/index.htm
		array(
			'type' => 'magazine',
			'name' => "Micr'Oric",
			'language' => 'fr',
			'issue' => 'No 1 Juin',
			'year' => '1983', 'month' =>  6,
			'cover' => 'microric/microric_01.jpg',
			'publisher' => 'ASN',
			'download' => array('en' => "microric/microric-1.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Micr'Oric",
			'language' => 'fr',
			'issue' => 'No 2 Automne',
			'year' => '1983', 'month' =>  9,
			'cover' => 'microric/microric_02.jpg',
			'publisher' => 'ASN',
			'download' => array('en' => "microric/microric-2.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Micr'Oric",
			'language' => 'fr',
			'issue' => 'No 2 Special Sicob 1983',
			'year' => '1983', 'month' =>  9,
			'cover' => 'microric/microric_02-special.jpg',
			'publisher' => 'ASN',
			'download' => array('en' => "microric/microric-2-special-sicob-1983.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Micr'Oric",
			'language' => 'fr',
			'issue' => 'No 3 Hiver',
			'year' => '1983', 'month' =>  12,
			'cover' => 'microric/microric_03.jpg',
			'publisher' => 'ASN',
			'download' => array('en' => "microric/microric-3.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Micr'Oric",
			'language' => 'fr',
			'issue' => 'No 4 Printemps',
			'year' => '1984', 'month' =>  4,
			'cover' => 'microric/microric_04.jpg',
			'publisher' => 'ASN',
			'download' => array('en' => "microric/microric-4.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Micr'Oric",
			'language' => 'fr',
			'issue' => 'No 5 Ete',
			'year' => '1984', 'month' =>  7,
			'cover' => 'microric/microric_05.jpg',
			'publisher' => 'ASN',
			'download' => array('en' => "microric/microric-5.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Micr'Oric",
			'language' => 'fr',
			'issue' => 'No 6 Automne',
			'year' => '1984', 'month' =>  9,
			'cover' => 'microric/microric_06.jpg',
			'publisher' => 'ASN',
			'download' => array('en' => "microric/microric-6.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Micr'Oric",
			'language' => 'fr',
			'issue' => 'No 7 Février',
			'year' => '1985', 'month' =>  2,
			'cover' => 'microric/microric_07.jpg',
			'publisher' => 'ASN',
			'download' => array('en' => "microric/microric-7.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Micr'Oric",
			'language' => 'fr',
			'issue' => 'No 8 Avril',
			'year' => '1985', 'month' =>  4,
			'cover' => 'microric/microric_08.jpg',
			'publisher' => 'ASN',
			'download' => array('en' => "microric/microric-8.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Micr'Oric",
			'language' => 'fr',
			'issue' => 'No 9 Juin',
			'year' => '1985', 'month' =>  6,
			'cover' => 'microric/microric_09.jpg',
			'publisher' => 'ASN',
			'download' => array('en' => "microric/microric-9.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Micr'Oric",
			'language' => 'fr',
			'issue' => 'No 10 Hiver',
			'year' => '1985', 'month' =>  11,
			'cover' => 'microric/microric_10.jpg',
			'publisher' => 'ASN',
			'download' => array('en' => "microric/microric-10.pdf"),
		),
		array(
		),
		array(
		),

		// -------------------------- Oric Computing ----------------------------------
		// https://www.defence-force.org/computing/oric/library/lib_magazine/oriccomputing/index.htm
		array(
			'type' => 'magazine',
			'name' => "Oric Computing",
			'language' => 'en',
			'issue' => 'Issue 1 November',
			'year' => '1983', 'month' => 11,
			'cover' => 'oric_computing/oriccomputing_01.jpg',
			'publisher' => 'Oric Owners Users Group',
			'download' => array('en' => "oric_computing/OricComputing_01.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Oric Computing",
			'language' => 'en',
			'issue' => 'Issue 2 December',
			'year' => '1983', 'month' => 12,
			'cover' => 'oric_computing/oriccomputing_02.jpg',
			'publisher' => 'Oric Owners Users Group',
			'download' => array('en' => "oric_computing/OricComputing_02.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Oric Computing",
			'language' => 'en',
			'issue' => 'Issue 3 January',
			'year' => '1984', 'month' => 1,
			'cover' => 'oric_computing/oriccomputing_03.jpg',
			'publisher' => 'Oric Owners Users Group',
			'download' => array('en' => "oric_computing/OricComputing_03.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Oric Computing",
			'language' => 'en',
			'issue' => 'Issue 4 February',
			'year' => '1984', 'month' => 2,
			'cover' => 'oric_computing/oriccomputing_04.jpg',
			'publisher' => 'Oric Owners Users Group',
			'download' => array('en' => "oric_computing/OricComputing_04.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Oric Computing",
			'language' => 'en',
			'issue' => 'Issue 5/6 March/April 1984',
			'year' => '1984', 'month' => 3,
			'cover' => 'oric_computing/oriccomputing_0506.jpg',
			'publisher' => 'Oric Owners Users Group',
			'download' => array('en' => "oric_computing/OricComputing_0506.pdf"),
		),

		// -------------------------- Oric Owner ----------------------------------
		// https://www.defence-force.org/computing/oric/library/lib_magazine/oricowner/index.htm
		array(
			'type' => 'magazine',
			'name' => "Oric Owner",
			'language' => 'en',
			'issue' => 'Issue 1 JAN/FEB',
			'year' => '1983', 'month' => 1,
			'cover' => 'oric_owner/oricowner_01.jpg',
			'publisher' => 'Tansoft Ltd',
			'download' => array('en' => "oric_owner/OricOwner_01.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Oric Owner",
			'language' => 'en',
			'issue' => 'Issue 2 JUNE/JULY',
			'year' => '1983', 'month' => 6,
			'cover' => 'oric_owner/oricowner_02.jpg',
			'publisher' => 'Tansoft Ltd',
			'download' => array('en' => "oric_owner/OricOwner_02.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Oric Owner",
			'language' => 'en',
			'issue' => 'Issue 3 AUG/SEPT',
			'year' => '1983', 'month' => 8,
			'cover' => 'oric_owner/oricowner_03.jpg',
			'publisher' => 'Tansoft Ltd',
			'download' => array('en' => "oric_owner/OricOwner_03.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Oric Owner",
			'language' => 'en',
			'issue' => 'Issue 4 OCT/NOV',
			'year' => '1983', 'month' => 9,
			'cover' => 'oric_owner/oricowner_04.jpg',
			'publisher' => 'Tansoft Ltd',
			'download' => array('en' => "oric_owner/OricOwner_04.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Oric Owner",
			'language' => 'en',
			'issue' => 'Issue 5 DEC/JAN 84',
			'year' => '1983', 'month' => 12,
			'cover' => 'oric_owner/oricowner_05.jpg',
			'publisher' => 'Tansoft Ltd',
			'download' => array('en' => "oric_owner/OricOwner_05.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Oric Owner",
			'language' => 'en',
			'issue' => 'Issue 6 FEB/MAR 84',
			'year' => '1984', 'month' => 2,
			'cover' => 'oric_owner/oricowner_06.jpg',
			'publisher' => 'Tansoft Ltd',
			'download' => array('en' => "oric_owner/OricOwner_06.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Oric Owner",
			'language' => 'en',
			'issue' => 'Issue 7 APRIL/MAY 1984',
			'year' => '1984', 'month' => 4,
			'cover' => 'oric_owner/oricowner_07.jpg',
			'publisher' => 'Tansoft Ltd',
			'download' => array('en' => "oric_owner/OricOwner_07.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Oric Owner",
			'language' => 'en',
			'issue' => 'Issue 8 JUNE/JULY 1984',
			'year' => '1984', 'month' => 6,
			'cover' => 'oric_owner/oricowner_08.jpg',
			'publisher' => 'Tansoft Ltd',
			'download' => array('en' => "oric_owner/OricOwner_08.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Oric Owner",
			'language' => 'en',
			'issue' => 'Issue 9 OCTOBER/NOVEMBER 1984',
			'year' => '1984', 'month' => 9,
			'cover' => 'oric_owner/oricowner_09.jpg',
			'publisher' => 'Tansoft Ltd',
			'download' => array('en' => "oric_owner/OricOwner_09.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Oric Owner",
			'language' => 'en',
			'issue' => 'Issue 10 DECEMBER/JANUARY 1985',
			'year' => '1985', 'month' => 12,
			'cover' => 'oric_owner/oricowner_10.jpg',
			'publisher' => 'Tansoft Ltd',
			'download' => array('en' => "oric_owner/OricOwner_10.pdf"),
		),

		// -------------------------- Oricall ----------------------------------

		array(
			'type' => 'magazine',
			'name' => "Oricall",
			'language' => 'en',
			'issue' => 'July 1984',
			'year' => '1984', 'month' => 7,
			'cover' => 'oricall/oricall-1984-07.jpg',
			'publisher' => 'Tansoft Ltd',
			'download' => array('en' => "oricall/oricall-1984-07.pdf"),
		),
		array(
			'type' => 'magazine',
			'name' => "Oricall",
			'language' => 'en',
			'issue' => 'July 1984',
			'year' => '1984', 'month' => 8,
			'cover' => 'oricall/oricall-1984-08.jpg',
			'publisher' => 'Tansoft Ltd',
			'download' => array('en' => "oricall/oricall-1984-08.pdf"),
		),

		// -------------------------- DOS ----------------------------------
		// https://www.defence-force.org/computing/oric/library/lib_dos/index.htm
		array(
			'type' => 'manual',
			'name' => "Le T.DOS et ses fichiers",
			'cover' => 'le_tdos_et_ses_fichiers_pour_oric1_atmos.jpg',
			'language' => 'fr',
			'author' => 'Pierre Marc Beaufils|Christian Arnaud',
			'year' => '1984',
			'publisher' => 'T.R.A.N.',
			'download' => array(
				'fr' => "le_tdos_et_ses_fichiers_pour_oric1_atmos.pdf"),
			'description' => array(
				'fr' => "Ce livre est le manuel de référence permetant d'utiliser le <b>Tran Disk Operating System</b> 
Le TDOS est le système d'exploitation livré avec les lecteur de disquette JASMIN. 
Tous les domaines sont couverts, incluant des explications sur le formatage, le système de stockage
des fichiers, comment invoquer le DOS en utilisant du code assembleur, comment trier les données,
accéder aux fichiers, etc...",
				'en' => "This books is the reference manual for using the <b>Tran Disk Operating System</b> 
The TDOS is the DOS that came with the JASMIN drives. 
Seems to cover clearly all the disk domain, including what's formating, filesystem, using assembly language,
sorts, file access, and so on... "),
		),
		// https://vasiloric.wordpress.com/documentation/
		array(
			'type' => 'book',
			'name' => "Jasmin (livre vert)",
			'cover' => 'book_jasmin_tran_1984_novembre.jpg',
			'language' => 'fr',
			'year' => '1984',
			'publisher' => 'T.R.A.N.',
		),
		array(
			'type' => 'book',
			'name' => "Jasmin T.R.A.N. F-TDOS manual",
			'cover' => 'book_jasmin_tran_1984_aout.jpg',
			'language' => 'fr',
			'year' => '1984', 'month' => 8,
			'publisher' => 'T.R.A.N.',
			'download' => array(
				'fr' => "Jasmin-FTDOS-manual.pdf"),
		),

		array(
			'type' => 'manual',
			'name' => "Jasmin 2 - Manuel d'utilisation",
			'language' => 'fr',
			'publisher' => 'T.R.A.N.',
			'year' => '1985',
			'cover' => 'jasmin_2_manuel_utilisation.jpg',
			'download' => array(
				'en' => "jasmin_2_manuel_utilisation.pdf"),
			'description' => array(
				'fr' => "Le Jasmin 2 est la seconde version du lecteur de disquette proposé par la compagnie T.R.A.N comme altenative au Microdisc",
				'en' => "The Jasmin 2 is the second version of the floppy disk system offered by the T.R.A.N companie as an alternative to the Microdisc"),
		),

		array(
			'type' => 'manual',
			'name' => "Manuel d'utilisation du Microdisc et du Sedoric",
			'language' => 'fr',
			'author' => 'Fabrice Broche|Georges El Andaloussi',
			'year' => '1984',
			'publisher' => 'Oric International',
			'cover' => 'book_manuel_utilisation_microdisk_et_sedoric.jpg',
			'download' => array(
				'fr' => "manuel_microdisc_et_sedoric/index.htm"),
			'description' => array(
				'fr' => "Le Sedoric est le dernier descendant, et le plus utilisé des systèmes d'exploitation utilisés pour accéder au lecteur Microdisc.",
				'en' => "The Sedoric is the latest and most frequently used operating system for using Microdisc drives."),
		),

		array(
			'type' => 'manual',
			'name' => "Sedoric DOS Version 1.007 - A user's guide",
			'language' => 'en',
			'author' => 'Jonathan Haworth|Allan Whitaker|Fabrice Broche|Denis Sebbag',
			'year' => '1990',
			'cover' => 'sedoric_dos_v1.007.png',
			'download' => array(
				'en' => "sedoric_dos_v1.007.pdf"),
			'description' => array(
				'fr' => "Le Sedoric est le dernier descendant, et le plus utilisé des systèmes d'exploitation utilisés pour accéder au lecteur Microdisc.",
				'en' => "The Sedoric is the latest and most frequently used operating system for using Microdisc drives."),
		),

		array(
			'type' => 'manual',
			'name' => "Sedoric DOS Version 2.0 - A user's guide",
			'language' => 'en',
			'author' => 'Jonathan Haworth|Allan Whitaker|Fabrice Broche|Denis Sebbag',
			'year' => '1992',
			'cover' => 'sedoric_dos_v2.jpg',
			'download' => array(
				'en' => "sedoric_dos_v2.pdf"),
			'description' => array(
				'fr' => "Le Sedoric est le dernier descendant, et le plus utilisé des systèmes d'exploitation utilisés pour accéder au lecteur Microdisc.",
				'en' => "The Sedoric is the latest and most frequently used operating system for using Microdisc drives."),
		),

		array(
			'type' => 'manual',
			'name' => "Sedoric DOS Version 3.0 - A user's guide",
			'language' => 'en',
			'author' => 'Jonathan Haworth|Allan Whitaker|Fabrice Broche|Denis Sebbag',
			'year' => '1996',
			'cover' => 'sedoric_dos_v3_a_users_guide.jpg',
			'download' => array(
				'en' => "sedoric_dos_v3_a_users_guide.pdf"),
			'description' => array(
				'fr' => "Le Sedoric est le dernier descendant, et le plus utilisé des systèmes d'exploitation utilisés pour accéder au lecteur Microdisc.",
				'en' => "The Sedoric is the latest and most frequently used operating system for using Microdisc drives."),
		),

		array(
			'type' => 'manual',
			'name' => "Manuel du Microdisque",
			'language' => 'fr',
			'year' => '1984',
			'publisher' => 'Oric International',
			'cover' => 'book_manuel_du_microdisque.jpg',
			'download' => array(
				'fr' => "microdiscandoricdosmanual.pdf",
				'fr' => "manuel_dos11.pdf"),
			'description' => array(
				'fr' => "Ce livre est le manuel Francais de l'Oric Dos V1.1.",
				'en' => "This is the French user manual of the Oric DOS V1.1."),
		),
		/*
		array(
	'type' => 'book',
			'name' => "Oric Microdisc Manual",
			'language' => 'en',
			'author' => 'Fabrice Broche|Georges El Andaloussi',
			'year' => '1984',
			'publisher' => 'Oric International',
			'description' => array(
				'fr' => "Le Sedoric est le dernier descendant, et le plus utilisé des systèmes d'exploitation utilisés pour accéder au lecteur Microdisc.",
				'en' => "The Sedoric is the latest and most frequently used operating system for using Microdisc drives."),
		),
		*/
		array(
			'type' => 'manual',
			'name' => "Oric Microdisc Manual",
			'language' => 'en',
			'year' => '1984',
			'publisher' => 'Oric International',
			'cover' => 'book_microdisc_manual.jpg',
			'download' => array(
				'en' => "microdiscandoricdosmanual.pdf"),
			'description' => array(
				'fr' => "Ce livre est le manuel Anglais de l'Oric Dos V1.1.",
				'en' => "This is the English user manual of the Oric DOS V1.1."),
		),
		array(
			'type' => 'manual',
			'name' => "Oric Randos User Guide",
			'language' => 'en',
			'cover' => 'book_oric_randos_user_guide.jpg',
			'publisher' => 'Mirle Productions Ltd',
		),
		array(
			'type' => 'manual',
			'name' => "Cumana Disk Drive Guide",
			'language' => 'en',
			'cover' => 'book_cumana_disk_drive_guide.jpg',
			'year' => '1984',                      // TODO NOT VERIFIED
			'publisher' => 'Cumana',
			'download' => array('en' => "cumana_disk_drive_guide.pdf"),
			'description' => array(
				'fr' => "Cumana est un fabriquant spécialisé dans la fabrication de lecteurs de disquette
					pour micro ordinateur, et a lui aussi sévi sur l'Oric.",
				'en' => "Cumana is a company specialized in designing floppy disc drives for micro computer,
					so they made an Oric version of their drive."),
		),
		array(
			'type' => 'manual',
			'name' => "Manual for CUMANA.DOS and Disassembly for RipDOS v2.9",
			'author' => 'Jim P|André Cheramy',
			'language' => 'en',
			'cover' => 'missing.jpg',
			'year' => '1984',                      // TODO NOT VERIFIED
			'download' => array('en' => "manual_v3_for_cumana_dos.doc"),
			'description' => array(
				'fr' => "Cumana est un fabriquant spécialisé dans la fabrication de lecteurs de disquette
					pour micro ordinateur, et a lui aussi sévi sur l'Oric.",
				'en' => "Cumana is a company specialized in designing floppy disc drives for micro computer,
					so they made an Oric version of their drive."),
		),

		array(
			'type' => 'manual',
			'name' => "Byte Drive 500 User's Manual: Basic v2, DOS 4.0",
			'author' => 'Jeremy P. Hibbins',
			'language' => 'en',
			'cover' => 'manual_bd500_dos4_basic2_user_manual.jpg',
			'year' => '1986',
			'publisher' => "Byte Drive User's Group",
			'download' => array('en' => "BD-500-DOS-4.0-BASIC-2.0-Users_Manual.pdf"),
			'description' => array(
				'fr' => "Le Byte Drive 500 était un concept intéressant de lecteur de disquette universel utilisant un cable-interface dédiée.",
				'en' => "The Byte Drive 500 was an interesting concept of universal floppy disk drive using a dedicate cable interface."),
		),

		
		array(
			'type' => 'manual',
			'name' => "DOS Users Manual Byte Drive 500",
			'author' => 'Moira Gorrell',
			'language' => 'en',
			'cover' => 'dos_users_manual_byte_drive_500.jpg',
			'year' => '1983',
			'publisher' => "I.T.L. Kathmill Ltd.",
			'download' => array('en' => "dos_users_manual_byte_drive_500.pdf"),
			'description' => array(
				'fr' => "Le Byte Drive 500 était un concept intéressant de lecteur de disquette universel utilisant un cable-interface dédiée.",
				'en' => "The Byte Drive 500 was an interesting concept of universal floppy disk drive using a dedicate cable interface."),
		),
		
		array(
			'type' => 'book',
			'name' => "Sedoric 3.0 à NU",
			'language' => 'fr',
			'author' => 'André Chéramy',
			'year' => '1998',
			'publisher' => 'Oric International',
			'cover' => 'sedoric_30_a_nu.jpg',
			'download' => array(
				'fr' => "sedoric_30_a_nu.pdf"),
			'description' => array(
				'fr' => "Ce livre est un décorticage complet de la structure de Sedoric 3.0, structure des banques, facon dont les commandes sont implémentées, liste des variables système, etc...",
				'en' => "This book is a complete description of the internals of Sedoric 3.0, including how banks are structured, how commands are implemented, list of system variables, etc..."),
		),


		// Slovenian
		// Croatian
		// Serbian
		// Macedonian
		array(
			'type' => 'manual',
			'name' => "Oric Nova 64 Manual",
			'language' => 'si|hr|sr|mk',
			'year' => '1986',                      // TODO NOT VERIFIED
			'publisher' => 'Avtotehna',
			'cover' => 'nova_64_user_manual.jpg',
			'download' => array('si|hr|sr|mk' => "nova_64_user_manual.pdf"),
			'description' => array(
				'fr' => "Ce fascicule très fin done de brêves informations sur comment brancher la machine, les caractéristiques techniques, etc... dans les quatres langues officielles de l'ex Yugoslavie",
				'en' => "This very thin booklet gives some information on how to branch the machine, technical specs, etc... in the four official languages of the former Yugoslavia"),
		),
		array(
			'type' => 'manual',
			'name' => "BASIC Oric Nova 64",
			'author' => 'Jure Špiler',
			'language' => 'si|hr|sr|mk',
			'year' => '1985',                      // TODO NOT VERIFIED
			'publisher' => 'Avtotehna',
			'cover' => 'book_basic_oric_nova_64.jpg',
		),

		// -------------------------- Hardware ----------------------------------
		// https://www.defence-force.org/computing/oric/library/lib_hardware/index.htm
		array(
			'type' => 'book',
			'name' => "Communiquez avec votre Oric 1 et votre Atmos",
			'author' => 'Denis Bonomo|Eddy Dutertre',
			'cover' => 'communiquez_avec_votre_oric1_et_votre_atmos.jpg',
			'download' => array('fr' => "communiquez_avec_votre_oric1_et_votre_atmos.pdf"),			
			'language' => 'fr',
			'year' => '1984',
			'publisher' => 'Editions SORACOM',
			'isbn' => 'ISBN 2-904032-20-7',
			'description' => array(
				'fr' => "Ce livre propose une breve introduction a l'assembleur 6502 afin que les
					programmes soient compris de chacun. Les sections suivantent sont constituées
					de programmes permettant de communiquer en morse ou ondes radio.",
				'en' => "This book provides a short introduction to the 6502 assembly language in order
					to makes the programs understandable by everybody. Following sections proposes
					communication related programs."),
		),

		array(
			'type' => 'book',
			'name' => "Apprenez l'électronique sur Oric et Atmos",
			'language' => 'fr',
			'cover' => 'apprenez_l_electronique_sur_oric_et_atmos.jpg',
			'download' => array('fr' => "apprenez_l_electronique_sur_oric_et_atmos.pdf"),
			'author' => 'Pierre Beaufils',
			'year' => '1984',
			'publisher' => 'Editions SORACOM',
			'isbn' => 'ISBN 2-904032-18-5',
			'description' => array(
				'fr' => "Ce livre vous donnera des cours d'électronique en utilisant votre Oric.",
				'en' => "This book teaches you electronics, using your Oric."),
		),

		array(
			'cover' => 'book_interfaces.jpg',
			'type' => 'book',
			'name' => "Interfaces pour Oric 1 et Atmos",
			'language' => 'fr',
			'author' => 'Michel Levrel F6DTA',
			'year' => '1984',
			'publisher' => 'Editions SORACOM',
			'download' => array('fr' => "interfaces_pour_oric1_et_atmos.pdf"),
			'isbn' => 'ISBN 2-904032-19-3',
			'description' => array(
				'fr' => "Ce livre est sous titré 'robotique, E.A.O, Automatismes...''
					Au menu une interface joystick, des effets de lumière, controle de relai, et génération de fréquences.",
				'en' => "This book propose various hardware creations to handle joysticks, light effects,
					frequency generation, and so on..."),
		),

		array(
			'type' => 'book',
			'name' => "60 solutions pour Oric 1 + Atmos",
			'cover' => '60_solutions_pour_oric1_plus_atmos.jpg',
			'download' => array('fr' => "60_solutions_pour_oric1_plus_atmos.pdf"),
			'language' => 'fr',
			'author' => "Remy Schulz",
			'year' => '1985',
			'publisher' => "ETSF - Micro Systemes",
			'isbn' => 'ISBN 2-85535-104-9',
			'description' => array(
				'fr' => "Ce livre couvre l'architecture et et les problèmes de l'oric 1 et de l'atmos
					concernant les interfaces, les extension, etc...
					C'est un bon livre &#224; avoir si l'on souhaite bricoler avec son oric.",
				'en' => "This book covers system's architecture, hardware's problems of both Oric, interfaces, extensions, etc... <br>
					If think it's a good book for hardware people who want to do some Oric's extensions."),
		),

		array(
			'cover' => 'book_extensions.jpg',
			'type' => 'book',
			'name' => "Des extensions &#224; construire pour votre Oric Atmos",
			'language' => 'fr',
			'author' => "Patrick Garrec|Cyril Vignet",
			'year' => '1985',
			'publisher' => 'Eyrolles',
			'download' => array('fr' => "desextensionsaconstruirepourvotreoricatmos.zip"),
			'description' => array(
				'fr' => "A l'arrière du livre vous pourriez lire ceci:<br><br>
					Avec ce livre vous aurez tous les éléments pour réaliser vous m&#234;me des modems,
					des liaisons RS 232 C, des lecteurs et programmateurs de PROM, des manettes de jeux,
					des dispositifs de pilotage &#224; distance d'appareils domestiques (chauffage,
					protection de la maison). Tous les montages, décrits pas &#224; pas, ont été 
					intégralement réalisés et testés par les auteurs, tous deux ingénieurs.",
				'en' => "On the back of the book you could read the following:<br><br>
					With this book, you will have all the elements required to build yourself modems,
					RS 232 C serial interface, PROM programers and readers, joystics, home equipment
					controling (heating, house security). All the systems, explained step by step,
					were build and tested by the authors that are both ingienerers."),
		),

		// -------------------------- Telestrat ----------------------------------
		// https://www.defence-force.org/computing/oric/library/lib_manual_telestrat/index.htm
		array(
			'type' => 'manual',
			'name' => "Oric Telestrat - Index de l'Hyper-Basic",
			'language' => 'fr',
			'cover' => 'book_hyperbasic.jpg',
			'author' => 'Fabrice Broche|Georges El Andaloussi',
			'year' => '1986',
			'publisher' => 'Oric International',
			'download' => array(
				'fr' => "hyperbasic_en_fr.zip"),
			'description' => array(
				'fr' => "Rien de spécial &#224; signaler. C'est le manuel du basic livré avec le téléstrat.
					Excepté une dizaine de pages consacré aux annexes, ce n'est qu'une b&#234;te liste des
					mots clef du basic.",
				'en' => "Nothing special to say. It's only an index of the Basic Key Words.")
		),

		array(
			'type' => 'manual',
			'name' => "Manuel des applications télématiques",
			'language' => 'fr',
			'author' => 'Pascal Cusset',
			'year' => '1986',
			'publisher' => 'Oric International',
			'cover' => 'book_telematic.jpg',
			'download' => array('fr' => "telestrat/manuel_des_applications_telematiques.pdf"),
			'description' => array(
				'fr' => "Ce manuel complète les autres livrets joints au Téléstrat. Il permet l'utilisation de
					l'ordinateur avec la cartouche télématic. La télématique se rapporte &#224; la liaison
					entre ordinateurs et Minitel via le réseau téléphonique. Par sa conception, le Téléstrat
					peut &#234;tre utilisé comme serveur pour recevoir et mettre des données sur ce réseau. Ce
					manuel vous permet de développer vos propres applications en quelques heures de
					pratique. [Tiré du préambule]",
				'en' => "About the 'Telematic' cartridge. 
					It's mostly for French Users that wish to create a 'minitel' server.")
		),

		array(
			'type' => 'manual',
			'name' => "Manuel Developpeur Téléstrat",
			'author' => 'Fabrice Broche',
			'cover' => 'book_manuel_developpeur_telestrat.jpg',
			'download' => array('fr' => "telestrat/manuel_developpeur_telestrat.pdf"),
			'language' => 'fr',
			'year' => '1987',
			'publisher' => 'Oric International',
			'description' => array(
				'fr' => "Comme son nom l'indique, ce fasicule contient un certain nombres d'informations techniques
					permettant le développement d'applications sur le Téléstrat.
					Le livre du haut c'est la version anglaise, l'autre, c'est la version fran&#231;aise.",
				'en' => "As the name let it guess, it's a documentation that allows to develop some applications
					on the Telestrat.")
		),

		array(
			'type' => 'manual',
			'name' => "Tele-Ass, Assembler Symbolique pour Oric Telestrat",
			'cover' => 'book_tele-ass.jpg',
			'download' => array('fr' => "tele-ass_assembleur_symbolique_pour_oric_telestrat.pdf"),
			'language' => 'fr',
			'author' => 'Pierre Grenet',
			'year' => '1987',
			'publisher' => 'Oric International',
			'description' => array(
				'fr' => "Comme son nom l'indique, ceci est le Manuel de l'Assembleur Symbolique pour l'Oric Telestrat",
				'en' => "As the name let it guess, it's the user manual of the Oric Telestrat symbolic assembler.")
		),
		array(
			'type' => 'manual',
			'name' => "A la découverte du Téléstrat",
			'cover' => 'telestrat/a_la_decouverte_du_telestrat.jpg',
			'download' => array('fr' => "telestrat/a_la_decouverte_du_telestrat.pdf"),
			'language' => 'fr',
			'author' => 'Patrice Guerrin',
			'year' => '1987',
			'publisher' => 'Oric International',
			'description' => array(
				'fr' => "Une présentation complete du Téléstrat, allant de comment connecter les différents éléments, l'utilisation de l'éditeur, l'hyperbasic, ...",
				'en' => "A complete presentation of the Telestrat, starting by how to connect together the various part, using the text editor, hyperbasic usage, ...")
		),
		array(
			'type' => 'manual',
			'name' => "Telestrat - Manuel d'utilisation Version 1.2",
			'cover' => 'telestrat/telestrat_manuel_utilisation_version_1.2.jpg',
			'download' => array('fr' => "telestrat/telestrat_manuel_utilisation_version_1.2.pdf"),
			'language' => 'fr',
			'year' => '1988', 'month' => 4,
			'publisher' => 'Oric International',
		),
		array(
			'type' => 'manual',
			'name' => "Extension RAM 64Ko pour Oric Telestrat",
			'author' => 'Fabrice Broche',
			'publisher' => 'Oric International',
			'cover' => 'telestrat/extension_ram_64k_pour_oric_telestrat.jpg',
			'download' => array('fr' => "telestrat/extension_ram_64k_pour_oric_telestrat.pdf"),
			'language' => 'fr',
			'year' => '1987', 'month' => 3,
		),
		array(
			'type' => 'manual',
			'name' => "Package Stratoric pour Oric Telestrat",
			'author' => 'Fabrice Broche',
			'publisher' => 'Oric International',
			'cover' => 'telestrat/package_stratoric_pour_oric_telestrat.jpg',
			'download' => array('fr' => "telestrat/package_stratoric_pour_oric_telestrat.pdf"),
			'language' => 'fr',
			'year' => '1987', 'month' => 4,
		),
		array(
			'type' => 'manual',
			'name' => "Tele-Forth v1.2 - Language pour Oric Telestrat",
			'author' => 'Christophe Lavarenne|Thierry Bestel',
			'cover' => 'telestrat/tele-forth_v1.2_language_pour_oric_telestrat.jpg',
			'download' => array('fr' => "telestrat/tele-forth_v1.2_language_pour_oric_telestrat.pdf"),
			'language' => 'fr',
			'year' => '1995', 'month' => 11,
		),



		// -------------------------- Peripheral ----------------------------------
		// https://www.defence-force.org/computing/oric/library/lib_peripherals/index.htm
		array(
			'type' => 'manual',
			'name' => "MCP-40 Operation manual",
			'language' => 'en',
			'cover' => 'book_mcp40.jpg',
			'year' => '1984',                      // TODO NOT VERIFIED
			'download' => array(
				'en' => "mcp40_manual.pdf"),
			'description' => array(
				'fr' => "C'est la manuel livré avec l'imprimante traceur 4 couleur MCP40. Il contient des informations techniques
					pour entrenir la machine, mais aussi de nombreux programmes d'exemples en Basic permettant de découvrir 
					les possibilités graphiques de la machine.",
				'en' => "This is the user manual provided with the Oric MCP40 4 colors printer. It contains technical informations
					to help maintain the hardware, but also numerous Basis programs that help discovering the great graphical
					abitilies of this small printer.")
		),

		// -------------------------- Advanced programming ----------------------------------
		// https://www.defence-force.org/computing/oric/library/lib_coding_advanced/index.htm
		array(
			'type' => 'book',
			'name' => "Au coeur de l'Oric Atmos",
			'language' => 'fr',
			'author' => 'Gilles Bertin',
			'year' => '1984',
			'publisher' => 'A.R.G. Informatique',
			'cover' => 'book_coeur.jpg',
			'download' => array(
				'fr' => "AuCoeurDeL'OricAtmos.pdf"),
			'description' => array(
				'fr' => "Ce livre est mon favorit sur Oric (pour l'instant), car il fourmille d'informations intéressantes.
					Il traite du hardware de l'oric, du fonctionnement des modes vidéos, de la fa&#231;on de lire le clavier 
					(utilisation de la touche FUNC), de programmer une horloge temps réelle, de lire les joysticks, modifier 
					les pointeurs du basic, utiliser les routines de calcul en flottant &#224; partir de l'assembleur... 
					et finalement, fourni un désassemblage de la ROM !
					C'est pas génial ?",
				'en' => "This book is my favorite Oric book so far. It gives very interesting informations.
					Topics covered are an hardware description of the Oric, how to create some weird graphics mode mixing 
					High and Low resolution, how to scan the keyboard (using the FUNC key), to program a real time clock, 
					read joysticks, modify datas in basic, using floating point code in assembly language,.... 
					and finaly a near complete disassembly of the ROM !
					Great no ?")
		),

		array(
			'type' => 'book',
			'name' => 'Atmos-Oric 1, manuel de référence',
			'language' => 'fr',
			'author' => 'André Chenière',
			'year' => '1984',
			'publisher' => 'IS Editions',
			'cover' => 'book_atmos_oric_reference.jpg',
			'download' => array('fr' => 'atmos-oric1-tome1.pdf'),
			'description' => array(
				'fr' => "Je ne possède pas ce livre, je me contenterais donc de l'oppinion de Dominique Pessan qui
					dit qu'il est vraiment excellent, encore meilleur que 'Au coeur de l'Oric Atmos' !
					225 pages pleines d'informations intéressantes.",
				'en' => "Dominique Pessan thinks it's a very good book, even better than 'Au coeur de L'Oric Atmos'!
					225 interesting page."),
		),

		array(
			'type' => 'book',
			'name' => 'Atmos-Oric 1, Travaux Pratiques',
			'language' => 'fr',
			'author' => 'André Chenière',
			'year' => '1984',
			'publisher' => 'IS Editions',
			'cover' => 'book_atmos_oric_reference2.jpg',
			'download' => array('fr' => 'atmos-oric1-tome2.pdf'),
			'description' => array(
				'fr' => "Je ne possède pas ce livre, je me contenterais donc de l'oppinion de Dominique Pessan qui
					dit qu'il est vraiment excellent, encore meilleur que 'Au coeur de l'Oric Atmos' !
					225 pages pleines d'informations intéressantes.",
				'en' => "Dominique Pessan thinks it's a very good book, even better than 'Au coeur de L'Oric Atmos'!
					225 interesting page."),
		),

		array(
			'type' => 'book',
			'name' => "L'Oric a Nu",
			'language' => 'fr',
			'author' => 'Fabrice Broche',
			'year' => '1986',
			'publisher' => 'Editions SORACOM',
			'cover' => 'book_oric_a_nu.jpg',
			'download' => array('fr' => 'OricANu.pdf'),
			'description' => array(
				'fr' => "L'Oric a Nu entre dans la meme catégorie que le Oric Advanced User Guide, un livre relativement technique utilisable comme référence.
					Il contient une description du matériel, comment optimiser les programmes BASIC, une introduction au langage assembleur 6502, ainsi qu'une description détaillée des fonctions en ROM.",
				'en' => "This book belongs to the same category as the Oric Advanced User Guide; it's a relatively technical reference book.
					It contains a description of the hardware, how to optimize BASIC programs, an introduction to the 6502 assembly language, and a detailed description of the ROM subroutines."
			),
		),

		array(
			'type' => 'book',
			'name' => 'Oric Advanced User Guide',
			'language' => 'en',
			'author' => 'Leycester Whewell',
			'year' => '1984',
			'publisher' => 'Adder Publishing',
			'isbn' => '094792901',
			'cover' => 'oric_advanced_user_guide.jpg',
			'download' => array('en' => 'oric_advanced_user_guide.pdf'),
			'description' => array(
				'fr' => "L'auteur est membre de l'université de Cambridge qui a une longue expérience
					de la programmation aussi bien sur l'Oric 1 que sur l'Atmos.<br>
					Parmi les sujets couverts on trouve: <bt>
					Un désassemblage complet de la rom,
					le système disc,
					comment utiliser les routines de la ROM depuis le BASIC,
					comment programmer le processeur sonore,
					une section complete consacrée &#224; la programmation 6502,
					le format de stockage des variables BASIC,
					comment détourner les interruptions,
					une description complète de l'ULA et de la génération du signal vidéo,
					une description claire du hardware de l'oric,
					tous les détails nécéssaires &#224; l'interfacages de composants externes,
					la description d'une horloge temps réelle,
					tous les shémas électroniques de la machine.",
				'en' => "The author is a member of Cambridge University and has extensive experience
					of programming and using both the Oric 1 and Atmos computers.
					Some of the manys areas covered are:
					A complete ROM disassembly,
					The Disk system,
					Using routines in the ROM from Basic,
					Programming the Sound Chip,
					A full 6502 machine code reference section,
					Basic variable storage,
					Intercepting interrupts,
					A full description of the ULA and video generation,
					A comprehensive description of the Oric's hardware,
					Full interfacting details,
					A hardware project to build a Real Time Clock,
					A full circtuit diagram."
			),
		),

		array(
			'type' => 'manual',
			'name' => 'Oric Advanced User Guide - ROM Disassembly section',
			'language' => 'en',
			'author' => 'Leycester Whewell',
			'year' => '1984',
			'publisher' => 'Adder Publishing',
			'isbn' => '094792901',
			'cover' => 'oric_advanced_user_guide_rom_disassembly.jpg',
			'download' => array('en' => 'oric_advanced_user_guide_rom_disassembly.pdf'),
			'description' => array(
				'fr' => "Ce document est extrait de la section 'The ROM disassembly' du livre Oric Advanced User Guide, ce qui en fait un document de référence pratique a utiliser.",
				'en' => "This is just the ROM disassembly section of the Oric Advanced User Guide book extraced into a easy to search into a stand-alone PDF."
			),
		),

		array(
			'type' => 'book',
			'name' => 'The Oric Programmer',
			'language' => 'en',
			'author' => 'S.M. Gee|Mike James',
			'year' => '1984',
			'publisher' => 'Granada',
			'isbn' => 'ISBN 0-246-12535',
			'cover' => 'the_oric_programmer.jpg',
			'download' => array('en' => 'the_oric_programmer.pdf'),
			'description' => array(
				'fr' => "Ce livre n'est pas aussi didactique que l''Advanced user guide', mais il contient suffisament de petits
					conseils pour &#234;tre une véritable aide pour devenir un meilleur programmeur sur Oric.",
				'en' => "Not as comprehensive as the advanced user guide but many small tips if you want to be a better Oric-programmer."
			 ),
		),

		// https://collection.onceuponabyte.org/ident/BOOK-0017
		array(
			'type' => 'book',
			'name' => 'The Atmos Programmer',
			'language' => 'en',
			'author' => 'Mike James|S.M. Gee',
			'year' => '1984',
			'publisher' => 'Granada',
			'isbn' => 'ISBN 0-246-12535-7',
			'cover' => 'book_the_atmos_programmer.jpg',
			'description' => array(
				'fr' => "Ce livre n'est pas aussi didactique que l''Advanced user guide', mais il contient suffisament de petits
					conseils pour &#234;tre une véritable aide pour devenir un meilleur programmeur sur Oric.",
				'en' => "Not as comprehensive as the advanced user guide but many small tips if you want to be a better Oric-programmer."
			 ),
		),

		array(
			'type' => 'book',
			'name' => "Visa pour l'Oric",
			'language' => 'fr',
			'author' => 'Frédéric Blanc|Fran&#231;ois Normant',
			'year' => '1984',
			'publisher' => 'Editions SORACOM',
			'cover' => 'book_visa_pour_oric.jpg',
			'download' => array('fr' => 'visa_pour_oric.pdf'),
			'description' => array(
				'fr' => "Les quatre premières pages décrivent l'Oric lui m&#234;me, puis l'écran, la séquence d'initialisation, 
					les protections, les fonctions en ROM, etc...
					C'est un très petit livre mais il contient suffisament d'information pour s'amuser pendant un bout
					de temps en POKant par-ci, par-l&#224;, ainsi qu'en codant en 6502.",
				'en' => "The first 4 pages talks about the Oric itself, and then about the screen, 
					initialisations and protections, the Rom functions, etc...
					It's a very small book, but with enough descriptions to turn around the Oric 
					and get good time doing poke stuff, and 6502 coding."
			),
		),

		array(
			'type' => 'book',
			'name' => 'Forth pour oric',
			'language' => 'fr',
			'year' => '1983',
			'publisher' => 'Editions SORACOM|ORIC France',
			'cover' => 'book_forth_pour_oric.jpg',
			'download' => array('fr' => 'forth_pour_oric.pdf'),
			'description' => array(
				'fr' => "Et un livre sur le Forth, un !",
				'en' => "Yep, this is a book that explains how to use the Forth programming language."
			 ),
		),

		array(
			'type' => 'book',
			'name' => 'Tours de Forth',
			'author' => 'Marc Petreman|Michel Rousseau',
			'language' => 'fr',
			'year' => '1985',                      // TODO NOT VERIFIED
			'publisher' => 'Eyrolles',
			'cover' => 'tours_de_forth.jpg',
		),
		array(
			'type' => 'book',
			'name' => 'Oric Atmos and Oric 1 Graphics and Machine code techniques',
			'language' => 'en',
			'author' => 'Geoff Phillips',
			'year' => '1984',
			'publisher' => 'McGraw Hill',
			'isbn' => 'ISBN 007084743',
			'cover' => 'book_graphics_and_machine_code_techniques.jpg',
			'download' => array('en' => 'graphics_and_machine_code_techniques.pdf'
			 ),
			'description' => array(
				'fr' => "L'un des meilleurs et plus recherchés livres jamais écris sur Oric.
					Pour l'utilisateur avancé, il fourni de nombreuses informations et techniques quand &#224; la manipuation
					de graphismes en assembleur.",
				'en' => "One of the best, and one of the most sought after books for the Oric.  
					For the Advanced user, loads of information on Graphics and Machine code techniques - hence the name."
			 ),
		),
		array(
			'type' => 'book',
			'name' => 'Advanced Programming for the Oric',
			'language' => 'en',
			'author' => 'Gerard Mason',
			'year' => '1984',                      // TODO NOT VERIFIED
			'publisher' => 'McGraw Hill',
			'cover' => 'book_advanced_programming_for_the_oric.jpg',
			'description' => array(
			 ),
		),

		array(
			'type' => 'manual',
			'name' => 'ORIC-1, Forth programming manual',
			'cover' => 'oric1_forth_programming_manual.jpg',
			'download' => array('en' => "oric1_forth_programming_manual.pdf"), 
			'language' => 'en',
			'year' => '1983',
			'publisher' => 'Tansoft Ltd|Oric International',
			'description' => array(
				'fr' => "Le manuel du language Forth",
				'en' => "User manual for the Forth programming language."
			 ),
		),

		// -------------------------- 6502 programming ----------------------------------
		// https://www.defence-force.org/computing/oric/library/lib_coding_6502/index.htm
		array(
			'type' => 'book',
			'name' => 'Programmation du 6502',
			'cover' => 'programmation_du_6502.jpg',
			'download' => array('en' => "programmation_du_6502.pdf"),
			'language' => 'fr',
			'author' => 'Rodnay Zaks',
			'year' => '1979',
			'publisher' => 'Sybex',
			'isbn' => 'ISBN 2-7361-0031-3',
			'description' => array(
				'fr' => 'Version Francaise du livre de référence sur la programmation en assembleur 6502',
				'en' => 'French edition of the reference book on how to programm in 6502 assembly language')
			),

		array(
			'type' => 'book',
			'name' => 'Programming the 6502',
			'cover' => 'programming_the_6502.jpg',
			'download' => array('en' => "programming_the_6502.pdf"),
			'language' => 'en',
			'author' => 'Rodnay Zaks',
			'year' => '1978',
			'publisher' => 'Sybex',
			'isbn' => 'ISBN 0-89588-135-7',
			'description' => array(
				'fr' => 'Ce livre est considéré comme étant le livre de référence pour les programmeurs en assembleur 6502',
				'en' => 'This book is considered as the reference document on how to program in 6502 assembly language')
			),


		array(
			'type' => 'book',
			'name' => 'Advanced 6502 programming',
			'cover' => 'advanced_6502_programming.jpg',
			'download' => array('en' => "advanced_6502_programming.pdf"),
			'language' => 'en',
			'author' => 'Rodnay Zaks',
			'year' => '1980',
			'publisher' => 'Sybex',
			'isbn' => 'ISBN 0-89588-089-X',
			'description' => array(
				'fr' => 'Ce livre explique comment programmer un clavier, jouer de la musique ou des sons, générer des nombres aléatoires,. etc... avec le système SYM',
				'en' => 'This book provide code to access keyboard, play music and sound, generate random numbers, real time programming, etc... using the SYM board')
			),


		array(
			'type' => 'book',
			'name' => 'Applications du 6502',
			'cover' => 'applications_du_6502.jpg',
			'download' => array('en' => "applications_du_6502.pdf"),
			'language' => 'fr',
			'author' => 'Rodnay Zaks',
			'year' => '1980',
			'publisher' => 'Sybex',
			'isbn' => 'ISBN 2-7361-0032-1',
			'description' => array(
				'fr' => "Ce livre est pour les gens qui souhaitent interfacer un processeur 6502 avec d'autres composants, avec gestions d'entrées-sorties, horloges, etc...",
				'en' => "This book is for people who wish to interface a 6502 processor with other components, input-outputs, timers, etc...")
			),

		array(
			'type' => 'book',
			'name' => '6502 Machine Code for Beginners',
			'cover' => '6502_machine_code_for_beginners.jpg',
			'download' => array('en' => "6502_machine_code_for_beginners.pdf"),
			'language' => 'en',
			'author' => 'AP Stephenson',
			'year' => '1983',
			'publisher' => 'Newnes Microcomputer Books',
			'isbn' => 'ISBN 0 408 01311 7',
			'description' => array()
			),

		array(
			'type' => 'book',
			'name' => 'L\'assembleur de L\'oric 1 et Atmos - Programmation en langage machine',
			'language' => 'fr',
			'author' => 'Marcel Henrot',
			'year' => '1984',
			'publisher' => 'Editions du P.S.I.',
			'isbn' => 'ISBN 2-86595-168-5',
			'cover' => 'book_assembleur_de_l_oric.jpg',
			'description' => array(
				'fr' => "Un bon livre pour commencer a programmer en 6502 sur l'oric.<br>Rien de spécial, mais l'apprentissage est progressif, et il y a d'intéressantes remarques quand à l'utilisation du code automodifié, de la relocation...",
				'en' => 'A good book for starting 6502 programming on the oric.<br>Nothing special, but very progressive, and interesting remarks concerning automodification, relocation...'),
			'download' => array(
				'fr' => "assembleur_oric1_et_atmos.pdf")
			),

		// https://collection.onceuponabyte.org/ident/BOOK-0014
		array(
			'type' => 'book',
			'name' => 'Oric and Atmos machine code',
			'language' => 'en',
			'author' => 'Ian Sinclair',
			'year' => '1984',
			'publisher' => 'Granada',
			'isbn' => 'ISBN 024612150',
			'cover' => 'oric_and_atmos_machine_code.jpg',
			'download' => array('fr' => "oric_and_atmos_machine_code.pdf"),
			'description'  => array(
				'fr' => "C'est un livre agréable, joliment présenté, et fournissant des explications claires et simples.<br>
						Bien qu'il ne dise rien à propos des durées des cycles d'horloge, il reste un bon ouvrage pour commencer l'apprentissage de la programmation en 6502.<br>
						Quelques réflexions intéressantes à propos des protections contre le piratage.",
				'en' => "A nice book with nice paper, nice presentation, easy-to-understand explanations.<br>
						Nothing about clock-cycles, but it's a pretty good book for starting 6502 programming.<br>
						Some interesting considerations about anti-piracy tricks.<br>")
			),
		array(
			'type' => 'book',
			'name' => 'L\'Oric et son micro-processeur 6502',
			'language' => 'fr',
			'author' => 'Fran&#231;ois Normant|Frédéric Blanc',
			'year' => '1984',
			'publisher' => 'Micro Programmes 5',
			'cover' => 'book_oric_et_son_micro-processeur.jpg',
			'download' => array('fr' => "oric_et_son_microprocesseur.pdf"),
			'description'  => array(
				'fr' => "Encore un livre qui pourra vous aider à apprendre le 6502.<br>
						Personnellement, je ne l'aime pas du tout car il est truffé de fautes de frappe, et propose ce que j'estime être du code dégoutant. Le fait d'utiliser du code auto-modifié ne me pose aucun problème, mais un livre se devrait de prévenir le lecteur que ce type de code ne peut pas être exécuté en ROM.<br>
						Les auteurs quand à eux semblent heureux de faire des routines dont l'exécution est différente selon que l'on fasse un appel sur l'adresse de départ ou bien un octet plus loin.<br>",
				'en' => "And another french book that can helps you to learn 6502.<br>
						I really do not like it, since it's full of typos. And some \"dirty code\". I'm ok to use self-modifying code, but in a book you have to explain that this kind of code cannot be executed in ROM.<br>
						And the author is happy to use some stupid features like \"opcode\" overloading. (That means that depending of where you start to disassemble, the code have different meanings).<br>
						Somewhere disturbing. I say.")
			),
		array(
			'type' => 'book',
			'name' => 'An introduction to 6502 machine code',
			'language' => 'en',
			'author' => 'R.A. Penfold|J.W. Penfold',
			'year' => '1984',
			'publisher' => 'Bernard Babani',
			'isbn' => 'ISBN 0-85934-122-4',
			'cover' => 'an_introduction_to_6502_machine_code.jpg',
			'download' => array('en' => "an_introduction_to_6502_machine_code.pdf"),
			'description'  => array(
				'fr' => "Un autre livre de Penfold. Ce livre existe en versions pour d'autres machines à base de 6502, telles que Commodore64, VIC-20, and BBC. Les programmes d'examples utilisent le BASIC pour charger le code machine en mémoire. Pas un livre fabuleux, mais correct pour débuter.",
				'en' => "Another by Penfold. This is for several computers that use the 6502 - Commodore64, VIC-20, Oric-1, Atmos and BBC. Example programs are included using BASIC to input the MC . Not great, but a handy introduction.")
			),
		array(
			'type' => 'book',
			'name' => 'Programmer en langage machine sur Oric-Atmos et Oric-1',
			'language' => 'fr',
			'author' => 'Bruce Smith',
			'year' => '1985',
			'publisher' => 'Cedic|Nathan',
			'isbn' => 'ISBN 2-7124-0574-9',
			'cover' => 'programmer_en_langage_machine_sur_atmos_et_oric_1.jpg',
			'download' => array('fr' => "programmer_en_langage_machine_sur_atmos_et_oric_1.pdf"),
			'description'  => array(
				'fr' => "A l'arrière du livre vous pourriez lire ceci:

Si vous n'êtes plus motivés par le BASIC, essayez donc le code machine.
Parlez donc à votre ordinateur dans son propre langage, et regardez à quelle vitesse il réagit. Découvrez comment utiliser l'hexadécimal et le binaire, les registres, les adressages absolus et indirects, les drapeaux, rotations décallages et sauts.
Ce livre contient une description complete du jeu d'instruction utilisable avec le 6502 qui équipe l'oric, ainsi qu'un certain nombre d'applications l'utilisant. Il explique comment, quand et ou les routines en code machine peuvent être stockées. Un moniteur assembleur est fourni pour faciliter la saisie du code.
Ne laissez pas votre oric prendre la poussière - parlez lui !",
			'en' => "On the back of the book you could read the following:

If you are no longer boggled by BASIC, try beeing mesmerized by machine code.
Talk to your computer in its own language and see how much more quickly it responds. Find out how it uses hexadecimal and binary, registers, absolute and indirect adressing, flags, shifts, rotates and jumps.
This self-contained book gives a full description of all the machine code instructions available to the Oric's 6502 chip and also suggests applications for theis use. It describes how, when, and where machine code routines can be entered. A simple monitor program is provided to facilitate the entry of your machine code routines.
Don't let your Oric gather dust on the shelf - talk to it !")
			),
		array(
			'type' => 'book',
			'name' => 'Machine Code For The Atmos & Oric 1',
			'language' => 'en',
			'author' => 'Bruce Smith',
			'year' => '1984',
			'publisher' => 'Shiva',
			'cover' => 'machine_code_for_the_atmos_and_oric_1.jpg',
			'download' => array('en' => "machine_code_for_the_atmos_and_oric_1.pdf"),
			'isbn' => 'ISBN 090681265',
			'description' => array(
				'fr' => "A l'arrière du livre vous pourriez lire ceci:
Si vous n'êtes plus motivés par le BASIC, essayez donc le code machine.
Parlez donc à votre ordinateur dans son propre langage, et regardez à quelle vitesse il réagit. Découvrez comment utiliser l'hexadécimal et le binaire, les registres, les adressages absolus et indirects, les drapeaux, rotations décallages et sauts.
Ce livre contient une description complete du jeu d'instruction utilisable avec le 6502 qui équipe l'oric, ainsi qu'un certain nombre d'applications l'utilisant. Il explique comment, quand et ou les routines en code machine peuvent être stockées. Un moniteur assembleur est fourni pour faciliter la saisie du code.
Ne laissez pas votre oric prendre la poussière - parlez lui !",
				'en' => "On the back of the book you could read the following:
If you are no longer boggled by BASIC, try beeing mesmerized by machine code.
Talk to your computer in its own language and see how much more quickly it responds. Find out how it uses hexadecimal and binary, registers, absolute and indirect adressing, flags, shifts, rotates and jumps.
This self-contained book gives a full description of all the machine code instructions available to the Oric's 6502 chip and also suggests applications for theis use. It describes how, when, and where machine code routines can be entered. A simple monitor program is provided to facilitate the entry of your machine code routines.
Don't let your Oric gather dust on the shelf - talk to it !"),
			),

		array(
			'type' => 'book',
			'name' => '6502 Machine Code for Humans',
			'author' => 'Alan Tootill|David Barrow',
			'cover' => '6502_machine_code_for_humans.jpg',
			'download' => array('en' => "6502_machine_code_for_humans.pdf"),
			'language' => 'en',
			'year' => '1984',
			'publisher' => 'Granada',
			'isbn' => 'ISBN 0 246 12076 2',
			'description' => array(
				'fr' => "",
				'en' => "")
			),

		array(
			'type' => 'book',
			'name' => '6502 Assembly Language Programming',
			'language' => 'en',
			'author' => 'Judi N Fernandez|Donna N Tabler|Ruth Ashley',
			'year' => '1983',
			'publisher' => 'Wiley',
			'isbn' => 'ISBN 0 471 86120-0',
			'cover' => '6502_assembly_language_programming-wiley.jpg',
			'download' => array('en' => "6502_assembly_language_programming-wiley.pdf"),
			'description' => array(
				'fr' => "A ne pas confondre avec l'ouvrage de Lance Leventhal avec le même titre, celui-ci est destiné aux débutants voulant apprendre l'assembleur 6502.",
				'en' => "Not to be mistaken with Lance Leventhal books with the same name, this one is aimed at beginners wishing to learn 6502 assembly language"),
		),

		array(
			'type' => 'book',
			'name' => '6502 Assembly Language Programming',
			'language' => 'en',
			'author' => 'Lance A Leventhal',
			'year' => '1979',
			'publisher' => 'Osborne|McGraw Hill',
			'isbn' => 'ISBN 0 931988 27 6',
			'cover' => '6502_assembly_language_programming.jpg',
			'download' => array('en' => "6502_assembly_language_programming.pdf"),
			'description' => array(
				'fr' => "Ce livre fournit de façon claire et complete ce qu'il faut savoir de la programmation en assembleur 6502: 
						De nombreux programmes d'example, allant de simples boucles chargeant des données jusqu'à des projets complets, tous étant completements débuggés et utilisables.
						Ce livre contient:
						Plus de 80 examples, présentés de façon formalisée incluant organigrames, code source, code désassemblé et commentaires
						Une explication détaillée de chaque instruction 6502
						Des conventions de programmation en assembleur 6502
						Comment utiliser et interfacer les périphériques d'entrée/sortie, incluant des programmes et considérations quant au design d'interfacage avec le PIA 6520, le VIA 6522, et les autres composants compatibles avec le 6502
						Comment programmer les interruptions avec le 6502",
				'en' => "This book provides comprehensive coverage of the 6502 microprocessor assembly language: An extensive range of programming examples, from simple memory load loops to complete design projects. The emphasis is on presenting a large number of fully debugged, practical programming examples.
						Features included:
						Over 80 programming examples, with a standard format including flowcharts, source program, object code and explanatory text
						Each 6502 instruction fully explained
						6502 Assembler conventions
						Input/Output devices and interfacing methods, including programs and design considerations for the 6520 Peripheral Interface Adapter (PIA), the 6522 Versatile Interface Adapter (VIA), and other 6502-compatible input/output devices
						Programming the 6502 interrupt system"	),
			),

		array(
			'type' => 'book',
			'name' => '6502 Assembly Language Subroutines',
			'language' => 'en',
			'author' => 'Lance A Leventhal|Winthrop Saville',
			'year' => '1982',
			'publisher' => 'Osborne|McGraw Hill',
			'isbn' => 'ISBN 0-931988-59-4',
			'cover' => '6502_assembly_language_subroutines.jpg',
			'download' => array('en' => "6502_assembly_language_subroutines.pdf"),
			'description' => array(
				'fr' => "Une collection de petits morceaux de code utilisables pour manipuler des pointers, boucler, calculer, jouer avec la pile, comment passer des paramètres, etc...",
				'en' => "An interesting collection of code snippets to manipulate addresses, iterate, compute, play with the stack, how to pass parameters, etc..."),
			),

		array(
			'type' => 'book',
			'name' => 'Oric The Story So Far',
			'language' => 'en',
			'author' => 'Jonathan Haworth',
			'year' => '1989',
			'cover' => 'oric_the_story_so_far.jpg',
			'download' => array('en' => "oric_the_story_so_far.pdf"),
			'description' => array(
				'fr' => "Lecture indispensable pour les personnes intéressées par l'histoire des ordinateurs Oric, que ce soit les individus, l'entreprise, les drames, et plein d'autres informations que vous ne connaissiez probablement pas.",
				'en' => "A must-read for people who are interested in the history behind the Oric computers, including the peoples, the company, the drama, and plenty of information you probably did not know."),
		),

		array(
			'type' => 'book',
			'name' => 'Codigo Maquina Oric-1 Atmos',
			'language' => 'es',
			'author' => 'Ramon Cererols',
			'year' => '1984',
			'cover' => 'codigo_maquina_oric1_atmos.jpg',
			'description' => array(),
			'download' => array('es' => "codigo_maquina_oric1_atmos.pdf")
		),

		array(
			'type' => 'magazine',
			'name' => 'Oric Magazine',
			'issue' => 'Nr. 1 Abril/Mayo',
			'language' => 'es',
			'year' => '1985', 'month' => 4,
			'cover' => 'oric_magazine-spain/oric_magazine_1985_01.jpg',
			'download' => array('es' => "oric_magazine-spain/oric_magazine_1985_01.pdf")
		),

		array(
			'type' => 'book',
			'name' => 'Beginners assembly language programming for the Oric-1',
			'language' => 'en',
			'author' => 'Peter Holmes|John H Watson',
			'year' => '1984',
			'publisher' => 'Glentop',
			'cover' => 'missing.jpg',
		),

		array(
			'type' => 'manual',
			'name' => "Apprendre le Basic sur Oric",
			'author' => 'Henri Cohen Solal',
			'language' => 'fr',
			'year' => '1983',
			'publisher' => 'ASN',
			'cover' => 'apprendre_le_basic_sur_oric.jpg',
			'download' => array('fr' => "apprendre_le_basic_sur_oric.pdf"),
			'description' => array(
				'fr' => "Manuel utilisateur d'un logiciel d'apprentissage BASIC",
				'en' => "User manual of a BASIC learning sotware."),
		),


		array(
			'type' => 'manual',
			'name' => "Atmos F83 v2.0 mini-manuel utilisateur",
			'author' => 'Michel Zupan',
			'language' => 'fr',
			'year' => '1987', 'month' =>  2,
			'cover' => 'atmos_f83_v2.0_mini-manuel_utilisateur.jpg',
			'download' => array('fr' => "atmos_f83_v2.0_mini-manuel_utilisateur.pdf"),
			'description' => array(
				'fr' => "Manuel utilisateur du système Forth-83 en version Sedoric",
				'en' => "User manual of the Sedoric version of the Forth-83 system"),
		),

		array(
			'type' => 'manual',
			'name' => "FORTH Programming Manual (Atmos)",
			'author' => 'Andy Biggs|Paul Kaufman',
			'language' => 'en',
			'year' => '1984',
			'publisher' => 'Tansoft Ltd',
			'cover' => 'atmos_forth_programming_manual.jpg',
			'download' => array('en' => "atmos_forth_programming_manual.pdf"),
			'description' => array(
				'fr' => "Manuel utilisateur du Forth sur Oric Atmos",
				'en' => "User manual of the Atmos Forth"),
		),
		array(
			'type' => 'manual',
			'name' => "Oric Base Manual",
			'author' => 'Geoff Phillips',
			'language' => 'en',
			'year' => '1983',
			'publisher' => 'Tansoft Ltd',
			'cover' => 'manual_tansoft_oric_base.jpg',
			'download' => array('en' => "manual_tansoft_oric_base.pdf"),
			'description' => array(
				'fr' => "Manuel utilisateur du logiciel Oric Base de Tansoft",
				'en' => "User manual of the Tansoft Oric Base software"),
		),
		array(
			'type' => 'manual',
			'name' => "Oric Calc Manual",
			'author' => 'Geoff Phillips',
			'language' => 'en',
			'year' => '1983',
			'publisher' => 'Tansoft Ltd',
			'cover' => 'manual_tansoft_oric_calc.jpg',
			'download' => array('en' => "manual_tansoft_oric_calc.pdf"),
			'description' => array(
				'fr' => "Manuel utilisateur du logiciel Oric Calc de Tansoft",
				'en' => "User manual of the Tansoft Oric Calc software"),
		),
		array(
			'type' => 'manual',
			'name' => "Oricmon Manual",
			'author' => 'Geoff Phillips|Paul Kaufman',
			'language' => 'en',
			'year' => '1983',
			'publisher' => 'Tansoft Ltd',
			'cover' => 'manual_tansoft_oricmon.jpg',
			'download' => array('en' => "manual_tansoft_oricmon.pdf"),
			'description' => array(
				'fr' => "Manuel utilisateur du logiciel Oricmon de Tansoft",
				'en' => "User manual of the Tansoft Oricmon software"),
		),
		array(
			'type' => 'manual',
			'name' => "Oric CAD Manual",
			'author' => 'Andrew Zuntz',
			'language' => 'en',
			'year' => '1983',
			'publisher' => 'Tansoft Ltd',
			'cover' => 'manual_tansoft_oric_cad.jpg',
			'download' => array('en' => "manual_tansoft_oric_cad.pdf"),
			'description' => array(
				'fr' => "Manuel utilisateur du logiciel Oric CAD de Tansoft",
				'en' => "User manual of the Tansoft Oric CAD software"),
		),

		array(
			'type' => 'manual',
			'name' => "Author Manual",
			'author' => 'John Dawson',
			'language' => 'en',
			'year' => '1983',
			'publisher' => 'Tansoft Ltd',
			'cover' => 'manual_tansoft_author.jpg',
			'download' => array('en' => "manual_tansoft_author.pdf"),
			'description' => array(
				'fr' => "Manuel utilisateur du logiciel Author de Tansoft",
				'en' => "User manual of the Tansoft Author software"),
		),

		array(
			'type' => 'book',
			'name' => "Telestrat a coeur ouvert",
			'author' => 'Guillaume Meister',
			'language' => 'fr',
			'year' => '1987',
			'publisher' => 'Aedit',
			'cover' => 'telestrat_a_coeur_ouvert.jpg',
			'download' => array('en' => "telestrat_a_coeur_ouvert.pdf"),
			'description' => array(
				'fr' => "Livre sur le Telestrat par le Club Oric Telestrat a destination des développers, avec la présentation de matériel et des exemples de code.",
				'en' => "Book about the Telestrat by the Club Oric Telestrat targeted to developers, with presentation of the harware and some sample code"),
		),

		array(
			'type' => 'book',
			'name' => "Telestrat Système m'était conté",
			'author' => 'Guillaume Meister',
			'language' => 'fr',
			'year' => '1990',
			'cover' => 'telestrat_systeme_metait_conte.jpg',
			'download' => array('en' => "telestrat_systeme_metait_conte.pdf"),
			'description' => array(
				'fr' => "La suite de Telestrat a coeur ouvert, avec la présentation de Telemon",
				'en' => "The followup of Telestrat a coeurt ouvert, with the presentation of Telemon"),
		),

		array(
			'type' => 'manual',
			'name' => "Instruksjonhefte for Oric personlig Komputer",
			'language' => 'no',
			'year' => '1983', 'month' =>  2,
			'publisher' => 'AD Elektronikk',
			'cover' => 'instruktionshefte_for_oric_personlig_komputer.jpg',
			'download' => array('no' => "instruktionshefte_for_oric_personlig_komputer.pdf"),
			'description' => array(
				'fr' => "Ce petit fascicule était livré par l'importateur Norvégien de l'Oric 1, avec une courte explication du fonctionnement de la machine et la programmation en Basic",
				'en' => "This is an instruction booklet provided by the Norwegian importer of the Oric, with basic explanations on how the machine work and a quick overview of Basic programming"),
		),

		array(
			'type' => 'manual',
			'name' => "Lorigraph - A user's guide",
			'author' => "Jonathan Haworth",
			'language' => 'en',
			//'year' => '1983', 'month' =>  2,   //No idea
			//'publisher' => 'AD Elektronikk',
			'cover' => 'lorigraph_a_users_guide.jpg',
			'download' => array('en' => "lorigraph_a_users_guide.pdf"),
			'description' => array(
				'fr' => "Un petit manuel en anglais expliquant comment utiliser la version Sedoric de Lorigraph",
				'en' => "A small English manual explaining how to use the Sedoric version of Lorigraph"),
		),

		array(
			'type' => 'manual',
			'name' => "Lorigraph pour Oric 1 et Oric Atmos",
			'author' => "Patrice Guerlais",
			'language' => 'fr',
			'year' => '1984',
			'publisher' => 'Loriciels',
			'cover' => 'lorigraph_systeme_de_developpement_graphique.jpg',
			'download' => array('en' => "lorigraph_systeme_de_developpement_graphique.pdf"),
			'description' => array(
				'fr' => "Manuel utilisateur de la version cassette de Lorigraph",
				'en' => "French user manual of the tape version of Lorigraph"),
		),

		array(
			'type' => 'manual',
			'name' => "Oricall BBS software manual",
			'author' => "Nick Haworth",
			'language' => 'en',
			'year' => '1993',
			'cover' => 'oricall_bbs_software_manual.jpg',
			'download' => array('en' => "oricall_bbs_software_manual.pdf"),
			'description' => array(
				'fr' => "Manuel utilisateur du logiciel Oricall",
				'en' => "User manual of the Oricall BBS Software"),
		),

		array(
			'type' => 'manual',
			'name' => "Oricomms software manual",
			'author' => "John Ruston|Trevor Shaw",
			'language' => 'en',
			'year' => '1992',
			'cover' => 'oricomms.jpg',
			'download' => array('en' => "oricomms.pdf"),
			'description' => array(
				'fr' => "Manuel utilisateur du logiciel Oricomms",
				'en' => "User manual of the Oricomms Software"),
		),

		array(
			'type' => 'manual',
			'name' => "Service Manual for the Oric-1 and Oric Atmos microcomputers",
			'language' => 'en',
			'year' => '1984',
			'publisher' => 'Oric International',
			'cover' => 'service_manual_for_the_oric1_and_oric_atmos_microcomputers.jpg',
			'download' => array('en' => "service_manual_for_the_oric1_and_oric_atmos_microcomputers.pdf"),
			'description' => array(
				'fr' => "Un manuel indispensable pour réparer les ordinateurs Oric, fourni par <a href='http://www.48katmos.freeuk.com/projects.htm'>Steve Marshall</a> (il existe une version Francaise traduite par Romu)",
				'en' => "A very valuable resource if you need to fix an Oric computer, courtesy of <a href='http://www.48katmos.freeuk.com/projects.htm'>Steve Marshall</a> (There is a French version translated by Romu)"),
		),


		array(
			'type' => 'manual',
			'name' => "Manuel technique pour les ordinateusrs Oric 1 et Oric Atmos",
			'language' => 'fr',
			'year' => '1984',
			'publisher' => 'Oric International',
			'cover' => 'manuel_technique_pour_les_ordinateurs_oric1_et_oric_atmos.jpg',
			'download' => array('fr' => "manuel_technique_pour_les_ordinateurs_oric1_et_oric_atmos.pdf"),
			'description' => array(
				'fr' => "Un manuel indispensable pour réparer les ordinateurs Oric, fourni par <a href='http://www.48katmos.freeuk.com/projects.htm'>Steve Marshall</a> (Version Francaise traduite par Romu)",
				'en' => "A very valuable resource if you need to fix an Oric computer, courtesy of <a href='http://www.48katmos.freeuk.com/projects.htm'>Steve Marshall</a> (This is the French version translated by Romu)"),
		),



		array(
			'type' => 'book',
			'name' => "Programmes de résistance des matériaux sur Oric-1 et Oric Atmos",
			'author' => "Ernest Rosenthal",
			'language' => 'fr',
			'publisher' => 'Eyrolles',
			'year' => '1984',
			'cover' => 'programmes_de_resistance_des_materiaux_sur_oric_et_atmos.jpg',
			'download' => array('fr' => "programmes_de_resistance_des_materiaux_sur_oric_et_atmos.pdf"),
		),


		// -------------------------
		// https://usborne.com/gb/books/computer-and-coding-books#copyright
		// These pdf copies of the original Usborne Computer Guides published in the 1980s are free to download for your own personal or educational use. 
		// The books and files are the copyright of Usborne Publishing. You can provide a link to the pdfs from your website, but you may not host or distribute the original files.
		//
		array(
			'type' => 'book',
			'name' => "Creepy Computer Games",
			'author' => 'Rob McCaig|Colin Reynolds|Val Robinson|Alan Ramsey|Keith Campbell|Chris Oxlade|Brendon Kavanagh',
			'publisher' => 'Usborne',
			'language' => 'en',
			'year' => '1983',
			'isbn' => "ISBN 0 86020 780 3",
			'cover' => 'creepy_computer_games.jpg',
			//'download' => array('en' => "creepy_computer_games.pdf"),
			'download' => array('en' => "https://drive.google.com/open?id=0Bxv0SsvibDMTRUl3SFRONGN0MFk"),
			// 
			'description' => array(
				'fr' => "Quelques jeux simples sur le thème de l'horreur, compatibles VIC, PET, BBC, TRS-80, Apple, ZX Spectrum, Dragon et évidement Oric!",
				'en' => "A few simple 'creepy' programs compatibles with VIC, PET, BBC, TRS-80, Apple, ZX Spectrum, Dragon and obviously the Oric!"),
		),
		array(
			'type' => 'book',
			'name' => "Write Your Own Adventure Programs For your Microcomputer",
			'author' => 'Jenny Tyler|Les Howarth|Penny Simon|Rob McCaig|Mark Longworth|Chris Oxlade',
			'publisher' => 'Usborne',
			'language' => 'en',
			'year' => '1983',
			'isbn' => "ISBN 0 86020 741 2",
			'cover' => 'write_your_own_adventure_programs.jpg',
			//'download' => array('en' => "write_your_own_adventure_programs.pdf"),
			'download' => array('en' => "https://drive.google.com/open?id=0Bxv0SsvibDMTYkFJbUswOHFQclE"),
			'description' => array(
				'fr' => "Une présentation complete sur comment créer un jeu d'aventure, de la carte des lieux aux objets, actions, structure du programme et débogage.",
				'en' => "A complete introduction to how to write adventure games, covering mapping, items, actions, program structure and debugging!"),
		),

	);
?>

