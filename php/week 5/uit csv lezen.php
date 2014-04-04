<html>
    <head>
        <title>Index</title>
    </head>
    <body>
        <h2>Index</h2>

        <input name="naam" type="text" placeholder="naam">
        <input name="email" type="email" placeholder="email">
        <input type="submit" name="submit">
        <?php
        $list = array(
            array('jan', 'De leeuw', '45', 'meerstuf'),
            array('henk', 'Haak', '12'),
            array('Piet', 'Zaman', '44')
        );

        $fp = fopen('data.csv', 'w');

        foreach ($list as $fields) {
            fputcsv($fp, $fields);
        }
        echo "succes";
        fclose($fp);
        ?>


    </body>
</html>