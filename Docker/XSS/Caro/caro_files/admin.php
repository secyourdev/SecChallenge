<?php
session_start();



    if (isset($_SESSION['valid']) && $_SESSION['valid'] == true){
                   
        echo 'Voici la réponse du challenge : 4f2cbc87727679862bb4f14a0346fcab';
                   
    }else{
        echo "You need to be logged in as admin ";
    }



?>