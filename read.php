<?php

    ob_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pdo_toets";

    try {

        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare("SELECT id, bodemformaat, saus, topping, kruiden FROM pizza");
        $stmt->execute();

        $result = $stmt->setFetchMode(PDO::FETCH_OBJ);

        $tableRow = "";
        foreach ($stmt->fetchAll() as $key=>$value) {
            $tableRow .= "<tr> 
                            <td>$value->id</td>
                            <td>$value->bodemformaat</td>
                            <td>$value->saus</td>
                            <td>$value->topping</td>
                            <td>$value->kruiden</td>
                            <td><a href='./update.php?id=$value->id'><i class='fa-solid fa-pencil'></i></a></td>
                            <td> <a href='./delete.php?id=$value->id'> <i class='fa-solid fa-ban'></i> </a> </td>
                            <td><a href='http://nu.nl'>test</a></td>
                        </tr>";
        }
    } 
    catch(PDOException $e) {
        echo $e->getMessage();
        header("Location: ./index.php");   
    }
    $conn = null;

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous">
    <title>Maak je eigen Pizza</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-3">
                <table class="table my-5">
                    <thead>
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Formaat</th>
                        <th scope="col">Saus</th>
                        <th scope="col">Kruiden</th>
                        <th scope="col">Update</th>
                        <th scope="col">Delete</th>
                        </tr>
                    </thead>
                <tbody>
                    <?php echo $tableRow; ?>
                </tbody>
                </table>
            </div>
            <div class="col-3">
                <a href="http://nu.nl">test</a>
            </div
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>