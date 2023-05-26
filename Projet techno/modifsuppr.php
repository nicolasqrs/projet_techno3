<?php
    $id = mysqli_connect("localhost:3307","root","","musee");
    $idt = $_GET["numero"];
    $req = "DELETE FROM `users` WHERE `users`.`idu` = $idt";
    $res = mysqli_query($id, $req);
    //echo mysqli_error($id);
    header("refresh:0, url=museeadmin.php");
?>