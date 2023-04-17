<?php
    ob_start();
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    include("bdd/acces_BDD.php");
    if ($_SESSION['admin']){
        $chall=$BDD->prepare('SELECT IdChallenge FROM challenge');
        $chall->execute(array());

        foreach($chall as $challLigne){
            $user=$BDD->prepare('SELECT id FROM utilisateur');
            $user->execute(array());
            foreach($user as $userLigne){
                $result=$BDD->prepare('SELECT * FROM rela_challenge_utilisateur WHERE IdChallenge=? AND IdUtilisateur=?');
                $result->execute(array($challLigne['IdChallenge'],$userLigne['id']));
                
                if($result->rowCount() == 0){
                    $req = $BDD -> prepare("INSERT INTO rela_challenge_utilisateur (IdChallenge,IdUtilisateur,Score) VALUES(?,?,?)");
                    $req->execute(array($challLigne['IdChallenge'],$userLigne['id'],0));

                }
            }
        }
        
        echo 'Mise à jour effectuée';
        
    }
    else{
        
        echo 'Vous ne pouvez pas accéder à cette page.' ;
        
    }
   
?>

<?php 
ob_end_flush();
?>
