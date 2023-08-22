<!doctype html>
<html>
    <head>
        <title>Book-O-Rama Search Results</title>
        <meta charset="utf-8" />
    </head>
    <body>
	<div>
        <h1 >Book-O-Rama Search Results</h1>
        <?php
        $searchtype = $_POST['searchtype'];
        $searchterm = trim($_POST['searchterm']);

        if(!$searchtype || !$searchterm){
            echo '<p>You have not entered search details. <br />
                 Please go back and try again.</p>';
            exit;
            }
	 
        switch ($searchtype){
                case 'Title':
                case 'Author':
                case 'ISBN':
                    break;
                default:
                   echo '<p>That is not a volid search type. <br />
                        Please go back and try again. </p>';
                exit;
                }

        $db = new mysqli('127.0.0.1', 'cyq', 'cyq1980112');
        if(mysqli_connect_errno()){
            echo '<p>Error:Could not connect to database.<br />
                 Please try again later. </p>';
            exit;
            }
        else{
            echo '<p>mysql sucess. </p>';
            
            }

        $db->select_db('books');
        $query = "select isbn, author,title,price
                  from books where $searchtype=?";


        $stmt = $db->prepare($query);
        $stmt->bind_param('s',$searchterm);
        $stmt->execute();
        $stmt->store_result();

        $stmt->bind_result($isbn,$author,$title,$price);

        echo "<p>Number of books found:" . $stmt->num_rows."</p>";

        while($stmt->fetch()){
            echo "<P><strong>Title:".$title."</strong>";
            echo "<br />Author:".$author;
            echo "<br />ISBN:".$isbn;
            echo "<br />Price:\$".number_format($price,2)."</p>";
            }

        $stmt->free_result();
        $db->close();
        ?>
	</div>
    </body>
</html>
