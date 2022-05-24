<?php
/*
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);
*/
include "bionicReaderClass.php";
$bw = new BionicReader();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Bionic Reader Class PHP</title>
  </head>
  <body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Bionic Reader Class PHP</h1>
                <p>Note: this project only for fun.</p>
            </div>
            <div class="col-lg-12">
                <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="mb-3">
                        <label for="text" class="form-label">Paste Your Text Here</label>
                        <textarea class="form-control" id="text" name="text" rows="10" required></textarea>
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-success btn-lg">Convert</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php 

    if ($_POST) {
        echo '<div class="container mt-2">
              <div class="row">
              <div class="col-lg-12">';
        echo '<hr>';
        if (!empty($_POST["text"])) {
            echo $test = $bw->initWords($_POST["text"]);
        } else {
             echo '<h1 class="alert alert-danger text-center">Please type your text !</h1>';
        }
        echo "<hr>";
        echo '</div>
              </div>
              </div>';
    }

    ?>

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

