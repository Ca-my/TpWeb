 <html>
    <head>  
     <title> Page d'Information - Imane Benchaiba </title>
	</head>
     <body topmargin="20" leftmargin="5" bgcolor="#AF3F34">  
	 <?php  	global $pg, $err1,$err2 ,$type , $err3;			
				session_start();		
				$_SESSION['nbpage'] = 1;
						
				if(isset($_POST['envoyer1']) ){
					$err1=4;
					$pg = 1;
					$_SESSION['nbpage'] = 2;	
				}elseif(isset($_POST['envoyer2'])){
					$err2=7;
					$pg = 2;
					$_SESSION['nbpage'] = 3;
				}elseif(isset($_POST['retour1'])){
					$_SESSION['nbpage'] = 1;
				}elseif(isset($_POST['envoyer3'])){
			        $err3=14;
					$pg = 3;
					$_SESSION['nbpage'] = 4;
				}elseif(isset($_POST['retour2'])){
					$_SESSION['nbpage'] = 2;
				}elseif(isset($_POST['envoyer4'])){
					$pg = 4;
					$_SESSION['nbpage'] = 5;
				}elseif(isset($_POST['retour3'])){
					$_SESSION['nbpage'] = 3;
				}
		if($_SESSION['nbpage'] == 1 || ( $pg==1 && $err1 > 0 ) ) { 		
		        $n1="#^[A-Z][a-z]+$#";
				$n2="#^[A-Z][a-z]+[\-''][A-Z][a-z]+$#";
				if (!empty($_POST['nom'])&&(preg_match($n1,$_POST['nom'])||(preg_match($n2,$_POST['nom'])))){
					$t[1] = 0;
					$err1 --;
				} else {
                    $t[1] =1;
				}  
				 if (!empty($_POST['prenom'])&&(preg_match($n1,$_POST['prenom'])||(preg_match($n2,$_POST['prenom'])))){
					 $t[2] =0;
					 $err1 --;
				} else {
						$t[2] =1;
				} 
						if(isset($_POST) && !empty($_POST)){
                          $_SESSION['nom'] = $_POST['nom'];
                          $_SESSION['prenom'] = $_POST['prenom'];
						  $_SESSION['date'] = $_POST['date'];
						  $_SESSION['lieunaiss'] = $_POST['lieunaiss'];
						  
                        }
				
			 //expression régulière pour avoir une date de naissance correcte 
		     $x1="#^[0-9]{2}\-[0-9]{2}\-[0-9]{4}$#";
	         $x2="#^[0-9]{2}/[0-9]{2}/[0-9]{4}$#";
				 if (empty($_POST['date'])==1){
						$t[3]=1;
				 }
				 else  {
					 
			//vérifier si la syntaxe de la date de naissance est correcte 			 
			      if((!preg_match($x1,$_POST['date']))&&(!preg_match($x2,$_POST['date']))) 
				        { 
						$t[3] = 1 ;
						}
						 else { 
							$t[3] =0;
							$err1 --;
							 if((preg_match($x2,$_POST['date']))){
								$res=explode("/",$_POST['date']);}
							 else{ $res=explode("-",$_POST['date']);}
			//vérifier la validité de la date par rapport à la date actuelle				 
							if(checkdate($res[1],$res[0],$res[2])){
								 $age=(int) ((time()-strtotime($_POST['date']))/(3600 * 24 * 365));
								 $_SESSION['age'] = $age ;
							 }
						}
					  }
		 if(empty($_SESSION['lieunaiss']))		 
			$t[4]=1;
		 else {
			 $err1 --;	
			 $t[4] =0;
		 }
		 
		}
						
         if(($_SESSION['nbpage'] == 2 && ($err1==0)) || ( $pg==2 && $err2 > 0 ) ) {
			 if(isset($_POST) && !empty($_POST) &&  $pg==2 )
		                {
                          $_SESSION['mail'] = $_POST['mail'];
                          $_SESSION['adresse'] = $_POST['adresse'];
						  $_SESSION['num'] = $_POST['num'];
						  $_SESSION['commune'] = $_POST['commune'];
                          $_SESSION['genre'] = $_POST['genre'];
                          $_SESSION['civilite'] = $_POST['civilite'];						  
                          $_SESSION['wilaya'] = $_POST['wilaya'];							  
                        }
		   
			if(empty($_SESSION['mail']))
				$t[5]=1;
			else {
				 $err2 --;
				 $t[5]=0;
			}
			if(empty($_SESSION['num']))
				$t[6]=1;
			else {
				 $err2 --;
				 $t[6]=0;
			}
			if(empty($_SESSION['adresse']))
				$t[7]=1;
			else {
				 $err2 --;
				 $t[7]=0;
			}
			if(empty($_SESSION['commune']))
				$t[8]=1;
			else {
				 $err2 --;
				 $t[8]=0;
			}
			if(empty($_SESSION['genre']))
				$t[9]=1;
			else {
				 $err2 --;
				 $t[9]=0;
			}
			if(empty($_SESSION['civilite']))
				$t[10]=1;
			else {
				 $err2 --;
				 $t[10]=0;
			}
			if(empty($_SESSION['wilaya']))
				$t[11]=1;
			else {
				 $err2 --;
				 $t[11]=0;
			}
						
		 }	
		 
			if (($_SESSION['nbpage'] == 3 && ($err2 == 0 )) || ( $pg==3 && $err3 > 0 )){
				 if(isset($_POST) && !empty($_POST) &&  $pg==3 )
		                {
                          $_SESSION['primaire'] = $_POST['primaire'];
                          $_SESSION['adprimaire'] = $_POST['adprimaire'];
						  
						    //vérifier si l'année de début du cycle primaire plus la durée est au moins égale à l'année de fin du cycle primaire
							$verifp = $_SESSION['adprimaire'] + 6 ;
  							if($_POST['afprimaire'] >= $verifp && $_POST['afprimaire'] <=$_POST['adcem'])  
								$_SESSION['afprimaire'] = $_POST['afprimaire']; 
							else{
							$_SESSION['afprimaire'] ="";	
							}
						 
						  $_SESSION['cem'] = $_POST['cem'];
                          $_SESSION['adcem'] = $_POST['adcem'];
						  
						    //vérifier si l'année de début du cycle moyen plus la durée est au moins égale à l'année de fin du cycle moyen
 							$verifc =  $_SESSION['adcem'] + 4 ;
 							if($_POST['afcem'] >= $verifc && $_POST['afcem'] <= $_POST['adlycee']) 
								$_SESSION['afcem'] = $_POST['afcem'];
							else{
							$_SESSION['afcem'] ="";	
							}
						  					  
                          $_SESSION['lycee'] = $_POST['lycee'];
                          $_SESSION['adlycee'] = $_POST['adlycee'];
						  
                            //vérifier si l'année de début du cycle secondaire plus la durée est au moins égale à l'année de fin du cycle secondaire
							$verifl = $_SESSION['adlycee'] + 3 ;
							if($_POST['aflycee'] >= $verifl && $_POST['aflycee'] <= $_POST['adfac']) 
								$_SESSION['aflycee'] = $_POST['aflycee']; 
							else{ 
							$_SESSION['aflycee'] ="";
							}						  
                          
						  		
						  $_SESSION['serie'] = $_POST['serie'];
						  $_SESSION['mention'] = $_POST['mention'];
						  
						   //expression régulière pour vérifier si la moyenne du bac est un réel
						   $mm =$_POST['moyenne'];
							$p = preg_match("#^[0-9]{2}\.[0-9]{2}$#", $mm) ;
							if ($p)
								if($_POST['moyenne']<= 19.99 && $_POST['moyenne']>= 10.00) 
									$_SESSION['moyenne'] = $_POST['moyenne']; 
								else{ 
									$_SESSION['moyenne']="";  
									$type = 1 ;
								}
							else{
								$_SESSION['moyenne']="";
								$type = 2 ;
							}
							
						  
						  $_SESSION['adfac'] = $_POST['adfac'];
						  $_SESSION['pfe'] = $_POST['pfe'];
                        }
						
						
						//afficher le msg "Bienvenue [madame, mademoiselle, monsieur] [prénom] [nom] [age]		
				if ($_SESSION['genre']=="Feminin" && $_SESSION['civilite']=="Marie")
					echo '<h2 align="center"> Bienvenue Madame ['.$_SESSION['prenom'].'] ['. $_SESSION['nom'].'] ['.$_SESSION['age'].' ans]</h2> ';
	 			else if ($_SESSION['genre']=="Feminin" && $_SESSION['civilite']=="Celibataire")
		   				echo '<h2 align="center"> Bienvenue Mademoiselle ['.$_SESSION['prenom'].'] ['. $_SESSION['nom'].'] ['.$_SESSION['age'].' ans]</h2>';
	        		else
			    		echo '<h2 align="center"> Bienvenue Monsieur ['.$_SESSION['prenom'].'] ['. $_SESSION['nom'].'] ['.$_SESSION['age'].' ans]</h2>';
					
			if(empty($_SESSION['primaire']))
				$t[12]=1;
			else {
				 $err3 --;
				 $t[12]=0;
			}
			if(empty($_SESSION['adprimaire']))
				$t[13]=1;
			else {
				 $err3 --;
				 $t[13]=0;
			}
			if(empty($_SESSION['afprimaire']))
				$t[14]=1;
			else {
				 $err3 --;
				 $t[14]=0;
			}
			if(empty($_SESSION['cem']))
				$t[15]=1;
			else {
				 $err3 --;
				 $t[15]=0;
			}
			if(empty($_SESSION['adcem']))
				$t[16]=1;
			else {
				 $err3 --;
				 $t[16]=0;
			}
			if(empty($_SESSION['afcem']))
				$t[17]=1;
			else {
				 $err3 --;
				 $t[17]=0;
			}
			if(empty($_SESSION['lycee']))
				$t[18]=1;
			else {
				 $err3 --;
				 $t[18]=0;
			}
			if(empty($_SESSION['adlycee']))
				$t[19]=1;
			else {
				 $err3 --;
				 $t[19]=0;
			}
			if(empty($_SESSION['aflycee']))
				$t[20]=1;
			else {
				 $err3 --;
				 $t[20]=0;
			}
			if(empty($_SESSION['serie']))
				$t[21]=1;
			else {
				 $err3 --;
				 $t[21]=0;
			}
			if(empty($_SESSION['mention']))
				$t[22]=1;
			else {
				 $err3 --;
				 $t[22]=0;
			}
			if(empty($_SESSION['moyenne']))
				$t[23]=1;
			else {
				 $err3 --;
				 $t[23]=0;
			}
			if(empty($_SESSION['adfac']))
				$t[24]=1;
			else {
				 $err3 --;
				 $t[24]=0;
			}
			if(empty($_SESSION['pfe']))
				$t[25]=1;
			else {
				 $err3 --;
				 $t[25]=0;
			}
				
					
					
		 }	
			



			
	if($_SESSION['nbpage'] == 1 || ( $pg==1 && $err1 > 0 )) {  
	     	       ?>
				
	  <form method="post" action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" >
	    <!--------------------- Tableau principal --------------------------->
	         <table border="3" bordercolor="red" bgcolor="white" align="left" width="750" height="90%" cellspacing="0" cellpadding="10">
	         <tr><td>
		 <!--------------------- Tableau de la section 1 --------------------------->
	               <table border="2" bordercolor="orange" bgcolor="silver" align="center" width="90%" height="10%" cellspacing="0" cellpadding="10">
	               <tr><td>
	     <!----------------- Debut section une ----------------------------> 
	                     <h1 align=center ><font face="Verdana"  color="red">  Informations Personnelles </font> </h1>  
		                 <table border="1" bordercolor="black" bgcolor="#F79F81" align="center" width="80%" height="10%" cellspacing="0" cellpadding="10">
	                     <tr><td>
		                     <table border="0"  align="center" cellspacing="0" cellpadding="5" >
				
		                     <tr><td align="right"><strong>  <font face="Arial" size="3"> Nom </font> </strong> </td>  
							     <td><strong>  <font face="Arial" size="3">  :</font> </strong> </td>
							     <td> <input type="text" name="nom" value="<?php if (!$t[1] ) {echo isset($_SESSION['nom'])? $_SESSION['nom'] : " ";}?>" > <?php  if ($pg==1 && $t[1]){?><br><font color="red">  Erreur ! </font><?php }?>    </td>
                                     					 
							 </tr>  
		                     <tr><td align="right"> <strong>  <font face="Arial" size="3"> Pr&eacute;nom </font> </strong></td>
							     <td><strong>  <font face="Arial" size="3">  :</font> </strong></td> </font> </strong>  
								 <td> <input type="text" name="prenom" value="<?php if (!$t[2]) {echo isset($_SESSION['prenom'])? $_SESSION['prenom'] : " ";}?>" > <?php  if ($pg==1 && $t[2]){?><br> <font color="red">  Erreur ! </font> <?php }?> </td>
							 </tr> 
			                 <tr><td align="right"><strong>  <font face="Arial" size="3"> Date de naissance </font> </strong></td> 
							     <td><strong>  <font face="Arial" size="3">  :</font> </strong></td> </font> </strong> 
								 <td>  <input type="text" name="date" value="<?php if (!$t[3]) {echo isset($_SESSION['date'])? $_SESSION['date'] : " ";}?>" > <?php  if ($pg==1 && $t[3]){?><br><font color="red">  Erreur ! </font> <?php }?> </td>
							 </tr>
			                 <tr><td align="right"><strong>  <font face="Arial" size="3"> Lieu de naissance </font> </strong></td> 
							     <td><strong>  <font face="Arial" size="3">  :</font> </strong></td> </font> </strong> 
								 <td>  <input type="text" name="lieunaiss" value="<?php if (!$t[4]) { echo isset($_SESSION['lieunaiss'])? $_SESSION['lieunaiss'] : " ";}?>" > <?php  if ($pg==1 && $t[4] ){?><br> <font color="red">  Erreur ! </font> <?php }?>  </td>
							 </tr> 
		                    							 
							 </table>
                        </table>
				  <tr><td align="center"><input type="submit" name="envoyer1" /></td></tr>				  
                   </table>	   		 
		  <form/>
</table>		  
	 <!--------------------------------- Fin section une ------------------------------------->
	 
	 
	 
	 
	 
	 
	 
	<?php }elseif($_SESSION['nbpage'] == 2 || ( $pg==1 && $err1==0 ) || ( $pg==2 && $err2 > 0 )) {			?>
	    
		
	 <!--------------------- Tableau principal --------------------------->
	         <table border="3" bordercolor="red" bgcolor="white" align="left" width="750" height="90%" cellspacing="0" cellpadding="10">
	         <tr><td>
         <form method="post" action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" >	 
		 <!------------------------------------- Tableau de la section 2 ----------------------------------------->
	                <table border="2" bordercolor="orange" bgcolor=silver align="center" width="90%" height="10%" cellspacing="0" cellpadding="10">
	                <tr><td>
		  <!------------------------------------- Debut section deux ----------------------------------------->
		                 <font face="Verdana" size="3" color="red"> <h1> <p align=center >Informations de Contact  </h1>  </p></font>
		                 <table border="1" bordercolor="black" bgcolor=#F79F81 align="center" width="80%" height="10%" cellspacing="0" cellpadding="10">
	                     <tr><td>
			                 <table  border="0" align="center" cellspacing="0" cellpadding="5">
							 <tr><td align="right"><font face="Arial" size="3"><strong> Genre </strong></font> </td> 
							     <td> <font face="Arial" size="3"> <strong>  : </strong></font> </td>  
								 <td> <label><input type="radio" name="genre" value="Feminin" <?php if (!$t[9] && $_SESSION['genre']=="Feminin" ) { echo  "checked";} else echo "requered"?> />F&eacute;minin</label>
							          <label><input type="radio" name="genre" value="Masculin" <?php if (!$t[9] && $_SESSION['genre']=="Masculin" ) { echo  "checked";} else echo "requered"?>/>Masculin</label>
								 </td>
							 </tr> 
							 <tr><td align="right"><font face="Arial" size="3"><strong> Civilit&eacute; </strong></font> </td> 
							     <td> <font face="Arial" size="3"> <strong>  : </strong></font> </td>  
								 <td> <label><input type="radio" name="civilite" value="Marie" <?php if (!$t[10] && $_SESSION['civilite']=="Marie" ) { echo  "checked";} else echo "requered"?>/>Mari&eacute;</label>
								      <label><input type="radio" name="civilite" value="Celibataire" <?php if (!$t[10] && $_SESSION['civilite']=="Celibataire" ) { echo  "checked";} else echo "requered"?>/>C&eacute;libataire</label>
								 </td>
							 </tr> 
			                 <tr><td align="right"><font face="Arial" size="3"><strong> Adresse email </strong></font> </td> 
							     <td> <font face="Arial" size="3"> <strong>  : </strong></font> </td>  
								 <td> <input type="text" name="mail" value="<?php if (!$t[5] ) { echo isset($_SESSION['mail'])? $_SESSION['mail'] : " ";}?>" > <?php  if ($pg==2 && $t[5] ){?><br> <font color="red">  Erreur ! </font> <?php }?></td>
							 </tr>  
			                 <tr><td align="right"><font face="Arial" size="3"><strong> Num&eacute;ro de t&eacute;l&eacute;phone </strong></font> </td> 
							     <td> <font face="Arial" size="3"><strong>   : </strong></font> </td> 
								 <td>  <input type="text" name="num" value="<?php if (!$t[6] ) { echo isset($_SESSION['num'])? $_SESSION['num'] : " ";}?>" > <?php  if ($pg==2 && $t[6]){?><br> <font color="red">  Erreur ! </font> <?php }?></td>
							 </tr>  
			                 <tr><td align="right"><font face="Arial" size="3"><strong> Adresse </strong></font> </td> 
     							 <td> <font face="Arial" size="3"><strong>   : </strong></font>  </td> 
								 <td><textarea name="adresse"><?php if (!$t[7] ) { echo isset($_SESSION['adresse'])? $_SESSION['adresse'] : " ";}?></textarea> <?php  if ($pg==2 && $t[7]){?><br> <font color="red">  Erreur ! </font> <?php }?>  </td>
							 </tr> 
			                 <tr><td align="right"><font face="Arial" size="3"><strong> Commune </strong></font> </td> 
							     <td> <font face="Arial" size="3"><strong>   : </strong></font>  </td> 
							     <td> <select name="commune">
										<option value="">  </option>
								        <option name="Thenia" <?php if (!$t[8] && $_SESSION['commune']=="Thenia" ) { echo  "selected";}?>> Thenia </option>
                                        <option name="Si Mustapha" <?php if (!$t[8] && $_SESSION['commune']=="Si Mustapha" ) { echo  "selected";}?>> Si Mustapha </option>
									  </select> 
									  <?php  if ($pg==2 && $t[8]){?><br> <font color="red">  Erreur ! </font> <?php } ?>
									  
							 </tr> 
		                     <tr><td align="right"><font face="Arial" size="3"><strong> Wilaya </strong></font> </td> 
							     <td> <font face="Arial" size="3"><strong>   : </strong></font> </td> 
							     <td>  <select name="wilaya">    <option value="">  </option>
								                                 <option value="Adrar" <?php if (!$t[11] && $_SESSION['wilaya']=="Adrar" ) { echo  "selected";}?>> Adrar </option>
                                                                 <option value="Chlef" <?php if (!$t[11] && $_SESSION['wilaya']=="Chlef" ) { echo  "selected";}?>> Chlef </option>
																 <option value="Aghouat" <?php if (!$t[11] && $_SESSION['wilaya']=="Aghouat" ) { echo  "selected";}?>> Aghouat </option>
																 <option value="Oum Bouaki" <?php if (!$t[11] && $_SESSION['wilaya']=="Oum Bouaki" ) { echo  "selected";}?>> Oum Bouaki </option>
																 <option value="Batna" <?php if (!$t[11] && $_SESSION['wilaya']=="Batna" ) { echo  "selected";}?>> Batna </option>
																 <option value="Bejaia" <?php if (!$t[11] && $_SESSION['wilaya']=="Bejaia" ) { echo  "selected";}?>> Bejaia </option>
																 <option value="Biskra" <?php if (!$t[11] && $_SESSION['wilaya']=="Biskra" ) { echo  "selected";}?>> Biskra </option>
																 <option value="Bechar" <?php if (!$t[11] && $_SESSION['wilaya']=="Bechar" ) { echo  "selected";}?>> Bechar </option>
																 <option value="Blida" <?php if (!$t[11] && $_SESSION['wilaya']=="Blida" ) { echo  "selected";}?>> Blida </option>
																 <option value="Bouira" <?php if (!$t[11] && $_SESSION['wilaya']=="Bouira" ) { echo  "selected";}?>> Bouira </option>
																 <option value="Tamanrasset" <?php if (!$t[11] && $_SESSION['wilaya']=="Tamanrasset" ) { echo  "selected";}?>> Tamanrasset </option>
																 <option value="Tebassa" <?php if (!$t[11] && $_SESSION['wilaya']=="Tebassa" ) { echo  "selected";}?>> Tebassa </option>
																 <option value="Tlemcen" <?php if (!$t[11] && $_SESSION['wilaya']=="Tlemcen" ) { echo  "selected";}?>> Tlemcen </option>
																 <option value="Tiaret" <?php if (!$t[11] && $_SESSION['wilaya']=="Tiaret" ) { echo  "selected";}?>> Tiaret </option>
																 <option value="Tizi" <?php if (!$t[11] && $_SESSION['wilaya']=="Tizi" ) { echo  "selected";}?>> Tizi </option>
																 <option value="Boumerdes" <?php if (!$t[11] && $_SESSION['wilaya']=="Boumerdes" ) { echo  "selected";}?>> Boumerdes </option>
										</select>
										<?php  if ($pg==2 && $t[11]){?><br> <font color="red">  Erreur ! </font> <?php } ?>
							 </tr>                                                                                                                                                                                   
                             </table>				 
                         </table>
						 <tr><td align="center"><input type="submit" name="retour1" value="Retour"/>
						                        <input type="submit" name="envoyer2" value="Suivant"/>
							  </td>
						 </tr>	
                    </table>
			<form/>
			</table>
		 <!-------------------------------- Fin section deux ----------------------------------->
		 
		 
		 
		 
		
		 

		<?php }elseif($_SESSION['nbpage'] == 3  || (( $pg==2 && $err2 == 0 ) || ( $pg==3 && $err3 > 0 )) ){ ?>
	 <!--------------------- Tableau principal --------------------------->
	         <table border="3" bordercolor="red" bgcolor="white" align="left" width="750" height="90%" cellspacing="0" cellpadding="10">
	         <tr><td>
         <form method="post" action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" >
		  <!------------------------------------- Tableau de la section 3 ----------------------------------------->	 
	                <table border="2" bordercolor="orange" bgcolor=silver align="center" width="90%" height="10%" cellspacing="0" cellpadding="10">
	                <tr><td>
		<!----------------------------------------- Debut section trois --------------------------------------->
		                 <font face="Verdana" size="3" color="red"> <h1 align=center > Informations sur le Cursus  </h1> </font>
		                 <table border="1" bordercolor="black" bgcolor=#F79F81 align="center" width="80%" height="10%" cellspacing="0" cellpadding="10">
	                     <tr><td>
						      <!----------------------------------------- Cycle primaire --------------------------------------->
		                      <ol>
								<li>  <font face="Arial" size="3"><strong>  Cycle Primaire </strong></font> 			              
									<ul type="disc"><li> <font face="Arial" size="3"><strong>  Ecole : </strong></font>  <input type="text" name="primaire" value="<?php if (!$t[12] ) {echo isset($_SESSION['primaire'])? $_SESSION['primaire'] : " ";}?>" > <?php  if ($pg==3 && $t[12]){?><br><font color="red">  Erreur ! </font><?php }?> </li>
												    <li> <font face="Arial" size="3"><strong>  Ann&eacute;e de d&eacute;but : </strong></font>
													     <select name="adprimaire">
														       <option value="">  </option>
														       <option value="2001" <?php if (!$t[13] && $_SESSION['adprimaire']=="2001" ) { echo  "selected";}?>> 2001 </option>
															   <option value="2002" <?php if (!$t[13] && $_SESSION['adprimaire']=="2002" ) { echo  "selected";}?>> 2002 </option>
															   <option value="2003" <?php if (!$t[13] && $_SESSION['adprimaire']=="2003" ) { echo  "selected";}?>> 2003 </option>
															   <option value="2004" <?php if (!$t[13] && $_SESSION['adprimaire']=="2004" ) { echo  "selected";}?>> 2004 </option>
															   <option value="2005" <?php if (!$t[13] && $_SESSION['adprimaire']=="2005" ) { echo  "selected";}?>> 2005 </option>
															   <option value="2006" <?php if (!$t[13] && $_SESSION['adprimaire']=="2006" ) { echo  "selected";}?>> 2006 </option>
														 </select> 
														 <?php  if ($pg==3 && $t[13]){?><br> <font color="red">  Erreur ! </font> <?php } ?>
													</li>
													<li> <font face="Arial" size="3"><strong>  Ann&eacute;e de fin : </strong></font>  
													      <select name="afprimaire">
														       <option value="">  </option>
														       <option value="2005" <?php if (!$t[14] && $_SESSION['afprimaire']=="2005" ) { echo  "selected";}?>> 2005 </option>
															   <option value="2006" <?php if (!$t[14] && $_SESSION['afprimaire']=="2006" ) { echo  "selected";}?>> 2006 </option>
															   <option value="2007" <?php if (!$t[14] && $_SESSION['afprimaire']=="2007" ) { echo  "selected";}?>> 2007 </option>
															   <option value="2008" <?php if (!$t[14] && $_SESSION['afprimaire']=="2008" ) { echo  "selected";}?>> 2008 </option>
															   <option value="2009" <?php if (!$t[14] && $_SESSION['afprimaire']=="2009" ) { echo  "selected";}?>> 2009 </option>
															  
														 </select> 
														  <?php  if ($pg==3 && $t[14]){?><br> <font color="red" align="right" >  Erreur ! </font> <?php } ?>
													</li>
									</ul>
								</li>			 
					          
							  
                              <!----------------------------------------- Cycle Moyen --------------------------------------->
				              <li>  <font face="Arial" size="3"><strong> Cycle Moyen </strong></font> 			      				      
								<ul><li>  <font face="Arial" size="3"><strong> CEM : </strong></font>  <input type="text" name="cem" value="<?php if (!$t[15] ) {echo isset($_SESSION['cem'])? $_SESSION['cem'] : " ";}?>" > <?php  if ($pg==3 && $t[15]){?><br><font color="red">  Erreur ! </font><?php }?></li>
									<li>  <font face="Arial" size="3"><strong> Ann&eacute;e de d&eacute;but : </strong></font> 									       
												         <select name="adcem">
														       <option value="">  </option>
														       <option value="2007" <?php if (!$t[16] && $_SESSION['adcem']=="2007" ) { echo  "selected";}?>> 2007 </option>
															   <option value="2008" <?php if (!$t[16] && $_SESSION['adcem']=="2008" ) { echo  "selected";}?>> 2008 </option>
															   <option value="2009" <?php if (!$t[16] && $_SESSION['adcem']=="2009" ) { echo  "selected";}?>> 2009 </option>
															   <option value="2010" <?php if (!$t[16] && $_SESSION['adcem']=="2010" ) { echo  "selected";}?>> 2010 </option>
														 </select> 
														  <?php  if ($pg==3 && $t[16]){?><br> <font color="red">  Erreur ! </font> <?php } ?>
 									</li>			
									<li>  <font face="Arial" size="3"><strong> Ann&eacute;e de fin : </strong></font> 
									                     <select name="afcem">
														       <option value="">  </option>
														       <option value="2011" <?php if (!$t[17] && $_SESSION['afcem']=="2011" ) { echo  "selected";}?>> 2011 </option>
															   <option value="2012" <?php if (!$t[17] && $_SESSION['afcem']=="2012" ) { echo  "selected";}?>> 2012 </option>
															   <option value="2013" <?php if (!$t[17] && $_SESSION['afcem']=="2013" ) { echo  "selected";}?>> 2013 </option>
															   <option value="2014" <?php if (!$t[17] && $_SESSION['afcem']=="2014" ) { echo  "selected";}?>> 2014 </option>
														 </select> 
														  <?php  if ($pg==3 && $t[17]){?><br> <font color="red">  Erreur ! </font> <?php } ?>
									</li>
								</ul>
					          </li>
				
				              <!----------------------------------------- Cycle secondaire --------------------------------------->
				              <li>   <font face="Arial" size="3"><strong> Cycle Secondaire </strong></font> 				             
								<ul type="square">
									<li>   <font face="Arial" size="3"><strong> Lycee : </strong></font>  <input type="text" name="lycee" value="<?php if (!$t[18] ) {echo isset($_SESSION['lycee'])? $_SESSION['lycee'] : " ";}?>" > <?php  if ($pg==3 && $t[18]){?><br><font color="red">  Erreur ! </font><?php }?></li>
									<li>   <font face="Arial" size="3"><strong> Ann&eacute;e de d&eacute;but : </strong></font>
                                                          <select name="adlycee">
														       <option value="">  </option>
														       <option value="2014" <?php if (!$t[19] && $_SESSION['adlycee']=="2014" ) { echo  "selected";}?>> 2014 </option>
															   <option value="2015" <?php if (!$t[19] && $_SESSION['adlycee']=="2015" ) { echo  "selected";}?>> 2015 </option>
															   <option value="2016" <?php if (!$t[19] && $_SESSION['adlycee']=="2016" ) { echo  "selected";}?>> 2016 </option>
															   <option value="2017" <?php if (!$t[19] && $_SESSION['adlycee']=="2017" ) { echo  "selected";}?>> 2017 </option>
														 </select> 
														<?php  if ($pg==3 && $t[19]){?><br> <font color="red">  Erreur ! </font> <?php } ?>	
									</li>					
									<li>   <font face="Arial" size="3"><strong> Ann&eacute;e de fin : </strong></font> 
									                      <select name="aflycee">
														       <option value="">  </option>
														       <option value="2015" <?php if (!$t[20] && $_SESSION['aflycee']=="2015" ) { echo  "selected";}?>> 2015 </option>
															   <option value="2016" <?php if (!$t[20] && $_SESSION['aflycee']=="2016" ) { echo  "selected";}?>> 2016 </option>
															   <option value="2017" <?php if (!$t[20] && $_SESSION['aflycee']=="2017" ) { echo  "selected";}?>> 2017 </option>
															   <option value="2018" <?php if (!$t[20] && $_SESSION['aflycee']=="2018" ) { echo  "selected";}?>> 2018 </option>
														 </select> 
														  <?php  if ($pg==3 && $t[20]){?><br> <font color="red">  Erreur ! </font> <?php } ?>
									</li>
									<li>   <font face="Arial" size="3"><strong> Bac : </strong></font> 
										<dl>
											<dt><strong> S&eacute;rie: </strong>
												<dd><select name="serie">
												               <option value="">  </option>
														       <option value="Science" <?php if (!$t[21] && $_SESSION['serie']=="Science" ) { echo  "selected";}?>> Science </option>
															   <option value="Math" <?php if (!$t[21] && $_SESSION['serie']=="Math" ) { echo  "selected";}?>> Math </option>
															   <option value="Lettre" <?php if (!$t[21] && $_SESSION['serie']=="Lettre" ) { echo  "selected";}?>> Lettre </option>
													</select><?php  if ($pg==3 && $t[21]){?><br> <font color="red">  Erreur ! </font> <?php } ?> 
									
													 
											<dt><strong> Mention: </strong>
												<dd><select name="mention">
												               <option value="">  </option>
														       <option value="Bien" <?php if (!$t[22] && $_SESSION['mention']=="Bien" ) { echo  "selected";}?>> Bien </option>
															   <option value="Excellent" <?php if (!$t[22] && $_SESSION['mention']=="Excellent" ) { echo  "selected";}?>> Excellent </option>
												    </select> <?php  if ($pg==3 && $t[22]){?><br> <font color="red">  Erreur ! </font> <?php } ?> 
													
											<dt><strong> Moyenne: </strong>
												<dd><input type="text" name="moyenne" value="<?php if (!$t[23] ) {echo isset($_SESSION['moyenne'])? $_SESSION['moyenne'] : " ";}?>" > <?php  if ($pg==3 && $t[23]){?><br><font color="red"><?php if ($type == 1 ) echo 'Moyenne incorrecte !'; else echo "Erreur format (nn.nn)" ?></font><?php }?>
										</dl>		
									</li>
								</ul>
							  </li>
				      <!----------------------------------------- Cycle universitaire --------------------------------------->        
				             <li>   <font face="Arial" size="3"><strong> Cycle Universitaire </strong></font> 			             			     
								<ul><li>   <font face="Arial" size="3"><strong> Ann&eacute;e de d&eacute;but : </strong></font>  
								                 <select name="adfac"> 
												       <option value="">  </option>
												       <option value="2014" <?php if (!$t[24] && $_SESSION['adfac']=="2014" ) { echo  "selected";}?>> 2014 </option>
													   <option value="2015" <?php if (!$t[24] && $_SESSION['adfac']=="2015" ) { echo  "selected";}?>> 2015 </option>
													   <option value="2016" <?php if (!$t[24] && $_SESSION['adfac']=="2016" ) { echo  "selected";}?>> 2016 </option>
													   <option value="2017" <?php if (!$t[24] && $_SESSION['adfac']=="2017" ) { echo  "selected";}?>> 2017 </option>
												 </select> 
												  <?php  if ($pg==3 && $t[24]){?><br> <font color="red">  Erreur ! </font> <?php } ?>
									<li>   <font face="Arial" size="3"><strong>  Titre P.F.E : </strong></font>   <input type="text" name="pfe" value="<?php if (!$t[25] ) {echo isset($_SESSION['pfe'])? $_SESSION['pfe'] : " ";}?>" > <?php  if ($pg==3 && $t[25]){?><br><font color="red">  Erreur ! </font><?php }?>   </li>
								</ul>
							 </li>
			                 </ol>
							  
							 
                       </table>
					   <tr><td align="center"><input type="submit" name="retour2" value="Retour" />
					                          <input type="submit" name="envoyer3" value="Suivant" />
							</td>
					   
					   </tr>
                   </table>				     
			<form/>	
 
 	
		<?php }
		else if($_SESSION['nbpage']== 4 || ( $pg==3 && $err3 == 0 ) ){?>
		<!----------------------------------------- Section divers --------------------------------------->
<!--------------------- Tableau principal --------------------------->
	         <table border="3" bordercolor="red" bgcolor="white" align="left" width="750" height="90%" cellspacing="0" cellpadding="10">
	         <tr><td>	 
		<form method="post" action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" >			 
				     <!----------------------------- tableau de la section divers --------------------------------------------------->
					 <table border="2" bordercolor="orange" bgcolor=silver align="center" width="90%" height="10%" cellspacing="0" cellpadding="10">
	                <tr><td>
					
			        <h1 align=center ><font face="Verdana"  color="red"> Divers </font> </h1>
			    	<table border="1" bordercolor="black" bgcolor=#F79F81 align="center" width="80%" height="10%" cellspacing="0" cellpadding="10">
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
							<tr><td> <label><input type="checkbox" name="technologie" value="Nouvelles technologie"/>Nouvelle Technologie</label> </td></tr>
							
					    </table>
				    </table>
					<tr><td align="center"><input type="submit" name="retour3" value="Retour" />
					                       <input type="submit" name="envoyer4" value="Suivant" />
						</td>
					</tr>
                   </table> 
			  </form>  					
			</table>	  
	        <!--------------------------------------------- Fin section divers ------------------------------------->
	<?php }
		else if($_SESSION['nbpage']== 5  ){?>
	         <!--------------------- Tableau principal --------------------------->
	         <table border="3" bordercolor="red" bgcolor="white" align="left" width="750" height="90%" cellspacing="0" cellpadding="10">
	         <tr><td>
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
		<?php  }   ?>
    </table>		

     </body>
 </html>