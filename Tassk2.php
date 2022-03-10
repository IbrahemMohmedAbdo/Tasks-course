
<?php







function next_character($cha){

    $cha = 'z';
    $next_cha = ++$cha; 
   
    if (strlen($next_cha) > 1) 
    {
     $next_cha = $next_cha[0];
     }
    echo $next_cha;
}
   
echo next_character($cha);
















    ?>

















