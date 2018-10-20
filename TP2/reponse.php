 <html>
    <head>  
     <title> Page d'Information - Imane Benchaiba </title>
	</head>
     <body topmargin="20" leftmargin="5" bgcolor="#AF3F34">  
	    <!--------------------- Tableau principal --------------------------->
	         <table border="3" bordercolor="red" bgcolor="white" align="left" width="750" height="90%" cellspacing="0" cellpadding="10">
	         <tr><td>
			  <?php  
	        //expression régulière pour avoir une date de naissance correcte 
		     $x1="#^[0-9]{2}\-[0-9]{2}\-[0-9]{4}$#";
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
				$prenom = $_POST['prenom'] ;
				$genre = $_POST['genre'];
				$civilite = $_POST['civilite'];
                $mail= $_POST['mail'];
                $num= $_POST['num'];	
                $primaire= $_POST['primaire'];
                $cem= $_POST['cem'];
                $lycee= $_POST['lycee'];
                $moyenne= $_POST['moyenne'];
                $pfe= $_POST['pfe'];	
                $adresse= $_POST['adresse'];	
				$commune= $_POST['commune'];
				$wilaya= $_POST['wilaya'];
				$adprimaire= $_POST['adprimaire'];
				$afprimaire= $_POST['afprimaire'];
				$adcem= $_POST['adcem'];
				$afcem= $_POST['afcem'];
				$adlycee= $_POST['adlycee'];
				$aflycee= $_POST['aflycee'];
				$adfac= $_POST['adfac'];
				$serie= $_POST['serie'];
				$mention= $_POST['mention'];
				
				
				
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
							         <td> <?php if($nom != "") echo $nom; else{ echo "Erreur"; echo'<a href="index.html"> Retour </a>' ; }  ?> </td> </tr>  
		                     <tr><td align="right"><strong>  <font face="Arial" size="3"> Pr&eacute;nom </font> </strong></td><td><strong>  <font face="Arial" size="3">  :</font> </strong></td> </font> </strong>  
							         <td> <?php if(empty($prenom)){ echo"Erreur"; echo '<a href="index.html"> Retour</a>' ; }  else echo($prenom); ?>   </tr>
			                 <tr><td align="right"><strong>  <font face="Arial" size="3"> Date de naissance </font> </strong></td> <td><strong>  <font face="Arial" size="3">  :</font> </strong></td> </font> </strong> 
							         <td>  <?php if($datenaiss != "") echo $datenaiss; else{ echo "Erreur"; echo'<a href="index.html"> Retour </a>' ; }  ?></tr> 
			                 <tr><td align="right"><strong>  <font face="Arial" size="3"> Lieu de naissance </font> </strong></td> <td><strong>  <font face="Arial" size="3">  :</font> </strong></td> </font> </strong> 
							         <td>  <?php if($lieunaiss != "") echo $lieunaiss; else{ echo "Erreur"; echo'<a href="index.html"> Retour </a>' ; }  ?> </tr> 
							 </table>
                        </table>
                   </table>	   
		  <!------------------------------------------------------------ Fin section une ----------------------------------------------------------------->
		<hr width="75%" color="red" size="2">    
		
		
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
							    <td> <?php if(empty($genre) ){ echo "Erreur"; echo'<a href="index.html"> Retour </a>' ; }  else echo $genre; ?>
							    </td>
							 </tr>
							 <tr>
							 	<td align="right"><font face="Arial" size="3"><strong> Civilit&eacute; </strong></font> 
							 	</td> 
							 	<td> <font face="Arial" size="3"> <strong>  : </strong></font> 
							 	</td>
							    <td> <?php if($civilite != "") echo $civilite; else{ echo "Erreur"; echo'<a href="index.html"> Retour </a>' ; }  ?>
							    </td>
						     </tr>
			                 <tr>
			                 	<td align="right"><font face="Arial" size="3"><strong> Adresse email </strong></font> </td> <td> <font face="Arial" size="3"> <strong> : </strong></font> </td>  
							     <td> <?php if($mail != "") echo $mail; else{ echo "Erreur"; echo'<a href="index.html"> Retour </a>' ; }  ?>
							     </td>
							 </tr>  
			                 <tr>
			                 	<td align="right"><font face="Arial" size="3"><strong> Num&eacute;ro de t&eacute;l&eacute;phone </strong></font> </td> <td> <font face="Arial" size="3"><strong>   : </strong></font> </td> 
							    <td>  <?php if($num != "") echo $num; else{ echo "Erreur"; echo'<a href="index.html"> Retour </a>' ; }  ?>
							    </td>
							 </tr>  
			                 <tr>
			                 	<td align="right"><font face="Arial" size="3"><strong> Adresse </strong></font> </td>  <td> <font face="Arial" size="3"><strong> : </strong></font>  </td> 
							    <td> <?php if($adresse != "") echo $adresse; else{ echo "Erreur"; echo'<a href="index.html"> Retour </a>' ; }  ?> 
							    </td>
							 </tr> 
			                 <tr>
			                 	<td align="right"><font face="Arial" size="3"><strong> Commune </strong></font> </td> <td> <font face="Arial" size="3"><strong> : </strong></font>  </td> 
							     <td> <?php if($commune != "") echo $commune; else{ echo "Erreur"; echo'<a href="index.html"> Retour </a>' ; }  ?>
							     </td> 
							 </tr> 
		                     <tr>
		                     	<td align="right"><font face="Arial" size="3"><strong> Wilaya </strong></font> </td> <td> <font face="Arial" size="3"><strong>  : </strong></font> </td> 
							     <td>  <?php if($wilaya != "") echo $wilaya; else{ echo "Erreur"; echo'<a href="index.html"> Retour </a>' ; }  ?> 
							     </td>
							 </tr> 
                            </table>				 
                         </table>
                    </table>
		 <!-- Fin section deux -->
        <hr width="500" color="blue" size="3">  
		
		
		  <!------------------------------------- Tableau de la section 3 ----------------------------------------->	 
	                <table border="2" bordercolor="orange" bgcolor=silver align="center" width="90%" height="10%" cellspacing="0" cellpadding="10">
	                <tr><td>
		<!----------------------------------------- Debut section trois --------------------------------------->
		                 <font face="Verdana" size="3" color="red"> <h1 align=center > Informations sur le Cursus  </h1> </font>
						 <!-------   tableau invisible pour aligner les informations ---------->
		                 <table border="1" bordercolor="black" bgcolor=#E05E51 align="center" width="80%" height="10%" cellspacing="0" cellpadding="10">
	                     <tr><td>
						      <!----------------------------------------- Cycle primaire --------------------------------------->
		                      <ol>
								<li>  <font face="Arial" size="3"><strong>  Cycle Primaire </strong></font> 			              
									<ul type="disc"><li> <font face="Arial" size="3"><strong>  Ecole : </strong></font>  
									                       <?php 
									                        if($primaire != "") echo $primaire; else{ echo "Erreur"; echo'<a href="index.html"> Retour </a>' ; }  ?>
												    </li>
												    <li> <font face="Arial" size="3"><strong>  Ann&eacute;e de d&eacute;but : </strong></font> 
													       <?php if($adprimaire != "") echo $adprimaire; else{ echo "Erreur"; echo'<a href="index.html"> Retour </a>' ; }  ?>
													</li>
													<li> <font face="Arial" size="3"><strong>  Ann&eacute;e de fin : </strong></font>
													 
  													       <?php 
														   //vérifier si l'année de début du cycle primaire plus la durée est au moins égale à l'année de fin du cycle primaire
  													       $verifp = $adprimaire + 6 ;
  													       if($afprimaire >= $verifp && $afprimaire <= $adcem) echo $afprimaire; else{ echo "Erreur ann&eacute;e incorrecte"; echo'<a href="index.html"> Retour </a>' ; }  ?>
													</li>
									</ul>
								</li>			 
					          
							  
                              <!----------------------------------------- Cycle Moyen --------------------------------------->
				              <li>  <font face="Arial" size="3"><strong> Cycle Moyen </strong></font> 			      				      
								<ul><li>  <font face="Arial" size="3"><strong> CEM : </strong></font>  
								          <?php if($cem != "") echo $cem; else{ echo "Erreur"; echo'<a href="index.html"> Retour </a>' ; }  ?>
									</li>
									<li>  <font face="Arial" size="3"><strong> Ann&eacute;e de d&eacute;but : </strong></font>
 									      <?php if($adcem != "") echo $adcem; else{ echo "Erreur"; echo'<a href="index.html"> Retour </a>' ; }  ?>
									</li>
									<li>  <font face="Arial" size="3"><strong> Ann&eacute;e de fin : </strong></font>
 									      <?php 
										   //vérifier si l'année de début du cycle moyen plus la durée est au moins égale à l'année de fin du cycle moyen
 									      $verifc = $adcem + 4 ;
 									      if($afcem >= $verifc && $afcem <= $adlycee) echo $afcem; else{ echo "Erreur ann&eacute;e incorrecte"; echo'<a href="index.html"> Retour </a>' ; }  
 									      ?>
									</li>
								</ul>
					          </li>
				
				              <!----------------------------------------- Cycle secondaire --------------------------------------->
				              <li>   <font face="Arial" size="3"><strong> Cycle Secondaire </strong></font> 				             
								<ul type="square">
									<li>   <font face="Arial" size="3"><strong> Lycee : </strong></font>  
									       <?php if($lycee != "") echo $lycee; else{ echo "Erreur"; echo'<a href="index.html"> Retour </a>' ; }  ?>
								    </li>
									<li>   <font face="Arial" size="3"><strong> Ann&eacute;e de d&eacute;but : </strong></font>
									       <?php if($adlycee != "") echo $adlycee; else{ echo "Erreur"; echo'<a href="index.html"> Retour </a>' ; }  ?>
									</li>  
									<li>   <font face="Arial" size="3"><strong> Ann&eacute;e de fin : </strong></font> 
									       <?php 
										   //vérifier si l'année de début du cycle secondaire plus la durée est au moins égale à l'année de fin du cycle secondaire
									       $verifl = $adlycee + 3 ;
									       if($aflycee >= $verifl && $aflycee <= $adfac) echo $aflycee; else{ echo "Erreur ann&eacute;e incorrect"; echo'<a href="index.html"> Retour </a>' ; }  ?>
									</li> 
									<li>   <font face="Arial" size="3"><strong> Bac : </strong></font> 
										<dl>
											<dt><p><strong> S&eacute;rie: </strong></p>
												<dd> <?php if($serie != "") echo $serie; else{ echo "Erreur"; echo'<a href="index.html"> Retour </a>' ; }  ?>
											<dt><p><strong> Mention: </strong></p>
												<dd> <?php if($mention != "") echo $mention; else{ echo "Erreur"; echo'<a href="index.html"> Retour </a>' ; }  


													?>
											<dt><p><strong> Moyenne: </strong></p>
												<dd><?php
												        //expression régulière pour vérifier si la moyenne du bac est un réel
														$t = preg_match("#^[0-9]{2}\.[0-9]{2}$#", $moyenne) ;
														if ($t)
															if($moyenne<= 19.99 && $moyenne>= 10.00) echo $moyenne; 
															else{ echo "Erreur"; echo'<a href="index.html"> Retour </a>' ; }
														else{
															echo "Erreur Format" ;echo'<a href="index.html"> Retour </a>' ;
														}
													  ?>
										</dl>		
									</li>
								</ul>
							  </li>
				             
				             <li>   <font face="Arial" size="3"><strong> Cycle Universitaire </strong></font> 			             			     
								<ul><li>   <font face="Arial" size="3"><strong> Ann&eacute;e de d&eacute;but : </strong></font>
								               <?php if($adfac != "") echo $adfac; else{ echo "Erreur"; echo'<a href="index.html"> Retour </a>' ; }  ?>
     								</li> 
									<li>   <font face="Arial" size="3"><strong>  Titre P.F.E : </strong></font>  
									           <?php if($pfe != "") echo $pfe; else{ echo "Erreur"; echo'<a href="index.html"> Retour </a>' ; }  ?>  
									</li>
								</ul>
							 </li>
			                 </ol>
                       </table>
                   </table>
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
								  if( $i == 0) echo "Aucun centre d&acute;int&eacute;r&ecirc;t"
															    							       
							?>
							
							
					    </table>
				    </table>
             </table>
				
     </body>
 </html>