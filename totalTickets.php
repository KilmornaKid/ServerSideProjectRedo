<?php          
    $pdo = new PDO('mysql:host=localhost;dbname=CinemaSYS; charset=utf8', 'root', ''); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM bookings WHERE time = '".$_SESSION['time']."' AND date = '".$_SESSION['date']."'";
    $result = $pdo->query($sql);
    while ($row = $result->fetch()) {
        echo "<p>Seats Still Available: ".$row['totalTickets']."</p>";
        $_SESSION['totalTickets'] = $row['totalTickets'];
    } 
?>