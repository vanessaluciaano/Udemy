<?php

if(!isset($_SESSION['usuario'])){
    header('Location: index.php?erro=1');
}

session_start();

require_once('db_class.php');

$texto_tweet = $_POST['texto_tweet'];
$id_usuario = $_SESSION['id_usuario'];

if($texto_tweet != '' && $id_usuario != ''){
    $objDb = new db();
    $link = $objDb->conecta_mysql();

    $sql = "INSERT INTO tweet(id_usuario, tweet)values(123, '$texto_tweet')";

    mysqli_query($link, $sql);

}


?>