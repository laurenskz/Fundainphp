<?php require 'header.php';  $database->processHouseQuery($_POST);?>

<div id="txt">
  1.123 koopwoningen gevonden
</div>

<div id="main">

<table>
  <tr>
    <td id="data" valign="top">
      <div class="head">Prijsklasse van/tot</div><br/>
      <div class="head">Soort object</div>
      <div class="content">
        <a href="#" class="licht">Data</a> 
        <!-- DATA WEERGEVEN -->
      </div>

      <div class="head">Soort bouw</div>
      <div class="content">
        <a href="#" class="licht">Data</a> 
        <!-- DATA WEERGEVEN -->
      </div>

      <div class="head">Aantal kamers</div>
      <div class="content">
        <a href="#" class="licht">Data</a> 
        <!-- DATA WEERGEVEN -->
      </div>

      <div class="head">Woonoppervlakte</div>
      <div class="content">
        <a href="#" class="licht">Data</a> 
        <!-- DATA WEERGEVEN -->
      </div>
    </td>
    

    <td valign="top">
        <?php
            $_SESSION["houses"] = [];
            $i = 0;
            while ($row = mysqli_fetch_assoc($database->result)){
                $_SESSION["houses"][] = $row;
                $html = sprintf("<div class=\"huisdata\">
                    <div class=\"head\"><a class=\"normal\" href=\"detail.php?id=%d\">%s</a></div><div class=\"prijs\">€ %s k.k.</div><br/>
                    <span class=\"adres\">%s %s<br/>%s m<sup>2</sup> - %s kamers</span><br/>
                    <span><a class=\"makelaar\" href=\"makelaar.html\">%s</a></span>
                  </div>",$i,$row["Address"],$row["Vraagprijs"],$row["PC"],$row["City"],$row["WoonOppervlakte"],$row["AantalKamers"],$row["Name"]);
                echo $html;
                $i++;
            }
        ?>
    </td>
  </tr>
</table>

</div>



</body></html>


         

      


