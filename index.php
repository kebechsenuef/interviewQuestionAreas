﻿<!DOCTYPE html> 
<html> 
    <head> 
        <title>Areas for an interview</title> 
    </head> 
    <body> 
        <article> 
            <header> 
<?
			echo "Question Areas for an interview.<br><br><br>";

			$inhalte[].="art";
			$inhalte[].="economy";
			$inhalte[].="politics";
			$inhalte[].="social/life";
			$inhalte[].="science";
			$inhalte[].="work";
			$inhalte[].="sport";
			$inhalte[].="(your current town/area)";
			$inhalte[].="technic";
			$inhalte[].="asia";
			$inhalte[].="africa";
			$inhalte[].="south-america";
			$inhalte[].="north-america";
			$inhalte[].="australia";
			$inhalte[].="europe";
			$inhalte[].="dinner";
			$inhalte[].="music";
			$inhalte[].="climate";
			$inhalte[].="minority";

			$ende=count($inhalte)-1;

			echo $inhalte[rand(0, $ende)];

			?>
            </header> 
        </article> 
    </body> 
</html> 




