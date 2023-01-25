<head>
    <link rel="stylesheet" href="style.css">
    <style>
        html{
            background-image: unset;
        }
    </style>
</head>
<?php
$conn = new mysqli("localhost", "root", "", "prodavnica");

$query =
    "SELECT 
        id_artikla as 'id',
        naziv,
        sifra,
        opis,
        cijena,
        kolicina
        FROM `artikli`";

$response = $conn->query($query);

if (!empty($response) && $response->num_rows > 0) {
?>
    <table>
        <tr>
            <th>Naziv</th>
            <th>Sifra</th>
            <th>Opis</th>
            <th>Cijena</th>
            <th>Kolicina</th>
            <th>Izmijeni</th>
            <th>Obrisi</th>
        </tr>
        <?php
        while ($artikal = $response->fetch_assoc()) { ?>
            <tr>
                <td> <?php echo htmlspecialchars($artikal['naziv']) ?></td>
                <td><?php echo htmlspecialchars($artikal['sifra']) ?></td>
                <td><?php echo htmlspecialchars($artikal['opis']) ?></td>
                <td><?php echo htmlspecialchars($artikal['cijena']) ?></td>
                <td><?php echo htmlspecialchars($artikal['kolicina']) ?></td>

                <form action="artikli_edit.php" method="POST">
                    <input type='hidden' name='id' value="<?php echo htmlspecialchars($artikal['id']) ?>">
                    <td> <button class="table-button" name="izmijeni" value="<?php echo htmlspecialchars($artikal['id']) ?>">Izmijeni</a> </td>
                </form>

                <form action="artikli_obrisi.php" method="POST">
                    <input type='hidden' name='id' value="<?php echo htmlspecialchars($artikal['id']) ?>">
                    <td><button class="table-button" name="obrisi" value="<?php echo htmlspecialchars($artikal['id']) ?>">Obrisi</button> </td>
                </form>
            </tr>

        <?php
        }


        ?>
    </table>
<?php
} else {
    echo "<h2>NEMA ARTIKALA ZA PRIKAZ!</h2>";
}
?>
<div class="add-logout-btn">
<button class="artikli-add-btn"><a class="artikli-add-a" href="artikli_add.php"> Dodajte novi artikal</a></button>
<button><a href="logout.php">Odjavite se</a></button>
</div>
<?php
$conn->close();

?>