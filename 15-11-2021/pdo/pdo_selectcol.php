<?php
    try{
        $pdo = new PDO("mysql:host=localhost;dbname=school1","root","");
        $id=1;
        $sql = "select * from student where id=:id";
        $query = $pdo->prepare($sql);
        $query->bindParam(':id', $id, PDO::PARAM_STR);
        $query->execute();
        $query->setFetchMode(PDO::FETCH_ASSOC);
        while($row=$query->fetch()){
            echo $row['id']." ".$row['name']." ".$row['email']." ".$row['phone']." ".$row['address']." ".$row['password']; 
        }
    }catch(PDOException $e){
        die("faile to connect to database :". $e->message());
    }

?>