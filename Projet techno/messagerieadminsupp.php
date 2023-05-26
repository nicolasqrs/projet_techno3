<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $id= mysqli_connect("localhost:3307", "root","","musee");
        $idt = $_GET["numero"];
        echo $idt;
        $req = "delete from messages where idm=$idt";
        echo $req;
        mysqli_query($id, $req);
        echo mysqli_error($id);
        header("location:messagerieadmin.php");
    ?>
</body>
</html>