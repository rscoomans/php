<h3>Formuliertje</h3>

<form action="index.php" method="POST">

    <?php
    if (empty($_POST["voornaam"])) {
        ?>
        <label>Voornaam</label><input type="text" name="voornaam"><br>
        <?php
    } else {
        echo $_POST["voornaam"] . "<br>";
    }
    if (empty($_POST["achternaam"])) {
        ?>
        <label>Achternaam</label><input type="text" name="achternaam"><br>
        <?php
    } else {
        echo $_POST["achternaam"] . "<br>";
    }
    if (empty($_POST["email"])) {
        ?>
        <label>Email</label><input type="text" name="email"><br>
        <?php
    } else {
        echo $_POST["email"] . "<br>";
    }
    if(!empty($_POST["voornaam"]) && !empty($_POST["voornaam"]) && !empty($_POST["voornaam"])) {
       
    } else {
       ?>
        <input type="submit" value="verstuur">
        <?php
    }
    ?>
</form>
