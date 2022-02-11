<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Maak je eigen pizza</title>
  </head>
  <body>

  <div class="container">
        <h1 class="text-center mt-2">Maak je eigen pizza</h1>

        <form class="mt-5" action="create.php" method="post">
            <!-- Bodem Formaat -->
            <div class="input-group">
                <h5 class="col-12 my-3">BodemFormaat</h5>
                <select class="form-select" id="inputGroupBodemFormaat" name="bodemformaat">
                    <option selected>Maak je keuze</option>
                    <option value="40">40 cm</option>
                    <option value="35">35 cm</option>
                    <option value="30">30 cm</option>
                    <option value="25">25 cm</option>
                    <option value="20">20 cm</option>
                </select>
            </div>  

            <!-- Saus -->
            <div class="input-group">
                <h5 class="col-12 my-3">Saus</h5>
                <select class="form-select" id="inputGroupSaus" name="inputGroupSaus">
                    <option selected>Maak je keuze</option>
                    <option value="tomatensaus">Tomatensaus</option>
                    <option value="extratomatensaus">Extra Tomatensaus</option>
                    <option value="spicytomatensaus">Spicy Tomatensaus</option>
                    <option value="bbqsaus">BBQ Saus</option>
                    <option value="cremefraiche">Creme fraiche</option>
                </select>
            </div>  

            <!-- Pizza Topping -->
            <h5 class="col-12 my-3">Pizzatoppings</h5>
               
            <div class="form-check">
                <input class="form-check-input"  name="topping" type="radio" value="vegan" id="vegan">
                <label class="form-check-label" for="flexRadioDefault1">
                    vegan
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input"  name="topping" type="radio" value="vegetarisch" id="vegetarisch">
                <label class="form-check-label" for="flexRadioDefault2">
                    vegetarisch
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input"  name="topping" type="radio" value="vlees" id="vlees">
                <label class="form-check-label" for="flexRadioDefault3">
                    vlees
                </label>
            </div>

            <!-- Kruiden -->
            <h5 class="col-12 my-3">Kruiden</h5>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="peterselie" name="kruiden" id="peterselie">
                <label class="form-check-label" for="flexCheckDefault">
                    Peterselie
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="kruiden" value="oregano" id="oregano">
                <label class="form-check-label" for="flexCheckChecked">
                    Oregano
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="kruiden" value="chiliflakes" id="chiliflakes">
                <label class="form-check-label" for="flexCheckChecked">
                    Chili Flakes
                </label>
            </div>
            
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="kruiden" value="zwartepeper" id="zwartepeper">
                <label class="form-check-label" for="flexCheckChecked">
                    Zwarte peper
                </label>
            </div>
          
            <button name="submit" type="submit" class="btn btn-primary my-3">Submit</button>
        </form>
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
