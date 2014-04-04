<html>
    <head>
        <title>auto's</title>
    </head>
    <body>
        <h2>Index</h2>

        <?php

        class Car {

            public $merk;
            public $kleur;
            public $brandstof;

            function sound() {
                echo "vrrrroemmm";
            }

        }

        $beetle = new Car();
        $beetle->merk = "Volkswagen";
        $beetle->kleur = "Groen";
        $beetle->brandstof = "Benzine";
        echo "<h4>Beetle</h4>";
        echo "Merk : " . $beetle->merk . "<br>";
        echo "Kleur : " . $beetle->kleur . "<br>";
        echo "Brandstof : " . $beetle->brandstof . "<br>" . "<br>";

        $mustang = new Car();
        $mustang->merk = "Ford";
        $mustang->kleur = "Rood";
        $mustang->brandstof = "Diezel";
        echo "<h4>Mustang</h4>";
        echo "Merk : " . $mustang->merk . "<br>";
        echo "Kleur : " . $mustang->kleur . "<br>";
        echo "Brandstof : " . $mustang->brandstof . "<br>";
        $mustang->sound();

        // print_r($mustang);
        // print_r($beetle);
        ?>


    </body>
</html>