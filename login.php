<?php
include 'header.html';

echo "</div>";
  $_POST['H1'];
        
echo "<form action='displayMovies.php' method='post'>
        <fieldset>
        <legend><h2>Login</h2></legend>
        <input type='text' name='username' placeholder='Enter your username' required>
        <input type='password' name='password' placeholder='Enter your password' required>
        <input type='hidden' name='".$_POST['H1']."' value='".$_POST['H1']."'>
        <input type='hidden' name='H2' value='".$_POST['H1']."'> 
        <input type='Submit' name='Submit' value='Submit'>
        </fieldset> 
      </form>";
echo "</div>"; 

include 'footer.html';
?>