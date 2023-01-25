<?php

if (!isset($_COOKIE['korisnickoIme'])) {
    header("Location: login.php");
};
$id = $_POST['id'];
$conn = new mysqli("localhost", "root", "", "prodavnica");
if (isset($_POST['obrisi'])) {
    $sql_query = " DELETE FROM artikli WHERE id_artikla = $id";

    $conn->query($sql_query);

    $conn->close();
}
header("Location: artikli_list.php");
?>