
<?php

//read.php

$feed_url = "http://localhost/webApplicationProject/feedforall.xml";

//https://www.feedforall.com/sample.xml
$object = new DOMDocument();

$object->load($feed_url);

$content = $object->getElementsByTagName("item");


?>

<!DOCTYPE html>
<html>
 <head>
  <title>Read RSS Feed in PHP</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 </head>
 <body>
  <div class="container">
   <br />
   <h2 align="center">Read RSS Feed in PHP</h2>
   <br />

   <button type="button" class="btn btn-secondary"  onclick="location.href = 'rsswrite.php';">RSS Feed Data add to MongoDB</button>

   <?php
    
   foreach($content as $row)
   {

    echo '<div class="card" style="width: 400px;"> ';
    echo '<div class="card-body">';
    echo          '<h5 class="card-title" style="font-size: 36px;">' . $row->getElementsByTagName("title")->item(0)->nodeValue . '</h5>';
    echo           '<p class="card-text"> ' . $row->getElementsByTagName("description")->item(0)->nodeValue . ' </p> ';
    echo           '<p class="card-text"> ' . $row->getElementsByTagName("category")->item(0)->nodeValue . ' </p> ';
    echo           '<p class="card-text"> ' . $row->getElementsByTagName("pubDate")->item(0)->nodeValue . ' </p> ';
    echo           '<a href="' . $row->getElementsByTagName("link")->item(0)->nodeValue . ' " class="btn btn-primary">Link</a>';
    echo        '</div>
    </div>';
    
   }

   ?>
  </div>
 </body>
</html>
