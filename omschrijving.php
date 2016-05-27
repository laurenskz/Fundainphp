<?php require 'header.php'; ?>

<center><div style="border: solid gray 1px; width: 600px; padding: 6px; margin-left: 30px;">
<?php echo $_SESSION["house"]["Omschrijving"];?><br><br>

<a href="kenmerken.php">Alle kenmerken van <?php echo $_SESSION["house"]["Address"]; ?></a>

</div></center>

</body></html>
