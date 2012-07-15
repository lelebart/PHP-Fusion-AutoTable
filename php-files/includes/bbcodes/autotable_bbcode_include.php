<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) 2002 - 2010 Nick Jones
| http://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Type: BBcode
| Name: AutoTable
| Version: 1.00
| Author: Valerio Vendrame (lelebart)
+--------------------------------------------------------+
| Filename: autotable_bbcode_include.php
| Author: Valerio Vendrame (lelebart)
+--------------------------------------------------------+
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at www.gnu.org/licenses/agpl.html. Removal of this
| copyright header is strictly prohibited without
| written permission from the original author(s).
+--------------------------------------------------------*/
if (!defined("IN_FUSION")) { die("Access Denied"); }

$count = preg_match_all("#\[autotable\](.*?)\[/autotable\]#si", $text, $match, PREG_PATTERN_ORDER);
for($i=0; $i<$count; $i++) {
	$autotablerows = explode("\n", $match[1][$i]);
	$autotabletext = "<table class='tbl-border' cellpadding='0' cellspacing='1' width='100%'>";
	foreach($autotablerows as $row) {
		$row = trim($row);
		if(!empty($row)) {
			$rows = "";
			$autotableceils = explode("::", $row);
			foreach($autotableceils as $ceils) {	
				$colspan = ($ceils[0] == "{" && isnum($ceils[1]) && $ceils[2] == "}" ) ? " colspan='".$ceils[1]."'" : "";
				$ceils = preg_replace('#\{([0-9]*?)\}(.*?)#si', '\2', $ceils);
				$rows .= "<td class='tbl1'".$colspan.">".trim($ceils)."</td>";
			}			
			$autotabletext .= "<tr>".$rows."</tr>";
		}
	}
	$autotabletext .= "</table>";
	$text = str_replace($match[0][$i], $autotabletext, $text);
}
//print_r($match);
unset($autotablerows);
unset($autotabletext);
unset($match);
?>
