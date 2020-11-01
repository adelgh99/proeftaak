<?php
declare(strict_types=1);
require_once('db_connection.php');


?>
<!DOCTYPE html>
<head lang="nl">
    <meta charset="UTF-8">
    <title>Form submission</title>
</head>
<body>

<?php
$sql = "SELECT * FROM stelling;";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    echo "<form action='verwerkstelling.php' method='post'>";
    $i = 1;

    while ($row = $result->fetch_assoc()) {
        ?>
        <?php
        $id = $row["idstelling"];

        echo "Stelling: '" . $row["stelling"]  .  "': ";

//                    $idstelling = $row["idstelling"] ; //"stelling" . $i;
        // hidden input maken om idStelling in op te slaan.
        ?>
        <br>

<!--        <input type="hidden" name="id--><?php //$id ?><!--" value="--><?php //$id ?><!--">-->
        <label>Eens</label>
        <input type='radio' name='answer<?php echo $id ?>' id='eens' value="1">

        <label>Oneens</label>
        <input type='radio' name='answer<?php echo $id ?>' id='oneens' value="0">
        <br><br>
        <?php

        $i++;

    }


    ?>
        <br>
        <label>Voer uw email-adres in:</label>
        <input type="text" name="email">
        <br><br>
        <input type="submit" name="stem" value="Stemmen">
    </form>
<?php
    } else {
    echo "0 results";
    echo "Ga <a href='read_stellingen.php'>terug</a> naar de hoofdpagina.";
}
?>
</body>
</html>
