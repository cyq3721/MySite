<!doctype html>
<html>
    <head>
	<title>Book-O-Rama Search Results</title>
	<meta charset="utf-8" />
    </head>
    <body>
	<div align="center">
	    <h1>Book-O-Rama search Results</h1>

	    <?php
	    $searchtype = $_POST['searchtype'];
	    $searchterm = trim($_POST['searchterm']);

	    if(!$searchtype || !$searchterm){
		echo '<p>You have not entered search details. <br />
		      Please go back and try again. </p>';
	    }
	    ?>
	</div>
    </body>
</html>
