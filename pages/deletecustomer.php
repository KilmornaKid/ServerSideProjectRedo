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
   <form action="deletecustomer.php" method="post" id="delaccount1">
      <fieldset> 
       <legend><h2>Your Account</h2></legend>

<?php
  if (isset($_POST['delete'])) {
    try { 
      $pdo = new PDO('mysql:host=localhost;dbname=CinemaSYS; charset=utf8', 'root', ''); 
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = 'DELETE FROM customer WHERE custid = :cid';
      $result = $pdo->prepare($sql);
      $result->bindValue(':cid', $_POST['id']); 
      $result->execute();
      echo "The record has been deleted! Click <a href='../index.html'>here</a> to return to main page.";
    }catch (PDOException $e) { 
      if ($e->getCode() == 23000) {
        echo "ooops couldnt delete as that record is linked to other tables click<a href='../index.html'> here</a> to go back ";
      }
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