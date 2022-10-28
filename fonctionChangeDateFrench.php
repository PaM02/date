                               
<?php
/*---------------------------------------------------------------*/
/*
    Titre : Affiche la date littérale en Fran&ccedil;ais                                                                 
                                                                                                                          
    URL   : https://phpsources.net/code_s.php?id=343
    Auteur           : frankoi                                                                                            
    Date édition     : 21 Fév 2008                                                                                        
    Date mise à jour : 05 Sept 2019                                                                                      
    Rapport de la maj:                                                                                                    
    - fonctionnement du code vérifié                                                                                    
*/
/*---------------------------------------------------------------*/

    function MeF_Date($str) // Change une date aaaa/mm/dd en dd mois aaaa
    {
    // Récupère la date dans des variables
    list($annee, $mois, $jour) = explode("-", $str);
    // Retire le 0 des jours
    if ($jour=="00") $jour="";
    elseif (substr($jour, 0, 1)=="0") $jour=substr($jour, 1, 1);
    // Met le mois en littéral
    $moisli{1} = "janvier";
    $moisli{2} = "février";
    $moisli{3} = "mars";
    $moisli{4} = "avril";
    $moisli{5} = "mai";
    $moisli{6} = "juin";
    $moisli{7} = "juillet";
    $moisli{8} = "août";
    $moisli{9} = "septembre";
    $moisli{10} = "octobre";
    $moisli{11} = "novembre";
    $moisli{12} = "décembre";
    if (substr($mois, 0, 1)=="0") $mois=substr($mois, 1, 1);
    $mois = $moisli[$mois];
    // Met en forme 
    $str = $jour.' '.$mois.' '.$annee;
    return $str;
    }
?>

<?php

    //test
    $date1 = "2020-02-06";
    echo MeF_Date($date1).'<br>';
    $date2 = '2020-11-24';
    echo MeF_Date($date2).'<br>';
    $date3 = '2020-10-5';
    echo MeF_Date($date3).'<br>';
?>

