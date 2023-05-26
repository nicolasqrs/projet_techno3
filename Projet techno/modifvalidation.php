<?php
    $id = mysqli_connect("localhost:3307","root","","musee");
    $idt = $_GET["numero"];
    $req = "update users set validation = '1'
        where idu=$idt";
    $res = mysqli_query($id, $req);
    //echo mysqli_error($id);
    header("refresh:0, url=museeadmin.php");
?>