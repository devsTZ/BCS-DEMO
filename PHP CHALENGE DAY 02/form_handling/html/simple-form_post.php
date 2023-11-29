<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple HTML Form</title>
</head>
<body>
<!-- Form with the post mehtod -->
    <form action="../php/simple_form_post.php" method="post">
        Name: <br>  <input type="text" name="name">
        <br>
        E-mail: <br> <input type="email" name="email">
        <br><br>
        <input type="submit" name="submit" value="submit">

    </form>

    
</body>
</html>