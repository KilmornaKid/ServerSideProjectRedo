<?php
   try { $pdo = new PDO('mysql:host=localhost;dbname=CinemaSYS; charset=utf8', 'root', ''); 
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = 'SELECT * FROM screenings';
      $result = $pdo->query($sql); 
      echo '<select times="SC_Time">'; 

      while ($row = $result->fetch()) {
         echo "<option value=" . $row[id] . "selected>" . $row[name] . "</option>";   
      } 
      echo "</select>";// Closing of list box   

   }catch (PDOException $e) { $output = 'Unable to connect to the database server: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine(); 
}
?>