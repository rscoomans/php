<p>php lab 03</p>
<?php
$totaal = 0;
$toshiba = array(
    "merk" => "Toshiba Satellite",
    "model" => "A100",
    "os" => "Windows XP",
    "voorraad" => 80,
    "prijs" => 999
);   
$totaal += $toshiba["prijs"];
$acer = array(
    "merk" => "Acer Aspire",
    "model" => "5732Z",
    "os" => "Linux",
    "voorraad" => 0,
    "prijs" => 888
);
$totaal += $acer["prijs"];
$HP = array(
    "merk" => "HP",
    "model" => "200X",
    "os" => "Vista",
    "voorraad" => 50,
    "prijs" => 777
);
$totaal += $HP["prijs"];
echo("<table border='1'> " .
 "<caption>
<strong></strong>
</caption>
<thead>
<tr><th>Merk</th><th>Model</th><th>Operating system
</th><th>Voorraad</th><th>Prijs</th></tr>
</thead>
<tbody>
<tr>
<td>" . $toshiba["merk"] . "</td>" .
 "<td>" . $toshiba["model"] . "</td>" .
 "<td>" . $toshiba["os"] . "</td>" .
 "<td>" . $toshiba["voorraad"] ."</td>" .
 "<td>" . $toshiba["prijs"] . "</td>" .
 "</tr>
 <td>" . $acer["merk"] . "</td>" .
 "<td>" . $acer["model"] . "</td>" .
 "<td>" . $acer["os"] . "</td>" .
 "<td>" . $acer["voorraad"] . "</td>" .
 "<td>" . $acer["prijs"] . "</td>" .
 "</tr>
  <td>" . $HP["merk"] . "</td>" ./
 "<td>" . $HP["os"] . "</td>" .
 "<td>" . $HP["voorraad"] . "</td>" .
 "<td>" . $HP["prijs"] . "</td>" .
 "</tr>
<tfoot>
<tr><td colspan='4'>Totaal</td><td>" . $totaal . "
</td></tr></tfoot></table>");

if ($toshiba["voorraad"] <= 0) {
    echo "niet in voorraad ";
}
 else {
    echo "in voorraad "; 
}

if ($acer["voorraad"] <= 0) {
    echo "niet in voorraad ";
}
 else {
    echo "in voorraad ";
 }
 
 if ($HP["voorraad"] <= 0) {
    echo "niet in voorraad ";
}
 else {
    echo "in voorraad "; 
}
 

 
?>