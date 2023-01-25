<head>
     <link rel="stylesheet" href="style.css"> 
    <style>
        html{
            background-image: unset;
        }
    </style>
</head>


<div class="artikli-add-container">
    <form action="artikli_add_request.php" method="post">

        <div id="artikli-add-inputs">
            <div>
                <input name="naziv" type="text" placeholder="Unesite naziv artikla..." required>
            </div>
            <div>
                <input name="sifra" type="text" placeholder="Unesite sifru..." required>
            </div>
            <div>
                <input name="opis" type="text" placeholder="Unesite opis...">
            </div>
            <div>
                <input name="cijena" type="text" placeholder="Unesite cijenu..." required>
            </div>
            <div>
                <input name="kolicina" type="number" placeholder="Unesite kolicinu..." required>
            </div> 

        </div>

        <div>
            <input type="submit" value="ADD">
        </div>

    </form>

    <p><a href="artikli_list.php">Vratite se na pregled artikala</a></p>
</div>