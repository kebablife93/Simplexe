<html>
    <head>
        <title>Page de traitement</title>
        <meta charset="utf-8">
    </head>
    <body>
        <p><?php
//main
            $fonction_obj = [-2,2];//fonction objective
            echo 'la foction objective est ';
            foreach ($fonction_obj as $value) {
                echo $value .' ';
            } echo '<br/>';
            $contraintes=[  [1,1,4], //tableau a 2 dim contenant les 
                        [2,2,4], //contraintes
                        [3,2,5]
                        ];
            $reel=array_key_last($fonction_obj) +1;
            echo 'les contraintes sont '.'<br/>';
            foreach ($contraintes as $value) {
                foreach ($value as $valeur) {
                    echo $valeur . ' ' ;                          
                }echo '<br/>';
            }
            $fonct_obj=fonct_obj_avec_variables($fonction_obj,$contraintes);
            echo 'la nouvelle fonction obectif est ';
            foreach ($fonct_obj as $key => $value) {
                echo $value .' ';
            }echo '<br/>';
            $res_cont=[];//resultat pour la resolutiions de ineq
            $indice = negatif($fonct_obj);
            $contraintes_avec_variables=contrainte_cre_variable($contraintes); 
            echo 'voici les contraintes une fois qu\'on a ajouté les variables x4,x5,x6 : ' . '<br/>';
            foreach ($contraintes_avec_variables as $value) {
                foreach ($value as $valeur) {
                    echo $valeur . ' ' ;                          
                }echo '<br/>';
            }
            if ($indice != false){//si tte les var de la fonct_obj ne sont pas
                echo 'voici l\'indice à laquelle la fonction objective est positif : ';
                echo $indice;
                foreach ($contraintes as  $value) {//negatif alors on resout 
                    $res_negatif=res_ineq($value, $indice);//les ineq pour trouver 
                    array_push($res_cont,$res_negatif ) ;//la contrainte la +
                }                               //contraignante
            }
             echo 'voici le tableau regroupant les resultats des resolutions des inequations des contraintes afin de trouver la contrainte la plus contraignante :' . '<br/>';
             foreach ($res_cont as $key => $value) {
                 echo $value . ' '; 
             }echo '<br/>';
            $cont_min= minimum($res_cont);//on trouve la plus contraignante
            echo 'la contrainte la plus contraignante est la contrainte avec l\'indice numero ' . $cont_min.  '<br/>'. '<br/>' ;
            $contraintes_inverse=inverse_contraintes($contraintes_avec_variables,$reel);
            echo 'voici la fonction qu\'on obtien une fois qu\'on a une fois qu\'on a inversé les variables sauf les reel et les variables qu\' on a crée(x4,x5,x6): '. '<br/>';
            foreach ($contraintes_inverse as $value) {
                foreach ($value as $valeur) {
                    echo $valeur .' ';
                }echo '<br/>';
            } 
            echo 'par exemple, la 1ère ligne signifie : x4 = 4 - x1 - x2.'. '<br/>' . 'la 2ème signifie: x5 = 4 - 2x1 - 2x2.' . '<br/>' . 'et la 3ème: x6 = 5 - 3x1 - 2x2';
            echo '<br/>' . '<br/>';
            $var=$contraintes_inverse[$cont_min];//on inverse toutes les variables sauf la variable et le reel dans la contrainte la plus contraignante.
            $res_inverse_cont_min=inverse_contrainte_min($var,$indice,$reel);
            echo 'voici le tableau que l\'on obtient lorsque on inverse la contrainte la plus contraignante: '. '<br/>' ;
            foreach ($res_inverse_cont_min as $value) {
                echo $value . ' ';
            } echo '<br/>';
            echo 'cela veut dire que la 2ème ligne qui était: x5 = 4 - 2x1 - 2x2' . '<br/>' . 'est devenue 2x2 = 4 - 2x1 - x5 ';
            echo'<br/>';
            $res_div_variable=div_variables($res_inverse_cont_min,$indice);
            echo 'voici le tableau que l\'on obtient lorsque l\'on divise le tableau qu\'on a reçu juste avant par le coefficient de la variable active(ici, variable active : x2, coefficient variable actif : 2)' . '<br/>';
            foreach ($res_div_variable as $value) {         ///test
                echo $value . ' ';
            }echo '<br/>';
            echo 'ce qui veut dire :'. '<br/>' . 'x2 = 2 - x1 - 0.5x5' . '<br/>' . '<br/>' ;
            $contraintes_inverse[$cont_min]=$res_div_variable;
            echo 'voici ce que l\'on obtient lorsqu\'on met à jour le tableau des contraintes : ' . '</br>';
            foreach ($contraintes_inverse as $value) {
               foreach ($value as $valeur) {
                     echo $valeur.' ';
                }echo '<br/>';
            } echo '<br/>'; 
           echo 'voici un autre tableau que j\'ai créer dans lequel j\' ai les element dans qui sont dans la contrainte la plus contraignante par le coefficient de la variables active, dans toutes les contraintes: ' . '<br/>';
            $tab_contraintes2=contrainte_maj($contraintes_inverse,$indice,$res_div_variable,$cont_min);
            echo '<br/>';
            foreach ($tab_contraintes2 as $value) {  //test
                foreach ($value as $valeur) {
                   echo $valeur.' ';
                }echo '<br/>';
            }echo '<br/>';
            echo 'par exemple, dans la contrainte d\' indice 0, c\'est à dire : x4 = 4 - x1 - x2, j\'ai changé x2 par 2 - x1 - 0.5x5 , ce qui donne : ' . '<br/>' . 'x4 = 4 - x1 - (2 - x1 - 0.5x5) ' . 'et le resultat de ce qu\'il y\'a dans la parenthese, je l\'ai mis dans ce tableau que je vien de créer' . '<br/>' . '<br/>' ; 
            echo 'suite a cela je change le coefficient de la variable active par 0 dans tous les contrainte car j\'utilise ce coefficient dans le tableau que je vient de creer que j\'utiliserai plus tard; sauf pour la contrainte la plus contraignante : ' . '<br/>';
            $indice_zero=contraintes_indice_zero($contraintes_inverse,$indice,$cont_min);
            foreach ($indice_zero as $value) { //test
                foreach ($value as $valeur) {
                    echo $valeur . ' ';
                }echo '<br/>' . '<br/>' ;
            }
            echo 'voici le tebleau des contraintes que j\'obtien lorsque j\'additionne les coefficient des contraintes que j\'ai dans mon tableau des contraintes, avec les coefficient que j\'ai dans le tableau que je vien de créer : ' ;
            
            $somme_contraintes=somme_contraintes($indice_zero,$tab_contraintes2,$cont_min);
            echo '<br/>';
            foreach ($somme_contraintes as $value) {
                foreach ($value as $valeur) {
                    echo $valeur.' ';
                }echo '<br/>';
            }
            echo 'par exeple, la 1ère ligne est obtenu en additionant [-1,0,4,1,0,0] (x4 = 4 -x1) + [1,-1,4,1,0,0] (x4 = 4 +x1 - 1(pas x2 car on a remplacer x2 juste avant)), on obtient alors : ' . '<br/>' . 'x4= 2 +(-1) + 0.5x5' . '<br/>' . 'pour la 2ème ligne on a : ' .'<br/>' . 'x2= -2 -x1 -0.5x5' . '<br/>' . 'et pour la 3ème on a : ' .'<br/>' . 'x6 = 1 - 2 - x1 + x5 ' . '<br/>' . '<br/>' ;
            echo 'comme nous n\'avons plus de x2 dans les contrainte 0 et 2 on additionne les nombres : ' . '<br/>';
            $indice_plus_reel=indice_plus_reel($contraintes_inverse,$indice,$reel,$cont_min);
            foreach ($indice_plus_reel as $value) {
                foreach ($value as $valeur) {
                    echo $valeur . ' ';
                }echo '<br/>';
            }
           echo 'ainsi nous avons, pour la contrainte d\'indice 0, nous avons' . '<br/>' .'x4 = 3 - x1' . '<br/>' . ' et pour la contrainte d\'indice 2 nous avons : ' . '<br/>' . 'x6 = 3 - 3x1';
           
       





