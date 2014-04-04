<!doctype html>
<html>
    <head>
        <title>
            stuff
        </title>
    </head>
    <body>
        <?php
        $merk = "Toshiba Satellite ";
        $model = "A100 ";
        $os = "Windows XP ";
        $voorraad = 80;
        $prijs = 999;
        
                $merk2 = "Acer Aspire ";
        $model2 = "5732Z ";
        $os2 = "Linux ";
        $voorraad2 = 0;
        $prijs2 = 888;
        $totaal = $prijs + $prijs2;

        echo("<table border='1'> " .
        "<caption>
            <strong>SML laptops</strong>
            <caption>
            <thead>
            <tr><th>Merk</th><th>Model</th><th>Operating system
            </th><th>Voorraad</th><th>Prijs</th></tr>
            <thead>
            <tbody>
            <tr>
            <td>" . $merk . "</td>" .
        "<td>" . $model . "</td>" .
        "<td>" . $os . "</td>" .
        "<td>" . $voorraad . "</td>" .
        "<td>" . $prijs . "</td>" .
        "</tr>
            <tr>
            <td>" . $merk2 . "</td>" .
        "<td>" . $model2 . "</td>" .
        "<td>" . $os2 . "</td>" .
        "<td>" . $voorraad2 . "</td>" .
        "<td>" . $prijs2 . "</td>" .
        "</tr>
                    <tfoot>
                    <tr><td colspan='4'>Totaal</td><td>" . $totaal . "
                        </td><tr></tfoot></table>");
        ?>
    </body>
</html>