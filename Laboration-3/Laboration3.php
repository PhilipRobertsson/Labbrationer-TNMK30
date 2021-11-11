<!DOCTYPE html>

<head>
    <meta name='Author' content='Max Wiklundh & Philip Robertsson'>
    <meta name='Description' content='Laboration 1'>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laboration 2</title>
    <link rel="stylesheet" media="screen" href="styles.css" type="text/css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">

    <script src="scripts.js"></script>
</head>

<body>
    <?php include("blog.txt");    ?>

    <?php
    echo "My first PHP script!";
    ?>


    <?php
    $author    =    $_POST['author'];            //	Namnet	på	formulärfälten	bestäms												
    $heading    =    $_POST['heading'];    //	med	attribut	i	HTML-koden för	formuläret				
    $entry    =    $_POST['entry'];
    print("<h1>$heading</h1>\n");
    print("<p><em>$author</em></p>\n");
    print("<p>$entry</p>\n");
    ?>
</body>