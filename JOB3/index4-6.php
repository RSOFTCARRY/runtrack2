<?php

$ligne1 =0;
$colonne =0;
$nbsp ="&nbsp" . " &nbsp";


// $ligne2
//  _______________
// |               |
// |               |
// |_______________|

while ($ligne1 <21)
   {   if ($ligne1)
    echo "_";
$ligne1 = $ligne1+1;
}
echo "<br/>";

$ligne1=0;
while ($colonne <9)
{     while ($ligne1<21)
        {if ($ligne1==0 || $ligne1==20)
    {echo "|";
    $ligne1 = $ligne1+1;}

    

        else { echo "&nbsp" . "&nbsp";}
        
        $ligne1 = $ligne1+1;
echo "<br/>";
}}

while ($ligne1 <21)
{ if ($ligne1==1)
    echo "|"; }
   { if ($ligne1 >1 && <18) 
    echo "_";}

?>


