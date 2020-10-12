<?php
session_start();
if (isset($_POST['Submit'])) {
    try { 
    
            $username = $_POST['username'];
            $password = $_POST['password'];
   
            $_SESSION['H2'] = $_POST['H2'];
   
            $pdo = new PDO('mysql:host=localhost;dbname=CinemaSYS; charset=utf8', 'root', ''); 
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
            $sql = "SELECT * FROM customer WHERE username = '".$username."'";
            $result = $pdo->query($sql);
    
            while($row = $result->fetch()){
                  if($password == $row['password']){
                        $_POST['H2'];
                        $_SESSION['userid'] = $row['custid'];
                  }else
                        header("Location: Register.html");  
            }
    }catch (PDOException $e) { 
      $title = 'An error has occurred';
      $output = 'Database error: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine();
      }
}

include 'header.html';

echo "
  <form action='book.php' method='post' >
    <fieldset>  
      <legend><h2>Book Movie</h2></legend>"; 
  if(isset($_POST['BR']) || isset($_POST['H']) || isset($_POST['C'])|| isset($_POST['FB'])|| isset($_POST['WR'])|| isset($_POST['RH'])|| isset($_POST['TN'])|| isset($_POST['D'])|| isset($_POST['O'])|| isset($_POST['V'])|| isset($_POST['G'])|| isset($_POST['P'])){
      try { 
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
                  
                  try{
                  $pdo2 = new PDO('mysql:host=localhost;dbname=CinemaSYS; charset=utf8', 'root', '');
                  $pdo2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                  $sql2 = "select screeningid, MIN(SC_DateFrom), MAX(SC_DateTo) from screenings where movieid = ".$row['movieid'];
                  $result2 = $pdo2->query($sql2);
              
                  $_SESSION['movieid'] = $row['movieid'];  
                        while($row2 = $result2->fetch()){ 
                              echo"<fieldset>
                              <legend><h2> Booking </h2></legend>
                              <p>Select Date</p>
                              <select name = date>";
                              date_default_timezone_set('UTC');
                              $date = date("Y-m-d"); 
                              $date2 = $row2['MAX(SC_DateTo)'];  
                                    while (strtotime($date) <= strtotime($date2)) {      
                                          $date = date ("d-m-Y", strtotime("+1 day", strtotime($date)));
                                          echo "<option>".$date."</option>";                         
                                    }
                              echo"       </select>
                              </fieldset>"; 
                        }
                  }catch (PDOException $e) { 
                  $output = 'Unable to connect to the database server: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine(); 
                  }
}                 
      }catch (PDOException $e) { 
      $output = 'Unable to connect to the database server: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine();
      }
}
          
echo "<input type='hidden' name='".$_POST['H2']."' value='".$_POST['H2']."'>
      <input value='Book' name='Book' type='Submit'>                             
  </fieldset>
 </form>
</div>";
  
include 'footer.html';
?>