<!DOCTYPE html>
<html lang="nl">
    <head>
        Mijn php-script
    </head>
    <body>
        <h3>de if opdracht</h3>
        <?php
        $gewerkteuren = 41;
        $uurtarief = 15.00;
        $bruto = $gewerkteuren * $uurtarief;
        if ($gewerkteuren > 40) {
            $bonus = 90.00;
            echo("Uw salaris is met bonus is:" . "€" . ($bruto + $bonus));
        } else {
            echo ("Uw salaris is:" . "&euro;" . $bruto);
        }

        if ($bruto <= 700) {
            echo "<br>je kunt niet meer dan 100 euro sparen";
        } else {
            echo "u kunt maximaal 50 euro sparen";
        }
        ?>
    </body>
</html>
