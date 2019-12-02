<!DOCTYPE html> 
<html>	
    <head> 
        <title>Areas for an interview</title> 
	<style>
	header { font-size: 190% }
	</style>	    
	    
    </head> 
    <body> 
        <article> 
            <header> 
<?
			echo "Question Areas for an interview.<br><br><br>";

			$inhalte[].="art";
			$inhalte[].="economy";
			$inhalte[].="politics";
			$inhalte[].="social/life/Society";
			$inhalte[].="science";
			$inhalte[].="work";
			$inhalte[].="sport";
			$inhalte[].="(your current town/area)";
			$inhalte[].="technic";
			$inhalte[].="dinner";
			$inhalte[].="music";
			$inhalte[].="climate";
			$inhalte[].="minority";

			
			//continents
			$inhalte[].="asia";
			$inhalte[].="africa";
			$inhalte[].="south-america";
			$inhalte[].="north-america";
			$inhalte[].="australia";
			$inhalte[].="europe";

			//freud
			$inhalte[].="daily life";
			$inhalte[].="love";
			$inhalte[].="war";
			$inhalte[].="death";
			$inhalte[].="(un)aware";
			$inhalte[].="normality and neurose";
			$inhalte[].="literature";
			$inhalte[].="legend";
			$inhalte[].="fairytale";
			$inhalte[].="religion";
			$inhalte[].="culture";
			

			$ende=count($inhalte)-1;

			echo $inhalte[rand(0, $ende)];

			?>
            </header> 
        </article> 
    </body> 
</html> 




