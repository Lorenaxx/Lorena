<?php
    $email = $_GET['email'];
    $poruka = $_GET['poruka'];
    echo "<h1>Pozdrav " .$email. "!</h1>";
    echo "<div>Poruka: ".$poruka."</div>";
?>
<!-- obrada.php?email=pero@veleri.hr&poruka=Hej!-->