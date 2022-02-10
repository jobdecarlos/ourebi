<?php
#Exercice 1
/*
for($n=1; $n<=5; $n++){
    for($i=1; $i<=$n; $i++){
        echo"*";

     
        
    }echo "<br />"; 

    
}
*/
#Exercice2



#$a                   #Valide 
#$_a                    #Valide 
#$a_a                   #Valide 
#$AAAA                   #Valide     
#$a!                      #Invalide 
#$1a                     #Invalide 
#$a1                     #Valide 

#Exercice 3

/*
$sexe="F";

if($sexe =='M'){
    echo" Bravo vous êtes Masculin";

}elseif ($sexe=='F') {
    echo"Bravo vous êtes Féminine ";
    
} 

*/


#Exercice4
/*
$budget="1553,89";
$achat="1554,76";

if($budget>$achat){
    echo "Bravo vous avez les moyens d'en acheter";
}elseif($budget<$achat){
    echo "Désolé vous ne pouvez pas effectuer cet achat ";

}
*/
#Exercice5
/*
$heure=['0','1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23'];

$i='14';

for($i='0'; $i <=count($heure);){
    if($i='0'&& $i<='12'):
        echo" Bonjour";
        

    elseif($i='12'&& $i<='23'):
        echo" Bonsoir  ";

    
    endif;  
    
}
*/
/*
$heure='';

if($heure = '0' && $heure <='12'):
    
    echo"Bonjour";

elseif($heure ='12' && $heure<='23'):
   
    echo" Bonne soirée";

else :
    echo"l'heure est incorrecte ";

endif;

*/









?>