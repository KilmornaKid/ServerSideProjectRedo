<?php
session_start();
include 'header.html';
echo "
</div>  
  <form action='book.php' method='post' >
    <fieldset>  
      <legend><h2>Book Movie</h2></legend>";
      
if(isset($_POST['Book'])) {
    try{
    
    $_SESSION['movieid'];
    $_SESSION['date'];
    $selectedDate = date("Y-m-d", strtotime( $_SESSION['date']));
    
    $pdo = new PDO('mysql:host=localhost;dbname=CinemaSYS; charset=utf8', 'root', ''); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    $sql = "Select * from screenings where '".$selectedDate."' BETWEEN SC_DateFrom AND SC_DateTo AND movieid = ".$_SESSION['movieid'];
    $result = $pdo->query($sql);
    
    while($row = $result->fetch()){ 
      $_SESSION['screeningid'] = $row['screeningid'];                            
    }
    
        try{
          
        $total =  $_POST['C'] + $_POST['S'] + $_POST['A'];
        
        $selectedDate = date("Y-m-d", strtotime( $_SESSION['date']));
        $cTicket = $_POST['C']; 
        $sTicket = $_POST['S'];
        $aTicket = $_POST['A'];
        $custid = $_SESSION['userid'];
        $time = $_SESSION['time'];
        $sceeningid = $_SESSION['screeningid'];
     
        $pdo2 = new PDO('mysql:host=localhost;dbname=CinemaSYS; charset=utf8', 'root', ''); 
        $pdo2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
        $sql2 = "INSERT INTO bookings (Date,Time,childTickets,studentTickets,adultTickets,totalTickets,screeningid,custid) VALUES(:Date,
        :Time, :childTickets, :studentTickets, :adultTickets, :totalTickets, :screeningid, :custid)";
    
        $stmt = $pdo2->prepare($sql2);
    
        $stmt->bindValue(':Date', $selectedDate);
        $stmt->bindValue(':Time', $time);
        $stmt->bindValue(':childTickets', $cTicket);
        $stmt->bindValue(':studentTickets', $sTicket);
        $stmt->bindValue(':adultTickets', $aTicket);
        $stmt->bindValue(':totalTickets', $total);
        $stmt->bindValue(':screeningid', $sceeningid);
        $stmt->bindValue(':custid', $custid);
    
        $stmt->execute(); 
        
        echo "<p>Your tickets have been booked!!!</p>";
    
        } catch (PDOException $e) { 
        $title = 'An error has occurred';
        $output = 'Database error: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine();
        }     
    } catch (PDOException $e) { 
        $title = 'An error has occurred';
        $output = 'Database error: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine();
}      
}  
echo "                            
  </fieldset>
 </form>
</div>";
include 'footer.html';
?>