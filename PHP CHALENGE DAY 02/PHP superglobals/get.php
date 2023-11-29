<!-- $_GET

is a PHP super global variable which is used to collect form data after submiting an HTML form with method="get"-->
<!-- $_GET can also collect data sent in the URL. -->

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET global variable</title>
</head>
<body>
    <a href="?subject=PHP&web=localhost">Test $_GET</a>

<?php
echo "<br>";
 echo "Study ". "  ". $_GET['subject'] . " at ". "  ". $_GET['web'];
?>
</body>
</html>