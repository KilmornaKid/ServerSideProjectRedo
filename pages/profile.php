<?php
session_start();
if (isset($_POST['Login'])) {
    try { 
    
    $username = $_POST['username'];
    $password = $_POST['password'];
   
   
    $pdo = new PDO('mysql:host=localhost;dbname=CinemaSYS; charset=utf8', 'root', ''); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
    $sql = "SELECT * FROM customer WHERE username = '".$username."'";
    $result = $pdo->query($sql);
    
     while($row = $result->fetch()){
      if($password == $row['password']){
         $_SESSION['userid'] = $row['custid'];
         $id = $row['custid'];
         $fname =  $row['firstname'];
         $sname =  $row['surname'];
         $uname =  $row['username'];
         $pass = $row['password'];
         $amt = $row['amount'];
         
         
      }else
        header("Location: Register.html");  
      }
    
    }catch (PDOException $e) { 
      $title = 'An error has occurred';
      $output = 'Database error: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine();
}
}

include '../header.html';
echo "
</div>  
  <form action='book.php' method='post' >
    <fieldset>  
      <legend><h2>Profile Details</h2></legend>";
      echo "<p>Profile ID : ".$id."<br>Profile Owner Name:".$fname." ".$sname."<br>Profile Username:".$uname."<br>Profile Password: ".$pass."<br></p>";
      echo "..";


echo "                             
  </fieldset>
 </form>
</div>"; 


include '../footer.html';
?>