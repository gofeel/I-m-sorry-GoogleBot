<?php
/* "I'm sorry, GoogleBot" plugin for Textcube 1.8
   Version 0.1
   By gofeel (gofeel_AT_gmail_DOT_com)
   License : General Public License
   Visit http://bringbring.com/entry/FootNote for the detail


   General Public License
   http://www.gnu.org/licenses/gpl.html

   This program is free software; you can redistribute it and/or modify
   it under the terms of the GNU General Public License as published by
   the Free Software Foundation; either version 2 of the License, or
   (at your option) any later version.

*/

function SG_ViewPost($target, $mother) {
	global $configVal,$pluginURL;
	$target=preg_replace_callback("/>\/\/\/\/([^<]*)</","SG_ReverseString",$target);
	//$target=preg_replace("/^\/\/\/\/(.*)$/","&#8238;$1&#8237;\r\n",$target);
	return $target;
}

function SG_ReverseString($matches) {
	preg_match_all('/./us', $matches[1], $ar);
	$ReturnString =  join('',array_reverse($ar[0]));
	$ReturnString = ">&#8238;".$ReturnString."&#8237;<";
	return $ReturnString;
}
?>
