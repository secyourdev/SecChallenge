<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <link href="style.css" rel="stylesheet" >

    <title>Projet</title>
  </head>
  <body>
    <?php
      session_start();
      require_once('nav.php');
      
    ?>
    <div class="lien">
    <a href="index.php">
      Accueil ></a>
    <a href="cours.php"> Cours ></a>
    <a href="metasploitable.php"> Metasploitable 2 </a>
  </div>
    <section class="cours-page">
        <h2 class="cours">Metasploitable 2</h2>
        <h3 class="texte-cours"> Metasploitable est un environnement de test qui fournit un endroit sécurisé pour effectuer des tests de pénétration et des recherches sur la sécurité. Pour votre environnement de test, vous avez besoin d'une instance Metasploit qui peut accéder à une cible vulnérable. Les sections suivantes décrivent les exigences et les instructions pour configurer une cible vulnérable.</h3>
        <h3 class="partie-cours">Téléchargement et configuration de Metasploitable 2</h3>
        <h3 class="texte-cours">Le moyen le plus simple d'obtenir une machine cible est d'utiliser Metasploitable 2, qui est une machine virtuelle Ubuntu Linux intentionnellement vulnérable, conçue pour tester des vulnérabilités courantes. Cette machine virtuelle (VM) est compatible avec VMWare, VirtualBox et d'autres plateformes de virtualisation courantes.</h3>
        <h3 class="texte-cours">Metasploitable 2 est disponible aux adresses suivantes :</h3>
        <a class="texte-lien" href="https://information.rapid7.com/metasploitable-download.html">https://information.rapid7.com/metasploitable-download.html</a>
        <a class="texte-lien" href="https://sourceforge.net/projects/metasploitable/">https://sourceforge.net/projects/metasploitable/</a>
        <h3 class="texte-cours">Le fichier compressé fait environ 800 Mo et peut prendre un certain temps à télécharger sur une connexion lente. Après avoir téléchargé le fichier Metasploitable 2, vous devrez le décompresser pour voir son contenu.</h3>
        <h3 class="partie-cours">Démarrage, connexion et identification</h3>
         <h3 class="texte-cours">Une fois que la VM est disponible sur votre bureau, ouvrez-la et exécutez-la avec VirtualBox. Le login pour Metasploitable 2 est msfadmin:msfadmin. Après vous être connecté à Metasploitable 2, vous pouvez identifier l'adresse IP qui a été attribuée à la machine virtuelle. Il suffit d'entrer ifconfig à l'invite de commande pour voir les détails de la machine virtuelle.
</h3>
        <img class="image-cours" src="metasploitable.png">
        <h3 class="texte-cours">La commande renvoie la configuration de eth0. Vous devrez prendre note de l'adresse inet. Il s'agit de l'adresse que vous utiliserez à des fins de test.</h3>
    </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
  </body>
</html>