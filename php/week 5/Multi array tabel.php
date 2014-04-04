<html>
    <head>
        <title>Index</title>
    </head>
    <body>
        <h2>Index</h2>
        <table border="1"> 
            <?php
            $landen = array(
                array("Nederland", "Amsterdam", "Rotterdam"),
                array("Belgie", "Brussel", "Brugge"),
                array("Duitsland", "Aken", "Hamburg")
            );

            foreach ($landen as $steden) {
                ?>
                <tr>
                    <?php
                    foreach ($steden as $value) {
                        echo "<td>" . $value . "</td>";
                    }
                }
                ?>
            </tr>

        </table>
    </body>
</html>