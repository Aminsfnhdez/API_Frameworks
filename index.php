<?php

include 'bd/BD.php';

header('Access-Control-Allow-Origin: *');

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['id'])) {
        $query="SELECT FROM frameworks WHERE id=".$_GET['id'];
        $resultado=metodoGet($query);
        echo json_decode($resultado->fetch(PDO::FETCH_ASSOC));
    } else {
        $query="SELECT * FROM frameworks";
        $resultado = metodoGet($query);
        echo json_decode($resultado->fetchAll());
    }
    


}  