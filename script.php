<?php
    session_start();
    if(!isset($_SESSION['parole'])){
      $_SESSION['parole'] = 0;
    }
    if(!isset($_SESSION['caratteri'])){
      $_SESSION['caratteri'] = 0;
    }
    if(!isset($_SESSION['frasiImportanti'])){
      $_SESSION['frasiImportanti'] = array();
    }
    if($_GET['importanza'] == 4){
      array_push($_SESSION['frasiImportanti'], $_GET['frase']);
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="text-center">
        <?php
            $_SESSION['parole'] += str_word_count($_GET['frase']);
            $_SESSION['caratteri'] += strlen($_GET['frase']);
            echo "<p> farse inviata: " . $_GET['frase'] . "</p>";
            echo "<p> importanza della frase: " . $_GET['importanza'] . "</p>";
        ?>
        <a href="frase.html" class="text-center">pagina iniziale</a>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>