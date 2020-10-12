<?php
session_start();
include 'header.html';

echo "
</div>  
  <form action='book2.php' method='post' >
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
      echo "<fieldset>";
      echo "<legend><h2> Booking </h2></legend>";
                        try{  
                              $date = $_POST['date'];
                              echo "<p>".$date."</p>";
                              $_SESSION['date'] = $date;
                              $selectedDate = date("Y-m-d", strtotime($date)); 
                              $pdo3 = new PDO('mysql:host=localhost;dbname=CinemaSYS; charset=utf8', 'root', '');
                              $pdo3->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                              $sql3 = "SELECT * FROM screenings WHERE movieid = ".$row['movieid']." AND CAST('".$selectedDate."' AS DATE) BETWEEN SC_DateFrom AND SC_DateTo";
                              $stmt = $pdo3->prepare($sql3);
                              $stmt->execute();
                              $times = $stmt->fetchAll();
                              echo "<p>Select Time</p>";
                                    echo "<select name = time><fieldset>
                                          <legend><h3>Select Time</h3></legend>";
                                                foreach($times as $time):                             //foreach loop modified from: https://thisinterestsme.com/populate-dropdown-list-mysql/
                                                      echo "<option>".$time['SC_Time']."</option>";
                                                endforeach;
                                    echo "</select><br><br>";
                        }catch (PDOException $e) { 
                              $output = 'Unable to connect to the database server: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine(); 
                        } 
                  }              
      }catch (PDOException $e) { 
            $output = 'Unable to connect to the database server: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine(); 
      }
}

echo "
    <input type='hidden' name='". $_SESSION['H2']."'' value='". $_SESSION['H2']."'>
    <input value='Book' name='Booking' type='Submit'>                             
  </fieldset>
  </fieldset>
 </form>
</div>"; 

include 'footer.html';  
?>