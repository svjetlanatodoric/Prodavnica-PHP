<?php 
    if(isset($_POST['korisnickoIme'])){
        $db = new mysqli("localhost", "root", "", "prodavnica");

        $sql_query = "
        SELECT 
            `korisnicko_ime`, 
        FROM `korisnici`
        WHERE `korisnicko_ime` = '$_POST[korisnickoIme]'";

        $response = $db->query($sql_query);

        if($response->num_rows == 0){
            $sql_query = "INSERT INTO `korisnici`
                (`korisnicko_ime`,
                `password`)
            VALUES
                ('$_POST[korisnickoIme]', 
                '$_POST[password]')";
    
            $db->query($sql_query);
            
            setcookie('korisnickoIme', $_POST['korisnickoIme'], time() + 3600);
        }
     
        $db->close();
    }

    header("Location: artikli_list.php");
?>