<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>Films</title>
    <meta charset='utf-8'>
    
    <meta name="keywords" content="Stack's Classic Cinema">
    <meta name="description" content="Cineam Website">
    <meta name="author" content="Kieran Stack">
    
    <link rel="stylesheet" href="../stylesheet.css">
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

  <h1>Register with Us!</h1>
  
<p class="contentstyle">It's been a hell of a week for film thought that's somewhat unsurprising as you realise that we're heading into the holiday season where films such as the long-awaited Star Wars Episode 8 will make their mark, however we've decided to dedicate the film section of the site to a flick that we feel is undeservedly flying under the radar right now. Murder on the Orient Express is a murder mystery thriller focusing on the murder (who'd of guessed it!) of an unsavoury American played by Johnny Depp after which it falls to world famous detective Hercule Poirot played masterfully by Kenneth Branagh to solve the mystery and bring the culprit to justice. The film is of course is based on the famous novel of the same name written by the mystery genre master Agatha Christie and lives up to expectations. Its star studded cast and suspenseful plot make for a thrilling watch one we personally think is definitely worth your time.</p>
<p class="contentstyle">Of course, we've also been watching plenty of other films such as the new Star Wars film for which we have picked out a review from the avclub that for the most part matches our opinion of the film, needless to say this one is a must watch. Speaking of the avclub we decided to highlight their article on the best films of 2017 which they didn't review, to show that there are films that even pass the most dedicated of movie buffs by. There are also several interesting trailers that have landed on our little notice board one of them Battle Angel seems particularly striking visually although we don't quite know what to make of it just yet so I suppose we'll just have to wait and see. Finally, I think its worth pointing out the rumours and reaction of Quinten Tarintino possibly directing a Star Trek movie? Interesting times indeed!</p>



  <h1>New Account</h1>
   <form action="displayNewAccount.php" method="post">
      <fieldset> 
       <legend><h2>View Account Details</h2></legend> 
        <?php 
if (isset($_POST['view'])) {
try { 
$pdo = new PDO('mysql:host=localhost;dbname=CinemaSYS; charset=utf8', 'root', ''); 
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = 'SELECT * FROM customer ORDER BY custid DESC LIMIT 1'; 
$result = $pdo->query($sql); 
while ($row = $result->fetch()) { 
      echo "CustomerID: ".$row['custid'] ."<br>Firstname: ".$row['firstname']."<br>Surname: ".$row['surname']."<br>Username: ".$row['username']."<br>Password: ".$row['password']."<br>Amount: ".$row['amount']."<br><br> Click <a href='../index.html'>here</a> to return to Home page.";
}
} 
catch (PDOException $e) { 
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







