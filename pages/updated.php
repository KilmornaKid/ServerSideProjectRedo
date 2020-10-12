<?php
if(isset($_POST['update'])){
    try { 
        $pdo = new PDO('mysql:host=localhost;dbname=CinemaSYS; charset=utf8', 'root', ''); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = 'update customer set firstname =:cfirstname,surname =:csurname,username =:cusername,password =:cpassword,amount =:camount WHERE custid = :cid';
        $result = $pdo->prepare($sql);
        $result->bindValue(':cid', $_POST['ud_id']); 
        $result->bindValue(':cfirstname', $_POST['ud_firstname']); 
        $result->bindValue(':csurname', $_POST['ud_surname']);
        $result->bindValue(':cusername', $_POST['ud_username']);
        $result->bindValue(':cpassword', $_POST['ud_password']); 
        $result->bindValue(':camount', $_POST['ud_amount']);
        $result->execute();    
        $count = $result->rowCount();
            if ($count > 0){
                echo "You just updated customer no: " . $_POST['ud_id'] ."  click<a href='selectupdate.php'> here</a> to go back ";
            }else{
                echo "nothing updated";
            }
    }catch (PDOException $e) { 
        $output = 'Unable to process query sorry : ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine(); 
    }
}
?>