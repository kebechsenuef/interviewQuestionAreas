<?php
session_start();
?>

<!DOCTYPE html> 
<html>	
    <head> 
        <title>Areas for an interview</title> 
	<style>
	header { font-size: 120% }
	</style>	    
	    
    </head> 
    <body> 
        <article> 
            <header> 

<div>
  <h5>Areas for an interview - all displayed areas will be deleted for unique questions</h5>
<?
			
            if (!isset($_SESSION['inhalte'])) {

			$_SESSION['inhalte'][].="art";
			$_SESSION['inhalte'][].="economy";
			$_SESSION['inhalte'][].="politics";
			$_SESSION['inhalte'][].="get more social";
			$_SESSION['inhalte'][].="science";
			$_SESSION['inhalte'][].="work";
			$_SESSION['inhalte'][].="sport";
			$_SESSION['inhalte'][].="(your current town/area)";
			$_SESSION['inhalte'][].="technic";
			$_SESSION['inhalte'][].="dinner";
			$_SESSION['inhalte'][].="music";
			$_SESSION['inhalte'][].="climate";
			$_SESSION['inhalte'][].="plastic";
			$_SESSION['inhalte'][].="LGBTIQ / queer";
			$_SESSION['inhalte'][].="minority";			

			
            /*            
            //continents
			$_SESSION['inhalte'][].="asia";
			$_SESSION['inhalte'][].="africa";
			$_SESSION['inhalte'][].="south-america";
			$_SESSION['inhalte'][].="north-america";
			$_SESSION['inhalte'][].="australia";
			$_SESSION['inhalte'][].="europe";
            */

			//parts of freud
			$_SESSION['inhalte'][].="daily life";
			$_SESSION['inhalte'][].="love";
			$_SESSION['inhalte'][].="war";
			$_SESSION['inhalte'][].="death";
			$_SESSION['inhalte'][].="literature";
			$_SESSION['inhalte'][].="fairytale";
			$_SESSION['inhalte'][].="religion";
			$_SESSION['inhalte'][].="culture";
            
}
            
			$ende=count($_SESSION['inhalte'])-1;

            echo "<br>Currently " . count($_SESSION['inhalte']) . " elements.<br><br>";

            
            $aktuell=rand(0, $ende);
            
            echo "<h2>";
			echo $_SESSION['inhalte'][$aktuell]."<br><br>";
            echo '</h2>';

            unset( $_SESSION['inhalte'][$aktuell] );
            $_SESSION['inhalte'] = array_values($_SESSION['inhalte']);

			?>

<br>

  
</div>
            </header> 
        </article> 
<input style="height:100px; width:100px" onClick="window.location.reload();" type="button" value="reload">
    </body> 
</html> 




