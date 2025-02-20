<?php

// Get API URL
$quotes_url = "https://www.quoterism.com/api/quotes/random";

//Use Curl to convert from JSON to PHP Array
$curl_init = curl_init($quotes_url);
curl_setopt($curl_init, CURLOPT_RETURNTRANSFER, true);
$curl_start = curl_exec($curl_init);

//Recieve data and convert to PHP Array
$quote_data = json_decode($curl_start, true);
curl_close($curl_init);

// print_r($quote_data);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Random Quotes</title>
  <link rel="shortcut icon" href="icon.svg" type="image/x-icon">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <style>
      @import url('https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap');

      html {
      font-family: "Work Sans", sans-serif;  
      }
  </style>
</head>
<body>
  <section class="section">
    <div class="container">
      <h1 class="center-align materialize-red-text hide-on-med-and-down">Random Quotes</h1>
      <h4 class="center-align materialize-red-text hide-on-large-only">Random Quotes</h4>
      <br>
      <div class="row valign-wrapper hide-on-med-and-down">
        <div class="col s4 l4">
          <img class="responsive-img z-depth-2" src="https://www.quoterism.com/_next/image?url=https%3A%2F%2Fyzy99glmwjfzbbpt.public.blob.vercel-storage.com%2Fassets%2Fimages%2Fauthors%2F<?php echo $quote_data['author']['id'] ?>.jpg&w=384&q=75" alt="<?php echo $quote_data['author']['name'] ?>">
        </div>
        <div class="col s8 l8">
          <blockquote>
            <p class="flow-text"><?php echo $quote_data['text'] ?> <br> - <?php echo $quote_data['author']['name'] ?></p>
          </blockquote>
        </div>
      </div>
      <div class="row hide-on-large-only">
        <div class="col s12 l4">
          <img class="responsive-img z-depth-2" src="https://www.quoterism.com/_next/image?url=https%3A%2F%2Fyzy99glmwjfzbbpt.public.blob.vercel-storage.com%2Fassets%2Fimages%2Fauthors%2F<?php echo $quote_data['author']['id'] ?>.jpg&w=384&q=75" alt="<?php echo $quote_data['author']['name'] ?>">
        </div>
        <div class="col s12 l8">
          <blockquote>
            <p class="flow-text"><?php echo $quote_data['text'] ?> <br> - <?php echo $quote_data['author']['name'] ?></p>
          </blockquote>
        </div>
      </div>
      <div class="container center-align">
        <a href="index.php" class="btn btn-large materialize-red">GENERATE ANOTHER</a>
      </div>
    </div>
  </section>
  <section class="section container">
    <div class="container center-align">
      <span>Built With <a class="materialize-red-text" href="https://materializecss.com">Materialize CSS</a> and <a class="materialize-red-text" href="https://www.quoterism.com/">Quoterism's API.</a></span>
    </div>
  </section>
    <!-- JQuery v3.7.1 -->
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
    </script>
</body>
</html>