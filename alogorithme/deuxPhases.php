<html>
    <head>
        <title>Page de traitement</title>
        <meta charset="utf-8">
    </head>
    <body>
        <p><?php
        	$fonction_obj=[1,-1];
        	$contraintes=[[-2,-1,-8],
        					[1,4,-5],
        					[1,2,13]];

        	$reel=array_key_last($fonction_obj)+1;
        	$tab_reel=tab_reel($contraintes,$reel);
        /*	$tab_reel_negatif=tab_reel_negatif($contraintes,$reel);
        	echo 'voici les contraintes avec des reel negatifs' . '<br/>';
        	foreach ($tab_reel_negatif as $key => $value) {
        		echo 'la contrainte ' . $value[0] . ' avec comme reel ' . $value[1] . '<br/>';
        	}*/
        	echo 'voici le tab contenant tous les reel :' . '<br/>';
        	foreach ($tab_reel as $value) {
        		echo $value . ' ';
        	}echo '<br/>';
        	echo 'voici l\'indice à laquelle se trouve le reel negatif :' . '<br/>';
        	$indice_negatif=indice_negatif($tab_reel);
        	echo $indice_negatif . '<br/>';
        	$fonct_obj=creer_fonction_obj_avec_variable($fonction_obj,$contraintes,$indice_negatif);
        	$fonct_obj=fonct_obj_avec_x0($fonct_obj,$tab_reel);
        	echo 'voici la fonction objectif avec des 0 à la place des variables hors zones et du reel: ' .'<br/>';
        	foreach ($fonct_obj as $key => $value) {
        		echo $value . ' ';
        	}echo '<br/>';
        	echo 'voici les contraintes avec les variables hors zone :' .'<br/>';
            $contraintes_avec_variables_HZ=contrainte_cre_variable($contraintes,$tab_reel);
            foreach ($contraintes_avec_variables_HZ as $key => $value) {
            	foreach ($value as $value) {
            		echo $value . ' ';
            	}echo '<br/>';
            }echo '<br/>';
            echo 'voici l\'indice de la contrainte avec le reel negatif : ' .'<br/>';
            $indice_cont_x0=indice_cont_x0($tab_reel);
            echo $indice_cont_x0 . '<br/>' ;
            echo 'voici la contraine avec le reel negatif :' . '<br/>';
            foreach ($contraintes_avec_variables_HZ[$indice_cont_x0] as $key => $value) {
            	echo $value . ' ';
            }echo '<br/>';
            echo 'voici la nouvelle fonction_obj:' . '<br/>';
            $fonct_obj=fonct_obj_egale_x0($fonct_obj);
            foreach ($fonct_obj as $value) {
                echo $value . ' ';
            }echo '<br/>';
         //   $res_ineq_reel_negatif=
            echo 'voici la contrainte avec le reel negatif inversé: ' .'<br/>';
            $cont_x0_inverse=inverse_contrainte_x0($contraintes_avec_variables_HZ[$indice_cont_x0],$reel);
            foreach ($cont_x0_inverse as $key => $value) {
            	echo $value . ' ';
            }echo '<br/>';
            $contrainte_inverse=inverse_contraintes($contraintes_avec_variables_HZ,$reel);
            $contrainte_inverse[$indice_cont_x0]=$cont_x0_inverse;
            echo 'voici les contraintes inversé :' .'<br/>';
            foreach ($contrainte_inverse as $key => $value) {
            	foreach ($value as $valeur) {
            		echo $valeur . ' ' ;
            	}echo '<br/>';
            }
            $fonct_obj=fonction_obj_maj($cont_x0_inverse);
            echo 'voici la fonction objectif maj :' . '<br/>';
            foreach ($fonct_obj as $key => $value) {
            	echo $value . ' ';
            }echo '<br/>';
            $variable_traite=[];
            $dernier_fonct_obj=array_key_last($fonct_obj);
            for($a=0;$a<$dernier_fonct_obj;$a++){
            	$res_variable_traite=variable_traite($a,$variable_traite);
            	if($fonct_obj[$a]>0 and $res_variable_traite==true){
            		$res_cont=[];//resultat pour la resolutiions de ineq
                    foreach ($contrainte_inverse as $value) {
                        $res_ineq=res_ineq($value,$value[$a],$reel);
                        array_push($res_cont,$res_ineq);
                    } echo '<br/>' . '<br/>' ;
                    echo 'voici les res des inequation :' . '<br/>' ;
                    foreach ($res_cont as $key => $value) {
                        echo $value . ' ';
                    }echo '<br/>' . '<br/>' ;
                    $indice_cont_min=minimum($res_cont);
                    echo 'la contrainte active est : ' . $indice_cont_min . '<br/>' ;
                    $cont_min_inverse=inverse_contrainte_min($contrainte_inverse[$indice_cont_min],$a,$indice_cont_min);
                    foreach ($cont_min_inverse as $key => $value) {
                        echo $value . ' ';
                    }echo '<br/>';
                    $cont_active_divise=div_variables($cont_min_inverse,$a);
                    echo 'la contrainte active divise est egale a' . '<br/>';
                    foreach ($cont_active_divise as $value) {
                        echo $value . ' ';
                    }echo '<br/>' . '<br/>' ;
                    $contrainte_inverse[$indice_cont_min]=$cont_active_divise;
                    echo 'les contraintes sont :' . '<br/>';
                    foreach ($contrainte_inverse as $key => $value) {
                        foreach ($value as $key => $valeur) {
                            echo $valeur . ' ';
                        }echo '<br/>';
                    }echo '<br/>';
                    $tab_containtes2=contrainte_maj($contrainte_inverse, $a,$cont_active_divise,$indice_cont_min );
                    echo 'voici le tableau contenant le resultat du calcul' . '<br/>' ;
                    foreach ($tab_containtes2 as $key => $value) {
                        foreach ($value as $key => $valeur) {
                            echo $valeur . ' ';
                        }echo '<br/>';
                    }echo '<br/>';
                    echo 'voici le tableau des contraintes avec un 0 ' . '<br/>' ;
                    $contrainte_inverse=contraintes_indice_zero($contrainte_inverse,$a,$indice_cont_min);
                    foreach ($contrainte_inverse as $key => $value) {
                        foreach ($value as $key => $valeur) {
                            echo $valeur . ' ';
                        }echo '<br/>';
                    } echo '<br/>' . '<br/>' ;
                    echo 'voici le tab des contraintes une fois additionné :' . '<br/>';
                    $contrainte_inverse=somme_contraintes($contrainte_inverse,$tab_containtes2,$indice_cont_min);
                    foreach ($contrainte_inverse as $key => $value) {
                        foreach ($value as $valeur) {
                            echo $valeur . ' ';
                        }echo '<br/>';
                    }echo '<br/>' . '<br/>' . '<br/>';
                    echo 'voici le fonction objectif: ' . '<br/>';
                    foreach ($fonct_obj as $key => $value) {
                        echo $value . ' ';
                    }echo '<br/>' . '<br/>';
                    echo 'voici le tableau contenant le calcul pour fonct_obj :' . '<br/>';
                    $fonction_obj2=fonct_obj_maj($fonct_obj,$cont_active_divise,$a);
                    foreach ($fonction_obj2 as $key => $value) {
                        echo $value . ' ';
                    }echo '<br/>' . '<br/>';
                    echo 'voici la fonction objectif a la fin fin de la boucle ' . $a . ' : ' . '<br/>';
                    $fonct_obj=fonct_obj_indice_egale_zero($fonct_obj,$a);
                    $fonct_obj=fonct_obj_somme_tab($fonct_obj,$fonction_obj2);
                    foreach ($fonct_obj as $key => $value) {
                        echo $value . ' ' ;
                    }echo '<br/>' . '<br/>';
                    echo 'voici les contraintes:' . '<br/>';
                   // $contraintes_inverse[$indice_cont_min]=inverse_contrainte_min($contraintes_inverse[$indice_cont_min],$a,$reel);
                    foreach ($contrainte_inverse as $value) {
                        foreach ($value as $key => $valeur) {
                            echo $valeur . ' ';
                       }echo '<br/>' . '<br/>';
                       
                    }
                    array_push($variable_traite,$a);
                       $a=-1;

            	}
            }

            











        	//fonction

        	function tab_reel($contraintes,$reel){  ///tab qui contient les reels
        		$res_final=[];
        		foreach ($contraintes as $value) {
        			//$res=tab_reel_suite($value,$reel);
        			$res=$value[$reel];
        			array_push($res_final,$res);
        		}
        		return $res_final;
        	}

        //	function tab_reel_suite($tab,$reel){
        //		return $tab[$reel];
        //	}

    /*    	function tab_reel_negatif($contraintes,$reel){
        		$res_final=[];
        		foreach ($contraintes as $key => $value) {
        			if ($value[$reel]<0) {
        				$res=tab_reel_negatif($value,$reel,$key);
        				array_push($res_final,$res);
        			}
        		}
        		return $res_final;
        	}

        	function tab_reel_negatif_suite($tab,$reel,$key){
        		$res=[];
        		array_push($res,$key);
        		array_push($res,$tab[$reel]);
        		return $res;
        	}


        	$tab=[[2,4,-3],
        			[4,5,-2]];
        	$reel=2;
        	$res=tab_reel_negatif($contraintes,$reel);
        	foreach ($res as $key => $value) {
        		foreach ($value as $key => $valeur) {
        			echo $valeur . ' ' ;
        		}echo '<br/>';
        	}
*/
        	function indice_negatif($tab){  //renvoie l'indice si il ya un reel negatif
        		for($i=0; $i<= array_key_last($tab);$i++){
        			if ($tab[$i]<0) {
        				return $i;
        			}
        		}
        		return false;

        	}


            function creer_fonction_obj_avec_variable($fonction_obj,$contraintes){//BILAL 1/3 : prend en parametre la fonction objective et les contraintes
                $dernier_cont=array_key_last($contraintes)+1;
                for($i=0; $i<=$dernier_cont;$i++){
                	array_push($fonction_obj,0);//rajoute des 0 qui represente le nb de contrainte et le reel
                }
                return $fonction_obj;
            }

            function fonct_obj_avec_x0($fonct_obj,$tab_reel){//BILAL 2/3: prend en parametre la fonction_obj et le tab qui contient les reel des contraintes
            	for($i=0;$i<=array_key_last($tab_reel);$i++){
            		if ($tab_reel[$i]<0) { //si un des reel est negatif alors on rajoute un 0 qui represente x0
            			array_push($fonct_obj,0);
            			return $fonct_obj;
            		}
            	}
            	return $fonct_obj;
            }
            

           function crea_variable($tab,$dernier,$i){
                for($j=0; $j<= $dernier; $j++){
                    if ($j==$i) {
                         array_push($tab, 1);
                     }
                     else{
                        array_push($tab, 0);
                     }
                }
                return $tab;
            }

            function contrainte_cre_variable($contraintes,$tab_reel){
                $res_final=[];
                $a=x0_exist($contraintes,$tab_reel);
                $dernier=array_key_last($contraintes) + $a;
                $i=0;
                foreach ($contraintes as $value) {
                    $res=crea_variable($value,$dernier,$i);
                    array_push($res_final, $res);
                    $i+=1;
                }
                $res_final=contrainte_avec_x0($res_final,$tab_reel);
                return $res_final;
            }
        /*    $tab=[[2,4,3,6],  //test contrainte cre variable
        			[4,7,3,2],
        			[5,7,3,2]];
        	$res=contrainte_cre_variable($tab);
        	foreach ($res as $key => $value) {
        		foreach ($value as  $valeur) {
        			echo $valeur . ' ';
        		}echo '<br/>';
        	}echo '<br/>';
*/

        	function x0_exist($contraintes,$tab_reel){
        		$dernier_cont=array_key_last($contraintes[0]);
        		foreach ($tab_reel as $key => $value) {
        			if ($value<0) {
        				return 1;
        			}
        		}
        		return 0;
        	}


       		function contrainte_avec_x0($res_final,$tab_reel){
        		$dernier_tab_reel=array_key_last($tab_reel);
        		$dernier_res_final=array_key_last($res_final[0]);
        		for($i=0;$i<=$dernier_tab_reel;$i++){
        			if ($tab_reel[$i]<0) {
        				$res_final[$i][$dernier_res_final]=-1;
        				}
        		}
        		return $res_final;
        	}

        		


        /*    function x0($contraintes_avec_variables_HZ,$reel){
                $res_final=[];
                foreach ($contraintes_avec_variables_HZ as $key => $value) {
                    if($value[$reel] < 0){
                        $dernier=array_key_last($value);
                        $value[$dernier]=-1;
                        array_push($res_final,$value);
                    }
                    else{
                        array_push($res_final,$value);
                    }
                }
                return $res_final;

            }
*/
            function fonct_obj_egale_x0($fonct_obj){//BILAL 3/3: prend en parametre la fonction obj
                $dernier=array_key_last($fonct_obj);
                $res=[];
                for($i=0; $i<$dernier;$i++){//met des 0 a la place de tous les coefficient
                    array_push($res, 0);
                }
                array_push($res,-1);// on rajoute -1 a la fin qui represente le -x0
                return $res;
            }

    /*        function res_ineq_reel_negatif($contraintes,$reel,$tab_reel){ //pour plus tard
            	$res_final=[];
            	foreach ($tab_reel as $key => $value) {
            		if($value<0){
            			$res=res_ineq($contraintes[$key],,$reel)
            		}
            	}
            }


            function tab_reel_negatif($tab_reel){
            	$tab_reel_negatif=[];
            	$indice_tab_reel_negatif=[];
            	foreach ($tab_reel as $key => $value) {
            		if ($value<0) {
            			$x=pas_deja_present($indice_tab_reel_negatif,$key);
            			if($x == true){
            				array_push($tab_reel_negatif,$value);
            				array_push($indice_tab_reel_negatif,$key);
            			}
            		}
            	}
            	return $tab_reel_negatif;
            }

            function pas_deja_present($indice_tab_reel_negatif,$x){
            	foreach ($indice_tab_reel_negatif as $key => $value) {
            		if($value==$x){
            			return false;
            		}
            	}
            	return true;
            }*/

     /*       $tab=[4,-3,-2];  //test tab_reel_negatif
            $res=tab_reel_negatif($tab);
            foreach ($res as $key => $value) {
            	echo $value . ' ';
            }echo '<br/>';
*/
            function indice_cont_x0($tab_reel){ //va changer apres avec 											res_ineq_reel_negatif
            	foreach ($tab_reel as $key => $value) {
            		if ($value<0) {
            			return $key;
            		}
            	}

            	}

            	function inverse_contrainte_x0($tab,$reel){
                $cont_inverse=[];
                foreach ($tab as $value) {
                    array_push($cont_inverse, $value);                    
                }
                $dernier=array_key_last($tab);
                $cont_inverse[$dernier]*= (-1);
                $cont_inverse[$reel]*=-1;
                return $cont_inverse;
            }

            function inverse_une_contrainte ($tab,$reel){
                for($i=0; $i<$reel; $i++){
                    $tab[$i]*=(-1);
                }
                return $tab;
            }


          

            function inverse_contraintes($tab,$reel){
                $res_final=[];
                foreach ($tab as $value) {
                    $res=inverse_une_contrainte($value,$reel);
                    array_push($res_final, $res);
                }
                return $res_final;
            }


            function fonction_obj_maj($cont_x0_inverse){
            	$res=[];
            	foreach ($cont_x0_inverse as $key => $value) {
            		array_push($res,-$value);
            	}
            	$dernier=array_key_last($cont_x0_inverse);
            	$res[$dernier]=0;
            	return $res;
            }
             function res_ineq($tab,$val,$reel){
                //$dernier=array_key_last($tab);
                if($val!=0){
                    $res= $tab[$reel]/(-$val);
                    if($res<0){
                        $res=0;
                    }
                }
                else{
                    $res=0;
                }
                return $res; 
                               
            }

            function minimum($tab){
                for($i=0;$i<=array_key_last($tab);$i++){
                    if ($tab[$i]!=0) {
                        $min=$tab[$i];
                        $res=$i;
                }
                }
                $dernier=array_key_last($tab);
                for ($i=0; $i<=$dernier; $i++) {
                    if ($min > $tab[$i] and $tab[$i]!=0){
                        $min = $tab[$i];
                        $res=$i;
                    }
                }
                return $res;
            }

            function inverse_contrainte_min($tab,$indice,$indice_cont_min){
                $cont_inverse=[];
                foreach ($tab as $value) {
                    array_push($cont_inverse, $value);                    
                }
                $cont_inverse[$indice]*= (-1);
                $dernier=array_key_last($tab);
                $x=$indice_cont_min+3;
                $cont_inverse[$x]*=-1;
                return $cont_inverse;


            }

            function div_variables($tab,$indice){//on divise par la variable entrante
                $variables_divise=[];
                $div_var=$tab[$indice];
                foreach ($tab as $value) {
                    $x=$value/$div_var;
                    array_push($variables_divise,$x);
                }
                return $variables_divise;
            }

            function contrainte_maj($tab, $indice,$res_div_variable,$cont_min ){
                $res_final=[];
                foreach ($tab as $key => $value) {
                    if ($key!=$cont_min) {
                        $res=calcul_contrainte($res_div_variable,$value[$indice],$indice);
                        array_push($res_final,$res);
                    }
                    else{
                        array_push($res_final,$value);
                    }

                }
                return $res_final;
            }

            function calcul_contrainte($tab,$int,$indice){
                $res=[];
                $dernier=array_key_last($tab);
                for($i=0 ; $i<= $dernier; $i++){
                    array_push($res,$int * $tab[$i]);
                }
                $res[$indice]=0;
                return $res;
            }

            function indice_zero($tab,$indice){
                $dernier=array_key_last($tab);
                $res=[];
                for($i=0; $i<=$dernier; $i++){
                    if ($i==$indice) {
                        array_push($res, 0);
                    }
                    else{
                        array_push($res, $tab[$i]);
                    }
                }
                return $res;
            }


            function contraintes_indice_zero($tab,$indice,$cont_min){
                $res_final=[];
                foreach ($tab as $key => $value) {
                    if ($key!=$cont_min) {
                        $res=indice_zero($value,$indice);
                        array_push($res_final, $res);
                    }
                    else{
                        array_push($res_final, $value);
                    }
                }
                return $res_final;
            }
           
          


            function somme_tableau($tab1,$tab2){
                $dernier=array_key_last($tab1);
                $res=[];
                for ($i=0; $i<=$dernier; $i++){
                    $x=$tab1[$i];
                    $y=$tab2[$i];
                    array_push($res, $x+$y);
                }
                return $res;
            }

            function somme_contraintes($tab1,$tab2,$cont_min){
                $res_final=[];
                foreach ($tab1 as $key=> $value) {
                    if ($key!=$cont_min) {
                        $res=somme_tableau($value,$tab2[$key]);
                        array_push($res_final, $res);
                    }
                    else{
                        array_push($res_final, $tab2[$key]);
                    }
                }
                return $res_final;
            }

            function fonct_obj_maj($fonct_obj,$res_div_variable,$indice){
                $x=$fonct_obj[$indice];
                $res_final=[];
                $dernier=array_key_last($fonct_obj);
                for ($i =0 ; $i<=$dernier; $i++){
                    array_push($res_final,$res_div_variable[$i]*$x);
                }
                $res_final[$indice]=0;
                return $res_final;
            }

            function fonct_obj_indice_egale_zero($fonct_obj,$indice){
                $fonct_obj[$indice]=0;
                return $fonct_obj;
            }
       
            function fonct_obj_somme_tab($tab1,$tab2){
                $dernier=array_key_last($tab1);
                $res=[];
                for ($i=0; $i<=$dernier; $i++){
                    $x=$tab1[$i];
                    $y=$tab2[$i];
                    array_push($res, $x+$y);
                }
                return $res;
            }

            function variable_traite($a,$tab){
                $dernier=array_key_last($tab);
                if ($dernier==0) {
                    return true;
                }
                for($i=0;$i<=$dernier;$i++){
                    if($a==$tab[$i]){
                        return false;
                    }
                }
                return true;
            }




        	?>
        </p> 
    </body>
</html>