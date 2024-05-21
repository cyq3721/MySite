<!doctype html>
<html>
    <head>
	<title>Book-O-Rama Search Results</title>
	<meta charset="utf-8" />
    </head>
    <body>
	<div align ="center">
	    <h1>Book-O-Rama Search Results</h1>
	    <?php
	    $searchtype = $_POST['searchtype'];
	    $searchterm = trim($_POST['searchterm']);

	    echo $searchtype;
	    echo '<br />';
	    echo $searchterm;
	    echo '<br />';

	    if( !$searchterm || !$searchtype){
		echo '<p>You have not entered search details. <br />
                 Please go back and try again.</p>';
		exit;
            }

	    switch($searchtype){
		case 'Title':
		case 'Author':
		case 'ISBN':
		    break;
		default:
		    echo '<p> That is not a valid search type. <br />
		            Please ao back and try again. </p>';
		    exit; 
	    }

	    $db = new mysqli('localhost', 'root', 'cyq1980112', 'bookorama');
	    if(mysqli_connect_errno()){
		echo '<p>Error:  Could not connect to database. <br />
		        Please try again later.</p>';
	    }
	    ?>
	</div>
    </body>
</html>
