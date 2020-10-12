<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>Films</title>
    <meta charset='utf-8'>
    <meta name="keywords" content="Stack's Classic Cinema">
    <meta name="description" content="Cineam Website">
    <meta name="author" content="Kieran Stack">
    
    <link rel="stylesheet" href="../css/stylesheet.css">
  </head>
  <body>
<!-- Start of Wrapper Div -->
<div id="wrapper">
<div id="header">
  <div class="main-nav">
       <nav>
            <ul>
                <li><a href="../index.html">Home</a></li>
                <li><a href="register.html" class="thispage">Register</a></li>
                <li><a href="aboutuspage.html">ABOUT US</a></li>
            </ul>
        </nav>
  </div>
</div>

<div class="bannerthree">
</div>
  <h1>Delete Your Account</h1>
   <form action="deletecustomer.php" method="post" id="delaccount">
      <fieldset> 
       <legend><h2>Your Account</h2></legend>
<?php
  if (isset($_POST['submit'])) { 
    try{ 
      $pdo = new PDO('mysql:host=localhost;dbname=CinemaSYS; charset=utf8', 'root', ''); 
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = 'SELECT count(*) FROM customer where custid = :cid';
      $result = $pdo->prepare($sql);
      $result->bindValue(':cid', $_POST['custid']); 
      $result->execute();
        if($result->fetchColumn() > 0) {
          $sql = 'SELECT * FROM customer where custid = :cid';
          $result = $pdo->prepare($sql);
          $result->bindValue(':cid', $_POST['custid']); 
          $result->execute();
            while ($row = $result->fetch()) { 
              echo $row['firstname'] . ' ' . $row['surname'] . ' Your money will be refunded via paypal automatically. Select back on your broswer to cancel!. Are you sure you want to delete ??<br><br>' . 
	                 '<form action= "deletecustomer.php#delaccount1" method="post">
                   <input type="hidden" name="id" value="'.$row['custid'].'"> 
                   <input type="submit" value="Delete Account" name="delete">
                   </form>';    
            }
        }else{
          print "No Account Found!.";
        }
    }catch(PDOException $e) { 
      $output = 'Unable to connect to the database server: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine(); 
    }
  } 
?>
      </fieldset>
    </form>
<!-- Start of Content Div -->             
<!-- End of Content Div -->                                                                    
<div style = "clear:left"></div>
<!-- Start of Footer Div -->
<div id="footer">
  <p class="bottomstyle">
    <a href="#top">Go to top of Page.</a>
  </p>
  <p>
    <a href="sitemap.html">Site Map</a>
  </p>
</div>
<!-- End of Footer Div -->  
</div>
<!-- End of Wrapper Div -->
  </body>
</html>