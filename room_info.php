<?php
    require_once __DIR__ . '/database.php';

    $room_id = $_GET['id'];

    // echo $room_id;
    $sql = "SELECT * FROM `stanze` WHERE `id` = " . $room_id . ";";
    $result = $conn->query($sql);

    $room = [];
    if ($result && $result->num_rows > 0) {

        $room = $result->fetch_assoc();

            // var_dump($room);
    }
    
        $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single-Room-info</title>
</head>
<body>

<h2>Dettagli stanza <?php echo $room['room_number']?></h2>

<p style="font-size: 18px">Piano: <?php echo $room['floor']?></p>
<p style="font-size: 18px">Letti: <?php echo $room['beds']?></p>
<p style="font-size: 18px">Creata: <?php echo $room['created_at']?></p>
<p style="font-size: 18px">Aggiornata: <?php echo $room['updated_at']?></p>

<a href="index.php">Torna alla Homepage</a>
    
</body>
</html>