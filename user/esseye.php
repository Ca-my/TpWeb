<?php  
 session_start();
 $_SESSION['input'] = "sec1" ;
 
?>
 <html>
    <head>  
     <title> Page d'Information - Imane Benchaiba </title>
	</head>
     <body topmargin="20" leftmargin="5" bgcolor="#AF3F34">
     <?php
     	$input = $_SESSION['input'];
     	unset($_SESSION);
        echo $input."dddd";
   	  	switch ($input) {
   	  		case 'sec1C':
   	  		?>
   	  		 <table border="3" bordercolor="red" bgcolor="white" align="left" width="750" height="90%" cellspacing="0" cellpadding="10">
	         <tr><td>
			  <?php  
	            $datenaiss= $_POST['date'];
                $lieunaiss= $_POST['lieunaiss'];
				$nom = $_POST['nom'];
				$prenom = $_POST['prenom'] ;
				
				
	          ?>
		 <!--------------------- Tableau de la section 1 --------------------------->
	             <table border="2" bordercolor="orange" bgcolor="silver" align="center" width="90%" height="10%" cellspacing="0" cellpadding="10">
	               <tr><td>
	    
		
		  <!----------------------------------------------------------- Debut section une -------------------------------------------------------------> 
	                     <h1 align=center ><font face="Verdana"  color="red">  Informations Personnelles </font> </h1>  
						 <!-------   tableau invisible pour aligner les informations ---------->
		                 <table border="1" bordercolor="black" bgcolor="#E05E51" align="center" width="80%" height="10%" cellspacing="0" cellpadding="10">
	                     <tr><td>
		                     <table border="0"  align="center" cellspacing="0" cellpadding="5" >
		                     <tr><td align="right"><strong>  <font face="Arial" size="3"> Nom </font> </strong> </td>  <td><strong>  <font face="Arial" size="3">  :</font> </strong> </td>
							         <td> <?php if($nom != "") echo $nom; else{ echo "Erreur"; echo'<a href="index.php"> Retour </a>' ; }  ?> </td> </tr>  
		                     <tr><td align="right"><strong>  <font face="Arial" size="3"> Pr&eacute;nom </font> </strong></td><td><strong>  <font face="Arial" size="3">  :</font> </strong></td> </font> </strong>  
							         <td> <?php if(empty($prenom)){ echo"Erreur"; echo '<a href="index.php"> Retour</a>' ; }  else echo($prenom); ?>   </tr>
			                 <tr><td align="right"><strong>  <font face="Arial" size="3"> Date de naissance </font> </strong></td> <td><strong>  <font face="Arial" size="3">  :</font> </strong></td> </font> </strong> 
							         <td>  <?php if($datenaiss != "") echo $datenaiss; else{ echo "Erreur"; echo'<a href="index.php"> Retour </a>' ; }  ?></tr> 
			                 <tr><td align="right"><strong>  <font face="Arial" size="3"> Lieu de naissance </font> </strong></td> <td><strong>  <font face="Arial" size="3">  :</font> </strong></td> </font> </strong> 
							         <td>  <?php if($lieunaiss != "") echo $lieunaiss; else{ echo "Erreur"; echo'<a href="index.php"> Retour </a>' ; }  ?> </tr> 
							 </table>
                        </table>
                   </table>	
                   <form method="post" action="<?php echo $_SERVER['SCRIPT_NAME']; ?>">
                   	    <input type="submit" name="secS" value="suivant">
                   	    
                   </form>
                 </table>   
   	  	<?php
   	  			break;
   	  		
   	  		case 'sec1':
   	  			
   	    ?>
	    <!--------------------- Tableau principal --------------------------->
	    <table border="3" bordercolor="red" bgcolor="white" align="left" width="750" height="90%" cellspacing="0" cellpadding="10">
	         <tr><td>
		 <!--------------------- Tableau de la section 1 --------------------------->
		    <form method="post" action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" >
	            <table border="2" bordercolor="orange" bgcolor="silver" align="center" width="90%" height="10%" cellspacing="0" cellpadding="10">
	               <tr><td>
	     <!----------------- Debut section une ----------------------------> 
	                     <h1 align=center ><font face="Verdana"  color="red">  Informations Personnelles </font> </h1>  
		                 <?php  
		                 
		                	$_SESSION['input'] = "sec1C" ;
		                 ?>
				    	
				      <table border="1" bordercolor="black" bgcolor="#E05E51" align="center" width="80%" height="10%" cellspacing="0" cellpadding="10">
	                     <tr><td>
		                <table border="0"  align="center" cellspacing="0" cellpadding="5" >
		                     <tr><td align="right"><strong>  <font face="Arial" size="3"> Nom </font> </strong> </td>  
							     <td><strong>  <font face="Arial" size="3">  :</font> </strong> </td>
							     <td> <input type="text" name="nom"/>   </td> 
							 </tr>  
		                     <tr><td align="right"><strong>  <font face="Arial" size="3"> Pr&eacute;nom </font> </strong></td>
							     <td><strong>  <font face="Arial" size="3">  :</font> </strong></td> </font> </strong>  
								 <td> <input type="text" name="prenom"/> </td>
							 </tr> 
			                 <tr><td align="right"><strong>  <font face="Arial" size="3"> Date de naissance </font> </strong></td> 
							     <td><strong>  <font face="Arial" size="3">  :</font> </strong></td> </font> </strong> 
								 <td>  <input type="text" name="date"/> </td>
							 </tr>
			                 <tr><td align="right"><strong>  <font face="Arial" size="3"> Lieu de naissance </font> </strong></td> 
							     <td><strong>  <font face="Arial" size="3">  :</font> </strong></td> </font> </strong> 
								 <td>  <input type="text" name="lieunaiss"/> </td>
							 </tr>
							   		
						   </table>	 
					   </table>
					 <tr><td colspan="2" align="center"><input type="submit" name="sec1C" value="suivant" /></td></tr>  
                   </table>
 				</form>
          </td></tr>
        </table>	   
		  <!-- Fin section une -->
		  <!--     <hr width="75%" color="red" size="2">  -->   
	<?php
		break;
	  }
	?>
	        
         <?php
         	 if (isset($_POST['secS'])) {
         ?>

		<table border="3" bordercolor="red" bgcolor="white" align="left" width="750" height="90%" cellspacing="0" cellpadding="10">
	         <tr><td>	
		 <!------------------------------------- Tableau de la section 2 ----------------------------------------->
			 <form method="post" action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" >
	                <table border="2" bordercolor="orange" bgcolor=silver align="center" width="90%" height="10%" cellspacing="0" cellpadding="10">
	                <tr><td>
		  <!------------------------------------- Debut section deux ----------------------------------------->
		                 <font face="Verdana" size="3" color="red"> <h1> <p align=center >Informations de Contact  </h1>  </p></font>
		                 <table border="1" bordercolor="black" bgcolor=#E05E51 align="center" width="80%" height="10%" cellspacing="0" cellpadding="10">
	                     <tr><td>
			                 <table  border="0" align="center" cellspacing="0" cellpadding="5">
							 <tr><td align="right"><font face="Arial" size="3"><strong> Genre </strong></font> </td> 
							     <td> <font face="Arial" size="3"> <strong>  : </strong></font> </td>  
								 <td> <label><input type="radio" name="genre" required value="Feminin"/>F&eacute;minin</label>
							          <label><input type="radio" name="genre" required value="Masculin"/>Masculin</label>
								 </td>
							 </tr> 
							 <tr><td align="right"><font face="Arial" size="3"><strong> Civilit&eacute; </strong></font> </td> 
							     <td> <font face="Arial" size="3"> <strong>  : </strong></font> </td>  
								 <td> <label><input type="radio" name="civilite" required value="Marie"/>Mari&eacute;</label>
								      <label><input type="radio" name="civilite" required value="Celibataire"/>C&eacute;libataire</label>
								 </td>
							 </tr> 
			                 <tr><td align="right"><font face="Arial" size="3"><strong> Adresse email </strong></font> </td> 
							     <td> <font face="Arial" size="3"> <strong>  : </strong></font> </td>  
								 <td> <input type="text" name="mail"/></td>
							 </tr>  
			                 <tr><td align="right"><font face="Arial" size="3"><strong> Num&eacute;ro de t&eacute;l&eacute;phone </strong></font> </td> 
							     <td> <font face="Arial" size="3"><strong>   : </strong></font> </td> 
								 <td>  <input type="text" name="num"/></td>
							 </tr>  
			                 <tr><td align="right"><font face="Arial" size="3"><strong> Adresse </strong></font> </td> 
     							 <td> <font face="Arial" size="3"><strong>   : </strong></font>  </td> 
								 <td><textarea name="adresse"></textarea>  </td>
							 </tr> 
			                 <tr><td align="right"><font face="Arial" size="3"><strong> Commune </strong></font> </td> 
							     <td> <font face="Arial" size="3"><strong>   : </strong></font>  </td> 
							     <td> <select name="commune"><option value="">  </option>
								                             <option name="Thenia"> Thenia </option>
									                         <option name="Si Mustapha"> Si Mustapha </option>
									  </select> 
							 </tr> 
		                     <tr><td align="right"><font face="Arial" size="3"><strong> Wilaya </strong></font> </td> 
							     <td> <font face="Arial" size="3"><strong>   : </strong></font> </td> 
							     <td>  <select name="wilaya">    <option value="">  </option>
								                                 <option value="Adrar"> Adrar </option>
                                                                 <option value="Chlef"> Chlef </option>
																 <option value="Aghouat"> Aghouat </option>
																 <option value="Oum Bouaki"> Oum Bouaki </option>
																 <option value="Batna"> Batna </option>
																 <option value="Bejaia"> Bejaia </option>
																 <option value="Biskra"> Biskra </option>
																 <option value="Bechar"> Bechar </option>
																 <option value="Blida"> Blida </option>
																 <option value="Bouira"> Bouira </option>
																 <option value="Tamanrasset"> Tamanrasset </option>
																 <option value="Tebassa"> Tebassa </option>
																 <option value="Tlemcen"> Tlemcen </option>
																 <option value="Tiaret"> Tiaret </option>
																 <option value="Tizi"> Tizi </option>
																 <option value="Boumerdes"> Boumerdes </option>
										</select> 
							 </tr>                                                                                                                                                                                   
                            </table>	 
					   </table>
					 <tr><td colspan="2" align="center"><input type="submit" name="sec2" value="suivant"/></td></tr>  
                   </table>
 				</form>
        </table>
		 <!-- Fin section deux -->
        <!--   <hr width="500" color="blue" size="3">  -->
		<?php 
			 
		?>
			 <table border="3" bordercolor="red" bgcolor="white" align="left" width="750" height="90%" cellspacing="0" cellpadding="10">
	         <tr><td>
			  <?php  
	        //expression régulière pour avoir une date de naissance correcte 
		    /* $x1="#^[0-9]{2}\-[0-9]{2}\-[0-9]{4}$#";
	         $x2="#^[0-9]{2}/[0-9]{2}/[0-9]{4}$#";
				 if (empty($_POST['date'])==1){
						echo "erreur !!";
						
						 }
			//vérifier si la syntaxe de la date de naissance est correcte 			 
			     else { if((!preg_match($x1,$_POST['date']))&&(!preg_match($x2,$_POST['date']))) 
				        { echo "Format de la date non valide\n";}
						 else { 
							 if((preg_match($x2,$_POST['date']))){
								$res=explode("/",$_POST['date']);}
							 else{ $res=explode("-",$_POST['date']);}
			//vérifier la validité de la date par rapport à la date actuelle				 
							if(checkdate($res[1],$res[0],$res[2])){
								 $age=(int) ((time()-strtotime($_POST['date']))/(3600 * 24 * 365));
							 }
						}
					  }
			//afficher le msg "Bienvenue [madame, mademoiselle, monsieur] [prénom] [nom] [age]		
				if ($_POST['genre']=="Feminin" && $_POST['civilite']=="Marie")
					echo '<h2 align="center"> Bienvenue Madame ['.$_POST['prenom'].'] ['. $_POST['nom'].'] ['.$age.' ans]</h2> ';
	 			else if ($_POST['genre']=="Feminin" && $_POST['civilite']=="Celibataire")
		   				echo '<h2 align="center"> Bienvenue Mademoiselle ['.$_POST['prenom'].'] ['. $_POST['nom'].'] ['.$age.' ans]</h2>';
	        		else
			    		echo '<h2 align="center"> Bienvenue Monsieur ['.$_POST['prenom'].'] ['. $_POST['nom'].'] ['.$age.' ans]</h2>';
	
                $datenaiss= $_POST['date'];
                $lieunaiss= $_POST['lieunaiss'];
				$nom = $_POST['nom'];
				$prenom = $_POST['prenom'] ;*/
				$genre = $_POST['genre'];
				$civilite = $_POST['civilite'];
                $mail= $_POST['mail'];
                $num= $_POST['num'];	
                $adresse= $_POST['adresse'];	
				$commune= $_POST['commune'];
				$wilaya= $_POST['wilaya'];
				
				
				
				
		 ?>
		          <table border="2" bordercolor="orange" bgcolor="silver" align="center" width="90%" height="10%" cellspacing="0" cellpadding="10">
	               <tr><td>
	      
		 <!------------------------------------- Tableau de la section 2 ----------------------------------------->
	                <table border="2" bordercolor="orange" bgcolor=silver align="center" width="90%" height="10%" cellspacing="0" cellpadding="10">
	                <tr><td>
		  <!---------------------------------------------------------------------- Debut section deux ------------------------------------------------------>
		                 <font face="Verdana" size="3" color="red"> <h1> <p align=center >Informations de Contact  </h1>  </p></font>
						  <!-------   tableau invisible pour aligner les informations ---------->
		                 <table border="1" bordercolor="black" bgcolor=#E05E51 align="center" width="80%" height="10%" cellspacing="0" cellpadding="10">
	                     <tr><td>
			                 <table  border="0" align="center" cellspacing="0" cellpadding="5">
							 <tr>
							 	<td align="right"><font face="Arial" size="3"><strong> Genre </strong></font>
							    </td> 
							    <td> <font face="Arial" size="3"> <strong>  : </strong></font> 
							 	</td>
							    <td> <?php if(empty($genre) ){ echo "Erreur"; echo'<a href="index.php"> Retour </a>' ; }  else echo $genre; ?>
							    </td>
							 </tr>
							 <tr>
							 	<td align="right"><font face="Arial" size="3"><strong> Civilit&eacute; </strong></font> 
							 	</td> 
							 	<td> <font face="Arial" size="3"> <strong>  : </strong></font> 
							 	</td>
							    <td> <?php if($civilite != "") echo $civilite; else{ echo "Erreur"; echo'<a href="index.php"> Retour </a>' ; }  ?>
							    </td>
						     </tr>
			                 <tr>
			                 	<td align="right"><font face="Arial" size="3"><strong> Adresse email </strong></font> </td> <td> <font face="Arial" size="3"> <strong> : </strong></font> </td>  
							     <td> <?php if($mail != "") echo $mail; else{ echo "Erreur"; echo'<a href="index.php"> Retour </a>' ; }  ?>
							     </td>
							 </tr>  
			                 <tr>
			                 	<td align="right"><font face="Arial" size="3"><strong> Num&eacute;ro de t&eacute;l&eacute;phone </strong></font> </td> <td> <font face="Arial" size="3"><strong>   : </strong></font> </td> 
							    <td>  <?php if($num != "") echo $num; else{ echo "Erreur"; echo'<a href="index.php"> Retour </a>' ; }  ?>
							    </td>
							 </tr>  
			                 <tr>
			                 	<td align="right"><font face="Arial" size="3"><strong> Adresse </strong></font> </td>  <td> <font face="Arial" size="3"><strong> : </strong></font>  </td> 
							    <td> <?php if($adresse != "") echo $adresse; else{ echo "Erreur"; echo'<a href="index.php"> Retour </a>' ; }  ?> 
							    </td>
							 </tr> 
			                 <tr>
			                 	<td align="right"><font face="Arial" size="3"><strong> Commune </strong></font> </td> <td> <font face="Arial" size="3"><strong> : </strong></font>  </td> 
							     <td> <?php if($commune != "") echo $commune; else{ echo "Erreur"; echo'<a href="index.php"> Retour </a>' ; }  ?>
							     </td> 
							 </tr> 
		                     <tr>
		                     	<td align="right"><font face="Arial" size="3"><strong> Wilaya </strong></font> </td> <td> <font face="Arial" size="3"><strong>  : </strong></font> </td> 
							     <td>  <?php if($wilaya != "") echo $wilaya; else{ echo "Erreur"; echo'<a href="index.php"> Retour </a>' ; }  ?> 
							     </td>
							 </tr> 
                            </table>				 
                         </table>
                    </table>

           <?php
           		
           ?>
		<table border="3" bordercolor="red" bgcolor="white" align="left" width="750" height="90%" cellspacing="0" cellpadding="10">
	         <tr><td>
	         	<form method="post" action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" >
		  <!------------------------------------- Tableau de la section 3 ----------------------------------------->	 
	                <table border="2" bordercolor="orange" bgcolor=silver align="center" width="90%" height="10%" cellspacing="0" cellpadding="10">
	                <tr><td>
		<!----------------------------------------- Debut section trois --------------------------------------->
		                 <font face="Verdana" size="3" color="red"> <h1 align=center > Informations sur le Cursus  </h1> </font>
		                 <table border="1" bordercolor="black" bgcolor=#E05E51 align="center" width="80%" height="10%" cellspacing="0" cellpadding="10">
	                     <tr><td>
						      <!----------------------------------------- Cycle primaire --------------------------------------->
		                      <ol>
								<li>  <font face="Arial" size="3"><strong>  Cycle Primaire </strong></font> 			              
									<ul type="disc"><li> <font face="Arial" size="3"><strong>  Ecole : </strong></font>  <input type="text" name="primaire"/></li>
												    <li> <font face="Arial" size="3"><strong>  Ann&eacute;e de d&eacute;but : </strong></font>
													     <select name="adprimaire">
														       <option value="">  </option>
														       <option value="2001"> 2001 </option>
															   <option value="2002"> 2002 </option>
															   <option value="2003"> 2003 </option>
															   <option value="2004"> 2004 </option>
															   <option value="2005"> 2005 </option>
															   <option value="2006"> 2006 </option>
														 </select> </li>
													<li> <font face="Arial" size="3"><strong>  Ann&eacute;e de fin : </strong></font>  
													      <select name="afprimaire">
														       <option value="">  </option>
															   <option value="2005"> 2005 </option>
														       <option value="2006" >2006</option>
															   <option value="2007" >2007</option>
															   <option value="2008" >2008</option>
														   	   <option value="2009" >2009</option>
														 </select> </li>
									</ul>
								</li>			 
					          
							  
                              <!----------------------------------------- Cycle Moyen --------------------------------------->
				              <li>  <font face="Arial" size="3"><strong> Cycle Moyen </strong></font> 			      				      
								<ul><li>  <font face="Arial" size="3"><strong> CEM : </strong></font>  <input type="text" name="cem"/></li>
									<li>  <font face="Arial" size="3"><strong> Ann&eacute;e de d&eacute;but : </strong></font> 									       
												         <select name="adcem">
														       <option value="">  </option>
														       <option value="2007" >2007</option>
															   <option value="2008" >2008</option>
															   <option value="2009" >2009</option>
															   <option value="2010" >2010</option>
														 </select> </li>
 												
									<li>  <font face="Arial" size="3"><strong> Ann&eacute;e de fin : </strong></font> 
									                     <select name="afcem">
														       <option value="">  </option>
														       <option value="2011" >2011</option>
															   <option value="2012" >2012</option>
															   <option value="2013" >2013</option>
															   <option value="2014" >2014</option>
														 </select> </li>
								</ul>
					          </li>
				
				              <!----------------------------------------- Cycle secondaire --------------------------------------->
				              <li>   <font face="Arial" size="3"><strong> Cycle Secondaire </strong></font> 				             
								<ul type="square">
									<li>   <font face="Arial" size="3"><strong> Lycee : </strong></font>  <input type="text" name="lycee"/></li>
									<li>   <font face="Arial" size="3"><strong> Ann&eacute;e de d&eacute;but : </strong></font>
                                                          <select name="adlycee">
														       <option value="">  </option>
														       <option value="2014" >2014</option>
															   <option value="2015" >2015</option>
															   <option value="2016" >2016</option>
															   <option value="2017" >2017</option>
														 </select> </li>									
									<li>   <font face="Arial" size="3"><strong> Ann&eacute;e de fin : </strong></font> 
									                      <select name="aflycee">
														       <option value="">  </option>
														       <option value="2015" >2015</option>
															   <option value="2016" >2016</option>
															   <option value="2017" >2017</option>
															   <option value="2018" >2018</option>
														 </select> </li>
									<li>   <font face="Arial" size="3"><strong> Bac : </strong></font> 
										<dl>
											<dt><p><strong> S&eacute;rie: </strong></p>
												<dd><select name="serie">
												               <option value="">  </option>
														       <option value="Science"> Science </option>
															   <option value="Math"> Math </option>
															   <option value="Lettre"> Lettre </option>
													</select> </li>
											<dt><p><strong> Mention: </strong></p>
												<dd><select name="mention">
												               <option value="">  </option>
														       <option value="Bien"> Bien </option>
															   <option value="Eccelent"> Eccelent </option>
												    </select> </li>
											<dt><p><strong> Moyenne: </strong></p>
												<dd><input type="text" name="moyenne"/>
										</dl>		
									</li>
								</ul>
							  </li>
				             
				             <li>   <font face="Arial" size="3"><strong> Cycle Universitaire </strong></font> 			             			     
								<ul><li>   <font face="Arial" size="3"><strong> Ann&eacute;e de d&eacute;but : </strong></font>  
								                 <select name="adfac"> 
												       <option value="">  </option>
												       <option value="2014" >2014</option>
													   <option value="2015" >2015</option>
											           <option value="2016" >2016</option>
													   <option value="2017" >2017</option>
												 </select> </li> 
									<li>   <font face="Arial" size="3"><strong>  Titre P.F.E : </strong></font>   <input type="text" name="pfe"/>   </li>
								</ul>
							 </li>
			                 </ol>
					
					   </table>
					 <tr><td colspan="2" align="center"><input type="submit" name="sec3" value="suivant"/></td></tr>  
                   </table>
 				</form>

                  </td> </tr>
            </table>





            <table border="3" bordercolor="red" bgcolor="white" align="left" width="750" height="90%" cellspacing="0" cellpadding="10">
	         <tr><td>
	         	<form method="post" action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" >
				     <!----------------------------- tableau de la section divers --------------------------------------------------->
					 <table border="2" bordercolor="orange" bgcolor=silver align="center" width="90%" height="10%" cellspacing="0" cellpadding="10">
	                <tr><td>
					<!----------------------------------------- Section divers --------------------------------------->
			        <h1 align=center ><font face="Verdana"  color="red"> Divers </font> </h1>
			    	<table border="1" bordercolor="black" bgcolor=#E05E51 align="center" width="80%" height="10%" cellspacing="0" cellpadding="10">
	                <tr><td>
					    <table  border="0" align="center" cellspacing="0" cellpadding="5">
					    <tr><font face="Arial" size="3"><strong> Centre d'int&eacute;r&ecirc;ts : </strong></font>  
					       
							<tr><td> <label><input type="checkbox" name="lecture" value="Lecture"/>Lecture</label> </td></tr>
							<tr><td> <label><input type="checkbox" name="religion" value="Religion"/>Religion</label> </td></tr>
							<tr><td> <label><input type="checkbox" name="musique" value="Musique"/>Musique</label> </td></tr>
							<tr><td> <label><input type="checkbox" name="television" value="Télévision"/>T&eacute;l&eacute;vision</label> </td></tr>
							<tr><td> <label><input type="checkbox" name="cinema" value="Cinéma"/>Cin&eacute;ma</label> </td></tr>
							<tr><td> <label><input type="checkbox" name="reseau" value="Réseaux sociaux"/>R&eacute;seaux sociaux</label> </td></tr>
							<tr><td> <label><input type="checkbox" name="cuisine" value="Cuisine"/>Cuisine</label> </td></tr>
							<tr><td> <label><input type="checkbox" name="jeux" value="Jeux"/>Jeux</label> </td></tr>
							<tr><td> <label><input type="checkbox" name="technologie" value="Nouvelle technologie"/>Nouvelle Technologie</label> </td></tr>
								 
					    </table>
				    </table>
					 <tr><td colspan="2" align="center"><input type="submit" name="valider" value="suivant"/></td></tr>
				   </form> 
	        <!-- Fin section trois -->
             </table>
            </td></tr>
        </table>
			<?php
			 }
			?>
     </body>
 </html>