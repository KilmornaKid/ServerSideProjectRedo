<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>AboutUs</title>
    <meta charset='utf-8'>
    
    <meta name="keywords" content="Stack's Classic Cinema">
    <meta name="description" content="Cineam Website">
    <meta name="author" content="Kieran Stack">
    
    <link rel="stylesheet" href="stylesheet.css">
  </head>
  <body>
<!-- Start of Wrapper Div -->
<div id="wrapper">
<div class="main-nav">
  <nav>
      <ul>
          <li><a href="../index.html">Home</a></li>
          <li><a href="register.html">Register</a></li>
          <li><a href="aboutuspage.html" class="thispage">ABOUT US</a></li>
      </ul>
  </nav>
</div>
<div class="bannertwo">
</div>
<h1>Who are we?</h1>
<!-- Start of Content Div -->             
<div id="content">
<p class="contentstyle">Our new website Media Madness is your one stop shop for all the latest pop culture news. Here at Media Madness we pride ourselves on our expertise of all things involving pop culture and delivering the latest news and most interesting features from around the web. For now, we're a small operation consisting of only two men however we're dedicated to showcasing top quality content and our mission statement is to grow the website into the number one pop-culture news site on the web.</p>
<p class="contentstyle">Although we are a new fledgling site we hope to grow quickly and establish a quality which readers can trust, for which we need your help to establish what our audience would like us to do with the future of the site all we need you to do is one simple thing, provide us with as much feedback as possible by searching this page you can find our contact details and hopefully you'll tell us what you think and we can improve the experience for everyone! Thank you.</p>
<table>
  <tr>
    <th>Staff</th>
    <th>Position</th>
    <th>Contact</th>
  </tr>
  <tr>
    <td>Kieran Stack</td>
    <td>Web Admin</td>
    <td><a href= "mailto:kieran.stack@students.itttralee.ie">kieran.stack@students.itttralee.ie</a></td>
  </tr>
  <tr>
    <td>Stephen Stack</td>
    <td>Senior Editor</td>
    <td><a href="mailto:stephen.stack@students.itttralee.ie">stephen.stack@students.itttralee.ie</a></td>
  </tr>
</table>

<?php
if(isset($_POST['custid']))
  try { 
  $pdo = new PDO('mysql:host=localhost;dbname=CinemaSYS; charset=utf8', 'root', ''); 
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql="SELECT count(*) FROM customer WHERE custid=:cid";
  $result = $pdo->prepare($sql);
  $result->bindValue(':cid', $_POST['custid']); 
  $result->execute();
    if($result->fetchColumn() > 0) {
      $sql = 'SELECT * FROM customer where custid = :cid';
      $result = $pdo->prepare($sql);
      $result->bindValue(':cid', $_POST['custid']); 
      $result->execute();
      $row = $result->fetch() ;
      $id = $row['custid'];
	    $firstname= $row['firstname'];
	    $surname=$row['surname'];
      $username=$row['username'];
      $password=$row['password'];
      $amount=$row['amount'];
    }else{
      print "No rows matched the query. try again click<a href='selectupdate.php'> here</a> to go back";
    }
  }catch (PDOException $e) { 
    $output = 'Unable to connect to the database server: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine(); 
  }
?>
<form action="updated.php" method="post">
      <fieldset> 
       <legend><h2>Update Account</h2></legend> 
        <input type="hidden" name="ud_id" value="<?php echo $id; ?>">
        First Name: <input type="text" name="ud_name" value="<?php if (isset($firstname)) echo $firstname; ?>"><br />
        Surname: <input type="text" name="ud_surname" value="<?php if (isset($surname))echo $surname; ?>"><br />
        Username: <input type="text" name="ud_username" value="<?php if (isset($username))echo $username; ?>"><br />
        Password: <input type="text" name="ud_password" value="<?php if (isset($password))echo $password; ?>"><br />
        Amount: <input type="text" name="ud_amount" value="<?php if (isset($amount))echo $amount; ?>"><br />
        <input type="Submit" value="Update" name="update">
      </fieldset>
</form>          
</div>
<!-- End of Content Div -->
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
  </body>
</html>