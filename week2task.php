<?php

$voterage = 18;
$pvc = 'yes';
$voterward = 020;

if($voterage >= 18 && $pvc === 'yes' && $voterward === 020){
    echo 'Voter eligible to vote';
}
else{
    echo'Voter not eligible to vote';
}


?>