<!doctype html>
<html>
  <head>
    <title>Search-Results</title>
    <meta charset="utf-8" />
  </head>
  <body>
    <h1>Book-O-Rama Search Results</h1>

    <?php
    $searchtype = $_POST['searchtype'];
    $searchitem = $_POST['searchitem'];
   

    if(!$searchtype || !$searchitem){
      echo '<p>You have not entered search details.<br />
      Please go back and tyr again.</p>';
      exit;
    }
    switch ($searchtype){
      case 'author':
      case 'title':
      case 'isbn':
        break;
      default:
        echo '<p>That is not a valid search type.<br/>
        Please go back and try again.</p>';
        exit;
    }

    $db = new mysqli('127.0.0.1','root','Cyq1980112');
    if(mysqli_connect_errno()){
      echo '<p>Error: Coule not connect to database.<br/>
      Please try again later.</p>';
      exit;
    }
    else
      echo '链接成功！';
    ?>
  </body>
</html>
