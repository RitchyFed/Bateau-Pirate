<?php
$chemin ="template/assets/img/";













echo"<form method='GET'>
     <br><input type='texte' name='nom' placeholder=\"le nom de l'utilisateur \">
     <br><input type='email' name='email' placeholder=\"l'email de l'utilisateur\">
     ";
     
     echo"
     <br><input type='submit' name='cmd' value='reserver'>
     </form>";
     
<<<<<<< HEAD
    $req = $dbh->prepare("INSERT INTO utilisateur (id, niveau, nom, email) VALUES(NULL, '2', ':nom', ':email') ");
=======
    $req = $dbh->prepare("INSERT INTO utilisateur (`id`, `niveau`, `nom`, `email`) VALUES(NULL, 2, :nom, :email) ");
>>>>>>> 64c54b4e5dd714587947350ea72623c66dba42be
    
    
     $req->Bindparam(":nom", $_GET['nom']);
         $req->Bindparam(":email", $_GET['email']);
     
     if ($req->execute()){
             echo "l'utilisateur " .$_GET['nom']." a été ajouté";
         }else{
     echo "l'utilisateur " .$_GET['nom']." n'a pas été ajouté";
     echo "<br>".$req->errorinfo()[2];
     }
     

 

?>


