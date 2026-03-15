<?php

$data_user='ahmed';
$data_paas= '1234' ;

// data from nput
$user = $_POST ["user"];
$passower = $_POST ["pass"];

function replace(){
    header('location:./../u-info.php');
}
// condtion 
if($data_user==$user and $data_paas == $passower){
    replace();
}
else  {
   header('location:./../f-error/chec.html') ;
}

?>