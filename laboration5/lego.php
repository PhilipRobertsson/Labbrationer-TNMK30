<!DOCTYPE html>

<head>
    <meta name='Author' content='Max Wiklundh & Philip Robertsson'>
    <meta name='Description' content='Laboration 5'>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laboration 3</title>
    <link rel="stylesheet" media="screen" href="styles.css" type="text/css">

    <script src="scripts.js"></script>
</head>
<body>
    <?php
        $connection = mysqli_connect("mysql.itn.liu.se","lego","","lego");
        if(!$connection){
            die('MySQL connection error');
        }

        $sql_query = "SELECT * FROM phiro138 ORDER BY entry_date DESC LIMIT 20";

        if($_SERVER['REQUEST_METHOD'] === 'POST'){

        }

        $result = mysqli_query($connection, $sql_query);

        while ($row = mysqli_fetch_array($result)){



            /*
            $heading = $row['entry_heading'];
            print("<h3>$heading</h3>");
            $author =$row['entry_author'];
            $date = $row['entry_date'];
            print("<p>$author</p>");
            print("<small>$date</small>");
            $text = $row['entry_text'];
            print("<p>$text</p>");
            print("<hr/>");
            */
        }// end while
        mysqli_close($connection);
    ?>
</body>