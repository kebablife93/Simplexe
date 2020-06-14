<html>
    <head>
        <title>Page de traitement</title>
        <meta charset="utf-8">
    </head>
    <body>
        <p><?php
//main
        // Fonction objectif
            $fonction_obj = [5,7];
            echo 'la foction objective est ';
            foreach ($fonction_obj as $value) {
                echo $value .' ';
            } 
            $tab_obj=array();
            foreach ($fonction_obj as $value) {
                array_push($tab_obj, $value);
            } 
            echo '<br/>';
            // print_r($tab_obj); AFFICHAGE DU TABLEAU DE LA FONCTION OBJECTIVE
            echo '<br/>';

        // Fonction contraintes       
            $contraintes=[  [3,4,6], //tableau a 2 dim contenant les 
                        [-2,-7,-5], //contraintes
                        [6,-8,-2]
                        ];

            $reel=array_key_last($fonction_obj) +1;

            echo 'les contraintes sont '.'<br/>';
            foreach ($contraintes as $value) {
                foreach ($value as $valeur) {
                    echo $valeur . ' ' ;                          
                }echo '<br/>';
            }
            $tab_cont=array();
            foreach ($contraintes as $value) {
                array_push($tab_cont, $value);

            }
            //print_r($tab_cont); AFFICHAGE DU TABLEAU DE CONTRAINTES
            
            echo '<br/>';
            echo '<br/>';

        //Verifie si il exite une valeur négative dans le égalités 

            foreach (end($tab_cont) as $value) {
                if ($value <0) 
                    echo "Il existe une valeur négative et c'est : ". $value;
                    echo '<br/>';                      
            }echo '<br/>';

        /////////////////////////////////////////
            echo '<br/>';
            echo '<br/>';

            echo "<h1> Autres </h1>";


            $fonct_obj=fonct_obj_avec_variables($fonction_obj,$contraintes);
            echo 'la nouvelle fonction obectif est ';
            foreach ($fonct_obj as $key => $value) {
                echo $value .' ';
            }echo '<br/>';
          //  $indice = negatif($fonct_obj,0);
            //echo $indice . '<br/>' ;
            $dernier=array_key_last($fonct_obj);
            $contraintes_avec_variables_HZ=contrainte_cre_variable($contraintes);
            $contraintes_inverse=inverse_contraintes($contraintes_avec_variables_HZ,$reel);
            for($a=0 ; $a<=$dernier ; $a++){ //changer pour enlever reel
               if ($fonct_obj[$a]>0 and $a !=$reel) {
                echo 'la variable entrante est ' . $fonction_obj[$a] . ' d\'indice ' . $a . '<br/>' ;
                    $res_cont=[];//resultat pour la resolutiions de ineq
                    foreach ($contraintes_avec_variables_HZ as $value) {
                        $res_ineq=res_ineq($value,$value[$a],$reel);
                        array_push($res_cont,$res_ineq);
                    } 
                    $indice_cont_min=minimum($res_cont);
                    echo 'la contrainte active est : ' . $indice_cont_min . '<br/>' ;
                    $cont_min_inverse=inverse_contrainte_min($contraintes_inverse[$indice_cont_min],$a,$reel);
                    foreach ($cont_min_inverse as $key => $value) {
                        echo $value . ' ';
                    }echo '<br/>';
                    $cont_active_divise=div_variables($cont_min_inverse,$a);
                    echo 'la contrainte active divise est egale a' . '<br/>';
                    foreach ($cont_active_divise as $value) {
                        echo $value . ' ';
                    }echo '<br/>' . '<br/>' ;
                    $contraintes_inverse[$indice_cont_min]=$cont_active_divise;
                    echo 'les contraintes sont :' . '<br/>';
                    foreach ($contraintes_inverse as $key => $value) {
                        foreach ($value as $key => $valeur) {
                            echo $valeur . ' ';
                        }echo '<br/>';
                    }echo '<br/>';
                    $tab_containtes2=contrainte_maj($contraintes_inverse, $a,$cont_active_divise,$indice_cont_min );
                    echo 'voici le tableau contenant le resultat du calcul' . '<br/>' ;
                    foreach ($tab_containtes2 as $key => $value) {
                        foreach ($value as $key => $valeur) {
                            echo $valeur . ' ';
                        }echo '<br/>';
                    }echo '<br/>';
                    echo 'voici le tableau des contraintes avec un 0 ' . '<br/>' ;
                    $contraintes_inverse=contraintes_indice_zero($contraintes_inverse,$a,$indice_cont_min);
                    foreach ($contraintes_inverse as $key => $value) {
                        foreach ($value as $key => $valeur) {
                            echo $valeur . ' ';
                        }echo '<br/>';
                    } echo '<br/>' . '<br/>' ;
                    echo 'voici le tab des contraintes une fois additionné :' . '<br/>';
                    $contraintes_inverse=somme_contraintes($contraintes_inverse,$tab_containtes2,$indice_cont_min);
                    foreach ($contraintes_inverse as $key => $value) {
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
                    $contraintes_inverse[$indice_cont_min]=inverse_contrainte_min($contraintes_inverse[$indice_cont_min],$a,$reel);
                    foreach ($contraintes_inverse as $value) {
                        foreach ($value as $key => $valeur) {
                            echo $valeur . ' ';
                       }echo '<br/>' . '<br/>';
                    }
                }
                else{
                    $a++;
                }

            }
            

                    
            
            echo 'la solution optimale est ' . $fonct_obj[$reel];






//fonctions
        //on voit si toutes les variables de la fonctions obj sont negatifs
            function negatif ($tab,$a) {
                $dernier=array_key_last($tab);
                for($i=$a ; $i<=$dernier;$i++){
                    if ($tab[$i]>0) {
                        return $i;  
                    }
                } 
                return 'true';//si oui on retourne true.
            }

            
            

            //on renvoie les resultats des inequations
            function res_ineq($tab,$val,$reel){
                $dernier=array_key_last($tab);
                $res= $tab[$reel]/$val;
                return $res; 
                               
            }
            
            
           

            function minimum($tab){
                $min=$tab[0];
                $res=0;
                $dernier=array_key_last($tab);
                for ($i=1; $i<=$dernier; $i++) {
                    if ($min > $tab[$i]){
                        $min = $tab[$i];
                        $res=$i;
                    }
                }
                return $res;
            }

            function fonct_obj_avec_variables($fonct_obj,$contraintes){
                $dernier_cont=array_key_last($contraintes);
                $dernier_fonct=array_key_last($fonct_obj);
                $res=[];
                for($i=0; $i<= $dernier_fonct; $i++ ){
                    array_push($res, $fonct_obj[$i]);
                }
                array_push($res,0);
                for($i=0; $i<= $dernier_cont; $i++){
                    array_push($res, 0);
                }
                return $res;
            }

            function crea_variable($tab,$dernier,$i){
                $res=$tab;
                for($j=0; $j<= $dernier; $j++){
                    if ($j==$i) {
                         array_push($res, 1);
                     }
                     else{
                        array_push($res, 0);
                     }
                }
                return $res;
            }

            function contrainte_cre_variable($tab){
                $res_final=[];
                $dernier=array_key_last($tab);
                $i=0;
                foreach ($tab as $value) {
                    $res=crea_variable($value,$dernier,$i);
                    array_push($res_final, $res);
                    $i+=1;
                }
                return $res_final;
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

            function inverse_contrainte_min($tab,$indice,$reel){
                $cont_inverse=[];
                foreach ($tab as $value) {
                    array_push($cont_inverse, $value);                    
                }
                $cont_inverse[$indice]*= (-1);
                $dernier=array_key_last($tab);
                for ($i=$reel+1; $i<= $dernier; $i++){
                    $cont_inverse[$i]*= (-1);
                }
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

            function indice_plus_reel1($tab,$indice,$reel){
                $var_indice=$tab[$indice];
                $x=$tab[$reel];
                $tab_maj=$tab;
                $tab_maj[$reel]=$var_indice + $x;
                $tab_maj[$indice]=0;
                return $tab_maj;
            }

            function indice_plus_reel($tab,$indice,$reel,$cont_min){
                $res_final=[];
                foreach ($tab as $key=> $value) {
                    if ($key!=$cont_min) {
                        $res=indice_plus_reel1($value,$indice,$reel);
                        array_push($res_final, $res);
                    }
                    else{
                        array_push($res_final, $value);
                    }
                }
                return $res_final;
            }
        

            /*function calcul_contrainte($tab,$indice,$res_var_divise,$cont_min){
                $dernier=array_key_last($res_var_divise);
                
                foreach ($tab as $key=> $value) {
                    $res_final=[];
                    if ($key != $cont_min) {
                       for($i=0; $i<$dernier; $i++){
                        $res=[];
                        $x=$value[$i];
                        $y=$res_var_divise[$i];
                        array_push($res, $x*$y);
                       } 
                       array_push($res_final, $res);
                    }
                    array_push($res_final, $res_var_divise);
                }
                return $res_final;
            }

            */
            function calcul_contrainte($tab,$int,$indice){
                $res=[];
                $dernier=array_key_last($tab);
                for($i=0 ; $i<= $dernier; $i++){
                    array_push($res,$int * $tab[$i]);
                }
                $res[$indice]=0;
                return $res;
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

        
         
 //test         
             //foreach ($contraintes as $value) {//test afficher les contraintes
          //  foreach ($value as $res) {
            //    echo $res.' ';
            //}echo '<br/>';
        //}



            /*foreach ($contraintes_avec_variables_HZ as $value) { //test contraintes avec variables hors zone
                foreach ($value as $valeur) {
                    echo $valeur . ' ';
                }echo '<br/>';
            }*/




            /* foreach ($contraintes_inverse as $value) {// test affiche 
            foreach ($value as $res) { //contraintes inverse
                echo $res.' ';
                }echo '<br/>';
            }*/
         


                /* $tab=[1,2,5,6,7,-9];  // test array_push
            //array_push($tab, 5);
            
             $tab1=[];
                foreach ($tab as $value) {
                    array_push($tab1, -$value);

                }
            foreach ($tab1 as $value) {
                echo $value;
            }
            */


             //$tab=[9,5,8,5,7,9,3,7];  //function minimum
            //$res=minimum($tab);
            //echo $res;


            /* $tab=[1,4,6]; // test crea_variables
            $dernier=2;
            $i=1;
            $res=crea_variable($tab,$dernier,$i);
            foreach ($res as $value) {
                echo $value . ' ';
            }*/


            /* $tab=[[1,2,4],  //test contrainte_cre_variable
                    [2,4,3],
                    [1,2,3]];
            $res=contrainte_cre_variable($tab);
            foreach ($res as $value) {
                foreach ($value as $valeur) {
                    echo $valeur .' ';
                }echo '<br/>';
            }*/

           

           /*  $tab=[[1,4,3,0,0,1],[-2,4,3,0,1,0],[5,1,4,1,0,0]];
            $reel=2;
            $res=inverse_contraintes($tab,$reel); //test inverse_contrainte
            foreach ($res as $value) {
                foreach ($value as $valeur) {
                    echo $valeur . ' ';
                }echo '<br/>';
            }*/



           // $tab=[1,6,-7,-2];  //function inverse_contraintes
            //$res=inverse_contraintes($tab);
            //foreach ($res as $value) {
              //  echo $value;
            //}

            /* $indice=3; //test indice_plus_reel
           $res=[];
           foreach ($contraintes as $value) {
                $res1=indice_plus_reel($value,$indice);
                array_push($res, $res1);
            } 
            foreach ($res as $value) {
                foreach ($value as $valeur) {
                    echo $valeur.' ';
                }echo '<br/>';
            }*/

            /*   $tab=[2,5,3,4]; //test calcul_contrainte
            $indice=2;
            $tab2=[5,1,5,3];
            $res=calcul_contrainte($tab,$indice,$tab2);
            foreach ($res as $value) {
                echo $value.' ';
            }
          */

             /*  $tab1=[[2,5,3,4,2], //test contrainte_maj
                    [4,2,3,1,4],
                    [2,4,5,1,4]];
            $indice=2;
            $tab=[2,6,3,4,5];
            $cont_min=1;
            $res=contrainte_maj($tab1,$indice,$tab,$cont_min);
            foreach ($res as $value) {
                foreach ($value as $valeur) {
                    echo $valeur.' ';
                }echo'<br/>';
            }*/


             /* $tab=[1,5,2,3,4]; // test indice_zero
            $indice=3;
            $res=indice_zero($tab,$indice);
            foreach ($res as $value) {
                echo $value . ' ';
            }*/


            /* $tab=[[1,3,5,4,6],  //test contrainte_indice_zero
                    [2,4,6,8,3],
                    [5,7,6,2,1]];
            $indice=2;
            $cont_min=1;
            $res=contraintes_indice_zero($tab,$indice,$cont_min);
            foreach ($res as $value) {
                foreach ($value as $valeur) {
                    echo $valeur . ' ';
                }echo '<br/>';
            }*/


             /*$tab1=[1,2,5,6]; //test somme_tableau
         $tab2=[3,5,4,6];
         $res=somme_tableau($tab1,$tab2);
         foreach ($res as $value) {
             echo $value.' ';
         }*/

         /* $tab1=[[1,2,4,5],  //test somme_contraintes
                    [2,4,6,3],
                    [5,4,3,2]];
            $tab2=[2,4,3,6];
            $res=somme_contraintes($tab1,$tab2);
            foreach ($res as $value) {
                foreach ($value as $valeur) {
                    echo $valeur.' ';
                }echo "<br/>";
            }*/


            /*    $tab1=[[1,1,1,1,1],  ///test somme_contraintes
                    [1,1,1,1,1],
                    [1,1,1,1,1]];
            $tab2=[[1,1,1,1,1],
                    [1,1,1,1,1],
                    [1,1,1,1,1]];
            $cont_min=1;
           $res=somme_contraintes($tab1,$tab2,$cont_min);
           foreach ($res as $value) {
               foreach ($value as $valeur) {
                   echo $valeur . ' ';
               }echo '<br/>';
           }
        */

           /*    $tab=[[1,1,1,1],  //test indice_plus_reel
                    [1,1,1,1],
                    [1,1,1,1]];
            $indice=1;
            $reel=3;
            $cont_min=0;
            $res=indice_plus_reel($tab,$indice,$reel,$cont_min);
            foreach ($res as $value) {
                foreach ($value as $valeur) {
                    echo $valeur.' ';
                }echo '<br/>';
            }*/

             /*   $fonct_obj=[2,4,6,3,5];  //test fonct_obj_indice_egale_zero
           $indice=2;
           $res=fonct_obj_indice_egale_zero($fonct_obj,$indice);
           foreach ($res as $key => $value) {
               echo $value . ' ';
           }
            */
            ?>
        </p> 
    </body>
</html>