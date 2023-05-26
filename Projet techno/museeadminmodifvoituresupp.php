<?php
    $id = mysqli_connect("localhost:3307","root","","musee");
    $idc = $_GET["numero"];
    $req = "DELETE FROM `cars` WHERE `cars`.`idc` = $idc";
    $res = mysqli_query($id, $req);
    //echo mysqli_error($id);
    header("refresh:0, url=museeadmin.php");
?>