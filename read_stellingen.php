<?php
declare(strict_types=1);
require_once ('db_connection.php');


// maak een sql query
$sql = "SELECT * FROM stelling;";
$count = "select sum(eens_oneens = 1) AS eens, sum(eens_oneens = 0) AS oneens FROM stellingen";

// voer de query uit
$result = $conn->query($sql);
$resulteen = $conn->query($count);

// controleer of dit gelukt is

if (!$result){
    die("er is iets fout gegaan: " . $conn->error);

}


if ($resulteen->num_rows > 0) {
    // output data of each row
    while($row = $resulteen->fetch_assoc()) {
//        echo 'dit is de counter van ' . $row["eens_oneens"]  . "<br>" . "<br>";
        $count = $row['eens_oneens'];
        echo $count;


    }
} else {

    echo "0 results";
}

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $id = $row["idstelling"];
        echo $row["stelling"]  . "<br>" . "<br>";


    }
} else {

    echo "0 results";
}
echo "<br>";
echo "<form action='stem_op_stellingen.php?id=$id' method='post'>";
echo "   <input type='submit' value='stemmen'>";
echo "</form>";


