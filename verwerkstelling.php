<?php
declare(strict_types=1);
//Session_start();
//if ($_SERVER['REQUEST_METHOD'] !== "POST") {
//    header('Location: read_stellingen.php');
//
//}
require_once('db_connection.php');

// SELECT om alle stelling_ids op te halen en in een array ast

//Tot hier
$sql = "SELECT idstelling FROM stelling;";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $id = $row["idstelling"];


    }
} else {

    echo "0 results";
    echo $result;
}

// Loop door die array        maar dit lukt niet en ik weet niet waarom

if (isset($_POST['stem'])){
    foreach ($row as $id){
        $answer = $_POST['answer' . $id];
        var_dump($answer);


    }
}






$dutum = date(("y-m-d"));

// Dit is verwerken!!!
$mail = mysqli_real_escape_string($conn, $_POST['email']); // moet OOP-stijl worden!
$sql = "INSERT INTO bezoeker(email)
        VALUE ('$mail');";
$result = $conn->query($sql);
//header('Location: http://google.com');
if ($conn->query($sql) === true) {
    // Ter controle...
    echo "Uw emailadres is opgeslagen...";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    // echo ga terug naar...
}

// TODO: nu de stellingen opslaan


foreach ($stellingen as $stelling) {
    $sqll = "INSERT INTO bezoeker_stelling (eens_oneens, datum) VALUES (" . $stellingen . ", " . $dutum . ");";
    $result =  $conn->query($sqll);

}




