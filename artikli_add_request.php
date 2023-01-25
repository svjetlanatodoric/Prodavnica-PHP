<?php 
    if(isset($_POST['naziv'])){
        $conn = new mysqli("localhost", "root", "", "prodavnica");

        $sql_query = 
        "INSERT INTO `artikli`
            (`naziv`,
            `sifra`,
            `opis`, 
            `cijena`, 
            `kolicina`)
        VALUES
            ('$_POST[naziv]', 
            '$_POST[sifra]', 
            '$_POST[opis]', 
            $_POST[cijena], 
            $_POST[kolicina])";
        
        echo $sql_query;

        $conn->query($sql_query);

        $conn->close();
    }

    header("Location: artikli_list.php");
?>