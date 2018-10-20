 <html>
    <head>  
     <title> Page d'Information - Imane Benchaiba </title>
	</head>
     <body topmargin="20" leftmargin="5" bgcolor="#AF3F34">
     	 	<?php if(!isset($_POST['envoyer4'])){?>
		<!----------------------------------------- Section divers --------------------------------------->
<!--------------------- Tableau principal --------------------------->
	         <table border="3" bordercolor="red" bgcolor="white" align="left" width="750" height="90%" cellspacing="0" cellpadding="10">
	         <tr><td>	 
		<form method="post" action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" >			 
				     <!----------------------------- tableau de la section divers --------------------------------------------------->
					 <table border="2" bordercolor="orange" bgcolor=silver align="center" width="90%" height="10%" cellspacing="0" cellpadding="10">
	                <tr><td>
					
			        <h1 align=center ><font face="Verdana"  color="red"> Divers </font> </h1>
			    	<table border="1" bordercolor="black" bgcolor=#E05E51 align="center" width="80%" height="10%" cellspacing="0" cellpadding="10">
	                <tr><td>
					    <table  border="0" align="center" cellspacing="0" cellpadding="5">
					    <tr><font face="Arial" size="3"><strong> Centre d'int&eacute;r&ecirc;ts : </strong></font>  
					       
							<tr><td> <label><input type="checkbox" name="lecture" value="Lecture"/>Lecture</label> </td></tr>
							<tr><td> <label><input type="checkbox" name="religion" value="Religion"/>Religion</label> </td></tr>
							<tr><td> <label><input type="checkbox" name="musique" value="Musique"/>Musique</label> </td></tr>
							<tr><td> <label><input type="checkbox" name="television" value="Television"/>T&eacute;l&eacute;vision</label> </td></tr>
							<tr><td> <label><input type="checkbox" name="cinema" value="Cinema"/>Cin&eacute;ma</label> </td></tr>
							<tr><td> <label><input type="checkbox" name="reseau" value="Reseaux sociaux"/>R&eacute;seaux sociaux</label> </td></tr>
							<tr><td> <label><input type="checkbox" name="cuisine" value="Cuisine"/>Cuisine</label> </td></tr>
							<tr><td> <label><input type="checkbox" name="jeux" value="Jeux"/>Jeux</label> </td></tr>
							<tr><td> <label><input type="checkbox" name="technologie" value="Nouvelle technologie"/>Nouvelle Technologie</label> </td></tr>
							
					    </table>
				    </table>
					<tr><td align="center"><input type="submit" name="envoyer4" /></td></tr>
                   </table> 
			  </form>  					
			</table>	  

			<?php }
		         else {?>
	        <!-- Fin section trois -->
			<!----------------------------- tableau de la section divers --------------------------------------------------->
					 <table border="2" bordercolor="orange" bgcolor=silver align="center" width="90%" height="10%" cellspacing="0" cellpadding="10">
	                <tr><td>
					<!----------------------------------------- Section divers --------------------------------------->
			        <h1 align=center ><font face="Verdana"  color="red"> Divers </font> </h1>
					<!-------   tableau invisible pour aligner les informations ---------->
			    	<table border="1" bordercolor="black" bgcolor=#E05E51 align="center" width="80%" height="10%" cellspacing="0" cellpadding="10">
	                <tr><td>
					    <table  border="0" align="center" cellspacing="0" cellpadding="5">
					    <tr><font face="Arial" size="3"><strong> Centre d'int&eacute;r&ecirc;ts : </strong></font>  
					        <?php
							    // afficher les centres d'intérêts choisis
					        	$i=0;
					        	  if(empty($_POST['lecture'])) echo " "; else{echo  $_POST['lecture']; $i++;} 
							      if(empty($_POST['religion']) )  echo " "; else{ echo  $_POST['religion']; $i++;} 
							      if(empty($_POST['television']) )  echo " "; else{ echo  $_POST['television']; $i++;} 
							      if(empty($_POST['cinema']) )  echo " "; else{ echo  $_POST['cinema']; $i++;}
							      if(empty($_POST['reseau']) )  echo " "; else{ echo  $_POST['reseau']; $i++;}  
							      if(empty($_POST['cuisine']) )  echo " "; else{ echo  $_POST['cuisine']; $i++;} 
							      if(empty($_POST['jeux']) )  echo " "; else{ echo $_POST['jeux']; $i++;}
							      if(empty($_POST['technologie']) )  echo " "; else{ echo $_POST['technologie']; $i++;}  
								  if( $i == 0) echo "Aucun centre d&acute;int&eacute;r&ecirc;t";

								 if ( file_exists('../TP5/nb.txt') == 'TRUE')
								  $monfichier = fopen('../TP5/nb.txt', 'r+' );
								else 
									echo "no" ;
					/*$pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
$pages_vues++; // On augmente de 1 ce nombre de pages vues
fseek($monfichier, 0); // On remet le curseur au début du fichier
fputs($monfichier, $pages_vues); // On écrit le nouveau nombre de pages vues

fclose($monfichier);

echo '<p>Cette page a été vue '.$pages_vues.' fois !</p>';*/
															    							       
							?>
							
							
					    </table>
				    </table>
             </table>
				
            <?php
             }
             ?>

     </body>
 </html>