<?php
  $cnxDatas = parse_ini_file('DB.ini');

          /*  %s  = pattern - Type de serveur avec lequel on va travailler : ces infos pour y accéder son nom ; address de l'hote (ip) */
  $dsn = sprintf('mysql:dbname=%s;host:%s', $cnxDatas['DB_NAME'], $cnxDatas['DB_HOST']);

try{
  $cnx = new PDO($dsn, $cnxDatas['DB_USER'], $cnxDatas['DB_DB_PASS']);
                      // hostname, mdp
} catch(PDOExecption $e){

    $e->getMessage(); //Affiche le msg d'erreur
    /* Cette var e est un objet qui va contenir des propriétés et methodes -> qui équivaut au point en js*/
}


?>
