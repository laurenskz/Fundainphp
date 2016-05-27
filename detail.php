<?php require "header.php";
$house = $_SESSION["houses"][$_GET["id"]];
$_SESSION["house"] = $house?>

<div id="main">
    <div id="adresgegevens">
        <div class="head"><?php echo $house["Address"];?></div>
        <div class="adres"><?php echo $house["PC"] . " " . $house["City"];?></div>
        <div class="prijs">€ <?php echo $house["Vraagprijs"]; ?>k.k.</div>
    </div>

    <div id="details">
        <ul>
            <li><a href="detail.php" class="active">Overzicht</a></li>
            <li><a href="omschrijving.php" class="licht">Omschrijving</a></li>
            <li><a href="kenmerken.php" class="licht">Kenmerken</a></li>
            <li><a href="hypotheek.php" class="licht">Hypotheek</a></li>
            <li><a href="afspraak.php" class="licht">Afspraak makelaar</a></li>

        </ul>

        <div id="content">
            <?php
                $array = explode(" ",$house["Omschrijving"]);
                $longString = "";
                for ($i = 0; $i < 30 && $i < count($array); $i++){
                    $longString .= $array[$i]. " ";
                }
                echo $longString;
            ?>
            ... <a href="omschrijving.php">Volledige omschrijving</a>

            <table id="kenmerken">
                <tr>
                    <th colspan="2">Kenmerken</th>
                </tr>

                <tr>
                    <td class="kop">Soort appartement</td>
                    <td>Gallerij</td>
                </tr>
                <tr>
                    <td class="kop">Soort appartement</td>
                    <td>Gallerij</td>
                </tr>
                <tr>
                    <td class="kop">Soort appartement</td>
                    <td>Gallerij</td>
                </tr>
                <tr>
                    <td class="kop">Soort appartement</td>
                    <td>Gallerij</td>
                </tr>
                <tr>
                    <td class="kop">Soort appartement</td>
                    <td>Gallerij</td>
                </tr>
            </table>
        </div>
    </div>
</div>


</body></html>



