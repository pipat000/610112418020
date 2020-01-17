<?php 

$Sport = $_POST['sl_Sport']?$_POST['sl_Sport']:$_GET['getSport'];

cal_Sport($Sport);
function cal_Sport($Sport){
    switch ($Sport){
        case "1" : 
            $Sport = "Football";
        break;
        case "2" :
            $Sport = "Tenis";
        break;    
        default :
            $Sport = "Out of type.";
            
    }
    echo $Sport;
};
?>