//fonctions
        //on voit si toutes les variables de la fonctions obj sont negatifs
            function negatif ($tab) {
                foreach ($tab as $key=> $value) {

                    if ($value > 0){//si non on retoune la variable
                        return $key;
                    }
                }
                return false; //si oui on retourne false.
            }

            
            

            //on renvoie les resultats des inequations
            function res_ineq($tab,$indice){
                $dernier=array_key_last($tab);
                $res= $tab[$dernier]/$tab[$indice];
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
                $dernier=array_key_last($tab);
                $tab_inverse=[];
                foreach ($tab as $value) {
                array_push($tab_inverse, -$value);
            }
                for($i=$reel; $i<=$dernier; $i++){
                    $tab_inverse[$i]*=(-1);
                }
                return $tab_inverse;
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

            function div_variables($tab,$indice){//on divise par la variable actif
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
            function calcul_contrainte($tab,$indice,$res_div_variable){
                $res=[];
                $x=$tab[$indice];
                $dernier=array_key_last($res_div_variable);
                for($i=0; $i<=$dernier; $i++){
                    $prod=$res_div_variable[$i] * $x;
                    array_push($res, $prod);
                }
                return $res;
            }

            function contrainte_maj($tab, $indice,$res_div_variable,$cont_min ){
                $res_final=[];
                foreach ($tab as $key=> $value) {
                    if ($key!=$cont_min) {
                        $res=calcul_contrainte($value,$indice,$res_div_variable);
                        array_push($res_final, $res);
                    }
                    else{
                        array_push($res_final, $res_div_variable);
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

        
         
 //test         
             //foreach ($contraintes as $value) {//test afficher les contraintes
          //  foreach ($value as $res) {
            //    echo $res.' ';
            //}echo '<br/>';
        //}

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
            ?>
        </p> 
    </body>
</html>