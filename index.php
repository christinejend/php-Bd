<?php
  $cnxDatas = parse_ini_file('DB.ini');

          /*  %s  = pattern - Type de serveur avec lequel on va travailler : ces infos pour y accéder son nom ; address de l'hote (ip) */
  $dsn = sprintf('mysql:dbname=%s;host:%s', $cnxDatas['DB_NAME'], $cnxDatas['DB_HOST']);

try{
  $cnx = new PDO($dsn, $cnxDatas['DB_USER'], $cnxDatas['DB_MDP']);
                      // hostname, mdp
} catch(PDOExecption $e){

    $e->getMessage(); //Affiche le msg d'erreur
    /* Cette var e est un objet qui va contenir des propriétés et methodes -> qui équivaut au point en js*/
}

$req = 'SELECT word FROM pendu.words ORDER BY Rand() LIMIT 1 ';
  $pdoSt = $cnx->query($req); //instance
          // FETCHALL = Récupération d'un tableau avec tous nos mots
          // PDO:: (classe) sont des options
          //FETCH Renvoit directement notre mot
  $words = $pdoSt->fetch(PDO::FETCH_COLUMN);
          // FETCH_COLUMN : Convertir le tableau de tableau en tableau de mots


  var_dump($words);
