<?php 
    if(isset($_POST['korisnickoIme'])){
        $conn = new mysqli("localhost", "root", "", "prodavnica");
        $sql_query = "SELECT * FROM `korisnici`
                        WHERE `korisnicko_ime` = '$_POST[korisnickoIme]'";

        $response = $conn->query($sql_query);

        if($response->num_rows == 1 && $response->fetch_assoc()['password'] == $_POST['sifra']){
            setcookie('korisnickoIme', $_POST['korisnickoIme'], time() + 3600);
        }
        
        $conn->close();
    }

    header("Location: artikli_list.php");
?>