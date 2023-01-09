<?php
try
{
   $bdd = new PDO ('mysql:host=localhost;dbname=suivi_poids', 'root', 'mysql');
}
catch (Exception $e)
{
    die('Erreur:'.$e->getMessage());
}

?>