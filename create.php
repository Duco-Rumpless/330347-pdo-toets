<?php

    ob_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pdo_toets";

    try {

        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if(isset($_POST["submit"])) {

            $stmt = $conn->prepare("INSERT INTO pizza (id, bodemformaat, saus, topping, kruiden) 
            VALUES (:id, :bodemformaat, :saus, :topping, :kruiden)");
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':bodemformaat', $bodemformaat);
            $stmt->bindParam(':saus', $saus);
            $stmt->bindParam(':topping', $topping);
            $stmt->bindParam(':kruiden', $kruiden);

            //  Insert Row

            $id = NULL;
            $bodemformaat = $_POST["bodemformaat"];
            $saus = $_POST["inputGroupSaus"];
            $topping = $_POST["topping"];
            $kruiden = $_POST["kruiden"];

            $stmt->execute();
            header("Location: ./read.php");
        }
        
    }
    catch(PDOException $e) {
        echo $e->getMessage();
        header("Location: ./index.php");   
    }
    $conn = null;
?>