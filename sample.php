<?php

try{

    $myPDO= new PDO("pgsql:host=localhost;dbname=HMS","postgres", "admin");
    echo "connect postgresSql with php";
}catch (PDOException $e){
    echo $e->getMessage();
}
