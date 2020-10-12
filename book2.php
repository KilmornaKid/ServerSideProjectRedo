<?php
session_start();
include 'header.html';
echo "
</div>  
  <form action='bookingComplete.php' method='post' >
    <fieldset>  
      <legend><h2>Book Movie</h2></legend>";  
if(isset($_POST['BR']) || isset($_POST['H']) || isset($_POST['C'])|| isset($_POST['FB'])|| isset($_POST['WR'])|| isset($_POST['RH'])|| isset($_POST['TN'])|| isset($_POST['D'])|| isset($_POST['O'])|| isset($_POST['V'])|| isset($_POST['G'])|| isset($_POST['P'])){     
      $pdo = new PDO('mysql:host=localhost;dbname=CinemaSYS; charset=utf8', 'root', ''); 
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         if(isset($_POST['BR'])){
            $sql = "SELECT * FROM movies ORDER BY movieid limit 1, 1";    
         }elseif(isset($_POST['H'])){
            $sql = "SELECT * FROM movies ORDER BY movieid limit 0, 1";
         }elseif(isset($_POST['C'])){
            $sql = "SELECT * FROM movies ORDER BY movieid limit 6, 1";
         }elseif(isset($_POST['FB'])){
            $sql = "SELECT * FROM movies ORDER BY movieid limit 9, 1";
         }elseif(isset($_POST['WR'])){
            $sql = "SELECT * FROM movies ORDER BY movieid limit 8, 1";
         }elseif(isset($_POST['RH'])){
            $sql = "SELECT * FROM movies ORDER BY movieid limit 4, 1";
         }elseif(isset($_POST['TN'])){
            $sql = "SELECT * FROM movies ORDER BY movieid limit 11, 1";
         }elseif(isset($_POST['D'])){
            $sql = "SELECT * FROM movies ORDER BY movieid limit 10, 1";
         }elseif(isset($_POST['O'])){
            $sql = "SELECT * FROM movies ORDER BY movieid limit 2, 1";
         }elseif(isset($_POST['V'])){
            $sql = "SELECT * FROM movies ORDER BY movieid limit 3, 1";
         }elseif(isset($_POST['G'])){
            $sql = "SELECT * FROM movies ORDER BY movieid limit 5, 1";
         }elseif(isset($_POST['P'])){
            $sql = "SELECT * FROM movies ORDER BY movieid limit 7, 1";
         } 
      $result = $pdo->query($sql); 
         while ($row = $result->fetch()) { 
            if(isset($_POST['BR'])){
               echo "<img src='WebDevImg/bohemian.jpg' height='330' width='230' alt='Bohemian Rhapsody'>"."<br><br><strong>Movie Name:</strong> ".$row['Name'].
               "<br><br><strong>Running Time:</strong> ".$row['Running_Time']."<br><br><strong>Description:</strong> ".$row['Description']."<br><br><strong>Age Rating:</strong> ".
               $row['Age_Rating'];
            }elseif(isset($_POST['H'])){
               echo "<img src='WebDevImg/images.jpg' height='330' width='230' alt='Bohemian Rhapsody'>"."<br><br><strong>Movie Name:</strong> ".$row['Name'].
               "<br><br><strong>Running Time:</strong> ".$row['Running_Time']."<br><br><strong>Description:</strong> ".$row['Description']."<br><br><strong>Age Rating:</strong> ".
               $row['Age_Rating'];
            }elseif(isset($_POST['C'])){
               echo "<img src='WebDevImg/creed2.jpg' height='330' width='230' alt='Bohemian Rhapsody'>"."<br><br><strong>Movie Name:</strong> ".$row['Name'].
               "<br><br><strong>Running Time:</strong> ".$row['Running_Time']."<br><br><strong>Description:</strong> ".$row['Description']."<br><br><strong>Age Rating:</strong> ".
               $row['Age_Rating'];
            }elseif(isset($_POST['FB'])){
               echo "<img src='WebDevImg/fantasticBeasts2.jpg' height='330' width='230' alt='Bohemian Rhapsody'>"."<br><br><strong>Movie Name:</strong> ".$row['Name'].
               "<br><br><strong>Running Time:</strong> ".$row['Running_Time']."<br><br><strong>Description:</strong> ".$row['Description']."<br><br><strong>Age Rating:</strong> ".
               $row['Age_Rating'];
            }elseif(isset($_POST['WR'])){
               echo "<img src='WebDevImg/ralph.jpg' height='330' width='230' alt='Bohemian Rhapsody'>"."<br><br><strong>Movie Name:</strong> ".$row['Name'].
               "<br><br><strong>Running Time:</strong> ".$row['Running_Time']."<br><br><strong>Description:</strong> ".$row['Description']."<br><br><strong>Age Rating:</strong> ".
               $row['Age_Rating'];
            }elseif(isset($_POST['RH'])){
               echo "<img src='WebDevImg/robinHood.jpg' height='330' width='230' alt='Bohemian Rhapsody'>"."<br><br><strong>Movie Name:</strong> ".$row['Name'].
               "<br><br><strong>Running Time:</strong> ".$row['Running_Time']."<br><br><strong>Description:</strong> ".$row['Description']."<br><br><strong>Age Rating:</strong> ".
               $row['Age_Rating'];
            }elseif(isset($_POST['TN'])){
               echo "<img src='WebDevImg/nutcracker.jpg' height='330' width='230' alt='Bohemian Rhapsody'>"."<br><br><strong>Movie Name:</strong> ".$row['Name'].
               "<br><br><strong>Running Time:</strong> ".$row['Running_Time']."<br><br><strong>Description:</strong> ".$row['Description']."<br><br><strong>Age Rating:</strong> ".
               $row['Age_Rating'];
            }elseif(isset($_POST['D'])){
               echo "<img src='WebDevImg/deadpool.jpg' height='330' width='230' alt='Bohemian Rhapsody'>"."<br><br><strong>Movie Name:</strong> ".$row['Name'].
               "<br><br><strong>Running Time:</strong> ".$row['Running_Time']."<br><br><strong>Description:</strong> ".$row['Description']."<br><br><strong>Age Rating:</strong> ".
               $row['Age_Rating'];
            }elseif(isset($_POST['O'])){
               echo "<img src='WebDevImg/overlord.jpg' height='330' width='230' alt='Bohemian Rhapsody'>"."<br><br><strong>Movie Name:</strong> ".$row['Name'].
               "<br><br><strong>Running Time:</strong> ".$row['Running_Time']."<br><br><strong>Description:</strong> ".$row['Description']."<br><br><strong>Age Rating:</strong> ".
               $row['Age_Rating'];
            }elseif(isset($_POST['V'])){
               echo "<img src='WebDevImg/venom.jpg' height='330' width='230' alt='Bohemian Rhapsody'>"."<br><br><strong>Movie Name:</strong> ".$row['Name'].
               "<br><br><strong>Running Time:</strong> ".$row['Running_Time']."<br><br><strong>Description:</strong> ".$row['Description']."<br><br><strong>Age Rating:</strong> ".
               $row['Age_Rating']; 
            }elseif(isset($_POST['G'])){
               echo "<img src='WebDevImg/grinch.jpg' height='330' width='230' alt='Bohemian Rhapsody'>"."<br><br><strong>Movie Name:</strong> ".$row['Name'].
               "<br><br><strong>Running Time:</strong> ".$row['Running_Time']."<br><br><strong>Description:</strong> ".$row['Description']."<br><br><strong>Age Rating:</strong> ".
               $row['Age_Rating'];
            }elseif(isset($_POST['P'])){
               echo "<img src='WebDevImg/pokemon.jpg' height='330' width='230' alt='Bohemian Rhapsody'>"."<br><br><strong>Movie Name:</strong> ".$row['Name'].
               "<br><br><strong>Running Time:</strong> ".$row['Running_Time']."<br><br><strong>Description:</strong> ".$row['Description']."<br><br><strong>Age Rating:</strong> ".
               $row['Age_Rating'];
            }
            echo "<legend><h2> Booking </h2></legend>";
            echo "<p>Selected Date:</p><p>".$_SESSION['date']."</p>";
            $selectedDate = date("Y-m-d", strtotime($_SESSION['date']));
            echo "<p>Selected Time:</p><p>".$_POST['time']."</p>";
            $_SESSION['time'] = $_POST['time'];
            echo "<p>Purchase Tickets:</p><p>";
               if($row['Age_Rating'] == 'U'){
                  echo"<p>Child<br><input type='number' min = '0' max = '10' value ='0' style='width: 4%' />&nbsp<input type='number' min = '0' max = '10' value ='0' style='width: 4%' />&nbsp<input type='number' min = '0' max = '10' value ='0' 
                  style='width:4%' /></p>";     
               }else if($row['Age_Rating'] == 'PG'){
                  echo"<p><input type='number' min = '0' max = '10' value ='0' style='width: 4%' />&nbsp<input type='number' min = '0' max = '10' value ='0' style='width: 4%' />&nbsp<input type='number' min = '0' max = '10' value ='0' 
                  style='width: 4%' /></p>";
               }else if($row['Age_Rating'] == '12A' || $row['Age_Rating'] == '15' || $row['Age_Rating'] == '18'){
                  echo"<p>Student: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Adult:<br><input type='number' name='S' min = '0' max = '10' value ='0' style='width: 7em' />&nbsp<input type='number' name='A' min = '0' max = '10' value ='0' 
                  style='width: 7em' /><input type='hidden' name='C' value='0'></p>"; 
               } //end of while loop      

        try {  
            $pdo2 = new PDO('mysql:host=localhost;dbname=CinemaSYS; charset=utf8', 'root', ''); 
            $pdo2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql2 = "SELECT screenings.screeningid, screenings.sc_datefrom, screenings.sc_dateto, screenings.sc_time, screenings.screenid, screen.num_of_seats from screenings inner join screen on screenings.screenid=screen.screenid 
            WHERE '".$selectedDate."' BETWEEN sc_datefrom AND sc_dateto AND sc_time = '".$_POST['time']."' AND movieid =".$row['movieid'];
            $result2 = $pdo2->query($sql2);
        
            while($row2 = $result2->fetch()){ 
               $_SESSION['total'] = $row2['num_of_seats'] ;
            }   
           
         try{
            $pdo3 = new PDO('mysql:host=localhost;dbname=CinemaSYS; charset=utf8', 'root', ''); 
            $pdo3->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql3 = "SELECT SUM(totalTickets) FROM bookings WHERE time = '".$_SESSION['time']."' AND date = '".$selectedDate."'";
            $result3 = $pdo3->query($sql3); 
     
            while($row3 = $result3->fetch()){ 
               $_SESSION['avail'] = $row3['SUM(totalTickets)'] ;                     
            }

            $available = $_SESSION['total']-$_SESSION['avail'];                   
            echo "<p>Available Seats: ".$available."</p>";
            $_SESSION['available'] =  $available;
            }catch (PDOException $e) { 
               $output = 'Unable to connect to the database server: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine(); 
            }     
      
         }catch (PDOException $e) { 
            $output = 'Unable to connect to the database server: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine(); 
         } 
      }
}      
         
if($_SESSION['available'] <= 0){
   echo "Sorry, this showing is booked out!!!";
}else{
   echo "<input value='Book' name='Book' type='Submit'>";
}
                 
echo "                           
  </fieldset>
  </fieldset>
 </form>
</div>"; 

include 'footer.html';
?>