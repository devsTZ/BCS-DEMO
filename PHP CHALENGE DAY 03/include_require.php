<!-- PHP include and require Statements 
it is possible to insert the content of one PHP file into aanother PHP file (before the server execute it)
with the include or require statement-->

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP include Page</title>
</head>
<body>

<?php require "./include//header.php" ?>

    <h1>Welcome to my Home Page!</h1>
    <p>Some more text...</p>

    <?php include "./include/footer.php" ?>
   
</body>
</html>

<!-- Note 
The require statement is also used to include a file into PHP code
However there is on big different between include and require

... whent php cannot find the include statement the script will continue to execute.

.. when the php cannot find the required statement the script will return fatl error
-->